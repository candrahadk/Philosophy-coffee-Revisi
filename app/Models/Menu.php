<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Menu extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'image',
        'price',
        'description',
    ];


    public function scopeFilter($query, $search)
    {
        return  $query->where('name', 'like', '%' . $search . '%')
            ->orWhere('description', 'like', '%' . $search . '%')->orWhere('price', 'like', '%' . $search . '%');
    }

    public function reservation()
    {
        return $this->hasMany(Reservation::class);
    }
}
