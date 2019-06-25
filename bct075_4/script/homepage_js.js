var x=0;
var y=0;
var x_img=500;
   function text_move(){
    document.getElementById('u_all').style="transform:skewX("+x+"deg);";
    y++;
	if(x==0)
	x=10;
	else
	x=0;
	if(y<10){
	setInterval(text_move,10);
	}
}
   function pre(){
	x_img--;
	document.getElementById('img_dispay').alt=(x_img)+":name";
	document.getElementById('img_dispay').src=(x_img)+".jpg";
}
   function next(){
	x_img++;
	document.getElementById('img_dispay').alt=(x_img)+":name";
	document.getElementById('img_dispay').src=(x_img)+".jpg";
	setInterval(next,500);
}
function unopen(){
	document.getElementById('bef_load_message').innerHTML="";
	document.getElementById('bef_load_message').style="z-index:3;width:0px;height:0px;";
	send();
}