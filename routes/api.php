<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\TagController;
use App\Http\Controllers\OfferController;
use App\Http\Controllers\ReviewController;
use App\Http\Controllers\ProductReviewController;
use App\Http\Controllers\RatingController;
use App\Http\Controllers\ImageController;
use App\Http\Controllers\PriceHistoryController;
use App\Http\Controllers\StockController;
use App\Http\Controllers\WarehouseController;
use App\Http\Controllers\ProductWarehouseController;
use App\Http\Controllers\ShipmentController;
use App\Http\Controllers\ShippingProviderController;
use App\Http\Controllers\ShoppingCartController;
use App\Http\Controllers\CartItemController;
use App\Http\Controllers\WishlistController;
use App\Http\Controllers\WishlistItemController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\OrderItemController;
use App\Http\Controllers\PaymentController;
use App\Http\Controllers\PaymentMethodController;
use App\Http\Controllers\PageController;
use App\Http\Controllers\SliderController;
use App\Http\Controllers\BannerController;
use App\Http\Controllers\FaqController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\CommentController;
use App\Http\Controllers\ActivityController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\BrandController;
use App\Http\Controllers\NotificationController;
use App\Http\Controllers\LogController;
use App\Http\Controllers\SettingController;
use App\Http\Controllers\CurrencyController;
use App\Http\Controllers\CountryController;
use App\Http\Controllers\StateController;
use App\Http\Controllers\CityController;

// ** العمليات المفتوحة للجميع (عرض فقط) **
Route::get('/products', [ProductController::class, 'index']);
Route::get('/products/{id}', [ProductController::class, 'show']);

Route::get('/categories', [CategoryController::class, 'index']);
Route::get('/categories/{id}', [CategoryController::class, 'show']);

Route::get('/tags', [TagController::class, 'index']);
Route::get('/tags/{id}', [TagController::class, 'show']);

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});
Route::post('/register', [AuthController::class, 'register']);
Route::post('/login', [AuthController::class, 'login']);
Route::post('/logout', [AuthController::class, 'logout']);

Route::group(['middleware' => ['cors']], function () {

    // ** منتجات **
    Route::post('/products', [ProductController::class, 'store']);
    Route::put('/products/{id}', [ProductController::class, 'update']);
    Route::delete('/products/{id}', [ProductController::class, 'destroy']);

    // ** فئات **
    Route::post('/categories', [CategoryController::class, 'store']);
    Route::put('/categories/{id}', [CategoryController::class, 'update']);
    Route::delete('/categories/{id}', [CategoryController::class, 'destroy']);

    // ** وسوم **
    Route::post('/tags', [TagController::class, 'store']);
    Route::put('/tags/{id}', [TagController::class, 'update']);
    Route::delete('/tags/{id}', [TagController::class, 'destroy']);

    // ** عروض **
    Route::apiResource('offers', OfferController::class);
    // ** براندات **
    Route::apiResource('brands', BrandController::class);

    // ** مراجعات **
    Route::apiResource('reviews', ReviewController::class);

    // ** تقييمات **
    Route::apiResource('ratings', RatingController::class);

    // ** صور المنتجات **
    Route::apiResource('images', ImageController::class);

    // ** السجل السعري للمنتجات **
    Route::apiResource('price-histories', PriceHistoryController::class);

    // ** إدارة المخزون **
    Route::apiResource('stocks', StockController::class);
    
    // ** المستودعات **
    Route::apiResource('warehouses', WarehouseController::class);

    // ** ربط المنتجات بالمستودعات **
    Route::apiResource('product-warehouses', ProductWarehouseController::class);

    // ** إدارة الشحنات **
    Route::apiResource('shipments', ShipmentController::class);

    // ** إدارة شركات الشحن **
    Route::apiResource('shipping-providers', ShippingProviderController::class);

    // ** سلة التسوق **
    Route::apiResource('shopping-carts', ShoppingCartController::class);

    // ** عناصر سلة التسوق **
    Route::apiResource('cart-items', CartItemController::class);

    // ** قائمة الأمنيات **
    Route::apiResource('wishlists', WishlistController::class);

    // ** عناصر قائمة الأمنيات **
    Route::apiResource('wishlist-items', WishlistItemController::class);

    // ** الطلبات **
    Route::apiResource('orders', OrderController::class);

    // ** عناصر الطلبات **
    Route::apiResource('order-items', OrderItemController::class);

    // ** المدفوعات **
    Route::apiResource('payments', PaymentController::class);

    // ** طرق الدفع **
    Route::apiResource('payment-methods', PaymentMethodController::class);

    // ** صفحات **
    Route::apiResource('pages', PageController::class);

    // ** مستعرضات الصور (Sliders) **
    Route::apiResource('sliders', SliderController::class);

    // ** لافتات إعلانية (Banners) **
    Route::apiResource('banners', BannerController::class);

    // ** الأسئلة الشائعة (FAQs) **
    Route::apiResource('faqs', FaqController::class);

    // ** المدونات **
    Route::apiResource('blogs', BlogController::class);

    // ** التعليقات **
    Route::apiResource('comments', CommentController::class);

    // ** الأنشطة **
    Route::apiResource('activities', ActivityController::class);

    // ** الإشعارات **
    Route::apiResource('notifications', NotificationController::class);

    // ** السجلات **
    Route::apiResource('logs', LogController::class);

    // ** الإعدادات **
    Route::apiResource('settings', SettingController::class);

    // ** العملات **
    Route::apiResource('currencies', CurrencyController::class);

    // ** الدول **
    Route::apiResource('countries', CountryController::class);

    // ** الولايات/المحافظات **
    Route::apiResource('states', StateController::class);

    // ** المدن **
    Route::apiResource('cities', CityController::class);
});
