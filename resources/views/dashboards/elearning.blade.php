@php
    $html_tag_data = [];
    $title = 'Dashboards Elearning';
    $heading = 'E-learning Dashboard';
    $description= 'Acorn elearning platform dashboard.';
@endphp
@extends('layout',['html_tag_data'=>$html_tag_data, 'title'=>$title, 'description'=>$description,])

@section('css')
    <link rel="stylesheet" href="/css/vendor/glide.core.min.css"/>
@endsection

@section('js_vendor')
    <script src="/js/vendor/glide.min.js"></script>
    <script src="/js/vendor/Chart.bundle.min.js"></script>
    <script src="/js/vendor/jquery.barrating.min.js"></script>
@endsection

@section('js_page')
    <script src="/js/cs/glide.custom.js"></script>
    <script src="/js/cs/charts.extend.js"></script>
    <script src="/js/pages/dashboard.elearning.js"></script>
@endsection


<style>
   /* html, body {
  background-color: #222;
  font-family: 'Helvetica Neue', Helvetica, sans-serif;
  color: rgba(255,255,255,0.75);
} */

.headerr {
  margin: 60px auto 0;
  width: 550px;
  text-align: center;
  font-size: 36px;
}
.base {
  position: absolute;
  bottom: 0;
  left: -35px;
  width: 825px;
  height: 20px;
  background-color: rgba(255,255,255,0.05);
  -moz-transform: skew(45deg);
  -o-transform: skew(45deg);
  -webkit-transform: skew(45deg);
}

.chart-container {
  position: relative;
  z-index: 0;
  margin: 100px auto 0;
  width: 800px;
  height: 500px;
  /*border: solid 1px #bbb;*/
  background-color: rgba(255,255,255,0.055);
/*  -webkit-box-shadow: 0 8px 6px -6px #444;
*/}

.chart-container:after {
  content:"";
  position: absolute;
  top: -15px;
  left: -8px;
  height: 15px;
  width: 800px;
  background-color: rgba(255,255,255,0.055);
  -moz-transform: skew(45deg);
  -o-transform: skew(45deg);
  -webkit-transform: skew(45deg);
  transform: skew(45deg);
}

.chart-container > table {
  position: absolute;
  top: 0;
  left: 0;
  z-index: -999;
  width: 100%;
  height: 100%;
}

.chart-container table  tr  td {
  width: 100px;
  height: 98x;
  border: solid 1px  rgba(255,255,255,0.05);

}

.meter {
  position: relative;
  top: 0px;
  left: -30px;
  height: 500px;
  width: 30px;
  background-color: rgba(20,113,163,0.5);
  border-left: solid 1px rgba(255,255,255,0.5);

}

.meter:before {
  content: "";
  position: absolute;
  top: -7px;
  left: -15px;
  width: 15px;
  height: 500px;
  background-color: rgba(14,81,117,0.9);
   -moz-transform: skewY(45deg);
  -o-transform: skewY(45deg);
  -webkit-transform: skewY(45deg);
  transform: skewY(45deg);
}

.meter:after {
  content: "";
  position: absolute;
  top: -15px;
  left: -8px;
  width: 30px;
  height: 15px;
  background-color: rgba(13,171,217,0.45);
   -moz-transform: skewX(45deg);
  -o-transform: skewX(45deg);
  -webkit-transform: skewX(45deg);
  transform: skewX(45deg);
}

.meter li {
  position: relative;
  list-style-type: none;
  height: 99px;
  border-bottom: solid 1px #0DABD9;
}

.meter li:before {
  content: "";
  position: absolute;
  top: -15px;
  left: -30px;
  width: 30px;
  height: 100%;
  border-bottom: solid 1px #0DABD9;
  -moz-transform: skewY(45deg);
  -o-transform: skewY(45deg);
  -webkit-transform: skewY(45deg);
  transform: skewY(45deg);
}

.meter li:last-child {
  border-bottom: none;
}

.meter li:last-child:before {
  border: 0;
}

.meter li div {
  position: absolute;
  left: -132px;
  top: 0;
  padding: 55px 0 0;
  width: 80px;
  color: #656565;
  text-align: right;
  font-weight: 300;
  font-size: 14px;
  line-height: 18px;
  text-transform: uppercase;
}


/* ---------------------
  Vertical Bars
----------------------*/

.bar {
  float: left;
  position: absolute;
  bottom: 0;
  z-index: 99;
  height: 35%;
  width: 40px;
  margin: 0 40px;
  background-color: rgba(107,255,49,0.35);
}

.bar:before {
  content: "";
  position: absolute;
  left: -15px;
  bottom: 7px;
  height: 100%;
  width: 15px;
  background-color: rgba(107,255,49,0.25);
  -webkit-transform: skewY(45deg);
}

.bar:after {
  content: "";
  position: absolute;
  top: -15px;
  left: -8px;
  width: 40px;
  height: 15px;
  background-color: rgba(107,255,49,0.45);
  -moz-transform: skewX(45deg);
  -o-transform: skewX(45deg);
  -webkit-transform: skewX(45deg);
  transform: skewX(45deg);
}

.two {
  left: 12.5%;
  height: 57%;
}

.three {
  left: 25%;
  height: 85%;
}

.four {
  left: 37.5%;
  height: 35%;
}

.five {
  left: 50%;
  height: 63%;
}

.six {
  left: 62.5%;
  height: 45%;
}

.seven {
  left: 75%;
  height: 15%;
}

