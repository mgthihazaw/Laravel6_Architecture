<?php

namespace App\Providers;

use App\Billing\CreditPaymentGateway;
use App\Billing\PaymentGateway;
use App\Billing\PaymentGatewayContact;
use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Schema;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        Schema::defaultStringLength(191);
        // $this->app->bind(PaymentGateway::class, function($app){
        //     return new PaymentGateway('USD');
        // });

        $this->app->singleton(PaymentGatewayContact::class, function($app){
           

            if(request()->has('credit')){
                return new CreditPaymentGateway('USD');
            }
            return new PaymentGateway('USD');
        });
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }
}
