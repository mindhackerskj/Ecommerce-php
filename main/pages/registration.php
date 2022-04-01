<!DOCTYPE html>
<html>
<head>
  <title>Register Below</title>
  <link rel="stylesheet" type="text/css" href="assets/css/style.css">
  <link href='http://fonts.googleapis.com/css?family=Comfortaa' rel='stylesheet' type='text/css'>
<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
 <link href='http://fonts.googleapis.com/css?family=Montserrat:black' rel='stylesheet'>

</head>
<body>
<style>
body {
    font-family: "Lato", sans-serif;
}


.l_text{
  
  
  top:100px;
  left:100px;
  color:white;
  position: relative;
  animation-name: example;
  animation-duration: 4s;
  animation-delay: 2s;
}

@keyframes example {
  0%   { left:100px; top:100px;}
  25%  { left:100px; top:200px;}
  50%  { left:100px; top:320px;}
  75%  { left:100px; top:407px;}
  100% {  left:100px; top:100px;}
}

.l_text h2{

  font-family:'Montserrat',black;
  font-size:40px;
  text-shadow: 1px 2px 2px red;
}

.main a{
  
  font-size:20px; 
  color:black;
}
  .form-check {

    display: inline-block;
    padding-left:30px;
    padding-bottom: 20px;
  }
   .login-form{
      margin-top:50px;
      padding-bottom:180px;
    }


.footer {
   position: fixed;
   left: 0;
   bottom: 0;
   width: 100%;
   background-color:black;
   color: white;
   text-align: center;
}

.main-head{
    height: 150px;
    background: #FFF;
   
}

.sidenav {
    height: 100vh;
    background-color: #000;
    overflow-x: hidden;
    padding-top: 20px;
    width:60%;
}


.main {
    padding: 0px 10px;
}

@media screen and (max-height: 450px) {
    .sidenav {padding-top: 15px;}
}

@media screen and (max-width: 450px) {
    .login-form{
        margin-top: 10%;
    }

    .register-form{
        margin-top: 10%;
    }
}

@media screen and (min-width: 768px){
    .main{
        margin-left: 40%; 
    }

    .sidenav{
        width: 40%;
        position: fixed;
        z-index: 1;
        top: 0;
        left: 0;
        
    }

    .register-form{
        margin-top: 20%;
    }
}




.btn-black{
    background-color: #000 !important;
    color: #fff;
}
</style>

<div class="sidenav">
         <div class="l_text">
            <h2>Register here.</h2>
     </div>
            <div class="footer">
  <p><strong>©</strong>K Shoppe Inc.</p>
</div>
    
         
      </div>
      <div class="main">
         <div class="col-md-6 col-sm-12">
            <div class="login-form">
              <h1>Feel free to join</h1>
               <form action = "../php/regengine.php" method = "post">
                  <div class="form-group">
                     <label>Name</label>
                     <input type="text" class="form-control" name="username" placeholder="Fullname">
                  </div>
                   <div class="form-group">
                     <label>Email</label>
                     <input type="email"  class="form-control" placeholder="Email" name="email">
                  </div>

                  <div class="form-group">
                     <label>Mobile</label>
                     <input type="number" class="form-control" name="num">
                  </div>
                  <div class="form-group">
                     <label>Password</label>
                     <input type="password" name="password1" class="form-control" placeholder="Password">
                  </div>
                   <div class="form-group">
                     <label>Confirm Password</label>
                     <input type="password" class="form-control" placeholder="Retype Password"  name="pass2">
                  </div>
                  
                      



                  <button type="submit" class="btn btn-black">SUBMIT</button>
                 <p> <a href="../../login.php">Already a member,Sign In </a></p> 
               </form>
            </div>
         </div>
      </div>

      </body>
      </html>

      