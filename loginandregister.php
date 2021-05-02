<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Connecting Login and Registration Form to Database-----SeekCoding</title>
    <link rel="stylesheet" href="style.css">
    <link href="https://fonts.googleapis.com/css2?family=Chilanka&family=Dancing+Script:wght@700&display=swap" rel="stylesheet">
</head>
<body>
    <div class="full-page">
        <div class='navbar'>
            <div class='logo'>
                <a href='#'><h1>Dr.V</h1></a>
            </div>
            <nav>
                <ul id='MenuItems'>
                    <li><a href='#home'>Home</a></li>
                    <li><a href='#special'>Specialities</a></li>
                    <li><a href='#contact'>Contact Us</a></li>
                    <li><button class='loginbtn'onclick="document.getElementById('login-form').style.display='block'" style="width:auto;">Login</button></li>
                    <li><button class='loginbtn'onclick="document.getElementById('register-form').style.display='block'" style="width:auto;">Register</button></li>
                </ul>
            </nav>
        </div>
        <div class="sub-page">
          <div class="overlay"></div>
           <div class="text">
               <h3>Welcome to the virtual reality of meeting the doctors online</h3>
               <p>Here,you will we able to meet doctors whom you want to conuslt and clarify all your doubts .<br>You have to pay to the doctors before you consult them .After paying your amount you will receive an email  to the mail id which you registered and you can join in the meet link given to you.You have to join at the exact time which was mentioned.</p>
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
                    </form>
                </div>
            </div>
        </div>
    </div>
<section class ="specialities" id="special">
         <h2> SPECIALITIES</h2>
<article>
<img src="img/Anesthiologits.jpg" width="100" height="100">
    <p>Anesthiologits</p>
       </article>
       <article>
   
<img src="img/cardiologits.jpg" width="100" height="100" >
    <p>Cardiologits</p>
    </article>
    <article>
<img src="img/dermatology.jpg" width="100" height="100" >
    <p>Dermatology</p>
       </article>
       <article>
   
<img src="img/gastroentryology.jpg" width="100" height="100" >
    <p>Gastroentrologits</p>
    </article>
    <article>
<img src="img/Immunologits.jpg" width="100" height="100" >
    <p>Immunologits</p>
       </article>
       <article>
   
<img src="img/neurology.jpg" width="100" height="100" >
    <p>Neurologits</p>
    </article>
    <article>
<img src="img/oncologits.jpg" width="100" height="100" >
    <p>Oncologits</p>
       </article>
       <article>
   
<img src="img/ophthomologits.jpg" width="100" height="100" >
    <p>Ophthomologits</p>
    </article>
    <article>
<img src="img/pediatrician.jpg" width="100" height="100">
    <p>Pediatricians</p>
    </article>
    </section>
    <div>
       <section class="contact" id="contact">
          <h2>CONTACT</h2>
            <p>EMAIL ID : abc@drv.in<br>
                FACEBOOK : Dr.V<br></p>
       </section>
       <section class="top" id ="home">^</section>
       <footer>
           <section class="footor">
              <center>
               <p>&copy;copyrights 2020<br>
               <a href=#>Terms and conditions</a></p>
               </center>
           </section>
       </footer>
    <script
  src="https://code.jquery.com/jquery-3.5.1.js"
  integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc="
  crossorigin="anonymous"></script>
    <script src="script.js"></script> 
</body>
</html>
