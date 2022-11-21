$(document).ready(function(){
    // $('ul li a[href=""]').click(function(){
    //     $('ul li a').addClass('active');
    //     $('ul li a:active').css('color','red');
    // })
    $.ajax({
        url:'../../vues/src/app/header.html',
        type:'get',
        dataType:'text',
        data:'',
        async: true,
        success: function(reponse){
           if(page=="accueil"){
            $('ul li#1').addClass('active');
            $('ul li#2').removeClass('active');
            $('ul li#3').removeClass('active');
           } 
           else if(page=="service"){
            $('ul li#1').removeClass('active');
            $('ul li#2').addClass('active');
            $('ul li#3').removeClass('active');
           }
           else if(page=="about"){
            $('ul li#1').removeClass('active');
            $('ul li#2').removeClass('active');
            $('ul li#3').addClass('active');
           }
        }
    })
})