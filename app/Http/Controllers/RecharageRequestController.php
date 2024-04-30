<?php

namespace App\Http\Controllers;

use App\Models\RecharageRequest;
use Illuminate\Http\Request;

class RecharageRequestController extends Controller
{
    public function index()
    {
        return view('recharageRequests',[
            'recharageRequests' => RecharageRequest::all()
        ]);
    }
    public function update(Request $request)
    {
        try {
            $simcard = RecharageRequest::find($request->id);
            $simcard->price=$request->price;
            $simcard->save();

            return redirect()->route('recharageRequests');
        }
        catch
        (\Exception $e) {
            return redirect()->back()->withErrors(['error' => $e->getMessage()]);
        }
      }


      public function delete($id)
      {
        RecharageRequest::destroy($id);
              return redirect()->route('recharageRequests');

      }
}
