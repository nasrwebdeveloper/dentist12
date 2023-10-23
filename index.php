
<?php


$conn = mysqli_connect('localhost','root','','contact_db') or die('connection failed');

if(isset($_POST['submit'])){

    $name =mysqli_real_escape_string($conn, $_POST['name']);
    $email =mysqli_real_escape_string($conn, $_POST['email']);
    $number =$_POST['number'];
    $date = $_POST['date'];



$insert = mysqli_query($conn, "INSERT INTO `contact_form` (name,email, number, date) VALUES('$name','$email','$number','$date')") or die('query failed');

if($insert){
    $message[] = 'appointment made successfully!';
}else{
    $message[]= 'appointment failed';
}


}

?>






<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dentist Website</title>
    <!--custom file link-->
    <link rel="stylesheet" href="style.css">
    <!--font awesome cdn link-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
    <!--bootstrap cdn link-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/4.6.1/css/bootstrap.min.css">
    
    
</head>
<body>
    <!--Header section starts-->

    <header class="header fixed-top">

        <div class="container">

            <div class="row align-items-center  justify-content-between">

                <a href="#home" class="logo">Dental <span>Care.</span></a>

                <nav class="nav">
                    <a href="#home">Home</a>
                    <a href="#about">About</a>
                    <a href="#services">Services</a>
                    <a href="#reviews">Reviews</a>
                    <a href="#contact">Contact us</a>
                </nav>

                <a href="#contact" class="link-btn"> Make an appointment</a>

                <div id="menu-btn" class="fas fa-bars"></div>
            </div>
        </div>

    </header>
    <!--Header section ends-->

    <!-- Home section starts-->

    <section class="home" id="home">

        <div class="container">

            <div class="row min-vh-100 align-items-center">
                <div class="content text-center  text-md-left">
                    <h3>Smiles are
                         the sunshine of life.</h3>
                    <p>Let your smile change the world, but don't let the world change your smile.</p>
                    <a href="#contact" class="link-btn">Make An Appointment</a>
                </div>

            </div>
        </div>
    </section>
    <!-- Home section ends-->



    <!-- about section starts-->

<section class="about" id="about">

    <div class="container">

        <div class="row align.items-center">

            <div class="col-md-6 image">
                <img src="img/about.jpg" class="w-100 mb-5 mb-md-0">
            </div>

            <div class="col-md-6 content">
            <span>About Us</span>
            <h3>Visiting the dentist keeps your smile healthy and your confidence shining.</h3>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Assumenda laboriosam nesciunt quo adipisci dolores quidem tenetur voluptate. Odio perferendis obcaecati ut cupiditate reiciendis quo recusandae, molestiae voluptatum dolore, a eveniet!</p>
            <a href="#contact" class="link-btn"> Make An Appointment</a>
            </div>

        </div>
    </div>
</section>



    <!-- about section ends-->

    <!--services section starts-->

    <section class="services" id="services">

        <h1 class="heading">Our Services</h1>
        
        <div class="box-container container">

        <div class="box">
            <img src="img/icons8-teeth-48.png" alt="">
            <h3>Alignment specialist</h3>
            <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Libero hic, repellendus officia explicabo unde ducimus fugit dicta cupiditate sapiente optio, laudantium minima facere voluptatem ex? Perferendis nisi maiores repellendus laborum.</p>

        </div>


        <div class="box">
            <img src="img/icons8-teeth-48.png" alt="">
            <h3>Cosmetic dentistry</h3>
            <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Libero hic, repellendus officia explicabo unde ducimus fugit dicta cupiditate sapiente optio, laudantium minima facere voluptatem ex? Perferendis nisi maiores repellendus laborum.</p>
            
        </div>


        <div class="box">
            <img src="img/icons8-teeth-48.png" alt="">
            <h3>Oral hygiene Experts</h3>
            <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Libero hic, repellendus officia explicabo unde ducimus fugit dicta cupiditate sapiente optio, laudantium minima facere voluptatem ex? Perferendis nisi maiores repellendus laborum.</p>
            
        </div>



        <div class="box">
            <img src="img/icons8-teeth-48.png" alt="">
            <h3>Root canal specialist</h3>
            <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Libero hic, repellendus officia explicabo unde ducimus fugit dicta cupiditate sapiente optio, laudantium minima facere voluptatem ex? Perferendis nisi maiores repellendus laborum.</p>
            
        </div>


        <div class="box">
            <img src="img/icons8-teeth-48.png" alt="">
            <h3>live debtal advisiory</h3>
            <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Libero hic, repellendus officia explicabo unde ducimus fugit dicta cupiditate sapiente optio, laudantium minima facere voluptatem ex? Perferendis nisi maiores repellendus laborum.</p>
            
        </div>


        <div class="box">
            <img src="img/icons8-teeth-48.png" alt="">
            <h3>Cavity inspection</h3>
            <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Libero hic, repellendus officia explicabo unde ducimus fugit dicta cupiditate sapiente optio, laudantium minima facere voluptatem ex? Perferendis nisi maiores repellendus laborum.</p>
            
        </div>

    </div>
    </section>




     <!--services section ends-->

    <!--process section starts-->

