<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\AwardCertifiateController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ImageController;
use App\Http\Controllers\MailController;
use App\Http\Controllers\PageController;
use App\Http\Controllers\PartnerController;
use App\Http\Controllers\ProductsController;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\SolutionController;
use App\Http\Controllers\TeamController;
use App\Http\Controllers\TimelineController;
use App\Http\Controllers\VideoController;

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

Route::get('/',[HomeController::class, 'index']);
Route::get('/home',[HomeController::class, 'index']);
Route::get('/our-services/{slug}',[HomeController::class, 'service_details']);
Route::get('/page/{slug}',[HomeController::class, 'page_details']);
Route::get('/blogs',[HomeController::class, 'blogs']);
Route::get('/blog-details/{slug}',[HomeController::class, 'blog_details']);
Route::get('/customers',[HomeController::class, 'customers']);
Route::get('/timeline',[HomeController::class, 'timeline']);
Route::get('/awards-and-certifications',[HomeController::class, 'awards_certifications']);
Route::get('/contact',[HomeController::class, 'contact']);
Route::post('/send-email', [MailController::class, 'contactMail'])->name('contact.send');

Auth::routes(['login' => false, 'register' => false]);
Route::get('admin-do-create', 'App\Http\Controllers\Auth\RegisterController@showRegistrationForm');
Route::post('admin-do-create', 'App\Http\Controllers\Auth\RegisterController@register')->name('register');

Route::get('admin-do-login', 'App\Http\Controllers\Auth\LoginController@showLoginForm');
Route::post('admin-do-login', 'App\Http\Controllers\Auth\LoginController@login')->name('login');

Route::group(['middleware' => ['auth','isAdmin']], function () {

    Route::get('/dashboard',[AdminController::class, 'dashboard']);
    Route::post('/update-password', [AdminController::class, 'updatePassword']);

    Route::post('/add-video',[VideoController::class, 'addVideo']);
    Route::get('/edit-video/{id}',[VideoController::class, 'editVideo']);
    Route::post('/update-video/{id}',[VideoController::class, 'updateVideo']);

    Route::get('/view-services',[ServiceController::class, 'viewAllServices']);
    Route::post('/add-service',[ServiceController::class, 'addService']);
    Route::get('/edit-service/{id}',[ServiceController::class, 'editService']);
    Route::post('/update-service/{id}',[ServiceController::class, 'updateService']);
    Route::get('/delete-service/{id}',[ServiceController::class, 'deleteService']);
    Route::get('/make-service-active/{id}', [ServiceController::class, 'activeService']);
    Route::get('/make-service-deactive/{id}', [ServiceController::class, 'deactiveService']);

    Route::get('/view-blogs',[BlogController::class, 'viewAllBlogs']);
    Route::post('/add-blog',[BlogController::class, 'addBlog']);
    Route::get('/edit-blog/{id}',[BlogController::class, 'editBlog']);
    Route::post('/update-blog/{id}',[BlogController::class, 'updateBlog']);
    Route::get('/delete-blog/{id}',[BlogController::class, 'deleteBlog']);
    Route::get('/make-blog-active/{id}', [BlogController::class, 'activeBlog']);
    Route::get('/make-blog-deactive/{id}', [BlogController::class, 'deactiveBlog']);
    Route::get('/make-blog-featured/{id}', [BlogController::class, 'makeBlogFeatured']);
    Route::get('/make-blog-not-featured/{id}', [BlogController::class, 'makeBlogNotFeatured']);

    Route::get('/view-pages',[PageController::class, 'viewAllPages']);
    Route::post('/add-page',[PageController::class, 'addPage']);
    Route::get('/edit-page/{id}',[PageController::class, 'editPage']);
    Route::post('/update-page/{id}',[PageController::class, 'updatePage']);
    Route::get('/delete-page/{id}',[PageController::class, 'deletePage']);
    Route::get('/make-page-active/{id}', [PageController::class, 'activePage']);
    Route::get('/make-page-deactive/{id}', [PageController::class, 'deactivePage']);

    Route::get('/view-partners',[PartnerController::class, 'viewAllPartners']);
    Route::post('/add-partner',[PartnerController::class, 'addPartner']);
    Route::get('/edit-partner/{id}',[PartnerController::class, 'editPartner']);
    Route::post('/update-partner/{id}',[PartnerController::class, 'updatePartner']);
    Route::get('/delete-partner/{id}',[PartnerController::class, 'deletePartner']);
    Route::get('/make-partner-active/{id}', [PartnerController::class, 'activePartner']);
    Route::get('/make-partner-deactive/{id}', [PartnerController::class, 'deactivePartner']);

    Route::get('/view-timelines',[TimelineController::class, 'viewAllTimelines']);
    Route::post('/add-timeline',[TimelineController::class, 'addTimeline']);
    Route::get('/edit-timeline/{id}',[TimelineController::class, 'editTimeline']);
    Route::post('/update-timeline/{id}',[TimelineController::class, 'updateTimeline']);
    Route::get('/delete-timeline/{id}',[TimelineController::class, 'deleteTimeline']);
    Route::get('/make-timeline-active/{id}', [TimelineController::class, 'activeTimeline']);
    Route::get('/make-timeline-deactive/{id}', [TimelineController::class, 'deactiveTimeline']);

    Route::get('/view-categories',[CategoryController::class, 'viewAllCategory']);
    Route::post('/add-category',[CategoryController::class, 'addCategory']);
    Route::get('/edit-category/{id}',[CategoryController::class, 'editCategory']);
    Route::post('/update-category/{id}',[CategoryController::class, 'updateCategory']);
    Route::get('/delete-category/{id}',[CategoryController::class, 'deleteCategory']);
    Route::get('/make-category-active/{id}', [CategoryController::class, 'activeCategory']);
    Route::get('/make-category-deactive/{id}', [CategoryController::class, 'deactiveCategory']);
    Route::get('/mark-category-featured/{id}', [CategoryController::class, 'markCategoryFeatured']);
    Route::get('/unmark-category-featured/{id}', [CategoryController::class, 'unmarkCategoryFeatured']);

    Route::get('/view-products',[ProductsController::class, 'viewAllProducts']);
    Route::post('/add-product',[ProductsController::class, 'addProduct']);
    Route::get('/edit-product/{id}',[ProductsController::class, 'editProduct']);
    Route::post('/update-product/{id}',[ProductsController::class, 'updateProduct']);
    Route::get('/delete-product/{id}',[ProductsController::class, 'deleteProduct']);
    Route::get('/make-product-active/{id}', [ProductsController::class, 'activeProduct']);
    Route::get('/make-product-deactive/{id}', [ProductsController::class, 'deactiveProduct']);
    Route::get('/make-product-featured/{id}', [ProductsController::class, 'makeProductFeatured']);
    Route::get('/unmake-product-featured/{id}', [ProductsController::class, 'unmakeProductFeatured']);
 });

 Route::get('/license',[HomeController::class, 'license']);