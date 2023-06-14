<?php

namespace App\Filament\Widgets;

use App\Models\Period;
use App\Models\Schedule;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Saade\FilamentFullCalendar\Widgets\FullCalendarWidget;

class CalendarWidget extends FullCalendarWidget
{
    /**
     * Return events that should be rendered statically on calendar.
     */
    public function getViewData(): array
    {
        if (Auth::user()->role === 'admin') {
            return Period::get()->map(function($jadwal){
                return [
                    'id' => $jadwal->id,
                    'title' => $jadwal->name,
                    'start' => $jadwal->start_date,
                    'end' => $jadwal->end_date,
                ];
            })->toArray();
        }

        return Schedule::with('period')
            ->where('user_id', Auth::id())
            ->get()
            ->map(function ($schedule) {
                return [
                    'id' => $schedule->id,
                    'title' => $schedule->period->name,
                    'start' => $schedule->period->start_date,
                    'end' => $schedule->period->end_date,
                ];
            })->toArray();

    }

    /**
     * FullCalendar will call this function whenever it needs new event data.
     * This is triggered when the user clicks prev/next or switches views on the calendar.
     */
    public function fetchEvents(array $fetchInfo): array
    {
        // You can use $fetchInfo to filter events by date.
        return [];
    }

    public static function canCreate(): bool
    {
        // Returning 'false' will remove the 'Create' button on the calendar.
        return false;
    }

    public static function canEdit(?array $event = null): bool
    {
        // Returning 'false' will disable the edit modal when clicking on a event.
        return false;
    }
}
