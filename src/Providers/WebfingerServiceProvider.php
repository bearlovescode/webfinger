<?php
    namespace Bearlovescode\Webfinger\Providers;

    use Illuminate\Support\ServiceProvider;

    class WebfingerServiceProvider extends ServiceProvider
    {
        public function register() {

        }

        public function boot() {
            $route = __DIR__ . '../../../routes/web.php';
            $this->loadRoutesFrom(__DIR__ . '');
        }
    }