<?php

namespace App\Http\Controllers;

use App\Models\Client;
use App\Models\Reviews;
use Illuminate\Http\Request;

class ReviewsController extends Controller
{
    public function index()
    {
        return view('reviews',[
            'reviews' => Reviews::all(),
        ]);
    }
    public function update(Request $request)
    {
        try {
            $review = Reviews::find($request->id);
            $review->message=$request->message;
            $review->rate=$request->rate;
            $review->subject=$request->subject;

            $review->save();

            return redirect()->route('reviews');
        }
        catch
        (\Exception $e) {
            return redirect()->back()->withErrors(['error' => $e->getMessage()]);
        }
      }


      public function delete($id)
      {
        Reviews::destroy($id);
              return redirect()->route('reviews');

      }

}