.eight {
  left: 87.5%;
  height: 32%;
}

</style>




@section('content')
    <div class="container">
        <!-- Title and Top Buttons Start -->
        <div class="page-title-container">
            <div class="row">
                <!-- Title Start -->
                <div class="col-12 col-md-7">
                    <h1 class="mb-0 pb-0 display-4" id="title">{{ $heading }}</h1>
                    <nav class="breadcrumb-container d-inline-block" aria-label="breadcrumb">
                        <ul class="breadcrumb pt-0">
                            <li class="breadcrumb-item"><a href="/">Home</a></li>
                            <li class="breadcrumb-item"><a href="/Dashboards/Elearning">Dashboards</a></li>
                        </ul>
                    </nav>
                </div>
                <!-- Title End -->
            </div>
        </div>
        <!-- Title and Top Buttons End -->

        <!-- Content Start -->

        <div class="row">
            <!-- Continue Learning Start -->
            <div class="col-xl-12 mb-5">
                <h2 class="small-title">
</h2>
                <div class="scroll-out">
                    <div class="scroll-by-count" data-count="4">
                        <div class="card mb-2">
                            <div class="row g-0 sh-14">
                                <div class="col-auto">
                                    <a href="/Course/Detail" class="d-block position-relative h-100">
                                        <img src="/img/course/small/student.jpg" alt="alternate text" class="card-img card-img-horizontal sw-14 sw-lg-18" />
                                    </a>
                                </div>
                                <div class="col">
                                    <div class="card-body pt-0 pb-0 h-100 d-flex align-items-center">
                                        <div class="w-100">
                                            <div class="d-flex flex-row justify-content-between mb-2">
                                                <a href="/Course/Detail" class="font-heading mb-1">No of job applied</a>
                                                <div class="text-muted">67%</div>
                                            </div>
                                            <div class="progress mb-2">
                                                <div class="progress-bar" role="progressbar" aria-valuenow="67" aria-valuemin="0" aria-valuemax="100"></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="card mb-2">
                            <div class="row g-0 sh-14">
                                <div class="col-auto">
                                    <a href="/Course/Detail" class="d-block position-relative h-100">
                                        <img src="/img/course/small/13.jpg" alt="alternate text" class="card-img card-img-horizontal sw-14 sw-lg-18" />
                                    </a>
                                </div>
                                <div class="col">
                                    <div class="card-body pt-0 pb-0 h-100 d-flex align-items-center">
                                        <div class="w-100">
                                            <div class="d-flex flex-row justify-content-between mb-2">
                                                <a href="/Course/Detail" class="font-heading mb-1">Total no of teacher</a>
                                                <div class="text-muted">85%</div>
                                            </div>
                                            <div class="progress mb-2">
                                                <div class="progress-bar" role="progressbar" aria-valuenow="85" aria-valuemin="0" aria-valuemax="100"></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="card mb-2">
                            <div class="row g-0 sh-14">
                                <div class="col-auto">
                                    <a href="/Course/Detail" class="d-block position-relative h-100">
                                        <img src="/img/course/small/12.webp" alt="alternate text" class="card-img card-img-horizontal sw-14 sw-lg-18" />
                                    </a>
                                </div>
                                <div class="col">
                                    <div class="card-body pt-0 pb-0 h-100 d-flex align-items-center">
                                        <div class="w-100">
                                            <div class="d-flex flex-row justify-content-between mb-2">
                                                <a href="/Course/Detail" class="font-heading mb-1">Total no of Students</a>
                                                <div class="text-muted">14%</div>
                                            </div>
                                            <div class="progress mb-2">
                                                <div class="progress-bar" role="progressbar" aria-valuenow="14" aria-valuemin="0" aria-valuemax="100"></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="card mb-2">
                            <div class="row g-0 sh-14">
                                <div class="col-auto">
                                    <a href="/Course/Detail" class="d-block position-relative h-100">
                                        <img src="/img/course/small/Employee.jpg" alt="alternate text" class="card-img card-img-horizontal sw-14 sw-lg-18" />
                                    </a>
                                </div>
                                <div class="col">
                                    <div class="card-body pt-0 pb-0 h-100 d-flex align-items-center">
                                        <div class="w-100">
                                            <div class="d-flex flex-row justify-content-between mb-2">
                                                <a href="/Course/Detail" class="font-heading mb-1">No of Employees</a>
                                                <div class="text-muted">63%</div>
                                            </div>
                                            <div class="progress mb-2">
                                                <div class="progress-bar" role="progressbar" aria-valuenow="63" aria-valuemin="0" aria-valuemax="100"></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- <div class="card mb-2">
                            <div class="row g-0 sh-14">
                                <div class="col-auto">
                                    <a href="/Course/Detail" class="d-block position-relative h-100">
                                        <img src="/img/course/small/course-5.webp" alt="alternate text" class="card-img card-img-horizontal sw-14 sw-lg-18" />
                                    </a>
                                </div>
                                <div class="col">
                                    <div class="card-body pt-0 pb-0 h-100 d-flex align-items-center">
                                        <div class="w-100">
                                            <div class="d-flex flex-row justify-content-between mb-2">
                                                <a href="/Course/Detail" class="font-heading mb-1">Getting Started with Gulpjs</a>
                                                <div class="text-muted">36%</div>
                                            </div>
                                            <div class="progress mb-2">
                                                <div class="progress-bar" role="progressbar" aria-valuenow="46" aria-valuemin="0" aria-valuemax="100"></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div> -->
                    </div>
                </div>
            </div>
            <!-- Continue Learning End -->

            <!-- Recommended Courses Start -->
            <!-- <div class="col-xl-6 mb-5">
                <h2 class="small-title">Recommended for You</h2> -->














                
                <!-- <div class="card w-100 sh-50 sh-md-40 h-xl-100-card hover-img-scale-up position-relative">
                    <img src="/img/banner/cta-standard-3.webp" class="card-img h-100 scale position-absolute" alt="card image" />
                    <div class="card-img-overlay d-flex flex-column justify-content-between bg-transparent">
                        <div>
                            <div class="cta-1 mb-3 text-white w-75 w-sm-50 opacity-75">Complete Web Developer Zero to Mastery</div>
                            <div class="w-50 text-white mb-3 opacity-75">
                                Liquorice caramels chupa chups bonbon. Jelly-o candy sugar chocolate cake caramels apple pie lollipop jujubes.
                            </div>
                            <div class="mb-2">
                                <div class="br-wrapper br-theme-cs-icon d-inline-block">
                                    <select class="rating" name="rating" autocomplete="off" data-readonly="true" data-initial-rating="5">
                                        <option value="1">1</option>
                                        <option value="2">2</option>
                                        <option value="3">3</option>
                                        <option value="4">4</option>
                                        <option value="5">5</option>
                                    </select>
                                </div>
                                <div class="text-muted d-inline-block text-small align-text-top">(572)</div>
                            </div>
                            <div>$ 27.50</div>
                        </div>
                        <div>
                            <a href="/Course/Detail" class="btn btn-icon btn-icon-start btn-primary mt-3 stretched-link">
                                <i data-acorn-icon="chevron-right"></i>
                                <span>View</span>
                            </a>
                        </div>
                    </div>
                </div> -->
            <!-- </div> -->
            <!-- Recommended Courses End -->
        </div>

        <!-- Achievements Start -->
        <h2 class="small-title">Achievements</h2>
        <div class="row gx-2">
            <div class="col-12 p-0">
                <div class="glide" id="glideAchievements">
                    <div class="glide__track" data-glide-el="track">
                        <div class="glide__slides">
                            <div class="glide__slide">
                                <div class="card mb-5 sh-25">
                                    <div class="card-body text-center align-items-center d-flex flex-column justify-content-between">
                                        <div class="d-flex sw-6 sh-6 bg-gradient-light mb-4 align-items-center justify-content-center rounded-xl position-relative mt-3">
                                            <i data-acorn-icon="badge" class="text-white"></i>
                                            <div class="achievement bg position-absolute">
                                                <svg width="75" height="75" viewBox="0 0 75 75" fill="black" xmlns="http://www.w3.org/2000/svg">
                                                    <path
                                                            fill-rule="evenodd"
                                                            clip-rule="evenodd"
                                                            d="M15.3422 7.24333C21.5482 2.69119 29.2117 0 37.5 0C45.7883 0 53.4518 2.69119 59.6578 7.24333C60.5562 7.90233 60.7431 9.15516 60.0752 10.0416C59.4073 10.9281 58.1375 11.1124 57.2391 10.4534C51.7048 6.39402 44.8833 4 37.5 4C30.1167 4 23.2952 6.39403 17.7609 10.4535C16.8625 11.1124 15.5927 10.9281 14.9248 10.0416C14.2569 9.15516 14.4438 7.90233 15.3422 7.24333ZM65.0942 15.1001C66.006 14.4592 67.2717 14.6688 67.9213 15.5684C72.3763 21.7377 75 29.3164 75 37.5C75 45.6836 72.3763 53.2623 67.9213 59.4316C67.2717 60.3311 66.006 60.5408 65.0942 59.8999C64.1825 59.2589 63.97 58.0101 64.6196 57.1105C68.599 51.5998 70.9459 44.8284 70.9459 37.5C70.9459 30.1716 68.599 23.4002 64.6196 17.8895C63.97 16.9899 64.1825 15.7411 65.0942 15.1001ZM9.90579 15.1001C10.8175 15.7411 11.03 16.9899 10.3804 17.8895C6.40105 23.4002 4.05405 30.1716 4.05405 37.5C4.05405 44.8284 6.40105 51.5998 10.3804 57.1105C11.03 58.0101 10.8175 59.2589 9.90579 59.8999C8.99405 60.5408 7.72832 60.3312 7.07871 59.4316C2.62373 53.2623 0 45.6836 0 37.5C0 29.3164 2.62373 21.7377 7.07871 15.5684C7.72832 14.6689 8.99404 14.4592 9.90579 15.1001ZM14.9248 64.9584C15.5927 64.0719 16.8625 63.8876 17.7609 64.5466C23.2952 68.606 30.1167 71 37.5 71C44.8833 71 51.7048 68.606 57.2391 64.5465C58.1375 63.8876 59.4073 64.0719 60.0752 64.9584C60.7431 65.8448 60.5562 67.0977 59.6578 67.7567C53.4518 72.3088 45.7883 75 37.5 75C29.2117 75 21.5483 72.3088 15.3422 67.7567C14.4438 67.0977 14.2569 65.8448 14.9248 64.9584Z"
                                                    />
                                                </svg>
                                            </div>
                                            <div class="achievement level position-absolute">
                                                <svg width="75" height="75" viewBox="0 0 75 75" fill="black" xmlns="http://www.w3.org/2000/svg">
                                                    <path
                                                            fill-rule="evenodd"
                                                            clip-rule="evenodd"
                                                            d="M15.3422 7.24333C21.5482 2.69119 29.2117 0 37.5 0C45.7883 0 53.4517 2.69119 59.6578 7.24333C60.5562 7.90233 60.7431 9.15516 60.0752 10.0416C59.4073 10.9281 58.1375 11.1124 57.2391 10.4534C51.7048 6.39402 44.8833 4 37.5 4C30.1167 4 23.2952 6.39403 17.7609 10.4535C16.8625 11.1124 15.5927 10.9281 14.9248 10.0416C14.2569 9.15516 14.4438 7.90233 15.3422 7.24333Z"
                                                    />
                                                </svg>
                                            </div>
                                        </div>
                                        <p class="card-text mb-0 d-flex">Employee</p>
                                        <p class="text-center mb-0 d-flex text-primary">Level 1</p>
                                    </div>
                                </div>
                            </div>
                            <div class="glide__slide">
                                <div class="card mb-5 sh-25">
                                    <div class="card-body text-center align-items-center d-flex flex-column justify-content-between">
                                        <div class="d-flex sw-6 sh-6 bg-gradient-light mb-4 align-items-center justify-content-center rounded-xl position-relative mt-3">
                                            <i data-acorn-icon="prize" class="text-white"></i>
                                            <div class="achievement bg position-absolute">
                                                <svg width="75" height="75" viewBox="0 0 75 75" fill="black" xmlns="http://www.w3.org/2000/svg">
                                                    <path
                                                            fill-rule="evenodd"
                                                            clip-rule="evenodd"
                                                            d="M15.3422 7.24333C21.5482 2.69119 29.2117 0 37.5 0C45.7883 0 53.4518 2.69119 59.6578 7.24333C60.5562 7.90233 60.7431 9.15516 60.0752 10.0416C59.4073 10.9281 58.1375 11.1124 57.2391 10.4534C51.7048 6.39402 44.8833 4 37.5 4C30.1167 4 23.2952 6.39403 17.7609 10.4535C16.8625 11.1124 15.5927 10.9281 14.9248 10.0416C14.2569 9.15516 14.4438 7.90233 15.3422 7.24333ZM65.0942 15.1001C66.006 14.4592 67.2717 14.6688 67.9213 15.5684C72.3763 21.7377 75 29.3164 75 37.5C75 45.6836 72.3763 53.2623 67.9213 59.4316C67.2717 60.3311 66.006 60.5408 65.0942 59.8999C64.1825 59.2589 63.97 58.0101 64.6196 57.1105C68.599 51.5998 70.9459 44.8284 70.9459 37.5C70.9459 30.1716 68.599 23.4002 64.6196 17.8895C63.97 16.9899 64.1825 15.7411 65.0942 15.1001ZM9.90579 15.1001C10.8175 15.7411 11.03 16.9899 10.3804 17.8895C6.40105 23.4002 4.05405 30.1716 4.05405 37.5C4.05405 44.8284 6.40105 51.5998 10.3804 57.1105C11.03 58.0101 10.8175 59.2589 9.90579 59.8999C8.99405 60.5408 7.72832 60.3312 7.07871 59.4316C2.62373 53.2623 0 45.6836 0 37.5C0 29.3164 2.62373 21.7377 7.07871 15.5684C7.72832 14.6689 8.99404 14.4592 9.90579 15.1001ZM14.9248 64.9584C15.5927 64.0719 16.8625 63.8876 17.7609 64.5466C23.2952 68.606 30.1167 71 37.5 71C44.8833 71 51.7048 68.606 57.2391 64.5465C58.1375 63.8876 59.4073 64.0719 60.0752 64.9584C60.7431 65.8448 60.5562 67.0977 59.6578 67.7567C53.4518 72.3088 45.7883 75 37.5 75C29.2117 75 21.5483 72.3088 15.3422 67.7567C14.4438 67.0977 14.2569 65.8448 14.9248 64.9584Z"
                                                    />
                                                </svg>
                                            </div>
                                            <div class="achievement level position-absolute">
                                                <svg width="75" height="75" viewBox="0 0 75 75" fill="black" xmlns="http://www.w3.org/2000/svg">
                                                    <path
                                                            fill-rule="evenodd"
                                                            clip-rule="evenodd"
                                                            d="M15.3422 7.24333C21.5482 2.69119 29.2117 0 37.5 0C45.7883 0 53.4517 2.69119 59.6578 7.24333C60.5562 7.90233 60.7431 9.15516 60.0752 10.0416C59.4073 10.9281 58.1375 11.1124 57.2391 10.4534C51.7048 6.39402 44.8833 4 37.5 4C30.1167 4 23.2952 6.39403 17.7609 10.4535C16.8625 11.1124 15.5927 10.9281 14.9248 10.0416C14.2569 9.15516 14.4438 7.90233 15.3422 7.24333ZM65.0942 15.1001C66.006 14.4592 67.2717 14.6688 67.9213 15.5684C72.3763 21.7377 75 29.3164 75 37.5C75 45.6836 72.3763 53.2623 67.9213 59.4316C67.2717 60.3311 66.006 60.5408 65.0942 59.8999C64.1825 59.2589 63.97 58.0101 64.6196 57.1105C68.599 51.5998 70.9459 44.8284 70.9459 37.5C70.9459 30.1716 68.5989 23.4002 64.6196 17.8895C63.97 16.9899 64.1825 15.7411 65.0942 15.1001ZM14.9248 64.9584C15.5927 64.0719 16.8625 63.8876 17.7609 64.5466C23.2952 68.606 30.1167 71 37.5 71C44.8833 71 51.7048 68.606 57.2391 64.5465C58.1375 63.8876 59.4073 64.0719 60.0752 64.9584C60.7431 65.8448 60.5562 67.0977 59.6578 67.7567C53.4517 72.3088 45.7883 75 37.5 75C29.2117 75 21.5482 72.3088 15.3422 67.7567C14.4438 67.0977 14.2569 65.8448 14.9248 64.9584Z"
                                                    />
                                                </svg>
                                            </div>
                                        </div>
                                        <p class="card-text mb-0 d-flex">Teachers</p>
                                        <p class="text-center mb-0 d-flex text-primary">Level 3</p>
                                    </div>
                                </div>
                            </div>
                            <div class="glide__slide">
                                <div class="card mb-5 sh-25">
                                    <div class="card-body text-center align-items-center d-flex flex-column justify-content-between">
                                        <div class="d-flex sw-6 sh-6 bg-gradient-light mb-4 align-items-center justify-content-center rounded-xl position-relative mt-3">
                                            <i data-acorn-icon="medal" class="text-white"></i>
                                            <div class="achievement bg position-absolute">
                                                <svg width="75" height="75" viewBox="0 0 75 75" fill="black" xmlns="http://www.w3.org/2000/svg">
                                                    <path
                                                            fill-rule="evenodd"
                                                            clip-rule="evenodd"
                                                            d="M15.3422 7.24333C21.5482 2.69119 29.2117 0 37.5 0C45.7883 0 53.4518 2.69119 59.6578 7.24333C60.5562 7.90233 60.7431 9.15516 60.0752 10.0416C59.4073 10.9281 58.1375 11.1124 57.2391 10.4534C51.7048 6.39402 44.8833 4 37.5 4C30.1167 4 23.2952 6.39403 17.7609 10.4535C16.8625 11.1124 15.5927 10.9281 14.9248 10.0416C14.2569 9.15516 14.4438 7.90233 15.3422 7.24333ZM65.0942 15.1001C66.006 14.4592 67.2717 14.6688 67.9213 15.5684C72.3763 21.7377 75 29.3164 75 37.5C75 45.6836 72.3763 53.2623 67.9213 59.4316C67.2717 60.3311 66.006 60.5408 65.0942 59.8999C64.1825 59.2589 63.97 58.0101 64.6196 57.1105C68.599 51.5998 70.9459 44.8284 70.9459 37.5C70.9459 30.1716 68.599 23.4002 64.6196 17.8895C63.97 16.9899 64.1825 15.7411 65.0942 15.1001ZM9.90579 15.1001C10.8175 15.7411 11.03 16.9899 10.3804 17.8895C6.40105 23.4002 4.05405 30.1716 4.05405 37.5C4.05405 44.8284 6.40105 51.5998 10.3804 57.1105C11.03 58.0101 10.8175 59.2589 9.90579 59.8999C8.99405 60.5408 7.72832 60.3312 7.07871 59.4316C2.62373 53.2623 0 45.6836 0 37.5C0 29.3164 2.62373 21.7377 7.07871 15.5684C7.72832 14.6689 8.99404 14.4592 9.90579 15.1001ZM14.9248 64.9584C15.5927 64.0719 16.8625 63.8876 17.7609 64.5466C23.2952 68.606 30.1167 71 37.5 71C44.8833 71 51.7048 68.606 57.2391 64.5465C58.1375 63.8876 59.4073 64.0719 60.0752 64.9584C60.7431 65.8448 60.5562 67.0977 59.6578 67.7567C53.4518 72.3088 45.7883 75 37.5 75C29.2117 75 21.5483 72.3088 15.3422 67.7567C14.4438 67.0977 14.2569 65.8448 14.9248 64.9584Z"
                                                    />
                                                </svg>
                                            </div>
                                            <div class="achievement level position-absolute">
                                                <svg width="75" height="75" viewBox="0 0 75 75" fill="black" xmlns="http://www.w3.org/2000/svg">
                                                    <path
                                                            fill-rule="evenodd"
                                                            clip-rule="evenodd"
                                                            d="M15.3422 7.24333C21.5482 2.69119 29.2117 0 37.5 0C45.7883 0 53.4517 2.69119 59.6578 7.24333C60.5562 7.90233 60.7431 9.15516 60.0752 10.0416C59.4073 10.9281 58.1375 11.1124 57.2391 10.4534C51.7048 6.39402 44.8833 4 37.5 4C30.1167 4 23.2952 6.39403 17.7609 10.4535C16.8625 11.1124 15.5927 10.9281 14.9248 10.0416C14.2569 9.15516 14.4438 7.90233 15.3422 7.24333ZM65.0942 15.1001C66.006 14.4592 67.2717 14.6688 67.9213 15.5684C72.3763 21.7377 75 29.3164 75 37.5C75 45.6836 72.3763 53.2623 67.9213 59.4316C67.2717 60.3311 66.006 60.5408 65.0942 59.8999C64.1825 59.2589 63.97 58.0101 64.6196 57.1105C68.599 51.5998 70.9459 44.8284 70.9459 37.5C70.9459 30.1716 68.5989 23.4002 64.6196 17.8895C63.97 16.9899 64.1825 15.7411 65.0942 15.1001Z"
                                                    />
                                                </svg>
                                            </div>
                                        </div>
                                        <p class="card-text mb-0 d-flex">Jobseeker</p>
                                        <p class="text-center mb-0 d-flex text-primary">Level 2</p>
                                    </div>
                                </div>
                            </div>
                            <div class="glide__slide">
                                <div class="card mb-5 sh-25">
                                    <div class="card-body text-center align-items-center d-flex flex-column justify-content-between">
                                        <div class="d-flex sw-6 sh-6 bg-gradient-light mb-4 align-items-center justify-content-center rounded-xl position-relative mt-3">
                                            <i data-acorn-icon="star" class="text-white"></i>
                                            <div class="achievement bg position-absolute">
                                                <svg width="75" height="75" viewBox="0 0 75 75" fill="black" xmlns="http://www.w3.org/2000/svg">
                                                    <path
                                                            fill-rule="evenodd"
                                                            clip-rule="evenodd"
                                                            d="M15.3422 7.24333C21.5482 2.69119 29.2117 0 37.5 0C45.7883 0 53.4518 2.69119 59.6578 7.24333C60.5562 7.90233 60.7431 9.15516 60.0752 10.0416C59.4073 10.9281 58.1375 11.1124 57.2391 10.4534C51.7048 6.39402 44.8833 4 37.5 4C30.1167 4 23.2952 6.39403 17.7609 10.4535C16.8625 11.1124 15.5927 10.9281 14.9248 10.0416C14.2569 9.15516 14.4438 7.90233 15.3422 7.24333ZM65.0942 15.1001C66.006 14.4592 67.2717 14.6688 67.9213 15.5684C72.3763 21.7377 75 29.3164 75 37.5C75 45.6836 72.3763 53.2623 67.9213 59.4316C67.2717 60.3311 66.006 60.5408 65.0942 59.8999C64.1825 59.2589 63.97 58.0101 64.6196 57.1105C68.599 51.5998 70.9459 44.8284 70.9459 37.5C70.9459 30.1716 68.599 23.4002 64.6196 17.8895C63.97 16.9899 64.1825 15.7411 65.0942 15.1001ZM9.90579 15.1001C10.8175 15.7411 11.03 16.9899 10.3804 17.8895C6.40105 23.4002 4.05405 30.1716 4.05405 37.5C4.05405 44.8284 6.40105 51.5998 10.3804 57.1105C11.03 58.0101 10.8175 59.2589 9.90579 59.8999C8.99405 60.5408 7.72832 60.3312 7.07871 59.4316C2.62373 53.2623 0 45.6836 0 37.5C0 29.3164 2.62373 21.7377 7.07871 15.5684C7.72832 14.6689 8.99404 14.4592 9.90579 15.1001ZM14.9248 64.9584C15.5927 64.0719 16.8625 63.8876 17.7609 64.5466C23.2952 68.606 30.1167 71 37.5 71C44.8833 71 51.7048 68.606 57.2391 64.5465C58.1375 63.8876 59.4073 64.0719 60.0752 64.9584C60.7431 65.8448 60.5562 67.0977 59.6578 67.7567C53.4518 72.3088 45.7883 75 37.5 75C29.2117 75 21.5483 72.3088 15.3422 67.7567C14.4438 67.0977 14.2569 65.8448 14.9248 64.9584Z"
                                                    />
                                                </svg>
                                            </div>
                                            <div class="achievement level position-absolute">
                                                <svg width="75" height="75" viewBox="0 0 75 75" fill="black" xmlns="http://www.w3.org/2000/svg">
                                                    <path
                                                            fill-rule="evenodd"
                                                            clip-rule="evenodd"
                                                            d="M15.3422 7.24333C21.5482 2.69119 29.2117 0 37.5 0C45.7883 0 53.4517 2.69119 59.6578 7.24333C60.5562 7.90233 60.7431 9.15516 60.0752 10.0416C59.4073 10.9281 58.1375 11.1124 57.2391 10.4534C51.7048 6.39402 44.8833 4 37.5 4C30.1167 4 23.2952 6.39403 17.7609 10.4535C16.8625 11.1124 15.5927 10.9281 14.9248 10.0416C14.2569 9.15516 14.4438 7.90233 15.3422 7.24333Z"
                                                    />
                                                </svg>
                                            </div>
                                        </div>
                                        <p class="card-text mb-0 d-flex">students</p>
                                        <p class="text-center mb-0 d-flex text-primary">Level 1</p>
                                    </div>
                                </div>
                            </div>
                            <!-- <div class="glide__slide">
                                <div class="card mb-5 sh-25">
                                    <div class="card-body text-center align-items-center d-flex flex-column justify-content-between">
                                        <div class="d-flex sw-6 sh-6 bg-gradient-light mb-4 align-items-center justify-content-center rounded-xl position-relative mt-3">
                                            <i data-acorn-icon="crown" class="text-white"></i>
                                            <div class="achievement bg position-absolute">
                                                <svg width="75" height="75" viewBox="0 0 75 75" fill="black" xmlns="http://www.w3.org/2000/svg">
                                                    <path
                                                            fill-rule="evenodd"
                                                            clip-rule="evenodd"
                                                            d="M15.3422 7.24333C21.5482 2.69119 29.2117 0 37.5 0C45.7883 0 53.4518 2.69119 59.6578 7.24333C60.5562 7.90233 60.7431 9.15516 60.0752 10.0416C59.4073 10.9281 58.1375 11.1124 57.2391 10.4534C51.7048 6.39402 44.8833 4 37.5 4C30.1167 4 23.2952 6.39403 17.7609 10.4535C16.8625 11.1124 15.5927 10.9281 14.9248 10.0416C14.2569 9.15516 14.4438 7.90233 15.3422 7.24333ZM65.0942 15.1001C66.006 14.4592 67.2717 14.6688 67.9213 15.5684C72.3763 21.7377 75 29.3164 75 37.5C75 45.6836 72.3763 53.2623 67.9213 59.4316C67.2717 60.3311 66.006 60.5408 65.0942 59.8999C64.1825 59.2589 63.97 58.0101 64.6196 57.1105C68.599 51.5998 70.9459 44.8284 70.9459 37.5C70.9459 30.1716 68.599 23.4002 64.6196 17.8895C63.97 16.9899 64.1825 15.7411 65.0942 15.1001ZM9.90579 15.1001C10.8175 15.7411 11.03 16.9899 10.3804 17.8895C6.40105 23.4002 4.05405 30.1716 4.05405 37.5C4.05405 44.8284 6.40105 51.5998 10.3804 57.1105C11.03 58.0101 10.8175 59.2589 9.90579 59.8999C8.99405 60.5408 7.72832 60.3312 7.07871 59.4316C2.62373 53.2623 0 45.6836 0 37.5C0 29.3164 2.62373 21.7377 7.07871 15.5684C7.72832 14.6689 8.99404 14.4592 9.90579 15.1001ZM14.9248 64.9584C15.5927 64.0719 16.8625 63.8876 17.7609 64.5466C23.2952 68.606 30.1167 71 37.5 71C44.8833 71 51.7048 68.606 57.2391 64.5465C58.1375 63.8876 59.4073 64.0719 60.0752 64.9584C60.7431 65.8448 60.5562 67.0977 59.6578 67.7567C53.4518 72.3088 45.7883 75 37.5 75C29.2117 75 21.5483 72.3088 15.3422 67.7567C14.4438 67.0977 14.2569 65.8448 14.9248 64.9584Z"
                                                    />
                                                </svg>
                                            </div>
                                            <div class="achievement level position-absolute">
                                                <svg width="75" height="75" viewBox="0 0 75 75" fill="black" xmlns="http://www.w3.org/2000/svg">
                                                    <path
                                                            fill-rule="evenodd"
                                                            clip-rule="evenodd"
                                                            d="M15.3422 7.24333C21.5482 2.69119 29.2117 0 37.5 0C45.7883 0 53.4518 2.69119 59.6578 7.24333C60.5562 7.90233 60.7431 9.15516 60.0752 10.0416C59.4073 10.9281 58.1375 11.1124 57.2391 10.4534C51.7048 6.39402 44.8833 4 37.5 4C30.1167 4 23.2952 6.39403 17.7609 10.4535C16.8625 11.1124 15.5927 10.9281 14.9248 10.0416C14.2569 9.15516 14.4438 7.90233 15.3422 7.24333ZM65.0942 15.1001C66.006 14.4592 67.2717 14.6688 67.9213 15.5684C72.3763 21.7377 75 29.3164 75 37.5C75 45.6836 72.3763 53.2623 67.9213 59.4316C67.2717 60.3311 66.006 60.5408 65.0942 59.8999C64.1825 59.2589 63.97 58.0101 64.6196 57.1105C68.599 51.5998 70.9459 44.8284 70.9459 37.5C70.9459 30.1716 68.599 23.4002 64.6196 17.8895C63.97 16.9899 64.1825 15.7411 65.0942 15.1001ZM9.90579 15.1001C10.8175 15.7411 11.03 16.9899 10.3804 17.8895C6.40105 23.4002 4.05405 30.1716 4.05405 37.5C4.05405 44.8284 6.40105 51.5998 10.3804 57.1105C11.03 58.0101 10.8175 59.2589 9.90579 59.8999C8.99405 60.5408 7.72832 60.3312 7.07871 59.4316C2.62373 53.2623 0 45.6836 0 37.5C0 29.3164 2.62373 21.7377 7.07871 15.5684C7.72832 14.6689 8.99404 14.4592 9.90579 15.1001ZM14.9248 64.9584C15.5927 64.0719 16.8625 63.8876 17.7609 64.5466C23.2952 68.606 30.1167 71 37.5 71C44.8833 71 51.7048 68.606 57.2391 64.5465C58.1375 63.8876 59.4073 64.0719 60.0752 64.9584C60.7431 65.8448 60.5562 67.0977 59.6578 67.7567C53.4518 72.3088 45.7883 75 37.5 75C29.2117 75 21.5483 72.3088 15.3422 67.7567C14.4438 67.0977 14.2569 65.8448 14.9248 64.9584Z"
                                                    />
                                                </svg>
                                            </div>
                                        </div>
                                        <p class="card-text mb-0 d-flex">Python Master</p>
                                        <p class="text-center mb-0 d-flex text-primary">Level 2</p>
                                    </div>
                                </div>
                            </div> -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Achievements End -->

        <!-- Trending Courses Start -->
        <!-- <h2 class="small-title">Trending Courses</h2> -->
       
        <div class="row row-cols-1 row-cols-md-2 row-cols-xl-2 g-2 mb-5 mt-5">
        
        <div class="col-auto">
        <h1 class="headerr">Visit And Sales Statistics Graph</h1>
                                   
                                </div>
       <div class="chart-container">
         <div class="base"></div>
             <!-- Left Side Meter-->
         <ul class="meter">
           <li><div>1000</div></li>
           <li><div>800</div></li>
           <li><div>600</div></li>
           <li><div>400</div></li>
           <li><div>Less Than 200</div></li>
         </ul>
         <!-- Background-Grid -->
         <table>
           <tr>
             <td></td>
             <td></td>
             <td></td>
             <td></td>
             <td></td>
             <td></td>
             <td></td>
             <td></td>
           </tr>
           <tr>
             <td></td>
             <td></td>
             <td></td>
             <td></td>
             <td></td>
             <td></td>
             <td></td>
             <td></td>
           </tr>
           <tr>
             <td></td>
             <td></td>
             <td></td>
             <td></td>
             <td></td>
             <td></td>
             <td></td>
             <td></td>
           </tr>
           <tr>
             <td></td>
             <td></td>
             <td></td>
             <td></td>
             <td></td>
             <td></td>
             <td></td>
             <td></td>
           </tr>
           <tr>
             <td></td>
             <td></td>
             <td></td>
             <td></td>
             <td></td>
             <td></td>
             <td></td>
             <td></td>
           </tr>
         </table>
         <!-- End Background Grid -->
      
         <div class="bar one"></div>   
         <div class="bar two"></div>   
         <div class="bar three"></div>
         <div class="bar four"></div>   
         <div class="bar five"></div>   
         <div class="bar six"></div>
         <div class="bar seven"></div>   
         <div class="bar eight"></div> 
       </div>
     
          
        </div>
        <!-- Trending Courses End -->

       
        <div class="row">
            <!-- Related Subjects Start -->
            <div class="col-xl-4 mb-5">
                <h2 class="small-title">Related Subjects</h2>
                <div class="row g-2">
                    <div class="col-6 col-xl-6 sh-19">
                        <div class="card h-100 hover-scale-up">
                            <a class="card-body text-center" href="/Course/List">
                                <!-- <i data-acorn-icon="cupcake" class="text-primary"></i> -->
                                <p class="heading mt-3 text-body">Weekly Sales</p>
                                <div class="text-extra-small fw-medium text-muted">Increased by 60%</div>
                            </a>
                        </div>
                    </div>
                    <div class="col-6 col-xl-6 sh-19">
                        <div class="card h-100 hover-scale-up">
                            <a class="card-body text-center" href="/Course/List">
                                <!-- <i data-acorn-icon="loaf" class="text-primary"></i> -->
                                <p class="heading mt-3 text-body">Weekly Orders</p>
                                <div class="text-extra-small fw-medium text-muted">Decreased by 10%</div>
                            </a>
                        </div>
                    </div>
                    <div class="col-6 col-xl-6 sh-19">
                        <div class="card h-100 hover-scale-up">
                            <a class="card-body text-center" href="/Course/List">
                                <!-- <i data-acorn-icon="radish" class="text-primary"></i> -->
                                <p class="heading mt-3 text-body">Visitors Online</p>
                                <div class="text-extra-small fw-medium text-muted">Decreased by 10%</div>
                            </a>
                        </div>
                    </div>
                    <div class="col-6 col-xl-6 sh-19">
                        <div class="card h-100 hover-scale-up">
                            <a class="card-body text-center" href="/Course/List">
                                <!-- <i data-acorn-icon="banana" class="text-primary"></i> -->
                                <p class="heading mt-3 text-body">Today Online </p>
                                <div class="text-extra-small fw-medium text-muted"> Increased by 12%</div>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Related Subjects End -->

            <!-- Your Time Start -->
            <div class="col-xl-4 mb-5">
                <h2 class="small-title">Your Time</h2>
                <div class="card sh-40 h-xl-100-card">
                    <div class="card-body h-100">
                        <div class="h-100">
                            <canvas id="timeChart"></canvas>
                            <div
                                    class="custom-tooltip position-absolute bg-foreground rounded-md border border-separator pe-none p-3 d-flex flex-column z-index-1 align-items-center opacity-0 basic-transform-transition"
                            >
                                <div
                                        class="icon-container border d-flex align-items-center justify-content-center align-self-center rounded-xl sh-5 sw-5 rounded-xl mb-3"
                                >
                                    <span class="icon"></span>
                                </div>
                                <span class="text d-flex align-middle text-alternate align-items-center text-small">Employee</span>
                                <span class="value d-flex align-middle text-body align-items-center cta-4">300</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Your Time End -->

            <!-- Paths Start -->
            <div class="col-xl-4 mb-5">
                <h2 class="small-title">Paths</h2>
                <div class="card sh-40 h-xl-100-card">
                    <div class="card-body d-flex align-items-center justify-content-center h-100">
                        <div class="text-center">
                            <img src="/img/illustration/icon-analytics.webp" class="theme-filter mb-3" alt="launch" />
                            <p class="mb-3">You are not on any path!</p>
                            <a href="/Path/List" class="btn btn-icon btn-icon-start btn-primary mt-3 stretched-link">
                                <i data-acorn-icon="chevron-right"></i>
                                <span>Take a Path</span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Paths End -->
        </div>

        <!-- Content End -->
    </div>
@endsection
