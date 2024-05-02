<?php

namespace App\Charts;

use App\Models\Client;
use App\Models\Plans;
use App\Models\Recharagecard;
use App\Models\SimsCard;
use ArielMejiaDev\LarapexCharts\LarapexChart;

class ClientChart
{
    protected $chart;

    public function __construct(LarapexChart $chart)
    {
        $this->chart = $chart;
    }

    public function build(): \ArielMejiaDev\LarapexCharts\HorizontalBar
    {
        return $this->chart->horizontalBarChart()
            // ->setTitle('Sales during 2021.')
            // ->setSubtitle('Physical sales vs Digital sales.')
            ->setColors(['#6e51f8', '#e87fe3','6e51f8','#e87fe3'])
            ->addData('Count', [
                Client::count(),
                SimsCard::count(),
                Plans::count(),
                Recharagecard::count(),            ])
            ->setXAxis(['client', 'sim card', 'plan', 'recharage card']);
        }
}
