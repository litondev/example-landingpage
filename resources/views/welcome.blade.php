
@extends('layouts.default')

@section("meta_head")    
    <title>{{config('setting.app_name')}}</title>
    <link rel="shortcut icon" type="image/png" href="{{asset('/images/icon/default.png')}}">    
    <meta name="description" content="{{config('setting.description')}}">
    <meta property="og:title" content="{{config('setting.app_name')}}"/>
    <meta property="og:type" content="website" />
    <meta property="og:url" content="{{url('/')}}" />
    <meta property="og:description" content="{{config('setting.description')}}" />
    <meta property="og:image" content="{{asset('/images/icon/default.png')}}" />
@endsection

@section("sc_head")
    <style>    
    /* PACKAGE SECTION */
        .button-package{
            border:0px solid black;
            text-decoration: none !important; 
            background:#021929;
            padding-top:10px;
            padding-bottom:10px;
            padding-left:20px;
            padding-right:20px;
            border-radius:20px;
            color:white;
            font-size:12px;
            transition: background-color 0.5s,box-shadow 0.5s;
        }

        .button-package:hover{
            background: #021421;
            text-decoration:none;
            color: white;
            box-shadow: 0 0.5rem 1rem rgba(0,0,0,.180)!important;
        }
    /* PACKAGE SECTION */

    /* ABOUT SECTION */
        .button-about{
            padding-top:20px;
            padding-bottom:20px;
            padding-right:40px;
            padding-left:40px;
            background-color: #ffbe3d;
            color:white;
            border-radius:50px;
            border:0px solid black;
            transition: background-color 0.5s,box-shadow 0.5s;
        }

        .button-about:hover{
            color:white;
            text-decoration:none;
            background-color: #ffb117;
            box-shadow: 0 0.5rem 1rem rgba(0,0,0,.180)!important;
        }
    /* ABOUT SECTION */   

    /* FEATURE SECTION */
        .feature-card{
            transition: margin 0.5s;
        }

        .feature-card:hover{
            margin-top: 10px;
            box-shadow: 0 0.5rem 1rem rgba(0,0,0,.180)!important;                                  
        }

        .feature-title{
            font-size:20px;
            color:#021929;
        }
        
        .feature-text{
            font-size:18px
        }

        .feature-button{
            border:0px solid black;
            background:#021929;
            padding-top:10px;
            padding-bottom:10px;
            padding-left:20px;
            padding-right:20px;
            border-radius:20px;
            color:white;
            font-size:14px;
            font-weight:bold;
        }

        .feature-button:hover{
            background: #021421;
            text-decoration:none;
            color: white;
            box-shadow: 0 0.5rem 1rem rgba(0,0,0,.180)!important;                                  
        }
    /* FEATURE SECTION */  
    </style>
@endsection

