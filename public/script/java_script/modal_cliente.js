
$(function(){

  $("#btn_cliente").click(function(){
    $("#modal_cliente").modal();
  });


  $("#btn_produto").click(function(){
    $("#modal_prod").modal();
  });

  $(".btn_selecionar").click(function(){
    
    var idclient = $(this).closest('tr').find('td[data-id_cliente]').data('id_cliente')
    var desnome = $(this).closest('tr').find('td[data-desnome]').data('desnome')
    var destel = $(this).closest('tr').find('td[data-destel]').data('destel')
    var desrua = $(this).closest('tr').find('td[data-desrua]').data('desrua')
    var desnum = $(this).closest('tr').find('td[data-desnum]').data('desnum')

    $("#tbnome").html(desnome)
    $("#tbtel").html(destel)
    $("#tbrua").html(desrua)
    $("#tbnum").html(desnum)

    $("#modal_cliente").modal('hide');

  });

});