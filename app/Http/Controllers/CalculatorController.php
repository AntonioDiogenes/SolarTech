<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CalculatorController extends Controller
{
    public function Budget(Request $request){
        $valorPlaca = 1000;//mudar jaja
        $RequestJson = $request->json()->all();
        $valorBudget = $RequestJson['valorPacote'] + ($RequestJson['placasAdicionais'] * $valorPlaca);//talvez adicionar taixa de instalaçao dps

        return response()->json($valorBudget);
    }

    public function Economy(Request $request){
        $precoKhw = 0.75;
        $geracaoPlaca = 90;//reais por mes

        $RequestJson = $request->json()->all();

        $geraçaoTotal = $RequestJson['quantidadePlacas'] * $geracaoPlaca;
        $usoTotalCliente = $RequestJson['usoCliente'] * $precoKhw;
        $economiaTotal = $geraçaoTotal - $usoTotalCliente;

        //$economiaTotal = ( $RequestJson['quantidadePlacas'] * $geracaoPlaca ) - ( $RequestJson['usoCliente'] * $precoKhw )
        return response()->json(["economiaTotal"=>$economiaTotal]);
    }

    public function Investment(Request $request){
        // Obter o consumo diário do cliente em kWh e o número de placas
        $consumoDiario = $request->input('consumo_diario'); // Consumo diário em kWh
        $numeroPlacas = $request->input('numero_placas'); // Número de placas solares

        // Calcular a quantidade de kWh gerada por todas as placas por mês
        $kwhGeradosPorMes = $numeroPlacas * 120; // 120 kWh por placa por mês

        // Calcular o custo total das placas solares
        $custoPlacas = $numeroPlacas * 1000; // 1000 R$ por placa

        // Calcular o custo mensal do consumo do cliente
        $custoMensal = $consumoDiario * 30 * 0.75; // 0.75 R$ por kWh

        // Calcular o tempo para recuperar o investimento em meses e arredondar para o inteiro mais próximo
        $tempoRecuperacaoMeses = round($custoPlacas / ($kwhGeradosPorMes - $consumoDiario * 30));

        return response()->json([
            'custo_placas' => $custoPlacas,
            'custo_mensal' => $custoMensal,
            'tempo_recuperacao_meses' => $tempoRecuperacaoMeses,
        ]);

    }
}
