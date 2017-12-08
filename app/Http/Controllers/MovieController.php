<?php

namespace App\Http\Controllers;

use App\model\movie;
use App\Http\Resources\movie\MovieCollection;
use App\Http\Resources\movie\MovieResource;
use Illuminate\Http\Request;

class MovieController extends Controller
{
   
    public function index()
    {
        return MovieCollection::collection(movie::paginate(20));
    }

    
    public function create()
    {
        //
    }


    public function store(Request $request)
    {
        //
    }

    public function show(movie $movie)
    {
        return new MovieResource($movie);
    }

   
    public function edit(movie $movie)
    {
        //
    }

    
    public function update(Request $request, movie $movie)
    {
        //
    }

   
    public function destroy(movie $movie)
    {
        //
    }
}
