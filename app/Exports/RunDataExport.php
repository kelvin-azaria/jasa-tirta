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
            'Jenis Kelamin Peserta',
            'Cabang Peserta',
            'Nama Aktifitas',
            'Jenis Aktifitas',
            'Tanggal Aktifitas',
            'Jarak Ditempuh (km)',
            'Durasi Aktifitas (menit)',
            'Durasi Aktifitas (detik)',
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
            $activities->user->gender,
            $activities->user->work_unit,
            $activities->activity_name,
            $activities->activity_type,
            Carbon::parse($activities->activity_date)->format('d-m-Y'),
            round(($activities->activity_length/1000), 2),
            round(($activities->activity_duration/60), 2),
            $activities->activity_duration,
            round(((($activities->activity_duration)/($activities->activity_length/1000))/60), 2),
            'https://www.strava.com/activities/'.$activities->strava_activity_id
        ];
    }
}
