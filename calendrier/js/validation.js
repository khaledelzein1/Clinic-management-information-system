// JavaScript Document
function IsValidEmail(txt){
    
	    var emailExp = /^[\w\-\.\+]+\@[a-zA-Z0-9\.\-]+\.[a-zA-z0-9]{2,4}$/;

		var goodEmail = txt.match(emailExp);
		if (goodEmail)
		    return true;
		else
			return false;
		
	
}
function Validate()
{ 
    var ok=0;
	if(document.getElementById('userName').value=='')
	{
	   document.getElementById('userNameErr').innerHTML ='Required Field';
	   document.getElementById('userNameErr').style.visibility='visible';
	   ok=1;
	}
	else
	{
		 document.getElementById('userNameErr').style.visibility='hidden';
	}
	
	if(document.getElementById('password').value=='')
	{
	   document.getElementById('passwordErr').innerHTML =' Required Field';
	   document.getElementById('passwordErr').style.display='';
	   ok=1;
	}
	else
	{
		 document.getElementById('passwordErr').style.display='none';
	}
	
	if(document.getElementById('firstName').value=='')
	{
	   document.getElementById('firstNameErr').innerHTML =' Required Field';
	   document.getElementById('firstNameErr').style.visibility='visible';
	   ok=1;
	}
	else
	{
		 document.getElementById('firstNameErr').style.visibility='hidden';
	}
	
	if(document.getElementById('lastName').value=='')
	{
	   document.getElementById('lastNameErr').innerHTML =' Required Field';
	   document.getElementById('lastNameErr').style.display='';
	   ok=1;
	}
	else
	{
		 document.getElementById('lastNameErr').style.display='none';
	}
	
	if (document.form1.country.options[document.form1.country.selectedIndex].value=="0")
	{
	   document.getElementById('countryErr').innerHTML =' Required Field';
	   document.getElementById('countryErr').style.display='';
	   ok=1;
	}
	else
	{
		 document.getElementById('countryErr').style.display='none';
	}
	
	if(document.getElementById('email').value=='')
	{
	   document.getElementById('emailErr').innerHTML =' Required Field';
	   document.getElementById('emailErr').style.display='';
	   ok=1;
	}
	else if(!IsValidEmail(document.getElementById('email').value))
	{
	   document.getElementById('emailErr').innerHTML ='Invalid Email Address !';
	   document.getElementById('emailErr').style.display='';
	   ok=1;
	}
	else
	{
		 document.getElementById('emailErr').style.display='none';
	}
	 if(ok==1) 
	 {
		 ok=0;
		 return false;
	 }
	 
	 else
	 {
		 document.form1.action="";
		 document.form1.submit();
	 }
}

function redirectToSearchResult()
{
	
	document.forms[0].action="u_searchResult.php";
	document.forms[0].submit();
	
}