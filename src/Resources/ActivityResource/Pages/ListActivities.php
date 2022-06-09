<?php

namespace Z3d0X\FilamentLogger\Resources\ActivityResource\Pages;

use Filament\Resources\Pages\ListRecords;

class ListActivities extends ListRecords
{
    public static function getResource(): string
    {
        return config('filament-logger.activity_resource');
    }

    public function mount(): void
    {
        abort_unless(auth()->user()->can('view_view_log'), 403);
    }
}
