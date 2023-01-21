<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class escuela extends Model
{
protected $table="escuela";
protected $fillable= [
    'id', 'Curso', 'Instructor', 'Horas', 'Fecha'

];
public $timestamps = false;
}