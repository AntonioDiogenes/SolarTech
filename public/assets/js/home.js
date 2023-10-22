// $(document).ready(function(){
//     $.ajax({
//         url: "http://localhost:8000/api/pacotes", // URL para a qual você deseja fazer a requisição
//         type: "GET", // Método da requisição (GET, POST, PUT, DELETE, etc.)
//         dataType: "json", // Tipo de dados que você espera receber
//         success: function(data) {
//             //console.log(data.data[0].nome);
//             let contents = data.data; 
//             for (let content of contents){
//                 var option = $("<option>");
//                     option.val(content.valorFinal).text(content.nome);
//                     $("#pacotes").append(option);       
//             }
//             for (let content of contents){
//                 var option = $("<option>");
//                     option.val(content.quantidadePlacas).text(content.nome);
//                     $("#quantidadePlacas").append(option);       
//             }
//             // for (let content of contents){
//             //     var option = $("<option>");
//             //         option.val(content.valorFinal).text(content.nome);
//             //         $("#pacotes").append(option);       
//             // }
//     //usar 3 for talvez nao seja tao eficiente porem e momentaneamente mais facil
//         },
//         error: function(xhr, status, error) {
//             console.error("Erro na requisição:", status, error);
//         }
//     });
// });

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

function sendBudget(){

    var jsonContent = { // cria o json com os valores do form
        valorPacote : $('#valorPacote').val(),
        placasAdicionais : $('#quantidadeAdicionalPlaca').val()
    } 
    
    $.ajax({
        url: 'http://localhost:8000/api/budget',
        type: 'POST',
        contentType: 'application/json',
        data: JSON.stringify(jsonContent),
        success: function(response) {
            $('#resultado').val(response).prop('disabled', true);
        },
        error: function(error) {
            console.error('Erro na requisição:', error);
        }
    });

}

function sendEconomy(){
    
    var jsonContent = { // cria o json com os valores do form
        quantidadePlacas : $('#quantidadePlacas').val(),
        quantidadePlacasAdicionais : $('#quantidadeAdicional').val(),
        usoCliente : $('#consumoMedio').val()
    }
    
    $.ajax({
        url: 'http://localhost:8000/api/economy', 
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

function sendCustomPlanModalForm(){

    pacotesCustom = $('#pacotesCustom').val();
    quantidadeCustom = $('#quantidadeCustom').val();

    $('#customPlanModal').modal('hide');

    $('#pacoteEscohido').val(pacotesCustom)
    $('#quantidadeEscolhida').val(quantidadeCustom)

    $('#finalCustomPlanModal').modal('show');

}
