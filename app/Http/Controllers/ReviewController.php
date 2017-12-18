<?php

namespace App\Http\Controllers;

use App\model\review;
use App\model\movie;
use App\Http\Requests\ReviewRequest;
use App\Http\Resources\review\ReviewResource;
use App\Http\Resources\review\ReviewCollection;
use Symfony\Component\HttpFoundation\Response;
use Illuminate\Http\Request;

class ReviewController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(movie $movie)
    {
        return ReviewResource::collection($movie->reviews);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ReviewRequest $request,movie $movie)
    {
        $review = new Review($request->all());
        $movie->reviews()->save($review);

         return response([
          
          'data' => new ReviewResource($review)

            ],Response::HTTP_CREATED);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\model\review  $review
     * @return \Illuminate\Http\Response
     */
    public function show(review $review)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\model\review  $review
     * @return \Illuminate\Http\Response
     */
    public function edit(review $review)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\model\review  $review
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,movie $movie, review $review)
    {
        $review->update($request->all());

         return response([
          
          'data' => new ReviewResource($review)

            ],Response::HTTP_CREATED);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\model\review  $review
     * @return \Illuminate\Http\Response
     */
    public function destroy(movie $movie,review $review)
    {
        $review->delete();

         return response(null,Response::HTTP_NO_CONTENT);
    }
}
