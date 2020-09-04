@extends('includes.main')

@section('pageSpecificStyles')
    <style type="text/css">

    </style>
@endsection
@section('pageSpecificContent')

    <section class="hero">
        <div class="container-fluid">
            <div class="hero-messages">
                <h1>This is main message</h1>
                <p>This is sub headings</p>
            </div>
        </div>
    </section>

    <main>

        <section class="container-fluid">
            <div class="section-content">
                <div class="intro-image-container">
                    <img style="border-radius: 1rem" src="{{\Illuminate\Support\Facades\URL::asset('myAssets/images/home/intro.jpg')}}">
                </div>
                <div class="intro-text-container">
                    <div class="intro-text">
                        <h1>Who We Are</h1>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aperiam, assumenda atque corporis
                            culpa dicta dolorum inventore iste magnam maiores minima nisi obcaecati odit optio
                            perferendis quo veniam voluptatum. Dolorum, perferendis.</p>

                        <button class="btn btn-warning">Read More</button>

                    </div>
                </div>
            </div>
        </section>

        <section class="container-fluid">
            <h3 class="section-heading">Latest work</h3>
            <div class="section-content ">
                <div class="row">

                    <div class="col-md-4">
                        <div class="project-box" style="background: linear-gradient(135deg, rgba(154, 114, 199, 0.84), rgba(160, 111, 200, 0.88)) ,url('myAssets/images/project/1.png') top no-repeat ;
                    background-size: cover;">
                            <div class="project-box-content">
                                <em class="fa fa-gear"></em>
                                <h6>Construction</h6>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aperiam facere fugiat iusto
                                    mollitia nisi possimus? Ab adipisci aliquid aperiam eos fugiat placeat rem
                                    reprehenderit, saepe. Doloribus ea molestiae officia quia.</p>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-4">
                        <div class="project-box" style="background: linear-gradient(135deg, rgba(154, 114, 199, 0.84), rgba(160, 111, 200, 0.88)) ,url('myAssets/images/project/1.png') top no-repeat ;
                    background-size: cover;">
                            <div class="project-box-content">
                                <em class="fa fa-gear"></em>
                                <h6>Project Planning</h6>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aperiam facere fugiat iusto
                                    mollitia nisi possimus? Ab adipisci aliquid aperiam eos fugiat placeat rem
                                    reprehenderit, saepe. Doloribus ea molestiae officia quia.</p>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-4">
                        <div class="project-box" style="background: linear-gradient(135deg, rgba(154, 114, 199, 0.84), rgba(160, 111, 200, 0.88)) ,url('myAssets/images/project/1.png') top no-repeat ;
                    background-size: cover;">
                            <div class="project-box-content">
                                <em class="fa fa-gear"></em>
                                <h6>Investments</h6>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aperiam facere fugiat iusto
                                    mollitia nisi possimus? Ab adipisci aliquid aperiam eos fugiat placeat rem
                                    reprehenderit, saepe. Doloribus ea molestiae officia quia.</p>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-4">
                        <div class="project-box" style="background: linear-gradient(135deg, rgba(154, 114, 199, 0.84), rgba(160, 111, 200, 0.88)) ,url('myAssets/images/project/1.png') top no-repeat ;
                    background-size: cover;">
                            <div class="project-box-content">
                                <em class="fa fa-gear"></em>
                                <h6>Investments</h6>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aperiam facere fugiat iusto
                                    mollitia nisi possimus? Ab adipisci aliquid aperiam eos fugiat placeat rem
                                    reprehenderit, saepe. Doloribus ea molestiae officia quia.</p>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-4">
                        <div class="project-box" style="background: linear-gradient(135deg, rgba(154, 114, 199, 0.84), rgba(160, 111, 200, 0.88)) ,url('myAssets/images/project/1.png') top no-repeat ;
                    background-size: cover;">
                            <div class="project-box-content">
                                <em class="fa fa-gear"></em>
                                <h6>Investments</h6>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aperiam facere fugiat iusto
                                    mollitia nisi possimus? Ab adipisci aliquid aperiam eos fugiat placeat rem
                                    reprehenderit, saepe. Doloribus ea molestiae officia quia.</p>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-4">
                        <div class="project-box" style="background: linear-gradient(135deg, rgba(154, 114, 199, 0.84), rgba(160, 111, 200, 0.88)) ,url('myAssets/images/project/1.png') top no-repeat ;
                    background-size: cover;">
                            <div class="project-box-content">
                                <em class="fa fa-gear"></em>
                                <h6>Investments</h6>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aperiam facere fugiat iusto
                                    mollitia nisi possimus? Ab adipisci aliquid aperiam eos fugiat placeat rem
                                    reprehenderit, saepe. Doloribus ea molestiae officia quia.</p>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </section>

        <div class="container-fluid counter ">
            <div class="row" style="background: rgb(166,68,201);
