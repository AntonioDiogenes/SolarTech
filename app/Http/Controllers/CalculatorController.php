<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CalculatorController extends Controller
{
    public function Budget(Request $request){
        $valorPlaca = 1000;
        $RequestJson = $request->json()->all();
        $valorPacote = $RequestJson['valorPacote'] ?? null;
        $placasAdicionais = $RequestJson['placasAdicionais'] ?? null;

        if ($valorPacote !== null && $placasAdicionais !== null && is_numeric($valorPacote) && is_numeric($placasAdicionais)) {
            $valorBudget = $valorPacote + ($placasAdicionais * $valorPlaca);
            return response()->json($valorBudget);
        } else {
            $response = [
                'error' => 'Parâmetros inválidos. Certifique-se de que valorPacote e placasAdicionais sejam números válidos e não nulos.'
            ];
            return response()->json($response, 400); // 400 é o código de status para requisição inválida
        }
    }
    
    public function Economy(Request $request){
        $precoKwh = 0.75;
        $geracaoPlaca = 90; // reais por mês
        $RequestJson = $request->json()->all();

        // Verifica se as variáveis necessárias estão presentes no JSON da requisição
        if (isset($RequestJson['quantidadePlacas'], $RequestJson['quantidadePlacasAdicionais'], $RequestJson['usoCliente'])) {

            $quantidadePlacas = $RequestJson['quantidadePlacas'];
            $quantidadePlacasAdicionais = $RequestJson['quantidadePlacasAdicionais'];

            if (is_numeric($quantidadePlacas) && is_numeric($quantidadePlacasAdicionais) && is_numeric($RequestJson['usoCliente'])) {
                // Calcula a quantidade total de placas
                $totalPlacas = $quantidadePlacas + $quantidadePlacasAdicionais;

                // Calcula a geração total
                $geracaoTotal = $totalPlacas * $geracaoPlaca;

                // Calcula o uso total do cliente e a economia total
                $usoTotalCliente = $RequestJson['usoCliente'] * $precoKwh;
                $economiaTotal = $geracaoTotal - $usoTotalCliente;

                // Retorna os resultados em formato JSON
                return response()->json(["economiaTotal" => $economiaTotal, "custoUsoCliente" => $usoTotalCliente, "QuantoPlacaGera" => $geracaoTotal]);
            } else {
                $response = [
                    'error' => 'Parâmetros inválidos. Certifique-se de que quantidadePlacas, quantidadePlacasAdicionais e usoCliente sejam números válidos.'
                ];
                return response()->json($response, 400); 
            }
        } else {
            $response = [
                'error' => 'Parâmetros ausentes. Certifique-se de enviar quantidadePlacas, quantidadePlacasAdicionais e usoCliente na requisição.'
            ];
            return response()->json($response, 400);
        }
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
