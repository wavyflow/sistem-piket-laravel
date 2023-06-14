<?php

/**
 * Consider this file the root configuration object for FullCalendar.
 * Any configuration added here, will be added to the calendar.
 * @see https://fullcalendar.io/docs#toc
 */

return [
    'timeZone' => config('app.timezone'),

    'locale' => config('app.locale'),

    'headerToolbar' => [
        'left' => 'today',
        'center' => 'title',
        'right' => 'prev,next',
    ],

    'navLinks' => false,

    'editable' => false,

    'selectable' => false,

    'dayMaxEvents' => false,
];
