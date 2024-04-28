$(document).ready(function() {
  $('select').material_select();
});


new WOW().init();


 $(".value2").change(function(){

   if ($(".value1").val() === $(".value2").val()) {
     $(".value2").css('color','#4caf50');
     $("#confirmed").prop("disabled",false);
   }
   else {
     $(".value2").css('color','#b71c1c');
     $("#confirmed").prop("disabled",true);
   }
 });

$(document).ready(function(){
    $('ul.tabs').tabs();
  });

  $(document).ready(function(){
      $('.materialboxed').materialbox();
    });
