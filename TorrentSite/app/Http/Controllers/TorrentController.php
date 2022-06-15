<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Torrent;
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
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|min:10|max:100',
            'description' => 'required',
            'category_id' => 'required|exists:categories,id',
        ]);

        dd($request->all());
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Torrent  $torrent
     * @return \Illuminate\Http\Response
     */
    public function show(Torrent $torrent)
    {
        //
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
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Torrent  $torrent
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Torrent $torrent)
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
