<!-- JQUERY  -->
<script src="src/js/jquery-2.1.4.js"></script>
<!-- wow js-->
<script src="src/js/wow.min.js"></script>
<!-- Materialize Js -->
<script src="src/js/materialize.min.js"></script>
<script>
    

    // запуск анимаций
    new WOW().init();
    
    
    //при регистрации проверка паролей совпадает ли друг с другом
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
    // когда фокус на поисковиек показывает кнопку "поиск"
    $("#search").focus(function(){
        $(".miaw").removeClass("hide");
    })
    
    
    $(document).ready(function(){
        $('.materialboxed').materialbox();
    });
    
    
    // в иконке корзине пульсирует когда курсор на нём
    $(".baskett").hover(function(){
        $(".baskett").addClass("animated pulse");
    }, function(){
        $(".baskett").removeClass("animated pulse");
    });
    
    // убеждаемся, что весь сайт загружен
    $(window).load(function() { 
        $('body').delay(350).css({
            'overflow': 'visible'
        });
    })
    
    $(document).ready(function() {
        $('select').material_select();// добавляет интерфейс выборки
    });
    
    $(document).ready(function(){
        $('.tooltipped').tooltip({delay: 50}); //всплывающие окна помогающие 
    });
    
    
</script>
</body>
</html>
