<?php

namespace App\Exports;

use App\Models\User;
use Carbon\Carbon;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\WithMapping;

class RideParticipantsExport implements FromCollection, WithHeadings, WithMapping
{

    public function headings(): array
    {
        return [
            'Nama',
            'Email',
            'No HP',
            'Jenis Kelamin',
            'Tanggal Lahir',
            'Cabang',
            'NPP',
        ];
    }

    public function collection()
    {
        $run_participants = User::where('competition','Ride')->get();
        $run_participants->makeHidden(['jrku_image_path', 'updated_at']);
        return $run_participants;
    }

    public function map($run_participants): array
    {
        return [
            $run_participants->name,
            $run_participants->email,
            $run_participants->phone,
            $run_participants->gender,
            Carbon::parse($run_participants->birth_date)->format('d-m-Y'),
            $run_participants->work_unit,
            $run_participants->npp,
        ];
    }
}
