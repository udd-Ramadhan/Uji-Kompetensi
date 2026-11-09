<?php

namespace App\Filament\Resources\Pegawai\Pages;

use App\Filament\Resources\Pegawai\PegawaiResource;
use Filament\Actions\DeleteAction;
use Filament\Actions\ViewAction;
use Filament\Resources\Pages\EditRecord;

class EditPegawai extends EditRecord
{
    protected static string $resource = PegawaiResource::class;

    protected static ?string $title = 'Ubah Pegawai';

    protected static ?string $breadcrumb = 'Ubah';

    protected function getHeaderActions(): array
    {
        return [
            ViewAction::make()->label('Lihat'),
            DeleteAction::make()->label('Hapus'),
        ];
    }
}
