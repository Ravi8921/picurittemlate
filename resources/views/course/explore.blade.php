@php
    $html_tag_data = [];
    $title = 'Advertisments';
    $description= 'Acorn elearning platform course explore.';
@endphp
@extends('layout',['html_tag_data'=>$html_tag_data, 'title'=>$title, 'description'=>$description,])

@section('css')
@endsection

@section('js_vendor')
    <script src="/js/vendor/jquery.barrating.min.js"></script>
@endsection

@section('js_page')
    <script src="/js/pages/course.explore.js"></script>
@endsection

@section('content')
    <div class="container">
        <!-- Title and Top Buttons Start -->
        <div class="page-title-container">
            <div class="row">
                <!-- Title Start -->
                <div class="col-12 col-md-7">
                    <h1 class="mb-0 pb-0 display-4" id="title">{{ $title }}</h1>
                    <nav class="breadcrumb-container d-inline-block" aria-label="breadcrumb">
                        <ul class="breadcrumb pt-0">
                            <li class="breadcrumb-item"><a href="/">Home</a></li>
                        </ul>
                    </nav>
                </div>
                <!-- Title End -->
            </div>
        </div>
        <!-- Title and Top Buttons End -->

        <!-- Content Start -->

        <!-- Popular Start -->
        <div class="d-flex justify-content-between">
            <h2 class="small-title">Popular</h2>
            <div class="mt-n1">
                <button class="btn btn-icon btn-icon-end btn-background pe-0 pt-0" type="button">
                 <a  href="/Course/TeacherList">View All</a>
                    <i data-acorn-icon="chevron-right"></i>
                </button>
            </div>
        </div>
        <div class="row row-cols-1 row-cols-sm-2 row-cols-lg-4 g-3 mb-5">
            <div class="col">
                <div class="card h-100">
                    <img src="/img/course/small/phy.jpg" class="card-img-top sh-22" alt="card image" />
                    <div class="card-body">
                        <h1>Deepak S.
4+ years experience.</h1>
                        <h5 class="heading mb-0"><a href="/Course/Detail" class="body-link stretched-link">Mathematics is not about number, equations or computation and algorithms, It is about understanding.</a></h5>
                    </div>









                    
                    <div class="card-footer border-0 pt-0">

                    <div class="br-wrapper br-theme-cs-icon d-inline-block">
                                <select class="rating" name="rating" autocomplete="off" data-readonly="true" data-initial-rating="3">
                                    <option value="1">1</option>
                                    <option value="2">2</option>
                                    <option value="3">3</option>
                                    <option value="4">4</option>
                                    <option value="5">5</option>
                                </select>
                            </div>
                    <div class="card-text mb-2 mt-2">
                            <div class="text-muted text-overline "style =fontsize:"20px">
                            <div><span>Prices :-</span> $122.15</div>
                            </div>
                          
                        </div>

                        <div class="mb-2">
                            <div class="br-wrapper br-theme-cs-icon d-inline-block">
                            <button class="btn btn-sm btn-icon btn-icon-start btn-outline-primary ms-1" type="button">
                                                    <i data-acorn-icon="form-check" data-acorn-size="15"></i>
                                                    <span class="d-none d-xxl-inline-block">Approve</span>
                                                </button>
                                                <button class="btn btn-sm btn-icon btn-icon-start btn-outline-primary ms-1" type="button">
                                                    <i data-acorn-icon="bin" data-acorn-size="15"></i>
                                                    <span class="d-none d-xxl-inline-block">Delete</span>
                                                </button>
                            </div>
                            <div class="text-muted d-inline-block text-small align-text-top"></div>
                        </div>
                       
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card h-100">
                    <img src="/img/course/small/course-2.webp" class="card-img-top sh-22" alt="card image" />
                    <div class="card-body">
                        <h1>Connect with Sudipta</h1>
                        <h5 class="heading mb-0"><a href="/Course/Detail" class="body-link stretched-link">

