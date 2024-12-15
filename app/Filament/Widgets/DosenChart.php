<?php

namespace App\Filament\Widgets;

use App\Models\Dosen;
use Flowframe\Trend\Trend;
use Flowframe\Trend\TrendValue;
use Filament\Widgets\ChartWidget;

class DosenChart extends ChartWidget
{
    protected static ?string $heading = 'Dosen Chart'; 

    protected function getData(): array
    {
        $data = Trend::model(Dosen::class) 
            ->between(
                start: now()->startOfYear(),
                end: now()->endOfYear(),
            )
            ->perMonth()
            ->count();

        return [
            'datasets' => [
                [
                    'label' => 'Jumlah Dosen',
                    'data' => $data->map(fn (TrendValue $value) => $value->aggregate),
                ],
            ],
            'labels' => $data->map(fn (TrendValue $value) => (new \DateTime($value->date))->format('F'))        
        ];
    }

    protected function getType(): string
    {
        return 'line';
    }
}
