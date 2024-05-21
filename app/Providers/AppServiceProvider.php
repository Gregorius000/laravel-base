<?php

namespace App\Providers;

use App\Interfaces\ProcessTransactionInterface;
use App\Repository\ProcessTransactionRepository;
use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        $nama_perusahaan = "MIKTI";

        View::share('nama_perusahaan', $nama_perusahaan);
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        $this->app->bind(ProcessTransactionInterface::class, ProcessTransactionRepository::class);
    }
}
