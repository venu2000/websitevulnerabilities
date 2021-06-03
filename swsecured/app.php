<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Connecting Login and Registration Form to Database-----SeekCoding</title>
    <link rel="stylesheet" href="style11.css">
    <link href="https://fonts.googleapis.com/css2?family=Chilanka&family=Dancing+Script:wght@700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
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
                    <li><a href='https://www.instagram.com/sketch_ware/'><h6>Instagram</h6>About us</a></li>
                    <li><a href='#'>Products</a></li>
                    <li><a href='#'>Offers</a></li>
                    <a href="logout.php"><button>logout</button></a>
                    <li><form action="searchbar.php" method="POST">
                        <input type="text" placeholder="Search.." name="search">
                        <button type="submit"><i class="fa fa-search"></i></button>
                         </form>    
                    </li>    
                    
                           
                </ul>
            </nav>
        </div>
        <div class="sub-page">
          <div class="overlay"></div>
           <div class="text">
               <p>Sketch_ware was born for Yourself. It is userfriendly . Upload your Photos Here With in Few Minutes You will get an AMAZING STYLED COVER PAGES <br> impeccable customer service, we have been highly <br>This cover page is printed on your Book <br>Just Try once It will be beyound to your Expectations<br> Click<br>Upload<br>Select<br>Claim it...!</p>
            </div>
        </div>
        
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
                    </form>
                </div>
            </div>
        </div>
    </div>
</body>