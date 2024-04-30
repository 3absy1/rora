<?php

namespace App\Http\Controllers;

use App\Models\Plans;
use Illuminate\Http\Request;

class PlansController extends Controller
{
    public function index()
    {
        return view('plan',[
            'plans' => Plans::all()
        ]);

    }

    public function create(Request $request)
    {
        Plans::create([
            'title'=>$request->title,
            'minutes'=>$request->minutes,
            'price'=>$request->price,
            'sale_price'=>$request->sale_price,

        ]);
        return redirect()->route('plan');

    }


    public function update(Request $request)
    {
        try {
            $plan = Plans::find($request->id);
            $plan->title=$request->title;
            $plan->minutes=$request->minutes;
            $plan->price=$request->price;
            $plan->is_active=$request->is_active;
            $plan->sale_price=$request->sale_price;

            $plan->save();

            return redirect()->route('plan');
        }
        catch
        (\Exception $e) {
            return redirect()->back()->withErrors(['error' => $e->getMessage()]);
        }
      }


      public function delete($id)
      {
              Plans::destroy($id);
              return redirect()->route('plan');

      }
}
