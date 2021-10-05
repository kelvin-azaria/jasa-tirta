<?php

namespace App\Exports;

use App\Models\User;
use Carbon\Carbon;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\WithMapping;

class UsersExport implements FromCollection, WithHeadings, WithMapping
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
            'Lomba',
        ];
    }

    public function collection()
    {
        $users = User::all();
        $users->makeHidden(['jrku_image_path', 'updated_at']);
        return $users;
    }

    public function map($users): array
    {
        return [
            $users->name,
            $users->email,
            $users->phone,
            $users->gender,
            Carbon::parse($users->birth_date)->format('d-m-Y'),
            $users->work_unit,
            (string)$users->npp,
            $users->competition,
        ];
    }
}
