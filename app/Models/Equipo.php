<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Equipo extends Model
{
    use HasFactory;
    
    protected $fillable = ['equipo',
    'modelo',
    'marca',
    'nserie',
    'cudg',
    'descripcion',
    'status',
    'ubicacion',
    'cunitario'];

    // <td>{{$equipo->equipo}}</td>
    // <td>{{$equipo->modelo}} $</td>
    // <td>{{$equipo->marca}}</td>
    // <td>{{$equipo->nserie}}</td>
    // <td>{{$equipo->cudg}}</td>
    // <td>{{$equipo->descripcion}}</td>
    // <td> {{ $equipo->created_at->format('d-m-y')}}</td>
    // <td>{{$equipo->status}}</td>
    // <td>{{$equipo->ubicacion}}</td>
    // <td>{{$equipo->cunitario}}</td>
}
