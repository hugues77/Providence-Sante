$(document).ready(function(){
    $(".propos2 , .propos3").hide();

    //cacher propos2 et propos3 /afficher propos1
    $(".btn-equite").click(function(){
        $(".propos2 , .propos3").hide();
        $(".propos1").show();
    })
    //cacher propos1 et propos3 /afficher propos 2
    $(".btn-partage").click(function(){
        $(".propos1 , .propos3").hide();
        $(".propos2").show();
    })
    //cacher propos1 et propos2 /afficher propos 3
    $(".btn-humain").click(function(){
        $(".propos1 , .propos2").hide();
        $(".propos3").show();
    })

    //cacher icone menu telephone
    $(".toogle_menu").click(function(){

        
    })
})