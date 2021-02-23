@extends('template.template')

@section('content')
<button onclick="topFunction()" id="myBtn"><i class="fas fa-arrow-up fa-sm"></i></button>

<!-- ======= Home Section ======= -->
<section id="hero" class="d-flex align-items-center">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 d-flex flex-column justify-content-center pt-4 pt-lg-0 order-2 order-lg-1"
                data-aos="fade-up" data-aos-delay="200">
                <h1>I am Karis Papadopoulos <br><span class="type"></span></h1>
                <div class="d-lg-flex">
                    <a href="#projects" class="btn-get-started scrollto">See my projects</a>
                </div>
            </div>
            <div class="col-lg-6 order-1 order-lg-2 hero-img" data-aos="zoom-in" data-aos-delay="200">
                <img src="{{asset('img/hero-img.png')}}" class="img-fluid animated" alt="">
            </div>
        </div>
    </div>
</section><!-- End Home -->

{{-- About Me --}}
<div class="spacing"></div>
<section id="aboutme" class="spacing" data-aos="fade-right" data-aos-duration="1800">
    <div class="aboutme container shadow p-3 mb-5 bg-white rounded">
        <div class="row">
            <div class="col-6">
                <div class="row">
                    <div class="col-sm-5">
                        <div class="about-img">
                            <img src="{{asset('img/avatardefault.png')}}" alt="" height="200">
                        </div>
                    </div>
                    <div class="col-sm-7">
                        <div class="about-title">
                            <p>
                                <span class="title">Name :</span> Karis Papadopoulos
                            </p>
                            <p>
                                <span class="title">Linked In :</span>
                                <a class="link" href="https://www.linkedin.com/in/karis-papadopoulos-0756b31a3/"
                                    target="_blank">Karis Papadopoulos</a>
                            </p>
                            <p>
                                <span class="title">Github :</span>
                                <a class="link" href="https://github.com/Developer-Karis"
                                    target="_blank">Developer-Karis</a>
                            </p>
                            <p>
                                <span class="title">Email :</span> papadopouloskaris@gmail.com
                            </p>
                            <p>
                                <span class="title">Phone :</span> +32 488 23 89 38
                            </p>
                        </div>
                    </div>
                </div>
                <div class="skill">
                    <h2 class="mb-5 mt-5 font-weight-bold">My Skills</h2>
                    <div class="row">
                        <div class="col-3" data-aos="zoom-in" data-aos-delay="200">
                            <span class="fa-stack fa-3x animationSkills">
                                <i class="fa fa-square fa-stack-2x icon-background"></i>
                                <i class="fab fa-html5 fa-stack-1x" style="color: #E54D26;"></i>
                            </span>
                        </div>
                        <div class="col-3" data-aos="zoom-in" data-aos-delay="300">
                            <span class="fa-stack fa-3x animationSkills">
                                <i class="fa fa-square fa-stack-2x icon-background"></i>
                                <i class="fab fa-css3-alt fa-stack-1x" style="color: #379AD5;"></i>
                            </span>
                        </div>
                        <div class="col-3" data-aos="zoom-in" data-aos-delay="400">
                            <span class="fa-stack fa-3x animationSkills">
                                <i class="fa fa-square fa-stack-2x icon-background"></i>
                                <i class="fab fa-sass fa-stack-1x" style="color: #C76494;"></i>
                            </span>
                        </div>
                        <div class="col-3" data-aos="zoom-in" data-aos-delay="500">
                            <span class="fa-stack fa-3x animationSkills">
                                <i class="fa fa-square fa-stack-2x icon-background"></i>
                                <i class="fab fa-bootstrap fa-stack-1x" style="color: purple;"></i>
                            </span>
                        </div>
                    </div>
                    <div class="row mt-4">
                        <div class="col-3" data-aos="zoom-in" data-aos-delay="600">
                            <span class="fa-stack fa-3x animationSkills">
                                <i class="fa fa-square fa-stack-2x icon-background"></i>
                                <i class="fab fa-js fa-stack-1x" style="color: yellow;"></i>
                            </span>
                        </div>
                        <div class="col-3" data-aos="zoom-in" data-aos-delay="700">
                            <span class="fa-stack fa-3x animationSkills">
                                <i class="fa fa-square fa-stack-2x icon-background"></i>
                                <i class="fab fa-php fa-stack-1x" style="color: #8993C1;"></i>
                            </span>
                        </div>
                        <div class="col-3" data-aos="zoom-in" data-aos-delay="800">
                            <span class="fa-stack fa-3x animationSkills">
                                <i class="fa fa-square fa-stack-2x icon-background"></i>
                                <i class="fab fa-laravel fa-stack-1x text-danger"></i>
                            </span>
                        </div>
                        <div class="col-3" data-aos="zoom-in" data-aos-delay="900">
                            <span class="fa-stack fa-3x animationSkills">
                                <i class="fa fa-square fa-stack-2x icon-background"></i>
                                <i class="fas fa-database fa-stack-1x" style="color: #005681;"></i>
                            </span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-6">
                <div class="about-content mb-5">
                    <h2 class="ml-5 mt-4 font-weight-bold">About Me</h2>
                    <h5 class="ligne-separator-about w-25 ml-5"></h5>
                </div>
                <div class="about-text px-5">
                    <p class="about-text text-justify">
                        Hello, My name is Karis Papadopoulos. <br>
                        I love to create different website with a beautiful design.
                    </p>
                    <p class="about-text text-justify">
                        Passionate about the fascinating world of the web, I was interested in different programming
                        languages. <br><br> Versatile, I learned to make creative and original websites. Today, I am
                        looking for
                        any new opportunity that would allow me to take onnew challenges and deepen my current skills.
                    </p>
                    <div class="spacing"></div>
                    <div class="d-flex justify-content-center align-items-center">
                        <a href="{{asset('pdf/Karis Papadopoulos CV EN.pdf')}}"
                            class="btn btn-success rounded-pill mt-4 py-3 px-4 ml-3 mr-4"
                            download="Karis Papadopoulos CV EN" style="font-size: 17px;">Download CV EN</a>
                        <a href="{{asset('pdf/Karis Papadopoulos CV.pdf')}}"
                            class="btn btn-success rounded-pill mt-4 py-3 px-4 mr-5" download="Karis Papadopoulos CV FR"
                            style="font-size: 17px;">Download CV FR</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

