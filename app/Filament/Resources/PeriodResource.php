<?php

namespace App\Filament\Resources;

use App\Filament\Resources\PeriodResource\Pages;
use App\Filament\Resources\PeriodResource\RelationManagers;
use App\Models\Period;
use Filament\Forms;
use Filament\Resources\Form;
use Filament\Resources\Resource;
use Filament\Resources\Table;
use Filament\Tables;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class PeriodResource extends Resource
{
    protected static ?string $model = Period::class;

    protected static ?string $navigationIcon = 'heroicon-o-template';

    protected static ?string $modelLabel = 'Jadwal Periode';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('name')->label('Nama Periode')
                    ->required()
                    ->maxLength(255),
                Forms\Components\TimePicker::make('start')->label('Mulai jam')
                    ->required(),
                Forms\Components\TimePicker::make('end')->label('Berakhir jam')
                    ->required(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('name')->label('Nama Periode'),
                Tables\Columns\TextColumn::make('start')->label('Mulai jam')
                    ->time(),
                Tables\Columns\TextColumn::make('end')->label('Berakhir jam')
                    ->time(),
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\ViewAction::make(),
                Tables\Actions\EditAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\DeleteBulkAction::make(),
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
            'index' => Pages\ListPeriods::route('/'),
            'create' => Pages\CreatePeriod::route('/create'),
            'view' => Pages\ViewPeriod::route('/{record}'),
            'edit' => Pages\EditPeriod::route('/{record}/edit'),
        ];
    }
}
