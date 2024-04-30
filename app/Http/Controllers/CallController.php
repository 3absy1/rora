<?php

namespace App\Http\Controllers;

use App\Models\Call;
use Illuminate\Http\Request;

class CallController extends Controller
{
    public function index()
    {
        return view('calls',[
            'calls' => Call::all()
        ]);
    }

    public function update(Request $request)
    {
        try {
            $call = Call::find($request->id);
            $call->user1=$request->user1;
            $call->user2=$request->user2;
            $call->call_ended=$request->call_ended;
            $call->duration=$request->duration;

            $call->save();

            return redirect()->route('calls');
        }
        catch (\Exception $e) {
            return redirect()->back()->withErrors(['error' => $e->getMessage()]);
        }
      }


      public function delete($id)
      {
              Call::destroy($id);
              return redirect()->route('calls');

      }
}
