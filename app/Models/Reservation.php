<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Reservation extends Model
{
    use HasFactory;
    protected $fillable = [
        'customer',
        'qty',
        'confirmed',
        'menu_id',
        'phone',
        'created_at'
    ];

    public function scopeFilter($query, $search)
    {
        return  $query->where('customer', 'like', '%' . $search . '%')
            ->orWhere('qty', 'like', '%' . $search . '%')->orWhere('created_at', 'like', '%' . $search . '%');
    }

    public function menu()
    {
        return $this->belongsTo(Menu::class);
    }
}
