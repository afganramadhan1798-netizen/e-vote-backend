<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Voter extends Model
{
    protected $fillable = [
        'voter_code',
        'name',
        'role',
        'class',
        'position',
        'status',
    ];

    protected $casts = [
        'created_at' => 'datetime',
        'updated_at' => 'datetime',
    ];

    /**
     * Relasi ke tabel votes.
     * Satu voter hanya memiliki satu vote.
     */
    public function vote(): HasOne
    {
        return $this->hasOne(Vote::class);
    }
}
