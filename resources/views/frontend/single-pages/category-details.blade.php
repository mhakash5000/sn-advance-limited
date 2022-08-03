@extends('frontend/layouts.master')
@section('content')


<!--====== ABOUT SECTION START ======-->

<section class="breadcrumb-section" style="background-image: url({{asset('public')}}/frontend/assets/img/video-bg-2.jpg);">
    <div class="container">
    @foreach ($categories_individual as $category)
        <div class="breadcrumb-text">
            <h1>{{$category->name}}</h1>
            <p>Trusted Logistics Company</p>
        </div>
        <ul class="breadcrumb-nav">
            <li class="text-white"><a href="{{url('/')}} " class="text-white">Home</a></li>
            <li class="text-white">{{$category->name}}</li>
        </ul>
        <span class="btg-text" style="font-size: 200px">S.n Advance Limited</span>
    @endforeach
    </div>
    <div class="breadcrumb-shape">
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1000 100" preserveAspectRatio="none">
            <path d="M500,97C126.7,96.3,0.8,19.8,0,0v100l1000,0V1C1000,19.4,873.3,97.8,500,97z">
            </path>
        </svg>
    </div>
</section>


<section class="about-section about-style-three pt-120 pb-120">
  <div class="container">
      @foreach ($categories_individual as $category)
      <div class="row align-items-center justify-content-center">
         
          <div class="col-lg-6 col-md-10">
              <div class="about-text pr-30">
                  <div class="section-title left-border mb-40">
                     
                      <span class="title-tag">{{$category->name}}</span>
                      {{-- <h2>Modern &amp; Trusted Logistics Company</h2> --}}
                  </div>
                  <p>
                      {{$category->details}}
                  </p>
              </div>
          </div>
          <div class="col-lg-6 col-md-10 order-first order-lg-last">
              <div class="about-img">
                  <img src="{{asset('public/images/category_image/'.$category->image)}}" alt="Image">
              </div>
          </div>             
      </div>
      @endforeach
  </div>
</section>
<section>
    <div class="clinet-section" style="margin-bottom:100px">
        <div class="container-fluid custom-width-three">
            <div class="clinet-slider">
                @foreach ($CompaniesBrandLogos as $CompaniesBrandLogo)       
                <div class="clinet-item">
                    <a href="#">
                        <img src="{{asset('public/images/companies-image/'.$CompaniesBrandLogo->image)}}" alt="Image">
                    </a>
                </div>
                @endforeach
              
            </div>              
        </div>           
    </div>
</section>

<!--====== ABOUT SECTION END ======-->

@endsection






