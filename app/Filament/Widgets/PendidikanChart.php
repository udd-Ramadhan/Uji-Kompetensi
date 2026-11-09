<?php

namespace App\Filament\Widgets;

use App\Models\Pegawai;
use Filament\Widgets\ChartWidget;

class PendidikanChart extends ChartWidget
{
    protected ?string $heading = 'Grafik Pendidikan Terakhir';
    
    protected static ?int $sort = 2;

    protected function getData(): array
    {
        $kategoriPendidikan = ['SMA/SMK', 'D3', 'D4', 'S1', 'S2', 'S3'];
        $totalPerKategori = [];

        foreach ($kategoriPendidikan as $pendidikan) {
            $totalPerKategori[] = Pegawai::where('pendidikan_terakhir', $pendidikan)->count();
        }

        return [
            'datasets' => [
                [
                    'label' => 'Jumlah Pegawai',
                    'data' => $totalPerKategori,
                    'backgroundColor' => '#4ADE80', // Warna Hijau
                ],
            ],
            'labels' => $kategoriPendidikan,
        ];
    }

    protected function getType(): string
    {
        return 'bar';
    }
}