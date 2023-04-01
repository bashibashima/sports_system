<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PlayersModel extends Model
{
    use HasFactory;
    protected $table='players';
    protected $fillable=["team_id","name","email","dob","password"];
}
