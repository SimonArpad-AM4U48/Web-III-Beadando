<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\HomeController;
use App\Http\Controllers\DownloadController;
use App\Http\Controllers\TorrentController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ProfileController;

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

Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/download', [DownloadController::class, 'index'])->name('download');
Route::get('/downloadTorrent{torrent}', [DownloadController::class, 'download'])->name('downloadTorrent');
Route::middleware(['auth'])->group( function () {
        Route::post('/', [HomeController::class, 'chat']);
    Route::get('/upload', [TorrentController::class, 'create'])->name('torrent.create');
        Route::post('/upload',[TorrentController::class, 'store']);
    Route::post('/torrent/{torrent}/comment', [TorrentController::class, 'comment'])->name('torrent.comment');
});

Route::get('/torrent/{torrent}', [TorrentController::class, 'show'])->name('torrent.details');
Route::get('/category/{category}', [CategoryController::class, 'show'])->name('category.show');
Route::get('/profile/{user}', [ProfileController::class, 'show'])->name('profile.show');

require __DIR__.'/auth.php';
