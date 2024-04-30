<?php

namespace App\Http\Controllers;

use App\Models\ClientPayment;
use Illuminate\Http\Request;

class ClientPaymentController extends Controller
{
    public function index()
    {
        return view('clientPayment',[
            'clientPayments' => ClientPayment::all()
        ]);
    }

    public function update(Request $request)
    {
        try {
            $clientPayment = ClientPayment::find($request->id);
            $clientPayment->amount=$request->amount;


            $clientPayment->save();

            return redirect()->route('clientPayment');
        }
        catch
        (\Exception $e) {
            return redirect()->back()->withErrors(['error' => $e->getMessage()]);
        }
      }


      public function delete($id)
      {
        ClientPayment::destroy($id);
              return redirect()->route('clientPayment');

      }
}
