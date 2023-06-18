<?php

namespace App\Filament\Pages;

use Carbon\Carbon;
use Filament\Pages\Page;
use Illuminate\Support\Facades\Auth;

class PresenceReport extends Page
{
    protected static ?string $navigationIcon = 'heroicon-o-archive';

    protected static string $view = 'filament.pages.presence-report';

    protected static ?string $navigationLabel = 'Laporan Presensi';

    protected static function shouldRegisterNavigation(): bool
    {
        return Auth::user()->role === 'pimpinan';
    }

    protected function getViewData(): array
    {
        return [
            'currentMonth' => intval(request('month') ?? Carbon::today()->month),
        ];
    }
}
