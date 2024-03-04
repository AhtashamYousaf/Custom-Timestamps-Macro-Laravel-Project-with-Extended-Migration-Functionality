<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Database\Schema\Blueprint;
use App\Models\Category;
use Illuminate\Database\Eloquent\Builder;

class MacroServiceProvider extends ServiceProvider
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
        Blueprint::macro('customTimestamps', function () {
            $this->timestamp('created_at')->useCurrent();
            $this->timestamp('updated_at')->useCurrent()->nullable();
            $this->timestamp('added_at')->useCurrent()->nullable();
            // can add more column as per requirments
        });
        // Define the macro on the Builder class
        Builder::macro('thanks', function () {
            return function ($model) {
                return 'Thanks for visiting category ' . $model->name . '!';
            };
        });

        // // Eloquent model macros
        // Builder::macro('thanks', function () {
        //     return 'Thanks, for visiting category ' . $this->name . '!';
        // });
    }
}
