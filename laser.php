<?php
include 'dbfile.php';

if(isset($_POST['email'])){
$name=$_POST['name'];
$email=$_POST['email'];
$message=$_POST['msg'];

$sql="INSERT INTO `contact`(`id`, `name`, `email`, `msg`) VALUES (null,'$name','$email','$message')";

echo $sql;

if ($conn->query($sql) === TRUE) {
  echo "1" ;
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
 <meta charset="UTF-8">
 <meta name="viewport" content="width=device-width, initial-scale=1.0">
 <title>Project</title>
 <link href="laser.css" rel="stylesheet">
 <link rel="stylesheet"  href="javahome.js">
 <link rel="stylesheet"
 href="https://unpkg.com/boxicons@latest/css/boxicons.min.css">
 <link rel="preconnect" href="https://fonts.googleapis.com">
 <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
 <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
 <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css"
  integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
 <link href="contact.css" rel="stylesheet">
 <meta name="viewport" content="width=device-widthh,initial-scale=1.0">
</head>
<body>
 

<!--home section-->
     <!--header section-->
     <header>
        <a href="#" class="logo"><span></span></a>
        <ul class="navbar">
          <!--<li><a href="#" class="active">services</a></li>-->
          <li><a href="#home" class="active">Home</a></li>
          <li><a href="#about">About</a></li>
          <li><a href="#capabilities">Capabilities</a></li>
          <!--<li><a href="#">Pricing</a></li>-->
          <li><a href="#product1">Materials</a></li>
          <li><a href="#contact">Contacts</a></li>
        </ul>
        <img src="night-mode.png" id="icon">
        
        <div class="menu-btn">
          <!--<span>INTRO</span>-->
          <div class="bx bx-menu" id="menu-icon"></div>
        </div> 
        <div class="sum">
            <i class="fa fa-shopping-cart  cart" aria-hidden="true"></i>
        </div>
        <div class="menu-btn2">
            <a href="login.html"> <span >Sing Up</span></a>
            
            <div class="bx bx-menu" id="menu-icon2">
                 </div>
        </div>
       
      </header>
      <script src="https://unpkg.com/scrollreveal"></script>

      <!--custom js file link-->
     <script src="javahome.js">
      </script>
     
          <!--home section-->
  <section class="home" id="home">
    <div class="home-img2">
      <img src="C:\Users\sagar\Downloads\20241004_104244.png">
     
      </div>
    <div class="home-text">
      <span>Shree Ganesh Enterprises</span> 
      <h1>online custom laser cutting service & enterprises..</h1>
      <p>prototyping & production laser cutting, using 450+metals,plastics,composites,rubbers,foams & woods.</p>
      <p></p>
       <div class="share">
    <!--<p>Check out my:</p>-->
    <div class="social">
  
      <a href="#"><i class='bx bxl-facebook'></i></a>
      <a href="#"><i class='bx bxl-instagram'></i></a>
      <a href="#"><i class='bx bxl-linkedin'></i></a>
      <a href="#"><i class='bx bxl-github'></i></a>
    </div>
    </div>
   
    <div class="main-btn">
      <a href="#contact" class="btn">Contacts</a>
    </div>
    </div>
    <div class="home-img">
      <img src="20240930_181802.png">
     
      </div>
      
     
  </section>
 
  
     
 <section class="bg-dark-grey introduction-secondary">
    <div  class="diagonal-background">
       </div>

       <div class="text">
        <blockquote class="blockquote">
       <p>Gangami lnd.Complex_1st Floor,Gala No.227,
        M.I.D.c.Ambad,Nashik-10.
       </p> 
        
       
        </blockquote>
        </div>
        <div class="text-2">
          <blockquote class="blockquote1">
          <p>IF  you dream it,<br>
            we can design it.
          </p>
          
         
          </blockquote>
          </div>



   <!--about section-->       
       
</section>
<section class="about" id="about">
   
<div class="home-text1">
  <span>What is laser cutting?</span> 
  <!--<h1>online custom laser cutting service & enterprises..</h1> -->
  <p>Laser cutting is a subtractive manufacturing process that uses a laser<br> beam to cut parts out of sheet material. 
    However, laser beams don’t cut or melt, but instead,</br> use their intense laser energy to vaporize material which
     prevents<br> material from catching fire or degrading.</p>
 
 

<div class="main-btn">
  <!--<a href="cv.html" class="btn">More</a>-->
</div>
</div>
<div class="home-img1">
  <img src="Capabilities_LaserHero.d8f6511a.webp">
 
  </div>
</section>


<!-- capabilities section-->
<section class="capabliti-p1" id="capabilities" >
    
    <div class="home-text2">
        <span>Our laser cutting capabilities</span> 
        <!--<h1>online custom laser cutting service & enterprises..</h1> -->
        <p> To ensure that we can provide laser-cut parts to the highest degree of quality, 
        we provide different laser-cutting technologies, including CO2 and fiber, and each technology is specially matched 
        to different materials to provide consistent results.</p>
       
        <h4>Our CO2 laser cutting capabilities</h4>
        <hr width="100%" size="3" noshade >
        <div class="text3">
            <h4>Min lead time</h4>
            <h6>Same day</h6>
            <h4>Material thickness</h4>
            <h6>0.1 - 19.1mm</h6>
            <h4>Part quantity</h4>
            <h6>1 - 100,000 </h6>
         </div>

         <div class="text4">
            <h4>Min lead time</h4>
            <h6>Same day</h6>
            <h4>Material thickness</h4>
            <h6>0.1 - 19.1mm</h6>
            <h4>Part quantity</h4>
            <h6>1 - 100,000 </h6>
         </div>

         <div class="text3">
            <h4>Min lead time</h4>
            <h6>Same day</h6>
            <h4>Material thickness</h4>
            <h6>0.1 - 19.1mm</h6>
            <h4>Part quantity</h4>
            <h6>1 - 100,000 </h6>
         </div>

         <div class="text3">
            <h4>Min lead time</h4>
            <h6>Same day</h6>
            <h4>Material thickness</h4>
            <h6>0.1 - 19.1mm</h6>
            <h4>Part quantity</h4>
            <h6>1 - 100,000 </h6>
         </div>
      </div>
      
</section>
 

  <!--mater section-->
  <section id="product1" class="section-p1">
    <h2>Materials</h2>
    <!--<p>Metal Sheet</p>-->
    <div class="pro-container">
        <div class="pro">
            <img src="2.png">
            <div class="des">
                <span>988 Zinc</span>
                <div class="repesh">
                    <i class="fa fa-inr ekdeep" aria-hidden="true"></i>
                     <div class="r1"> 1200</div>
                   </div>
                <div class="ek1">
                    <div class="ek">0.50mm</div>
                    <div class="ek">0.10mm</div>
                    <div class="ek">0.90mm</div>
                    <div class="ek">0.99mm</div>
                </div>
                <i class="fa fa-cart-plus  cart" aria-hidden="true"></i>
            </div>
            
        </div>
        <div class="pro">
            <img src="3.png">
            <div class="des">
                <span>988 Zinc</span>
                <div class="repesh">
                    <i class="fa fa-inr ekdeep" aria-hidden="true"></i>
                     <div class="r1"> 1200</div>
                   </div>
                <div class="ek1">
                    <div class="ek">0.50mm</div>
                    <div class="ek">0.10mm</div>
                    <div class="ek">0.90mm</div>
                    <div class="ek">0.99mm</div>
                </div>
                <i class="fa fa-cart-plus cart" aria-hidden="true"></i>
            </div>
            
        </div>     <div class="pro">
            <img src="2.png">
            <div class="des">
                <span>988 Zinc</span>
                <div class="repesh">
                    <i class="fa fa-inr ekdeep" aria-hidden="true"></i>
                     <div class="r1"> 1200</div>
                   </div>
                <div class="ek1">
                    <div class="ek">0.50mm</div>
                    <div class="ek">0.10mm</div>
                    <div class="ek">0.90mm</div>
                    <div class="ek">0.99mm</div>
                </div>
                <i class="fa fa-cart-plus  cart" aria-hidden="true"></i>
            </div>
            
        </div>     <div class="pro">
            <img src="5.png">
            <div class="des">
                <span>988 Zinc</span>
                <div class="repesh">
                    <i class="fa fa-inr ekdeep" aria-hidden="true"></i>
                     <div class="r1"> 1200</div>
                   </div>
                <div class="ek1">
                    <div class="ek">0.50mm</div>
                    <div class="ek">0.10mm</div>
                    <div class="ek">0.90mm</div>
                    <div class="ek">0.99mm</div>
                </div>
                <i class="fa fa-cart-plus  cart" aria-hidden="true"></i>
            </div>
            
        </div>     <div class="pro">
            <img src="6.png">
            <div class="des">
                <span>988 Zinc</span>
                <div class="repesh">
                    <i class="fa fa-inr ekdeep" aria-hidden="true"></i>
                     <div class="r1"> 1200</div>
                   </div>
                <div class="ek1">
                    <div class="ek">0.50mm</div>
                    <div class="ek">0.10mm</div>
                    <div class="ek">0.90mm</div>
                    <div class="ek">0.99mm</div>
                </div>
                <i class="fa fa-cart-plus  cart" aria-hidden="true"></i>
            </div>
            
        </div>     <div class="pro">
            <img src="2.png">
            <div class="des">
                <span>988 Zinc</span>
                <div class="repesh">
                    <i class="fa fa-inr ekdeep" aria-hidden="true"></i>
                     <div class="r1"> 1200</div>
                   </div>
                <div class="ek1">
                    <div class="ek">0.50mm</div>
                    <div class="ek">0.10mm</div>
                    <div class="ek">0.90mm</div>
                    <div class="ek">0.99mm</div>
                </div>
                <i class="fa fa-cart-plus  cart" aria-hidden="true"></i>
            </div>
            
        </div>     <div class="pro">
            <img src="3.png">
            <div class="des">
                <span>988 Zinc</span>
                <div class="repesh">
                    <i class="fa fa-inr ekdeep" aria-hidden="true"></i>
                     <div class="r1"> 1200</div>
                   </div>
                <div class="ek1">
                    <div class="ek">0.50mm</div>
                    <div class="ek">0.10mm</div>
                    <div class="ek">0.90mm</div>
                    <div class="ek">0.99mm</div>
                </div>
                <i class="fa fa-cart-plus  cart" aria-hidden="true"></i>
            </div>
            
        </div>     <div class="pro">
            <img src="6.png">
            <div class="des">
                <span>988 Zinc</span>
                <div class="repesh">
                    <i class="fa fa-inr ekdeep" aria-hidden="true"></i>
                     <div class="r1"> 1200</div>
                   </div>
                <div class="ek1">
                    <div class="ek">0.50mm</div>
                    <div class="ek">0.10mm</div>
                    <div class="ek">0.90mm</div>
                    <div class="ek">0.99mm</div>
                </div>
                <i class="fa fa-cart-plus  cart" aria-hidden="true"></i>
            </div>

        </div>     <div class="pro">
            <img src="6.png">
            <div class="des">
                <span>988 Zinc</span>
               <div class="repesh">
                <i class="fa fa-inr ekdeep" aria-hidden="true"></i>
                 <div class="r1"> 1200</div>
               </div>
                <div class="ek1">
                    <div class="ek">0.50mm</div>
                    <div class="ek">0.10mm</div>
                    <div class="ek">0.90mm</div>
                    <div class="ek">0.99mm</div>
                </div>
                <i class="fa fa-cart-plus  cart" aria-hidden="true"></i>
            </div>

        </div>     <div class="pro">
            <img src="2.png">
            <div class="des">
                <span>988 Zinc</span>
                <div class="repesh">
                    <i class="fa fa-inr ekdeep" aria-hidden="true"></i>
                     <div class="r1"> 1200</div>
                   </div>
                <div class="ek1">
                    <div class="ek">0.50mm</div>
                    <div class="ek">0.10mm</div>
                    <div class="ek">0.90mm</div>
                    <div class="ek">0.99mm</div>
                </div>
                <i class="fa fa-cart-plus  cart" aria-hidden="true"></i>
            </div>
           
        </div>     <div class="pro">
            <img src="2.png">
            <div class="des">
                <span>988 Zinc</span>
                <div class="repesh">
                    <i class="fa fa-inr ekdeep" aria-hidden="true"></i>
                     <div class="r1"> 1200</div>
                   </div>
                <div class="ek1">
                    <div class="ek">0.50mm</div>
                    <div class="ek">0.10mm</div>
                    <div class="ek">0.90mm</div>
                    <div class="ek">0.99mm</div>
                </div>
                <i class="fa fa-cart-plus  cart" aria-hidden="true"></i>
            </div>

        </div>     <div class="pro">
            <img src="2.png">
            <div class="des">
                <span>988 Zinc</span>
                <div class="repesh">
                    <i class="fa fa-inr ekdeep" aria-hidden="true"></i>
                     <div class="r1"> 1200</div>
                   </div>
                <div class="ek1">
                    <div class="ek">0.50mm</div>
                    <div class="ek">0.10mm</div>
                    <div class="ek">0.90mm</div>
                    <div class="ek">0.99mm</div>
                </div>
                <i class="fa fa-cart-plus  cart" aria-hidden="true"></i>
            </div>
            
            
        </div>
        
    </div>
 </section>
<!--contact section-->
 <section class="contact" id="contact">
  <div class="content">
      <h2>Contact Us</h2>
    <p> Laser cutting is a subtractive manufacturing process that uses a laser<br> beam to cut parts out of sheet material. 
      However, laser beams don’t cut or melt, but instead,.</p>
  </div>
  <div class="container">
      <div class="contactInfo">
          <div class="box">
              <div class="icon"><b></b><i class="fa-solid fa-location-dot"></i>
              </div>
              <div class="text">
                  <h4>Address</h4>
                  <p>424513 nashik,<br> M.I.D.c.Ambad,Nashik-10<br></p>
              </div>
          </div> 
          <div class="box">
              <div class="icon"><b></b><i class="fa-solid fa-phone"></i></div>
              <div class="text">
                  <h4>Phone</h4>
                  <p>000-000-0000</p>
               
              </div>
          </div>
          <div class="box">
              <div class="icon"><b></b><i class="fa-solid fa-envelope"></i> </div>
              <div class="text">
                  <h4>Email</h4>
                  <p>abcdefg@gmail.com</p>
              </div>
          </div>
           <div class="txt">
          <h3>Connect with us</h3></div>
          <ul class="sci">
              <li><a href=""><i class="fa-brands fa-facebook-f"></i></a></li>
              <li><a href=""><i class="fa-brands fa-instagram"></i></a></li>
              <li><a href=""><i class="fa-brands fa-linkedin-in"></i></a></li>
              <li><a href=""><i class="fa-brands fa-whatsapp"></i></a></li>
          </ul>

      </div>
      <div class="contactForm">
          <form action="" method="POST">
              <h2>Send Message</h2>
              <div class="inputBox">
                  <input type="text" name="name" required="required">
                  <span>Full Name</span> 
              </div>
              <div class="inputBox">
                  <input type="email" name="email" required="required">
                  <span>Email</span> 
              </div>
              <div class="inputBox">
                  <input type="text" name="msg" required="required">
                  <!--<textarea required="required"></textarea>-->
                  <span>Type your Message</span> 
              </div>
              <div class="inputBox">
                  <input type="submit" value="send">
              </div>
          </form>
      </div>
  </div> 
</section>


<script>
   var icon = document.getElementById("icon");

    icon.onclick= function(){
      document.body.classList.toggle("dark-theme");
    
      if(document.body.classList.contains("dark-theme")){
      icon.src = "sum2.png";

     }
     else{
      icon.src = "night-mode.png";
     }
    } 

</script>

    

   
</body>

</html>