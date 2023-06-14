<?php

namespace App\Filament\Pages;

use App\Models\Presence as ModelsPresence;
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
                    return ModelsPresence::where('user_id', Auth::id())
                        ->whereDate('created_at', Carbon::today())->count() > 0;
                })
                ->label('Presensi')
                ->action(function (array $data): void {
                    $data['user_id'] = Auth::id();

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
