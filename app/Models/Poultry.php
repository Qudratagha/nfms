<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Poultry extends Model
{
    use HasFactory;


    protected $table = "poultries";
    protected $primaryKey = "id";
    public $timestamps = false;


    protected $fillable = [
//        'categoryName',
//        'user_id',
//        'dateCreated',
    ];
}
