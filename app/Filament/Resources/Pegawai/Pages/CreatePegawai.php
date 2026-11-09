<?php

namespace App\Filament\Resources\Pegawai\Pages;

use App\Filament\Resources\Pegawai\PegawaiResource;
use Filament\Actions\Action;
use Filament\Resources\Pages\CreateRecord;
use Filament\Support\Enums\Alignment;

class CreatePegawai extends CreateRecord
{
    protected static string $resource = PegawaiResource::class;

    protected static ?string $title = 'Tambah Pegawai';

    protected static ?string $breadcrumb = 'Tambah';

    protected function getCreateFormAction(): Action
    {
        return Action::make('create')
            ->label('Simpan')
            ->action('create')
            ->requiresConfirmation()
            ->modalIcon('heroicon-o-user-plus')
            ->modalIconColor('primary')
            ->modalAlignment(Alignment::Center)
            ->modalHeading('Konfirmasi Tambah Pegawai')
            ->modalDescription('Apakah Anda yakin ingin menyimpan data pegawai ini?')
            ->modalSubmitActionLabel('Ya, Simpan')
            ->modalCancelActionLabel('Batal');
    }

    protected function getCreateAnotherFormAction(): Action
    {
        return Action::make('createAnother')
            ->label('Simpan & Tambah Lagi')
            ->action('createAnother')
            ->requiresConfirmation()
            ->modalIcon('heroicon-o-user-plus')
            ->modalIconColor('primary')
            ->modalAlignment(Alignment::Center)
            ->modalHeading('Konfirmasi Tambah Pegawai')
            ->modalDescription('Apakah Anda yakin ingin menyimpan data pegawai ini dan langsung menambah yang baru?')
            ->modalSubmitActionLabel('Ya, Simpan & Tambah Lagi')
            ->modalCancelActionLabel('Batal');
    }
}