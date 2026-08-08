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

    protected $appends = ['has_voted'];

    /**
     * Relasi ke tabel votes.
     * Satu voter hanya memiliki satu vote.
     */
    public function vote()
{
    return $this->hasOne(Votes::class, 'voter_id');
}

    public function getHasVotedAttribute(): bool
{
    return $this->vote()->exists();
}
}
