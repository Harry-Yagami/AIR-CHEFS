




<!DOCTYPE html>
<html >
<head>
  

  <meta charset="UTF-8">
  <title>Login & Sign Up Form Concept</title>
  
  
  <link rel='stylesheet prefetch' href='https://fonts.googleapis.com/css?family=Open+Sans:400,300'>
<link rel='stylesheet prefetch' href='https://fonts.googleapis.com/icon?family=Material+Icons'>

      <link rel="stylesheet" href="stylelog.css">
<script type="text/javascript">

      function cambiar_sign_up()
      {
        document.write("hi");
      }
    </script>
  
</head>

<body>
  
  <div class="cotn_principal">
<div class="cont_centrar">

  <div class="cont_login">
<div class="cont_info_log_sign_up">
      <div class="col_md_login">
<div class="cont_ba_opcitiy">
        
        <h2>LOGIN</h2>  
  <p></p> 
  <button class="btn_login" onclick="cambiar_login()">LOGIN</button>
  </div>
  </div>
<div class="col_md_sign_up">
<div class="cont_ba_opcitiy">
  <h2>SIGN UP</h2>

  
  <p></p>
 
  <button class="btn_sign_up" onclick="cambiar_sign_up()">SIGN UP</button>

</div>
  </div>
       </div>

    
    <div class="cont_back_info">
       <div class="cont_img_back_grey">
       <img src="https://images.unsplash.com/42/U7Fc1sy5SCUDIu4tlJY3_NY_by_PhilippHenzler_philmotion.de.jpg?ixlib=rb-0.3.5&q=50&fm=jpg&crop=entropy&s=7686972873678f32efaf2cd79671673d" alt="" />
       </div>
       
    </div>
<div class="cont_forms" >
    <div class="cont_img_back_">
       <img src="https://images.unsplash.com/42/U7Fc1sy5SCUDIu4tlJY3_NY_by_PhilippHenzler_philmotion.de.jpg?ixlib=rb-0.3.5&q=50&fm=jpg&crop=entropy&s=7686972873678f32efaf2cd79671673d" alt="" />
       </div>
 
<form action="next.php" method="POST">
 <div class="cont_form_login">
<a href="#" onclick="ocultar_login_sign_up()" ><i class="material-icons">&#xE5C4;</i></a>
  
   <h2>LOGIN</h2>
 <input type="text" placeholder="Email" name="LEmailID" required="" />
<input type="password" placeholder="Password" name="LPassword" required="" />
<button class="btn_login" name="submit" >LOGIN</button>

  </div>
  
</form>


  <form action="signup.php" method="POST">
   <div class="cont_form_sign_up">
<a href="#" onclick="ocultar_login_sign_up()"><i class="material-icons">&#xE5C4;</i></a>
     <h2>SIGN UP</h2>



<input type="text" placeholder="User" name="User" required="" />
<input type="password" placeholder="Password" name="Password" required="" />
<input type="number" placeholder="Mobile number" name="mbno" required="" />
<button class="btn_sign_up">SIGN UP</button>

  </div>
</form>
    </div>
    
  </div>
 </div>
</div>
  
    <script  src="index.js"></script>
    

</body>
</html>
