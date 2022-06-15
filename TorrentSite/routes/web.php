<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\HomeController;
use App\Http\Controllers\DownloadController;
use App\Http\Controllers\TorrentController;

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
Route::get('/upload', [TorrentController::class, 'create'])->name('torrent.create');
    Route::post('/upload',[TorrentController::class, 'store']);

Route::get('/torrent/{torrent}', [TorrentController::class, 'show'])->name('torrent.details');
