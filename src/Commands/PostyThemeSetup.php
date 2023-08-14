<?php

namespace Nadzorservera\Skijasi\Theme\PostyTheme\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Str;

class PostyThemeSetup extends Command
{
    protected $file;
    /**
     * The console command name.
     *
     * @var string
     */
    protected $name = 'skijasi-posty-theme:setup';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Setup Skijasi Posty Theme';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->file = app('files');
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return mixed
     */
    public function handle()
    {
        $this->updateWebpackMix();
        $this->updatePackageJson();
        $this->publishConfig();
        $this->addingSkijasiEnv();
    }

    protected function publishConfig()
    {
        Artisan::call('vendor:publish', ['--tag' => 'SkijasiPostyTheme']);

        $this->info('Skijasi posty theme provider published');
    }

    protected function checkExist($file, $search)
    {
        return $this->file->exists($file) && !Str::contains($this->file->get($file), $search);
    }

    protected function updateWebpackMix()
    {
        // mix
        $mix_file = base_path('webpack.mix.js');
        $search = 'Posty Theme';

        if ($this->checkExist($mix_file, $search)) {
            $data =
                <<<'EOT'

        // Posty Theme
        mix.js("vendor/skijasi/posty-theme/src/resources/app/app.js", "public/js/posty-theme.js")
            .sass("vendor/skijasi/posty-theme/src/resources/app/assets/scss/style.scss", "public/css/posty-theme.css")
            .vue();
        EOT;

            $this->file->append($mix_file, $data);
        }

        $this->info('webpack.mix.js updated');
    }

    protected function envListUpload()
    {
        return [
            'POSTY_THEME_PREFIX' => 'posty',
        ];
    }

    protected function addingSkijasiEnv()
    {
        try {
            $env_path = base_path('.env');

            $env_file = file_get_contents($env_path);
            $arr_env_file = explode("\n", $env_file);

            $env_will_adding = $this->envListUpload();

            $new_env_adding = [];
            foreach ($env_will_adding as $key_add_env => $val_add_env) {
                $status_adding = true;
                foreach ($arr_env_file as $key_env_file => $val_env_file) {
                    $val_env_file = trim($val_env_file);
                    if (substr($val_env_file, 0, 1) != '#' && $val_env_file != '' && strstr($val_env_file, $key_add_env)) {
                        $status_adding = false;
                        break;
                    }
                }
                if ($status_adding) {
                    $new_env_adding[] = "{$key_add_env}={$val_add_env}";
                }
            }

            foreach ($new_env_adding as $index_env_add => $val_env_add) {
                $arr_env_file[] = $val_env_add;
            }

            $env_file = join("\n", $arr_env_file);
            file_put_contents($env_path, $env_file);

            $this->info('Adding skijasi env');
        } catch (\Exception $e) {
            $this->error('Failed adding skijasi env '.$e->getMessage());
        }
    }

    protected function updatePackageJson()
    {
        $package_json = file_get_contents(base_path('package.json'));
        $decoded_json = json_decode($package_json, true);

        $decoded_json['dependencies']['@inertiajs/inertia'] = '^0.10.1';
        $decoded_json['dependencies']['@inertiajs/inertia-vue'] = '^0.7.2';
        $decoded_json['dependencies']['vue-mobile-detection'] = '^1.0.0';
        $decoded_json['dependencies']['vue-owl-carousel'] = '^2.0.3';
        $decoded_json['dependencies']['vue-clamp'] = '^0.3.2';

        $decoded_json['devDependencies']['vue-concise-slider'] = '^3.4.4';

        $encoded_json = json_encode($decoded_json, JSON_PRETTY_PRINT);
        file_put_contents(base_path('package.json'), $encoded_json);

        $this->info('package.json updated');
    }
}
