<?php

namespace App\Http\Controllers;

use App\Models\Recharagecard;
use Illuminate\Http\Request;

class RecharagecardController extends Controller
{
    public function index()
    {
        return view('recharagecards',[
            'recharagecards' => Recharagecard::all()
        ]);
    }
    public function create(Request $request)
    {
        Recharagecard::create([
            'name'=>$request->name,
            'minutes'=>$request->minutes,
            'price'=>$request->price,
            'amount'=>$request->amount,

        ]);
        return redirect()->route('recharagecards');

    }


    public function update(Request $request)
    {
        try {
            $recharagecard = Recharagecard::find($request->id);
            $recharagecard->name=$request->name;
            $recharagecard->minutes=$request->minutes;
            $recharagecard->price=$request->price;
            $recharagecard->amount=$request->amount;

            $recharagecard->save();

            return redirect()->route('recharagecards');
        }
        catch
        (\Exception $e) {
            return redirect()->back()->withErrors(['error' => $e->getMessage()]);
        }
      }


      public function delete($id)
      {
              Recharagecard::destroy($id);
              return redirect()->route('recharagecards');

      }
}
