<?php

namespace App\Imports;

use App\User;
use Illuminate\Support\Facades\Hash;
use Maatwebsite\Excel\Concerns\ToModel;

class UsersImport implements ToModel
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new User([
            'name' => $row[0],
            'apellidos' => $row[1],
            'dni' => $row[2],
            'rol' => $row[3],
            'email' => $row[4],
            'password' => Hash::make($row[5]),
        ]);
    }
}
