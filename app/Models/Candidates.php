<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Candidates extends Model
{
    protected $fillable = [
        'number',
        'name',
        'photo',
        'vision',
        'mission',
    ];

    public function votes()
        {
            return $this->hasMany(Votes::class, 'candidate_id');
        }

    protected $appends = ['photo_url'];

    public function getPhotoUrlAttribute()
        {
            return $this->photo
                ? asset($this->photo)
                : null;
        }
}