<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Admin extends Model
{
    use HasFactory;

    protected $table = 'admins';
    protected $fillable = ['email', 'password'];

    public function patients()
    {
        return $this->hasMany(Patient::class);
    }

    public function doctors()
    {
        return $this->hasMany(Doctor::class);
    }

    public function assessments()
    {
        return $this->hasMany(Assessment::class);
    }

    public function appointments()
    {
        return $this->hasMany(Appointment::class);
    }

    public function questions()
    {
        return $this->hasMany(Question::class);
    }
}
