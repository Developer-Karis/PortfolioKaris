@extends('template.template')

@section('content')
<button onclick="topFunction()" id="myBtn"><i class="fas fa-arrow-up fa-1x"></i></button>
{{-- Home Content --}}
<div class="home">
    <div class="write">
        <h1 class="text-center">I am Karis Papadopoulos <br><span class="type"></span></h1>
    </div>
</div>

<a class="buttonHome" href="/#projects">See my projects</a>
{{-- About Me --}}
<section id="aboutme" class="spacing">
    <div class="aboutme container shadow p-3 mb-5 bg-white rounded">
        <div class="spacing"></div>
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
                        <div class="col-3">
                            <span class="fa-stack fa-3x animationSkills">
                                <i class="fa fa-square fa-stack-2x icon-background"></i>
                                <i class="fab fa-html5 fa-stack-1x" style="color: #E54D26;"></i>
                            </span>
                        </div>
                        <div class="col-3">
                            <span class="fa-stack fa-3x animationSkills">
                                <i class="fa fa-square fa-stack-2x icon-background"></i>
                                <i class="fab fa-css3-alt fa-stack-1x" style="color: #379AD5;"></i>
                            </span>
                        </div>
                        <div class="col-3">
                            <span class="fa-stack fa-3x animationSkills">
                                <i class="fa fa-square fa-stack-2x icon-background"></i>
                                <i class="fab fa-sass fa-stack-1x" style="color: #C76494;"></i>
                            </span>
                        </div>
                        <div class="col-3">
                            <span class="fa-stack fa-3x animationSkills">
                                <i class="fa fa-square fa-stack-2x icon-background"></i>
                                <i class="fab fa-bootstrap fa-stack-1x" style="color: purple;"></i>
                            </span>
                        </div>
                    </div>
                    <div class="row mt-4">
                        <div class="col-3">
                            <span class="fa-stack fa-3x animationSkills">
                                <i class="fa fa-square fa-stack-2x icon-background"></i>
                                <i class="fab fa-js fa-stack-1x" style="color: yellow;"></i>
                            </span>
                        </div>
                        <div class="col-3">
                            <span class="fa-stack fa-3x animationSkills">
                                <i class="fa fa-square fa-stack-2x icon-background"></i>
                                <i class="fab fa-php fa-stack-1x text-white"></i>
                            </span>
                        </div>
                        <div class="col-3">
                            <span class="fa-stack fa-3x animationSkills">
                                <i class="fa fa-square fa-stack-2x icon-background"></i>
                                <i class="fab fa-laravel fa-stack-1x text-danger"></i>
                            </span>
                        </div>
                        <div class="col-3">
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
                        <a href="https://we.tl/t-XR3KknJdQ3" class="btn btn-success mt-4 py-3 px-5 mr-5"
                            download="Karis Papadopoulos CV FR" style="font-size: 18px;">Download CV</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

