<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="Content-Type" content="text/html;charset=UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta http-equiv="Cache-control" content="public">   
    <meta name="theme-color" content="#0CB4FF"> 
    <meta name="robots" content="index, follow">

    @yield("meta_head")

    <link rel="stylesheet" href="{{ asset('/assets/style/fa-all.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('/assets/style/tabler.min.css') }}" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Nunito&family=Poppins:ital,wght@0,100;1,200&family=Roboto:ital@1&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('/assets/style/aos.css')}}" />
 
    @yield("sc_head")

    <style>
        .onfocus:focus{            
            outline:2px solid lightblue;
        }

        .title-section {
            font-size:50px;
            text-align:center;
            font-weight:bold;
        }

        /* BODY */
            body{
                background-color: #fff;
                font-family: 'Nunito', sans-serif;
            }
        /* BODY */

        /* BUTTON SIGNIN AND SIGNUP */
            .button-signin{
                border:0px solid black;
                background:#021929;
                padding-top:10px;
                padding-bottom:10px;
                padding-left:20px;
                padding-right:20px;
                border-radius:20px;
                color:white;
                font-size:12px;
                transition: background-color 0.5s,box-shadow 0.5s;
                text-decoration: none;
            }

            .button-signin:hover{
                color:white;
                text-decoration:none;
                background: #021421;
                box-shadow: 0 0.5rem 1rem rgba(0,0,0,.180)!important;
            }

            .button-signup{
                border:0px solid black;
                padding-top:10px;
                padding-bottom:10px;
                padding-left:20px;
                padding-right:20px;
                border-radius:20px;
                color:#021421;
                font-size:12px;
                margin-left: 10px;
            }

            .button-signup:hover{
                text-decoration:none;
            }
        /* BUTTTON SIGNIN AND SIGNUP */

        /* FOOTER SECTION */
            .link-footer{
                color: lightgray;
                text-decoration:none;
                transition: color 0.5s;
            }

            .link-footer:hover{
                color:white;
                text-decoration:none;
            }
        /* FOOTER SECTION */    

        /* WHATSAPP BUTTON */
            .whatsapp-button{
                position:fixed;
                bottom:40px;
                right:10px;
                background-color: #19af67;
                width:200px;
                color:white;
                border-radius:10px;
                text-align:center;
                cursor:pointer;
                transition: background-color 0.5s,box-shadow 0.5s, display 1s;
            }

            .whatsapp-button:hover{
                background-color: #007556;
                text-decoration:none;
                color:white;
                box-shadow: 0 0.5rem 1rem rgba(0,0,0,.180)!important;
            }
        /* WHATSAPP BUTTON */

        /* TOP BUTTON */
            .top-button{
                position:fixed;
                bottom:120px;
                right:10px;
                background-color: #19af67;
                width:50px;
                color:white;
                border-radius:10px;
                text-align:center;
                cursor:pointer;
                display:none;
                transition: background-color 0.5s,box-shadow 0.5s,bottom 1s;
            }

            .top-button:hover{
                background-color: #007556;
                box-shadow: 0 0.5rem 1rem rgba(0,0,0,.180)!important;
            }
        /* TOP BUTTON */

        /* SCROLL BAR */
            ::-webkit-scrollbar {
                width: 5px;
                height: 5px;
            }

            ::-webkit-scrollbar-track {
                box-shadow: inset 0 0 5px grey;
                border-radius: 2px;
            }

            ::-webkit-scrollbar-thumb {
                background: #3abaf4;
                border-radius: 10px;
            }
        /* SCROLL BAR */

        /* DROPDOWN */
            .dropbtn {
                color : rgba(30,41,59,.7);
                font-weight:bold;    
            }

            .dropbtn:hover{
                background-color: #f1f1f1;
            }

            .dropdown-container {
                position: relative;
                display: inline-block;
            }

            .dropdown-content {
                display: none;
                position: absolute;
                background-color: #f9f9f9;
                min-width: 200px;
                box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
                z-index: 1;
            }

            .dropdown-content a {
                color: black;
                padding: 12px 16px;
                text-decoration: none;
                display: block;
            }

            .dropdown-content a:hover {
                background-color: #f1f1f1
            }

            .dropdown-container:hover .dropdown-content {
                display: block;
            }      
        /* DROPDOWN */

        /* LOADER */
            #container-loader{
                position:absolute;
                top:0px;
                bottom:0px;
                right:0px;
                left:0px;
                background:white;
                z-index:1002;
                display:block;
            }

            #loader{           
                position: absolute;
                top: 50vh;
                left: 50%;
                transform: translate(-50%, -50%);
                display: flex;
                align-items: center;            
                z-index: 1003
            }

            #loader > span{
                height: 25px;
                width: 25px;
                margin-right: 10px;
                border-radius: 50%;
                background-color: #4DE7A8;
                animation: loadingLoader 1s linear infinite;
            }
                        
            @keyframes loadingLoader {
                0%{
                    transform: translateX(0);
                }
                25%{
                    transform: translateX(15px);
                }
                50%{
                    transform: translateX(-15px);
                }
                100%{
                    transform: translateX(0);
                }                
            }

            #loader > span:nth-child(1){
                animation-delay: 0.1s;
            }
            #loader > span:nth-child(2){
                animation-delay: 0.2s;
            }
            #loader > span:nth-child(3){
                animation-delay: 0.3s;
            }
            #loader > span:nth-child(4){
                animation-delay: 0.4s;
            }
            #loader > span:nth-child(5){
                animation-delay: 0.5s;
            }
        /* LOADER */

        /* NAVBAR MOBILE */
            #navbar-mobile{
                position:fixed;
                top:0px;
                bottom:0px;
                right:0px;
                left:0px;
                display:none;
                z-index:2001;
            }
        /* NAVBAR MOBILE */
    </style>
