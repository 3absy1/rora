<?php

namespace App\Charts;

use App\Models\Reviews;
use ArielMejiaDev\LarapexCharts\LarapexChart;

class reviewChart
{
    protected $review;

    public function __construct(LarapexChart $review)
    {
        $this->review = $review;
    }

    public function build(): \ArielMejiaDev\LarapexCharts\HorizontalBar
    {
        return $this->review->horizontalBarChart()
            ->setColors(['#FFC107', '#D32F2F'])
            ->addData('Clients', [
                Reviews::count(),
                ])
                ->setXAxis(['review' ]);
    }
}
