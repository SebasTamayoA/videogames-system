<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    public function testDBConnection()
    {
        try {
            DB::connection()->getPdo();
            if (DB::connection()->getDatabaseName()) {
                return "Conexión exitosa a la base de datos: " . DB::connection()->getDatabaseName();
            } else {
                die("No se ha podido encontrar la base de datos. Revise su configuración.");
            }
        } catch (\Exception $e) {
            die("No se ha podido conectar a la base de datos. Revise su configuración. Error: " . $e);
        }
    }
}
