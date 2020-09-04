<link rel="stylesheet" href="{{\Illuminate\Support\Facades\URL::asset('plugins/animation/animation.css')}}">

<!-- Bootstrap -->
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">

<!-- fontawesome solid (version 6) -->
<script src="https://kit.fontawesome.com/b4826276e2.js" crossorigin="anonymous"></script>

<!-- Owl carousel -->
{{--<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" integrity="sha512-tS3S5qG0BlhnQROyJXvNjeEM4UpMXHrQfTGmbQ1gKmelCxlSEBUaxhRBj/EFTzpbP4RVSrpEikbmdJobCvhE3g==" crossorigin="anonymous" />--}}
<link rel="stylesheet" href="{{\Illuminate\Support\Facades\URL::asset('plugins/OwlCarousel/dist/assets/owl.carousel.min.css')}}">
<link rel="stylesheet" href="{{\Illuminate\Support\Facades\URL::asset('plugins/OwlCarousel/dist/assets/owl.theme.default.min.css')}}">

<style>
    /* Remove initial styles  : START*/

    *,
    *::before,
    *::after{
        margin: 0;
        padding: 0;
        box-sizing: border-box;
    }

    body{
        font-family: 'Nunito',sans-serif;
        font-size: 10px;
    }

    a{
        text-decoration: none;
    }

    /* Remove initial styles  : END */

    /*common styles for consistence :START */
    .btn{
        border-radius: 1rem;
    }
    /*common styles for consistence :END*/

    /*nav bar ;START*/

    .nav-bar{
        font-size: 1rem;
        display: flex;
        list-style: none;
        justify-content: space-between;
        position: absolute;
        z-index: 2;
        width: 90vw;
        margin:10vh 5vw 0 5vw;
        padding: 1rem;
        background-color: #ffffffc9;
        box-shadow: #1b1e21;
        border-radius: 1rem;
    }

    .nav-links{
        display: flex;
        margin-left: auto;
       align-items: center;
    }

    .nav-links li{
        padding: 0 2rem;
        color: #1b4b72;
    }

    /*nav-ber :END */

    /* hero :START */
    .hero{
        height: 100vh;
        width: 100%;
        background: linear-gradient(135deg, rgba(29, 104, 167, 0), rgba(70, 130, 133, 0.69)) ,url("myAssets/images/home/hero.png") center  no-repeat;
        background-size: cover;
        position: relative;
    }

    .hero-messages{
        color: #ffffff;
        display: flex;
        flex-direction: column;
        position: absolute;;
        font-size: 2rem;
        top: 70%;
        left:50%;
        transform: translate(-50%,-70%);
        align-items: center;

    }
    /* hero :END */


    main section{
        display: flex;
        padding-top: 5rem;
        flex-direction: column;
        align-items: center;
    }

    .section-heading{
        font-size: 2.3rem;
        color: rgba(0, 0, 0, 0.61);
        position: relative;
    }

    .section-heading::after{
        content: "";
        position: absolute;
        width: 100%;
        height: 0.6rem;
        background-color: #b7bbbf;
        bottom: -0.7rem;
        left: 0;
        border-radius: 2rem;
    }

    .section-content{
        margin-top: 3rem;
        font-size: 1rem;
        width: 90vw;
        display: flex;
    }

    /* intro :START */

    .intro-text-container{
        display: flex;
        flex-direction: column;
        align-items: center;
    }

    .intro-text{
        display: flex;
        width: 90%;
        flex-direction: column;
        align-items: flex-start;
    }

    /* intro :END */

    /* project :START */

    .project-box{
        border: 1px #9c9c9c solid;
        display:flex;
        flex-direction: column;
        align-items: center;
        justify-content: center;
        width: 100%;
        height: 400px;
        margin-top: 1.8rem;
        overflow: hidden;
    }

    .project-box-content{
        width: 90%;
        display: flex;
        flex-direction: column;
    }

    .project-box em{
        font-size: 1rem;
        color: orangered;
        align-self: center;
        padding: 2rem;
    }

    .project-box h6{
        font-size: 1.5rem;
        color: white;
    }

    .project-box p{
        font-size: 1rem;
        color: white;
    }

    /* project :END */

    /* testimonial :START */

    .testimonial-intro{
        display: flex;
        flex-direction: column;
        align-items: center;
        flex: 3;
    }

    .testimonial-intro h3{
        margin-top: 20%;
        font-size: 2.5rem;
    }

    .testimonial-view-port{
        display: flex;
        flex-direction: column;
        align-items: center;
        justify-content: center;
        flex: 2;
        height: 60vh;
        border-radius: 2rem;
        border-left: 0.5rem solid #9c9c9c;
        border-right: 0.5rem solid #9c9c9c;
        text-align: center;
        overflow: hidden;

    }


    .testimonial-view-port .owl-nav{
        display: none;
    }

    .testimonial-view-port .item img{
        width: 10rem;
        height: 10rem;
        border-radius: 50%;
        border: 1px solid deeppink;
        margin-top:10% ;
        display: inline-flex;
    }

    .testimonial-view-port .item h5{
        margin-top:5% ;
    }

    .testimonial-view-port .item h5::before{
       content: open-quote;
    }

    .testimonial-view-port .item h5::after{
        content: close-quote;
    }

    .testimonial-view-port .item p{
       margin:0;
    }

    /* testimonial :END */

    /* services :START */

    .services-container{
        display:grid;
        grid-template-columns:1fr 2fr 1fr;
        grid-template-rows:250px 250px;
        padding-bottom: 6rem;
    }

    .service-box{
        display:flex;
        flex-direction: column;
        align-items: center;
        justify-content: center;
        width: 350px;
        height: 200px;
        margin-top: 1.8rem;
        overflow: hidden;
        background: rgba(161, 161, 162, 0.48);
        background: linear-gradient(90deg, rgba(190, 190, 191, 0.13) 0%, rgba(221, 224, 224, 0.07) 100%);

    }

    .service-box-content{
        width: 90%;
        display: flex;
        align-items: center;
        flex-direction: column;
    }

    .service-box em{
        font-size: 1rem;
        color: orangered;
        align-self: center;
        padding: 0.5rem;
    }

    .service-box h6{
        font-size: 1.5rem;
        color: #91f2ff;
    }

    .service-box p{
        font-size: 1rem;
        color: #6697ff;
    }

    .service1{
        grid-column: 1/2;
        grid-row: 1/2;
    }

    .service2{
        grid-column: 3/4;
    }

    .service3{
        grid-column: 1/2;
    }

    .service4{
        grid-column: 3/4;
    }

    #services-image{
        grid-column: 2/3;
    }

    /* services :END */

    /* counter :START */

    .counter-icon-container {
        display: flex;
        justify-content: center;
        align-items:center;
        width: 4rem;
        height: 4rem;
        transform: rotate(45deg);
        border: 1px solid greenyellow;
    }

    .counter-icon-container em{
        transform: rotate(-45deg);
        font-size: 2rem;
    }

    .counter{
        margin-top: 6rem;
    }

    .counter-box{
        display: flex;
        flex-direction: column;
        align-items: center;
    }

    .counter-box h3{
        color: white;
        font-size: 4rem;
        padding: 3rem 0 0.7rem 0;
    }

    .counter-box h5{
        color: white;
    }
    /* counter :END */

    /* footer :START */

    footer{
        background-color: #001a46;
        height: 50vh;
        display: flex;
        flex-direction: column;
        align-items: center;
        position: relative;
    }

    .footer-content{
        width: 90%;
        display: flex;
        justify-content: space-between;
    }

    footer section{
        font-size: 1rem;
        color:white;
        margin-top: 5rem;
        display: flex;
        flex-direction: column;
        flex: 1;
        align-items: center
    }

    .copy-right-container{
        color: rgba(255, 255, 255, 0.59);
        position: absolute;
        bottom: 0px;
        width: 100%;
        font-size: 0.7rem;
        text-align: center;
        background-color: #001539;
    }


    /* footer :END */

    @media screen and (max-width: 1200px){
        #services-image{
           position: absolute;
            align-self: center;
            left:50%;
            transform: translateX(-50%);
            /*opacity: 0.8;*/
            z-index: -1;

        }

        .services-container{
            display:grid;
            grid-template-columns:1fr 1fr;
            grid-template-rows:250px 250px;
            padding-bottom: 6rem;
        }

        .testimonial-view-port .item{
            margin:0;
        }

        .nav-links li{
            padding: 0 1.4rem;
            color: #1b4b72;
        }
    }

    @media screen and (max-width: 768px){

        .nav-bar{
            margin:1vh 5vw 0 5vw;
            padding: .3rem;
            background-color: #ffffffc9;
            box-shadow: #1b1e21;
            border-radius: 1rem;
        }

        .nav-links.lg{
            display: none;
        }

        .nav-mobile{
            display: block!important;
            z-index: 2;
        }

        #mobileHamburger{
            border: none;
            outline: none;
            box-shadow:none;
            z-index: 10;
            position: absolute;
            right: 5%;
        }

        #mobileHamburger:focus{
            border: none;
            outline: none;
            border-radius: 0;
            box-shadow:none;
        }

        #mobileHamburger.open{
            color: #fbfdff;
        }

        .nav-links-mobile{
            display: flex;
            pointer-events: all;
            position: fixed;
            background: #1d68a7;
            width: 100%;
            top:0;
            left: 0;
            color: white;
            line-height: 3rem;
            height: 100vh;
            justify-content: center;
            align-items: center;
            flex-direction: column;
            clip-path: circle(100px at 90% -30%);
            -webkit-clip-path: circle(100px at 90% -30%);
            transition: all 1s ease-out;
        }

        .nav-mobile li{
            margin-top: 6%;
        }

        .nav-links-mobile.open{
            clip-path: circle(1500px at 90% -30%);
            -webkit-clip-path: circle(1500px at 90% -30%);
        }

        .nav-links-mobile li{
            opacity: 0;
        }

        .nav-links-mobile li a{
            color: white;
        }

        .nav-links-mobile li:nth-child(1){
           transition: all 0.5s ease 0.1s ;
        }

        .nav-links-mobile li:nth-child(2){
            transition: all 0.5s ease 0.2s ;
        }

        .nav-links-mobile li:nth-child(3){
            transition: all 0.5s ease 0.3s ;
        }

        .nav-links-mobile li:nth-child(4){
            transition: all 0.5s ease 0.4s ;
        }

        .nav-links-mobile li:nth-child(5){
            transition: all 0.5s ease 0.5s ;
        }

        .nav-links-mobile li.fade{
            opacity: 1;
        }


        /* hero :START */

        .hero-messages{
            color: #ffffff;
            display: flex;
            flex-direction: column;
            position: absolute;;
            font-size: 2rem;
            justify-content: center;
            align-items: center;
            width: 90vw;

        }
        /* hero :END */



        .intro-image-container{
            order: 2;
            display: none;
        }

        .intro-text{
            display: flex;
            width: 90%;
            flex-direction: column;
            align-items: flex-start;
        }


        /* service :START */

        #services-image{
            display: none;
        }


        .services-container{
            display:flex;
            flex-direction: column;
            align-items: center;
            padding-bottom: 2rem;
        }

        .service-box{
            display:flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            width: 350px;
            height: auto;
            overflow: hidden;
            background: rgba(161, 161, 162, 0.48);
            background: linear-gradient(90deg, rgba(190, 190, 191, 0.13) 0%, rgba(221, 224, 224, 0.07) 100%);

        }

        .service1{
           width: 100%;
        }

        .service2{
            width: 100%;

        }

        .service3{
            width: 100%;
        }

        .service4{
            width: 100%;
        }
        /* service :END */

        /* counter :START */

        .counter{
            margin-top: 2rem;
        }

        .counter-box{
            display: flex;
            flex-direction: column;
            align-items: center;
        }

        .counter-box h3{
            color: white;
            font-size: 4rem;
            padding: 1rem 0 0 0;
        }

        .counter-box h5{
            color: #f3faff;
            padding:0 0 3rem 0;
        }
        /* counter :END */

        /* testimonial :START */

        .testimonial-section{
            display: flex;
            flex-direction: column;
            align-items: center;
            padding-bottom: 4rem;
        }

        .testimonial-intro{
            display: flex;
            flex-direction: column;
            align-items: center;
        }

        .testimonial-intro h3{
            margin-top: 5%;
            font-size: 2.5rem;
        }

        .testimonial-view-port{
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            height: 80vh;
            border-radius: 2rem;
            border-left: none;
            border-right:none;
            text-align: center;
            overflow: hidden;

        }

        .testimonial-view-port .item{
            margin:0;
        }

        /* testimonial :END */
    }

    @media screen and (max-width: 306px){
        .logo{
            display: none;
        }
    }

</style>