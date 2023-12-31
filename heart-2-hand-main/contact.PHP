<?php
// Include config file
require_once "config.php";
 
// Define variables and initialize with empty values
if (isset($_POST["username"]))
{
  $Name = $_POST["username"];
} 
if (isset($_POST["username"]))
{
  $Phone_Number = $_POST["Phone"];
} 
if (isset($_POST["username"]))
{
  $Email = $_POST["email"];
} 
if (isset($_POST["username"]))
{
  $Message = $_POST["message"];
} 

 
// Processing form data when form is submitted
if($_SERVER["REQUEST_METHOD"] == "POST"){
    // Check input errors before inserting in database
        
        // Prepare an insert statement
            $stmt = $link->prepare("INSERT INTO contact (Name,Phone_Number,Email,Message) VALUES (?, ?, ?, ?)");
            $stmt->bind_param("ssss", $param_Name, $param_Phone_Number, $param_Eamil, $param_Message);

            $param_Name = $Name;
            $param_Phone_Number = $Phone_Number; // Creates a password hash
            $param_Eamil=$Email;
            $param_Message=$Message;
            // Attempt to execute the prepared statement
            if(mysqli_stmt_execute($stmt)){
                // Redirect to login page
                header("location: contact.php");
            } else{
                echo "Oops! Something went wrong. Please try again later.";
            }

            // Close statement
            mysqli_stmt_close($stmt);
        }
    
    
    // Close connection
    mysqli_close($link);
?>

