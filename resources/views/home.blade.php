@extends('common1.main')
@section('main-content')
<section class="header">
    <nav>
        <a href="index.html"><img src="{{asset('image/images/logo.png')}}"></a>
        <div class="nav-links" id="navLinks">
            <i class="fa fa-times" onclick="hidemenu()"></i>
            <ul>
                <li><a href="index.html">HOME</a></li>
                <li><a href="about.html">ABOUT</a></li>
                <li><a href="page9.php">MEMBERSHIP</a></li>
                <li><a href="blog.html">BLOG</a></li>
                <li><a href="contact.html">CONTACT</a></li>
            </ul>
        </div>
        <i class="fa fa-bars" onclick="showmenu()"></i>
    </nav>

    <div class="text-box">
        <h1>MADE IN HEAVEN</h1>
        <p>

        </p>
        <p>Find the Perfect Match for yourself.
        </p>
        <a href="login-user.php" class="hero-btn">Register/Login</a>
    </div>

</section>
<!--course-->
<section class="course">
    <h1>Services We Offer</h1>
    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Vitae.</p>
    <div class="row">
        <div class="course-col">
            <h3>XYZ</h3>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Hic cupiditate tempore,
                alias officiis
                aliquam temporibus ex minus blanditiis sequi expedita animi sunt adipisci
                quaerat deleniti rerum
                quam excepturi atque corrupti?</p>
        </div>
        <div class="course-col">
            <h3>XYZ</h3>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Hic cupiditate tempore,
                alias officiis
                aliquam temporibus ex minus blanditiis sequi expedita animi sunt adipisci
                quaerat deleniti rerum
                quam excepturi atque corrupti?</p>
        </div>
        <div class="course-col">
            <h3>XYZ</h3>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Hic cupiditate tempore,
                alias officiis
                aliquam temporibus ex minus blanditiis sequi expedita animi sunt adipisci
                quaerat deleniti rerum
                quam excepturi atque corrupti?</p>
        </div>

    </div>
</section>
<!--campus-->
<section class="campus">
    <h1>Our Nation Wide Office</h1>
    <P>Lorem, ipsum dolor sit amet consectetur adipisicing elit</P>
    <div class="row">
        <div class="campus-col">
            <img src="{{asset('image/images/london.png')}}">
            <div class="layer">
                <h3>DELHI</h3>
            </div>
        </div>
        <div class="campus-col">
            <img src="{{asset('image/images/newyork.png')}}">
            <div class="layer">
                <h3>KOLKATA</h3>
            </div>
        </div>
        <div class="campus-col">
            <img src="{{asset('image/images/washington.png')}}">
            <div class="layer">
                <h3>BOMBAY</h3>
            </div>
        </div>
    </div>

</section>
<!-----testimonials-->
<section class="testimonials">
    <h1>What our User sayss</h1>
    <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit</p>
    <div class="row">
        <div class="testimonial-col">
            <img src="{{asset('image/images/user1.jpg')}}">
            <div>
                <p>
                    Lorem ipsum dolor sit amet consectetur, adipisicing elit. Animi neque
                    perspiciatis tempora.
                    Labore voluptas illo dolorum placeat numquam atque inventore, iste illum
                    quo totam temporibus,
                    officiis corporis dolor minima itaque!
                </p>
                <h3>Riya Sarkar</h3>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star-o"></i>

            </div>
        </div>
        <div class="testimonial-col">
            <img src="{{asset('image/images/user2.jpg')}}">
            <div>
                <p>
                    Lorem ipsum dolor sit amet consectetur, adipisicing elit. Animi neque
                    perspiciatis tempora.
                    Labore voluptas illo dolorum placeat numquam atque inventore, iste illum
                    quo totam temporibus,
                    officiis corporis dolor minima itaque!
                </p>
                <h3>Sayan Thakur</h3>
                <i class="fa fa-star" aria-hidden="true"></i>
                <i class="fa fa-star" aria-hidden="true"></i>
                <i class="fa fa-star" aria-hidden="true"></i>
                <i class="fa fa-star" aria-hidden="true"></i>
                <i class="fa fa-star-half-o" aria-hidden="true"></i>

            </div>
        </div>
    </div>
</section>
<!-----------call to action-->
<section class="cta">
    <h1>For Any Queries</h1>
    <a href="contact.html" class="hero-btn">Contact Us</a>
    <a href="rating.php" class="hero-btn">Review</a>
</section>

@endsection
