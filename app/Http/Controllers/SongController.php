<?php

namespace App\Http\Controllers;

use App\Models\{Genre, Song, User};
use App\Http\Requests\StoreSongRequest;
use App\Http\Requests\UpdateSongRequest;
use Auth;
use Illuminate\Http\Request;

class SongController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(Request $request)
    {
        $request->validate([
            'title' => 'required|string',
            'genre_id' => 'required|integer|exists:genres,id',
            'file' => 'nullable|file',
        ]);

        $songData = [
            'title' => $request->title,
            'genre_id' => $request->genre_id,
            'user_id' => Auth::id(),
        ];

        if ($request->hasFile('file')) {
            $songData['image'] = $request->file('file')->store('songs');
        }

        $song = Song::create($songData);

        return response()->json(['redirect' => '/']);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreSongRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Song $song)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Song $song)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateSongRequest $request, Song $song)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Song $song)
    {
        //
    }
}
