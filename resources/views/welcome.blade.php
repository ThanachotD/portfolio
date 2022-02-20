<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Thanchot</title>

    <!--typeit sj -->
    <script src="https://unpkg.com/typeit@8.2.0/dist/index.umd.js"></script>
    <script src="{{asset('typedesign.js')}}"></script>
    <script src="<https://unpkg.com/typeit@8.2.0/dist/index.umd.js>"></script>
    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Prompt:wght@200&family=Roboto:wght@700&display=swap"
          rel="stylesheet">
    <!-- Styles -->
    <!-- Styles -->
    <link rel="stylesheet" href="{{ mix('css/app.css') }}">
    <link rel="stylesheet" href="{{ asset('box.css') }}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"
            crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js"
            integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB"
            crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js"
            integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13"
            crossorigin="anonymous"></script>
    @livewireStyles

    <!-- Scripts -->
    <script src="{{ mix('js/app.js') }}" defer></script>
    <script src="{{asset('box.js')}}"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"
            crossorigin="anonymous"></script>
    <style>

        body {
            font-family: 'Kanit', sans-serif;
        }

        a {
            color: black;
        }

    </style>
</head>
<body>


<nav class="navbar" style="height: 80px;padding-left: 1%;position: fixed;">
    <a class="navbar-brand" href="#">
        <img src="{{asset('logofinal.svg')}}" width="65%" alt="">
    </a>
</nav>

<header id="header" class="d-flex flex-column justify-content-center" style="padding-left: 1%">
    <nav id="navbar" class="navbar nav-menu">
        <ul>
            <li><a href="#hero" class="nav-link scrollto active">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                         class="bi bi-house-fill" viewBox="0 0 16 16">
                        <path fill-rule="evenodd"
                              d="m8 3.293 6 6V13.5a1.5 1.5 0 0 1-1.5 1.5h-9A1.5 1.5 0 0 1 2 13.5V9.293l6-6zm5-.793V6l-2-2V2.5a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5z"/>
                        <path fill-rule="evenodd"
                              d="M7.293 1.5a1 1 0 0 1 1.414 0l6.647 6.646a.5.5 0 0 1-.708.708L8 2.207 1.354 8.854a.5.5 0 1 1-.708-.708L7.293 1.5z"/>
                    </svg>
                    <span>My home</span></a></li>
            <li><a href="#about" class="nav-link scrollto">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                         class="bi bi-person-fill" viewBox="0 0 16 16">
                        <path d="M3 14s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1H3zm5-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6z"/>
                    </svg>
                    <span>My self</span></a></li>
            <li><a href="#resume" class="nav-link scrollto">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                         class="bi bi-file-earmark-fill" viewBox="0 0 16 16">
                        <path
                            d="M4 0h5.293A1 1 0 0 1 10 .293L13.707 4a1 1 0 0 1 .293.707V14a2 2 0 0 1-2 2H4a2 2 0 0 1-2-2V2a2 2 0 0 1 2-2zm5.5 1.5v2a1 1 0 0 0 1 1h2l-3-3z"/>
                    </svg>
                    <span>My Resume</span></a></li>
            <li><a href="#portfolio" class="nav-link scrollto">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                         class="bi bi-briefcase-fill" viewBox="0 0 16 16">
                        <path
                            d="M6.5 1A1.5 1.5 0 0 0 5 2.5V3H1.5A1.5 1.5 0 0 0 0 4.5v1.384l7.614 2.03a1.5 1.5 0 0 0 .772 0L16 5.884V4.5A1.5 1.5 0 0 0 14.5 3H11v-.5A1.5 1.5 0 0 0 9.5 1h-3zm0 1h3a.5.5 0 0 1 .5.5V3H6v-.5a.5.5 0 0 1 .5-.5z"/>
                        <path
                            d="M0 12.5A1.5 1.5 0 0 0 1.5 14h13a1.5 1.5 0 0 0 1.5-1.5V6.85L8.129 8.947a.5.5 0 0 1-.258 0L0 6.85v5.65z"/>
                    </svg>
                    <span>My work</span></a></li>
        </ul>
    </nav><!-- .nav-menu -->

</header><!-- End Header -->

