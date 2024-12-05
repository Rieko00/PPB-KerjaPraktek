<?php

namespace App\Filament\Mahasiswa\Resources\PengajuanKpResource\Pages;

use App\Filament\Mahasiswa\Resources\PengajuanKpResource;
use Filament\Actions;
use Filament\Resources\Pages\CreateRecord;

class CreatePengajuanKp extends CreateRecord
{
    protected static string $resource = PengajuanKpResource::class;
    protected static ?string $title = 'Buat Pengajuan KP';
    protected ?string $heading = 'Buat Pengajuan KP';
    protected function getRedirectUrl(): string
    {
        return $this->getResource()::getUrl('index');
    }
    protected static bool $canCreateAnother = false;
}
