<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Patient extends Model
{
    use HasFactory;
    
    protected $table = 'patients';
    protected $fillable = ['email', 'password', 'firstname', 'lastname', 'address', 'phone', 'gender', 'age', 'admin_id'];

    public function admin()
    {
        return $this->belongsTo(Admin::class);
    }

    public function appointments()
    {
        return $this->belongsToMany(Appointment::class);
    }

    public function assessments()
    {
        return $this->belongsToMany(Assessment::class);
    }
}
