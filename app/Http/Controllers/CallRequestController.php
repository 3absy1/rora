<?php

namespace App\Http\Controllers;

use App\Models\CallRequest;
use Illuminate\Http\Request;

class CallRequestController extends Controller
{
    public function index()
    {
        return view('callRequest',[
            'callRequests' => CallRequest::all()
        ]);
    }

    public function update(Request $request)
    {
        try {
            $callRequest = CallRequest::find($request->id);
            $callRequest->status=$request->status;


            $callRequest->save();

            return redirect()->route('callRequests');
        }
        catch
        (\Exception $e) {
            return redirect()->back()->withErrors(['error' => $e->getMessage()]);
        }
      }


      public function delete($id)
      {
        CallRequest::destroy($id);
              return redirect()->route('callRequests');

      }
}
