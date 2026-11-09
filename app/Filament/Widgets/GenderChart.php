<?php

namespace App\Filament\Widgets;

use App\Models\Pegawai;
use Filament\Widgets\ChartWidget;

class GenderChart extends ChartWidget
{
    // Judul grafik di dashboard
    protected ?string $heading = 'Perbandingan Gender Pegawai';
    
    // Urutan tampil (semakin kecil semakin di atas)
    protected static ?int $sort = 1;

    protected function getData(): array
    {
        // Menghitung jumlah data dari database
        $lakiLaki = Pegawai::where('jenis_kelamin', 'Laki-laki')->count();
        $perempuan = Pegawai::where('jenis_kelamin', 'Perempuan')->count();

        return [
            'datasets' => [
                [
                    'label' => 'Total',
                    'data' => [$lakiLaki, $perempuan],
                    'backgroundColor' => ['#36A2EB', '#FF6384'], // Warna Biru dan Merah Muda
                ],
            ],
            'labels' => ['Laki-laki', 'Perempuan'],
        ];
    }

    protected function getType(): string
    {
        return 'pie';
    }
}