<?php

use Carbon\Carbon;

return [
    /**
     * Build information
     */
    'build_date' => Carbon::parse('2024-02-21'),

    'build_version' => 'v0.16.6',

    /**
     * General
     */
    'content_width' => env('CONTENT_WIDTH', '7xl'),

    /**
     * Polling
     */
    'dashboard_polling' => env('DASHBOARD_POLLING', '60s'),

    'notification_polling' => env('NOTIFICATION_POLLING', '60s'),

    'results_polling' => env('RESULTS_POLLING', null),
];
