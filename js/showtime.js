function showtime(){
   var now=new Date();
   var year=now.getFullYear();
   var month=now.getMonth()+1;
   var day=now.getDate();
   var hours=now.getHours();
   var minutes=now.getMinutes();
   var seconds=now.getSeconds();
   time=year+'年'+month+'月'+day +'日'+hours+':'+minutes+':'+seconds;
   var showtime=document.getElementById('showtime');
   showtime.innerHTML=time;
}
function letstart(){
   taskId=setInterval(showtime,500);
}

window.onload=function(){

	letstart();
}
