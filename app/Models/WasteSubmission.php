<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class WasteSubmission extends Model
{
    use HasFactory;
    protected $table = 'waste_submissions';
    protected $fillable = [
        'user_id',
        'waste_type',
        'weight',
        'deposit_time',
        'status',
    ];

    /**
     * Relasi ke model User
     */
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
