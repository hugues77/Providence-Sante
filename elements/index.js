$(document).ready(function(){

    $('.partage').hide();
    $('.passionnement').hide();
    
    //equité
    $('#equite').click(function(){
        $('.partage').hide();
        $('.passionnement').hide()
        $('.equite').show();
    })

    //partage
    $('#partage').click(function(){
        $('.equite').hide();
        $('.passionnement').hide()
        $('.partage').show();
    })

    //Passionnement
    $('#passio').click(function(){
        $('.equite').hide();
        $('.partage').hide();
        $('.passionnement').show();
    })
})