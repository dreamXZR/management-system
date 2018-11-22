<?php

namespace App\Providers;

use Illuminate\Support\Facades\Gate;
use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;

class AuthServiceProvider extends ServiceProvider
{
    /**
     * The policy mappings for the application.
     *
     * @var array
     */
    protected $policies = [
		 \App\Models\AboveTable::class => \App\Policies\AboveTablePolicy::class,
		 \App\Models\WorkerProof::class => \App\Policies\WorkerProofPolicy::class,
		 \App\Models\RegisterTable::class => \App\Policies\RegisterTablePolicy::class,
		 \App\Models\LetterProof::class => \App\Policies\LetterProofPolicy::class,
		 \App\Models\DrathProof::class => \App\Policies\DrathProofPolicy::class,
        'App\Model' => 'App\Policies\ModelPolicy',
    ];

    /**
     * Register any authentication / authorization services.
     *
     * @return void
     */
    public function boot()
    {
        $this->registerPolicies();

        //
    }
}
