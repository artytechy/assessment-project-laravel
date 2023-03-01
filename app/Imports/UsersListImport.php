<?php

namespace App\Imports;

use App\Models\UserList;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithStartRow;

class UsersListImport implements ToModel, WithStartRow
{
    /**
     * To Skip Heading Names
     */
    public function startRow(): int
    {
        return 2;
    }

    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new UserList([
            'first_name' => $row[0],
            'last_name' => $row[1],
            'email' => $row[2],
            'profession' => $row[3],
            'chapter_name' => $row[4],
            'company_name' => $row[5],
            'website' => $row[6],
            'address' => $row[7],
            'postcode' => $row[8],
            'phone_number' => $row[9],
            'status' => $row[10],
            'join_date' => $row[11],
            'renewal_date' => $row[12],
            'sponsor' => $row[13],
        ]);
    }
}
