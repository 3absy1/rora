<?php

namespace App\Http\Controllers;

use App\Models\CreditTransaction;
use Illuminate\Http\Request;

class CreditTransactionController extends Controller
{
    public function index()
    {
        return view('creditTransactions',[
            'creditTransactions' => CreditTransaction::all()
        ]);
    }

    public function update(Request $request)
    {
        try {
            $CreditTransaction = CreditTransaction::find($request->id);
            $CreditTransaction->user2=$request->user2;
            $CreditTransaction->amount=$request->amount;

            $CreditTransaction->save();

            return redirect()->route('creditTransactions');
        }
        catch
        (\Exception $e) {
            return redirect()->back()->withErrors(['error' => $e->getMessage()]);
        }
      }


      public function delete($id)
      {
        CreditTransaction::destroy($id);
              return redirect()->route('creditTransactions');

      }

}
