<?php

namespace App\Filament\Widgets;

use App\Models\Pegawai;
use Filament\Widgets\ChartWidget;
use Illuminate\Support\Carbon;

class UsiaChart extends ChartWidget
{
    // Tanpa kata "static" agar kompatibel dengan versi Filament Anda
    protected ?string $heading = 'Grafik Distribusi Usia Pegawai';

    protected static ?int $sort = 3;

    // Menampilkan grafik secara penuh di baris bawah dashboard
    protected int | string | array $columnSpan = 'full';

    protected function getData(): array
    {
        $dataPegawai = Pegawai::select('tanggal_lahir')->get();

        $kelompokUsia = [
            '< 25 Thn'    => 0,
            '25 - 34 Thn' => 0,
            '35 - 44 Thn' => 0,
            '45 - 54 Thn' => 0,
            '>= 55 Thn'   => 0,
        ];

        foreach ($dataPegawai as $pegawai) {
            if (! $pegawai->tanggal_lahir) {
                continue;
            }

            // Hitung umur pegawai dari tanggal lahir menggunakan Carbon
            $usia = Carbon::parse($pegawai->tanggal_lahir)->age;

            if ($usia < 25) {
                $kelompokUsia['< 25 Thn']++;
            } elseif ($usia >= 25 && $usia <= 34) {
                $kelompokUsia['25 - 34 Thn']++;
            } elseif ($usia >= 35 && $usia <= 44) {
                $kelompokUsia['35 - 44 Thn']++;
            } elseif ($usia >= 45 && $usia <= 54) {
                $kelompokUsia['45 - 54 Thn']++;
            } else {
                $kelompokUsia['>= 55 Thn']++;
            }
        }

        return [
            'datasets' => [
                [
                    'label' => 'Jumlah Pegawai',
                    'data' => array_values($kelompokUsia),
                    'backgroundColor' => '#F59E0B',
                ],
            ],
            'labels' => array_keys($kelompokUsia),
        ];
    }

    protected function getType(): string
    {
        return 'bar';
    }
}