// --- JavaScript Document --- //

window.onload = maxWindow;

function maxWindow() {
	window.moveTo(0, 0);
	window.resizeTo(screen.width, screen.height);
	window.focus();
}


function showscreen(){
	var windowWidth = 1200;
	var windowHeight = 750;
	window.resizeTo(windowWidth,windowHeight);
	//window.moveTo(0, 0);
	//window.resizeTo(screen.width, screen.height);
	var xPos = (screen.width/2) - (windowWidth/2);
	var yPos = (screen.height/2) - (windowHeight/2);
	window.moveTo(xPos, yPos); 
	
	window.focus();
}

function checkKey(n){
  if (window.event.keyCode == 13){ //Enter
	  schstock();
  }else if(window.event.keyCode == 37){ //Left
	  //ChkKeyLeft(n,i)
  }else if(window.event.keyCode == 38){ //Up
	  //ChkKeyUp(n,i);
  }else if(window.event.keyCode == 39){ //Right
	  //ChkKeyRight(n,i);
  }else if(window.event.keyCode == 40){ //Down
	  //ChkKeyDown(n,i);
  }
}

function loaddatatable(){
	var data = $("#syear").val();
	var data2 = $("#syear").text();
	//alert(data);
	//alert(data2);
	$("#dt1").html(" Loading..." + "<img src='images/preloader-01.gif' />");
	$("#dt1").load("YongHouse.php?data=" + data + "");
}



/*
function schstock(){
	var sj = document.getElementById('sj');
	var sb = document.getElementById('sb');
	var st = document.getElementById('st');
	var data = 'sj=' + sj.value + '&sb=' + sb.value + '&st=' + st.value; 
	//alert(data);
	if(st.value != ''){
		if(sb.value=='1'){
			document.getElementById('a2').innerHTML = " Loading..." + "<img src='images/preloader-01.gif' />";
			ajaxLoad('post', 'schstock.php', data,'a2');	
		}
		if(sb.value=='2'){
			document.getElementById('a2').innerHTML = " Loading..." + "<img src='images/preloader-01.gif' />";
			ajaxLoad('post', 'schstockbyname2.php', data,'a2');	
		}
	}else{
		alert("กรุณาตรวจสอบ ข้อมูลคำค้นหา ให้ครบถ้วน");
		st.focus();
		st.select();	
	}
}

function toggledetail(){
	var dt1 = document.getElementById('sd1');
	if(dt1.style.display == 'block'){
		dt1.style.display = 'none';
	}else{
		dt1.style.display = 'block';
	}
}

function toggledetail2(numi){
	var nametbody = 'sd' + numi;
	var nmaediv = 'sdt' + numi;
	var dt2 = document.getElementById(nametbody);
	var dt3 = document.getElementById(nmaediv);
	if(dt2.style.display == 'block'){
		dt2.style.display = 'none';
	}else{
		dt2.style.display = 'block';
		var sj = document.getElementById('sj');
		var sb = document.getElementById('sb');
		var st = document.getElementById('st');
		var data = 'sj=' + sj.value + '&sb=' + sb.value + '&st=' + st.value; 
		if(sb.value=='2'){
			dt3.innerHTML = " Loading..." + "<img src='images/preloader-01.gif' />";
			ajaxLoad('post', 'detailstock.php', data,nmaediv);	
		}
		
	}
}

function selectcode(containerid){
       if (document.selection) {
            var range = document.body.createTextRange();
            range.moveToElementText(document.getElementById(containerid));
            range.select();
        } else if (window.getSelection) {
            var range = document.createRange();
            range.selectNode(document.getElementById(containerid));
            window.getSelection().addRange(range);
        }
}

*/

function test(tt){
	//$('#myModal3').toggle('slow');
	alert('ok' + tt + ".");	
	//$("#myModalLabel").html("test" + tt);
}




// --- End javascript --- //