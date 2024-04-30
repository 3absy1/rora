<?php

namespace App\Http\Controllers;

use App\Http\Requests\storeClient;
use App\Models\Client;
use Illuminate\Http\Request;

class ClientController extends Controller
{
    public function index() {
        return view('clients',[
            'clients' => Client::all()
        ]);

    }


    public function update(storeClient $request)
    {
        try {
            $client = Client::find($request->id);
            $client->name=$request->name;
            $client->email=$request->email;
            $client->phone=$request->phone;
            $client->minutes=$request->minutes;
            $client->ads_count=$request->ads_count;
            $client->ads_minutes=$request->ads_minutes;
            $client->save();

            return redirect()->route('clients');
        }
        catch
        (\Exception $e) {
            return redirect()->back()->withErrors(['error' => $e->getMessage()]);
        }
      }


      public function delete($id)
      {
              Client::destroy($id);
              return redirect()->route('clients');

      }

    }
