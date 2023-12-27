<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Assessment extends Model
{
    use HasFactory;

    protected $table = 'assessments';
    protected $fillable = ['datetime', 'status', 'is_verified', 'notes', 'admin_id'];

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

    public function questions()
    {
        return $this->belongsToMany(Question::class);
    }
}
