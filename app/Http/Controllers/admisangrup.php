<?php

namespace App\Http\Controllers;


use App\Models\clientes;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class admisangrup extends Controller
{
    private string $msgError = "upps, Algo fallo, vuelve a intentar";
    public function index()
    {

    }

    public function store(Request $request)
    {

        try {

            $validar = validator::make($request->all(), ["nombre" => ["required", "string"], "apellido" => ["required", "string"], "email" => ["required", "email"], "telefono" => ["required", "numeric"]]);

            if ($validar->fails()) {
                return response()->json($this->msgError, 500);
            }

            $clinentes = new clientes();

            $clinentes->create([
                "nombre" => $request->nombre,
                "apellido" => $request->apellido,
                "email" => $request->email,
                "telefono" => $request->telefono,
            ]);


            return response()->json("registro exitoso", 201);

        } catch (\Throwable $th) {
            return response()->json($this->msgError, 504);
        }
    }

    public function list()
    {
        try {

            $cllientes = new clientes();

            $data = $cllientes->all();

            return view('dashboard', ["datos => $data"]);

        } catch (\Throwable $th) {


        }
    }

    public function destroy(int $id)
    {
        try {

            $cllientes = new clientes();

            return response()->json($cllientes->all(), 200);

        } catch (\Throwable $th) {
            return response()->json($this->msgError, 504);

        }

    }
}
