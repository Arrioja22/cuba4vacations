$(document).ready(function(){

  $("div.button-10").addClass("button");

$(".form-wrapper .button-10").click(function(){

  if (! $("input[name=habitacion]").is(":checked") ) {
         alert("Por Favor Seleccionar un tipo de habitacion");
         return false;
      }


      else {

   
    var button = $(this);
    var currentSection = button.parents(".section");
    var currentSectionIndex = currentSection.index();
    var headerSection = $('.steps li').eq(currentSectionIndex);
    currentSection.removeClass("is-active").next().addClass("is-active");
    headerSection.removeClass("is-active").next().addClass("is-active");
    
   /* $(".form-wrapper").submit(function(e) {
      e.preventDefault();
    });*/

   if(currentSectionIndex === 6){
      $(document).find(".form-wrapper .section").first().addClass("is-active");
      $(document).find(".steps li").first().addClass("is-active");
    }
    
};


});




/*jQuery('<button class="number__btn number__btn--down"></button>').insertBefore('.number__field');
jQuery('<button class="number__btn number__btn--up"></button>').insertAfter('.number__field');*/



/*jQuery('.number').each(function() {
  var spinner = jQuery(this),
    input = spinner.find('.number__field'),
    btnUp = spinner.find('.number__btn.number__btn--up'),
    btnDown = spinner.find('.number__btn.number__btn--down'),
    min = input.attr('min'),
    max = input.attr('max'),
    step = input.attr('step'); 
    btnUp.click(function() {
      var oldValue = parseFloat(input.val());
      if (oldValue >= max) {
        var newVal = oldValue;
      } else {
        var newVal = oldValue + parseFloat(step);
      }
      spinner.find("input").val(newVal);
      spinner.find("input").trigger("change");
    });

      btnDown.click(function() {
        var oldValue = parseFloat(input.val());
        if (oldValue <= min) {
          var newVal = oldValue;
        } else {
          var newVal = oldValue - parseFloat(step);
        }
        spinner.find("input").val(newVal);
        spinner.find("input").trigger("change");
      });
    });

jQuery('.number-2').each(function() {
  var spinner = jQuery(this),
    input = spinner.find('.number__field'),
    btnUp = spinner.find('.number__btn.number__btn--up'),
    btnDown = spinner.find('.number__btn.number__btn--down'),
    min = input.attr('min'),
    max = input.attr('max'),
    step = input.attr('step'); 
    btnUp.click(function() {
      var oldValue = parseFloat(input.val());
      if (oldValue >= max) {
        var newVal = oldValue;
      } else {
        var newVal = oldValue + parseFloat(step);
      }
      spinner.find("input").val(newVal);
      spinner.find("input").trigger("change");
    });

      btnDown.click(function() {
        var oldValue = parseFloat(input.val());
        if (oldValue <= min) {
          var newVal = oldValue;
        } else {
          var newVal = oldValue - parseFloat(step);
        }
        spinner.find("input").val(newVal);
        spinner.find("input").trigger("change");
      });
    });
*/

});