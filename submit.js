function submit_value() {
	var fname=document.getElementById("fname").value;
	var lname=document.getElementById("lname").value;
	var age=document.getElementById("age").value;
	var dob=document.getElementById("dob").value;
	var gender=document.getElementById("gender").value;
	var phone=document.getElementById("phone").value;
	var tarea=document.getElementById("tarea").value;
	var email=document.getElementById("email").value;
	if(validation())
	{
		document.getElementById("form1").submit();
		alert("form submitted successfully")
	}
}

function validation()
{
	var fname=document.getElementById("fname").value;
	var lname=document.getElementById("lname").value;
	var age=document.getElementById("age").value;
	var dob=document.getElementById("dob").value;
	var gender=document.getElementById("gender").value;
	var tarea=document.getElementById("tare").value;
	
	if(fname===' ' || age===' ' || gender===' ' || phone===' ' )
	{
		alert("please fill all fields marked *");
		return false;
	}
	else{
		return true;
	}
}





