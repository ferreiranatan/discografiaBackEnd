<?php

namespace App\Http\Controllers;

use App\Models\Track;
use Illuminate\Http\Request;

class TrackController extends Controller
{
    public function store(Request $request)
    {
        $track = Track::create($request->all());
        return response()->json($track, 201);
    }

    public function destroy($id)
    {
        Track::destroy($id);
        return response()->json(null, 204);
    }
}
