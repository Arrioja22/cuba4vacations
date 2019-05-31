

$(document).ready(function(){

	var counter = 2;

    $(".boton-clonar").click(function(){
    	var originalDiv = $("div.clonar:first");
        var cloneDiv = originalDiv.clone(true);
         cloneDiv.attr('class','clonar'+counter);

         $(cloneDiv).css({"padding-bottom":"80px", "padding-top":"80px"});
         /*$("hr",cloneDiv).toggleClass('linea');*/
          $("label[for='estandar']",cloneDiv).attr('for','newEstandar'+counter);
          $("label[for='doble']",cloneDiv).attr('for','newDoble'+counter);
          $("label[for='deluxe']",cloneDiv).attr('for','newDeluxe'+counter);
          $("[id='estandar']",cloneDiv).attr('id','newEstandar'+counter);
          $("[id='doble']",cloneDiv).attr('id','newDoble'+counter);
          $("input[name='habitacion']",cloneDiv).prop('checked', false);
          $("input.number__field",cloneDiv).val(0);        
          $("[id='deluxe']",cloneDiv).attr('id','newDeluxe'+counter);
          $("[name='habitacion']",cloneDiv).attr('name','newHabitacion'+counter);
          $("button.number__btn.number__btn--up",cloneDiv).attr('id','number__btn'  + counter);
          $("button.number__btn.number__btn--down",cloneDiv).attr('id','number__btn'  + counter);


          /*var btnUp = $(".number__btn--up:first");
          var btnDown = $(".number__btn--down:first");
          var cloneBtnUp = btnUp.clone();
          var cloneBtnDown = btnDown.clone();

          btnDown.attr('class','number__btn--down'+counter);*/

           //mueve el div clonado antes del boton next
         var btn = $(".nivel1");
        /* originalDiv.insertBefore(btn);*/

         originalDiv.parent().append(cloneDiv,btn);
         
         counter++;

         // $(".menu").append($(".clonar:first").clone(true));
    });

   
   var counters = 2;
    $("#boton").click(function() {
      var originDiv = $("div#clonar-boton:first");
        var clonDiv = originDiv.clone();
         clonDiv.attr('id','clonar-boton'+counters);
         $("[id='decrease']",clonDiv).attr('id','decrease'+counters);
         $("[id='number']",clonDiv).attr('id','number'+counters);
         $("[id='increase']",clonDiv).attr('id','increase'+counters);


          originDiv.parent().append(clonDiv);
          counters++;  
    });




});


 function increaseValue() {
  var value = parseInt(document.getElementById('number').value, 10);
  value = isNaN(value) ? 0 : value;
  value++;
  document.getElementById('number').value = value;
}

function decreaseValue() {
  var value = parseInt(document.getElementById('number').value, 10);
  value = isNaN(value) ? 0 : value;
  value < 1 ? value = 1 : '';
  value--;
  document.getElementById('number').value = value;
}

