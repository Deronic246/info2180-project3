function Validate(){
    var fname=(document.getElementById("form1")["fname"]).value;
    var lname=document.getElementById("form1")["lname"].value;
    var pwd=document.getElementById("form1")["pwd"].value;
    var email=document.getElementById("form1")["email"].value;
    var tel=document.getElementById("form1")["tel"].value;
    
    var ferror=document.getElementById("ferror");
    var lerror=document.getElementById("lerror");
    var eerror=document.getElementById("eerror");
    var perror=document.getElementById("perror");
    var terror=document.getElementById("terror");
    
    var selecterror=document.getElementById("selecterror");
    var valid=true;
    var ptest=/^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)[A-Za-z\d]{8,}$/;
    var ttest=/^\d{3}-\d{3}-\d{4}$/;
          
    if(fname==""){
        ferror.innerHTML= "First Name Field is Empty";
        valid=false;
    }
    
    
    if(lname==""){
       
        lerror.innerHTML="Last Name Field is Empty";
        valid=false;
    }
        
    if(pwd==""){
        perror.innerHTML="Password Field is Empty";
        valid=false;
    }
    else if(ptest.test(pwd)==false){
        perror.innerHTML= "Password must contain at least one number and one letter, and one capital letter and are at least 8 characters long";
        valid=false;
    }
    
    if(tel==""){
        terror.innerHTML="Telephone Field is Empty";
        valid=false;
    }
    
    else if(ttest.test(tel)==false){
        terror.innerHTML= "Telephone number must be in the form of 000-000-0000";
        valid=false;
    }
    
    if(email==""){
        eerror.innerHTML="Email Field is Empty";
        valid=false;
    }
    return valid;
}