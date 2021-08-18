function validateform(){  
		var name=document.getElementById("name").value;  
		var email=document.getElementById("email").value;  
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

}
function checkNameBlur() {
	if (document.getElementById("name").value == "") {

	  	document.getElementById("NameErr").innerHTML = "Name can't be blank";

	}else{
	  	document.getElementById("NameErr").innerHTML = "";
	}
}