{{-- Services --}}
<section id="services" class="spacing">
    <div class="container">
        <div class="row mt-4">
            <div class="col-sm-12">
                <h2 class="title-services text-center mt-5 font-weight-bold">SERVICES</h2>
                <hr class="ligne-separator-services">
            </div>
        </div>
        <div class="services mt-5">
            <div class="row">
                <div class="col-4" data-aos="zoom-in" data-aos-delay="100">
                    <div class="services-content text-center">
                        <i class="fas fa-tv fa-4x circle-icon"></i>
                        <h4 class="title-show-services mt-5 font-weight-bold">WEB DESIGN</h4>
                        <p class="mt-4 font-weight-bold para-services">The design is beautiful on a website. <br>
                            We can attract customers.</p>
                    </div>
                </div>
                <div class="col-4" data-aos="zoom-in" data-aos-delay="200">
                    <div class="services-content text-center">
                        <i class="fas fa-code fa-4x circle-icon"></i>
                        <h4 class="title-show-services mt-5 font-weight-bold">WEB DEVELOPMENT</h4>
                        <p class="mt-4 font-weight-bold para-services">The development is the heart of a website. <br>
                            This is the logical and dynamic part.</p>
                    </div>
                </div>
                <div class="col-4" data-aos="zoom-in" data-aos-delay="300">
                    <div class="services-content text-center">
                        <i class="fas fa-mobile-alt fa-4x circle-icon"></i>
                        <h4 class="title-show-services mt-5 font-weight-bold">RESPONSIVE DESIGN</h4>
                        <p class="mt-4 font-weight-bold para-services">The responsive design allows you to <br> deploy a
                            website on
                            all devices.</p>
                    </div>
                </div>
            </div>
            <div class="row mt-3">
                <div class="col-4" data-aos="zoom-in" data-aos-delay="400">
                    <div class="services-content text-center">
                        <i class="fas fa-eye fa-4x circle-icon"></i>
                        <h4 class="title-show-services mt-5 font-weight-bold">FRONT-END</h4>
                        <p class="mt-4 font-weight-bold para-services">The customer can see the website. <br>
                            Only the part visual.</p>
                    </div>
                </div>
                <div class="col-4" data-aos="zoom-in" data-aos-delay="500">
                    <div class="services-content text-center">
                        <i class="fas fa-user-lock fa-4x circle-icon"></i>
                        <h4 class="title-show-services mt-5 font-weight-bold">BACK-END</h4>
                        <p class="mt-4 font-weight-bold para-services">Admin can manage all the website. <br>
                            He can also manage the rights of each user.</p>
                    </div>
                </div>
                <div class="col-4" data-aos="zoom-in" data-aos-delay="600">
                    <div class="services-content text-center">
                        <i class="fas fa-users fa-4x circle-icon"></i>
                        <h4 class="title-show-services mt-5 font-weight-bold">SATISFY CUSTOMERS</h4>
                        <p class="mt-4 font-weight-bold para-services">This is the most important mission <br> when we
                            start designing
                            the website.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
{{-- Projects --}}
<section id="projects" class="spacing">
    <div class="container">
        <div class="row mt-3">
            <div class="col-sm-12">
                <h2 class="title-services text-center mt-5 font-weight-bold">PROJECTS</h2>
                <hr class="ligne-separator-services">
            </div>
        </div>
        <div class="services mt-5">
            <div class="row">
                <div class="col-4" data-aos="flip-down" data-aos-delay="200">
                    <div class="card shadow mb-5 bg-white rounded" style="width: 22rem;">
                        <div class="parent-projects">
                            <div class="bg-projects-one"></div>
                        </div>
                        <div class="card-body">
                            <h5 class="card-title font-weight-bold">Vivez Vos Rêves</h5>
                            <div class="d-flex mt-4">
                                <a href="https://developer-karis.github.io/VivezVosReves/index.html"
                                    class="buttons-projects btn btn-success mr-2 w-100" target="_blank">Demo</a>
                                <a href="https://github.com/Developer-Karis/VivezVosReves"
                                    class="buttons-projects btn btn-primary ml-2 w-100" target="_blank">Link Github</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-4" data-aos="flip-down" data-aos-delay="300">
                    <div class="card shadow mb-5 bg-white rounded" style="width: 22rem;">
                        <div class="parent-projects">
                            <div class="bg-projects-two"></div>
                        </div>
                        <div class="card-body">
                            <h5 class="card-title font-weight-bold">Emporium</h5>
                            <div class="d-flex mt-4">
                                <a href="https://developer-karis.github.io/KarisAbdelEmporium/#home"
                                    class="buttons-projects btn btn-success mr-2 w-100" target="_blank">Demo</a>
                                <a href="https://github.com/Developer-Karis/KarisAbdelEmporium"
                                    class="buttons-projects btn btn-primary ml-2 w-100" target="_blank">Link Github</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-4" data-aos="flip-down" data-aos-delay="400">
                    <div class="card shadow mb-5 bg-white rounded" style="width: 22rem;">
                        <div class="parent-projects">
                            <div class="bg-projects-three"></div>
                        </div>
                        <div class="card-body">
                            <h5 class="card-title font-weight-bold">Site du Chef</h5>
                            <div class="d-flex mt-4">
                                <a href="https://developer-karis.github.io/siteDuChef/#home"
                                    class="buttons-projects btn btn-success mr-2 w-100" target="_blank">Demo</a>
                                <a href="https://github.com/Developer-Karis/siteDuChef"
                                    class="buttons-projects btn btn-primary ml-2 w-100" target="_blank">Link Github</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-4" data-aos="flip-down" data-aos-delay="500">
                    <div class="card shadow mb-5 bg-white rounded" style="width: 22rem;">
                        <div class="parent-projects">
                            <div class="bg-projects-four"></div>
                        </div>
                        <div class="card-body">
                            <h5 class="card-title font-weight-bold">My Travel</h5>
                            <div class="d-flex mt-4">
                                <a href="https://developer-karis.github.io/ProjectMyTravel/"
                                    class="buttons-projects btn btn-success mr-2 w-100" target="_blank">Demo</a>
                                <a href="https://github.com/Developer-Karis/ProjectMyTravel"
                                    class="buttons-projects btn btn-primary ml-2 w-100" target="_blank">Link Github</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-4" data-aos="flip-down" data-aos-delay="600">
                    <div class="card shadow mb-5 bg-white rounded" style="width: 22rem;">
                        <div class="parent-projects">
                            <div class="bg-projects-five"></div>
                        </div>
                        <div class="card-body">
                            <h5 class="card-title font-weight-bold">TemplatePortfolio</h5>
                            <div class="d-flex mt-4">
                                <a href="https://github.com/Developer-Karis/TemplatePortfolio"
                                    class="buttons-projects btn btn-primary w-50 m-auto" target="_blank">Link Github</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-4" data-aos="flip-down" data-aos-delay="700">
                    <div class="card shadow mb-5 bg-white rounded" style="width: 22rem;">
                        <div class="parent-projects">
                            <div class="bg-projects-six"></div>
                        </div>
                        <div class="card-body">
                            <h5 class="card-title font-weight-bold">Help Messenger</h5>
                            <div class="d-flex mt-4">
                                <a href="https://github.com/Developer-Karis/HackathonGroupe4"
                                    class="buttons-projects btn btn-primary w-50 m-auto" target="_blank">Link Github</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

