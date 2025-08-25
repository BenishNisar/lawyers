<?php

use App\Http\Controllers\AboutController;
use App\Http\Controllers\AccountLoginController;
use App\Http\Controllers\AccountSettingsController;
use App\Http\Controllers\AdministrationController;
use App\Http\Controllers\BackendBlogController;
use App\Http\Controllers\BlogsController;
use App\Http\Controllers\CategoryController;

use App\Http\Controllers\BlogsDetailsController;
use App\Http\Controllers\BusinessSectorController;
use App\Http\Controllers\CareersController;
use App\Http\Controllers\ClientController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\ContactUsController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\DownloadsController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\RolesController;
use App\Http\Controllers\SafeMarkController;
use App\Http\Controllers\ServicesController;
use App\Http\Controllers\SoftwareController;
use App\Http\Controllers\TeamController;
use App\Http\Controllers\UsersController;
use App\Http\Controllers\WelcomeController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Str;
use App\Models\Blog;
use Illuminate\Database\Eloquent\SoftDeletingScope;

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
// frontend pages
Route::get("/",[WelcomeController::class,"index"])->name("Home.welcome");
Route::post("/",[WelcomeController::class,"store"])->name("Home.welcome.store");
Route::get("/contact",[ContactController::class,"index"])->name("Home.contact");
// contactstore
Route::post("/contact",[ContactController::class,"store"])->name("Home.contact.store");


Route::get("/blogs",[BlogsController::class,"index"])->name("Home.blogs");
Route::get('/blogs_details/{slug}', [BlogsDetailsController::class, 'show'])->name('Home.blogs_details');
// blogs_search
Route::get('/frontend-blog-search', [BlogsController::class, 'search'])->name('frontend.blog.search');
// Route::get("/blogs_details/{id}",[BlogsDetailsController::class,"show"])->name("Home.blogs_details");
Route::get("/services",[ServicesController::class,"index"])->name("Home.services");
Route::get("/about",[AboutController::class,"index"])->name("Home.about");
Route::get('/business-sectors', [BusinessSectorController::class, 'index'])
     ->name('Home.business-sectors');
     Route::get('/administration', [AdministrationController::class, 'index'])
     ->name('Home.administration');
        Route::get('/softwares', [SoftwareController::class, 'index'])
     ->name('Home.softwares');
             Route::get('/downloads', [DownloadsController::class, 'index'])
     ->name('Home.downloads');
       Route::get('/careers', [CareersController::class, 'index'])
     ->name('Home.careers');
          Route::get('/clients', [ClientController::class, 'index'])
     ->name('Home.clients');

// frontend pages
// backend pages
Route::get("/dashboard",[DashboardController::class,"index"])->name("Dashboard.admin.dashboard");
Route::get("/accountlogin", [AccountLoginController::class, "index"])->name("login");
Route::post("/accountlogin", [AccountLoginController::class, "store"])->name("auth.accountlogin.store");
Route::post("/logout", [AccountLoginController::class, "logout"])->name("logout");

// Middleware Protected Routes
// Route::middleware(['auth', 'accountlogin'])->group(function () {
//     Route::get("/dashboard", [DashboardController::class, "index"])->name("Dashboard.admin.dashboard");
// });

// Forget Password Routes
Route::get('/forget-password', [AccountLoginController::class, 'showForgetForm'])->name('auth.forget-password');
Route::post('/forget-password', [AccountLoginController::class, 'submitForgetForm'])->name('auth.forget-password');

// Reset Password Routes
Route::get('/reset-password/{token}', [AccountLoginController::class, 'showResetForm'])->name('auth.reset-password');
Route::post('/reset-password', [AccountLoginController::class, 'submitResetForm'])->name('auth.reset-password');

