<?php

namespace App\Http\Controllers;

use App\Models\Plans;
use App\Models\Subscribtions;
use Illuminate\Http\Request;

class SubscribtionsController extends Controller
{
    public function index()
    {
        return view('subscribtions',[
            'subscribtions' => Subscribtions::all(),
            'plans' => Plans::all()

        ]);
    }

    public function update(Request $request)
    {
        try {
            $subscribtion = Subscribtions::find($request->id);
            $subscribtion->plan_id=$request->plan_id;
            $subscribtion->is_active=$request->is_active;

            $subscribtion->save();

            return redirect()->route('subscribtions');
        }
        catch
        (\Exception $e) {
            return redirect()->back()->withErrors(['error' => $e->getMessage()]);
        }
      }


      public function delete($id)
      {
        Subscribtions::destroy($id);
              return redirect()->route('subscribtions');

      }
}
