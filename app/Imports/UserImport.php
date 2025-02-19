<?php

namespace App\Imports;

use Illuminate\Support\Collection;
use Maatwebsite\Excel\Concerns\ToCollection;
use Maatwebsite\Excel\Concerns\ToModel;
use App\Models\User;
use Hash;

class UserImport implements ToCollection, ToModel
{
    /**
    * @param Collection $collection
    */
    private $current = 0;
    public function collection(Collection $collection)
    {
        //dd($collection);
    }

    public function model(array $row)
    {
        $this->current++;

        if ($this->current > 1) {
            $count = User::where('name', 'n', $row[1])->count();
            //dd($count);
            if (empty($count)) {
                $user = new User;
                $user->name = $row[0];
                $user->email = $row[1];
                $user->password = Hash::make($row[2]);
                
                $user->save();
            }
        }
    }
}
