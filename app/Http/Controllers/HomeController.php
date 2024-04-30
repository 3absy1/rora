<?php

namespace App\Http\Controllers;

use App\Models\Call;
use App\Models\Home;
use App\Models\Plans;
use App\Models\Client;
use App\Models\Orders;
use App\Models\Reviews;
use App\Models\SimsCard;
use Flowframe\Trend\Trend;
use App\Models\CallRequest;
use Illuminate\Http\Request;
use App\Models\ClientPayment;
use App\Models\Recharagecard;
use App\Models\Subscribtions;
use App\Models\RecharageRequest;
use App\Models\CreditTransaction;
use Flowframe\Trend\TrendValue;

class HomeController extends Controller
{
    public function index()
    {
        $previousCount = $this->getPreviousClientCount();

        return view('home',[
            'sims' => SimsCard::all(),
            'clients' => Client::all(),
            'plans' => Plans::all(),
            'subscribtions' => Subscribtions::all(),
            'calls' => Call::all(),
            'reviews' => Reviews::all(),
            'orders' => Orders::all(),
            'creditTransactions' => CreditTransaction::all(),
            'recharagecards' => Recharagecard::all(),
            'recharageRequests' => RecharageRequest::all(),
            'clientPayments' => ClientPayment::all(),
            'callRequests' => CallRequest::all(),
            'previousCount' => $previousCount ,


        ]);
    }

    private function getPreviousClientCount()
    {
        // Query to get the count of clients from the previous period
        $previousCount = Client::where('created_at', '<', now()->subDay())
                                ->count();

        return $previousCount;
    }

    public function getData()
    {
        // $client= Client::all()->where('client_id',auth()->user()->id);
        // // $call= Call

                // Totals per month
                $data = Trend::model(Client::class)
                ->between(
                    start: now()->startOfWeek(),
                    end: now()->endOfWeek(),
                )
                ->perDay()
                ->count();

                return [
                    'datasets' =>[
                        [
                        'label' => 'chart',
                        'data' => $data->map(fn (TrendValue $value)=> $value->aggregate),
                        'borderColor' => '#36A2EB',
                        ],
                    ],
                    'label' => ['Sun','Mon','Thu','Wen','Tue','Fri','Sat'],
                ];

    }
}
