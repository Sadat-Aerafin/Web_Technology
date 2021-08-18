function validateform(){  
		var name=document.getElementById("name").value;  
		var email=document.getElementById("email").value; 
		var un=document.getElementById("un").value; 
		var pass=document.getElementById("pass").value; 
		var Cpass=document.getElementById("Cpass").value; 
		var desig=document.getElementById("desig").value;
		var gender=document.myform.gender.value;
		var dob=document.getElementById("dob").value;

		  
		if (name==""){  
		  document.getElementById("NameErr").innerHTML = "Name can not be empty";  
		  return false;  
		}

		if (email=="") {
			document.getElementById("emailErr").innerHTML = "Email can not be empty";
			return false;	
		}else{
	  	document.getElementById("emailErr").innerHTML = "";
		}
		

		atpos = email.indexOf("@");
		dotpos = email.lastIndexOf(".");
		if (atpos < 1 || ( dotpos - atpos < 2 )) {
			document.getElementById("emailErr").innerHTML = "Please enter correct email ID";
			return false;	
		}

		if (un=="") {
			document.getElementById("unErr").innerHTML = "Username can not be empty";
			return false;
		}else{
	  	document.getElementById("unErr").innerHTML = "";
		}

		if (pass=="") {
			document.getElementById("passErr").innerHTML = "Password can not be empty";
			return false;
		}else{
	  	document.getElementById("passErr").innerHTML = "";
		}

		if (pass.length < 6) {
			document.getElementById("passErr").innerHTML = "Password length should be atleast 6 character";
			return false;
		}else{
	  	document.getElementById("passErr").innerHTML = "";
		}

		if (pass != Cpass) {
			document.getElementById("CpassErr").innerHTML = "Passwords are not matching";
			return false;
		}else{
	  	document.getElementById("CpassErr").innerHTML = "";
		}

		if (desig=="") {
			document.getElementById("desigErr").innerHTML = "Designation can not be empty";
			return false;
		}else{
	  	document.getElementById("desigErr").innerHTML = "";
		}

		if (gender=="") {
			document.getElementById("genderErr").innerHTML = "Gender can not be empty";
			return false;
		}else{
	  	document.getElementById("genderErr").innerHTML = "";
		}

		if (dob=="") {
			document.getElementById("dobErr").innerHTML = "Date of birth can not be empty";
			return false;
		}else{
	  	document.getElementById("dobErr").innerHTML = "";
		}
		if (userExist){
			document.getElementById("unErr").innerHTML = "*Username already exist";
			return false;
		}




}
		
		   
function checkEmail(){
var email=document.getElementById("email").value;
	atpos = email.indexOf("@");
		dotpos = email.lastIndexOf(".");
		if (atpos < 1 || ( dotpos - atpos < 2 )) {
			document.getElementById("emailErr").innerHTML = "Please enter correct email ID";
		}
}


function checkNameBlur() {
	if (document.getElementById("name").value == "") {

	  	document.getElementById("NameErr").innerHTML = "Name can't be blank";

	}else{
	  	document.getElementById("NameErr").innerHTML = "";
	}
}
var userExist = false;
function checkUN(){
		var un = document.getElementById("un").value;
		var xhttp= new XMLHttpRequest();
		xhttp.onreadystatechange=function(){
			if(this.readyState == 4 && this.status == 200){
				var rsp = this.responseText;
				rsp = rsp.trim();
				if(rsp == "true"){
					document.getElementById("unErr").innerHTML = "Valid Username";
					document.getElementById("unErr").style.color="green";
					userExist=false;
				}
				else{
					document.getElementById("unErr").innerHTML = "*Username already exist";
					document.getElementById("unErr").style.color="red";
					userExist=true;
				}	
			}
		}
		
		xhttp.open("GET","checkun.php?un="+un);

		xhttp.send();
}

// function checkNameKeyUp() {
// 	if (!preg_match("/^[a-zA-Z-' ]*$/",document.getElementById("name").value)) {
// 	  	document.getElementById("NameErr").innerHTML = "Only letters and white space allowed";
// 	  	document.getElementById("NameErr").style.color = "red";
// 	  	document.getElementById("name").style.borderColor = "red";
// 	}else{
// 	  	document.getElementById("NameErr").innerHTML = "";
// 		document.getElementById("name").style.borderColor = "black";
// 	}
// }
