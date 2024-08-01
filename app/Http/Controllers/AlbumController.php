<?php

namespace App\Http\Controllers;

use App\Models\Album;
use Illuminate\Http\Request;

class AlbumController extends Controller
{
    public function index()
    {
        return Album::with('tracks')->get();
    }

    public function store(Request $request)
    {
        $album = Album::create($request->all());
        return response()->json($album, 201);
    }

    public function show($id)
    {
        return Album::with('tracks')->findOrFail($id);
    }

    public function update(Request $request, $id)
    {
        $album = Album::findOrFail($id);
        $album->update($request->all());
        return response()->json($album, 200);
    }

    public function destroy($id)
    {
        Album::destroy($id);
        return response()->json(null, 204);
    }
}