<section id="hero" class="d-flex flex-column justify-content-center">
    <div class="container" data-aos="zoom-in" data-aos-delay="100">
        <div class="row">
            <center style="padding-right: 150px">

                <div class="col">
                    <span style="font-size: 100px;font-weight: bold;color: #3F3F3F" id="myElement">

                    </span>

                    <p style="color: #C4C4C4;font-size: 20px;">EVERYTHING YOU NEED TO KNOW IN MY PERSONAL PORTFOLIO
                        <span
                            class="typed"
                            data-typed-items="Designer, Developer, Freelancer, Photographer"></span>
                    </p>
                </div>
                <div class="social-links">
                    <a href="{{url('https://www.figma.com/file/ciQDnMBthX2u9ejuBgnPEP/portfolio?node-id=0%3A1')}}"
                       class="twitter"><i class="bi bi-linkedin"></i></a>
                    <a href="#" class="facebook"><i class="bi bi-github"></i></a>
                    <a href="#" class="instagram"><i class="bi bi-google"></i></a>
                    <a href="#" class="google-plus"><i class="bi bi-facebook"></i></a>
                    <a href="#" class="linkedin"><i class="bi bi-instagram"></i></a>
                </div>
            </center>
        </div>
    </div>
</section><!-- End Hero -->

<section id="about" class="d-flex flex-column justify-content-center">
    <div class="container" data-aos="zoom-in" data-aos-delay="100">
        <div class="row">
            <div class="col-1">
            </div>
            <div class="col-5">
                <img src="{{asset('profile.jpg')}}">
            </div>
            <div class="col-3" style="margin-top: 6%;">
                <h1 style="font-size: 65px;font-weight: bold;color: #3F3F3F;padding-left: 10%;" >
                    My<br>
                    <span style="color: #FFA800;font-weight: bold;" id="Story"></span></h1>
                <p style="text-align: justify;padding-left: 10%; "> Lorem Ipsum is simply dummy text of the printing
                    and
                    typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the
                    1500s,
                    when an unknown printer took a galley of type and scrambled it to make a type specimen bookLorem
                    Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the
                    industry's standard dummy text ever since the 1500s, when an unknown </p>
            </div>
        </div>
    </div>
</section><!-- End Hero -->

<section id="resume" class="d-flex flex-column justify-content-center">
    <div class="container" data-aos="zoom-in" data-aos-delay="100">
        <div class="row">
            <div class="col-6">
                <h1 style="font-size: 65px;font-weight: bold;color: #3F3F3F">Skill&<br><span
                        style="color: #FFA800;font-weight: bold;">Experience</span></h1>
                <p style="text-align: justify;">Contrary to popular belief, Lorem Ipsum is not simply random text. It
                    has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old.
                    Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the
                    more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of
                    the word in classical literature, discovered the undoubtable source. Lorem Ipsum comes from sections
                    1.10.32 and 1.10.33 of "de Finibus Bonorum et Malorum" </p>
            </div>
            <div class="col">
                <br>
                <h6 style="text-transform: uppercase;margin-top: 10px">html css js</h6>
                <div class="progress">
                    <div class="progress-bar progress-bar-striped bg-dark" role="progressbar" style="width: 80%"
                         aria-valuenow="10" aria-valuemin="0" aria-valuemax="100"></div>
                </div>

                <h6 style="text-transform: uppercase;margin-top: 10px">python</h6>
                <div class="progress">
                    <div class="progress-bar progress-bar-striped bg-dark" role="progressbar" style="width: 85%"
                         aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                </div>

                <h6 style="text-transform: uppercase;margin-top: 10px">java</h6>
                <div class="progress">
                    <div class="progress-bar progress-bar-striped bg-dark" role="progressbar" style="width: 70%"
                         aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                </div>

                <h6 style="text-transform: uppercase;margin-top: 10px">laravel</h6>
                <div class="progress">
                    <div class="progress-bar progress-bar-stsriped bg-dark" role="progressbar" style="width: 5%"
                         aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
                </div>

                <h6 style="text-transform: uppercase;margin-top: 10px">UX/UI</h6>
                <div class="progress">
                    <div class="progress-bar progress-bar-striped bg-warning" role="progressbar" style="width: 100%"
                         aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
                </div>

                <h6 style="text-transform: uppercase;margin-top: 10px">Photography</h6>
                <div class="progress">
                    <div class="progress-bar progress-bar-striped bg-dark" role="progressbar" style="width: 85%"
                         aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
                </div>
                <br>
            </div>
        </div>

        <div class="row">
            <div class="col-sm-6">
                <a href="https://www.modernist.life/">
                    <div class="card">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-3"><img src="{{asset('songsue.svg')}}">
                                </div>
                                <div class="col"><br>
                                    <h1 style="font-size: 30px;font-weight: bold;color: #3F3F3F">CONTENT WRITING</h1>
                                    <p class="">Songsue Media Lab พนักงานอิสระ<br>
                                        ต.ค. 2019 - ก.พ.2022 · 2 ปี 5 เดือน</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </a>
            </div>

            <div class="col-sm-6">
                <a href="https://gdsc.community.dev/thammasat-university/">
                    <div class="card">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-3"><img src="{{asset('google.svg')}}">
                                </div>

                                <div class="col"><br>
                                    <h1 style="font-size: 30px;font-weight: bold;color: #3F3F3F">UX/UI</h1>
                                    <p class="">Google Developer Student Clubs เต็มเวลา<br>
                                        พ.ย. 2021 - ปัจจุบัน · 4 เดือน</p>
                                </div>

                            </div>
                        </div>
                    </div>
                </a>
            </div>
        </div>
    </div>
