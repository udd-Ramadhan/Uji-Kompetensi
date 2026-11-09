<?php

namespace App\Filament\Resources\Pegawai\Schemas;

use Filament\Forms\Components\DatePicker;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Schemas\Schema;

class PegawaiForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('nama_pegawai')
                    ->label('Nama Pegawai')
                    ->placeholder('Masukkan nama lengkap pegawai')
                    ->validationAttribute('nama pegawai')
                    ->validationMessages([
                        'required' => 'Kolom nama pegawai wajib diisi.',
                        'max' => 'Nama pegawai tidak boleh lebih dari :max karakter.',
                    ])
                    ->required()
                    ->maxLength(255),
                Select::make('jenis_kelamin')
                    ->label('Jenis Kelamin')
                    ->placeholder('Pilih jenis kelamin')
                    ->validationAttribute('jenis kelamin')
                    ->validationMessages([
                        'required' => 'Kolom jenis kelamin wajib diisi.',
                    ])
                    ->options([
                        'Laki-laki' => 'Laki-laki',
                        'Perempuan' => 'Perempuan',
                    ])
                    ->required(),
                Select::make('pendidikan_terakhir')
                    ->label('Pendidikan Terakhir')
                    ->placeholder('Pilih pendidikan terakhir')
                    ->validationAttribute('pendidikan terakhir')
                    ->validationMessages([
                        'required' => 'Kolom pendidikan terakhir wajib diisi.',
                    ])
                    ->options([
                        'SMA/SMK' => 'SMA/SMK',
                        'D3' => 'D3',
                        'D4' => 'D4',
                        'S1' => 'S1',
                        'S2' => 'S2',
                        'S3' => 'S3',
                    ])
                    ->required(),
                DatePicker::make('tanggal_lahir')
                    ->label('Tanggal Lahir')
                    ->placeholder('Pilih tanggal lahir')
                    ->displayFormat('d/m/Y')
                    ->validationAttribute('tanggal lahir')
                    ->validationMessages([
                        'required' => 'Kolom tanggal lahir wajib diisi.',
                    ])
                    ->required(),
            ]);
    }
}
