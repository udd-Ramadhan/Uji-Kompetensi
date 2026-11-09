<?php

namespace App\Filament\Resources\Pegawai\Pages;

use App\Filament\Resources\Pegawai\PegawaiResource;
use Filament\Actions\EditAction;
use Filament\Resources\Pages\ViewRecord;

class ViewPegawai extends ViewRecord
{
    protected static string $resource = PegawaiResource::class;

    protected static ?string $title = 'Lihat Pegawai';

    protected static ?string $breadcrumb = 'Lihat';

    protected function getHeaderActions(): array
    {
        return [
            EditAction::make()->label('Ubah'),
        ];
    }
}
