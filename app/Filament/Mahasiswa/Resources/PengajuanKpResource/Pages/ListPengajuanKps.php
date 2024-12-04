<?php

namespace App\Filament\Mahasiswa\Resources\PengajuanKpResource\Pages;

use App\Filament\Mahasiswa\Resources\PengajuanKpResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListPengajuanKp extends ListRecords
{
    protected static string $resource = PengajuanKpResource::class;
    protected static ?string $title = 'Pengajuan KP';
    protected ?string $heading = 'Pengajuan KP';
    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
