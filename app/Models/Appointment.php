<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Appointment extends Model
{
    use HasFactory;

    protected $table = 'appointments';
    protected $fillable = ['datetime', 'admin_id'];

    public function admin()
    {
        return $this->belongsTo(Admin::class);
    }

    public function patients()
    {
        return $this->belongsToMany(Patient::class);
    }

    public function doctors()
    {
        return $this->belongsToMany(Doctor::class);
    }
}