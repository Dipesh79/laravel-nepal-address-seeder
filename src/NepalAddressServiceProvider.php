<?php

namespace Dipesh79\LaravelNepalAddressSeeder;


use Illuminate\Support\Facades\Schema;
use Illuminate\Support\ServiceProvider;

class NepalAddressServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap services.
     */
    public function boot(): void
    {
        if ($this->app->runningInConsole()) {
            $this->commands([
                \bootstrap\LaravelNepalAddressSeeder\src\Commands\SeedAddressCommand::class,
            ]);
        }
        if (method_exists($this, 'publishes')) {
            if (!Schema::hasTable('provinces')) {
                $this->publishes([
                    __DIR__ . '/../databases/migrations/create_provinces_table.php.stub' => database_path('migrations/' . date('Y_m_d_His',
                            time()) . '_create_provinces_table.php'),
                ], 'migrations');
            }
            if (!Schema::hasTable('districts')) {
                $this->publishes([
                    __DIR__ . '/../databases/migrations/create_districts_table.php.stub' => database_path('migrations/' . date('Y_m_d_His',
                            time()) . '_create_districts_table.php'),
                ], 'migrations');
            }
            if (!Schema::hasTable('local_levels')) {
                $this->publishes([
                    __DIR__ . '/../databases/migrations/create_local_levels_table.php.stub' => database_path('migrations/' . date('Y_m_d_His',
                            time()) . '_create_local_levels_table.php'),
                ], 'migrations');
            }
            $this->publishes([
                __DIR__ . '/config/nepal-address.php' => config_path('nepal-address.php'),
            ], 'config');
        }
    }
}
