<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Connecting Login and Registration Form to Database-----SeekCoding</title>
    <link rel="stylesheet" href="style111.css">
    <link href="https://fonts.googleapis.com/css2?family=Chilanka&family=Dancing+Script:wght@700&display=swap" rel="stylesheet">
</head>
<body>
    <div class="full-page">
        <div class='navbar'>
            <div class='logo'>
                <a href='#'><h1>Sketch_ware</h1></a>
            </div>
            <nav>
                <ul id='MenuItems'>
                    <li><a href='loginandregister.php'>Home</a></li>
                    <li><a href='#'>About us</a></li>
                    <li><a href='#'>Products</a></li>
                    <li><a href='#'>Offers</a></li>
                    <<li><form action="searchbar.php" method="POST">
                        <input type="text" placeholder="Search.." name="search">
                        <button type="submit"><i class="fa fa-search"></i></button>
                         </form>    
                    </li> 
                    <li><button class='loginbtn'onclick="document.getElementById('login-form').style.display='block'" style="width:auto;">Login</button></li>
                    <li><button class='loginbtn'onclick="document.getElementById('register-form').style.display='block'" style="width:auto;">Register</button></li>
                </ul>
            </nav>
            
        </div>
        <div class="sub-page">
          <div class="overlay"></div>
           <div class="text">
        
            </div>
        </div>
                         
        <div id='login-form' class="login-page">
            <div class="form-box">
                <span onclick="document.getElementById('login-form').style.display='none'" class="close">&times;</span>
                <div class="form">
                    <form class='login-form', action="validate.php", method="post">
                        <center><h1 class="main-heading">Login Form</h1></center>
				        <input type="text"name='emailid' placeholder="Email ID", required/>
				        <input type="password" name='password' placeholder="password", required/>
				        <button>LOGIN</button>
				    </form>
                </div>
            </div>
        </div>
        <div id="register-form" class='register-page'>
            <div class="form-box1">
               <span onclick="document.getElementById('register-form').style.display='none'" class="close">&times;</span>
                <div class="form1">
                    <form class='register-form', action="registration.php", method="post">
                        <center><h1 class="main-heading">Register Form</h1></center>
				        <input type="text" name='user'placeholder="user name" required/>
				        <input type="text" name='emailid'placeholder="email-id" required/>
				        <input type="password"name='password' placeholder="password" required/>
				        <button>REGISTER</button>
                        <Form Name="" Method="" Action="">
                            <input Name="1" type="Image" src="pic1.jpg" height="100" width="150">
                        </Form>
                    </form>
                </div>
            </div>
        </div>
    </div>
</body>
</html>