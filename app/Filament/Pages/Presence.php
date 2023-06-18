<?php

namespace App\Filament\Pages;

use App\Models\Presence as ModelsPresence;
use App\Models\Schedule;
use App\Models\User;
use Filament\Pages\Page;
use Filament\Pages\Actions\Action;
use Filament\Forms;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Auth;

class Presence extends Page
{
    protected static ?string $navigationIcon = 'heroicon-o-key';

    protected static string $view = 'filament.pages.presence';

    protected static ?string $navigationLabel = 'Presensi';

    protected ?string $heading = 'Presensi';

    protected function getActions(): array
    {
        return [
            Action::make('presensi')
                ->hidden(function (): bool {
                    $today = Carbon::today();
                    $alreadyPresence =  ModelsPresence::where('user_id', Auth::id())
                        ->whereDate('created_at', Carbon::today())->count() > 0;

                    $hasSchedule = Schedule::where('week', $today->weekNumberInMonth)
                        ->where('day', $today->dayOfWeekIso)
                        ->where('is_accepted', true)
                        ->whereHas('squad', function ($q) {
                            $q->where('id', Auth::user()->squad_id);
                        })
                        ->count() > 0;

                    return $alreadyPresence || !$hasSchedule;
                })
                ->label('Presensi')
                ->action(function (array $data): void {
                    $today = Carbon::today();
                    $data['user_id'] = Auth::id();
                    $data['schedule_id'] = Schedule::where('week', $today->weekNumberInMonth)
                    ->where('day', $today->dayOfWeekIso)
                    ->where('is_accepted', true)
                    ->whereHas('squad', function ($q) {
                        $q->where('id', Auth::user()->squad_id);
                    })->first()->id;

                    ModelsPresence::create($data);

                    redirect('/presence');
                })->form([
                    Forms\Components\Textarea::make('keterangan')
                    ->label('Keterangan')
                    ->required(),
                ]),
        ];
    }

    protected static function shouldRegisterNavigation(): bool
    {
        return Auth::user()->role === 'anggota';
    }
}
