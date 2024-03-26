<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Records extends Model
{
    protected $table = 'pass_records';

    protected $fillable = ['transId', 'plaka', 'price', 'createdAt'];


}