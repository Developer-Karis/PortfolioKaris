@extends('template.template')

@section('content')
{{-- Home Content --}}
<div class="home">
    <div class="write">
        <h1 class="text-center">I am Karis Papadopoulos <br><span class="type"></span></h1>
    </div>
</div>

{{-- About Me --}}
<section id="aboutme">
    <div class="aboutme container shadow p-3 mb-5 bg-white rounded">
        <div class="row">
            <div class="col-6">
                <div class="row">
                    <div class="col-sm-6">
                        <div class="about-img">
                            <img src="{{asset('img/avatardefault.png')}}" alt="" height="200">
                        </div>
                    </div>
                    <div class="col-sm-6">
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
                                <span class="title">Github Link :</span>
                                <a class="link" href="https://github.com/SEVERECLICK-dev"
                                    target="_blank">SEVERECLICK-dev</a>
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
                    <h2 class="mb-5">My Skills</h2>
                    <div class="skill-progress">
                        <div class="top-progress">
                            <span class="title-skill">HTML, CSS, SASS, BOOTSTRAP</span>
                            <span class="pull-right">85%</span>
                        </div>
                        <div class="progress">
                            <div class="progress-bar" role="progressbar" style="width: 85%;" aria-valuenow="25"
                                aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                    </div>
                    <div class="skill-progress">
                        <div class="top-progress">
                            <span class="title-skill">JAVASCRIPT</span>
                            <span class="pull-right">75%</span>
                        </div>
                        <div class="progress">
                            <div class="progress-bar" role="progressbar" style="width: 75%;" aria-valuenow="25"
                                aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                    </div>
                    <div class="skill-progress">
                        <div class="top-progress">
                            <span class="title-skill">PHP</span>
                            <span class="pull-right">70%</span>
                        </div>
                        <div class="progress">
                            <div class="progress-bar" role="progressbar" style="width: 70%;" aria-valuenow="25"
                                aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                    </div>
                    <div class="skill-progress">
                        <div class="top-progress">
                            <span class="title-skill">LARAVEL</span>
                            <span class="pull-right">50%</span>
                        </div>
                        <div class="progress">
                            <div class="progress-bar" role="progressbar" style="width: 50%;" aria-valuenow="25"
                                aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                    </div>
                    <div class="skill-progress">
                        <div class="top-progress">
                            <span class="title-skill">MYSQL</span>
                            <span class="pull-right">60%</span>
                        </div>
                        <div class="progress">
                            <div class="progress-bar" role="progressbar" style="width: 60%;" aria-valuenow="25"
                                aria-valuemin="0" aria-valuemax="100"></div>
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
                        Hello, My name is Karis Papadopoulos. I love to create different website with a beautiful
                        design.
                    </p>
                    <p class="about-text text-justify">
                        Lorem ipsum, dolor sit amet consectetur adipisicing elit. Nostrum impedit, cupiditate ab eum in
                        nemo
                        eveniet. Et tempore ullam quis soluta cumque ex in quos quaerat provident. Nisi, facere minus!
                        Ipsa, qui minus? Beatae dolorem, quibusdam eum est debitis veniam harum culpa consectetur
                        exercitationem blanditiis nemo animi quo mollitia similique corporis sunt ipsa sed ex veritatis
                        velit quam aut deserunt?
                    </p>
                    <p class="about-text text-justify">
                        Lorem ipsum, dolor sit amet consectetur adipisicing elit. Nostrum impedit, cupiditate ab eum in
                        nemo
                        eveniet. Et tempore ullam quis soluta cumque ex in quos quaerat provident. Nisi, facere minus!
                        Ipsa, qui minus? Beatae dolorem, quibusdam eum est debitis veniam harum culpa consectetur
                        exercitationem blanditiis nemo animi quo mollitia similique corporis sunt ipsa sed ex veritatis
                        velit quam aut deserunt?eveniet. Et tempore ullam quis soluta cumque ex in quos quaerat
                        provident. Et tempore ullam quis soluta Et tempore ullam quis soluta Et tempore ullam quis
                        soluta qsdqsdqzeazeaz.
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>
@stop