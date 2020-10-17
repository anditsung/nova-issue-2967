<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Employee extends Model
{
    use HasFactory;

    protected $fillable = [
        'person_id',
        'is_contract',
        'user_id',
    ];

    public function contracts() : HasMany
    {
        return $this->hasMany(Contract::class);
    }

    public function person() : BelongsTo
    {
        return $this->belongsTo(People::class);
    }

    public function user() : BelongsTo
    {
        return $this->belongsTo(User::class);
    }
}
