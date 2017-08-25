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
    </head>

  

    <body>
	<br><br><br>
        
            
           
            <section>				
                <div id="container_demo" >
               
                 
                    <div id="wrapper">
                        <div id="login" class="animate form">
                            <form  action="Welcomepage.php" method="post" autocomplete="on"> 
				
                                <h1>Log in</h1> 
                                <p> 
                                    <label for="username" class="uname"  > Your username </label>
                                    <input id="username" name="username" required="required" type="text" placeholder="myusername "/>
                                </p>
                                <p> 
                                    <label for="password" class="youpasswd" > Your password </label>
                                    <input id="password" name="password" required="required" type="password" placeholder="eg. X8df!90EO" /> 
                                </p>
                                <!--<p class="keeplogin"> 
									<input type="checkbox" name="loginkeeping" id="loginkeeping" value="loginkeeping" /> 
									<label for="loginkeeping">Keep me logged in</label>
								</p>-->
                                <p class="login button"> 
                                    <input type="submit" value="login" /> 
								</p>
                                 <p class="change_link">
									Not a member yet ?
									<a href="signup.php" class="to_register">Join us</a>
								</p>
                            </form>
                        </div>

                     
						
                    </div>
                </div>  
            </section>
        
    </body>
</html>