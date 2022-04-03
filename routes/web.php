<?php

use Illuminate\Foundation\Application;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;
use App\Http\Controllers\UsersController;
use Illuminate\Support\Facades\Request;
use App\Models\User;
use Illuminate\Http\Request as HttpRequest;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    if(Auth::check()){
        return Redirect::route('users');
    }else{
        return Inertia::render('Welcome', [
            'canLogin' => Route::has('login'),
            'canRegister' => Route::has('register'),
            'laravelVersion' => Application::VERSION,
            'phpVersion' => PHP_VERSION,
            'step' => session('step'),
        ]);
    }
});

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return Inertia::render('Dashboard', [
        'users' => User::query()
                ->when(Request::input('search'), function ($query, $search) {
                    $query->where('name', 'like', "%{$search}%");
                })
                ->paginate(10)
                ->withQueryString()
                ->through(fn($user) => [
                    'id' => $user->id,
                    'name' => $user->name,
                    'email' => $user->email,
                    'created_at' => $user->created_at,
                    'active_status' => $user->active_status
                ]),

        'filters' => Request::only(['search'])
    ]);
})->name('dashboard');

// Users

Route::get('users', [UsersController::class, 'index'])
    ->name('users')
    ->middleware(['auth:sanctum', 'verified']);

Route::get('users/create', [UsersController::class, 'create'])
    ->name('users.create')
    ->middleware('auth');

Route::post('users', [UsersController::class, 'store'])
    ->name('users.store')
    ->middleware('auth');

Route::get('users/{user}/edit', [UsersController::class, 'edit'])
    ->name('users.edit')
    ->middleware('auth');

Route::put('users/{user}', [UsersController::class, 'update'])
    ->name('users.update')
    ->middleware('auth');

Route::delete('users/{user}', [UsersController::class, 'destroy'])
    ->name('users.destroy')
    ->middleware('auth');

Route::put('users/{user}/restore', [UsersController::class, 'restore'])
    ->name('users.restore')
    ->middleware('auth');

Route::middleware(['auth:sanctum', 'verified'])->get('/pricing', function () {
    return Inertia::render('Pricing');
})->name('pricing');

Route::middleware(['auth:sanctum', 'verified'])->get('/checkout', function () {
    return Inertia::render('Checkout', [
        'name' => Auth::user()->name,
        'email' => Auth::user()->email,
        'intent' => auth()->user()->createSetupIntent(),
    ]);
})->name('checkout');

Route::middleware(['auth:sanctum', 'verified'])->post('/subscribe', function (HttpRequest $request) {
    // dd($request->all());
    auth()->user()->newSubscription('cashier', $request->plan)->create($request->paymentMethod);

    return Redirect::route('dashboard');
})->name('subscribe.post');

Route::get('/billing-portal', function (HttpRequest $request) {
    return $request->user()->redirectToBillingPortal(route('dashboard'));
});

Route::middleware(['auth:sanctum', 'verified'])->get('user/profile/step1', function () {
    return Inertia::render('Profile/StepOne');
})->name('profile.step1');