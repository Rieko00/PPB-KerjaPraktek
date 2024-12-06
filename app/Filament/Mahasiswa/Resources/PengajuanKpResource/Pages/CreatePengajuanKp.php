<?php

namespace App\Filament\Mahasiswa\Resources\PengajuanKpResource\Pages;

use App\Filament\Mahasiswa\Resources\PengajuanKpResource;
use Filament\Resources\Pages\CreateRecord;
use Illuminate\Support\Facades\Auth;
use Filament\Notifications\Actions\Action;
use Filament\Notifications\Notification;

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

    protected function beforeCreate(): void
    {
        // dd(Auth::user());    
        if (Auth::user()->jumlah_sks < 70) {
            Notification::make()
                ->danger()
                ->title('Jumalh SKS Tidak Mencukupi')
                ->body('Anda harus memiliki minimal 70 SKS untuk mengajukan KP.')
                ->persistent()
                ->actions([
                    Action::make('ok')
                        ->button()
                        ->close(),
                ])
                ->send();

            $this->halt();
        }
    }
}
