<?php

namespace App\Providers;

use App\Interfaces\AuthRepositoryInterface;
use App\Interfaces\BookmarkRepositoryInterface;
use App\Interfaces\CategoryRepositoryInterface;
use App\Interfaces\ProgressRepositoryInterface;
use App\Interfaces\QuestionRepositoryInterface;
use App\Repositories\AuthRepository;
use App\Repositories\BookmarkRepository;
use App\Repositories\CategoryRepository;
use App\Repositories\ProgressRepository;
use App\Repositories\QuestionRepository;
use Illuminate\Support\Facades\URL;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        $this->app->bind(BookmarkRepositoryInterface::class, BookmarkRepository::class);
        $this->app->bind(CategoryRepositoryInterface::class, CategoryRepository::class);
        $this->app->bind(ProgressRepositoryInterface::class, ProgressRepository::class);
        $this->app->bind(QuestionRepositoryInterface::class, QuestionRepository::class);
        $this->app->bind(AuthRepositoryInterface::class, AuthRepository::class);

    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        if($this->app->environment('production')) {
            URL::forceScheme('https');
        }
    }
}
