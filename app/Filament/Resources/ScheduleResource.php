<?php

namespace App\Filament\Resources;

use App\Filament\Resources\ScheduleResource\Pages;
use App\Filament\Resources\ScheduleResource\RelationManagers;
use App\Models\Schedule;
use App\Models\User;
use Filament\Forms;
use Filament\Forms\Components\Checkbox;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\Toggle;
use Filament\Resources\Form;
use Filament\Resources\Resource;
use Filament\Resources\Table;
use Filament\Tables;
use Filament\Tables\Columns\BadgeColumn;
use Filament\Tables\Columns\TextColumn;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class ScheduleResource extends Resource
{
    protected static ?string $model = Schedule::class;

    protected static ?string $navigationIcon = 'heroicon-o-calendar';

    protected static ?string $modelLabel = 'Jadwal Anggota';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Select::make('user_id')
                    ->relationship('user', 'fullname', function (Builder $query) {
                        return $query->where('role', 'anggota');
                    })
                    ->label('Anggota')
                    ->required()
                    ->disabled(function () {
                        return auth()->user()->role === 'pimpinan';
                    }),
                Select::make('period_id')
                    ->relationship('period', 'name')
                    ->label('Periode')
                    ->required()
                    ->disabled(function () {
                        return auth()->user()->role === 'pimpinan';
                    }),
                Toggle::make('is_accepted')
                    ->label('Status')
                    ->inline()
                    ->hidden(function () {
                        return auth()->user()->role === 'admin';
                    }),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('user.fullname')->label('Nama Anggota'),
                TextColumn::make('period.date')->label('Periode')->alignCenter(),
                BadgeColumn::make('is_accepted')->color(function ($state) {
                    if ($state) {
                        return 'success';
                    }
                    return 'danger';
                })->enum([
                    0 => 'Non Aktif',
                    1 => 'Aktif'
                ])->label('Status')
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
            'index' => Pages\ListSchedules::route('/'),
            'create' => Pages\CreateSchedule::route('/create'),
            'view' => Pages\ViewSchedule::route('/{record}'),
            'edit' => Pages\EditSchedule::route('/{record}/edit'),
        ];
    }

    public static function getEloquentQuery(): Builder
    {
        if (auth()->user()->role === 'admin') {
            return parent::getEloquentQuery()->where('is_accepted', true);
        }

        return parent::getEloquentQuery()->where('is_accepted', false);
    }
}
