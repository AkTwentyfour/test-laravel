<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ticket extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    public function order()
    {
        return $this->hasMany(Order::class);
    }


    // $ticket = Ticket::create([
    //     'name' => 'Wisata Guciku',
    //     'date' => '2023-03-20',
    //     'quota' => '100',
    //     'price' => '20000'
    // ])
}
