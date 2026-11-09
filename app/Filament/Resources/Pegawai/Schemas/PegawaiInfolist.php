<?php

namespace App\Filament\Resources\Pegawai\Schemas;

use Filament\Infolists\Components\TextEntry;
use Filament\Schemas\Schema;

class PegawaiInfolist
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextEntry::make('nama_pegawai')
                    ->label('Nama Pegawai'),
                TextEntry::make('jenis_kelamin')
                    ->label('Jenis Kelamin'),
                TextEntry::make('pendidikan_terakhir')
                    ->label('Pendidikan Terakhir'),
                TextEntry::make('tanggal_lahir')
                    ->label('Tanggal Lahir')
                    ->date('d M Y'),
            ]);
    }
}
