<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;


class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        $this->app->singleton(FakerGenerator::class,function(){
            return FackerFactory::create('zh_CN');
        });
        \App\Models\DrathProof::observe('\App\Observers\DrathProofObserver');
        \App\Models\WorkerProof::observe('\App\Observers\WorkerProofObserver');
        \App\Models\LetterProof::observe('\App\Observers\LetterProofObserver');
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
