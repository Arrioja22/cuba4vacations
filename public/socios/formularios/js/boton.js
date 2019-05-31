  $(document).ready(function(){
      var i = 1;
    $("#add-producto").click(function(e){
        e.preventDefault();//eliminamos el evento por defecto
        $(".producto-row-0").clone().appendTo(".producto-container").attr("class","producto-row-"+(i++));
    }); 



  });