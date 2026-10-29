<?php
namespace App\Http\Controllers;

use App\Models\Visit;
use Illuminate\Http\Request;
use Carbon\Carbon;

class VisitController extends Controller
{
    public function record(Request $request)
    {
        $ip = $request->ip();

        // Define o início e fim da hora atual
        $startOfHour = Carbon::now()->startOfHour();
        $endOfHour = Carbon::now()->endOfHour();

        // Verifica se já existe registro desse IP dentro da hora atual
        $visit = Visit::where('ip_address', $ip)
            ->whereBetween('created_at', [$startOfHour, $endOfHour])
            ->first();

        // Se não existir, grava nova visita
        if (!$visit) {
            $visit = Visit::create([
                'ip_address' => $ip,
            ]);
        }

        // Armazena o ID da visita na sessão do Laravel
        session(['visit_id' => $visit->id]);

        return response()->json([
            'status' => 'success',
            'visit_id' => $visit->id
        ]);
    }
}