@section("content")
    <!-- ABOUT --> 
    <div class="conatiner-fluid py-2 py-lg-5 py-xl-5">
        <div class="container">
            <div class="row">
                <div class="col-md-5">                  
                    <div style="font-size:50px;color:#021929"
                        class="pt-3"  
                        data-aos="fade-up"
                        data-aos-anchor-placement="bottom-bottom"
                        data-aos-delay="200">
                        Apa itu {{config('setting.app_name')}}? 
                    </div>

                    <div style="font-size:18px"
                        class="pt-3 pb-3 text-muted"
                        data-aos="fade-up"
                        data-aos-anchor-placement="bottom-bottom"
                        data-aos-delay="400">
                        Lorem Ipsum is simply dummy text of the printing and 
                        typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever 
                        since the 1500s, when an unknown printer took a galley of 
                        type and scrambled it to make a type specimen book
                    </div>

                    <div class="pt-4 pb-3" 
                        data-aos="fade-up"
                        data-aos-anchor-placement="bottom-bottom"
                        data-aos-delay="1000">
                        <a class="button-about onfocus"
                            href="{{env('FRONTEND_URL','http://localhost:3000')}}/signup">
                            <i class="fa fa-sign-in"></i> Coba gratis 15 hari
                        </a>
                    </div>
                </div>

                <div class="col-md-7 p-4 pt-5 d-none d-lg-block d-xl-block"
                    data-aos="fade-up"
                    data-aos-anchor-placement="bottom-bottom"
                    data-aos-delay="600">
                    <div id="aboutCarousel" 
                        class="carousel slide" 
                        data-bs-ride="carousel">
                        <div class="carousel-inner" 
                            style="box-shadow: 0 1rem 3rem rgba(0,0,0,.180) !important;border-radius:20px">
                            <div class="carousel-item active" data-bs-interval="2000">
                                <img src="{{asset('/images/abouts/about1.png')}}" 
                                    class="d-block w-100"                            
                                    alt="..."/>
                            </div>
                            <div class="carousel-item" data-bs-interval="2000">
                                <img src="{{asset('/images/abouts/about2.png')}}" 
                                    class="d-block w-100" 
                                    alt="..."/>
                            </div>
                            <div class="carousel-item" data-bs-interval="2000">
                                <img src="{{asset('/images/abouts/about3.png')}}" 
                                    class="d-block w-100" 
                                    alt="..."/>
                            </div>
                        </div>
                        <button class="carousel-control-prev" 
                            type="button" 
                            data-bs-target="#aboutCarousel"
                            data-bs-slide="prev"
                            tabindex="-1">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Previous</span>
                        </button>
                        <button class="carousel-control-next" 
                            type="button" 
                            data-bs-target="#aboutCarousel" 
                            data-bs-slide="next"
                            tabindex="-1">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Next</span>
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- ABOUT --> 

    <!-- FEATURE -->
    <div class="container-fluid p-lg-5 p-xl-5 py-5">
        <div class="container p-lg-5 p-xl-5 py-5">
            <div class="title-section"
                data-aos="flip-up"
                data-aos-anchor-placement="bottom-bottom"
                data-aos-delay="200">            
                Mengapa Memilih Kami?
            </div>

            <div class="row">
                <div class="col-md-4 mt-5 mb-3 mx-auto"
                    data-aos="fade-up"
                    data-aos-anchor-placement="top-bottom">
                    <div class="card shadow rounded-3 border-0 h-100 feature-card">
                        <div class="card-body d-flex flex-column">
                            <div class="py-2 text-center">
                                <img src="{{asset('/images/features/purchaseing.svg')}}"
                                    style="height:50px"/>
                            </div>

                            <div class="py-2 feature-title text-center">
                                Pembelian
                            </div>
                          
                            <p class="card-text text-muted mt-2 mb-2 flex-grow-1">
                                Lorem Ipsum is simply dummy text of the printing and typesetting industry. 
                                Lorem Ipsum is simply dummy text of the 
                            </p>
          
                            <div class="card-footer text-center mt-4 mb-2 pt-4">                            
                                <a href="{{url('/feature/purchaseing')}}" 
                                    class="feature-button onfocus">
                                    Selengkapnya
                                </a>                            
                            </div>                           
                        </div>
                    </div>
                </div>   
                
                <div class="col-md-4 mt-5 mb-3 mx-auto"
                    data-aos="fade-up"
                    data-aos-anchor-placement="top-bottom">
                    <div class="card shadow rounded-3 border-0 h-100 feature-card">
                        <div class="card-body d-flex flex-column">
                            <div class="py-2 text-center">
                                <img src="{{asset('/images/features/selling.svg')}}"
                                    style="height:50px"/>
                            </div>

                            <div class="py-2 feature-title text-center">
                                Penjualan
                            </div>
                          
                            <p class="card-text text-muted mt-2 mb-2 flex-grow-1">
                                Lorem Ipsum is simply dummy text of the printing and typesetting industry. 
                                Lorem Ipsum is simply dummy text of the printing and typesetting industry. 
                            </p>
          
                            <div class="card-footer text-center mt-4 mb-2 pt-4">                            
                                <a href="{{url('/feature/selling')}}" 
                                    class="feature-button onfocus">
                                    Selengkapnya
                                </a>                            
                            </div>                           
                        </div>
                    </div>
                </div>   

                <div class="col-md-4 mt-5 mb-3 mx-auto"
                    data-aos="fade-up"
                    data-aos-anchor-placement="top-bottom">
                    <div class="card shadow rounded-3 border-0 h-100 feature-card">
                        <div class="card-body d-flex flex-column">
                            <div class="py-2 text-center">
                                <img src="{{asset('/images/features/finance.svg')}}"
                                    style="height:50px"/>
                            </div>

                            <div class="py-2 feature-title text-center">
                                Akuntansi
                            </div>
                          
                            <p class="card-text text-muted mt-2 mb-2 flex-grow-1">
                                Lorem Ipsum is simply dummy text of the printing and typesetting industry. 
                            </p>
          
                            <div class="card-footer text-center mt-4 mb-2 pt-4">                            
                                <a href="{{url('/feature/finance')}}" 
                                    class="feature-button onfocus">
                                    Selengkapnya
                                </a>                            
                            </div>                           
                        </div>
                    </div>
                </div>   

                <div class="col-md-4 mt-5 mb-3 mx-auto"
                    data-aos="fade-up"
                    data-aos-anchor-placement="top-bottom">
                    <div class="card shadow rounded-3 border-0 h-100 feature-card">
                        <div class="card-body d-flex flex-column">
                            <div class="py-2 text-center">
                                <img src="{{asset('/images/features/inventory.svg')}}"
                                    style="height:50px"/>
                            </div>

                            <div class="py-2 feature-title text-center">
                                Inventory
                            </div>
                          
                            <p class="card-text text-muted mt-2 mb-2 flex-grow-1">
                                Lorem Ipsum is simply dummy text of the printing and typesetting industry. 
                                Lorem Ipsum is simply
                            </p>
          
                            <div class="card-footer text-center mt-4 mb-2 pt-4">                            
                                <a href="{{url('/feature/inventory')}}" 
                                    class="feature-button onfocus">
                                    Selengkapnya
                                </a>                            
                            </div>                           
                        </div>
                    </div>
                </div>  
                
                <div class="col-md-4 mt-5 mb-3 mx-auto"
                    data-aos="fade-up"
                    data-aos-anchor-placement="top-bottom">
                    <div class="card shadow rounded-3 border-0 h-100 feature-card">
                        <div class="card-body d-flex flex-column">
                            <div class="py-2 text-center">
                                <img src="{{asset('/images/features/manufactur.svg')}}"
                                    style="height:50px"/>
                            </div>

                            <div class="py-2 feature-title text-center">
                                Manufaktur
                            </div>
                          
                            <p class="card-text text-muted mt-2 mb-2 flex-grow-1">
                                Lorem Ipsum is simply dummy text of the printing and typesetting industry. 
                            </p>
          
                            <div class="card-footer text-center mt-4 mb-2 pt-4">                            
                                <a href="{{url('/feature/manufactur')}}" 
                                    class="feature-button onfocus">
                                    Selengkapnya
                                </a>                            
                            </div>                           
                        </div>
                    </div>
                </div> 
                
                <div class="col-md-4 mt-5 mb-3 mx-auto text-center"
                    data-aos="fade-up"
                    data-aos-anchor-placement="top-bottom">
                    <div class="card shadow rounded-3 border-0 h-100 feature-card">
                        <div class="card-body d-flex flex-column">
                            <div class="py-2">
                                <img src="{{asset('/images/features/report.svg')}}"
                                    style="height:50px"/>
                            </div>

                            <div class="py-2 feature-title">
                                Laporan
                            </div>
                          
                            <p class="card-text text-muted mt-2 mb-2 flex-grow-1">
                                Lorem Ipsum is simply dummy text of the printing and typesetting industry. 
                            </p>
          
                            <div class="card-footer text-center mt-4 mb-2 pt-4">                            
                                <a href="{{url('/feature/report')}}" 
                                    class="feature-button onfocus">
                                    Selengkapnya
                                </a>                            
                            </div>                           
                        </div>
                    </div>
                </div> 
            </div>
        </div>
    </div>
    <!-- FEATURE -->

    <!-- PACKAGE --> 
    <div class="container-fluid p-lg-5 p-xl-5 py-5"
        style="background-color: #fff">
        <div class="container p-lg-5 p-xl-5 py-5">
            <div class="title-section"
                data-aos="flip-up"
                data-aos-anchor-placement="bottom-bottom"
                data-aos-delay="200">                 
                Paket
            </div>

            <div class="row mt-5">
                @foreach($packages as $item)
                <div class="col-md-3 my-5 mx-auto" 
                    data-aos="fade-up"
                    data-aos-anchor-placement="top-bottom">
                    <div class="card shadow border-0 rounded-3">
                        @if(strval($item->name) === "FREE")
                            <div class="card-header text-center bg-info d-block package-border-radius">                                                      
                                <b>{{$item->name}}</b>
                            </div>
                        @elseif(strval($item->name) === "PRO")
                            <div class="card-header text-center bg-primary d-block package-border-radius">
                                <b>{{$item->name}}</b>
                            </div>
                        @elseif(strval($item->name) === "ENTERPRISE")
                            <div class="card-header text-center bg-danger d-block package-border-radius">
                                <b>{{$item->name}}</b>
                            </div>
                        @elseif(strval($item->name) === "STANDARD")
                            <div class="card-header text-center bg-success d-block package-border-radius">
                                <b>{{$item->name}}</b>
                            </div>
                        @endif 
                
                        @if(boolval($item->recomended))                    
                            <div class="ribbon ribbon-top ribbon-bookmark bg-green"
                                title="Rekomendasi" 
                                data-bs-toggle="tooltip"                    
                                data-bs-placement="top"
                                style="cursor:pointer;box-shadow: 0 0.5rem 0.5rem rgba(0,0,0,.180) !important;">
                                <i class="fa-solid fa-thumbs-up fa-2x"></i>
                            </div>
                        @endif

                        <div class="card-body py-4">
                            <div style="font-size:15px;text-align:center;font-weight:bold">
                                Rp {{number_format($item->price,0,',','.')}}                            
                            </div>

                            @if($item->description)
                                <div class="text-muted text-center mt-2"
                                    style="font-size:12px">
                                    {{$item->description}}
                                </div>
                            @endif 

                            <!-- 
                            <div class="text-center my-3">
                                <img src="{{asset('/images/packages/'.$item->name.'.svg')}}"/>
                            </div> 
                            -->

                            <div class="text-center mt-2">
                                @if($item->type === "FOREVER")
                                    <b>Selamanya</b>
                                @elseif($item->type === "MONTH")
                                    <b>Perbulan</b>
                                @elseif($item->type === "YEAR")
                                    <b>Pertahun</b>
                                @endif 
                            </div>

                            <div class="hr-text">                            
                                Fitur
                            </div>                    

                            <div class="package-features"
                                id="package-feature-{{$item->id}}">
                                @foreach($item->package_features as $key => $itemFiture)                                
                                    <div class="text-center mt-3"
                                        style="font-size:12px">
                                        {{ucfirst($itemFiture->value)}}                                                     
                                    </div>                                                 
                                @endforeach                                                                                        
                            </div>

                            <div class="text-center mt-5">
                                <a href="{{env('FRONTEND_URL','http://localhost:3000')}}/signup?package={{$item->name}}"
                                    class="button-package onfocus">
                                    @if($item->type === "FOREVER")
                                        <b>Dafar Gratis</b>
                                    @else 
                                        <b>Coba {{config('setting.trial_day')}} Hari</b>
                                    @endif 
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach               
            </div>

            <div class="col-12 text-center py-5">
                <div class="py-3">    
                    <a href="{{url('/prices')}}"
                        class="onfocus">            
                        Lihat Perbandingan Paket Lebih Lengkap
                    </a>
                </div>
            </div>
        </div>
    </div>
    <!-- PACKAGE -->

    <!-- TESTIOMONI --> 
    <div class="container-fluid p-xl-5 p-lg-5 py-5"
        style="background: #4DE7A8">
        <div class="conatiner p-xl-5 p-lg-5 py-5">
            <div class="title-section" 
                data-aos="flip-up"
                data-aos-anchor-placement="bottom-bottom"
                data-aos-delay="200"> 
                Testimoni
            </div>

            <div style="max-width:500px" 
                class="mx-auto mt-2">
                <div id="carouselTestimoni" 
                    class="carousel carousel-dark slide" 
                    data-bs-ride="carousel" 
                    data-aos="fade-up"
                    data-aos-anchor-placement="top-bottom">

                    <div class="carousel-indicators">
                        @foreach($testimonis as $key => $item )
                            <button type="button" 
                                data-bs-target="#carouselTestimoni" 
                                data-bs-slide-to="{{$key}}" 
                                aria-label="Slide {{$key}}"
                                class="@if($key === 0) {{'active'}} @endif"
                                tabindex="-1">
                            </button>
                        @endforeach
                    </div>

                    <div class="carousel-inner">
                        @foreach($testimonis as $key => $item)
                            <div class="carousel-item @if($key === 0) {{'active'}} @endif"
                                data-bs-interval="10000"
                                style="min-height:400px">
                                <div class="p-5">                
                                    <div class="text-center py-2">
                                        <img src="{{$item->photo}}" 
                                            style="width:50px;height:50px;object-fit:cover;border-radius:50%;"/>
                                    </div>

                                    <div class="text-center py-2">
                                        <h5>{{$item->name}}</h5>
                                    </div>                    

                                    <p class="py-2 px-3">
                                        "{{$item->description}}"
                                    </p>
                                </div>
                            </div>
                        @endforeach 
                    </div>

                    <button class="carousel-control-prev" 
                        type="button" 
                        data-bs-target="#carouselTestimoni" 
                        data-bs-slide="prev"
                        tabindex="-1">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Previous</span>
                    </button>

                    <button class="carousel-control-next" 
                        type="button" 
                        data-bs-target="#carouselTestimoni" 
                        data-bs-slide="next"
                        tabindex="-1">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Next</span>
                    </button>
                </div>
            </div>
        </div>
    </div>
    <!-- TESTIMONI -->

    <!-- QUESTION --> 
    <div class="container-fluid p-lg-5 p-xl-5 py-5">
        <div class="container p-lg-5 p-xl-5 py-5">
            <div class="title-section"
                data-aos="flip-up"
                data-aos-anchor-placement="bottom-bottom"
                data-aos-delay="200">                 
                Pertanyaan yang sering ditanyakan
            </div>

            <div class="row mt-5">
                @foreach($questions as $item)                
                <div class="col-md-6 mb-5" 
                    data-bs-ride="carousel" 
                    data-aos="fade-up"
                    data-aos-anchor-placement="top-bottom">
                    <div class="m-auto shadow py-4 px-4 d-flex flex-column question-body rounded-3"
                        style="max-width:450px;cursor:pointer">
                        <div class="d-flex flex-row justify-content-between">
                            <div>
                                <i class="fa-solid fa-question"></i> 
                                <span style="font-size:12px">
                                    {{$item->title}}
                                </span>
                            </div>

                            <div>
                                <i class="fa fa-caret-up"></i>
                            </div>
                        </div>

                        <div class="mt-3 d-none question-description text-muted"
                            data-id="{{$item->id}}">
                            {{$item->description}}
                        </div>
                    </div>                   
                </div>
                @endforeach 

                <div class="col-12 text-center py-5">
                    Ada pertanyaan? Kontak kami via whatsapp di:
                    <div class="py-3">    
                        <a href="https://api.whatsapp.com/send?phone={{str_replace('+','',str_replace(' ','',config('setting.phone')))}}&text=Hallo,Saya ingin bertanya tentang {{config('setting.company_name')}}." 
                            style="color:#19af67;"
                            target="_blank"
                            class="onfocus">
                            {{ config('setting.phone') }}
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- QUESTION -->
@endsection

