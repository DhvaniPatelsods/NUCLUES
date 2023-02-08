<?php

namespace App\Providers;

use App\Models\User;
use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;
use Illuminate\Routing\Route;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Gate;

class AuthServiceProvider extends ServiceProvider
{
    /**
     * The policy mappings for the application.
     *
     * @var array<class-string, class-string>
     */
    protected $policies = [
        // 'App\Models\Model' => 'App\Policies\ModelPolicy',
    ];

    /**
     * Register any authentication / authorization services.
     *
     * @return void
     */
    public function boot()
    {
        $this->registerPolicies();

        
                //compose all the views....


                
                    // Web routes

                    view()->composer('*', function ($view) 
                    {

                        if(empty(Auth::user()->id)){
                            // view()->share(['user' => User::find(1)]);
                        } else {
                            view()->share(['user' => User::find(Auth::user()->id)]);  
                        }
                         
                    });  

                    
                


           

            // View::share(['user' => User::find(Auth::user()->id)]);
            
        
    }
}
