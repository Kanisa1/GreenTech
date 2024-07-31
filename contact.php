<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <title>Document</title>
    <link rel="stylesheet" href="nav.css">
    <link rel="stylesheet" href="footer.css">
    <link rel="stylesheet" href="contact.css">
    
</head>
<body>
<header>
    <nav>
        <ul>
            <div class="left">
                <li><a href="Index.php">Home</a></li>
                <li><a href="Products.php">Products</a></li>
                <li><a href="Testimonials.php">Testimonials</a></li>
            </div>
            <li class="center"><img src="logo.png" class="logo" alt="Logo"></li>
            <div class="right">
                <li><a href="register.php"><button class="butt">register</button> </a></li>
                
            </div>
        </ul>
    </nav>
</header>

<body>

    <div class="kt">

<h1 style="text-decoration: overline; text-align:center; color:green;">Meet Our Innovators</h1>
<div class="mai">
    <img src="Kanisa.jpg" style="width: 200px; height:200px;">
    <h5>Kanisa Rebecca</h5>
    <p>Lead Engineer</p>
</div>

<div class="mai">
    <img src="Kanisa.jpg" style="width: 200px; height:200px;">
    <h5>Kanisa Rebecca</h5>
    <p>Lead Engineer</p>
</div>


<div class="mai">
    <img src="Kanisa.jpg" style="width: 200px; height:200px;">
    <h5>Kanisa Rebecca</h5>
    <p>Lead Engineer</p>
</div>

    </div>

    <div class="tok">
        <h1>Get in Touch</h1>

        <div class="rou">
            <i class='far fa-clock' style='font-size:48px;color:green'></i> Office Hours
            <p>Monday-Friday<br>

                9:00 am to 6:00 pm</p>
        </div>

        <div class="rou">
            <i class='fas fa-map-marker-alt' style='font-size:48px;color:green'></i>Main Office

            <p>123 GreenTech Blvd<br>

                Eco City, EC 12345</p>
        </div>


        <div class="rou">
            <i class='fas fa-phone-square-alt' style='font-size:48px;color:green'></i> Contact Us

            <p>+250798654575<br>

                GreenTech@gmail.com</p>
        </div>
    </div>


    <div class="tok">

        <div class="container">
            <div class="form-wrapper">
                <h1>Book Office Hours</h1>
                <form action="submit_booking.php" method="post">
                    <label for="name">Name:</label>
                    <input type="text" id="name" name="name" required>
                    
                    <label for="email">Email:</label>
                    <input type="email" id="email" name="email" required>
                    
                    <label for="date">Date:</label>
                    <input type="date" id="date" name="date" required>
                    
                    <label for="time">Time:</label>
                    <input type="time" id="time" name="time" required>
                    
                    <label for="comments">Comments:</label>
                    <textarea id="comments" name="comments" rows="4" cols="50"></textarea>
                    
                    <input type="submit" value="Book Now">
                </form>
            </div>
        </div>
    </div>

   

</body>




<footer>
    <div class="std">
        <img src="logo.png" style="width: 100px; height: 100px; margin: 20px;">
    </div>
    <div class="std" style="margin-top: 45px;">
        <a href="#"><i style="font-size:35px; color:black; margin:10px;" class="fa fa-facebook"></i></a>
        <a href="#"><i style="font-size:35px; color:black; margin:10px;" class="fa fa-instagram"></i></a>
        <a href="#"><i style="font-size:35px; color:black; margin:10px;" class="fa fa-linkedin"></i></a>
        <a href="#"><i style="font-size:35px; color:black; margin:10px;" class="fa fa-twitter"></i></a>
        <a href="#"><i style="font-size:35px; color:black; margin:10px;" class="fa fa-whatsapp"></i></a>
    </div>
    <div>
        <hr>
    </div>
    <div class="fot">
        <h1>About GreenTech</h1>
      <p>creating a greener planet with cutting-edge<br> technology that balances progress and sustainability.</p>
    </div>
    <div class="fot">
        <h1>Quick links</h1>
        <a href="Home.html">Home</a>
        <a href="Products.html">Products</a>
        <a href="Testimonials.html">Testimonials</a>
    </div>
    <div class="fot">
        <h1>Contact</h1>
        <i style="font-size:34px" class="fa fa-map-marker"></i> GreenTech is a NGO found in Rwanda in 2016 under section 10
        <p>Email address: GreenTech@gmail.com</p>
        <p>Tel: +250789654575</p>
    </div>
    <p>2024 @All rights reserved.<br> Donii edition!!!!</p>  
</footer>
</html>