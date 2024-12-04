<?php

namespace App\Filament\Mahasiswa\Resources\ProposalKpResource\Pages;

use App\Filament\Mahasiswa\Resources\ProposalKpResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditProposalKp extends EditRecord
{
    protected static string $resource = ProposalKpResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}