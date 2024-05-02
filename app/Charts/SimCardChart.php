<?php

namespace App\Charts;

use App\Models\SimsCard;
use ArielMejiaDev\LarapexCharts\LarapexChart;

class SimCardChart
{
    protected $simcard;

    public function __construct(LarapexChart $simcard)
    {
        $this->simcard = $simcard;
    }

    public function build(): \ArielMejiaDev\LarapexCharts\HorizontalBar
    {
        return $this->simcard->horizontalBarChart()
            // ->setTitle('Top 3 scorers of the team.')
            // ->setSubtitle('Season 2021.')
            ->addData('SimCard',[
                SimsCard::count(),
            ])
            ->setXAxis(['Sim']);
    }
}
