<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Friend extends Model
{
    protected $fillable = [
        'last_updated_by',
        'status',
        's_user_id',
        'p_user_id',
    ];


    public function user(){
        return $this->belongsTo('App\Models\User');
    }
}
