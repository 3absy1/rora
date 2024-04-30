<?php

namespace App\Http\Controllers;

use App\Models\Plans;
use App\Models\Orders;
use Illuminate\Http\Request;

class OrdersController extends Controller
{
    public function index()
    {
        return view('orders',[
            'orders' => Orders::all(),
            'plans' => Plans::all()

        ]);
    }


    public function update(Request $request)
    {
        try {
            $order = Orders::find($request->id);
            $order->plan_id=$request->plan_id;
            $order->is_paid=$request->is_paid;
            $order->total_price=$request->total_price;

            $order->save();

            return redirect()->route('orders');
        }
        catch
        (\Exception $e) {
            return redirect()->back()->withErrors(['error' => $e->getMessage()]);
        }
      }


      public function delete($id)
      {
        Orders::destroy($id);
              return redirect()->route('orders');

      }

}
