@php
    $html_tag_data = ["override"=>'{"attributes" : { "layout": "boxed" }}'];
    $title = 'Manager Profile';
    $heading = 'Manager Profile & Employee profile';
    $description = 'Manager Profile Page';
    $breadcrumbs = ["/"=>"Home", "/Pages"=>"Pages", "/Pages/Profile"=>"Profile"]
@endphp
@extends('layout',['html_tag_data'=>$html_tag_data, 'title'=>$title, 'description'=>$description])

@section('css')
    <link rel="stylesheet" href="/css/vendor/select2.min.css"/>
    <link rel="stylesheet" href="/css/vendor/select2-bootstrap4.min.css"/>
    <link rel="stylesheet" href="/css/vendor/bootstrap-datepicker3.standalone.min.css"/>
@endsection

@section('js_vendor')
    <script src="/js/vendor/movecontent.js"></script>
    <script src="/js/vendor/select2.full.min.js"></script>
    <script src="/js/vendor/datepicker/bootstrap-datepicker.min.js"></script>
@endsection

@section('js_page')
    <script src="/js/pages/profile.settings.js"></script>
@endsection

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-auto d-none d-lg-flex">
                <div class="nav flex-column  mt-n2" id="settingsColumn">
                    <!-- Content of this will be moved from #settingsMoveContent div based on the responsive breakpoint.  -->
                </div>
            </div>

            <div class="col">
                <!-- Title and Top Buttons Start -->
                <div class="page-title-container">
                    <div class="row">
                        <!-- Title Start -->
                        <div class="col">
                            <h1 class="mb-0 pb-0 display-4" id="title">{{ $heading }}</h1>
                            @include('_layout.breadcrumb',['breadcrumbs'=>$breadcrumbs])
                        </div>
                        <!-- Title End -->

                        <!-- Top Buttons Start -->
                        
                        <!-- Top Buttons End -->
                    </div>
                </div>
                <!-- Title and Top Buttons End -->

                <!-- Public Info Start -->
                <h2 class="small-title">Manager Info</h2>
                <div class="card mb-5">
                    <div class="card-body">
                        <form>
                            <div class="mb-3 row">
                                <label class="col-lg-2 col-md-3 col-sm-4 col-form-label">Name</label>
                                <div class="col-sm-8 col-md-9 col-lg-10">
                                    <input type="text" class="form-control" value="Lisa Jackson" />
                                </div>
                            </div>
                            <div class="mb-3 row">
                                <label class="col-lg-2 col-md-3 col-sm-4 col-form-label">User Name</label>
                                <div class="col-sm-8 col-md-9 col-lg-10">
                                    <input type="text" class="form-control" value="writerofrohan" />
                                </div>
                            </div>

                            <div class="mb-3 row">
                                <label class="col-lg-2 col-md-3 col-sm-4 col-form-label">User Type</label>
                                <div class="col-sm-8 col-md-9 col-lg-10">
                                    <select class="select-single-no-search form-control dropdown-toggle" data-width="200%" id="dropdownMenuButton">
                                        <option label="&nbsp;"></option>
                                        <option value="1">Employee</option>
                                        <option value="2">Manager</option>
                                        <option value="3">Other</option>
                                       
                                    </select>
                                </div>
                            </div>


                            <div class="mb-3 row">
                                <label class="col-lg-2 col-md-3 col-sm-4 col-form-label">Company</label>
                                <div class="col-sm-8 col-md-9 col-lg-10">
                                    <input type="text" class="form-control" value="Colored Strategies" />
                                </div>
                            </div>
                            <div class="mb-3 row">
                                <label class="col-lg-2 col-md-3 col-sm-4 col-form-label">Location</label>
                                <div class="col-sm-8 col-md-9 col-lg-10">
                                    <input type="text" class="form-control" />
                                </div>
                            </div>
                            <div class="mb-3 row">
                                <label class="col-lg-2 col-md-3 col-sm-4 col-form-label">Date of Birth</label>
                                <div class="col-sm-8 col-md-9 col-lg-10">
                                    <input type="text" class="form-control date-picker-close" id="Date of Birth" value="08/08/1988" />
                                </div>
                            </div>
                            <div class="mb-3 row">
                                <label class="col-lg-2 col-md-3 col-sm-4 col-form-label">Gender</label>
                                <div class="col-sm-8 col-md-9 col-lg-10">
                                    <select class="select-single-no-search" data-width="100%" id="genderSelect">
                                        <option label="&nbsp;"></option>
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
                                    <textarea class="form-control" rows="3">I'm a Cyborg, But That's OK</textarea>
                                </div>
                            </div>
                            <div class="mb-3 row">
                                <label class="col-lg-2 col-md-3 col-sm-4 col-form-label">Email</label>
                                <div class="col-sm-8 col-md-9 col-lg-10">
                                    <input type="email" class="form-control" value="me@lisajackson.com" disabled />
                                </div>
                            </div>
                            <div class="mb-3 row mt-5">
                                <div class="col-sm-8 col-md-9 col-lg-10 ms-auto">
                                    <button type="submit" class="btn btn-primary">Cancel</button>
                                    <button type="submit" class="btn btn-primary">Approve</button>
                                </div>
                            </div>
                           


                        </form>
                    </div>
                </div>
                <!-- Public Info End -->
                <div class="mb-5">
                       <div class="col-12 col-xl-12 mb-5">
                <div class="d-flex justify-content-between">
                    <h2 class="small-title">Manager</h2>
                    <button
                            class="btn btn-icon btn-icon-only btn-sm btn-background-alternate mt-n2 shadow"
                            type="button"
                            data-bs-toggle="dropdown"
                            aria-expanded="false"
                            aria-haspopup="true"
                    >
                        <i data-acorn-icon="more-horizontal" data-acorn-size="15"></i>
                    </button>
                    <div class="dropdown-menu dropdown-menu-sm dropdown-menu-end shadow">
                      
                        <a class="dropdown-item" href="#">Status</a>
                        <a class="dropdown-item" href="#">Details</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="#">Delete</a>
                    </div>
                </div>

                <div class="scroll-out">
                    <div class="scroll-by-count" data-count="6">
                        <div class="card mb-2" data-title="Product Card" data-intro="Here is a product card with buttons!" data-step="2">
                            <div class="row g-0 sh-12">
                                <div class="col-auto">
                                    <a href="/Pages/Portfolio/Detail">
                                        <img src="/img/product/small/product-1.webp" alt="alternate text" class="card-img card-img-horizontal sw-13 sw-lg-15" />
                                    </a>
                                </div>
                                <div class="col">
                                    <div class="card-body pt-0 pb-0 h-100">
                                        <div class="row g-0 h-100 align-content-center">
                                            <div class="col-12 col-md-7 d-flex flex-column mb-2 mb-md-0 position-static">
                                                <a href="/Pages/Portfolio/Detail">Kommissbrot</a>
                                                <div class="text-small text-muted text-truncate">Icing liquorice olegário jujubes oat cake.</div>
                                            </div>
                                            <div class="col-12 col-md-5 d-flex align-items-center justify-content-md-end">
                                                <button class="btn btn-sm btn-icon btn-icon-start btn-outline-primary ms-1" type="button">
                                                    <i data-acorn-icon="edit-square" data-acorn-size="15"></i>
                                                    <span class="d-none d-xxl-inline-block">Edit</span>
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

                        <div class="card mb-2">
                            <div class="row g-0 sh-12">
                                <div class="col-auto position-relative">
                                    <span class="badge rounded-pill bg-primary me-1 position-absolute e-n3 t-2">TREND</span>
                                    <a href="/Pages/Portfolio/Detail">
                                        <img src="/img/product/small/product-2.webp" alt="alternate text" class="card-img card-img-horizontal sw-13 sw-lg-15" />
                                    </a>
                                </div>
                                <div class="col">
                                    <div class="card-body pt-0 pb-0 h-100">
                                        <div class="row g-0 h-100 align-content-center">
                                            <div class="col-12 col-md-7 d-flex flex-column mb-2 mb-md-0">
                                                <a href="/Pages/Portfolio/Detail">Yeast Karavai</a>
                                                <div class="text-small text-muted text-truncate">Gummi liquorice olegário jujubes cookie.</div>
                                            </div>
                                            <div class="col-12 col-md-5 d-flex align-items-center justify-content-md-end">
                                                <button class="btn btn-sm btn-icon btn-icon-start btn-outline-primary ms-1" type="button">
                                                    <i data-acorn-icon="edit-square" data-acorn-size="15"></i>
                                                    <span class="d-none d-xxl-inline-block">Edit</span>
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

                        <div class="card mb-2">
                            <div class="row g-0 sh-12">
                                <div class="col-auto">
                                    <a href="/Pages/Portfolio/Detail">
                                        <img src="/img/product/small/product-3.webp" alt="alternate text" class="card-img card-img-horizontal sw-13 sw-lg-15" />
                                    </a>
                                </div>
                                <div class="col">
                                    <div class="card-body pt-0 pb-0 h-100">
                                        <div class="row g-0 h-100 align-content-center">
                                            <div class="col-12 col-md-7 d-flex flex-column mb-2 mb-md-0">
                                                <a href="/Pages/Portfolio/Detail">Cholermüs</a>
                                                <div class="text-small text-muted text-truncate">Marshmallow topping icing liquorice oat cake.</div>
                                            </div>
                                            <div class="col-12 col-md-5 d-flex align-items-center justify-content-md-end">
                                                <button class="btn btn-sm btn-icon btn-icon-start btn-outline-primary ms-1" type="button">
                                                    <i data-acorn-icon="edit-square" data-acorn-size="15"></i>
                                                    <span class="d-none d-xxl-inline-block">Edit</span>
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

                        <div class="card mb-2">
                            <div class="row g-0 sh-12">
                                <div class="col-auto">
                                    <a href="/Pages/Portfolio/Detail">
                                        <img src="/img/product/small/product-4.webp" alt="alternate text" class="card-img card-img-horizontal sw-13 sw-lg-15" />
                                    </a>
                                </div>
                                <div class="col">
                                    <div class="card-body pt-0 pb-0 h-100">
                                        <div class="row g-0 h-100 align-content-center">
                                            <div class="col-12 col-md-7 d-flex flex-column mb-2 mb-md-0">
                                                <a href="/Pages/Portfolio/Detail">Cheesymite Scroll</a>
                                                <div class="text-small text-muted text-truncate">Tootsie brownie ice cream marshmallow topping.</div>
                                            </div>
                                            <div class="col-12 col-md-5 d-flex align-items-center justify-content-md-end">
                                                <button class="btn btn-sm btn-icon btn-icon-start btn-outline-primary ms-1" type="button">
                                                    <i data-acorn-icon="edit-square" data-acorn-size="15"></i>
                                                    <span class="d-none d-xxl-inline-block">Edit</span>
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

                        <div class="card mb-2">
                            <div class="row g-0 sh-12">
                                <div class="col-auto">
                                    <a href="/Pages/Portfolio/Detail">
                                        <img src="/img/product/small/product-5.webp" alt="alternate text" class="card-img card-img-horizontal sw-13 sw-lg-15" />
                                    </a>
                                </div>
                                <div class="col">
                                    <div class="card-body pt-0 pb-0 h-100">
                                        <div class="row g-0 h-100 align-content-center">
                                            <div class="col-12 col-md-7 d-flex flex-column mb-2 mb-md-0">
                                                <a href="/Pages/Portfolio/Detail">Bazlama</a>
                                                <div class="text-small text-muted text-truncate">Tootsie roll cream marshmallow chocolate bar.</div>
                                            </div>
                                            <div class="col-12 col-md-5 d-flex align-items-center justify-content-md-end">
                                                <button class="btn btn-sm btn-icon btn-icon-start btn-outline-primary ms-1" type="button">
                                                    <i data-acorn-icon="edit-square" data-acorn-size="15"></i>
                                                    <span class="d-none d-xxl-inline-block">Edit</span>
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

                        <div class="card mb-2">
                            <div class="row g-0 sh-12">
                                <div class="col-auto">
                                    <a href="/Pages/Portfolio/Detail">
                                        <img src="/img/product/small/product-6.webp" alt="alternate text" class="card-img card-img-horizontal sw-13 sw-lg-15" />
                                    </a>
                                </div>
                                <div class="col">
                                    <div class="card-body pt-0 pb-0 h-100">
                                        <div class="row g-0 h-100 align-content-center">
                                            <div class="col-12 col-md-7 d-flex flex-column mb-2 mb-md-0">
                                                <a href="/Pages/Portfolio/Detail">Soda Bread</a>
                                                <div class="text-small text-muted text-truncate">Marshmallow topping icing liquorice oat cake.</div>
                                            </div>
                                            <div class="col-12 col-md-5 d-flex align-items-center justify-content-md-end">
                                                <button class="btn btn-sm btn-icon btn-icon-start btn-outline-primary ms-1" type="button">
                                                    <i data-acorn-icon="edit-square" data-acorn-size="15"></i>
                                                    <span class="d-none d-xxl-inline-block">Edit</span>
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

                        <div class="card mb-2">
                            <div class="row g-0 sh-12">
                                <div class="col-auto">
                                    <a href="/Pages/Portfolio/Detail">
                                        <img src="/img/product/small/product-7.webp" alt="alternate text" class="card-img card-img-horizontal sw-13 sw-lg-15" />
                                    </a>
                                </div>
                                <div class="col">
                                    <div class="card-body pt-0 pb-0 h-100">
                                        <div class="row g-0 h-100 align-content-center">
                                            <div class="col-12 col-md-7 d-flex flex-column mb-2 mb-md-0">
                                                <a href="/Pages/Portfolio/Detail">Chapati</a>
                                                <div class="text-small text-muted text-truncate">Tootsie brownie ice cream marshmallow topping.</div>
                                            </div>
                                            <div class="col-12 col-md-5 d-flex align-items-center justify-content-md-end">
                                                <button class="btn btn-sm btn-icon btn-icon-start btn-outline-primary ms-1" type="button">
                                                    <i data-acorn-icon="edit-square" data-acorn-size="15"></i>
                                                    <span class="d-none d-xxl-inline-block">Edit</span>
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
                    </div>
                </div>
            </div>
                    </div>
                <!-- Contact Start -->
                <h2 class="small-title">Employee info</h2>
                <div class="card mb-5">

                <div class="card mb-5">
                    <div class="card-body">
                        <form>
                            <div class="mb-3 row">
                                <label class="col-lg-2 col-md-3 col-sm-4 col-form-label">Name</label>
                                <div class="col-sm-8 col-md-9 col-lg-10">
                                    <input type="text" class="form-control" value="Lisa Jackson" />
                                </div>
                            </div>
                            <div class="mb-3 row">
                                <label class="col-lg-2 col-md-3 col-sm-4 col-form-label">User Name</label>
                                <div class="col-sm-8 col-md-9 col-lg-10">
                                    <input type="text" class="form-control" value="writerofrohan" />
                                </div>
                            </div>
                            <div class="mb-3 row">
                                <label class="col-lg-2 col-md-3 col-sm-4 col-form-label">Company</label>
                                <div class="col-sm-8 col-md-9 col-lg-10">
                                    <input type="text" class="form-control" value="Colored Strategies" />
                                </div>
                            </div>
                            <div class="mb-3 row">
                                <label class="col-lg-2 col-md-3 col-sm-4 col-form-label">Location</label>
                                <div class="col-sm-8 col-md-9 col-lg-10">
                                    <input type="text" class="form-control" />
                                </div>
                            </div>
                            <div class="mb-3 row">
                                <label class="col-lg-2 col-md-3 col-sm-4 col-form-label">Date of Birth</label>
                                <div class="col-sm-8 col-md-9 col-lg-10">
                                    <input type="text" class="form-control date-picker-close" id="birthday" value="08/08/1988" />
                                </div>
                            </div>


                           

                            <div class="mb-3 row">
                                <label class="col-lg-2 col-md-3 col-sm-4 col-form-label">Gender</label>
                                <div class="col-sm-8 col-md-9 col-lg-10">
                                    <select class="select-single-no-search" data-width="100%" id="genderSelect">
                                        <option label="&nbsp;"></option>
                                        <option value="1">Female</option>
                                        <option value="2">Male</option>
                                        <option value="3">Other</option>
                                        <option value="4">None</option>
                                    </select>
                                </div>
                            </div>
                            <div class="mb-3 row">
                                <label class="col-lg-2 col-md-3 col-sm-4 col-form-label">Primary Email</label>
                                <div class="col-sm-8 col-md-9 col-lg-10">
                                    <input type="email" class="form-control" value="me@lisajackson.com" disabled />
                                </div>
                            </div>
                            <div class="mb-3 row">
                                <label class="col-lg-2 col-md-3 col-sm-4 col-form-label">Secondary Email</label>
                                <div class="col-sm-8 col-md-9 col-lg-10">
                                    <input type="email" class="form-control" value="lisajackson@gmail.com" />
                                </div>
                            </div>
                            <div class="mb-3 row">
                                <label class="col-lg-2 col-md-3 col-sm-4 col-form-label">Phone</label>
                                <div class="col-sm-8 col-md-9 col-lg-10">
                                    <input type="text" class="form-control" value="+6443884455" />
                                </div>
                            </div>
                           
                            <div class="mb-3 row mt-5">
                                <div class="col-sm-8 col-md-9 col-lg-10 ms-auto">
                                    <button type="submit" class="btn btn-primary">Cancel</button>
                                    <button type="submit" class="btn btn-primary">Approve</button>
                                </div>
                            </div>
                           


                        </form>
                    </div>
                </div>
                


                    <!-- <div class="card-body">
                        <form>
                            <div class="mb-3 row">
                                <label class="col-lg-2 col-md-3 col-sm-4 col-form-label">Primary Email</label>
                                <div class="col-sm-8 col-md-9 col-lg-10">
                                    <input type="email" class="form-control" value="me@lisajackson.com" disabled />
                                </div>
                            </div>
                            <div class="mb-3 row">
                                <label class="col-lg-2 col-md-3 col-sm-4 col-form-label">Secondary Email</label>
                                <div class="col-sm-8 col-md-9 col-lg-10">
                                    <input type="email" class="form-control" value="lisajackson@gmail.com" />
                                </div>
                            </div>
                            <div class="mb-3 row">
                                <label class="col-lg-2 col-md-3 col-sm-4 col-form-label">Phone</label>
                                <div class="col-sm-8 col-md-9 col-lg-10">
                                    <input type="text" class="form-control" value="+6443884455" />
                                </div>
                            </div>
                            <div class="mb-3 row mt-5">
                                <div class="col-sm-8 col-md-9 col-lg-10 ms-auto">
                                    <button type="submit" class="btn btn-outline-primary">Update</button>
                                </div>
                            </div>
                        </form>
                    </div> -->
                </div>
                <!-- Contact End -->

                <!-- Jobs Start -->
                <h2 class="small-title">Employees</h2>
                <div class="card mb-5">
                    <div class="card-body">
                    <div class="col-12 col-xl-12 mb-5">
                <div class="d-flex justify-content-between">
                    <h2 class="small-title"> </h2>
                    <button
                            class="btn btn-icon btn-icon-only btn-sm btn-background-alternate mt-n2 shadow"
                            type="button"
                            data-bs-toggle="dropdown"
                            aria-expanded="false"
                            aria-haspopup="true"
                    >
                        <i data-acorn-icon="more-horizontal" data-acorn-size="15"></i>
                    </button>
                    <div class="dropdown-menu dropdown-menu-sm dropdown-menu-end shadow">
                        <a class="dropdown-item" href="#">Reload</a>
                        <a class="dropdown-item" href="#">Stats</a>
                        <a class="dropdown-item" href="#">Details</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="#">Delete</a>
                    </div>
                </div>

                <div class="scroll-out">
                    <div class="scroll-by-count" data-count="6">
                        <div class="card mb-2" data-title="Product Card" data-intro="Here is a product card with buttons!" data-step="2">
                            <div class="row g-0 sh-12">
                                <div class="col-auto">
                                    <a href="/Pages/Portfolio/Detail">
                                        <img src="/img/product/small/product-1.webp" alt="alternate text" class="card-img card-img-horizontal sw-13 sw-lg-15" />
                                    </a>
                                </div>
                                <div class="col">
                                    <div class="card-body pt-0 pb-0 h-100">
                                        <div class="row g-0 h-100 align-content-center">
                                            <div class="col-12 col-md-7 d-flex flex-column mb-2 mb-md-0 position-static">
                                                <a href="/Pages/Portfolio/Detail">Kommissbrot</a>
                                                <div class="text-small text-muted text-truncate">Icing liquorice olegário jujubes oat cake.</div>
                                            </div>
                                            <div class="col-12 col-md-5 d-flex align-items-center justify-content-md-end">
                                                <button class="btn btn-sm btn-icon btn-icon-start btn-outline-primary ms-1" type="button">
                                                    <i data-acorn-icon="edit-square" data-acorn-size="15"></i>
                                                    <span class="d-none d-xxl-inline-block">Edit</span>
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

                        <div class="card mb-2">
                            <div class="row g-0 sh-12">
                                <div class="col-auto position-relative">
                                    <span class="badge rounded-pill bg-primary me-1 position-absolute e-n3 t-2">TREND</span>
                                    <a href="/Pages/Portfolio/Detail">
                                        <img src="/img/product/small/product-2.webp" alt="alternate text" class="card-img card-img-horizontal sw-13 sw-lg-15" />
                                    </a>
                                </div>
                                <div class="col">
                                    <div class="card-body pt-0 pb-0 h-100">
                                        <div class="row g-0 h-100 align-content-center">
                                            <div class="col-12 col-md-7 d-flex flex-column mb-2 mb-md-0">
                                                <a href="/Pages/Portfolio/Detail">Yeast Karavai</a>
                                                <div class="text-small text-muted text-truncate">Gummi liquorice olegário jujubes cookie.</div>
                                            </div>
                                            <div class="col-12 col-md-5 d-flex align-items-center justify-content-md-end">
                                                <button class="btn btn-sm btn-icon btn-icon-start btn-outline-primary ms-1" type="button">
                                                    <i data-acorn-icon="edit-square" data-acorn-size="15"></i>
                                                    <span class="d-none d-xxl-inline-block">Edit</span>
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

                        <div class="card mb-2">
                            <div class="row g-0 sh-12">
                                <div class="col-auto">
                                    <a href="/Pages/Portfolio/Detail">
                                        <img src="/img/product/small/product-3.webp" alt="alternate text" class="card-img card-img-horizontal sw-13 sw-lg-15" />
                                    </a>
                                </div>
                                <div class="col">
                                    <div class="card-body pt-0 pb-0 h-100">
                                        <div class="row g-0 h-100 align-content-center">
                                            <div class="col-12 col-md-7 d-flex flex-column mb-2 mb-md-0">
                                                <a href="/Pages/Portfolio/Detail">Cholermüs</a>
                                                <div class="text-small text-muted text-truncate">Marshmallow topping icing liquorice oat cake.</div>
                                            </div>
                                            <div class="col-12 col-md-5 d-flex align-items-center justify-content-md-end">
                                                <button class="btn btn-sm btn-icon btn-icon-start btn-outline-primary ms-1" type="button">
                                                    <i data-acorn-icon="edit-square" data-acorn-size="15"></i>
                                                    <span class="d-none d-xxl-inline-block">Edit</span>
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

                        <div class="card mb-2">
                            <div class="row g-0 sh-12">
                                <div class="col-auto">
                                    <a href="/Pages/Portfolio/Detail">
                                        <img src="/img/product/small/product-4.webp" alt="alternate text" class="card-img card-img-horizontal sw-13 sw-lg-15" />
                                    </a>
                                </div>
                                <div class="col">
                                    <div class="card-body pt-0 pb-0 h-100">
                                        <div class="row g-0 h-100 align-content-center">
                                            <div class="col-12 col-md-7 d-flex flex-column mb-2 mb-md-0">
                                                <a href="/Pages/Portfolio/Detail">Cheesymite Scroll</a>
                                                <div class="text-small text-muted text-truncate">Tootsie brownie ice cream marshmallow topping.</div>
                                            </div>
                                            <div class="col-12 col-md-5 d-flex align-items-center justify-content-md-end">
                                                <button class="btn btn-sm btn-icon btn-icon-start btn-outline-primary ms-1" type="button">
                                                    <i data-acorn-icon="edit-square" data-acorn-size="15"></i>
                                                    <span class="d-none d-xxl-inline-block">Edit</span>
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

                        <div class="card mb-2">
                            <div class="row g-0 sh-12">
                                <div class="col-auto">
                                    <a href="/Pages/Portfolio/Detail">
                                        <img src="/img/product/small/product-5.webp" alt="alternate text" class="card-img card-img-horizontal sw-13 sw-lg-15" />
                                    </a>
                                </div>
                                <div class="col">
                                    <div class="card-body pt-0 pb-0 h-100">
                                        <div class="row g-0 h-100 align-content-center">
                                            <div class="col-12 col-md-7 d-flex flex-column mb-2 mb-md-0">
                                                <a href="/Pages/Portfolio/Detail">Bazlama</a>
                                                <div class="text-small text-muted text-truncate">Tootsie roll cream marshmallow chocolate bar.</div>
                                            </div>
                                            <div class="col-12 col-md-5 d-flex align-items-center justify-content-md-end">
                                                <button class="btn btn-sm btn-icon btn-icon-start btn-outline-primary ms-1" type="button">
                                                    <i data-acorn-icon="edit-square" data-acorn-size="15"></i>
                                                    <span class="d-none d-xxl-inline-block">Edit</span>
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

                        <div class="card mb-2">
                            <div class="row g-0 sh-12">
                                <div class="col-auto">
                                    <a href="/Pages/Portfolio/Detail">
                                        <img src="/img/product/small/product-6.webp" alt="alternate text" class="card-img card-img-horizontal sw-13 sw-lg-15" />
                                    </a>
                                </div>
                                <div class="col">
                                    <div class="card-body pt-0 pb-0 h-100">
                                        <div class="row g-0 h-100 align-content-center">
                                            <div class="col-12 col-md-7 d-flex flex-column mb-2 mb-md-0">
                                                <a href="/Pages/Portfolio/Detail">Soda Bread</a>
                                                <div class="text-small text-muted text-truncate">Marshmallow topping icing liquorice oat cake.</div>
                                            </div>
                                            <div class="col-12 col-md-5 d-flex align-items-center justify-content-md-end">
                                                <button class="btn btn-sm btn-icon btn-icon-start btn-outline-primary ms-1" type="button">
                                                    <i data-acorn-icon="edit-square" data-acorn-size="15"></i>
                                                    <span class="d-none d-xxl-inline-block">Edit</span>
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

                        <div class="card mb-2">
                            <div class="row g-0 sh-12">
                                <div class="col-auto">
                                    <a href="/Pages/Portfolio/Detail">
                                        <img src="/img/product/small/product-7.webp" alt="alternate text" class="card-img card-img-horizontal sw-13 sw-lg-15" />
                                    </a>
                                </div>
                                <div class="col">
                                    <div class="card-body pt-0 pb-0 h-100">
                                        <div class="row g-0 h-100 align-content-center">
                                            <div class="col-12 col-md-7 d-flex flex-column mb-2 mb-md-0">
                                                <a href="/Pages/Portfolio/Detail">Chapati</a>
                                                <div class="text-small text-muted text-truncate">Tootsie brownie ice cream marshmallow topping.</div>
                                            </div>
                                            <div class="col-12 col-md-5 d-flex align-items-center justify-content-md-end">
                                                <button class="btn btn-sm btn-icon btn-icon-start btn-outline-primary ms-1" type="button">
                                                    <i data-acorn-icon="edit-square" data-acorn-size="15"></i>
                                                    <span class="d-none d-xxl-inline-block">Edit</span>
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
                    </div>
                </div>
            </div>
                    </div>
                </div>
                <!-- Jobs End -->
            </div>
        </div>
    </div>
@endsection
