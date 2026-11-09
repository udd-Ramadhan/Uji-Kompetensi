<?php

namespace App\Filament\Resources\Pegawai;

use App\Filament\Resources\Pegawai\Pages\CreatePegawai;
use App\Filament\Resources\Pegawai\Pages\EditPegawai;
use App\Filament\Resources\Pegawai\Pages\ListPegawai;
use App\Filament\Resources\Pegawai\Pages\ViewPegawai;
use App\Filament\Resources\Pegawai\Schemas\PegawaiForm;
use App\Filament\Resources\Pegawai\Schemas\PegawaiInfolist;
use App\Filament\Resources\Pegawai\Tables\PegawaiTable;
use App\Models\Pegawai;
use BackedEnum;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Table;

class PegawaiResource extends Resource
{
    protected static ?string $model = Pegawai::class;

    protected static ?string $slug = 'pegawai';

    protected static ?string $modelLabel = 'Pegawai';

    protected static ?string $pluralModelLabel = 'Pegawai';

    protected static ?string $navigationLabel = 'Pegawai';

    protected static string|BackedEnum|null $navigationIcon = Heroicon::OutlinedRectangleStack;

    protected static ?string $recordTitleAttribute = 'nama_pegawai';

    public static function form(Schema $schema): Schema
    {
        return PegawaiForm::configure($schema);
    }

    public static function infolist(Schema $schema): Schema
    {
        return PegawaiInfolist::configure($schema);
    }

    public static function table(Table $table): Table
    {
        return PegawaiTable::configure($table);
    }

    public static function getRelations(): array
    {
        return [
            //
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => ListPegawai::route('/'),
            'create' => CreatePegawai::route('/create'),
            'view' => ViewPegawai::route('/{record}'),
            'edit' => EditPegawai::route('/{record}/edit'),
        ];
    }
}