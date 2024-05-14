<?php
    namespace Bearlovescode\Webfinger\Providers;

    use Illuminate\Support\ServiceProvider;

    class WebfingerServiceProvider extends ServiceProvider
    {
        public function register() {

        }

        public function boot() {
            $this->loadRoutesFrom(__DIR__ . '/../../routes/web.php');
        }
    }