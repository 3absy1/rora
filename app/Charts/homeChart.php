<?php

namespace App\Charts;

use App\Models\Plans;
use App\Models\Client;
use App\Models\SimsCard;
use App\Models\Recharagecard;
use ArielMejiaDev\LarapexCharts\LarapexChart;

class homeChart
{
    protected $home;

    public function __construct(LarapexChart $home)
    {
        $this->home = $home;
    }

    public function build(): \ArielMejiaDev\LarapexCharts\PolarAreaChart
    {
        return $this->home->polarAreaChart()
            // ->setTitle('Los Angeles vs Miami.')
            // ->setSubtitle('Wins during season 2021.')
            ->setColors(['#6e51f8', '#e87fe3','a069f1'])
            ->addData([
                Client::count(),
                SimsCard::count(),
                Plans::count(),
                Recharagecard::count(),

                ])
                ->setLabels(['client','simcard','plan','recharagecard', ]);
    }
}