{{-- Contact --}}
<section id="contact" class="spacing" style="padding-bottom: 3rem;">
    <div class="container" data-aos="fade-down" data-aos-easing="linear" data-aos-duration="1200">
        <div class="row mt-5">
            <div class="col-sm-12">
                <h2 class="title-services text-center mt-5 font-weight-bold">CONTACT</h2>
                <hr class="ligne-separator-services">
            </div>
        </div>
        <div class="row mt-5">
            <div class="col-5">
                <div class="form-contact shadow mb-5 px-4">
                    <div class="infos-contact">
                        <div class="address">
                            <div class="d-flex">
                                <i class="fas fa-map-marker-alt fa-2x ml-1 mt-2" style="color: #69C0E9;"></i>
                                <h4 class="ml-2 font-weight-bold" style="padding: 0 0 0 26px;">Location : </h4>
                            </div>
                            <p>Avenue de la reine des prés 31, 1120 Bruxelles</p>
                        </div>

                        <div class="email">
                            <div class="d-flex">
                                <i class="far fa-envelope fa-2x" style="color: #69C0E9;"></i>
                                <h4 class="ml-2 font-weight-bold">Email : </h4>
                            </div>
                            <p>papadopouloskaris@gmail.com</p>
                        </div>

                        <div class="phone">
                            <div class="d-flex">
                                <i class="fas fa-phone-alt fa-2x" style="color: #69C0E9;"></i>
                                <h4 class="ml-2 font-weight-bold">Phone : </h4>
                            </div>
                            <p>+32 488 23 89 38</p>
                        </div>
                    </div>
                    <div class="form-group">
                        <iframe
                            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2516.7622811149045!2d4.372215715908064!3d50.89110996339553!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47c3c2fdabe1db89%3A0xf2e2e8d9cc148130!2sAvenue%20de%20la%20Reine%20des%20Pr%C3%A9s%2031%2C%201120%20Bruxelles!5e0!3m2!1sfr!2sbe!4v1613466773997!5m2!1sfr!2sbe"
                            frameborder="0" style="border:0; width: 100%; height: 240px;" allowfullscreen=""
                            aria-hidden="false" tabindex="0"></iframe>
                    </div>
                </div>
            </div>
            <div class="col-7">
                <form action="" class="form-contact shadow mb-5">
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="name">Your Name</label>
                            <input type="text" name="name" class="form-control" required />
                        </div>
                        <div class="form-group col-md-6">
                            <label for="name">Your Email</label>
                            <input type="email" class="form-control" name="email" required />
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="">Subject</label>
                        <input type="text" name="name" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label for="">Message</label>
                        <textarea name="" cols="30" rows="10" style="resize: none;" class="form-control"
                            required></textarea>
                    </div>
                    <div class="text-center">
                        <button type="submit" class="btn-contact">Send message</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>

