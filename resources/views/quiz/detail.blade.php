@php
    $html_tag_data = [];
    $title = 'User Detail';
    $description= 'Acorn elearning platform instructor detail.';
@endphp
@extends('layout',['html_tag_data'=>$html_tag_data, 'title'=>$title, 'description'=>$description,])

@section('css')
@endsection

@section('js_vendor')
    <script src="/js/vendor/jquery.barrating.min.js"></script>
@endsection

@section('js_page')
    <script src="/js/pages/instructor.detail.js"></script>
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
                            <li class="breadcrumb-item"><a href="/Users/List">Users</a></li>
                        </ul>
                    </nav>
                </div>
                <!-- Title End -->
            </div>
        </div>
        <!-- Title and Top Buttons End -->

        <!-- Content Start -->
        <div class="row g-5">
            <!-- Left Side Start -->
            <div class="col-12 col-xl-4 col-xxl-3">
                <!-- Biography Start -->
                <h2 class="small-title">About</h2>
                <div class="card">
                    <div class="card-body mb-n5">
                        <div class="d-flex align-items-center flex-column mb-5">
                            <div class="mb-4 d-flex align-items-center flex-column">
                                <div class="sw-13 position-relative mb-3">
                                    <img src="/img/profile/profile-6.webp" class="img-fluid rounded-xl" alt="thumb" />
                                </div>
                                <div class="h5 mb-0">Eneida Farzana</div>
                                <div class="text-muted mb-2">"User type"</div>
                                <div class="text-muted text-center">Cake oat cake sugar plum caramels fruitcake tart dessert jelly beans pudding.</div>
                            </div>
                            <div class="d-flex flex-row justify-content-between w-100 w-sm-50 w-xl-100">
                                <button type="button" class="btn btn-primary w-100 me-2">Promote</button>
                                <button type="button" class="btn btn-outline-primary w-100 me-2">Block</button>
                               
                            </div>
                        </div>
                       
                        <div class="mb-5">
                            <p class="text-small text-muted mb-2">CONTACT</p>
                          
                            <a href="#" class="d-block body-link">
                                <i data-acorn-icon="email" class="me-2" data-acorn-size="17"></i>
                                <span class="align-middle">contact@blainecottrell.com</span>
                            </a>
                        </div>
                    </div>
                </div>
                <!-- Biography End -->
            </div>
            <!-- Left Side End -->

            <!-- Right Side Start -->
            <div class="col-12 col-xl-8 col-xxl-9">
                <!-- Stats Start -->
                <h2 class="small-title">Stats</h2>
                <div class="row g-3 mb-5">
                    <div class="col-12 col-lg-6 col-xxl-3">
                        <div class="card">
                            <div class="card-body">
                                <div class="heading mb-0 d-flex justify-content-between lh-1-25 mb-3">
                                    <span>Students</span>
                                    <i data-acorn-icon="presentation" class="text-primary"></i>
                                </div>
                                <div class="text-medium text-muted mb-1">
                                    <span class="text-medium">3 New</span>
                                </div>
                                <div class="cta-1 text-primary">35</div>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-lg-6 col-xxl-3">
                        <div class="card">
                            <div class="card-body">
                                <div class="heading mb-0 d-flex justify-content-between lh-1-25 mb-3">
                                    <span>Rating</span>
                                    <i data-acorn-icon="star" class="text-primary"></i>
                                </div>
                                <div class="text-medium text-muted mb-1">
                                    <span class="text-medium">345 Users</span>
                                </div>
                                <div class="cta-1 text-primary">4.85</div>
                            </div>
                        </div>
                    </div>
                    {{-- <div class="col-12 col-lg-6 col-xxl-3">
                        <div class="card">
                            <div class="card-body">
                                <div class="heading mb-0 d-flex justify-content-between lh-1-25 mb-3">
                                    <span>Trainee</span>
                                    <i data-acorn-icon="diploma" class="text-primary"></i>
                                </div>
                                <div class="text-medium text-muted mb-1">
                                    <span class="text-medium">~456 Monthly</span>
                                </div>
                                <div class="cta-1 text-primary">24.453</div>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-lg-6 col-xxl-3">
                        <div class="card">
                            <div class="card-body">
                                <div class="heading mb-0 d-flex justify-content-between lh-1-25 mb-3">
                                    <span>Content</span>
                                    <i data-acorn-icon="clock" class="text-primary"></i>
                                </div>
                                <div class="text-medium text-muted mb-1">
                                    <span class="text-medium">~15 Hours Weekly</span>
                                </div>
                                <div class="cta-1 text-primary">245 Hours</div>
                            </div>
                        </div>
                    </div> --}}
                </div>
                <!-- Stats End -->

                <!-- Courses Start -->
              
                <div class="row g-3 mb-5">
                    <div class="col-md-12 col-lg-12 col-xl-12 col-xxl-12">
                        <div class="page-title-container">
                        <div class="row">
                        <div class="col">
                        <h1 class="mb-0 pb-0 display-4" id="title">Profile</h1>
                        <nav class="breadcrumb-container d-inline-block" aria-label="breadcrumb">
                      
                        </nav>
                        </div>
                        <div class="col-12 col-sm-auto d-flex align-items-start justify-content-end d-block d-lg-none">
                        <button type="button" class="btn btn-icon btn-icon-start btn-outline-primary w-100 w-sm-auto" data-bs-toggle="dropdown">
                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" class="acorn-icons acorn-icons-gear undefined"><path d="M8.32233 3.75427C8.52487 1.45662 11.776 1.3967 11.898 3.68836C11.9675 4.99415 13.2898 5.76859 14.4394 5.17678C16.4568 4.13815 18.0312 7.02423 16.1709 8.35098C15.111 9.10697 15.0829 10.7051 16.1171 11.4225C17.932 12.6815 16.2552 15.6275 14.273 14.6626C13.1434 14.1128 11.7931 14.9365 11.6777 16.2457C11.4751 18.5434 8.22404 18.6033 8.10202 16.3116C8.03249 15.0059 6.71017 14.2314 5.56062 14.8232C3.54318 15.8619 1.96879 12.9758 3.82906 11.649C4.88905 10.893 4.91709 9.29487 3.88295 8.57749C2.06805 7.31848 3.74476 4.37247 5.72705 5.33737C6.85656 5.88718 8.20692 5.06347 8.32233 3.75427Z"></path><path d="M10 8C11.1046 8 12 8.89543 12 10V10C12 11.1046 11.1046 12 10 12V12C8.89543 12 8 11.1046 8 10V10C8 8.89543 8.89543 8 10 8V8Z"></path></svg>
                        <span>Settings</span>
                        </button>
                        <div class="dropdown-menu dropdown-menu-end sw-25 py-3 px-4" id="settingsMoveContent" data-move-target="#settingsColumn" data-move-breakpoint="lg"></div>
                        </div>
                        </div>
                        </div>
                        <h2 class="small-title">Public Info</h2>
                        <div class="card mb-5">
                        <div class="card-body">
                        <form>
                        <div class="mb-3 row">
                        <label class="col-lg-2 col-md-3 col-sm-4 col-form-label">Name</label>
                        <div class="col-sm-8 col-md-9 col-lg-10">
                        <input type="text" class="form-control" value="Lisa Jackson" name="name">
                        </div>
                        </div>
                        <div class="mb-3 row">
                        <label class="col-lg-2 col-md-3 col-sm-4 col-form-label">User Name</label>
                        <div class="col-sm-8 col-md-9 col-lg-10">
                        <input type="text" name="mail" class="form-control" value="writerofrohan">
                        </div>
                        </div>
                        
                        <div class="mb-3 row">
                        <label class="col-lg-2 col-md-3 col-sm-4 col-form-label">Location</label>
                        <div class="col-sm-8 col-md-9 col-lg-10">
                        <input type="text" class="form-control" name="address">
                        </div>
                        </div>
                        
                        <div class="mb-3 row">
                        <label class="col-lg-2 col-md-3 col-sm-4 col-form-label">Gender</label>
                        <div class="col-sm-8 col-md-9 col-lg-10">
                        <select class="select-single-no-search select2-hidden-accessible" name="gender"data-width="100%" id="genderSelect" data-select2-id="genderSelect" tabindex="-1" aria-hidden="true">
                        <option label="&nbsp;" data-select2-id="2"></option>
                        <option value="1">Female</option>
                        <option value="2">Male</option>
                        <option value="3">Other</option>
                        <option value="4">None</option>
                        </select>
                        </div>
                        </div>
                        <div class="mb-3 row">
                        <label class="col-lg-2 col-md-3 col-sm-4 col-form-label">Bio</label>
                        <div class="col-sm-8 col-md-9 col-lg-10">
                        <textarea class="form-control" rows="3" name="bio"> </textarea>
                        </div>
                        </div>
                        <div class="mb-3 row">
                        <label class="col-lg-2 col-md-3 col-sm-4 col-form-label">Email</label>
                        <div class="col-sm-8 col-md-9 col-lg-10">
                        <input type="email" name="email" class="form-control" value="me@lisajackson.com" disabled="disabled">
                        </div>
                        </div>
                        <div class="mb-3 row mt-5">
                        <div class="col-sm-8 col-md-9 col-lg-10 ms-auto">
                        <button type="submit" class="btn btn-primary">Update</button>
                        </div>
                        </div>
                        </form>
                        </div>
                        </div>
                       
                        
                        </div>
                        <div class="d-flex justify-content-between">
                            <h2 class="small-title">Students</h2>
                            <button class="btn btn-icon btn-icon-end btn-xs btn-background-alternate p-0 text-small" type="button">
                             
                                <i data-acorn-icon="chevron-right" class="align-middle" data-acorn-size="12"></i>
                            </button>
                        </div>
                    <div class="col-md-12 col-lg-6 col-xl-12 col-xxl-6">
                        <div class="card">
                            <div class="row g-0 h-auto sh-sm-19">
                                <div class="col-12 col-sm-auto h-100">
                                    <img src="/img/course/small/course-1.webp" alt="course" class="card-img card-img-horizontal-sm sh-19 h-sm-100 sw-sm-16 sw-lg-20" />
                                </div>
                                <div class="col-12 col-sm p-0 h-100">
                                    <div class="card-body">
                                        <a href="/Course/Detail" class="body-link clamp-line lh-1-5 mb-1 heading sh-6" data-line="2">
                                            "Student name"
                                        </a>
                                        
                                        <div class="card-text mb-0">
                                            <div>Date : </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <div class="col-md-12 col-lg-6 col-xl-12 col-xxl-6">
                        <div class="card">
                            <div class="row g-0 h-auto sh-sm-19">
                                <div class="col-12 col-sm-auto h-100">
                                    <img src="/img/course/small/course-2.webp" alt="course" class="card-img card-img-horizontal-sm sh-19 h-sm-100 sw-sm-16 sw-lg-20" />
                                </div>
                                <div class="col-12 col-sm p-0 h-100">
                                    <div class="card-body">
                                        <a href="/Course/Detail" class="body-link clamp-line lh-1-5 mb-1 heading sh-6" data-line="2"> "Student name"</a>
                                        <div class="br-wrapper br-theme-cs-icon d-inline-block">
                                            <select class="rating" name="rating" autocomplete="off" data-readonly="true" data-initial-rating="5">
                                                <option value="1">1</option>
                                                <option value="2">2</option>
                                                <option value="3">3</option>
                                                <option value="4">4</option>
                                                <option value="5">5</option>
                                            </select>
                                        </div>
                                        <div class="card-text mb-0">
                                            <div>Date : </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-12 col-lg-6 col-xl-12 col-xxl-6">
                        <div class="card">
                            <div class="row g-0 h-auto sh-sm-19">
                                <div class="col-12 col-sm-auto h-100">
                                    <img src="/img/course/small/course-3.webp" alt="course" class="card-img card-img-horizontal-sm sh-19 h-sm-100 sw-sm-16 sw-lg-20" />
                                </div>
                                <div class="col-12 col-sm p-0 h-100">
                                    <div class="card-body">
                                        <a href="/Course/Detail" class="body-link clamp-line lh-1-5 mb-1 heading sh-6" data-line="2"> "Student name"</a>
                                        <div class="br-wrapper br-theme-cs-icon d-inline-block">
                                            <select class="rating" name="rating" autocomplete="off" data-readonly="true" data-initial-rating="5">
                                                <option value="1">1</option>
                                                <option value="2">2</option>
                                                <option value="3">3</option>
                                                <option value="4">4</option>
                                                <option value="5">5</option>
                                            </select>
                                        </div>
                                        <div class="card-text mb-0">
                                            <div>Date : </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-12 col-lg-6 col-xl-12 col-xxl-6">
                        <div class="card">
                            <div class="row g-0 h-auto sh-sm-19">
                                <div class="col-12 col-sm-auto h-100">
                                    <img src="/img/course/small/course-4.webp" alt="course" class="card-img card-img-horizontal-sm sh-19 h-sm-100 sw-sm-16 sw-lg-20" />
                                </div>
                                <div class="col-12 col-sm p-0 h-100">
                                    <div class="card-body">
                                        <a href="/Course/Detail" class="body-link clamp-line lh-1-5 mb-1 heading sh-6" data-line="2"> "Student name"</a>
                                        <div class="br-wrapper br-theme-cs-icon d-inline-block">
                                            <select class="rating" name="rating" autocomplete="off" data-readonly="true" data-initial-rating="5">
                                                <option value="1">1</option>
                                                <option value="2">2</option>
                                                <option value="3">3</option>
                                                <option value="4">4</option>
                                                <option value="5">5</option>
                                            </select>
                                        </div>
                                        <div class="card-text mb-0">
                                            <div>Date : </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-12 col-lg-6 col-xl-12 col-xxl-6">
                        <div class="card">
                            <div class="row g-0 h-auto sh-sm-19">
                                <div class="col-12 col-sm-auto h-100">
                                    <img src="/img/course/small/course-5.webp" alt="course" class="card-img card-img-horizontal-sm sh-19 h-sm-100 sw-sm-16 sw-lg-20" />
                                </div>
                                <div class="col-12 col-sm p-0 h-100">
                                    <div class="card-body">
                                        <a href="/Course/Detail" class="body-link clamp-line lh-1-5 mb-1 heading sh-6" data-line="2">
                                            "Student name"
                                        </a>
                                        <div class="br-wrapper br-theme-cs-icon d-inline-block">
                                            <select class="rating" name="rating" autocomplete="off" data-readonly="true" data-initial-rating="5">
                                                <option value="1">1</option>
                                                <option value="2">2</option>
                                                <option value="3">3</option>
                                                <option value="4">4</option>
                                                <option value="5">5</option>
                                            </select>
                                        </div>
                                        <div class="card-text mb-0">
                                            <div>Date : </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-12 col-lg-6 col-xl-12 col-xxl-6">
                        <div class="card">
                            <div class="row g-0 h-auto sh-sm-19">
                                <div class="col-12 col-sm-auto h-100">
                                    <img src="/img/course/small/course-6.webp" alt="course" class="card-img card-img-horizontal-sm sh-19 h-sm-100 sw-sm-16 sw-lg-20" />
                                </div>
                                <div class="col-12 col-sm p-0 h-100">
                                    <div class="card-body">
                                        <a href="/Course/Detail" class="body-link clamp-line lh-1-5 mb-1 heading sh-6" data-line="2"> "Student name"</a>
                                        <div class="br-wrapper br-theme-cs-icon d-inline-block">
                                            <select class="rating" name="rating" autocomplete="off" data-readonly="true" data-initial-rating="5">
                                                <option value="1">1</option>
                                                <option value="2">2</option>
                                                <option value="3">3</option>
                                                <option value="4">4</option>
                                                <option value="5">5</option>
                                            </select>
                                        </div>
                                        <div class="card-text mb-0">
                                            <div>Date : </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Courses End -->

                <!-- Reviews Start -->
                <div class="d-flex justify-content-between">
                    <h2 class="small-title">Reviews</h2>
                    <button class="btn btn-icon btn-icon-end btn-xs btn-background-alternate p-0 text-small" type="button">
                        <span class="align-bottom">View All</span>
                        <i data-acorn-icon="chevron-right" class="align-middle" data-acorn-size="12"></i>
                    </button>
                </div>
                <div class="card mb-5">
                    <div class="card-body">
                        <div class="d-flex align-items-center border-bottom border-separator-light pb-3">
                            <div class="row g-0 w-100">
                                <div class="col-auto">
                                    <div class="sw-5 me-3">
                                        <img src="/img/profile/profile-1.webp" class="img-fluid rounded-xl" alt="thumb" />
                                    </div>
                                </div>
                                <div class="col pe-3">
                                    <div>Cherish Kerr</div>
                                    <div class="text-muted text-small mb-2">2 days ago</div>
                                    <div class="br-wrapper br-theme-cs-icon d-inline-block mb-2">
                                        <select class="rating" name="rating" autocomplete="off" data-readonly="true" data-initial-rating="5">
                                            <option value="1">1</option>
                                            <option value="2">2</option>
                                            <option value="3">3</option>
                                            <option value="4">4</option>
                                            <option value="5">5</option>
                                        </select>
                                    </div>
                                    <div class="text-medium text-alternate lh-1-25">Macaroon!</div>
                                </div>
                            </div>
                        </div>
                        <div class="d-flex align-items-center border-bottom border-separator-light pb-3 mt-3">
                            <div class="row g-0 w-100">
                                <div class="col-auto">
                                    <div class="sw-5 me-3">
                                        <img src="/img/profile/profile-2.webp" class="img-fluid rounded-xl" alt="thumb" />
                                    </div>
                                </div>
                                <div class="col pe-3">
                                    <div>Olli Hawkins</div>
                                    <div class="text-muted text-small mb-2">3 days ago</div>
                                    <div class="br-wrapper br-theme-cs-icon d-inline-block mb-2">
                                        <select class="rating" name="rating" autocomplete="off" data-readonly="true" data-initial-rating="5">
                                            <option value="1">1</option>
                                            <option value="2">2</option>
                                            <option value="3">3</option>
                                            <option value="4">4</option>
                                            <option value="5">5</option>
                                        </select>
                                    </div>
                                    <div class="text-medium text-alternate lh-1-25">Cupcake cake fruitcake. Powder chocolate bar soufflé gummi bears topping donut.</div>
                                </div>
                            </div>
                        </div>
                        <div class="d-flex align-items-center border-bottom border-separator-light pb-3 mt-3">
                            <div class="row g-0 w-100">
                                <div class="col-auto">
                                    <div class="sw-5 me-3">
                                        <img src="/img/profile/profile-3.webp" class="img-fluid rounded-xl" alt="thumb" />
                                    </div>
                                </div>
                                <div class="col pe-3">
                                    <div>Kirby Peters</div>
                                    <div class="text-muted text-small mb-2">3 days ago</div>
                                    <div class="br-wrapper br-theme-cs-icon d-inline-block mb-2">
                                        <select class="rating" name="rating" autocomplete="off" data-readonly="true" data-initial-rating="5">
                                            <option value="1">1</option>
                                            <option value="2">2</option>
                                            <option value="3">3</option>
                                            <option value="4">4</option>
                                            <option value="5">5</option>
                                        </select>
                                    </div>
                                    <div class="text-medium text-alternate lh-1-25">Nice, very tasty.</div>
                                </div>
                            </div>
                        </div>
                        <div class="d-flex align-items-center pb-3 mt-3">
                            <div class="row g-0 w-100">
                                <div class="col-auto">
                                    <div class="sw-5 me-3">
                                        <img src="/img/profile/profile-4.webp" class="img-fluid rounded-xl" alt="thumb" />
                                    </div>
                                </div>
                                <div class="col pe-3">
                                    <div>Zayn Hartley</div>
                                    <div class="text-muted text-small mb-2">1 week ago</div>
                                    <div class="br-wrapper br-theme-cs-icon d-inline-block mb-2">
                                        <select class="rating" name="rating" autocomplete="off" data-readonly="true" data-initial-rating="5">
                                            <option value="1">1</option>
                                            <option value="2">2</option>
                                            <option value="3">3</option>
                                            <option value="4">4</option>
                                            <option value="5">5</option>
                                        </select>
                                    </div>
                                    <div class="text-medium text-alternate lh-1-25">
                                        Chupa chups topping pastry halvah. Jelly cake jelly sesame snaps jelly beans jelly beans. Biscuit powder brownie powder sesame snaps
                                        jelly-o dragée cake. Pie tiramisu cake jelly lemon drops. Macaroon sugar plum apple pie carrot cake jelly beans chocolate.
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Reviews End -->
            </div>
        </div>
        <!-- Content End -->
    </div>
@endsection
