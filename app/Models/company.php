<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class company extends Model
{
    public $table = 'business_registration';
    public $primaryKey = 'Serial No.';
    public $incrementing = true;
    public $timestamps = false;
}