Chat with Sudipta to see if they meet your tutoring needs. You can use our auto-suggestions to get the conversation going, or simply type your own message.</a></h5>
                    </div>
                    <div class="card-footer border-0 pt-0">

                    <div class="br-wrapper br-theme-cs-icon d-inline-block">
                                <select class="rating" name="rating" autocomplete="off" data-readonly="true" data-initial-rating="3">
                                    <option value="1">1</option>
                                    <option value="2">2</option>
                                    <option value="3">3</option>
                                    <option value="4">4</option>
                                    <option value="5">5</option>
                                </select>
                            </div>
                    <div class="card-text mb-2 mt-2">
                            <div class="text-muted text-overline "style =fontsize:"20px">
                            <div><span>Prices :-</span> $122.15</div>
                            </div>
                          
                        </div>


                        <div class="mb-2">
                            <div class="br-wrapper br-theme-cs-icon d-inline-block">
                            <button class="btn btn-sm btn-icon btn-icon-start btn-outline-primary ms-1" type="button">
                                                    <i data-acorn-icon="form-check" data-acorn-size="15"></i>
                                                    <span class="d-none d-xxl-inline-block">Approve</span>
                                                </button>
                                                <button class="btn btn-sm btn-icon btn-icon-start btn-outline-primary ms-1" type="button">
                                                    <i data-acorn-icon="bin" data-acorn-size="15"></i>
                                                    <span class="d-none d-xxl-inline-block">Delete</span>
                                                </button>
                            </div>
                            <!-- <div class="text-muted d-inline-block text-small align-text-top">(84)</div> -->
                        </div>
                       
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card h-100">
                    <img src="/img/course/small/chem.webp" class="card-img-top sh-22" alt="card image" />
                    <div class="card-body">
                    <h1>An introduction to the main element</h1>
                        <h5 class="heading mb-0"><a href="/Course/Detail" class="body-link stretched-link">I have Masters in Chemistry. I love to deal with chemicals and intersted in knowing chemistry in everyday life so i chose to pursue my education in chemistry. </a></h5>
                    </div>
                    <div class="card-footer border-0 pt-0">

                    <div class="br-wrapper br-theme-cs-icon d-inline-block">
                                <select class="rating" name="rating" autocomplete="off" data-readonly="true" data-initial-rating="3">
                                    <option value="1">1</option>
                                    <option value="2">2</option>
                                    <option value="3">3</option>
                                    <option value="4">4</option>
                                    <option value="5">5</option>
                                </select>
                            </div>
                    <div class="card-text mb-2 mt-2">
                            <div class="text-muted text-overline "style =fontsize:"20px">
                            <div><span>Prices :-</span> $122.15</div>
                            </div>
                          
                        </div>

                        <div class="mb-2">
                            <div class="br-wrapper br-theme-cs-icon d-inline-block">
                            <button class="btn btn-sm btn-icon btn-icon-start btn-outline-primary ms-1" type="button">
                                                    <i data-acorn-icon="form-check" data-acorn-size="15"></i>
                                                    <span class="d-none d-xxl-inline-block">Approve</span>
                                                </button>
                                                <button class="btn btn-sm btn-icon btn-icon-start btn-outline-primary ms-1" type="button">
                                                    <i data-acorn-icon="bin" data-acorn-size="15"></i>
                                                    <span class="d-none d-xxl-inline-block">Delete</span>
                                                </button>
                            </div>
                            <div class="text-muted d-inline-block text-small align-text-top"></div>
                        </div>
                      
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card h-100">
                    <img src="/img/course/small/bio.webp" class="card-img-top sh-22" alt="card image" />
                    <div class="card-body">
                    <h1>Connect with subhdipa</h1>
                        <h5 class="heading mb-0"><a href="/Course/Detail" class="body-link stretched-link">Biology - Everything from cell to organism Anatomy and physiology of human beings Chemistry - Carbon and its compounds Balancing reactions English (Reading and writing) - Improve vocabulary, Reading and writing skills Maths 
</a></h5>
                    </div>
                    <div class="card-footer border-0 pt-0">

                    <div class="br-wrapper br-theme-cs-icon d-inline-block">
                                <select class="rating" name="rating" autocomplete="off" data-readonly="true" data-initial-rating="3">
                                    <option value="1">1</option>
                                    <option value="2">2</option>
                                    <option value="3">3</option>
                                    <option value="4">4</option>
                                    <option value="5">5</option>
                                </select>
                            </div>
                    <div class="card-text mb-2 mt-2">
                            <div class="text-muted text-overline "style =fontsize:"20px">
                            <div><span>Prices :-</span> $122.15</div>
                            </div>
                          
                        </div>
                        <div class="mb-2">
                            <div class="br-wrapper br-theme-cs-icon d-inline-block">
                            <button class="btn btn-sm btn-icon btn-icon-start btn-outline-primary ms-1" type="button">
                                                    <i data-acorn-icon="form-check" data-acorn-size="15"></i>
                                                    <span class="d-none d-xxl-inline-block">Approve</span>
                                                </button>
                                                <button class="btn btn-sm btn-icon btn-icon-start btn-outline-primary ms-1" type="button">
                                                    <i data-acorn-icon="bin" data-acorn-size="15"></i>
                                                    <span class="d-none d-xxl-inline-block">Delete</span>
                                                </button>
                            </div>
                            <div class="text-muted d-inline-block text-small align-text-top"></div>
                        </div>
                     
                    </div>
                </div>
            </div>
        </div>
        <!-- Popular End -->

        <!-- Trending Start -->
        <div class="d-flex justify-content-between">
            <h2 class="small-title">Jobseeker</h2>
            <div class="mt-n1">

            <button class="btn btn-icon btn-icon-end btn-background pe-0 pt-0" type="button">
                 <a  href="/Course/List">View All</a>
                    <i data-acorn-icon="chevron-right"></i>
                </button>

