$("#irAtor").click(function() {
    $("#diretor").hide();
    $("#novela").hide();
    $("#atua").hide();
    $("#ator").show();
});

$("#irNovela").click(function() {
    $("#diretor").hide();
    $("#novela").show();
    $("#atua").hide();
    $("#ator").hide();
});

$("#irDiretor").click(function() {
    $("#diretor").show();
    $("#novela").hide();
    $("#atua").hide();
    $("#ator").hide();
});
$("#irAtua").click(function() {
    $("#diretor").hide();
    $("#novela").hide();
    $("#ator").hide();
    $("#atua").show();
});

$(document).ready(function() {
    $("#diretor").hide();
    $("#novela").hide();
    $("#ator").show();
    $("#atua").hide();

    $('.cpf').mask('000.000.000-00', { reverse: true });
    $('.date').mask('00/00/0000');
})