// Admin Protected Routes
Route::middleware(['auth'])->group(function () {
    Route::get("/dashboard", [DashboardController::class, "index"])->name("Dashboard.admin.dashboard");

    // Blogs
    Route::get("/blog",[BackendBlogController::class,"index"])->name("Dashboard.admin.blog.index");
    Route::get("blog/add", [BackendBlogController::class, "add"])->name("Dashboard.admin.blog.add");
    Route::post("blog/store", [BackendBlogController::class, "store"])->name("Dashboard.admin.blog.store");
    Route::get("blog/edit/{id}", [BackendBlogController::class, "edit"])->name("Dashboard.admin.blog.edit");
    Route::put("blog/update/{id}", [BackendBlogController::class, "update"])->name("Dashboard.admin.blog.update");
    Route::delete("blog/delete/{id}", [BackendBlogController::class, "delete"])->name("Dashboard.admin.blog.delete");
    Route::get('/blog-search', [BackendBlogController::class, 'search'])->name('blog.search');
    Route::get('/blog/view/{id}', [BackendBlogController::class, 'view'])->name('Dashboard.admin.blog.view');



    // Corporates
    // Route::get("/corporates", [BacCorporateController::class, "index"])->name("Dashboard.admin.corporates.index");
    // Route::get("/corporates/add", [BacCorporateController::class, "add"])->name("Dashboard.admin.corporates.add");
    // Route::post("/corporates/store", [BacCorporateController::class, "store"])->name("Dashboard.admin.corporates.store");
    // Route::get("/corporates/edit/{id}", [BacCorporateController::class, "edit"])->name("Dashboard.admin.corporates.edit");
    // Route::post("/corporates/update/{id}", [BacCorporateController::class, "update"])->name("Dashboard.admin.corporates.update");
    // Route::delete("/corporates/delete/{id}", [BacCorporateController::class, "delete"])->name("Dashboard.admin.corporates.delete");

    // ContactUs
    Route::get("/contactus", [ContactUsController::class, "index"])->name("Dashboard.admin.contactus.index");
    Route::get("/contactus/add", [ContactUsController::class, "add"])->name("Dashboard.admin.contactus.add");
    Route::post("/contactus/store", [ContactUsController::class, "store"])->name("Dashboard.admin.contactus.store");
    Route::get("/contactus/edit/{id}", [ContactUsController::class, "edit"])->name("Dashboard.admin.contactus.edit");
    Route::put("/contactus/update/{id}", [ContactUsController::class, "update"])->name("Dashboard.admin.contactus.update");
    Route::delete("/contactus/delete/{id}", [ContactUsController::class, "destroy"])->name("Dashboard.admin.contactus.delete");
    Route::get('/contactus/view/{id}', [ContactUsController::class, 'view'])->name('Dashboard.admin.contactus.view');

    // Category
    Route::get("/category", [CategoryController::class, "index"])->name("Dashboard.admin.category.index");
    Route::get("/category/add", [CategoryController::class, "add"])->name("Dashboard.admin.category.add");
    Route::post("/category/store", [CategoryController::class, "store"])->name("Dashboard.admin.category.store");
    Route::get("/category/edit/{id}", [CategoryController::class, "edit"])->name("Dashboard.admin.category.edit");
    Route::put("/category/update/{id}", [CategoryController::class, "update"])->name("Dashboard.admin.category.update");
    Route::delete("/category/delete/{id}", [CategoryController::class, "destroy"])->name("Dashboard.admin.category.delete");
    Route::get('/category/view/{id}', [CategoryController::class, 'view'])->name('Dashboard.admin.category.view');

    // Users
    Route::get("/users", [UsersController::class, "index"])->name("Dashboard.admin.users.index");
    Route::get("users/add", [UsersController::class, "add"])->name("Dashboard.admin.users.add");
    Route::post("users/store", [UsersController::class, "store"])->name("Dashboard.admin.users.store");
    Route::get("users/edit/{id}", [UsersController::class, "edit"])->name("Dashboard.admin.users.edit");
    Route::put("users/update/{id}", [UsersController::class, "update"])->name("Dashboard.admin.users.update");
    Route::delete("users/delete/{id}", [UsersController::class, "delete"])->name("Dashboard.admin.users.delete");
    Route::get('users/view/{id}', [UsersController::class, 'view'])->name('Dashboard.admin.users.view');


    // Roles
    Route::get("roles", [RolesController::class, "index"])->name("Dashboard.admin.roles.index");
    Route::get("roles/add", [RolesController::class, "add"])->name("Dashboard.admin.roles.add");
    Route::post("roles/store", [RolesController::class, "store"])->name("Dashboard.admin.roles.store");
    Route::get("roles/edit/{id}", [RolesController::class, "edit"])->name("Dashboard.admin.roles.edit");
    Route::put("roles/update/{id}", [RolesController::class, "update"])->name("Dashboard.admin.roles.update");
    Route::delete("roles/delete/{id}", [RolesController::class, "delete"])->name("Dashboard.admin.roles.delete");
    Route::get('roles/view/{id}', [RolesController::class, 'view'])->name('Dashboard.admin.roles.view');

    // Profile & Need Help
    Route::get("/profile", [ProfileController::class, "index"])->name("Dashboard.admin.profile.index");

    // Account Settings
    Route::get('/account_settings', [AccountSettingsController::class, 'index'])->name('Dashboard.admin.account_settings.index');
    Route::put('/account_settings/{id?}', [AccountSettingsController::class, 'update'])->name('Dashboard.admin.account_settings.update');



});
