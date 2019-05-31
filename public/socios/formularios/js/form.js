$(document).ready(function(){


// tipo de alojamiento//
$("div.button-nm").addClass("button");
$(".form-wrapper fieldset  .button-nm").click(function(){

   if (! $("input[name=alojamiento]").is(":checked") ) {
         alert("Por Favor Seleccionar un elemento");
         return false;
   
       }


      else {

         if($("input[id=house-complete]").is(":checked")){
      $("#habitacion-add").append();
      $("#hab2-add").append();
      // $("#comr-add").append("#sala-add");

    }
    else {
      $("#cocina").remove();
      $("#sala").remove();
      /*$("#come").remove();*/
      $("#habitacion-add").remove();
      $("#hab2-add").remove();
      // $("#comr-add").remove();

      
    }

    var button = $(this);
    var currentSection = button.parents(".section");
    var currentSectionIndex = currentSection.index();
    var headerSection = $('.steps li').eq(currentSectionIndex);
    currentSection.removeClass("is-active").next().addClass("is-active");
    headerSection.removeClass("is-active").next().addClass("is-active");

    /*$(".form-wrapper").submit(function(e) {
      e.preventDefault();
    })*/

    if(currentSectionIndex === 8){
      $(document).find(".form-wrapper .section").first().addClass("is-active");
      $(document).find(".steps li").first().addClass("is-active");


    }



      
    }


});

// servicios de la cocina//
$(".button-6").addClass("button");
$(".form-wrapper .button-6").click(function(){


    if (! $("input[type='checkbox']").is(":checked") ) {
         alert("Por Favor seleccionar algun servicio");
      }

  

   else {
    var button = $(this);
    var currentSection = button.parents(".section");
    var currentSectionIndex = currentSection.index();
    var headerSection = $('.steps li').eq(currentSectionIndex);
    currentSection.removeClass("is-active").next().addClass("is-active");
    headerSection.removeClass("is-active").next().addClass("is-active");
    


   if(currentSectionIndex === 8){
      $(document).find(".form-wrapper .section").first().addClass("is-active");
      $(document).find(".steps li").first().addClass("is-active");
    }
    
}



});

// servicios de la sala
$("div.button-7").addClass("button");
$(".form-wrapper .button-7").click(function(){


    if (! $("input[type='checkbox']").is(":checked") ) {
         alert("Por favor seleccionar algun servicio");
      }

  
   else {
   
    var button = $(this);
    var currentSection = button.parents(".section");
    var currentSectionIndex = currentSection.index();
    var headerSection = $('.steps li').eq(currentSectionIndex);
    currentSection.removeClass("is-active").next().addClass("is-active");
    headerSection.removeClass("is-active").next().addClass("is-active");
    


   if(currentSectionIndex === 8){
      $(document).find(".form-wrapper .section").first().addClass("is-active");
      $(document).find(".steps li").first().addClass("is-active");
    }
    


}

});



//datos_ habitacion//

$("div.button-10").addClass("button");
$(".form-wrapper .button-10").click(function(){

  if (! $("input[name=habitacion]").is(":checked") ) {
         alert("Por Favor Seleccionar un tipo de habitacion");
  return false;
      }

      if ($("[id=numero]").val().length <1) {
        alert("Ingrese la capacidad de personas por habitacion");
        return false;
      }

      /* if ( $("[id=individual]").val().length < 0 ) {
        alert("Ingrese el numero de camas individuales");
        
      }*/


      else {

   
    var button = $(this);
    var currentSection = button.parents(".section");
    var currentSectionIndex = currentSection.index();
    var headerSection = $('.steps li').eq(currentSectionIndex);
    currentSection.removeClass("is-active").next().addClass("is-active");
    headerSection.removeClass("is-active").next().addClass("is-active");
    

   if(currentSectionIndex === 8){
      $(document).find(".form-wrapper .section").first().addClass("is-active");
      $(document).find(".steps li").first().addClass("is-active");
    }
    
};
});


//servicios de la habitacion//
$("div .button-11").addClass("button");
$(".form-wrapper .button-11").click(function(){


    if (! $("input[type='checkbox']").is(":checked") ) {
         alert("Por Favor seleccionar algun servicio");

      }

  

   else {
    var button = $(this);
    var currentSection = button.parents(".section");
    var currentSectionIndex = currentSection.index();
    var headerSection = $('.steps li').eq(currentSectionIndex);
    currentSection.removeClass("is-active").next().addClass("is-active");
    headerSection.removeClass("is-active").next().addClass("is-active");
    


   if(currentSectionIndex === 8){
      $(document).find(".form-wrapper .section").first().addClass("is-active");
      $(document).find(".steps li").first().addClass("is-active");
    }
    
}



});



//servicios del baño//

$("div .button-8").addClass("button");
$(".form-wrapper .button-8").click(function(){


    if (! $("input[type='checkbox']").is(":checked") ) {
         alert("Por favor seleccionar algun servicio");

      }

  
   else {
   
    var button = $(this);
    var currentSection = button.parents(".section");
    var currentSectionIndex = currentSection.index();
    var headerSection = $('.steps li').eq(currentSectionIndex);
    currentSection.removeClass("is-active").next().addClass("is-active");
    headerSection.removeClass("is-active").next().addClass("is-active");
    


   if(currentSectionIndex === 8){
      $(document).find(".form-wrapper .section").first().addClass("is-active");
      $(document).find(".steps li").first().addClass("is-active");
    }
    


}

});

$("div.button-9").addClass("button");
$(".form-wrapper .button-9").click(function(){

   
    var button = $(this);
    var currentSection = button.parents(".section");
    var currentSectionIndex = currentSection.index();
    var headerSection = $('.steps li').eq(currentSectionIndex);
    currentSection.removeClass("is-active").next().addClass("is-active");
    headerSection.removeClass("is-active").next().addClass("is-active");
    


   if(currentSectionIndex === 8){
      $(document).find(".form-wrapper .section").first().addClass("is-active");
      $(document).find(".steps li").first().addClass("is-active");
    }
    




});







$(".button-12").addClass("button");

$(".form-wrapper .button-12").click(function(){

  
      if ($("input[id='rellenar']").val().length < 1) {
        alert("Rellene los campos vacios");
        return false;
        
      }

   else {
    var button = $(this);
    var currentSection = button.parents(".section");
    var currentSectionIndex = currentSection.index();
    var headerSection = $('.steps li').eq(currentSectionIndex);
    currentSection.removeClass("is-active").next().addClass("is-active");
    headerSection.removeClass("is-active").next().addClass("is-active");
    

     

   if(currentSectionIndex === 8){
      $(document).find(".form-wrapper .section").first().addClass("is-active");
      $(document).find(".steps li").first().addClass("is-active");
    }

    /*$(".form-wrapper").submit(function() {
      alert("Gracias por confiar en Cuba4Vacations tus datos fueron registrados");
    })*/
    

}


});

$(".button-13").addClass("button");

$(".form-wrapper .button-13").click(function(){

  
      if ($("input[id='rellenar2']").val().length < 1) {
        alert("Rellene los campos vacios");
        return false;
        
      }

   else {
    var button = $(this);
    var currentSection = button.parents(".section");
    var currentSectionIndex = currentSection.index();
    var headerSection = $('.steps li').eq(currentSectionIndex);
    currentSection.removeClass("is-active").next().addClass("is-active");
    headerSection.removeClass("is-active").next().addClass("is-active");
    

     

   if(currentSectionIndex === 4){
      $(document).find(".form-wrapper .section").first().addClass("is-active");
      $(document).find(".steps li").first().addClass("is-active");
    }

  

}


});


$(".button-15").addClass("button");
$(".form-wrapper .button-15").click(function(){

   if (! $("input[name=transmicion]").is(":checked") ) {
         alert("Por Favor Seleccionar un elemento");
       }
      else{
        var button = $(this);
    var currentSection = button.parents(".section");
    var currentSectionIndex = currentSection.index();
    var headerSection = $('.steps li').eq(currentSectionIndex);
    currentSection.removeClass("is-active").next().addClass("is-active");
    headerSection.removeClass("is-active").next().addClass("is-active");

    /*$(".form-wrapper").submit(function(e) {
      e.preventDefault();
    })*/

    if(currentSectionIndex === 4){
      $(document).find(".form-wrapper .section").first().addClass("is-active");
      $(document).find(".steps li").first().addClass("is-active");


    }
      }
     });




$(".button-14").addClass("button");
  $(".form-wrapper .button-14").click(function(){

  if (! $("input[name=tipo_auto]").is(":checked") ) {
         alert("Por Favor seleccionar el tipo de automovil");
         return false;
      }

      if ( $("[id=number]").val(). length < 1 ) {
        alert("Ingrese el numero de pasajeros");
        return false;
      }
       

      else {

   
    var button = $(this);
    var currentSection = button.parents(".section");
    var currentSectionIndex = currentSection.index();
    var headerSection = $('.steps li').eq(currentSectionIndex);
    currentSection.removeClass("is-active").next().addClass("is-active");
    headerSection.removeClass("is-active").next().addClass("is-active");
    
   

   if(currentSectionIndex === 4){
      $(document).find(".form-wrapper .section").first().addClass("is-active");
      $(document).find(".steps li").first().addClass("is-active");
    }
    
    
};

});


  $(".button-16").addClass("button");

$(".form-wrapper .button-16").click(function(){

  
      if ($("input[id='rellenar1']").val() === '') {
        alert("Rellene los campos vacios");
        return false; 
      }
      if ($("input[id='rellenar2']").val() === '') {
        alert("Rellene los campos vacios");
        return false; 
      }
      if ($("input[id='rellenar3']").val() === '') {
        alert("Rellene los campos vacios");
        return false; 
      }
      if ($("input[id='rellenar4']").val() === '') {
        alert("Rellene los campos vacios");
        return false; 
      }
      if ($("input[id='rellenar5']").val() === '') {
        alert("Rellene los campos vacios");
        return false; 
      }

   else {
    var button = $(this);
    var currentSection = button.parents(".section");
    var currentSectionIndex = currentSection.index();
    var headerSection = $('.steps li').eq(currentSectionIndex);
    currentSection.removeClass("is-active").next().addClass("is-active");
    headerSection.removeClass("is-active").next().addClass("is-active");
    

     

   if(currentSectionIndex === 4){
      $(document).find(".form-wrapper .section").first().addClass("is-active");
      $(document).find(".steps li").first().addClass("is-active");
    }

  

}


});

  











            $('.input-number').on('input', function () { 
            this.value = this.value.replace(/[^0-9]/g,'');
            });


            $('.number__field').on('input', function () { 
            this.value = this.value.replace(/[^0-9]/g,'');
            });


          $(".rellenar").on('input', function () {
               this.value = this.value.replace(/[^a-z]/g,'');
               });


          

});