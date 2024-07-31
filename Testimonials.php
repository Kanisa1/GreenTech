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
    <link rel="stylesheet" href="may.css">
    
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
                <li><a href=register.php><button class="butt">register</button> </a></li>
            </div>
        </ul>
    </nav>
</header>

<body>

<div class="may">
<h1> What Our Customers Say</h1>
    <p>Real feedback from those who have experienced the best in green technology.</p>


    <div class="dt">
        <i class="fas fa-leaf" style="font-size:48px;color:green"></i> Eco-Friendly Solutions
        <p>Pioneering sustainable technologies for a greener future.</p>

    </div>

<div class="dt">
    <i class='fas fa-cogs' style='font-size:48px;color:green'></i> Innovative Products
    <p>Leading the way with cutting-edge green tech innovations.</p>

</div>


<div class="dt">
    <i class='fas fa-frown' style='font-size:48px;color:green'></i> Customer Satisfaction
    <p>Committed to exceeding customer expectations with every product.</p>

</div>

</div>

<div style="font-size: 25px;">
<h1>
    Share Your Experience
</h1>
<p>We value your feedback. Help us continue to innovate by sharing your thoughts on our green technologies</p>

</div>

<form action="submit_feedback.php" method="post">
    <label for="feedback">Your Feedback:</label><br>
    <textarea id="feedback" name="feedback" rows="4" cols="50" required value="feedback"></textarea><br><br>
    <input type="submit" value="Submit">

</form>


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