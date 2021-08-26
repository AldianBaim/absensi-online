<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;
use Illuminate\Database\Eloquent\SoftDeletes;

class Attendance extends Model
{
    use HasFactory;
    use SoftDeletes;
    protected $table = 'attendance';
    protected $guarded = [];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
