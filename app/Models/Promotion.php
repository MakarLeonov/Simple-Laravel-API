<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Promotion extends Model
{
    use HasFactory;

    protected $fillable = [
        'name', 
        'description', 
        'is_pupular', 
        'start_date_of_the_promotion', 
        'end_date_of_the_promotion'];
}
