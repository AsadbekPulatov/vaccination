<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Vaccination extends Model
{
    use HasFactory;
    public function xodim(){
        return $this->belongsTo(User::class, 'employee_id');
    }
    public function info(){
        return $this->belongsTo(VaccinationInfo::class, 'info_id');
    }
}
