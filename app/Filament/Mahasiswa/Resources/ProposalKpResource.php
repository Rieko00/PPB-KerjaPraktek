<?php

namespace App\Filament\Mahasiswa\Resources;

use App\Filament\Mahasiswa\Resources\ProposalKpResource\Pages;
use App\Filament\Mahasiswa\Resources\ProposalKpResource\RelationManagers;
use App\Models\ProposalKp;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class ProposalKpResource extends Resource
{
    protected static ?string $model = ProposalKp::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';
    // protected static ?string $slug = 'mahasiswa';

    // Ganti label di navigasi
    protected static ?string $navigationLabel = 'Proposal KP';

    // Ganti nama grup di navigasi (jika perlu)
    protected static ?string $navigationGroup = 'Kerja Praktek';

    protected static ?int $navigationSort = 2;

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('id_pengajuan_kp')
                    ->label('ID Pengajuan KP')
                    ->default(fn() => request()->query('record'))
                    ->readOnlyOn('create')
                    ->hiddenOn('edit'),
                Forms\Components\Select::make('status_proposal')
                    ->options([
                        'pending' => 'Pending',
                        'approved' => 'Approved',
                        'rejected' => 'Rejected',
                    ])
                    ->required()
                    ->default('pending')
                    ->disabledOn('create'),
                Forms\Components\FileUpload::make('file')
                    ->required()
                    ->acceptedFileTypes(['application/pdf'])
                    ->openable()
                    ->downloadable(),
                Forms\Components\Textarea::make('keterangan')
                    ->required()
                    ->default('-')
                    ->readOnlyOn('create'),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('mahasiswa.name')
                    ->label('Nama Mahasiswa'),
                TextColumn::make('status_proposal')
                    ->label('Status Proposal'),
                TextColumn::make('keterangan')
                    ->label('Keterangan'),
                TextColumn::make('created_at')
                    ->label('dibuat')
                    ->sortable()
                    ->since()
                    ->dateTimeTooltip(),
                TextColumn::make('updated_at')
                    ->label('diperbarui')
                    ->sortable()
                    ->since()
                    ->dateTimeTooltip(),

            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make(),
                ]),
            ]);
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
            'index' => Pages\ListProposalKps::route('/'),
            'create' => Pages\CreateProposalKp::route('/create'),
            'edit' => Pages\EditProposalKp::route('/{record}/edit'),
            'view' => Pages\ViewProposalKps::route('/{record}'),
        ];
    }
}
