<?php

namespace App\Http\Controllers;

use App\Models\PaymentMethod;
use Illuminate\Http\Request;

class PaymentMethodController extends Controller
{
    public function index()
    {
        return view('paymentMethod',[
            'paymentMethods' => PaymentMethod::all()
        ]);
    }

    public function update(Request $request)
    {
        try {
            $paymentMethod = PaymentMethod::find($request->id);
            $paymentMethod->name=$request->name;


            $paymentMethod->save();

            return redirect()->route('paymentMethod');
        }
        catch
        (\Exception $e) {
            return redirect()->back()->withErrors(['error' => $e->getMessage()]);
        }
      }


      public function delete($id)
      {
        PaymentMethod::destroy($id);
              return redirect()->route('paymentMethod');

      }
}
