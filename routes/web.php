<?php

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

// php info route 
Route::get('info', function () {
   phpinfo();
});


Route::redirect('/', '/profile')->name('my-content.redirect');

Route::view('/profile', 'profile.my-content')->name('my-content');

Route::view('/profile/my-content', 'profile.my-content')->name('my-content');

Route::view('/profile/my-uploads', 'profile.my-uploads')->name('my-uploads');

Route::view('/profile/upload-content', 'profile.upload-content')->name('upload-content');

Route::view('/profile/start-stream', 'profile.start-stream')->name('start-stream');

Route::view('/profile/my-collection', 'profile.my-collection')->name('my-collection');

Route::view('/stream', 'stream.index')->name('stream');

Route::view('/content-settings', 'content-settings.index')->name('content-settings');

Route::view('/stream-settings', 'stream-settings.index')->name('stream-settings');

Route::view('/account-settings', 'account-settings.index')->name('account-settings');

Route::view('/marketplace', 'marketplace.creator-list')->name('marketplace');

Route::view('/marketplace/podcasts', 'marketplace.podcasts')->name('podcasts');

Route::view('/podcast', 'podcast.index')->name('podcast');

Route::view('/product', 'product.index')->name('product');

Route::view('/cart', 'cart.index')->name('cart');

Route::view('/checkout', 'checkout.index')->name('checkout');

Route::view('/wallet', 'wallet.index')->name('wallet');

Route::view('/sign-up', 'register.index')->name('sign-up');

Route::view('/sign-in', 'login.index')->name('sign-in');

Route::view('/setup', 'setup.index')->name('setup');
