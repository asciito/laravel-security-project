<?php

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

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
    return view('welcome', [
        'login' => Route::has('login'),
        'register' => Route::has('register'),
    ]);
})->name('dashboard');


Route::middleware('guest')->group(function() {
    /**
    * Login view
    */
    Route::get('/login', function() {
        return view('auth.index');
    })->name('login');

    /**
     * Handle the authentication attemp
     */
    Route::post('/login', function(Request $request) {
        $credentials = $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);

        $remember = $request->validate(['remember_token' => 'boolean']);

        if (Auth::attempt($credentials, $remember)) {
            $request->session()->regenerate();

            return redirect()->intended('/');
        }

        return back()->withErrors([ 'email' => 'The provided credentials do not match out records.' ]);
    })->name('login_attempt');

    /**
     * Register View
     */
    Route::get('/register', function() {
        return view('register');
    })->name('register');

    /**
     * Logic to register a new user
     */
    Route::post('/register', function(Request $request) {
        $credentials = $request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:users,email',
            'password' => 'required'
        ]);

        User::create(array_merge($credentials, [
            'password' => bcrypt($credentials['password'])
        ])); 

        session()->flash('message', 'You successfully create an Account!');

        return redirect()->route('login'); 
    })->name('register_user');
});

Route::post('/logout', function(Request $request) {
    // Manually logut the current auth user
    Auth::logout();

    // Invalidate the session ID and regemerate the session ID again
    $request->session()->invalidate();

    // Regenerate the CSRF token
    $request->session()->regenerateToken();

    // Redirect them to dashboard
    return redirect()->route('dashboard');
})->middleware('auth')->name('logout');
