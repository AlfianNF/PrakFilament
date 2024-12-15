<?php

namespace App\Filament\Widgets;

use App\Models\Matkul;
use Flowframe\Trend\Trend;
use Flowframe\Trend\TrendValue;
use Filament\Widgets\ChartWidget;

class MatkulChart extends ChartWidget
{
    protected static ?string $heading = 'Matkul Chart';

    protected function getData(): array
    {
        $data = Matkul::all();

        return [
            'datasets' => [
                [
                    'label' => 'Jumlah Matkul',
                    'data' => $data->map(fn ($matkul) => $matkul->sks ?? 0),
                ],
            ],
            'labels' => $data->map(fn ($matkul) => $matkul->nama_matkul ?? 'Tidak Diketahui'),       
        ];
    }


    protected function getType(): string
    {
        return 'line';
    }
}