<section class="process">

    <h1 class="heading"> Work Proccess</h1>

    <div class="box-container container">

        <div class="box">
            <img src="img/download.jpeg" alt="">
            <h3>Dentists: Making smiles sparkle.</h3>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsum, fugit dolor! Illum laboriosam rerum nulla harum possimus quis, omnis blanditiis? Incidunt itaque dolorem repellendus eaque natus animi eum facere suscipit.</p>

        </div>

        <div class="box">
            <img src="img/download.jpeg" alt="">
            <h3>Dentists: Making smiles sparkle.</h3>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsum, fugit dolor! Illum laboriosam rerum nulla harum possimus quis, omnis blanditiis? Incidunt itaque dolorem repellendus eaque natus animi eum facere suscipit.</p>
            
        </div>

        <div class="box">
            <img src="img/download.jpeg" alt="">
            <h3>Dentists: Making smiles sparkle.</h3>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsum, fugit dolor! Illum laboriosam rerum nulla harum possimus quis, omnis blanditiis? Incidunt itaque dolorem repellendus eaque natus animi eum facere suscipit.</p>
            
        </div>


    </div>
</section>






    <!--process section ends-->

    <!--reviews section starts-->

    <section class="reviews" id="reviews">

        <h1 class="heading"> Satisfied Clients</h1>

        <div class="box-container container">

            <div class="box">
                <img src="img/dentist-428649_640.jpg" alt="">
                <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Impedit exercitationem totam incidunt hic iste nesciunt expedita nihil atque vero? Perferendis laudantium, eos necessitatibus asperiores totam delectus ratione explicabo voluptatem dolorum.</p>
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star-half-alt"></i>
                </div>
                <h3>12345</h3>
                <span>Satisfied Clients</span>
            </div>


            <div class="box">
                <img src="img/dentist-428649_640.jpg" alt="">
                <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Impedit exercitationem totam incidunt hic iste nesciunt expedita nihil atque vero? Perferendis laudantium, eos necessitatibus asperiores totam delectus ratione explicabo voluptatem dolorum.</p>
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star-half-alt"></i>
                </div>
                <h3>12345</h3>
                <span>Satisfied Clients</span>
            </div>


            <div class="box">
                <img src="img/dentist-428649_640.jpg" alt="">
                <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Impedit exercitationem totam incidunt hic iste nesciunt expedita nihil atque vero? Perferendis laudantium, eos necessitatibus asperiores totam delectus ratione explicabo voluptatem dolorum.</p>
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star-half-alt"></i>
                </div>
                <h3>12345</h3>
                <span>Satisfied Clients</span>
            </div>
        </div>
    </section>

    <!--reviews section ends-->

<!-- contact section starts-->

<section class="contact" id="contact">

    <h1 class="heading">Make An Appointment</h1>

    <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">

        <?php
        if(isset($message)){
            foreach($message as $message){
                echo '<p class="message">'.$message.'</p>';
            }
        }
        ?>

        
        <span>Your name: </span>
        <input type="text" name="name" placeholder="enter your name" class="box">
        <span>Your email: </span>
        <input type="email" name="email" placeholder="enter your email" class="box" required>
        <span>Your number: </span>
        <input type="number" name="number" placeholder="enter your number" class="box">
        <span>Appointment date: </span>
        <input type="datetime-local" name="date" class="box" required>

        <input type="submit" value="Make An Appointment" name="submit" class="link-btn">



    </form>
</section>



<!-- contact section ends-->

<!-- footer section starts-->

<section class="footer">

<div class="box-container container">

<div class="box">
    <i class="fas fa-phone"></i>
    <h3>phone number</h3>
    <p>+123-456-789</p>
    <p>+000-222-9999</p>
</div>

<div class="box">
    <i class="fas fa-map-marker-alt"></i>
    <h3>Our Asdress</h3>
    <p>lebanon - Canada</p>

</div>

<div class="box">
    <i class="fas fa-clock"></i>
    <h3>opening hours</h3>
    <p>00:07am  to 10:00pm</p>

</div>

<div class="box">
    <i class="fas fa-envelope"></i>
    <h3>email address</h3>
    <p>learnWithNasrallah@gmail.com</p>
    <p>+000-222-9999</p>
</div>


</div>


<div class="credit"> Copyright &copy; 2019 <span>LearnWithNasrallah</span></div>

</section>



<!-- footer section ends-->























    <!--custom js link-->
    <script src="script.js"></script>
</body>
</html>