<!DOCTYPE html>
<html>
  <head>
    <!-- Basic -->
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <!-- Mobile Metas -->
    <meta
      name="viewport"
      content="width=device-width, initial-scale=1, shrink-to-fit=no"
    />
    <!-- Site Metas -->
    <meta name="keywords" content="" />
    <meta name="description" content="" />
    <meta name="author" content="" />

    <title>Medion</title>

    <!-- slider stylesheet -->
    <link
      rel="stylesheet"
      type="text/css"
      href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.1.3/assets/owl.carousel.min.css"
    />

    <!-- font awesome style -->
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"
    />

    <!-- bootstrap core css -->
    <link rel="stylesheet" type="text/css" href="css/bootstrap.css" />

    <!-- fonts style -->
    <link
      href="https://fonts.googleapis.com/css?family=Poppins:400,600,700|Roboto:400,700&display=swap"
      rel="stylesheet"
    />

    <!-- Custom styles for this template -->
    <link href="css/style.css" rel="stylesheet" />
    <!-- responsive style -->
    <link href="css/responsive.css" rel="stylesheet" />
  </head>

  <body class="sub_page">
    <div class="hero_area">
      <!-- header section strats -->
      <header class="header_section">
        <div class="container"></div>
        <div class="container-fluid">
          <nav class="navbar navbar-expand-lg custom_nav-container pt-3">
            <a class="navbar-brand" href="index.php">
              <img src="images/Heart2Hand-logos.jpeg.jpg" alt="" />
              <span> HEART2HAND </span>
            </a>
            <button
              class="navbar-toggler"
              type="button"
              data-toggle="collapse"
              data-target="#navbarSupportedContent"
              aria-controls="navbarSupportedContent"
              aria-expanded="false"
              aria-label="Toggle navigation"
            >
              <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
              <div
                class="d-flex flex-column flex-lg-row align-items-center w-100 justify-content-between"
              >
                <ul class="navbar-nav">
                  <li class="nav-item active">
                    <a class="nav-link" href="index.php"
                      >Home <span class="sr-only">(current)</span></a
                    >
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="about.html"> About </a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="medicine.php"> Donate Now </a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="buy.html"> In Stock </a>
                  </li>

                  <li class="nav-item">
                    <a class="nav-link" href=" contact.php">Contact us</a>
                  </li>
                </ul>

                <div class="login_btn-contanier ml-0 ml-lg-5">
                  <a href="">
                    <img src="images/user.png" alt="" />
                    <span> Login </span>
                  </a>
                </div>
              </div>
            </div>
          </nav>
        </div>
      </header>
      <!-- end header section -->
    </div>

    <!-- contact section -->
    <section class="contact_section layout_padding">
      <div class="container">
        <div class="row">
          <div class="custom_heading-container">
            <h2>Request A call back</h2>
          </div>
        </div>
      </div>
      <div class="container layout_padding2">
        <div class="row">
          <div class="col-md-5">
            <div class="form_contaier">
              <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
                <div class="form-group">
                  <label for="exampleInputName1">Name</label>
                  <input type="text" class="form-control" id="exampleInputName1" Name="username">
                </div>
                <div class="form-group">
                  <label for="exampleInputNumber1">Phone Number</label>
                  <input type="text" class="form-control" id="exampleInputNumber1" Name="Phone">
                </div>
  
                <div class="form-group">
                  <label for="exampleInputEmail1">Email </label>
                  <input type="email" class="form-control" id="exampleInputEmail1" Name="email">
                </div>
                <div class="form-group">
                  <label for="exampleInputMessage">Message</label>
                  <input type="text" class="form-control" id="exampleInputMessage" Name="message">
                </div>
                <button type="submit" class="">Send</button>
              </form>
            </div>
          </div>
          <div class="col-md-7">
            <div class="detail-box">
              <h3>CONTACT US</h3>
              <p>
                
              </p>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- end contact section -->

    <!-- info section -->
    <section class="info_section layout_padding2">
      <div class="container">
        <div class="row">
          <div class="col-md-3">
            <div class="info_contact">
              <h4>Contact</h4>
              <div class="box">
                <div class="img-box">
                  <img src="images/telephone-symbol-button.png" alt="" />
                </div>
                <div class="detail-box">
                  <h6>+01 123567894</h6>
                </div>
              </div>
              <div class="box">
                <div class="img-box">
                  <img src="images/email.png" alt="" />
                </div>
                <div class="detail-box">
                  <h6>demo@gmail</h6>
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-3">
            <div class="info_menu">
              <h4>Menu</h4>
              <ul class="navbar-nav">
                <li class="nav-item active">
                  <a class="nav-link" href="index.php"
                    >Home <span class="sr-only">(current)</span></a
                  >
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="about.html"> About </a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="medicine.php"> Medicine </a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="buy.html"> In Stock </a>
                </li>
              </ul>
            </div>
          </div>
          <div class="col-md-6">
            <div class="info_news">
              <h4>newsletter</h4>
              <form action="">
                <input type="text" placeholder="Enter Your email" />
                <div
                  class="d-flex justify-content-center justify-content-md-end mt-3"
                >
                  <button>Subscribe</button>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- end info section -->

    <!-- footer section -->
    <section class="container-fluid footer_section">
      <p>
        &copy; &trade; 2023 All Rights Reserved. Design by
        <a href="">Bug Smashers</a>
      </p>
    </section>
    <!-- footer section -->

    <script type="text/javascript" src="js/jquery-3.4.1.min.js"></script>
    <script type="text/javascript" src="js/bootstrap.js"></script>
    <script
      type="text/javascript"
      src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.2.1/owl.carousel.min.js"
    ></script>
    <script type="text/javascript">
      $(".owl-carousel").owlCarousel({
        loop: true,
        margin: 10,
        nav: true,
        navText: [],
        autoplay: true,
        responsive: {
          0: {
            items: 1,
          },
          600: {
            items: 2,
          },
          1000: {
            items: 4,
          },
        },
      });
    </script>
    <script type="text/javascript">
      $(".owl-2").owlCarousel({
        loop: true,
        margin: 10,
        nav: true,
        navText: [],
        autoplay: true,

        responsive: {
          0: {
            items: 1,
          },
          600: {
            items: 2,
          },
          1000: {
            items: 4,
          },
        },
      });
    </script>
  </body>
</html>
