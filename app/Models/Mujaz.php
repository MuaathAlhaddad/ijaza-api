<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Mujaz extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'first_name',
        'last_name',
        'nickname',
        'generation',
        'sex',
        'birth_date',
        'death_date',
        'country_id',
        'notes',
        'biography',
        'admin_id',
        'mujeez_id',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'id'         => 'integer',
        'birth_date' => 'date',
        'death_date' => 'date',
        'country_id' => 'integer',
        'admin_id'   => 'integer',
        'mujeez_id'  => 'integer',
    ];

    public function country()
    {
        return $this->belongsTo( Country::class );
    }

    public function admin()
    {
        return $this->belongsTo( Admin::class );
    }

    public function mujeez()
    {
        return $this->belongsTo( Mujaz::class, 'mujeez_id', 'id' );
    }
}
