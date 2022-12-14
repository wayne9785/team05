<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Driver extends Model
{
    use HasFactory;
    protected $fillable=[
        'name',
        'tid',
        'number',
        'frequency',
        'integral',
        'birthday',
        'countryofbirth',
        'created_at',
        'updated_at',
    ];

    public function fleet()
    {
        return $this->belongsTo('App\Models\Fleet','tid', 'id');
    }
    public function scopeSenior($query)
    {
        $query->where('frequency', '>=', 100)->orderby('frequency');
    }
}
