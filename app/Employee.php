<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    protected $fillable = [
        'first_name',
        'last_name',
        'email',
        'department1',
        'department2',
        'department3',
        'group',
        'role'
    ];

    public function company()
    {
        return $this->belongsTo(Company::class);
    }
}
