<?php

namespace App\Filament\Resources;

use App\Filament\Resources\MatkulResource\Pages;
use App\Filament\Resources\MatkulResource\RelationManagers;
use App\Models\Matkul;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use Filament\Tables\Columns\TextColumn;
use Filament\Forms\Components\TextInput;

class MatkulResource extends Resource
{
    protected static ?string $model = Matkul::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                TextInput::make('kode_matkul')
                    ->required(),
                TextInput::make('nama_matkul')
                    ->required(),
                TextInput::make('sks')
                    ->required(),         
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('kode_matkul')->sortable()->searchable(),
                TextColumn::make('nama_matkul')->sortable()->searchable(),
                TextColumn::make('sks'),
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
            'index' => Pages\ListMatkuls::route('/'),
            'create' => Pages\CreateMatkul::route('/create'),
            'edit' => Pages\EditMatkul::route('/{record}/edit'),
        ];
    }
}
