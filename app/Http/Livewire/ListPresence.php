<?php

namespace App\Http\Livewire;

use App\Models\Presence;
use App\Models\Schedule;
use Filament\Tables;
use Filament\Tables\Columns\BadgeColumn;
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
            Tables\Columns\TextColumn::make('id')->label('ID'),
            Tables\Columns\TextColumn::make('keterangan')->label('Keterangan'),
            Tables\Columns\BadgeColumn::make('created_at')->dateTime('l, d F Y \P\u\k\u\l H:i')->label('Tanggal Presensi')->color('success')->alignCenter(),
            BadgeColumn::make('schedule.week')->label('Jadwal Minggu')->color('primary')->enum([
                1 => 'Pertama',
                2 => 'Kedua',
                3 => 'Ketiga',
                4 => 'Keempat',
            ])->alignCenter(),
            BadgeColumn::make('schedule.day')->label('Jadwal Hari')->color('primary')->enum([
                1 => 'Senin',
                2 => 'Selasa',
                3 => 'Rabu',
                4 => 'Kamis',
                5 => 'Jumat',
                6 => 'Sabtu',
                7 => 'Minggu',
            ])->alignCenter(),
            BadgeColumn::make('schedule.period.name')->label('Periode Piket')->color('primary')->alignCenter()
        ];
    }

    public function render(): View
    {
        return view('livewire.list-presence');
    }
}
