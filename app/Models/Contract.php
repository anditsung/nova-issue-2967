<?php

namespace App\Models;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Contract extends Model
{
    use HasFactory;

    protected $fillable = [
        'no',
        'begin_date',
        'end_date',
        'employee_id',
        'user_id',
    ];

    protected $casts = [
        'begin_date' => 'date',
        'end_date' => 'date',
    ];

    public function employee() : BelongsTo
    {
        return $this->belongsTo(Employee::class);
    }

    public function user() : BelongsTo
    {
        return $this->belongsTo(User::class);
    }
}
