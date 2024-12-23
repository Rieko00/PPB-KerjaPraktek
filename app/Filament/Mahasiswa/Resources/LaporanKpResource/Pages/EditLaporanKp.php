<?php

namespace App\Filament\Mahasiswa\Resources\LaporanKpResource\Pages;

use App\Filament\Mahasiswa\Resources\LaporanKpResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditLaporanKp extends EditRecord
{
    protected static string $resource = LaporanKpResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
