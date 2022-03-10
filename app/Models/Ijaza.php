<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ijaza extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'mujaz_id',
        'mujeez_id',
        'document',
        'location',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'mujaz_id' => 'integer',
        'mujeez_id' => 'integer',
    ];

    public function mujaz()
    {
        return $this->belongsTo(User::class);
    }

    public function mujeez()
    {
        return $this->belongsTo(User::class);
    }
}
