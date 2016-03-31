<?php
$pageTitle = "Home";
include('inc/header.php'); ?>

<div class="puppic"><img src="images/pups.jpeg">
</div>
<div class="container">
    <div class="row">
        <h1 align="center" class="banner col-md-12">Welcome to the Pet Shop</h1>
        <div><h3 align="center">We can all use a pal to snuggle, play, and love!</h3></div>
    </div>

    <div class="row pups">
        <div class="col-md-3"><img width="100%" src="images/bull.jpeg"></div>
        <div class="col-md-3"><img width="100%" src="images/weim.jpg"></div>
        <div class="col-md-3"><img width="100%" src="images/shars.jpg"></div>
        <div class="col-md-3"><img width="100%" src="images/bull.jpeg"></div>
    </div>
    <hr>

    <p>
        Here at Sandy's Pet Shop, we connect puppys with pals! We have a wide selection of Puppys to choose from. We
        know
        that when we connect a Puppy with a Pal this is a life long connection. We want to insure that our puppys find
        forever homes with a loving family. Each puppy has different needs and that is why we have experience trainers
        on
        staff. Our trainers will guid you through the puppy selection process to promote proper placement. Although
        Sandy's
        Pet Shop begans as just a puppy pet shop we have expanded! We are truly excited to introduce the newest members
        to
        our shop. Feel Free to Head over to the pals tab to find out more information. We Furry Friends as being
        featured
        this months, so please give them look too!
    </p>
    <div class="row feature-story">
        <div class="feature col-md-12">
            <h2>Featured Story</h2>
        </div>
        <hr>
        <div class="col-md-4">
            <img src="images/bird.jpeg">
        </div>
        <div align="left" class="col-md-8">
            <h2>Meet Polly</h2>
            <p>
                Here at the pet shop we have a featured pet each month. We take the time to introduce these pets to
                you here on our website. You can subscribe to our news letter and each time we have a new featured story
                you will be sent an email. These stories will leave you with a heart warm and an ear to ear smile.
            </p>
            <p>

                    <h2>Sign Up!</h2>

                    <h3>We have an AWESOME news letter!</h3>
                    <p>Hear about Puppys that found their life long Pal. Get featured with your life long pal. Share stories,
                        tell jokes, and stay connected.</p>
                    <form class="form-inline">
                        <div class="form-group">
                            <label for="#">Name</label>
                            <input type="text" class="form-control" id="#" placeholder="Jane Doe">
                        </div>
                        <div class="form-group">
                            <label for="#">Email</label>
                            <input type="email" class="form-control" id="#" placeholder="jane.doe@example.com">
                        </div>
                        <button type="submit" class="btn btn-success">Send invitation</button>
                    </form>

            </p>
        </div>

    </div>
</div>
<?php include('inc/footer.php'); ?>