{{-- Services --}}
<section id="services" class="spacing">
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <h2 class="title-services text-center mt-5 font-weight-bold">SERVICES</h2>
                <hr class="ligne-separator-services">
            </div>
        </div>
        <div class="services mt-5">
            <div class="row">
                <div class="col-4">
                    <div class="services-content text-center">
                        <i class="fas fa-tv fa-4x circle-icon"></i>
                        <h4 class="title-show-services mt-5 font-weight-bold">WEB DESIGN</h4>
                        <p class="mt-4 font-weight-bold para-services">The design is beautiful on a website. <br>
                            We can attract customers.</p>
                    </div>
                </div>
                <div class="col-4">
                    <div class="services-content text-center">
                        <i class="fas fa-code fa-4x circle-icon"></i>
                        <h4 class="title-show-services mt-5 font-weight-bold">WEB DEVELOPMENT</h4>
                        <p class="mt-4 font-weight-bold para-services">The development is the heart of a website. <br>
                            This is the logical and dynamic part.</p>
                    </div>
                </div>
                <div class="col-4">
                    <div class="services-content text-center">
                        <i class="fas fa-mobile-alt fa-4x circle-icon"></i>
                        <h4 class="title-show-services mt-5 font-weight-bold">REPSONSIVE DESIGN</h4>
                        <p class="mt-4 font-weight-bold para-services">The responsive design allows you to <br> deploy a
                            website on
                            all devices.</p>
                    </div>
                </div>
            </div>
            <div class="row mt-3">
                <div class="col-4">
                    <div class="services-content text-center">
                        <i class="fas fa-eye fa-4x circle-icon"></i>
                        <h4 class="title-show-services mt-5 font-weight-bold">FRONT-END</h4>
                        <p class="mt-4 font-weight-bold para-services">The customer can see the website. <br>
                            Only the part visual.</p>
                    </div>
                </div>
                <div class="col-4">
                    <div class="services-content text-center">
                        <i class="fas fa-user-lock fa-4x circle-icon"></i>
                        <h4 class="title-show-services mt-5 font-weight-bold">BACK-END</h4>
                        <p class="mt-4 font-weight-bold para-services">Admin can manage all the website. <br>
                            He can also manage the rights of each user.</p>
                    </div>
                </div>
                <div class="col-4">
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
        <div class="row">
            <div class="col-sm-12">
                <h2 class="title-services text-center mt-5 font-weight-bold">PROJECTS</h2>
                <hr class="ligne-separator-services">
            </div>
        </div>
        <div class="services mt-4">
            <div class="row">
                <div class="col-4">
                    <div class="card shadow mb-5 bg-white rounded" style="width: 22rem;">
                        <div class="parent-projects">
                            <div class="bg-projects-one"></div>
                        </div>
                        <div class="card-body">
                            <h5 class="card-title font-weight-bold">Vivez Vos Rêves</h5>
                            <div class="d-flex mt-4">
                                <a href="https://severeclick-dev.github.io/VivezVosReves/index.html"
                                    class="buttons-projects btn btn-success mr-2 w-100" target="_blank">Demo</a>
                                <a href="https://github.com/SEVERECLICK-dev/VivezVosReves"
                                    class="buttons-projects btn btn-primary ml-2 w-100" target="_blank">Link Github</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-4">
                    <div class="card shadow mb-5 bg-white rounded" style="width: 22rem;">
                        <div class="parent-projects">
                            <div class="bg-projects-two"></div>
                        </div>
                        <div class="card-body">
                            <h5 class="card-title font-weight-bold">Emporium</h5>
                            <div class="d-flex mt-4">
                                <a href="https://severeclick-dev.github.io/KarisAbdelEmporium/#home"
                                    class="buttons-projects btn btn-success mr-2 w-100" target="_blank">Demo</a>
                                <a href="https://github.com/SEVERECLICK-dev/KarisAbdelEmporium"
                                    class="buttons-projects btn btn-primary ml-2 w-100" target="_blank">Link Github</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-4">
                    <div class="card shadow mb-5 bg-white rounded" style="width: 22rem;">
                        <div class="parent-projects">
                            <div class="bg-projects-three"></div>
                        </div>
                        <div class="card-body">
                            <h5 class="card-title font-weight-bold">Site du Chef</h5>
                            <div class="d-flex mt-4">
                                <a href="https://severeclick-dev.github.io/siteDuChef/#home"
                                    class="buttons-projects btn btn-success mr-2 w-100" target="_blank">Demo</a>
                                <a href="https://github.com/SEVERECLICK-dev/siteDuChef"
                                    class="buttons-projects btn btn-primary ml-2 w-100">Link Github</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-4">
                    <div class="card shadow mb-5 bg-white rounded" style="width: 22rem;">
                        <div class="parent-projects">
                            <div class="bg-projects-four"></div>
                        </div>
                        <div class="card-body">
                            <h5 class="card-title font-weight-bold">My Travel</h5>
                            <div class="d-flex mt-4">
                                <a href="https://severeclick-dev.github.io/ProjectMyTravel/"
                                    class="buttons-projects btn btn-success mr-2 w-100" target="_blank">Demo</a>
                                <a href="https://github.com/SEVERECLICK-dev/ProjectMyTravel"
                                    class="buttons-projects btn btn-primary ml-2 w-100" target="_blank">Link Github</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-4">
                    <div class="card shadow mb-5 bg-white rounded" style="width: 22rem;">
                        <div class="parent-projects">
                            <div class="bg-projects-five"></div>
                        </div>
                        <div class="card-body">
                            <h5 class="card-title font-weight-bold">TemplatePortfolio</h5>
                            <div class="d-flex mt-4">
                                <a href="https://github.com/SEVERECLICK-dev/TemplatePortfolio"
                                    class="buttons-projects btn btn-primary w-50 m-auto" target="_blank">Link Github</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-4">
                    <div class="card shadow mb-5 bg-white rounded" style="width: 22rem;">
                        <div class="parent-projects">
                            <div class="bg-projects-six"></div>
                        </div>
                        <div class="card-body">
                            <h5 class="card-title font-weight-bold">Help Messenger</h5>
                            <div class="d-flex mt-4">
                                <a href="https://github.com/SEVERECLICK-dev/HackathonGroupe4"
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
<section id="contact" class="spacing">

</section>
@stop