<!-- 
                <button class="btn btn-icon btn-icon-end btn-background pe-0 pt-0" type="button">
                <a href="">
                            <span class="label">View All</span>
                        </a>
                
                    <i data-acorn-icon="chevron-right"></i>
                </button> -->
            </div>
        </div>
        <div class="row row-cols-1 row-cols-sm-2 row-cols-lg-4 g-3 mb-5">
            <div class="col">
                <div class="card h-100">
                    <!-- <img src="/img/course/small/course-5.webp" class="card-img-top sh-22" alt="card image" /> -->
                    <div class="card-body">
                    <h1>Digital Marketing Specialist</h1>
                        <h5 class="heading mb-0"><a href="/Course/Detail" class="body-link stretched-link">APlan, design, and execute online customer acquisition campaigns
Scale and manage PPC and PPM campaigns across multiple channels like Google, Facebook, LinkedIn, etc.
</a></h5>
                    </div>
                    <div class="card-footer border-0 pt-0">
                        <div class="mb-2">
                       
                            <div class="br-wrapper br-theme-cs-icon d-inline-block">
                              
                            </div>
                             <div class="text-muted d-inline-block  align-text-top"> Job-type :-</div>
                            <div class="text-muted d-inline-block  align-text-top"> Full time</div>
                        </div>
                        <div class="card-text mb-0">
                            <div class="text-muted text-overline text-small">
                            <div class="text-muted  text-large">
                              Salary
                            </div>
                            <div>Rs 15000 -20000 </div>
                            </div>
                            <div class="text-muted d-inline-block  align-text-top"> Location :-</div>
                            <div class="text-muted d-inline-block  align-text-top">Patna</div> 
                            <div class="br-wrapper br-theme-cs-icon d-inline-block mt-2 ">
                            <button class="btn btn-sm btn-icon btn-icon-start btn-outline-primary ms-1" type="button">
                                                    <i data-acorn-icon="form-check" data-acorn-size="15"></i>
                                                    <span class="d-none d-xxl-inline-block">Approve</span>
                                                </button>
                                                <button class="btn btn-sm btn-icon btn-icon-start btn-outline-primary ms-1" type="button">
                                                    <i data-acorn-icon="bin" data-acorn-size="15"></i>
                                                    <span class="d-none d-xxl-inline-block">Delete</span>
                                                </button>
                            </div>
                    </div>
                        </div>
                       
                      
                            
                           
                </div>
            </div>
            <div class="col">
                <div class="card h-100">
                    <!-- <img src="/img/course/small/course-6.webp" class="card-img-top sh-22" alt="card image" /> -->
                    <div class="card-body">
                        <h1>
Senior Officer, CDD</h1>
                        <h5 class="heading mb-0"><a href="/Course/Detail" class="body-link stretched-link">Primary responsibility for ensuring accurate and timely completion of CDD applications / renewals,identification of required documentation,sourcing of underlying documents,and maintenance of eCDD static data. People and Talent</a></h5>
                    </div>
                    <div class="card-footer border-0 pt-0">
                        <div class="mb-2">
                            <div class="br-wrapper br-theme-cs-icon d-inline-block">
                                <select class="rating" name="rating" autocomplete="off" data-readonly="true" data-initial-rating="3">
                                    <!-- <option value="1">1</option>
                                    <option value="2">2</option>
                                    <option value="3">3</option>
                                    <option value="4">4</option>
                                    <option value="5">5</option> -->
                                </select>
                            </div>
                            <div class="text-muted d-inline-block  align-text-top"> Job-type :-</div>
                            <div class="text-muted d-inline-block  align-text-top"> Full time</div>
                        </div>
                        <div class="card-text mb-0">
                            <div class="text-muted text-overline text-small">
                            <div class="text-muted  text-large">
                              Salary
                            </div>
                            <div>Rs 15000 -20000 </div>
                            </div>
                             <div class="text-muted d-inline-block  align-text-top"> Location :-</div>
                            <div class="text-muted d-inline-block  align-text-top"> patna</div>
                            <div class="br-wrapper br-theme-cs-icon d-inline-block mt-2 ">
                            <button class="btn btn-sm btn-icon btn-icon-start btn-outline-primary ms-1" type="button">
                                                    <i data-acorn-icon="form-check" data-acorn-size="15"></i>
                                                    <span class="d-none d-xxl-inline-block">Approve</span>
                                                </button>
                                                <button class="btn btn-sm btn-icon btn-icon-start btn-outline-primary ms-1" type="button">
                                                    <i data-acorn-icon="bin" data-acorn-size="15"></i>
                                                    <span class="d-none d-xxl-inline-block">Delete</span>
                                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card h-100">
                    <!-- <img src="/img/course/small/course-7.webp" class="card-img-top sh-22" alt="card image" /> -->
                    <div class="card-body">
                         <h1>   
