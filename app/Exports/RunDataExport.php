<?php

namespace App\Exports;

use App\Models\Activity;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\WithMapping;

class RunDataExport implements FromCollection, WithHeadings, WithMapping
{

    public function headings(): array
    {
        return [
            'Nama Peserta',
            'Nama Aktifitas',
            'Jenis Aktifitas',
            'Tanggal Aktifitas',
            'Jarak Ditempuh (km)',
            'Durasi Aktifitas (menit)',
            'Pace (menit/km)',
            'Link Strava',
        ];
    }

    public function collection()
    {
        $activities = Activity::where('activity_type','Run')
                        ->get()
                        ->sortBy('user_id');
        return $activities;
    }

    public function map($activities): array
    {
        return [
            $activities->user->name,
            $activities->activity_name,
            $activities->activity_type,
            Carbon::parse($activities->activity_date)->format('d-m-Y'),
            round(($activities->activity_length/1000), 2),
            gmdate("H:i:s", $activities->activity_duration),
            round(((($activities->activity_duration)/($activities->activity_length/1000))/60), 2),
            'https://www.strava.com/activities/'.$activities->strava_activity_id
        ];
    }
}
