<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SiteController;
use App\Http\Controllers\GroceriesController;
use App\Http\Controllers\BDPruebaController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\CommentController;
use Database\Factories\ProductsFactory;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });

// Route::get('/hola', function () {
//     return 'welcome';
// });

//Route::get('/', [SiteController::class, 'index']);
// Route::get('/service', [SiteController::class, 'service']);
// Route::get('/product', [SiteController::class, 'product']);
// Route::get('/contact', [SiteController::class, 'contact']);

Route::get('/', [GroceriesController::class, 'index']) -> name ("home");
Route::get('/shop', [GroceriesController::class, 'shop']) -> name ("shop");
Route::get('/register', [GroceriesController::class, 'register']) -> name ("register");
Route::get('/about', [GroceriesController::class, 'about']) -> name ("about");
Route::get('/login', [GroceriesController::class, 'login']) -> name ("login");
Route::get('/cart', [GroceriesController::class, 'cart']) -> name ("cart");
Route::get('/checkout', [GroceriesController::class, 'checkout']) -> name ("checkout");

// Route::get('/contact', [GroceriesController::class, 'contact']) -> name ("contact");
// Route::post('/contact', [GroceriesController::class, 'contactForm'])->name('contactForm');
Route::resource('contact', ContactController::class);

Route::resource('comment', CommentController::class);
Route::get('/detailproduct/{id}', [GroceriesController::class, 'detailproduct']) -> name ("detailproduct");

Route::get('/faq', [GroceriesController::class, 'faq']) -> name ("faq");
Route::get('/privacy', [GroceriesController::class, 'privacy']) -> name ("privacy");
Route::get('/setting', [GroceriesController::class, 'setting']) -> name ("setting");
Route::get('/terms', [GroceriesController::class, 'terms']) -> name ("terms");
Route::get('/transaction', [GroceriesController::class, 'transaction']) -> name ("transaction");

Route::get('/admin',[GroceriesController::class,'admin']) -> name("admin.products") ;

Route::get('/informacion', [BDPruebaController::class, 'index']);