Senior Technical Specialist
</h1>
                 
                        <h5 class="heading mb-0"><a href="/Course/Detail" class="body-link stretched-link">Re-engineer legacy applications and build state of the art platform
Envision CrApprove Origination 2.0 platform and align it with Bank s NextGen technology vision
Consistently leads delivery of valuable features
</a></h5>
                    </div>
                    <div class="card-footer border-0 pt-0">
                        <div class="mb-2">
                            <div class="br-wrapper br-theme-cs-icon d-inline-block">
                                <select class="rating" name="rating" autocomplete="off" data-readonly="true" data-initial-rating="5">
                                    <!-- <option value="1">1</option>
                                    <option value="2">2</option>
                                    <option value="3">3</option>
                                    <option value="4">4</option>
                                    <option value="5">5</option> -->
                                </select>
                            </div>
                            <div class="text-muted d-inline-block  align-text-top"> Job-type :-</div>
                            <div class="text-muted d-inline-block  align-text-top"> Full time</div>
                        </div>
                        <div class="card-text mb-0">
                            <div class="text-muted text-overline text-small">
                            <div class="text-muted  text-large">
                              Salary
                            </div>
                            <div>Rs 15000 -20000 </div>
                            </div>
                             <div class="text-muted d-inline-block  align-text-top"> Location :-</div>
                            <div class="text-muted d-inline-block  align-text-top"> patna</div>
                            <div class="br-wrapper br-theme-cs-icon d-inline-block mt-2 ">
                            <button class="btn btn-sm btn-icon btn-icon-start btn-outline-primary ms-1" type="button">
                                                    <i data-acorn-icon="form-check" data-acorn-size="15"></i>
                                                    <span class="d-none d-xxl-inline-block">Approve</span>
                                                </button>
                                                <button class="btn btn-sm btn-icon btn-icon-start btn-outline-primary ms-1" type="button">
                                                    <i data-acorn-icon="bin" data-acorn-size="15"></i>
                                                    <span class="d-none d-xxl-inline-block">Delete</span>
                                                </button>
                            </div>
                        </div>
                        
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card h-100">
                    <!-- <img src="/img/course/small/course-8.webp" class="card-img-top sh-22" alt="card image" /> -->
                    <div class="card-body">
                    <h1>   Exec, Business Development
</h1>
                        <h5 class="heading mb-0"><a href="/Course/Detail" class="body-link stretched-link">Meet the business objectives initiated by the respective country Priority Clients business
