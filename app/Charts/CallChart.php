<?php

namespace App\Charts;

use App\Models\Call;
use ArielMejiaDev\LarapexCharts\LarapexChart;

class CallChart
{
    protected $call;

    public function __construct(LarapexChart $call)
    {
        $this->call = $call;
    }

    public function build(): \ArielMejiaDev\LarapexCharts\HorizontalBar
    {
        return $this->call->horizontalBarChart()
            // ->setTitle('Top 3 scorers of the team.')
            // ->setSubtitle('Season 2021.')
            ->addData('Calls', [
                Call::count(),
                ])
                ->setXAxis(['call' ]);
    }
}
