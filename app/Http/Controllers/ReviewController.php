<?php

namespace App\Http\Controllers;

use App\Models\Review;
use Illuminate\Http\Request;



class ReviewController extends Controller
{

    /**
    * Display the front page
    * @return View
    */
    public function index()
    {
        return view('welcome', [
            'reviews' => Review::all()
        ]);
    }

    /**
    * Collect data from the SPA
    * @param $request, instance of Request
    * @return JSON
    */
    public function store(Request $request)
    {
        try {
            Review::create(['review' => $request->text]);
            return response()->json(['success' => true, 'message' => 'Review successfully saved.']);
        } catch (\Illuminate\Database\QueryException $e) {
            return response()->json(['status' => 'error', 'message' => $e->getMessage()]);
        }
    }

    public function display()
    {
        return Review::display();
    }
}
