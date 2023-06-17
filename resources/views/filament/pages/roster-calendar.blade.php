<x-filament::page>
    {{-- <div class="grid grid-cols-1 filament-widgets-container">
        <div class="space-y-2 rounded-xl bg-white p-2 shadow">
            <div class="space-y-2">
                <div class="space-y-4 px-4 py-2">
                    <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400 border-collapse border border-slate-400">
                        <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                            <tr>
                                <th scope="col" class="border border-slate-300 px-6 py-3">Regu</th>
                                @foreach ($days as $i => $day)
                                <th scope="col" class="border border-slate-300 px-6 py-3 text-center">
                                    {{ $day }} <br/>
                                    <span class="italic">{{ $today->startOfWeek()->addDays($i)->format('d') }}</span>
                                </th>
                                @endforeach
                            </tr>
                        </thead>
                        <tbody>
                            <h4 class="text-center mb-4 font-extrabold leading-none tracking-tight text-gray-900 md:text-4xl dark:text-white">Jadwal Piket Minggu ke- {{ $today->weekOfMonth }}</h4>
                            @foreach ($squads as $squad)
                            <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                                <th class="border border-slate-300 bg-white border-b dark:bg-gray-800 dark:border-gray-700 px-6 py-3">{{ $squad['name'] }}</th>
                                @foreach ($squad['schedules'] as $schedule)
                                    <td class="text-center">
                                    @if ($schedule)
                                        @if ($schedule['period']['name'] == 'Pagi')
                                        <div class="filament-tables-badge-column flex px-4 py-3 justify-center">
                                            <div class="min-h-6 inline-flex items-center justify-center space-x-1 whitespace-nowrap rounded-xl px-2 py-0.5 text-sm font-medium tracking-tight rtl:space-x-reverse text-primary-700 bg-primary-500/10">
                                                {{ $schedule['period']['name'] }}
                                            </div>
                                        </div>
                                        @endif
                                        @if ($schedule['period']['name'] == 'Malam')
                                        <div class="filament-tables-badge-column flex px-4 py-3 justify-center">
                                            <div class="min-h-6 inline-flex items-center justify-center space-x-1 whitespace-nowrap rounded-xl px-2 py-0.5 text-sm font-medium tracking-tight rtl:space-x-reverse text-success-700 bg-success-500/10">
                                                <span>{{ $schedule['period']['name'] }}</span>
                                            </div>
                                        </div>
                                        @endif
                                    @else
                                    <span class="text-stone-800">Lepas Dinas</span>
                                    @endif
                                </td>
                                @endforeach
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div> --}}
</x-filament::page>