background: radial-gradient(circle, rgba(166,68,201,1) 0%, rgba(217,110,231,1) 100%);">
                <div class="container">
                    <div class="row text-center p-5">

                        <div class="col-md-4 counter-box">
                            <div class="counter-icon-container">
                                <em class="text-white fa fa-user"></em>
                            </div>
                            <h3 class="counter-number">500</h3>
                            <h5>Customers</h5>
                        </div>

                        <div class="col-md-4 counter-box">
                            <div class="counter-icon-container">
                                <em class="text-white fa fa-landmark"></em>
                            </div>
                            <h3 class="counter-number">150</h3>
                            <h5>Branches</h5>
                        </div>

                        <div class="col-md-4 counter-box">
                            <div class="counter-icon-container">
                                <em class="text-white fa fa-user-clock"></em>
                            </div>
                            <h3 class="counter-number">1500</h3>
                            <h5>Employees</h5>
                        </div>

                    </div>
                </div>

            </div>
        </div>


        <section class="container-fluid">
            <div class="section-content testimonial-section">
                <div class="testimonial-intro">
                    <h3>What client says about us</h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. A alias, aspernatur delectus dolores,
                        facere facilis inventore ipsa iusto nobis odit pariatur quam quos recusandae repudiandae sequi
                        totam veniam voluptatem voluptatibus.</p>
                </div>
                <div class="testimonial-view-port owl-carousel owl-theme">

                    <div class="sinhala-testimonial item">
                        <img src="{{\Illuminate\Support\Facades\URL::asset('myAssets/images/testimonial/1.jpg')}}">
                        <h5>This is a great companly</h5>
                        <p>martin luther king</p>
                        <p>Director of fdf</p>
                    </div>

                    <div class="sinhala-testimonial item">
                        <img src="{{\Illuminate\Support\Facades\URL::asset('myAssets/images/testimonial/1.jpg')}}">
                        <h5>This is a great companly</h5>
                        <p>martin luther king</p>
                        <p>Director of fdf</p>
                    </div>

                    <div class="sinhala-testimonial item">
                        <img src="{{\Illuminate\Support\Facades\URL::asset('myAssets/images/testimonial/1.jpg')}}">
                        <h5>This is a great companly</h5>
                        <p>martin luther king</p>
                        <p>Director of fdf</p>
                    </div>

                    <div class="sinhala-testimonial item">
                        <img src="{{\Illuminate\Support\Facades\URL::asset('myAssets/images/testimonial/1.jpg')}}">
                        <h5>This is a great companly</h5>
                        <p>martin luther king</p>
                        <p>Director of fdf</p>
                    </div>

                    <div class="sinhala-testimonial item">
                        <img src="{{\Illuminate\Support\Facades\URL::asset('myAssets/images/testimonial/1.jpg')}}">
                        <h5>This is a great companly</h5>
                        <p>martin luther king</p>
                        <p>Director of fdf</p>
                    </div>

                    <div class="sinhala-testimonial item">
                        <img src="{{\Illuminate\Support\Facades\URL::asset('myAssets/images/testimonial/1.jpg')}}">
                        <h5>This is a great companly</h5>
                        <p>martin luther king</p>
                        <p>Director of fdf</p>
                    </div>

                    <div class="sinhala-testimonial item">
                        <img src="{{\Illuminate\Support\Facades\URL::asset('myAssets/images/testimonial/1.jpg')}}">
                        <h5>This is a great companly</h5>
                        <p>martin luther king</p>
                        <p>Director of fdf</p>
                    </div>

                    <div class="sinhala-testimonial item">
                        <img src="{{\Illuminate\Support\Facades\URL::asset('myAssets/images/testimonial/1.jpg')}}">
                        <h5>This is a great companly</h5>
                        <p>martin luther king</p>
                        <p>Director of fdf</p>
                    </div>

                </div>
            </div>
        </section>

        <section class="container-fluid">
            <h3 class="section-heading">What we do</h3>
            <div class="section-content services-container">

                <img id="services-image"
                     src="{{\Illuminate\Support\Facades\URL::asset('myAssets/images/service/1.png')}}">
                <div class="service-box service1">
                    <div class="service-box-content">
                        <em class="fa fa-gear"></em>
                        <h6>Construction</h6>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aperiam facere fugiat iusto
                            mollitia nisi possimus.</p>
                    </div>
                </div>

                <div class="service-box service2">
                    <div class="service-box-content">
                        <em class="fa fa-gear"></em>
                        <h6>Construction</h6>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aperiam facere fugiat iusto
                            mollitia nisi possimus.</p>
                    </div>
                </div>

                <div class="service-box service3">
                    <div class="service-box-content">
                        <em class="fa fa-gear"></em>
                        <h6>Construction</h6>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aperiam facere fugiat iusto
                            mollitia nisi possimus.</p>
                    </div>
                </div>

                <div class="service-box service4">
                    <div class="service-box-content">
                        <em class="fa fa-gear"></em>
                        <h6>Construction</h6>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aperiam facere fugiat iusto
                            mollitia nisi possimus.</p>
                    </div>
                </div>

            </div>
        </section>


    </main>
    <footer>
        <div class="footer-content">
            <section>
                <h4>Logo</h4>
            </section>
            <section>
                <h4>Link</h4>
                <p>Home</p>
                <p>Services</p>
                <p>Projects</p>
                <p>About</p>
                <p>Contact</p>
            </section>

            <section>
                <h4>Contact</h4>
                <p>NO:32/1 A, Buddaloka mw,suwarapola ,piliyandala</p>
                <p>0717275539</p>
            </section>
        </div>
        <div class="copy-right-container">
            Designed & Developed by <a target="_blank" href="https://webdevelopersl.com/">Harshadeva Priyankara
                Bandara</a>
        </div>
    </footer>
@endsection
@section('pageSpecificScript')
    <script>

        $(document).ready(function () {
//            var owl = $('.testmonial_active');
//            owl.trigger('stop.owl.autoplay');

            $('.counter-number').counterUp({
                delay: 10,
                time: 1000
            });

            $('.owl-carousel').owlCarousel({
                items: 1,
                nav: true,
                autoplay: true,
                autoplayTimeout: 5000,
                autoplayHoverPause: false,
                loop:true,
            })

        });

    </script>
@endsection