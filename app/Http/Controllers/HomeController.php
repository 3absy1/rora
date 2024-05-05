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
    public function index(ClientChart $chart,homeChart $home)
    {
        $previousCount = $this->getPreviousClientCount();
        return view('home',[
            'sims' => SimsCard::count(),
            'clients' => Client::count(),
            'plans' => Plans::all(),
            'subscribtions' => Subscribtions::count(),
            'calls' => Call::count(),
            'reviews' => Reviews::count(),
            'orders' => Orders::count(),
            'creditTransactions' => CreditTransaction::count(),
            'recharagecards' => Recharagecard::all(),
            'recharageRequests' => RecharageRequest::all(),
            'clientPayments' => ClientPayment::all(),
            'callRequests' => CallRequest::all(),
            'previousCount' => $previousCount ,
            'chart' => $chart->build(),
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
