<?php

use App\Http\Controllers\backend\AdminFaqsController;
use App\Http\Controllers\backend\AdminHomeController;
use App\Http\Controllers\backend\AdminLoginController;
use App\Http\Controllers\backend\AdminProjectsController;
use App\Http\Controllers\backend\TeamMemberController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\frontend\IndexController;
use App\Http\Controllers\frontend\PagesController;
use App\Http\Controllers\frontend\CartpageController;
use App\Http\Controllers\frontend\FaqController;


// Front end
Route::get('/', [IndexController::class, 'index'])->name('index');
Route::post('/', [IndexController::class, 'submit'])->name('register');

Route::get('/about-us', [PagesController::class, 'aboutus'])->name('aboutus');

Route::get('/cart-page', [CartpageController::class, 'cartpage'])->name('frontend.cart-page');

Route::post('/cart/add/{project}', [CartpageController::class, 'store'])->name('frontend.cart.add');
Route::delete('/cart/remove/{id}', [CartpageController::class, 'remove'])->name('frontend.cart.remove');
Route::post('/cart/update/{id}/{type}', [CartpageController::class, 'update'])->name('frontend.cart.update');

Route::get('/contact', [PagesController::class, 'contact'])->name('contact');
Route::get('/faq', [FaqController::class, 'faq'])->name('faq');

Route::get('/my-account', [PagesController::class, 'myaccount'])->name('myaccount');

Route::get('/checkout-page', [PagesController::class, 'checkoutpage'])->name('checkoutpage');
Route::post('/checkout', [PagesController::class, 'storeBilling'])->name('checkout.submit');

// Backend
//Login Page
Route::get('/admin/login', [AdminLoginController::class, 'index']);

Route::get('/admin/login', function () {
    if (session()->has('email')) {
        return redirect('/admin');
    } else {
        return view('backend.login');
    }
});

Route::post('/admin/login', [AdminLoginController::class, 'onLogin']);
Route::get('/admin/logout', [AdminLoginController::class, 'logoutAdmin']);

Route::get('/admin', [AdminHomeController::class, 'index']);

// Route::get('/admin', [AdminHomeController::class, 'index'])->middleware('admin_auth')->name('admin.dashboard');

//Admin Management
Route::prefix('admin')->name('admin.')->group(function () {
    Route::get('/register', [AdminHomeController::class, 'registerAdmin'])->name('create');
    Route::post('/register', [AdminHomeController::class, 'submitAdminRecord'])->name('store');
    Route::get('/admins-list', [AdminHomeController::class, 'showAdminRecord'])->name('show');
    Route::get('/delete/{id}', [AdminHomeController::class, 'deleteAdminRecord'])->name('delete');
    Route::get('/edit/{id}', [AdminHomeController::class, 'editAdminRecord'])->name('edit');
    Route::post('/update/{id}', [AdminHomeController::class, 'updateAdminRecord'])->name('update');
});

// Team Management
Route::prefix('admin')->name('team.')->group(function () {
    Route::get('/team', [TeamMemberController::class, 'index'])->name('show');
    Route::get('/team-member-details/{id}', [TeamMemberController::class, 'showTeamMember'])->name('details');

    Route::get('/team-add', [TeamMemberController::class, 'registerTeam'])->name('add');
    Route::post('/team-add', [TeamMemberController::class, 'submitTeamRecord']);

    Route::get('/team-edit/{id}', [TeamMemberController::class, 'editTeam'])->name('edit');
    Route::put('/team-edit/{id}', [TeamMemberController::class, 'updateTeam'])->name('update');

    Route::delete('/team-delete/{id}', [TeamMemberController::class, 'deleteTeam'])->name('delete');
});

// FAQs Management
Route::prefix('admin')->name('faq.')->group(function () {
    Route::get('/faqs', [AdminFaqsController::class, 'index'])->name('show');

    Route::get('/faq-add', [AdminFaqsController::class, 'addFAQ'])->name('add');
    Route::post('/faq-add', [AdminFaqsController::class, 'submitFaqRecord']);

    Route::get('/faq-edit/{id}', [AdminFaqsController::class, 'editFAQ'])->name('edit');
    Route::put('/faq-edit/{id}', [AdminFaqsController::class, 'updateFAQ'])->name('update');

    Route::delete('/faq-delete/{id}', [AdminFaqsController::class, 'deleteFAQ'])->name('delete');
});

// Project Management
Route::prefix('admin')->name('project.')->group(function () {
    Route::get('/projects', [AdminProjectsController::class, 'index'])->name('show');  // list projects

    Route::get('/project-add', [AdminProjectsController::class, 'addProject'])->name('add');
    Route::post('/project-add', [AdminProjectsController::class, 'submitProjectRecord']);

    Route::get('/project-edit/{id}', [AdminProjectsController::class, 'editProject'])->name('edit');
    Route::put('/project-edit/{id}', [AdminProjectsController::class, 'updateProject'])->name('update');

    Route::delete('/project-delete/{id}', [AdminProjectsController::class, 'deleteProject'])->name('delete');
});



Route::get('admin/logout', function () {
    if (session()->has('email')) {
        session()->pull('id', null);
        session()->pull('first_name', null);
        session()->pull('last_name', null);
        session()->pull('email', null);
    }
    return redirect('/admin/login');
});
