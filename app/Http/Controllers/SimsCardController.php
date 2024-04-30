<?php

namespace App\Http\Controllers;

use App\Models\SimsCard;
use Illuminate\Http\Request;

class SimsCardController extends Controller
{
    public function index()
    {
        return view('simscard',[
            'sims' => SimsCard::all()
        ]);
    }


    public function create(Request $request)
    {
        SimsCard::create([
            'phone_number'=>$request->phone_number,

        ]);
        return redirect()->route('simscard');

    }


    public function update(Request $request)
    {
        try {
            $simcard = SimsCard::find($request->id);
            $simcard->phone_number=$request->phone_number;
            $simcard->is_active=$request->is_active;
            $simcard->save();

            return redirect()->route('simscard');
        }
        catch
        (\Exception $e) {
            return redirect()->back()->withErrors(['error' => $e->getMessage()]);
        }
      }


      public function delete($id)
      {
              SimsCard::destroy($id);
              return redirect()->route('simscard');

      }
}
