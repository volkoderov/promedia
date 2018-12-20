$(document).ready(function(){
    $("#send").click(function(e){
        e.preventDefault();
        var text=$("#text").val();
       $.ajax({
       	type: 'POST',
           url: 'function.php',
           data: {text: text},
           success: function(res){
          $("#otvet").empty()
          $("#otvet").append(res);
         },
        });
    });
});  