<!DOCTYPE html>
<html>

<head>
    <meta name="veiwport" content="with=device-width,initial-scale=1.0">
    <title>Food Ordering System</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@5.15.4/css/fontawesome.min.css">  
    <link rel="stylesheet" href="C:\xampp\htdocs\com\fontawesome-free-5.15.4-web\fontawesome-free-5.15.4-web\css\all.css">
    <link rel="stylesheet" href="fontawesome-free-5.15.4-web/fontawesome-free-5.15.4-web/css/all.css">
    <link rel="stylesheet" href="css/styles.css">

</head>

<body>
    <section class="sub-header">
        <nav>
            <a href="index.html"><img src="image/logo2.png" alt=""></a>
            <div class="nav-links" id="navLinks">
                <i class="fa fa-window-close" onclick="hideMenu()"></i>
                <ul>
                    <li> <a href="index.php">HOME</a></li>
                </ul>
            </div>
            <i class="fa fa-bars" onclick="showMenu()"></i>
        </nav>
     <h1>Thank you for Payment </h1>


    </section>
    
    <!------About us content-------> 
 <section class="about-us">
     <div class="row">
         <div class="about-col">
             <p>    
I wanted to take a moment to personally thank you for placing an order on our website. Your business is important to us, and we are thrilled to have the opportunity to provide you with our delicious food.

We take pride in offering the highest quality ingredients and preparing our meals with care, and we hope that you will enjoy your order. Your satisfaction is our top priority, and we appreciate your trust in us to provide you with a delicious and satisfying meal.

Thank you again for choosing our restaurant. We look forward to serving you again in the near future.</p>
             <a href="index.php" class="hero-btn red-btn">EXPLORE MORE</a>
         </div>
         <div class="about-col">
             <img src="images/thnk.jpg">
         </div>
     </div>
    </section>

 
    
    
    
    
    
    
    
     <!------Footer------->
   

<footer>
        <div class="container">
            <div class="footer-wrapper d-flex">
                <div class="footer-about">
                    <h4>KGCE</h4>
                    <p>
Don't waste time on hold - order your favorite meal with just a few clicks using our easy online system.
Craving something specific? Our customizable menu options make it easy to get exactly what you want.
                    </p>
                </div>
                <div class="footer-col">
                    <h5>Useful links</h5>
                    <ul>
                        <li><a href="#">Home</a></li>
                        <li><a href="#">about us</a></li>
                        <li><a href="#">services</a></li>
                        <li><a href="#">Get Application</a></li>
                    </ul>
                </div>
                <div class="footer-col">
                    <h5>Legal</h5>
                    <ul>
                        <li><a href="#">Privacy Policy</a></li>
                        <li><a href="#">terms & Conditions</a></li>
                        <li><a href="#">Help</a></li>
                    </ul>
                </div>
                <div class="footer-col">
                    <h5>Contact Us</h5>
                    <ul>
                        <li><a href="#">+91 7264906060</a></li>
                        <li><a href="principal@kgce.edu.in ">Email</a></li>
                        <li><a href="#">Cashback</a></li>
                    </ul>
                </div>
                <div class="footer-col">
                    <h5>Social media </h5>
                    <ul>
                        <li><a href="https://www.facebook.com/kgce.official/about/">facebook</a></li>
                        <li><a href="https://kgce.edu.in/">twitter</a></li>
                        <li><a href="https://www.instagram.com/kgce.official/">instagram</a></li>
                        <li><a href="https://www.youtube.com/@kgrdcprikarjat8999">Youtube</a></li>
                    </ul>
                </div>
            </div>
            <div class="copyright">
                <p>Copyright &copy; 2023 <a href="https://kgce.edu.in/">KGCE</a> All rights reserved</p>
                <br><br>
            </div>
        </div>
    </footer>
 
 <script>
 	$('.datepicker').datepicker({
 		format:"yyyy-mm-dd"
 	})
 	 window.start_load = function(){
    $('body').prepend('<di id="preloader2"></di>')
  }
  window.end_load = function(){
    $('#preloader2').fadeOut('fast', function() {
        $(this).remove();
      })
  }

 	window.uni_modal = function($title = '' , $url=''){
    start_load()
    $.ajax({
        url:$url,
        error:err=>{
            console.log()
            alert("An error occured")
        },
        success:function(resp){
            if(resp){
                $('#uni_modal .modal-title').html($title)
                $('#uni_modal .modal-body').html(resp)
                $('#uni_modal').modal('show')
                end_load()
            }
        }
    })
}
  window.uni_modal_right = function($title = '' , $url=''){
    start_load()
    $.ajax({
        url:$url,
        error:err=>{
            console.log()
            alert("An error occured")
        },
        success:function(resp){
            if(resp){
                $('#uni_modal_right .modal-title').html($title)
                $('#uni_modal_right .modal-body').html(resp)
                $('#uni_modal_right').modal('show')
                end_load()
            }
        }
    })
}
window.alert_toast= function($msg = 'TEST',$bg = 'success'){
      $('#alert_toast').removeClass('bg-success')
      $('#alert_toast').removeClass('bg-danger')
      $('#alert_toast').removeClass('bg-info')
      $('#alert_toast').removeClass('bg-warning')

    if($bg == 'success')
      $('#alert_toast').addClass('bg-success')
    if($bg == 'danger')
      $('#alert_toast').addClass('bg-danger')
    if($bg == 'info')
      $('#alert_toast').addClass('bg-info')
    if($bg == 'warning')
      $('#alert_toast').addClass('bg-warning')
    $('#alert_toast .toast-body').html($msg)
    $('#alert_toast').toast({delay:3000}).toast('show');
  }
  window.load_cart = function(){
    $.ajax({
      url:'admin/ajax.php?action=get_cart_count',
      success:function(resp){
        if(resp > -1){
          resp = resp > 0 ? resp : 0;
          $('.item_count').html(resp)
        }
      }
    })
  }
  $('#login_now').click(function(){
    uni_modal("LOGIN",'login.php')
  })
  $(document).ready(function(){
    load_cart()
  })
 </script>
 <!-- Bootstrap core JS-->
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.bundle.min.js"></script>
        <!-- Third party plugin JS-->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.4.1/jquery.easing.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.1.0/jquery.magnific-popup.min.js"></script>
        <!-- Core theme JS-->
        <script src="js/scripts.js"></script>
     
     
     
     

    <!------javascripts for------->
    <script>
        var navLinks = document.getElementById("navLinks");

        function showMenu() {
            navLinks.style.right = "0";
        }

        function hideMenu() {
            navLinks.style.right = "-200px";
        }

    </script>




</body>

</html>



<?php
if(isset($_POST['submit'])){
    $name = $_POST ['name'];
    $email = $_POST ['email'];
    $cet = $_POST ['cet'];
    $markstwelfth= $_POST ['markstwelfth'];
    $marks_10th  = $_POST ['marks_10th'];
    $message = $_POST ['message'];
    
    $host = 'localhost';
    $user = 'root';
    $pass =  '';
    $dbname = 'com';

    $conn = mysqli_connect($host, $user, $pass, $dbname);

    $sql ="INSERT INTO adm(name,email,cet,markstwelfth,marks_10th,message) values ('$name','$email','$cet','$markstwelfth','$marks_10th','$message')";
    mysqli_query($conn,$sql);
             
}

?>
