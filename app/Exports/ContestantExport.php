<?php

namespace App\Exports;

use App\Models\Contestant;
use Carbon\Carbon;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\WithMapping;

class ContestantExport implements FromCollection, WithHeadings, WithMapping
{

    public function headings(): array
    {
        return [
            'Nama',
            'Nama Kampus',
            'Provinsi Kampus',
            'Kota Kampus',
            'Alamat Domisili',
            'Alamat KTP',
            'No. HP',
            'Tanggal Lahir',
            'URL Video Instagram',
            'URL Video Tiktok',
            'Kritik & Saran',
            'Tgl Daftar'
        ];
    }

    public function collection()
    {
        $contestant = Contestant::all();
        $contestant->makeHidden(['ktm_image_path', 'updated_at']);
        return $contestant;
    }

    public function map($contestant): array
    {
        return [
            $contestant->name,
            $contestant->campus_name,
            $contestant->campus_province,
            $contestant->campus_city,
            $contestant->residence_address,
            $contestant->id_card_address,
            $contestant->phone,
            $contestant->birth_date,
            $contestant->instagram_video_url,
            $contestant->tiktok_url,
            $contestant->description,
            Carbon::parse($contestant->created_at)->format('d-m-Y')
        ];
    }
}
