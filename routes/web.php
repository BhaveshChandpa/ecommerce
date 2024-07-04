    <?php

    use App\Http\Controllers\Admin\CategoryController;
    use App\Http\Controllers\Admin\HomeController;
    use App\Http\Controllers\Admin\ProductController;
    use Illuminate\Support\Facades\Route;

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

    Route::redirect('/', '/home');

    // Route::get('/', function () {
    //     return view('welcome');
    // });

    Route::get('/home', [HomeController::class, 'home'])->name('home');
    Route::get('/category', [CategoryController::class, 'index'])->name('category.index');

    Route::get('product/{slug?}/{variant}', [ProductController::class, 'show'])->name('product.show')->where('size', '[A-Za-z]+');;

    // Product Routes
    Route::resource('product', ProductController::class)->parameters(
        ['product' => 'product:slug']
    )->only(['index']);




    // Route::get('products', [AdminController::class, 'products']);
