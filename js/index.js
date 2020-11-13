 $(document).ready(function(){
     //mettre swetalert
     Swal.fire({
        title: '<strong>Bienvenue dans <u>Accès Santé</u></strong>',
        icon: 'info',
        html:
          'Nous vous signalons que le site est en construction</b>, ' +
          "Et pour plus d'Information, Contacter " + '<a href="http://rhema-divine.com"> Clara N.</a>',
        showCloseButton: true,
        showCancelButton: true,
        focusConfirm: false,
        confirmButtonText:
          '<i class="fa fa-thumbs-up"></i> Très bien!',
        confirmButtonAriaLabel: 'Thumbs up, great!',
        cancelButtonText:
          '<i class="fa fa-thumbs-down"></i>' + '<a href="http://google.fr"> Non, je ne veux pas!!</a>',
        cancelButtonAriaLabel: 'Thumbs down'
      })
})

//     $(".propos2 , .propos3").hide();

//     //cacher propos2 et propos3 /afficher propos1
//     $(".btn-equite").click(function(){
//         $(".propos2 , .propos3").hide();
//         $(".propos1").show();
//     })
//     //cacher propos1 et propos3 /afficher propos 2
//     $(".btn-partage").click(function(){
//         $(".propos1 , .propos3").hide();
//         $(".propos2").show();
//     })
//     //cacher propos1 et propos2 /afficher propos 3
//     $(".btn-humain").click(function(){
//         $(".propos1 , .propos2").hide();
//         $(".propos3").show();
//     })

//     //cacher icone menu telephone
//     $(".toogle_menu").click(function(){

        
//     })
// })