@section("sc_footer")
    <script>
    // QUESTION 
        let questionBodys = document.querySelectorAll(".question-body");

        Array.from(questionBodys).forEach(function(item){
            item.addEventListener('click',function(){    
                let questionDescription = item.querySelector(".question-description");
                let questionDescriptions = document.querySelectorAll(".question-description");

                Array.from(questionDescriptions).forEach(function(itemDescription){                  
                    if(parseInt(itemDescription.getAttribute("data-id")) !== parseInt(questionDescription.getAttribute("data-id"))){    
                        itemDescription.classList.add("d-none");                
                    }
                });

                if(questionDescription.classList.contains("d-none")){
                    questionDescription.classList.remove("d-none");
                }else{
                    questionDescription.classList.add("d-none");            
                }
                
                Array.from(questionBodys).forEach(function(itemQuestionBody){
                    let caretDown = itemQuestionBody.querySelector(".fa-caret-down");

                    if(caretDown){
                        caretDown.classList.remove("fa-caret-down");
                        caretDown.classList.add("fa-caret-up");
                    }

                    if(!itemQuestionBody.classList.contains('shadow')){
                        itemQuestionBody.classList.add("shadow");
                        itemQuestionBody.classList.remove("shadow-lg");
                    }
                });        

                let caretUp = item.querySelector(".fa-caret-up");

                if(caretUp){
                    caretUp.classList.add("fa-caret-down");
                    caretUp.classList.remove("fa-caret-up");
                }

                if(!questionDescription.classList.contains("d-none")){
                    item.classList.remove("shadow");
                    item.classList.add("shadow-lg");
                }
            })
        });
    // QUESTION 
    </script>
@endsection