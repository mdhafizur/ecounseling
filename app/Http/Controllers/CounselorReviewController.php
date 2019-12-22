<?php

namespace App\Http\Controllers;

use App\CounselorReview;
use Illuminate\Http\Request;
use Auth;
use Illuminate\Support\Facades\DB;

class CounselorReviewController extends Controller
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
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $user = Auth::user();
        $review = new CounselorReview;

        $review->user_id = $user->id;
        $review->counselor_id = $request->counselor_id;
        $review->rating = $request->rating;
        $review->review = $request->review;
        $review->save();

        return back();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\CounselorReview  $counselorReview
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request)
    {

        // $reviews = DB::table('counselor_reviews')
        //     ->select('*')

        //     ->where('counselor_id', '=', $request->counselor_id)
        //     ->get();

        // //
        // return view('viewCprofile', ['reviews' => $reviews]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\CounselorReview  $counselorReview
     * @return \Illuminate\Http\Response
     */
    public function edit(CounselorReview $counselorReview)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\CounselorReview  $counselorReview
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, CounselorReview $counselorReview)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\CounselorReview  $counselorReview
     * @return \Illuminate\Http\Response
     */
    public function destroy(CounselorReview $counselorReview)
    {
        //
    }
}
