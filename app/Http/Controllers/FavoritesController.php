<?php

namespace App\Http\Controllers;

use App\Models\Favorite;
use Illuminate\Http\Request;

class FavoritesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return Favorite::get();
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $req)
    {
        return Favorite::create($req -> all());
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Favorite  $favorite
     * @return \Illuminate\Http\Response
     */
    public function show($user_id)
    {
        $numberFavorites = Favorite::where('user_id', $user_id)->count();
        if ($numberFavorites>0)
            return Favorite::where('user_id', $user_id)->get();
        return "no-favorites";
        
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Favorite  $favorite
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Favorite $favorite)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Favorite  $favorite
     * @return \Illuminate\Http\Response
     */
    public function destroy($user_id, $imdbID)
    {
        $deleted = Favorite::where('user_id', $user_id)->where('imdbID', $imdbID);
        $success = $deleted->delete();
        return response()->json([
            'data' => $deleted,
            'success' => $success
        ]);
    }
}
