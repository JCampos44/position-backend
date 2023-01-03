<?php

namespace App\Http\Controllers;

use App\Http\Requests\MontoRequest;
use App\Models\Monto;
use Illuminate\Http\Request;

class MontoController extends Controller
{

    public function show()
    {
        $user = auth()->user();

        $montos = Monto::where('user_id', $user->id)->get();

        return response([
            'montos' => $montos
        ]);
    }

    public function store(MontoRequest $request)
    {
        $user = auth()->user();

        $monto = Monto::where('fecha', $request->fecha)
            ->where('user_id', $user->id)
            ->first();

        if ($monto) {
            $monto->update([
                'monto' => $request->monto
            ]);
        } else {
            $monto = Monto::create([
                'fecha' => $request->fecha,
                'monto' => $request->monto,
                'user_id' => $user->id
            ]);
        }

        return response([
            'monto' => $monto
        ]);
    }
}
