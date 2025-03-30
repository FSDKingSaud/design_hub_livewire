<?php

use App\Livewire\Home;
use App\Livewire\Shop;
use App\Livewire\Blogs;
use App\Livewire\Events;
use App\Livewire\Groups;
use App\Livewire\Courses;
use App\Livewire\Members;
use App\Livewire\Product;
use App\Livewire\BlogPage;
use App\Livewire\EventPage;
use App\Livewire\CoursePage;
use App\Livewire\Freelancers;
use App\Livewire\MembersPage;
use App\Livewire\GroupProfile;
use Illuminate\Support\Facades\Route;
use App\Livewire\MembersPortfolioSingle;

Route::get('/', Home::class)->name('home');
Route::get('/blogs', Blogs::class)->name('blogs');
Route::get('/blog-page', BlogPage::class)->name('blog-page');
Route::get('/courses', Courses::class)->name('courses');
Route::get('/courses-page', CoursePage::class)->name('courses-page');
Route::get('/events', Events::class)->name('events');
Route::get('/event-page', EventPage::class)->name('event-page');
Route::get('/freelancers', Freelancers::class)->name('freelancers');
Route::get('/groups', Groups::class)->name('groups');
Route::get('/group-page', GroupProfile::class)->name('group-page');
Route::get('/members', Members::class)->name('members');
Route::get('/members-page', MembersPage::class)->name('members-page');
Route::get('/shop', Shop::class)->name('shop');
Route::get('/product', Product::class)->name('product');
Route::get('/members-portfolio-single', MembersPortfolioSingle::class)->name('members-portfolio-single');
