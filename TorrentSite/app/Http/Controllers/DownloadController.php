<?php

namespace App\Http\Controllers;

use App\Models\Torrent;
use Illuminate\Http\Request;

class DownloadController extends Controller
{
    public function index() {
        $torrents = Torrent::orderBy('created_at', 'desc')->paginate(50);
        return view('download')->with(['torrents' => $torrents]);
    }
}
