const URL = 'http://127.0.0.1:8000/api';
const URL_MODULO = 'http://127.0.0.1:5500/api'

$('#budget-form').submit(function(event) {
    event.preventDefault();
    sendBudget();
});

$('#economy-form').submit(function(event) {
    event.preventDefault();
    sendEconomy();
});

$('#customPlanModalForm').submit(function(event) {
    event.preventDefault();
    sendCustomPlanModalForm();
});




function sendBudget(){//envia o form pro controlador da calculadora

    var jsonContent = { // cria o json com os valores do form
        valorPacote : $('#valorPacote').val(),
        placasAdicionais : $('#quantidadeAdicionalPlaca').val()
    } 
    console.log(jsonContent);
    $.ajax({
        url: URL + '/budget',
        type: 'POST',
        contentType: 'application/json',
        data: JSON.stringify(jsonContent),
        success: function(response) {
            console.log(response);
            $('#resultado').val(response).prop('disabled', true);
        },
        error: function(error) {
            console.error('Erro na requisição:', error);
        }
    });

}

function sendEconomy(){//envia o form pro controlador da calculadora
    
    var jsonContent = { // cria o json com os valores do form
        quantidadePlacas : $('#quantidadePlacas').val(),
        quantidadePlacasAdicionais : $('#quantidadeAdicional').val(),
        usoCliente : $('#consumoMedio').val()
    }
    
    $.ajax({
        url: URL + '/economy', 
        type: 'POST',
        contentType: 'application/json',
        data: JSON.stringify(jsonContent),
        success: function(response) {
            console.log(response.economiaTotal);
            if(response.economiaTotal < 0){
                $('#economyOutput').text("produçao nao sera suficiente pra suprir sua demanda");
            }else if(response.economiaTotal == 0){
                $('#economyOutput').text("produçao igual a demanda seus custos serao zerados");
            }else{
                $('#economyOutput').text("produçao gera mais que a demanda o saldo sera positivo");
            }
        },
        error: function(error) {
            console.error('Erro na requisição:', error);
        }
    });

}

function sendCustomPlanModalForm(){//pegas as informaçao do primeiro form e joga pro form de finalizar compra

    pacotesCustom = $('#pacotesCustom').val();
    quantidadeCustom = $('#quantidadeCustom').val();

    $('#customPlanModal').modal('hide');

    $('#pacoteEscohido').val(pacotesCustom)
    $('#quantidadeEscolhida').val(quantidadeCustom)

    $('#finalCustomPlanModal').modal('show');

}

function finalizarCompra(){

}

function buscarFatura(id_compra){

    $.ajax({
        url: URL_MODULO + '/cliente/faturas/' + id_compra, 
        type: 'GET',
        contentType: 'application/json',
        success: function(response) {
            fatura = response['venda']['fatura'];

            $('#comprasModal').modal('hide');
            $('#faturaModal').modal('show');
            
            $('#id').text(fatura['id']);
            $('#StatusPagamento').text(fatura['pago'] == 0 ? 'pagamento pendente' : 'pago');
            $('#Valor').text('R$ ' + fatura['valor']);

        },
        error: function(error) {
            console.error('Erro na requisição:', error);
        }
    });
  
}
