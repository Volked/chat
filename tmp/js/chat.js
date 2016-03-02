
function show(){
    var Result = "";
  
    $.ajax({
        url: "inc/post.php",
        cache: false,
        success: function(ResultData){
             ResultData = JSON.parse(ResultData);
          
       for(i=0; i < ResultData.login.length; i++){
	      var res = (ResultData.ssid == ResultData.uid[i]) ? 
			  "<a href='?id=" + ResultData.id[i]  +"'  rel='" + ResultData.id[i] + "'>[x]</a></div> " : "</div>";
          Result += "<div class='chat_result' style='color:#" 
                + ResultData.color[i] + "'>&nbsp;["+ ResultData.date[i] +"]&nbsp;"+ ResultData.login[i]  +
              ":&nbsp;" +  ResultData.message[i] + " &nbsp; " + res;
	   
          } 
      $(".result_message").html(Result); 
        }
	
    });
}
$(function(){
    show();
    setInterval(show, 1000);
 
  //Сообщения
  $("#button").click(function(){
     var message = $(".message").val();
     $.ajax({
        type : "POST",
        data: {message:message},
        url : "inc/post.php",
        success: function(data){
         if(data == 0){
             $(".result").html("<div class='alert alert-error'>Ошибка при записи в чат!</div>");
         }else{
             $(".message").val('');
             $(".result").html("<div class='alert alert-success'>Сообщение успешно добавлено!</div>");
             
             show();
             
 
         }   
        }
     });
  }) ; 
  //Вход  
   $("#button_login").click(function(){
      var login = $(".login").val();
      var password = $(".password").val();
      if(login == "" || password == ""){
          $(".result").html("<div class='alert alert-error'>Вы не ввели логин или пароль!</div>");
      }else{
          $.ajax({
             type: "POST",
             data: {login:login,password:password},
             url : "inc/login.php",
             success: function(data){
                 if(data == 0){
                  $(".result").html("<div class='alert alert-error'>Введенные данные не верны!</div>");   
                 }else{
                  $(".result").html("<div class='alert alert-success'>Успешный вход!</div>");
                  setTimeout('window.location.reload()', 3000);
                 }
             }
          });
      }
   }); 
   //цвет
   $("#color").click(function(){
      var color = $(".color").val();
      var uid = $(".id").val();
      if(uid == "") uid = 1;
      $.get("inc/login.php", {color:color, id:uid},
      function(){
         alert("Данные успешно сохранены!"); 
      });
   });
});


