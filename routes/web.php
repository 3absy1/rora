<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CallController;
use App\Http\Controllers\CallRequestController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PlansController;
use App\Http\Controllers\ClientController;
use App\Http\Controllers\OrdersController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ReviewsController;
use App\Http\Controllers\SimsCardController;
use App\Http\Controllers\ClientPaymentController;
use App\Http\Controllers\PaymentMethodController;
use App\Http\Controllers\RecharagecardController;
use App\Http\Controllers\SubscribtionsController;
use App\Http\Controllers\RecharageRequestController;
use App\Http\Controllers\CreditTransactionController;
use App\Models\CallRequest;



// Route::get('/dashboard', function () {
//     return view('dashboard');
// })->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {

    Route::get('/', function () {
        return view('welcome');
    });

    Route::get('/dashboard', [HomeController::class, 'index'])->name('dashboard');

                    // Client
    Route::get('/clients', [ClientController::class, 'index'])->name('clients');
    Route::put('/clients/{client}', [ClientController::class, 'update'])->name('clients.update');
    Route::delete('/clients/{id}', [ClientController::class, 'delete'])->name('clients.delete');

                    // SimCard
    Route::get('/simscard', [SimsCardController::class, 'index'])->name('simscard');
    Route::get('/simscard/create', [SimsCardController::class, 'create'])->name('simscard.create');
    Route::put('/simscard/{simcard}', [SimsCardController::class, 'update'])->name('simscard.update');
    Route::delete('/simscard/{id}', [SimsCardController::class, 'delete'])->name('simscard.delete');

                    // Plan
    Route::get('/plan', [PlansController::class, 'index'])->name('plan');
    Route::get('/plan/create', [PlansController::class, 'create'])->name('plan.create');
    Route::put('/plan/{plan}', [PlansController::class, 'update'])->name('plan.update');
    Route::delete('/plan/{id}', [PlansController::class, 'delete'])->name('plan.delete');


                   // Review
    Route::get('/reviews', [ReviewsController::class, 'index'])->name('reviews');
    Route::put('/reviews/{review}', [ReviewsController::class, 'update'])->name('reviews.update');
    Route::delete('/reviews/{id}', [ReviewsController::class, 'delete'])->name('reviews.delete');


                    // Subscribtions
    Route::get('/subscribtions', [SubscribtionsController::class, 'index'])->name('subscribtions');
    Route::put('/subscribtions/{subscribtion}', [SubscribtionsController::class, 'update'])->name('subscribtions.update');
    Route::delete('/subscribtions/{id}', [SubscribtionsController::class, 'delete'])->name('subscribtions.delete');

                    // Order
    Route::get('/orders', [OrdersController::class, 'index'])->name('orders');
    Route::put('/orders/{order}', [OrdersController::class, 'update'])->name('orders.update');
    Route::delete('/orders/{id}', [OrdersController::class, 'delete'])->name('orders.delete');

                    // Recharage Card
    Route::get('/recharagecards', [RecharagecardController::class, 'index'])->name('recharagecards');
    Route::get('/recharagecards/create', [RecharagecardController::class, 'create'])->name('recharagecards.create');
    Route::put('/recharagecards/{recharagecards}', [RecharagecardController::class, 'update'])->name('recharagecards.update');
    Route::delete('/recharagecards/{id}', [RecharagecardController::class, 'delete'])->name('recharagecards.delete');


                // Call
    Route::get('/calls', [CallController::class, 'index'])->name('calls');
    Route::put('/calls/{calls}', [CallController::class, 'update'])->name('calls.update');
    Route::delete('/calls/{id}', [CallController::class, 'delete'])->name('calls.delete');


            // Call Requests
    Route::get('/callRequests', [CallRequestController::class, 'index'])->name('callRequests');
    Route::put('/callRequests/{calRequests}', [CallRequestController::class, 'update'])->name('callRequests.update');
    Route::delete('/callRequests/{id}', [CallRequestController::class, 'delete'])->name('callRequests.delete');


             // Payment Method
    Route::get('/paymentMethod', [PaymentMethodController::class, 'index'])->name('paymentMethod');
    Route::put('/paymentMethod/{paymentMethod}', [PaymentMethodController::class, 'update'])->name('paymentMethod.update');
    Route::delete('/paymentMethod/{id}', [PaymentMethodController::class, 'delete'])->name('paymentMethod.delete');

                //Recharage Requests
    Route::get('/recharageRequests', [RecharageRequestController::class, 'index'])->name('recharageRequests');
    Route::put('/recharageRequests/{recharageRequest}', [RecharageRequestController::class, 'update'])->name('recharageRequests.update');
    Route::delete('/recharageRequests/{id}', [RecharageRequestController::class, 'delete'])->name('recharageRequests.delete');

                // Credit Transactions
    Route::get('/creditTransactions', [CreditTransactionController::class, 'index'])->name('creditTransactions');
    Route::put('/creditTransactions/{creditTransaction}', [CreditTransactionController::class, 'update'])->name('creditTransactions.update');
    Route::delete('/creditTransactions/{id}', [CreditTransactionController::class, 'delete'])->name('creditTransactions.delete');


    Route::get('/clientPayment', [ClientPaymentController::class, 'index'])->name('clientPayment');
    Route::put('/clientPayment/{clientPayment}', [ClientPaymentController::class, 'update'])->name('clientPayment.update');
    Route::delete('/clientPayment/{id}', [ClientPaymentController::class, 'delete'])->name('clientPayment.delete');

    // Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    // Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    // Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

});

require __DIR__.'/auth.php';
