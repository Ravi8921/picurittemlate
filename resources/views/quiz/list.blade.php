@php
    $html_tag_data = [];
    $title = 'Users List';
    $description= 'Acorn elearning platform quiz list.';
@endphp
@extends('layout',['html_tag_data'=>$html_tag_data, 'title'=>$title, 'description'=>$description,])

@section('css')
@endsection

@section('js_vendor')
@endsection

@section('js_page')
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

        <div class="row row-cols-1 row-cols-sm-2 row-cols-xl-3 row-cols-xxl-4 g-3 mb-5">
            <div class="col">
                <div class="card h-100">
                    <div class="card-body text-center">
                        <div class="sw-13 position-relative mb-3 mx-auto">
                            <img src="/img/profile/profile-1.webp" class="img-fluid rounded-xl" alt="thumb">
                        </div>
                        <a href="/Instructor/Detail" class="body-link">"User name"</a>
                        <div class="text-muted text-medium mb-2">"User type"</div>
                        <div class="mb-2">
                            <div class="br-wrapper br-theme-cs-icon d-inline-block">
                                <div class="br-wrapper"><select class="rating" name="rating" autocomplete="off" data-readonly="true" data-initial-rating="3" style="display: none;">
                                    <option value="1">1</option>
                                    <option value="2">2</option>
                                    <option value="3">3</option>
                                    <option value="4">4</option>
                                    <option value="5">5</option>
                                </select><div class="br-widget br-readonly"><a href="#" data-rating-value="1" data-rating-text="1" class="br-selected"></a><a href="#" data-rating-value="2" data-rating-text="2" class="br-selected"></a><a href="#" data-rating-value="3" data-rating-text="3" class="br-selected"></a><a href="#" data-rating-value="4" data-rating-text="4" class="br-selected"></a><a href="#" data-rating-value="3" data-rating-text="3" class="br-selected br-current"></a><div class="br-current-rating">3</div></div></div>
                            </div>
                        </div>
                        <div class="mb-3 text-muted sh-7">"email address"</div>
                        <div class="row g-0 align-items-center mb-1">
                            <div class="col-auto">
                                <div class="sw-3 sh-4 d-flex justify-content-center align-items-center">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" class="acorn-icons acorn-icons-presentation text-primary"><path d="M6.5 14C5.09554 14 4.39331 14 3.88886 13.6629C3.67048 13.517 3.48298 13.3295 3.33706 13.1111C3 12.6067 3 11.9045 3 10.5L3 8.5C3 7.09554 3 6.3933 3.33706 5.88886C3.48298 5.67048 3.67048 5.48298 3.88886 5.33706C4.39331 5 5.09554 5 6.5 5L13.5 5C14.9045 5 15.6067 5 16.1111 5.33706C16.3295 5.48298 16.517 5.67048 16.6629 5.88886C17 6.39331 17 7.09554 17 8.5L17 10.5C17 11.9045 17 12.6067 16.6629 13.1111C16.517 13.3295 16.3295 13.517 16.1111 13.6629C15.6067 14 14.9045 14 13.5 14L6.5 14Z"></path><path d="M10 14L10 17"></path><path d="M17.125 2C17.4761 2 17.6517 2 17.7778 2.08427C17.8324 2.12074 17.8793 2.16762 17.9157 2.22221C18 2.34833 18 2.52388 18 2.875L18 4.125C18 4.47612 18 4.65167 17.9157 4.77779C17.8793 4.83238 17.8324 4.87926 17.7778 4.91574C17.6517 5 17.4761 5 17.125 5L2.875 5C2.52388 5 2.34833 5 2.22221 4.91573C2.16762 4.87926 2.12074 4.83238 2.08426 4.77779C2 4.65167 2 4.47612 2 4.125L2 2.875C2 2.52388 2 2.34833 2.08426 2.22221C2.12074 2.16762 2.16762 2.12074 2.22221 2.08426C2.34833 2 2.52388 2 2.875 2L17.125 2Z"></path><circle cx="10" cy="17.5" r="0.5"></circle><path d="M13 8H7M12 11H8"></path></svg>
                                </div>
                            </div>
                            <div class="col ps-3">
                                <div class="row g-0">
                                    <div class="col">
                                        <div class="sh-4 d-flex align-items-center lh-1-25">Students</div>
                                    </div>
                                    <div class="col-auto">
                                        <div class="sh-4 d-flex align-items-center text-alternate">25</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row g-0 align-items-center mb-1">
                            <div class="col-auto">
                                <div class="sw-3 sh-4 d-flex justify-content-center align-items-center">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" class="acorn-icons acorn-icons-clock text-primary"><path d="M8 12L9.70711 10.2929C9.89464 10.1054 10 9.851 10 9.58579V6"></path><circle cx="10" cy="10" r="8"></circle></svg>
                                </div>
                            </div>
                            <div class="col ps-3">
                                <div class="row g-0">
                                    <div class="col">
                                        <div class="sh-4 d-flex align-items-center lh-1-25">Blogs</div>
                                    </div>
                                    <div class="col-auto">
                                        <div class="sh-4 d-flex align-items-center text-alternate">210h</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                        <div class="d-flex flex-row justify-content-between w-100">
                            <a href="/Users/Detail" class="btn btn-outline-primary w-100 me-1 btn-sm">Detail</a>
                            
                        </div>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card h-100">
                    <div class="card-body text-center">
                        <div class="sw-13 position-relative mb-3 mx-auto">
                            <img src="/img/profile/profile-2.webp" class="img-fluid rounded-xl" alt="thumb">
                        </div>
                        <a href="/Instructor/Detail" class="body-link">"User name"</a>
                        <div class="text-muted text-medium mb-2">"User type"</div>
                        <div class="mb-2">
                            <div class="br-wrapper br-theme-cs-icon d-inline-block">
                                <div class="br-wrapper"><select class="rating" name="rating" autocomplete="off" data-readonly="true" data-initial-rating="4" style="display: none;">
                                    <option value="1">1</option>
                                    <option value="2">2</option>
                                    <option value="3">3</option>
                                    <option value="4">4</option>
                                    <option value="5">5</option>
                                </select><div class="br-widget br-readonly"><a href="#" data-rating-value="1" data-rating-text="1" class="br-selected"></a><a href="#" data-rating-value="2" data-rating-text="2" class="br-selected"></a><a href="#" data-rating-value="3" data-rating-text="3" class="br-selected"></a><a href="#" data-rating-value="4" data-rating-text="4" class="br-selected br-current"></a><a href="#" data-rating-value="5" data-rating-text="5"></a><div class="br-current-rating">4</div></div></div>
                            </div>
                        </div>
                        <div class="mb-3 text-muted sh-7">"email address"</div>
                        <div class="row g-0 align-items-center mb-1">
                            <div class="col-auto">
                                <div class="sw-3 sh-4 d-flex justify-content-center align-items-center">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" class="acorn-icons acorn-icons-presentation text-primary"><path d="M6.5 14C5.09554 14 4.39331 14 3.88886 13.6629C3.67048 13.517 3.48298 13.3295 3.33706 13.1111C3 12.6067 3 11.9045 3 10.5L3 8.5C3 7.09554 3 6.3933 3.33706 5.88886C3.48298 5.67048 3.67048 5.48298 3.88886 5.33706C4.39331 5 5.09554 5 6.5 5L13.5 5C14.9045 5 15.6067 5 16.1111 5.33706C16.3295 5.48298 16.517 5.67048 16.6629 5.88886C17 6.39331 17 7.09554 17 8.5L17 10.5C17 11.9045 17 12.6067 16.6629 13.1111C16.517 13.3295 16.3295 13.517 16.1111 13.6629C15.6067 14 14.9045 14 13.5 14L6.5 14Z"></path><path d="M10 14L10 17"></path><path d="M17.125 2C17.4761 2 17.6517 2 17.7778 2.08427C17.8324 2.12074 17.8793 2.16762 17.9157 2.22221C18 2.34833 18 2.52388 18 2.875L18 4.125C18 4.47612 18 4.65167 17.9157 4.77779C17.8793 4.83238 17.8324 4.87926 17.7778 4.91574C17.6517 5 17.4761 5 17.125 5L2.875 5C2.52388 5 2.34833 5 2.22221 4.91573C2.16762 4.87926 2.12074 4.83238 2.08426 4.77779C2 4.65167 2 4.47612 2 4.125L2 2.875C2 2.52388 2 2.34833 2.08426 2.22221C2.12074 2.16762 2.16762 2.12074 2.22221 2.08426C2.34833 2 2.52388 2 2.875 2L17.125 2Z"></path><circle cx="10" cy="17.5" r="0.5"></circle><path d="M13 8H7M12 11H8"></path></svg>
                                </div>
                            </div>
                            <div class="col ps-3">
                                <div class="row g-0">
                                    <div class="col">
                                        <div class="sh-4 d-flex align-items-center lh-1-25">employees</div>
                                    </div>
                                    <div class="col-auto">
                                        <div class="sh-4 d-flex align-items-center text-alternate">5</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row g-0 align-items-center mb-1">
                            <div class="col-auto">
                                <div class="sw-3 sh-4 d-flex justify-content-center align-items-center">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" class="acorn-icons acorn-icons-clock text-primary"><path d="M8 12L9.70711 10.2929C9.89464 10.1054 10 9.851 10 9.58579V6"></path><circle cx="10" cy="10" r="8"></circle></svg>
                                </div>
                            </div>
                            <div class="col ps-3">
                                <div class="row g-0">
                                    <div class="col">
                                        <div class="sh-4 d-flex align-items-center lh-1-25">Blogs</div>
                                    </div>
                                    <div class="col-auto">
                                        <div class="sh-4 d-flex align-items-center text-alternate">65h</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                     
                        <div class="d-flex flex-row justify-content-between w-100">
                            <a href="/Users/Detail" class="btn btn-outline-primary w-100 me-1 btn-sm">Detail</a>
                            
                        </div>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card h-100">
                    <div class="card-body text-center">
                        <div class="sw-13 position-relative mb-3 mx-auto">
                            <img src="/img/profile/profile-3.webp" class="img-fluid rounded-xl" alt="thumb">
                        </div>
                        <a href="/Instructor/Detail" class="body-link">"User name"</a>
                        <div class="text-muted text-medium mb-2">"User type"</div>
                        <div class="mb-2">
                            <div class="br-wrapper br-theme-cs-icon d-inline-block">
                                <div class="br-wrapper"><select class="rating" name="rating" autocomplete="off" data-readonly="true" data-initial-rating="5" style="display: none;">
                                    <option value="1">1</option>
                                    <option value="2">2</option>
                                    <option value="3">3</option>
                                    <option value="4">4</option>
                                    <option value="5">5</option>
                                </select><div class="br-widget br-readonly"><a href="#" data-rating-value="1" data-rating-text="1" class="br-selected"></a><a href="#" data-rating-value="2" data-rating-text="2" class="br-selected"></a><a href="#" data-rating-value="3" data-rating-text="3" class="br-selected"></a><a href="#" data-rating-value="4" data-rating-text="4" class="br-selected"></a><a href="#" data-rating-value="5" data-rating-text="5" class="br-selected br-current"></a><div class="br-current-rating">5</div></div></div>
                            </div>
                        </div>
                        <div class="mb-3 text-muted sh-7">"email address"</div>
                        <div class="row g-0 align-items-center mb-1">
                            <div class="col-auto">
                                <div class="sw-3 sh-4 d-flex justify-content-center align-items-center">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" class="acorn-icons acorn-icons-presentation text-primary"><path d="M6.5 14C5.09554 14 4.39331 14 3.88886 13.6629C3.67048 13.517 3.48298 13.3295 3.33706 13.1111C3 12.6067 3 11.9045 3 10.5L3 8.5C3 7.09554 3 6.3933 3.33706 5.88886C3.48298 5.67048 3.67048 5.48298 3.88886 5.33706C4.39331 5 5.09554 5 6.5 5L13.5 5C14.9045 5 15.6067 5 16.1111 5.33706C16.3295 5.48298 16.517 5.67048 16.6629 5.88886C17 6.39331 17 7.09554 17 8.5L17 10.5C17 11.9045 17 12.6067 16.6629 13.1111C16.517 13.3295 16.3295 13.517 16.1111 13.6629C15.6067 14 14.9045 14 13.5 14L6.5 14Z"></path><path d="M10 14L10 17"></path><path d="M17.125 2C17.4761 2 17.6517 2 17.7778 2.08427C17.8324 2.12074 17.8793 2.16762 17.9157 2.22221C18 2.34833 18 2.52388 18 2.875L18 4.125C18 4.47612 18 4.65167 17.9157 4.77779C17.8793 4.83238 17.8324 4.87926 17.7778 4.91574C17.6517 5 17.4761 5 17.125 5L2.875 5C2.52388 5 2.34833 5 2.22221 4.91573C2.16762 4.87926 2.12074 4.83238 2.08426 4.77779C2 4.65167 2 4.47612 2 4.125L2 2.875C2 2.52388 2 2.34833 2.08426 2.22221C2.12074 2.16762 2.16762 2.12074 2.22221 2.08426C2.34833 2 2.52388 2 2.875 2L17.125 2Z"></path><circle cx="10" cy="17.5" r="0.5"></circle><path d="M13 8H7M12 11H8"></path></svg>
                                </div>
                            </div>
                            <div class="col ps-3">
                                <div class="row g-0">
                                    <div class="col">
                                        <div class="sh-4 d-flex align-items-center lh-1-25">employers</div>
                                    </div>
                                    <div class="col-auto">
                                        <div class="sh-4 d-flex align-items-center text-alternate">8</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row g-0 align-items-center mb-1">
                            <div class="col-auto">
                                <div class="sw-3 sh-4 d-flex justify-content-center align-items-center">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" class="acorn-icons acorn-icons-clock text-primary"><path d="M8 12L9.70711 10.2929C9.89464 10.1054 10 9.851 10 9.58579V6"></path><circle cx="10" cy="10" r="8"></circle></svg>
                                </div>
                            </div>
                            <div class="col ps-3">
                                <div class="row g-0">
                                    <div class="col">
                                        <div class="sh-4 d-flex align-items-center lh-1-25">Blogs</div>
                                    </div>
                                    <div class="col-auto">
                                        <div class="sh-4 d-flex align-items-center text-alternate">95h</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                       
                        <div class="d-flex flex-row justify-content-between w-100">
                            <a href="//Users/Detail" class="btn btn-outline-primary w-100 me-1 btn-sm">Detail</a>
                            
                        </div>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card h-100">
                    <div class="card-body text-center">
                        <div class="sw-13 position-relative mb-3 mx-auto">
                            <img src="/img/profile/profile-4.webp" class="img-fluid rounded-xl" alt="thumb">
                        </div>
                        <a href="/Instructor/Detail" class="body-link">"User name"</a>
                        <div class="text-muted text-medium mb-2">"User type"</div>
                        <div class="mb-2">
                            <div class="br-wrapper br-theme-cs-icon d-inline-block">
                                <div class="br-wrapper"><select class="rating" name="rating" autocomplete="off" data-readonly="true" data-initial-rating="5" style="display: none;">
                                    <option value="1">1</option>
                                    <option value="2">2</option>
                                    <option value="3">3</option>
                                    <option value="4">4</option>
                                    <option value="5">5</option>
                                </select><div class="br-widget br-readonly"><a href="#" data-rating-value="1" data-rating-text="1" class="br-selected"></a><a href="#" data-rating-value="2" data-rating-text="2" class="br-selected"></a><a href="#" data-rating-value="3" data-rating-text="3" class="br-selected"></a><a href="#" data-rating-value="4" data-rating-text="4" class="br-selected"></a><a href="#" data-rating-value="5" data-rating-text="5" class="br-selected br-current"></a><div class="br-current-rating">5</div></div></div>
                            </div>
                        </div>
                        <div class="mb-3 text-muted sh-7">"email address"</div>
                        <div class="row g-0 align-items-center mb-1">
                            <div class="col-auto">
                                <div class="sw-3 sh-4 d-flex justify-content-center align-items-center">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" class="acorn-icons acorn-icons-presentation text-primary"><path d="M6.5 14C5.09554 14 4.39331 14 3.88886 13.6629C3.67048 13.517 3.48298 13.3295 3.33706 13.1111C3 12.6067 3 11.9045 3 10.5L3 8.5C3 7.09554 3 6.3933 3.33706 5.88886C3.48298 5.67048 3.67048 5.48298 3.88886 5.33706C4.39331 5 5.09554 5 6.5 5L13.5 5C14.9045 5 15.6067 5 16.1111 5.33706C16.3295 5.48298 16.517 5.67048 16.6629 5.88886C17 6.39331 17 7.09554 17 8.5L17 10.5C17 11.9045 17 12.6067 16.6629 13.1111C16.517 13.3295 16.3295 13.517 16.1111 13.6629C15.6067 14 14.9045 14 13.5 14L6.5 14Z"></path><path d="M10 14L10 17"></path><path d="M17.125 2C17.4761 2 17.6517 2 17.7778 2.08427C17.8324 2.12074 17.8793 2.16762 17.9157 2.22221C18 2.34833 18 2.52388 18 2.875L18 4.125C18 4.47612 18 4.65167 17.9157 4.77779C17.8793 4.83238 17.8324 4.87926 17.7778 4.91574C17.6517 5 17.4761 5 17.125 5L2.875 5C2.52388 5 2.34833 5 2.22221 4.91573C2.16762 4.87926 2.12074 4.83238 2.08426 4.77779C2 4.65167 2 4.47612 2 4.125L2 2.875C2 2.52388 2 2.34833 2.08426 2.22221C2.12074 2.16762 2.16762 2.12074 2.22221 2.08426C2.34833 2 2.52388 2 2.875 2L17.125 2Z"></path><circle cx="10" cy="17.5" r="0.5"></circle><path d="M13 8H7M12 11H8"></path></svg>
                                </div>
                            </div>
                            <div class="col ps-3">
                                <div class="row g-0">
                                    <div class="col">
                                        <div class="sh-4 d-flex align-items-center lh-1-25">teachers</div>
                                    </div>
                                    <div class="col-auto">
                                        <div class="sh-4 d-flex align-items-center text-alternate">42</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row g-0 align-items-center mb-1">
                            <div class="col-auto">
                                <div class="sw-3 sh-4 d-flex justify-content-center align-items-center">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" class="acorn-icons acorn-icons-clock text-primary"><path d="M8 12L9.70711 10.2929C9.89464 10.1054 10 9.851 10 9.58579V6"></path><circle cx="10" cy="10" r="8"></circle></svg>
                                </div>
                            </div>
                            <div class="col ps-3">
                                <div class="row g-0">
                                    <div class="col">
                                        <div class="sh-4 d-flex align-items-center lh-1-25">Blogs</div>
                                    </div>
                                    <div class="col-auto">
                                        <div class="sh-4 d-flex align-items-center text-alternate">491h</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                      
                        <div class="d-flex flex-row justify-content-between w-100">
                            <a href="//Users/Detail" class="btn btn-outline-primary w-100 me-1 btn-sm">Detail</a>
                            
                        </div>
                    </div>
                </div>
            </div>
            
           
        </div>

        <!-- Content End -->
    </div>
@endsection
