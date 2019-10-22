<?php

namespace App\Http\Controllers\Notificacion;

use Illuminate\Http\Request;
use Laravel\Passport\Client;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use App\User;


class NotificacionController extends Controller
{

    public function prueba(){

       $user= User::find(2);
        return response()->json([$user,'hola'=>'hla']);



    }


}
