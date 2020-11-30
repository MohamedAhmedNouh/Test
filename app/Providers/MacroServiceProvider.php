<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasOne;

class MacroServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    public $foreignKey = 'user_id';

    public $localKey = 'id';

    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        HasMany::macro('toHasOne', function(){
            return new HasOne(
                $this->getQuery(),
                $this->getParent(),
                $this->foreignKey,
                $this->localKey
            );
        });

    }

}
