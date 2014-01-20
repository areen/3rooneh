$(document).ready(function(){
  
 $("button#submit").click(function(){ 
    
         if($("#ID").val() === "" || $("#P").val() === "")
             $("div#one").html("please enter both Id AND Password");
         else
             $.post($("#myform").attr("action"),
              $("#myform :input").serializeArray(),
            function(data){
                $("div#one").html(data);
         
            });
            $("#myform").submit(function(){
                return false;
            });
           
                       
});
});

  
            $(document).ready(function(){
    
      $("select#myList").change(function (){ 
   
  
          if($("#myList").val() === "" )
             $("div#one").html("select semester");
         else
             $.post($("#myform2").attr("action"),
              $("#myform2 :input").serializeArray(),
            function(data){
                $("div#one").html(data);
         
            });
            $("#myform2").submit(function(){
                return false;
            });
          
});;

});

  
            $(document).ready(function(){
    
      $("select#myList2").change(function (){ 
   
  
          if($("#myList2").val() === "" )
             $("div#one").html("select semester");
         else
             $.post($("#myform2").attr("action"),
              $("#myform2 :input").serializeArray(),
            function(data){
                $("div#one").html(data);
         
            });
            $("#myform2").submit(function(){
                return false;
            });
          
});;

});