<?php

use App\Models\Order;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\ProfileController;

/*
|--------------------------------------------------------------------------
| PUBLIC ROUTES
|--------------------------------------------------------------------------
*/

Route::get('/', function () {

    return view('welcome');

});

/*
|--------------------------------------------------------------------------
| CUSTOMER TRACKING
|--------------------------------------------------------------------------
*/

Route::get('/track-order', function () {

    $order = Order::where(
        'customer_number',
        request('customer_number')
    )
    ->where(
        'invoice_number',
        request('invoice_number')
    )
    ->where(
        'is_deleted',
        false
    )
    ->first();

    return view('track-order', compact('order'));

});

/*
|--------------------------------------------------------------------------
| DASHBOARD
|--------------------------------------------------------------------------
*/

Route::get('/dashboard', function () {

    return view('dashboard');

})->middleware(['auth'])->name('dashboard');

/*
|--------------------------------------------------------------------------
| AUTHENTICATED ROUTES
|--------------------------------------------------------------------------
*/

Route::middleware(['auth'])->group(function () {

    /*
    |--------------------------------------------------------------------------
    | ORDERS CRUD
    |--------------------------------------------------------------------------
    */

    Route::resource('orders', OrderController::class);

    /*
    |--------------------------------------------------------------------------
    | ARCHIVED ORDERS
    |--------------------------------------------------------------------------
    */

    Route::get('/archived-orders', function () {

        $orders = Order::where(
            'is_deleted',
            true
        )->get();

        return view(
            'orders.archived',
            compact('orders')
        );

    });

    /*
    |--------------------------------------------------------------------------
    | RESTORE ORDER
    |--------------------------------------------------------------------------
    */

    Route::put('/restore-order/{id}', function ($id) {

        $order = Order::find($id);

        $order->update([
            'is_deleted' => false
        ]);

        return redirect('/archived-orders')->with(
            'success',
            'Order restored successfully'
        );

    });

    /*
    |--------------------------------------------------------------------------
    | PROFILE
    |--------------------------------------------------------------------------
    */

    Route::get('/profile', [ProfileController::class, 'edit'])
        ->name('profile.edit');

    Route::patch('/profile', [ProfileController::class, 'update'])
        ->name('profile.update');

    Route::delete('/profile', [ProfileController::class, 'destroy'])
        ->name('profile.destroy');

});

/*
|--------------------------------------------------------------------------
| ADMIN ROUTES
|--------------------------------------------------------------------------
*/

Route::middleware(['auth', 'role:Admin'])->group(function(){

    Route::get('/users', function(){

        return view('users');

    });

});

/*
|--------------------------------------------------------------------------
| SALES ROUTES
|--------------------------------------------------------------------------
*/

Route::middleware(['auth', 'role:Sales'])->group(function(){

    Route::get('/sales-panel', function(){

        return view('sales');

    });

});

/*
|--------------------------------------------------------------------------
| WAREHOUSE ROUTES
|--------------------------------------------------------------------------
*/

Route::middleware(['auth', 'role:Warehouse'])->group(function(){

    Route::get('/warehouse-panel', function(){

        return view('warehouse');

    });

});

/*
|--------------------------------------------------------------------------
| ROUTE DEPARTMENT ROUTES
|--------------------------------------------------------------------------
*/

Route::middleware(['auth', 'role:Route'])->group(function(){

    Route::get('/route-panel', function(){

        return view('route');

    });

});

/*
|--------------------------------------------------------------------------
| AUTH
|--------------------------------------------------------------------------
*/

require __DIR__.'/auth.php';