</section><!-- End Hero -->

<!-- ======= Portfolio Section ======= -->
<section id="portfolio" class="portfolio section-bg">
    <div class="container" data-aos="fade-up">

        <div class="section-title">
            <h2>My work</h2>
        </div>
        <div class="row portfolio-container" data-aos="fade-up" data-aos-delay="200">
            <div class="col col-md-6 portfolio-item filter-app">
                <a href="{{'/blogs'}}">
                    <div class="portfolio-wrap">
                        <img src="{{asset('portfolio/myport1.png')}}" class="img-fluid" alt="">
                        <div class="portfolio-info">
                            <h4>Mobile Design</h4>

                        </div>
                    </div>
                </a>
            </div>
            <div class="col col-md-6 portfolio-item filter-web">
                <a href="{{'/blogs'}}">
                    <div class="portfolio-wrap">
                        <img src="{{asset('portfolio/myport2.png')}}" class="img-fluid" alt="">
                        <div class="portfolio-info">
                            <h4>Web Design</h4>
                        </div>
                    </div>
                </a>
            </div>
        </div>
    </div>

</section><!-- End Portfolio Section -->
<footer id="footer">
    <div class="container">
        <div class="row">
            <div class="col-4">
            </div>
            <div class="col-1">
                <a href="https://www.linkedin.com/in/thanachot-wongmetin-94bb49210/">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                         class="bi bi-linkedin" viewBox="0 0 16 16">
                        <path
                            d="M0 1.146C0 .513.526 0 1.175 0h13.65C15.474 0 16 .513 16 1.146v13.708c0 .633-.526 1.146-1.175 1.146H1.175C.526 16 0 15.487 0 14.854V1.146zm4.943 12.248V6.169H2.542v7.225h2.401zm-1.2-8.212c.837 0 1.358-.554 1.358-1.248-.015-.709-.52-1.248-1.342-1.248-.822 0-1.359.54-1.359 1.248 0 .694.521 1.248 1.327 1.248h.016zm4.908 8.212V9.359c0-.216.016-.432.08-.586.173-.431.568-.878 1.232-.878.869 0 1.216.662 1.216 1.634v3.865h2.401V9.25c0-2.22-1.184-3.252-2.764-3.252-1.274 0-1.845.7-2.165 1.193v.025h-.016a5.54 5.54 0 0 1 .016-.025V6.169h-2.4c.03.678 0 7.225 0 7.225h2.4z"/>
                    </svg>
                </a>

            </div>
            <div class="col-1">
                <a href="https://github.com/ThanachotD">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                         class="bi bi-github" viewBox="0 0 16 16">
                        <path
                            d="M8 0C3.58 0 0 3.58 0 8c0 3.54 2.29 6.53 5.47 7.59.4.07.55-.17.55-.38 0-.19-.01-.82-.01-1.49-2.01.37-2.53-.49-2.69-.94-.09-.23-.48-.94-.82-1.13-.28-.15-.68-.52-.01-.53.63-.01 1.08.58 1.23.82.72 1.21 1.87.87 2.33.66.07-.52.28-.87.51-1.07-1.78-.2-3.64-.89-3.64-3.95 0-.87.31-1.59.82-2.15-.08-.2-.36-1.02.08-2.12 0 0 .67-.21 2.2.82.64-.18 1.32-.27 2-.27.68 0 1.36.09 2 .27 1.53-1.04 2.2-.82 2.2-.82.44 1.1.16 1.92.08 2.12.51.56.82 1.27.82 2.15 0 3.07-1.87 3.75-3.65 3.95.29.25.54.73.54 1.48 0 1.07-.01 1.93-.01 2.2 0 .21.15.46.55.38A8.012 8.012 0 0 0 16 8c0-4.42-3.58-8-8-8z"/>
                    </svg>
                </a>

            </div>
            <div class="col-1">
                <a href="https://gdsc.community.dev/thammasat-university/">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                         class="bi bi-google" viewBox="0 0 16 16">
                        <path
                            d="M15.545 6.558a9.42 9.42 0 0 1 .139 1.626c0 2.434-.87 4.492-2.384 5.885h.002C11.978 15.292 10.158 16 8 16A8 8 0 1 1 8 0a7.689 7.689 0 0 1 5.352 2.082l-2.284 2.284A4.347 4.347 0 0 0 8 3.166c-2.087 0-3.86 1.408-4.492 3.304a4.792 4.792 0 0 0 0 3.063h.003c.635 1.893 2.405 3.301 4.492 3.301 1.078 0 2.004-.276 2.722-.764h-.003a3.702 3.702 0 0 0 1.599-2.431H8v-3.08h7.545z"/>
                    </svg>
                </a>
            </div>

            <div class="col-1">
                <a href="https://www.facebook.com/profile.php?id=100005890065983">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                         class="bi bi-facebook" viewBox="0 0 16 16">
                        <path
                            d="M16 8.049c0-4.446-3.582-8.05-8-8.05C3.58 0-.002 3.603-.002 8.05c0 4.017 2.926 7.347 6.75 7.951v-5.625h-2.03V8.05H6.75V6.275c0-2.017 1.195-3.131 3.022-3.131.876 0 1.791.157 1.791.157v1.98h-1.009c-.993 0-1.303.621-1.303 1.258v1.51h2.218l-.354 2.326H9.25V16c3.824-.604 6.75-3.934 6.75-7.951z"/>
                    </svg>
                </a>

            </div>
            <div class="col-1">
                <a href="https://www.instagram.com/thanachot_tnc/">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                         class="bi bi-instagram" viewBox="0 0 16 16">
                        <path
                            d="M8 0C5.829 0 5.556.01 4.703.048 3.85.088 3.269.222 2.76.42a3.917 3.917 0 0 0-1.417.923A3.927 3.927 0 0 0 .42 2.76C.222 3.268.087 3.85.048 4.7.01 5.555 0 5.827 0 8.001c0 2.172.01 2.444.048 3.297.04.852.174 1.433.372 1.942.205.526.478.972.923 1.417.444.445.89.719 1.416.923.51.198 1.09.333 1.942.372C5.555 15.99 5.827 16 8 16s2.444-.01 3.298-.048c.851-.04 1.434-.174 1.943-.372a3.916 3.916 0 0 0 1.416-.923c.445-.445.718-.891.923-1.417.197-.509.332-1.09.372-1.942C15.99 10.445 16 10.173 16 8s-.01-2.445-.048-3.299c-.04-.851-.175-1.433-.372-1.941a3.926 3.926 0 0 0-.923-1.417A3.911 3.911 0 0 0 13.24.42c-.51-.198-1.092-.333-1.943-.372C10.443.01 10.172 0 7.998 0h.003zm-.717 1.442h.718c2.136 0 2.389.007 3.232.046.78.035 1.204.166 1.486.275.373.145.64.319.92.599.28.28.453.546.598.92.11.281.24.705.275 1.485.039.843.047 1.096.047 3.231s-.008 2.389-.047 3.232c-.035.78-.166 1.203-.275 1.485a2.47 2.47 0 0 1-.599.919c-.28.28-.546.453-.92.598-.28.11-.704.24-1.485.276-.843.038-1.096.047-3.232.047s-2.39-.009-3.233-.047c-.78-.036-1.203-.166-1.485-.276a2.478 2.478 0 0 1-.92-.598 2.48 2.48 0 0 1-.6-.92c-.109-.281-.24-.705-.275-1.485-.038-.843-.046-1.096-.046-3.233 0-2.136.008-2.388.046-3.231.036-.78.166-1.204.276-1.486.145-.373.319-.64.599-.92.28-.28.546-.453.92-.598.282-.11.705-.24 1.485-.276.738-.034 1.024-.044 2.515-.045v.002zm4.988 1.328a.96.96 0 1 0 0 1.92.96.96 0 0 0 0-1.92zm-4.27 1.122a4.109 4.109 0 1 0 0 8.217 4.109 4.109 0 0 0 0-8.217zm0 1.441a2.667 2.667 0 1 1 0 5.334 2.667 2.667 0 0 1 0-5.334z"/>
                    </svg>
                </a>

            </div>
        </div>

        <br>
        <div class="copyright">
            &copy; Copyright. All Rights Reserved
        </div>
        <div class="credits">
            by <a>Thaanchot</a>
        </div>
    </div>
</footer><!-- End Footer -->
<script>
    new TypeIt("#myElement", {
        speed: 50,
    }).type("DESIGN.")
        .pause(1000)
        .delete(null, {delay: 2000})
        .type("WEB DEVELOPER.", {delay: 2000})
        .delete(null, {delay: 1000})
        .type("PHOTOGRAPHY.")
        .go();
    new TypeIt("#Story", {
        speed: 50,
    }).type("Story")
        .pause(1000)
        .go();
</script>
</body>
</html>
