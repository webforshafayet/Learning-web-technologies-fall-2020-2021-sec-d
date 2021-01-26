"use strict"


//alert('testdd');
//console.log('testing...');

//document.write('this is JS example');

//document.getElementById('head').innerHTML = 'this is js example';
//obj.innerHTML = "test";


//let student = ['alamin', '123', 'CS'];

function f1(){
	let data= document.getElementById('name').value;
	if(data == ''){
		document.getElementById('head').innerHTML = 'invalid data';		
	}else{
		document.getElementById('head').innerHTML = data;
	}

}
/////////////////////////////////edit verify user

//name
function f2(){
	let data= document.getElementById('username').value;
	if(data == ''){
		document.getElementById('Username').innerHTML = 'invalid data';		
	}else{
		document.getElementById('Username').innerHTML = data;
	}

}

//password
function f3(){
	let data= document.getElementById('password').value;
	if(data == ''){
		document.getElementById('passwordjs').innerHTML = 'invalid data';		
	}
	else if(data.length <5){
		document.getElementById('passwordjs').innerHTML = 'Password is weak';	
	}

	else if (data.length >4 && data.length <7){
		document.getElementById('passwordjs').innerHTML = 'Password is medium';
	}
	
	
	else{
		document.getElementById('passwordjs').innerHTML = 'Password is strong';
	}

}


//emailllll  
function f4(){
	let data= document.getElementById('email').value;
	if(data == ''){
		document.getElementById('emailjs').innerHTML = 'invalid data';		
	}
	else{
        document.getElementById('emailjs').innerHTML = data;
        
    }
    
 

}


///////////////////// edit all user

//name
function f5(){
	let data= document.getElementById('username').value;
	if(data == ''){
		document.getElementById('Username').innerHTML = 'invalid data';		
	}else{
		document.getElementById('Username').innerHTML = data;
	}

}

//password
function f6(){
	let data= document.getElementById('password').value;
	if(data == ''){
		document.getElementById('passwordjs').innerHTML = 'invalid data';		
	}
	else if(data.length <5){
		document.getElementById('passwordjs').innerHTML = 'Password is weak';	
	}

	else if (data.length >4 && data.length <7){
		document.getElementById('passwordjs').innerHTML = 'Password is medium';
	}
	
	
	else{
		document.getElementById('passwordjs').innerHTML = 'Password is strong';
	}

}




//emailllll  
function f7(){
	let data= document.getElementById('email').value;
	if(data == ''){
		document.getElementById('emailjs').innerHTML = 'invalid data';		
	}
	else{
        document.getElementById('emailjs').innerHTML = data;
        
    }
    
 

}

///////////////////////edit profile
function f8(){
	let data= document.getElementById('username').value;
	if(data == ''){
		document.getElementById('Username').innerHTML = 'please insert something';		
	}else{
		document.getElementById('Username').innerHTML = 'looking valid profile';
	}

}

//////////////// edit post & create post
function f9(){
	let data= document.getElementById('username').value;
	if(data == ''){
		document.getElementById('Username').innerHTML = 'please insert something';		
	}else{
		document.getElementById('Username').innerHTML = 'looking valid post';
	}

}

////////////////  insert comment
function f10(){
	let data= document.getElementById('username').value;
	if(data == ''){
		document.getElementById('Username').innerHTML = 'Enter your comment first';		
	}else{
		document.getElementById('Username').innerHTML = 'looking valid comment';
	}

}

 
 

//////////////////////// ajax search view all user
function showalluser(str) {
	var xhttp;  
	if (str == "") {
	  document.getElementById("txtHint").innerHTML = "";
	  return;
	}
	xhttp = new XMLHttpRequest();
	xhttp.onreadystatechange = function() {
	  if (this.readyState == 4 && this.status == 200) {
		document.getElementById("txtHint").innerHTML = this.responseText;
	  }
	};
	xhttp.open("GET", "getalluser.php?q="+str, true);
	xhttp.send();
  }


  //////////////////////// ajax search view all user
function showverifyuser(str) {
	 
	
	var xhttp;  
	if (str == "") {
	  document.getElementById("txtHint").innerHTML = ""; 
	  return;
	}
	xhttp = new XMLHttpRequest();
	xhttp.onreadystatechange = function() {
	  if (this.readyState == 4 && this.status == 200) {
		document.getElementById("txtHint").innerHTML = this.responseText;	 
	  }
	};
	xhttp.open("GET", "getverifyuser.php?q="+str, true);
	xhttp.send();
  }

