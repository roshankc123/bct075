function send(u_session){
    var message=document.getElementById('message_text').value;
    var xhttp=new XMLHttpRequest;
    xhttp.onreadystatechange= function(){
        if(this.status== 200 && this.readyState== 4){
            document.getElementById('message_display').innerHTML=this.responseText;
        }
    }
    xhttp.open("GET","phps/message.php?message="+message+"&time="+Date()+"&user="+u_session,true);
    xhttp.send();
}
//"message="+message+"&timestamp="+Date()