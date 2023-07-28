<?php
session_start();
if (isset($_SESSION["email"])) {
   header("location: /group no.18_lifestyle store/products.php");
  }
?>
<!DOCTYPE html>
<html>
<head>
<title>Sign Up</title>
<link href="index.css" rel="stylesheet" type="text/css"/>

</head>

<style>

<style type="text/css">

*{
margin:0;
padding:0;
}

body{
background-image:url(image/login_background.jpg);
background-position: center;
background-size: cover;
font-family: sans-serif;
margin-top: 40px;
}

.regform{
width: 800;
background-color: rgb(0,0,0,0.6);
margin: auto;
color: #ffffff;
padding: 10px 0px 10px 0px;
text-align: center;
border-radius: 15px 15px 0px 0px;

}

.main{
background-color:rgb(0,0,0,0.5);
width:800px;
margin:auto;
}

#form{
padding:10px;
}

.login_email{
position:center;
left:200px;
top:-20px;
color:white;
width: 480px;
border-radius:6px;
font-size: 16px;
}

.login_password{
position:center;
left:200px;
top:-20px;
color:white;
width: 480px;
border-radius:6px;
padding-left:50px;
font-size: 16px;
}

.login_phone{
position:center;
left:200px;
top:-20px;
color:white;
width: 480px;
border-radius:6px;
padding-left:20px;
font-size: 16px;
}

.login_email_page{
position:center;
left:200px;
top:-20px;
color:white;
width: 480px;
border-radius:6px;
padding-left:68px;
font-size: 16px;
}

.login_password_page{
position:center;
left:200px;
top:-20px;
color:white;
width: 480px;
border-radius:6px;
padding-left:60px;
font-size: 16px;
}
.shift{

padding-left:200px;
padding-top:100px;

}

.button_login_page{
right:100px;
}

.button_login_page_div{

padding-left:165px;
padding-top:30px;

}

.a_login {
    color: mediumblue;

}

.sign_login_page{

color:white;
float:right;

}







</style>


<body>

    <div class="header">
        <div class="inner-header">
            <div class="logo">
                <a href="index.php">Crime Detector</a>
            </div>
            <div class="header-link">
                <a href="signup.php">Sign Up</a>
            </div>
            <div class="header-link">
                <a href="login.php">Login</a>
            </div>
        </div>
    </div>
  
<div >
    
    <h1 class="regform">Sign Up</h1>

    <div class="main">
    <div class="shift">
        <form action="backend/signup.php" method="post">

        <div class="login_password">
            <label for="">First Name:</label>
            <input type="text" name="firstname" required/>
        </div>

            <br/>
            <br/>

            <div class="login_password">
            <label for="">Last Name:</label>
            <input type="text" name="lastname" required/>
            </div>

            <br/>
            <br/>

            <div class="login_phone">
            <label for="">Phone Number:</label>
            <input type="phone" name="phone" required/>
            </div>
            
            <br/>
            <br/>

            <div class="login_email_page">
            <label for="">Email ID:</label>
            <input type="email" name="email" required/>
            </div>


            <br/>
            <br/>

            <div class="login_email_page">
            <label for="">Address: </label>
            <input type="text" name="address" required/>
            </div>

            <br/>
            <br/>
            
<!-- 
            <label for="">Payment Method:</label>
            
            
            <br/>
            
            <input type="radio" name="payment" id="Credit card" value="Credit Card"/> <label for="Payment Method">Credit Card</label>
            <br/>
            <input type="radio" name="payment" id="UPI" value="UPI"/> <label for="Payment Method">UPI</label>
            <br/>
            <input type="radio" name="payment" id="COD" value="COD"/> <label for="Payment Method">Cash On Delivery</label> -->
<!-- 
            <br/><br> -->
            
            <div class="login_password_page">
            <label for="">Password:</label>
            <input type="password" name="password" required/>
            <br/>
            </div>
            <br><br>
            
            <div class="button_login_page_div">
            <button type="submit" class="button_index">Sign Up</button>
            </div>

           
            <br/>
            <br/>
            <br/>
            <br/>
            <br/>
            <br/>
            <br/>
            <br/>


        </form>



    </div>
</div>  
<footer>
    <div class="container">
        <centre>
            <p>Copyright &copy; All rights Reserved | Contact Us:+91 90000 00000</p>
        </centre>
    </div>
</footer>

</body>  

</html>