
<!doctype html>
<html lang="en">

<head>
    <!-- Google tag (gtag.js) -->
<script async src="https://www.googletagmanager.com/gtag/js?id=G-2T5HTMDK95"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'G-2T5HTMDK95');
</script>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="description" content="FSmith Motors is a next-gen mobility company, with technology at its roots.
    Smith Motors is heralding a new generation of top quality high performance Electric mobility equipments.">
    <meta name="keywords" content="contact, reach us, ahmedabad, smith motors, electric trolley, electric equpment, electric vehical, electric">
    <meta name="author" content="Augen">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="shortcut icon" href="img/favicon.png" type="image/x-icon">
    <title>Smith Motors | Contact</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="vendors/bootstrap-selector/css/bootstrap-select.min.css">
    <!--icon font css-->
    <link rel="stylesheet" href="vendors/themify-icon/themify-icons.css">
    <link rel="stylesheet" href="vendors/flaticon/flaticon.css">
    <link rel="stylesheet" href="vendors/animation/animate.css">
    <link rel="stylesheet" href="vendors/owl-carousel/assets/owl.carousel.min.css">
    <link rel="stylesheet" href="vendors/nice-select/nice-select.css">
    <link rel="stylesheet" href="vendors/elagent/style.css">
    <link rel="stylesheet" href="vendors/magnify-pop/magnific-popup.css">
    <link rel="stylesheet" href="vendors/scroll/jquery.mCustomScrollbar.min.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/responsive.css">
    <link rel="stylesheet" href="backupcss/style.css">
</head>

<body>
    <?php include 'head.php';?>



    <section class="breadcrumb_area">
        <img class="breadcrumb_shap" src="img/breadcrumb/banner_bg.png" alt="">
        <div class="container">
            <div class="breadcrumb_content text-center">
                <h1 class="f_p f_700 f_size_50 w_color l_height50 mb_20">Contact Us</h1>
                <p class="f_400 w_color f_size_16 l_height26">If you want to buy one of our equipment for your Industry <br>or have any other query feel free to reach out</p>
            </div>
        </div>
    </section>

    <section class="contact_info_area sec_pad bg_color">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 pr-0">
                    <div class="contact_info_item">
                        <h6 class="f_p f_size_20 t_color3 f_500 mb_20">Office Address</h6>
                        <p class="f_400 f_size_15">210, Sindhu Bhavan Marg, PRL Colony, Thaltej, Ahmedabad, Gujarat 380054</p>
                    </div>
                    <div class="contact_info_item">
                        <h6 class="f_p f_size_20 t_color3 f_500 mb_20">Contact Info</h6>
                        <p class="f_400 f_size_15"><span class="f_400 t_color3">Phone:</span> <a href="tel:+919662044474">(+91) 96620 44474</a></p>
                        <p class="f_400 f_size_15"><span class="f_400 t_color3">Email:</span> <a href="mailto:info@smithmotors.in">info@smithmotors.in</a></p>
                    </div>
                </div>
                <div class="col-lg-8 offset-lg-1">
                    <div class="contact_form">
                        <form action="contact_process.php" class="contact_form_box" method="post" id="contactForm" novalidate="novalidate">
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="form-group text_box">
                                        <input type="text" id="name" name="name" placeholder="Your Name">
                                        <input type="hidden" id="message_from" name="product" value="contact">
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-group text_box">
                                        <input type="text" name="email" id="email" placeholder="Your Email">
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <div class="form-group text_box">
                                        <input type="text" id="subject" name="subject" placeholder="Subject">
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <div class="form-group text_box">
                                        <textarea name="message" id="message" cols="30" rows="10" placeholder="Enter Your Message . . ."></textarea>
                                    </div>
                                </div>
                            </div>
                            <button type="submit" class="btn_three">Send Message</button>
                        </form>
                        <div id="success">Your message succesfully sent!</div>
                        <div id="error">Opps! There is something wrong. Please try again</div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3671.5628982063868!2d72.504426!3d23.039816!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x395e9b2857c4168d%3A0xcd41f2ada05563!2sSmithMotors!5e0!3m2!1sen!2sin!4v1707457838346!5m2!1sen!2sin" width="100%" height="450" frameborder="0" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>

    <?php include 'foot.php';?>
    
    <?php
        // Check for success or failure
        if (isset($_GET['success']) && $_GET['success'] == 'true') {
        ?>
        <script>
        setTimeout(() => {
            Swal.fire({
            position: "top-end",
            icon: "success",
            title: "You have sucessfully registered your email.",
            showConfirmButton: false,
            timer: 1500
        })
        },1000)
        </script>

        <?php
            // echo '<script>document.querySelector(".mchimp-sucmessage").style.display = "block";</script>';
        } elseif (isset($_GET['success']) && $_GET['success'] == 'false') {
        ?>
        <script>
        setTimeout(() => {
                Swal.fire({
                position: "top-end",
                icon: "error",
                title: "Somthing went wrong. Please try again.",
                showConfirmButton: false,
                timer: 1500
            })
        },1000)
        </script>
            <?php
            // echo '<script>document.querySelector(".mchimp-errmessage").style.display = "block";</script>';
        }
    ?>

    </div>
    <script src="js/jquery-3.2.1.min.js"></script>
    <script src="js/propper.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="vendors/wow/wow.min.js"></script>
    <script src="vendors/sckroller/jquery.parallax-scroll.js"></script>
    <script src="vendors/owl-carousel/owl.carousel.min.js"></script>
    <script src="vendors/imagesloaded/imagesloaded.pkgd.min.js"></script>
    <script src="vendors/isotope/isotope-min.js"></script>
    <script src="vendors/magnify-pop/jquery.magnific-popup.min.js"></script>
    <script src="vendors/scroll/jquery.mCustomScrollbar.concat.min.js"></script>
    <!--gmaps Js-->
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyB13ZAvCezMx5TETYIiGlzVIq65Mc2FG5g"></script>
    <script src="js/gmaps.min.js"></script>
    <script src="js/plugins.js"></script>
    <!-- contact js -->
    <script src="js/jquery.form.js"></script>
    <script src="js/jquery.validate.min.js"></script>
    <script src="js/contact.js"></script>
    <script src="js/main.js"></script>
    <script>
    document.addEventListener('DOMContentLoaded', function() {
        var title = document.getElementsByClassName(".place-card place-card-large");
        console.log("google",title);
    });
</script>
</body>
</html>
