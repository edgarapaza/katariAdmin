function redondear(num, decimales = 2) {
  var signo = (num >= 0 ? 1 : -1);
  num = num * signo;
  if (decimales === 0) //con 0 decimales
      return signo * Math.round(num);
  // round(x * 10 ^ decimales)
  num = num.toString().split('e');
  num = Math.round(+(num[0] + 'e' + (num[1] ? (+num[1] + decimales) : decimales)));
  // x * 10 ^ (-decimales)
  num = num.toString().split('e');
  return signo * (num[0] + 'e' + (num[1] ? (+num[1] - decimales) : -decimales));
}

$(document).ready(function(){

  $("#combo1").change(function(){

    var dsto = $(this).val();

      if(dsto == 1) //Si hay descuento
      {
        $("#porcentaje").val(10);
        document.getElementById("porcentaje").disabled = false;
        document.getElementById("btnCalcular").disabled = false;
      }else{

        // No hay descuento
        $("#porcentaje").val(0);
        $("#preciodsto").val(0);
        $("#ahorro").val(0);
        document.getElementById("porcentaje").disabled = true;
        document.getElementById("btnCalcular").disabled = true;

      }
  });

  $("#btnCalcular").click(function(){
    var porcentaje_dscto = $("#porcentaje").val();
    var precio = $("#preciototal").val();

    var porcent = porcentaje_dscto / 100;
    console.log(porcent);
    var preciodsto = precio * (1-porcent);
    var ahorro = precio * porcent;

    $("#preciodsto").val(redondear(preciodsto));
    $("#ahorro").val(redondear(ahorro));

  });

});
