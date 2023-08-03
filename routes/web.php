<?php

use App\Http\Controllers\ProfileController;
use App\Http\Livewire\Home;
use App\Http\Livewire\Posts\Posts;
use App\Http\Livewire\Posts\ShowPost;
use App\Http\Livewire\Posts\PostsCategory;
use App\Http\Livewire\Posts\PostsTag;
use Illuminate\Support\Facades\Route;

use App\Http\Livewire\Property\Index as PropertyIndex;
use App\Http\Livewire\Property\Show as PropertyShow;

use App\Http\Livewire\Agents\Index as AgentsIndex;
use App\Http\Livewire\Agents\Show as AgentShow;

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

Route::get('/', Home::class)->name('home');

Route::get('/blog', Posts::class)->name('blog');
Route::get('/blog/{post}', ShowPost::class)->name('post.show');
Route::get('/blog/category/{category}', PostsCategory::class)->name('posts.category');
Route::get('/blog/tag/{tag}', PostsTag::class)->name('posts.tag');


Route::get('/properties', PropertyIndex::class)->name('property.index');
Route::get('/properties/{property}', PropertyShow::class)->name('property.show');

Route::get('/agents', AgentsIndex::class)->name('agent.index');
Route::get('/agents/{agent}', AgentShow::class)->name('agent.show');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