Customer focused need-based selling
Deepen customer relationship and maximize penetration
</a></h5>
                    </div>
                    <div class="card-footer border-0 pt-0">
                        <div class="mb-2">
                            <div class="br-wrapper br-theme-cs-icon d-inline-block">
                                <select class="rating" name="rating" autocomplete="off" data-readonly="true" data-initial-rating="5">
                                    <!-- <option value="1">1</option>
                                    <option value="2">2</option>
                                    <option value="3">3</option>
                                    <option value="4">4</option>
                                    <option value="5">5</option> -->
                                </select>
                            </div>
                            <div class="text-muted d-inline-block  align-text-top"> Job-type :-</div>
                            <div class="text-muted d-inline-block  align-text-top"> Full time</div>
                        </div>
                        <div class="card-text mb-0">
                            <div class="text-muted text-overline text-small ">
                            <div class="text-muted  d-inline-block text-large">
                              Salary
                            </div>
                            <div>Rs 2000-24000</div>
                            </div>
                            <div class="text-muted d-inline-block  align-text-top"> Location :-</div>
                            <div class="text-muted d-inline-block  align-text-top">Delhi</div>
                            <div class="br-wrapper br-theme-cs-icon d-inline-block mt-2 ">
                            <button class="btn btn-sm btn-icon btn-icon-start btn-outline-primary ms-1" type="button">
                                                    <i data-acorn-icon="form-check" data-acorn-size="15"></i>
                                                    <span class="d-none d-xxl-inline-block">Approve</span>
                                                </button>
                                                <button class="btn btn-sm btn-icon btn-icon-start btn-outline-primary ms-1" type="button">
                                                    <i data-acorn-icon="bin" data-acorn-size="15"></i>
                                                    <span class="d-none d-xxl-inline-block">Delete</span>
                                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Trending End -->

        <!-- Paths Start -->
        <!-- <h2 class="small-title">Paths</h2>
        <div class="row g-3 row-cols-1 row-cols-xl-2 row-cols-xxl-4 mb-5">
            <div class="col">
                <div class="card h-100">
                    <div class="card-body">
                        <div class="text-center">
                            <img src="/img/illustration/icon-performance.webp" class="theme-filter" alt="performance" />
                            <div class="d-flex flex-column sh-5">
                                <a href="/Path/List" class="heading stretched-link">Frontend Developer</a>
                            </div>
                        </div>
                        <div class="text-muted">Sweet roll apple pie tiramisu bonbon sugar plum muffin sesame snaps chocolate. Lollipop halvah powder.</div>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card h-100">
                    <div class="card-body">
                        <div class="text-center">
                            <img src="/img/illustration/icon-experiment.webp" class="theme-filter" alt="experiment" />
                            <div class="d-flex flex-column sh-5">
                                <a href="/Path/List" class="heading stretched-link">CSS Mastery</a>
                            </div>
                        </div>
                        <div class="text-muted">Chocolate cake marshmallow bear claw sweet. Apple pie macaroon sesame snaps candy jelly pudding.</div>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card h-100">
                    <div class="card-body">
                        <div class="text-center">
                            <img src="/img/illustration/icon-storage.webp" class="theme-filter" alt="storage" />
                            <div class="d-flex flex-column sh-5">
                                <a href="/Path/List" class="heading stretched-link">Webmaster</a>
                            </div>
                        </div>
                        <div class="text-muted">Cheesecake chocolate carrot cake pie lollipop lemon drops toffee lollipop.</div>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card h-100">
                    <div class="card-body">
                        <div class="text-center">
                            <img src="/img/illustration/icon-accounts.webp" class="theme-filter" alt="people" />
                            <div class="d-flex flex-column sh-5">
                                <a href="/Path/List" class="heading stretched-link">Backend Developer</a>
                            </div>
                        </div>
                        <div class="text-muted">Cake tart apple pie bear bonbon sugar plum muffin sesame snaps sweet roll gingerbread bonbon sugar.</div>
                    </div>
                </div>
            </div>
        </div> -->
        <!-- Paths End -->

        <h2 class="small-title">Sale</h2>
        <div class="row g-3">
            <div class="col-lg-6 mb-5 position-relative">
                <span class="badge rounded-pill bg-primary me-1 position-absolute e-4 t-n2 z-index-1">-30%</span>
                <div class="card w-100 sh-24 hover-img-scale-up">
                    <img src="/img/banner/cta-horizontal-short-1.webp" class="card-img h-100 scale" alt="card image" />
                    <div class="card-img-overlay d-flex flex-column justify-content-between bg-transparent">
                        <div>
                            <div class="cta-3 mb-3 text-white opacity-75 w-75">Introduction to Machine Learning</div>
                            <div class="mb-4 text-white opacity-75">$ 26.25</div>
                            <a href="/Course/Detail" class="btn btn-icon btn-icon-start btn-primary stretched-link">
                                <i data-acorn-icon="chevron-right"></i>
                                <span>View</span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 mb-5 position-relative">
                <span class="badge rounded-pill bg-primary me-1 position-absolute e-4 t-n2 z-index-1">-25%</span>
                <div class="card w-100 sh-24 hover-img-scale-up">
                    <img src="/img/banner/cta-horizontal-short-2.webp" class="card-img h-100 scale" alt="card image" />
                    <div class="card-img-overlay d-flex flex-column justify-content-between bg-transparent">
                        <div>
                            <div class="cta-3 mb-3 text-white opacity-75 w-75">Basic Robotics Coding with Arduino</div>
                            <div class="mb-4 text-white opacity-75">$ 19.80</div>
                            <a href="/Course/Detail" class="btn btn-icon btn-icon-start btn-primary stretched-link">
                                <i data-acorn-icon="chevron-right"></i>
                                <span>View</span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Content End -->
    </div>
@endsection
