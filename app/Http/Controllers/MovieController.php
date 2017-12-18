<?php

namespace App\Http\Controllers;

use App\model\movie;
use App\Exceptions\ProductNotBelongToUser;
use App\Http\Requests\MovieRequest;
use App\Http\Resources\movie\MovieCollection;
use App\Http\Resources\movie\MovieResource;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use Auth;

class MovieController extends Controller
{

   
    public function __construct()
    {

        $this->middleware('auth:api')->except('index','show');
    }
   
    public function index()
    {
        return MovieCollection::collection(movie::paginate(20));
    }

    
    public function create()
    {
        //
    }


    public function store(MovieRequest $request)
    {
        $movies = new movie;

        $movies->title = $request->title;

        $movies->description = $request->description;

        $movies->genre = $request->genre;

        $movies->producer = $request->producer;

        $movies->country = $request->country;

        $movies->save();

        return response([
          
          'data' => new MovieResource($movies)

            ],Response::HTTP_CREATED);
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
        $this->ProductUserCheck($movie);

        $movie->update($request->all());

        return response([
          
          'data' => new MovieResource($movie)

            ],Response::HTTP_CREATED);
    }

   
    public function destroy(movie $movie)
    {
        $this->ProductUserCheck($movie);

        $movie->delete();

        return response(null,Response::HTTP_NO_CONTENT);
    }


    public function ProductUserCheck($movie)
    {
        if(Auth::id() !== $movie->user_id){

            throw new ProductNotBelongToUser;
            
        }
    }
}