{{-- Newsletter --}}
<section class="newsletter" class="spacing">
    <div class="container text-center">
        <div class="content-newsletter">
            <h2 class="title-newsletter">Join Our Newsletter</h2>
            <div class="d-flex justify-content-center align-items-center mt-5">
                <input type="text" name="" class="form-control input-newsletter shadow" style="width: 50%;">
                <button type="submit" class="btn-newsletter shadow">Subscribe</button>
            </div>
        </div>
    </div>
</section>


{{-- Footer --}}
<footer>
    <div class="container">
        <div class="footer">
            <div class="row">
                <div class="col-3">
                    <h2 class="font-weight-bold mt-2">Portfolio Karis</h2>
                    <p>
                        Avenue de la reine des prés 31,
                        1120 Bruxelles.
                    </p>
                    <p> Phone: +32 488 23 89 38
                        Email: papadopouloskaris@gmail.com</p>
                </div>
                <div class="col-3">
                    <div class="d-flex flex-column align-items-center">
                        <h5 class="font-weight-bold mt-3">Useful Links</h5>
                        <ul class="p-0 mt-2">
                            <li>
                                <i class="fas fa-chevron-right mt-3 mr-2"></i><a href="#top">Home</a>
                            </li>
                            <li>
                                <i class="fas fa-chevron-right mt-3 mr-1"></i> <a href="#aboutme">About Me</a>
                            </li>
                            <li>
                                <i class="fas fa-chevron-right mt-3 mr-1"></i> <a href="#services">Services</a>
                            </li>
                            <li>
                                <i class="fas fa-chevron-right mt-3 mr-1"></i> <a href="#projects">Projects</a>
                            </li>
                            <li>
                                <i class="fas fa-chevron-right mt-3 mr-1"></i> <a href="#contact">Contact</a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-3">
                    <div class="d-flex flex-column align-items-center">
                        <h5 class="font-weight-bold mt-3 mr-5">Our Services</h5>
                        <ul class="p-0 mt-2">
                            <li>
                                <i class="fas fa-chevron-right mt-3 mr-2"></i><a href="#services">Web Design</a>
                            </li>
                            <li>
                                <i class="fas fa-chevron-right mt-3 mr-2"></i><a href="#services">Web Development</a>
                            </li>
                            <li>
                                <i class="fas fa-chevron-right mt-3 mr-2"></i><a href="#services">Responsive Design</a>
                            </li>
                            <li>
                                <i class="fas fa-chevron-right mt-3 mr-2"></i><a href="#services">Front-End</a>
                            </li>
                            <li>
                                <i class="fas fa-chevron-right mt-3 mr-2"></i><a href="#services">Back-End</a>
                            </li>
                            <li>
                                <i class="fas fa-chevron-right mt-3 mr-2"></i><a href="#services">Satisfy Customers</a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-3">
                    <h5 class="font-weight-bold mt-3 mb-4">Our Social Networks</h5>
                    <div class="social-links">
                        <i class="fab fa-facebook-f circle-icon"></i>
                        <i class="fab fa-instagram circle-icon"></i>
                        <i class="fab fa-linkedin-in circle-icon"></i>
                        <i class="fab fa-twitter circle-icon"></i>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="copyright">
        <p>© Copyright 2021, All Rights Reserved</p>
        <p>Designed by Karis Papadopoulos</p>
    </div>
</footer>
@stop