<?php

namespace App\Http\Controllers;

use App\Charts\CallChart;
use App\Models\Call;
use App\Models\Home;
use App\Models\Plans;
use App\Models\Client;
use App\Models\Orders;
use App\Models\Reviews;
use App\Models\SimsCard;
use Flowframe\Trend\Trend;
use App\Charts\ClientChart;
use App\Charts\homeChart;
use App\Charts\reviewChart;
use App\Charts\SimCardChart;
use App\Models\CallRequest;
use Illuminate\Http\Request;
use App\Models\ClientPayment;
use App\Models\Recharagecard;
use App\Models\Subscribtions;
use Flowframe\Trend\TrendValue;
use App\Models\RecharageRequest;
use App\Models\CreditTransaction;

class HomeController extends Controller
{
    public function index(ClientChart $chart,SimCardChart $simcard, CallChart $call, reviewChart $review,homeChart $home)
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
            'chart' => $chart->build(),
            'simcard' => $simcard->build(),
            'call' => $call->build(),
            'review' => $review->build(),
            'home' => $home->build(),


        ]);
    }

    private function getPreviousClientCount()
    {
        // Query to get the count of clients from the previous period
        $previousCount = Client::where('created_at', '<', now()->subDay())
                                ->count();

        return $previousCount;
    }


}