</head>

<body>
    <div id="container-loader">
        <div id="loader">
            <span></span>
            <span></span>
            <span></span>
            <span></span>
            <span></span>
            <span></span>
        </div>
    </div> 

    <div id="container-content" style="display:none">            
        <!-- NAVBAR --> 
        <div class="navbar navbar-expand container-fluid py-3">
            <div class="container d-flex">
                <div>
                    <a href="{{url('/')}}"
                        class="onfocus">
                        <img src="{{asset('/images/logo/default.png')}}"
                            class="rounded"
                            style="width:50px">
                    </a>
                </div>

                <div class="navbar-collapse d-none d-lg-block d-xl-block">
                    <ul class="navbar-nav d-none d-lg-flex d-xl-flex">
                        <li class="nav-item">
                            <div class="dropdown-container">
                                <a class="nav-link dropbtn onfocus"
                                    tabindex="0">Fitur</a>
                                <div class="dropdown-content">
                                    <a href="{{url('/feature/purchaseing')}}">Pembelian</a>
                                    <a href="{{url('/feature/selling')}}">Penjualan</a>
                                    <a href="{{url('/feature/finance')}}">Akuntansi</a>
                                    <a href="{{url('/feature/inventory')}}">Inventory</a>
                                    <a href="{{url('/feature/manufactur')}}">Manufaktur</a>
                                    <a href="{{url('/feature/report')}}">Laporan</a>
                                </div>
                            </div>    
                        </li>
                        <li class="nav-item">
                            <a class="nav-link onfocus"  
                                href="{{url('/prices')}}">
                                <b>Harga</b>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link onfocus" 
                                href="{{url('/contact-us')}}">
                                <b>Hubungi Kami</b>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link onfocus" 
                                href="{{url('/refferal')}}">
                                <b>Partner</b>
                            </a>
                        </li>                    
                    </ul>
                </div>

                <div class="flex-grow-1 d-block d-lg-none d-xl-none">
                    <a href="{{url('/')}}" style="text-decoration:none"
                        tabindex="-1"
                        class="text-muted">
                        <b>{{config('setting.app_name')}}</b>
                    </a>
                </div>

                <div class="d-flex justify-content-around d-none d-lg-flex d-xl-flex">
                    <a href="{{env('FRONTEND_URL','http://localhost:3000')}}/signin" 
                        class="button-signin onfocus">
                        <i class="fa fa-sign-in"></i> Masuk
                    </a>

                    <a href="{{env('FRONTEND_URL','http://localhost:3000')}}/signup" 
                        class="button-signup onfocus">
                        <b>Daftar</b>
                    </a>
                </div>
                
                <button class="d-block d-xl-none d-lg-none"
                    onclick="showNavbarMobile()"
                    style="background:none;border:1px solid #f5f5f5;border-radius:5px">
                    <i class="fa-solid fa-bars fa-2x" style="color:lightgray"></i>
                </button>                 
            </div>
        </div>

            <!-- NAVBAR MOBILE --> 
                <div id="navbar-mobile">
                    <div class="row" 
                        style="height:100vh">               
                        <div class="col-10 p-4"
                            style="background:white">
                            <ul class="navbar-nav d-block">
                                <li class="nav-item mb-2"
                                    style="font-size:15px">
                                    <b> Navbar : </b>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link active" 
                                        href="#"
                                        tabindex="-1">
                                        Fitur
                                    </a>
                                    <div class="px-2">
                                        <ul class="navbar-nav d-block">
                                            <li class="nav-item">
                                                <a href="{{url('/feature/purchaseing')}}"
                                                    class="nav-link"
                                                    tabindex="-1">
                                                    Pembelian
                                                </a>
                                            </li>
                                            <li class="nav-item">
                                                <a href="{{url('/feature/selling')}}"
                                                    class="nav-link"
                                                    tabindex="-1">
                                                    Penjualan
                                                </a>
                                            </li>
                                            <li class="nav-item">
                                                <a href="{{url('/feature/finance')}}"
                                                    class="nav-link"
                                                    tabindex="-1">
                                                    Akuntansi
                                                </a>
                                            </li>
                                            <li class="nav-item">
                                                <a href="{{url('/feature/inventory')}}" 
                                                    class="nav-link"
                                                    tabindex="-1">
                                                    Inventory
                                                </a>
                                            </li>
                                            <li class="nav-item">
                                                <a href="{{url('/feature/manufactur')}}"
                                                    class="nav-link"
                                                    tabindex="-1">
                                                    Manufaktur
                                                </a>
                                            </li>
                                            <li class="nav-item">
                                                <a href="{{url('/feature/report')}}"
                                                    class="nav-link"
                                                    tabindex="-1">
                                                    Laporan
                                                </a>
                                            </li>
                                        </ul>                     
                                    </div>                       
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" 
                                        href="{{url('/prices')}}"
                                        tabindex="-1">
                                        <b>Harga</b>
                                    </a>
                                </li>
                                <li class="nav-item text-right">
                                    <a class="nav-link" 
                                        href="{{url('/contact-us')}}"
                                        tabindex="-1">
                                        <b>Hubungi Kami</b>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" 
                                        href="{{url('/refferal')}}"
                                        tabindex="-1">
                                        <b>Partner</b>
                                    </a>
                                </li>                    
                            </ul> 
                        </div>
                        <div class="col-2 text-center pt-2"
                            style="background:black;opacity:0.2"
                            onclick="showNavbarMobile()">
                            <i class="fa fa-xmark fa-2x" style="color:white"></i> 
                        </div>
                    </div>
                </div>
            <!-- NAVBAR MOBILE -->
        <!-- NAVBAR --> 

        @yield("content")

        <!-- FOOTER -->
        <div class="container-fluid py-5"
            style="min-height:400px;background:#1e2b32;color:white">
            <div class="container">
                <div class="row">
                    <div class="col-md-5">
                        <div class="py-3 px-2">
                            <a href="{{url('/')}}">
                                <img src="{{asset('/images/logo/default.png')}}"
                                    class="rounded"
                                    style="width:80px">
                            </a>
                        </div>

                        <div class="py-2"
                            style="font-size:12px">
                            <a href="https://api.whatsapp.com/send?phone={{str_replace('+','',str_replace(' ','',config('setting.phone')))}}" 
                                class="link-footer d-flex flex-row justify-content-around"
                                target="_blank">
                                <i class="fab fa-whatsapp flex-shrink-1 px-2"></i> 
                                <span class="flex-grow-1 px-1">
                                    {{config('setting.phone')}} (WA only)
                                </span>
                            </a>
                        </div>

                        <div class="py-2"
                            style="font-size:12px">
                            <a href="mailto:{{config('setting.email')}}"
                                class="link-footer d-flex flex-row justify-content-around"
                                rel="nofollow">
                                <i class="fa fa-envelope flex-shrink-1 px-2"></i> 
                                <span class="flex-grow-1 px-1">
                                    {{config('setting.email')}}
                                </span>
                            </a>
                        </div>

                        <div class="py-2"
                            style="font-size:12px">
                            <a href="https://www.google.com/maps/place/Sukoharjo,+Sawah,+Bulakrejo,+Kec.+Sukoharjo,+Kabupaten+Sukoharjo,+Jawa+Tengah+57551/@-7.6511281,110.8277021,19z/data=!3m1!4b1!4m12!1m6!3m5!1s0x0:0xd145165238100a94!2sPatung+Jamu+Sukoharjo!8m2!3d-7.6466423!4d110.8306396!3m4!1s0x2e7a3c34e0fb676f:0xc97ec5c562bdff12!8m2!3d-7.6511281!4d110.8282493"
                                class="link-footer d-flex flex-row justify-content-around"
                                target="_blank"> 
                                <i class="fa fa-map flex-shrink-1 px-2"></i> 
                                <span class="flex-grow-1 px-1">
                                    {{config('setting.address')}}
                                </span>
                            </a>
                        </div>

                        <div class="py-4 d-flex flex-row justify-content-between"
                            style="max-width:400px">
                            <a href="{{config('setting.account_facebook')}}" 
                                class="link-footer" 
                                target="_blank">
                                <i class="fab fa-facebook fa-2x"></i> 
                            </a>

                            <a href="{{config('setting.account_instagram')}}" 
                                class="link-footer" 
                                target="_blank">
                                <i class="fab fa-instagram  fa-2x"></i>
                            </a>

                            <a href="{{config('setting.account_twitter')}}" 
                                class="link-footer" 
                                target="_blank">
                                <i class="fab fa-twitter  fa-2x"></i>
                            </a>

                            <a href="{{config('setting.account_youtube')}}" 
                                class="link-footer" 
                                target="_blank">
                                <i class="fab fa-youtube  fa-2x"></i>
                            </a>

                            <a href="{{config('setting.account_tiktok')}}" 
                                class="link-footer" 
                                target="_blank">
                                <i class="fab fa-tiktok  fa-2x"></i>
                            </a>

                            <a href="{{config('setting.linkedin')}}" 
                                class="link-footer" 
                                target="_blank">
                                <i class="fab fa-linkedin  fa-2x"></i>
                            </a>
                        </div>
                    </div>
                    <div class="col-md-7 d-flex flex-row justify-content-evenly">
                        <div>
                            <b>Tentang Kami :</b>
                            <div class="my-2">
                                <a href="{{url('/about')}}" 
                                    class="link-footer">
                                    Tentang
                                </a>
                            </div>         
                            <div class="my-2">
                                <a href="{{url('/contact-us')}}"
                                    class="link-footer">
                                    Kontak Kami
                                </a>
                            </div>             
                        </div>

                        <div>
                            <b>Layanan Kami :</b>
                            <div class="my-2">
                                <a href="{{url('/prices')}}"
                                    class="link-footer">
                                    Perbandingan Harga
                                </a>
                            </div>                    

                            <div class="my-2">
                                <a href="{{url('/referral')}}"
                                    class="link-footer">
                                    Partner(Referal)
                                </a>
                            </div>

                            <div class="my-2">
                                <a href="{{url('/feature/purchaseing')}}"
                                    class="link-footer">
                                    Pembelian
                                </a>
                            </div>

                            <div class="my-2">
                                <a href="{{url('/feature/selling')}}"
                                    class="link-footer">
                                    Penjualan
                                </a>
                            </div>

                            <div class="my-2">
                                <a href="{{url('/feature/finance')}}"
                                    class="link-footer">
                                    Akuntansi
                                </a>
                            </div>

                            <div class="my-2">
                                <a href="{{url('/feature/inventory')}}"
                                    class="link-footer">
                                    Inventory
                                </a>
                            </div>

                            <div class="my-2">
                                <a href="{{url('/feature/manufactur')}}"
                                    class="link-footer">
                                    Manufaktur
                                </a>
                            </div>

                            <div class="my-2">
                                <a href="{{url('/feature/report')}}"
                                    class="link-footer">
                                    Laporan
                                </a>
                            </div>       
                        </div>
                    </div>
                </div>

                <hr/>

                <div class="d-flex flex-row justify-content-between">
                    <div class="flex-grow-1"
                        style="font-size:14px">
                        © 2021 
                        <a href="{{config('setting.company_website')}}" class="link-footer" style="color:white" target="_blank">
                            <b>{{config('setting.company_name')}}.</b>
                        </a>
                    </div>
                    <div class="d-flex flex-row justify-content-around flex-grow-1">
                        <a href="{{url('/terms-of-service')}}" class="link-footer">
                            Terms of service
                        </a>
                        <a href="{{url('/policy')}}"
                            class="link-footer">
                            Policy
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <!-- FOOTER -->

        <div class="py-3 px-2 top-button">
            <i class="fa fa-caret-up"></i>
        </div>

        <a href="https://api.whatsapp.com/send?phone={{str_replace('+','',str_replace(' ','',config('setting.phone')))}}&text=Hallo,Saya ingin bertanya tentang {{config('setting.company_name')}}." 
            class="py-3 px-2 whatsapp-button d-flex justify-content-around"
            target="_blank"
            tabindex="-1">
            <div><i class="fab fa-whatsapp fa-1x"></i> Butuh bantuan?</div>
            <div><i class="fa fa-xmark" id="whatsapp-button-hide"></i></div>
        </a>
    </div>

    <script src="{{ asset('/assets/js/tabler.min.js') }}"></script>
    <script src="{{ asset('/assets/js/aos.js') }}"></script>

    @yield("sc_footer")

    <script>
    // WINDOW SCROLL 
        function checkScroll(){
            let topButton = document.querySelector(".top-button");

            if(topButton){
                topButton.style.display = (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20)
                ? "block"
                : "none";
            }

            let navbar = document.querySelector(".navbar");

            if(navbar){
                if(document.body.scrollTop > 100 || document.documentElement.scrollTop > 100){
                    navbar.classList.add("fixed-top","shadow-sm");
                    navbar.style.zIndex = "1001";
                    navbar.style.background = "white";
                }else{
                    navbar.classList.remove("fixed-top","shadow-sm");
                    navbar.style.zIndex = "inherit";
                    navbar.style.background = "none";
                }
            }
        }

        window.addEventListener('scroll',checkScroll);

        checkScroll();
    // WINDOW SCROLL
        
    // TOP BUTTON 
        let topButton = document.querySelector(".top-button");

        topButton.addEventListener("click",function(event){
            window.scroll({
                top: 0,
                behavior: 'smooth'
            });
        });
    // TOP BUTTON   

    // WHATSAPP BUTTON 
    let whatsappButtonHide = document.getElementById("whatsapp-button-hide");

    whatsappButtonHide.addEventListener('click',function(event){
        event.preventDefault();

        let whatsappButton = document.querySelector(".whatsapp-button");
        whatsappButton.classList.add("d-none")

        let topButton = document.querySelector(".top-button");
        topButton.style.bottom = "40px";
    });

    // SHOW NAVBAR MOBILE
    function showNavbarMobile(){
        let navbarMobile = document.getElementById("navbar-mobile");

        if(navbarMobile.style.display === "block"){
            navbarMobile.style.display = "none";
            document.body.style.overflow = "auto";
        }else{
            navbarMobile.style.display = "block";
            document.body.style.overflow = "hidden";
        }
    }

    // ONLOAD
    window.onload = () => {
        document.getElementById("container-loader").style.display = "none";        
        document.getElementById("container-content").style.display = "block";

        AOS.init();
    };
    </script>
</body>
</html>