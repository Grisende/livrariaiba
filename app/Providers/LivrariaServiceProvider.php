<?php

namespace App\Providers;

use App\Domain\Repository\BaseRepository;
use App\Domain\Repository\BooksRepository;
use App\Domain\Repository\Contracts\BaseRepositoryInterface;
use App\Domain\Repository\Contracts\BooksRepositoryInterface;
use App\Domain\Repository\Contracts\OrdersRepositoryInterface;
use App\Domain\Repository\Contracts\PurchasesRepositoryInterface;
use App\Domain\Repository\Contracts\SellingsRepositoryInterface;
use App\Domain\Repository\OrdersRepository;
use App\Domain\Repository\PurchasesRepository;
use App\Domain\Repository\SellingsRepository;
use Illuminate\Support\ServiceProvider;

class LivrariaServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     */
    public function register(): void
    {
        $this->app->bind(BooksRepositoryInterface::class, BooksRepository::class);
        $this->app->bind(OrdersRepositoryInterface::class, OrdersRepository::class);
        $this->app->bind(PurchasesRepositoryInterface::class, PurchasesRepository::class);
        $this->app->bind(SellingsRepositoryInterface::class, SellingsRepository::class);
    }

    /**
     * Bootstrap services.
     */
    public function boot(): void
    {
        //
    }
}
