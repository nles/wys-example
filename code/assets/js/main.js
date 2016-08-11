$(function(){
  $("#reset-tour").bind('click',function(){
    $.post('/cockpit/wys/xhr/user_tour_status.php',{'action':'set','reset':1})
    delete window.localStorage["tour_current_step"]
    delete window.localStorage["tour_end"]
    window.location = "/cockpit/index.php/auth/logout";
  });
});

