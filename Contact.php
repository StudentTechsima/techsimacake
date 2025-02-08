<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CAKE-SHOP || CONTACT US</title>
    <link rel="stylesheet" href="CSS/bootstrap.min.css">
    <link rel="stylesheet" href="CSS/all.min.css">
    <link rel="stylesheet" href="CSS/Contact.css">
</head>

<body>

    <!-- Contact section map start -->
    <section class="contact_map_sect py-4" id="contact_map_sect">
        <div class="container map_section_div">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2880.6596926664447!2d82.19993310988708!3d26.75857376660268!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x399a07d8eb5fd27f%3A0xcfbbc5e4bb9f9b2d!2sTechsima%20Solution%20Private%20Limited!5e1!3m2!1sen!2sin!4v1737036338389!5m2!1sen!2sin" width="100%" height="100%" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            <div class="map_upper_div d-flex justify-content-center align-items-center flex-column">
                <h6 class="py-2 fw-bold">TECHSIMA</h6>
                <span class="d-block py-1 ">KudaKeshavpur Darshan Nagar Ayodhya 224135</span>
                <a href="mailto:techsimatraining@gmail.com" class="d-block py-1 text-decoration-none">techsimatraining@gmail.com</a>
                <a href="tel:+8303280240" class="text-decoration-none">+91 8303280240</a>
            </div>
        </div>
    </section>
    <!-- Contact section map end -->

    <!-- contact page contact details part start-->
    <section class="contact_part_detail" id="contact_part_detail">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-6 col-sm-12 d-flex justify-content-center align-items-start flex-column">
                    <h6 class="py-3">SAN BERNARDINO</h6>
                    <p class="mb-0 pt-1 pb-2"><i class="fa-solid fa-location-dot pe-2 text-black"></i> 795 W 5th St, San Bernardino, CA 92410, USA</p>
                    <a href="tel:++1 800-786-1000" class="d-block py-1 text-decoration-none"><i class="fa-solid fa-headphones pe-2 text-black"></i>+1 800-786-1000</a>
                    <a href="mailto:Sweetcake@support.com" class="d-block py-1 text-decoration-none"><i class="fa-regular fa-envelope pe-2 text-black"></i>Sweetcake@support.com</a>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12 d-flex justify-content-center align-items-start flex-column">
                    <h6 class="py-3">LOS ANGELES</h6>
                    <p class="mb-0 pt-1 pb-2 text-black"><i class="fa-solid fa-location-dot pe-2 text-black"></i>795 W 5th St, San Bernardino, CA 92410, USA</p>
                    <a href="tel:++1 800-786-1000" class="d-block py-1 text-decoration-none"><i class="fa-solid fa-headphones pe-2 text-black"></i>+1 800-786-1000</a>
                    <a href="mailto:Sweetcake@support.com" class="d-block py-1 text-decoration-none"><i class="fa-regular fa-envelope pe-2 text-black"></i>Sweetcake@support.com</a>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12 d-flex justify-content-center align-items-start flex-column">
                    <h6 class="py-3">SAN BERNARDINO</h6>
                    <p class="mb-0 pt-1 pb-2 text-black"><i class="fa-solid fa-location-dot pe-2 text-black"></i>795 W 5th St, San Bernardino, CA 92410, USA</p>
                    <a href="tel:++1 800-786-1000" class="d-block py-1 text-decoration-none"><i class="fa-solid fa-headphones pe-2 text-black"></i>+1 800-786-1000</a>
                    <a href="mailto:Sweetcake@support.com" class="d-block py-1 text-decoration-none"><i class="fa-regular fa-envelope pe-2 text-black"></i>Sweetcake@support.com</a>
                </div>
            </div>
        </div>
    </section>
    <!-- contact page contact details part end-->

    <!-- Contact page contact form section here start -->
    <section class="contact_form_sect">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-4 col-sm-12 d-flex justify-content-start align-items-start flex-column">
                    <h3 class="fst-italic fw-bold pt-3 pb-1">Contact With us</h3>
                    <p class="mb-0 py-1 text-black">Representatives or Advisors are available:</p>
                    <p class="mb-0 py-1 text-black">Mon-Fri: 5:00am to 9:00pm</p>
                    <p class="mb-0 py-1 text-black">Sat-Sun: 6:00am to 9:00pm</p>
                    <img src="IMAGES/cake.png" class=" d-block py-4" alt="cake image">
                </div>
                <div class="col-lg-8 col-md-8 col-sm-12">
                    <form action="CRUD/Create_contact_Post.php" method="post">
                        <div class="row">
                            <div class="col-lg-6 col-md-6 col-sm-12">
                                <input type="text" class="form-control rounded-0" name="name" placeholder="Enter name" aria-label="Enter name">
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-12">
                                <input type="text" class="form-control rounded-0" name="email" placeholder="Enter email" aria-label="Enter email">
                            </div>
                        </div>
                        <textarea class="form-control rounded-0 mt-3" placeholder="Enter your message..." name="message" rows="6"></textarea>
                        <div class="contact_us_btn py-4">
                            <button type="submit" class="btn btn-secondary rounded-0">SEND US</button>
                        </div>
                    </form>


                </div>
            </div>
        </div>

    </section>
    <!-- Contact page contact form section here end -->



    <script src="JS/bootstrap.bundle.min.js"></script>
</body>

</html>