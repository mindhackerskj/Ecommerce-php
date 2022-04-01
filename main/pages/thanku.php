<html>
<head>
<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
</head>
<body>
<style>
body {
    font-family: "Lato", sans-serif;
}


.main-head{

    height: 150px;
    background: #FFF;
   
}

footer {
   position: fixed;
   left: 0;
   bottom: 0;
   width: 100%;
   background-color:black;
   color: white;
   text-align: center;
}
.sidenav {

    height: 100%;
    background-color: #000;
    overflow-x: hidden;
    padding-top: 20px;
    width:60%;
}


.ltext{
  
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

    .login-form{


        margin-top: 50%;
    }

    .register-form{
        margin-top: 20%;
    }
}


.login-main-text{
    margin-top: 20%;
    padding: 60px;
    color: #fff;
}

.login-main-text h2{
    font-weight: 300;
}

.btn-black{
    background-color: #000 !important;
    color: #fff;
}
</style>

<div class="sidenav">
         <div class="login-main-text">
            <h2>Registered sucessfully</h2>
            <p>Login end Enjoy</p>
         </div>
      </div>
      <div class="main">
         <div class="col-md-8 col-sm-12">
            <div class="login-form">
               <form action = "../php/loginengine.php" method = "post">
                  <div class="form-group">
                     <label>User Name</label>
                     <input type="text" class="form-control" name="email" placeholder="Email">
                  </div>
                  <div class="form-group">
                     <label>Password</label>
                     <input type="password" name="password" class="form-control" placeholder="Password">
                  </div>
                  <button type="submit" class="btn btn-black">Sign In</button>
                  
               </form>
            </div>
         </div>
      </div>

      </body>
      </html>
