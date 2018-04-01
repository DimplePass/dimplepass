<?php

namespace App\Providers;

use App\Billing\PaymentGateway;
use App\Billing\StripePaymentGateway;
use App\PurchaseConfirmationNumberGenerator;
use App\RandomPurchaseConfirmationNumberGenerator;
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
        //
        setlocale(LC_MONETARY, 'en_US.UTF-8');
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind(StripePaymentGateway::class,function(){
            return new StripePaymentGateway(config('services.stripe.secret'));
        });

        $this->app->bind(PaymentGateway::class,StripePaymentGateway::class);
        $this->app->bind(PurchaseConfirmationNumberGenerator::class,RandomPurchaseConfirmationNumberGenerator::class);

        $this->app->alias('bugsnag.logger', \Illuminate\Contracts\Logging\Log::class);
        $this->app->alias('bugsnag.logger', \Psr\Log\LoggerInterface::class);

    }
}
