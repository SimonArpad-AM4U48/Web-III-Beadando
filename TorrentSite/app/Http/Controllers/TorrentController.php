<?php

namespace App\Http\Controllers;

use Auth;
use App\Http\Requests\TorrentRequest;
use App\Models\Category;
use App\Models\Torrent;
use App\Models\User;
use Illuminate\Http\Request;

class TorrentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = Category::orderBy('title')->get();
        return view('torrent.create')->with(['categories' => $categories]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\TorrentRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(TorrentRequest $request)
    {
        $torrent = Auth::user()->torrents()->create($request->except('_token'));

        return redirect()
            ->route('torrent.details', $torrent)
            ->with('success', __('Torrent uploaded successfully'));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Torrent  $torrent
     * @return \Illuminate\Http\Response
     */
    public function show(Torrent $torrent)
    {
        return view('torrent.show')->with(['torrent' => $torrent]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Torrent  $torrent
     * @return \Illuminate\Http\Response
     */
    public function edit(Torrent $torrent)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\TorrentRequest  $request
     * @param  \App\Models\Torrent  $torrent
     * @return \Illuminate\Http\Response
     */
    public function update(TorrentRequest $request, Torrent $torrent)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Torrent  $torrent
     * @return \Illuminate\Http\Response
     */
    public function destroy(Torrent $torrent)
    {
        //
    }
}
