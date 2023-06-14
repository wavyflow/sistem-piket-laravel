<?php

namespace App\Http\Livewire;

use App\Models\Presence;
use App\Models\Schedule;
use Filament\Tables;
use Illuminate\Contracts\View\View;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class ListPresence extends Component implements Tables\Contracts\HasTable
{
    use Tables\Concerns\InteractsWithTable;

    protected function getTableQuery(): Builder
    {
        return Presence::query()->where('user_id', Auth::id());
    }

    protected function getTableEmptyStateIcon(): ?string
    {
        return 'heroicon-o-bookmark';
    }

    protected function getTableEmptyStateHeading(): ?string
    {
        return 'Tidak ada riwayat presensi';
    }

    protected function getTableColumns(): array
    {
        return [
            Tables\Columns\TextColumn::make('id'),
            Tables\Columns\TextColumn::make('keterangan')->label('Keterangan'),
            Tables\Columns\BadgeColumn::make('created_at')->color('success')
            // Tables\Columns\TextColumn::make('period.name')->label('Jadwal'),
            // Tables\Columns\TextColumn::make('period.date')->label('Periode')->alignCenter(),
            // Tables\Columns\BadgeColumn::make('is_accepted')->color(function ($state) {
            //     if ($state) {
            //         return 'success';
            //     }
            //     return 'danger';
            // })->enum([
            //     0 => 'Non Aktif',
            //     1 => 'Aktif'
            // ])->label('Status'),
        ];
    }

    public function render(): View
    {
        return view('livewire.list-presence');
    }
}
