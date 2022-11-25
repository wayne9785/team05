<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Fleet extends Model
{
    use HasFactory;
    protected $fillable=[
        'name',
        'country',
        'location',
        'created_at',
        'updated_at',
    ];
    public function drivers()
    {
        return $this->hasMany('App\Models\Driver', 'tid');
    }

    public function delete()
    {
        $this->drivers()->delete();
        return parent::delete();
    }
}
