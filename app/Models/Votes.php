<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Votes extends Model
{
    protected $fillable = [
        'voter_id',
        'candidate_id'
    ];

    public function candidate()
{
    return $this->belongsTo(Candidates::class, 'candidate_id');
}

public function voter()
{
    return $this->belongsTo(Voter::class, 'voter_id');
}
}
