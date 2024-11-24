$(document).ready(function(){

    $("#sname").focus(function(){
        $(this).css("background-color","lime");
        $("#sclass").css("background-color","lime");
        $("#country").css("background-color","lime");
    })

    $("#sname").blur(function(){
        $("#sname").css("background-color","lime");
        
    })
    
    $("#scountry").change(function(){
        $("#scountry").css("background-color","lime");
    })

});