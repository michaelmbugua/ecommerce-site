<?php
session_start();
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>PeekaBoo</title>
    <?php include("./includes/header.php") ?>
    <link href="./css/style.css" rel="stylesheet" type="text/css">
</head>
<body>
<div class="-fluid wrapper">
    <?php
    include("./includes/nav-bar.php")
    ?>

    <div class="container-fluid p-0">

        <div id="carouselExampleIndicators" class="carousel slide w-100" data-ride="carousel">
            <ol class="carousel-indicators">
                <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
            </ol>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img class="d-block w-100" src="./images/site_images/haaands2.jpeg" alt="First slide">
                </div>
                <div class="carousel-item">
                    <img class="d-block w-100" src="./images/site_images/hands2.jpeg" alt="Second slide">
                </div>
            </div>
            <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>


        <div class="row mr-0">

            <section id="sec-about" class="sec-about pt-5 pb-5 w-100">
                <div class="container">
                    <div class="row justify-content-center text-center">
                        <div class="col-md-10 col-lg-8">
                            <h1 class="h4">About us</h1>
                            <p class="mt-4 mb-4">
                            Some 42% of users aim for marriage by using online dating sites. When we consider how many people look at online dating as a “nothing serious” type of deal, this is a fairly surprising statistic.We look forward to walking with you in this journey</p>
                        </div>
                    </div>

                    <div class="row mt-4">
                        <div class="col-sm-4">
                            <h4>150+</h4>

                            <hr/>

                            <h5>
                                Members</h5>
                        </div>

                        <div class="col-sm-4">
                            <h4>60+</h4>

                            <hr/>

                            <h5>Happy couples </h5>
                        </div>

                        <div class="col-sm-4">
                            <h4>90+</h4>

                            <hr/>

                            <h5>Premium members</h5>
                        </div>
                    </div>
                </div>
            </section>

        </div>

        <div class="row mr-0">
            <section id="sec-features" class="sec-features pt-5 pb-5">
                <div class="container">
                    <div class="row justify-content-center text-center">
                        <div class="col-md-10 col-lg-8">
                            <h1 class="h4">Our Services</h1>
                        </div>
                    </div>
                    <div class="row align-items-center">
                        <div class="col-md-6">
                            <h3 class="h4">Security</h3>
                            <hr/>
                            <p>Your chats are 100% safe and secured with our end-to-end encryption.</p>
                        </div><div class="col-md-6">
                            <h3 class="h4">Messaging</h3>
                            <hr/>
                            <p>Messages can be sent to other members. Send "hi" or just drop a wink to start the
                                conversation.</p>
                        </div>
                    </div>
                </div>
            </section>

        </div>

        <div class="row mr-0">
            <section id="sec-testimonials" class="sec-testimonials w-100">
                <div class="container">
                    <h1 class="h4 mb-5 text-center">Words from our members</h1>

                    <div id="carouselIndicators" class="carousel slide" data-ride="carousel">
                        <ol class="carousel-indicators">
                            <li data-target="#carouselIndicators" data-slide-to="0" class="active"></li>
                            <li data-target="#carouselIndicators" data-slide-to="1"></li>
                            <li data-target="#carouselIndicators" data-slide-to="2"></li>
                        </ol>

                        <div class="carousel-inner" role="listbox">
                            <div class="carousel-item active">
                                <div class="row justify-content-center">
                                    <div class="col-md-6">
                                        <blockquote class="blockquote">
                                            <small>
                                                We found this site to help young and elder people to find their exact
                                                match to date and fill their life with joy!
                                            </small>
                                            <footer class="blockquote-footer mt-2">Octopizzo</footer>
                                        </blockquote>
                                    </div>
                                </div>
                            </div>

                            <div class="carousel-item">
                                <div class="row justify-content-center">
                                    <div class="col-md-6">
                                        <blockquote class="blockquote">
                                            <small>I've been a member for over 3 years. This is by far the best
                                                site.</small>
                                            <footer class="blockquote-footer mt-2">Quality Control</footer>
                                        </blockquote>
                                    </div>
                                </div>
                            </div>

                            <div class="carousel-item">
                                <div class="row justify-content-center">
                                    <div class="col-md-6">
                                        <blockquote class="blockquote">
                                            <small>I joined since its opening and I couldn't have found a better dating
                                                space. Being a member is so inspiring and I love to date with young
                                                bright and full of entrepreneurs like me!</small>
                                            <footer class="blockquote-footer mt-2">Nikita Kering</footer>
                                        </blockquote>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <a class="carousel-control-prev" href="#carouselIndicators" role="button" data-slide="prev">
                            <span class="fa fa-angle-left fa-2x"></span>
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="sr-only">Previous</span>
                        </a>

                        <a class="carousel-control-next" href="#carouselIndicators" role="button" data-slide="next">
                            <span class="fa fa-angle-right fa-2x"></span>
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="sr-only">Next</span>
                        </a>
                    </div>
                </div>
            </section>
        </div>

        <div class="row mr-0">
            <section id="sec-contact" class="sec-contact pt-5 pb-5pt-5 pb-5 w-100">
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-md-10 col-lg-7">
                            <h1 class="h4">Have a question? Get in touch with us!</h1>

                            <form action="" method="post">
                                <fieldset class="form-group">
                                    <label for="formName">Your Name:</label>
                                    <input id="formName" class="form-control" type="text" placeholder="Your Name"
                                           required>
                                </fieldset>

                                <fieldset class="form-group">
                                    <label for="formEmail1">Email address:</label>
                                    <input id="formEmail1" class="form-control" type="email" placeholder="Enter email"
                                           required>
                                </fieldset>

                                <fieldset class="form-group">
                                    <label for="formMessage">Your Message:</label>
                                    <textarea id="formMessage" class="form-control" rows="3" placeholder="Your message"
                                              required></textarea>
                                </fieldset>

                                <fieldset class="form-group text-center">
                                    <button class="btn btn-primary" type="submit">Send Message</button>
                                </fieldset>
                            </form>
                        </div>
                    </div>
                </div>
            </section>
        </div>
    </div>
    <?php include("./includes/footer.php") ?>
</div>
</body>
</html>