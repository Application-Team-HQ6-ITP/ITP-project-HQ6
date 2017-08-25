<!DOCTYPE html>
 <html lang="en" class="no-js">  
    <head>
        <meta charset="UTF-8" />
        <!-- <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">  -->
        <title>Login and Registration Form with HTML5 and CSS3</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0"> 
        <meta name="description" content="Login and Registration Form with HTML5 and CSS3" />
        <meta name="keywords" content="html5, css3, form, switch, animation, :target, pseudo-class" />
        <meta name="author" content="Codrops" />
        <link rel="shortcut icon" href="../favicon.ico"> 
        
        <link rel="stylesheet" type="text/css" href="style.css" />
		<link rel="stylesheet" type="text/css" href="animate-custom.css" />

	<script type="text/javascript">

		function validate()
		{

   	      
		if( document.myForm.Email.value == "" )
			{
			alert( "Please provide your Email!" );
			document.myForm.Email.focus() ;
       			return false;
        		 }
		 // Radio Button Validate      
		if( document.myForm.gender[1].checked== false &&
		document.myForm.gender[0].checked== false )
			{
				alert( "Please provide your Gender!" );
				return false;
			}
		return true ;
		}


		function validateEmail(emailField){
			var reg = /^([A-Za-z0-9_\-\.])+\@([A-Za-z0-9_\-\.])+\.([A-Za-z]{2,4})$/;
			if (reg.test(emailField.value) == false) 
			{
				alert('Invalid Email Address');
				return false;
			}
		return true;
		}
	</script>
    </head>

  

    <body>
	<br><br><br>
        
            
           
            <section>				
                <div id="container_demo" >
               
                 
                    <div id="wrapper">
                        <div id="login" class="animate form">
                            <form  action="restinsert3.php" method="post" autocomplete="on" onsubmit="return(validate());"> 
				
                                <h1>Please fill all information</h1> 
                                <p> 
                                    <label for="username" class="uname"  > Your username </label>
                                    <input id="username" name="cusname" required="required" type="text" placeholder="myusername "/>
                                </p>
				<p> 
                                    <label for="username" class="Email"  > Your Email </label>
                                    <input id="Email" name="cusEmail" required="required" type="text" placeholder="any@any.com " onblur="validateEmail(this);"/>
                                </p>
                                <p> 
                                    <label for="password" class="youpasswd" > Your password </label>
                                    <input id="password" name="cuspass" required="required" type="password" placeholder="eg. X8df!90EO" /> 
                                </p>
				<p> 
                                    <label for="phone Number" class="phone Number"  > Your phone Number </label>
                                    <input id="phone Number" name="cusphone" required="required" type="text" placeholder="079000000" />
                                </p>
				<p> 
                                    <label for="Address" class="Address"  > Your Address</label>
                                    <input id="Address" name="cusaddr" required="required" type="text" placeholder="baghdad" />
                                </p>
                                
                                <p class="login button"> 
                                    <input type="submit" value="submit" /> 
								</p>
                                 <p class="login button"> 
                                    <input type="reset" /> 
								</p>
                            </form>
                        </div>

                     
						
                    </div>
                </div>  
            </section>
        
    </body>
</html>