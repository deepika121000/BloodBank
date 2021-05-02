<html>  
<head>  
    <title>Reepient Login</title>  
    <!-- insert style.css file inside index.html   -->
    <link rel = "stylesheet" type = "text/css" href = "adminstyle.css">   
</head>  
<body>  
    <div class="Login-header">
      <h1>RECIPIENT LOGIN</h1>
    </div>
    <div id = "frm">  
        <h1>Login</h1>  
        <form name="f1" action = "authenticationReg.php" onsubmit = "return validation()" method = "POST">  
            <p>  
                <label> User ID: </label>  
                <input type = "text" id ="user" name  = "Recepient_id" />  
            </p>  
            <p>  
                <label> Password: </label>  
                <input type = "password" id ="pass" name  = "R_password" />  
            </p>  
            <p>     
                <input type =  "submit" id = "btn" value = "Login" />  
            </p>  
        </form>  
    </div>  
    <!-- // validation for empty field    -->
    <script>  
            function validation()  
            {  
                var id=document.f1.user.value;  
                var ps=document.f1.pass.value;  
                if(id.length=="" && ps.length=="") {  
                    alert("User Name and Password fields are empty");  
                    return false;  
                }  
                else  
                {  
                    if(id.length=="") {  
                        alert("User Name is empty");  
                        return false;  
                    }   
                    if (ps.length=="") {  
                    alert("Password field is empty");  
                    return false;  
                    }  
                }                             
            }  
        </script>  
</body>     
</html>  