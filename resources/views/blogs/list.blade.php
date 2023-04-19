@php
    $html_tag_data = [];
    $title = 'Blogs List';
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
<div class="row">
    <div class="col-12 col-xl-8 col-xxl-9 mb-5">
    <div class="row row-cols-1 row-cols-sm-2 row-cols-xl-3 g-2 mb-5">
    <div class="col">
    <div class="card h-100">
    <img src="img/product/small/product-6.webp" class="card-img-top sh-19" alt="card image">
    <div class="card-body">
    <h5 class="heading mb-3">
    <a href="/Blogs/Detail" class="body-link stretched-link">
    <span class="clamp-line sh-5" data-line="2" style="overflow: hidden; text-overflow: ellipsis; -webkit-box-orient: vertical; display: -webkit-box; -webkit-line-clamp: 2;">Basic Introduction to Bread Making</span>
    </a>
    </h5>
    <div>
    <div class="row g-0">
    <div class="col-auto pe-3">
    <svg xmlns="http://www.w3.org/2000/svg" width="15" height="15" viewBox="0 0 20 20" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" class="acorn-icons acorn-icons-like text-primary me-1"><path d="M7 16V9.67097C7 9.23919 7.13974 8.819 7.39832 8.47321L7.83416 7.8904C8.26979 7.30784 8.53833 6.61753 8.61086 5.89373L8.83055 3.70144C8.92826 2.72635 9.76756 1.85793 10.6682 2.24409 11.8877 2.76691 12.4524 4.15875 11.9236 6.69693 11.7865 7.35486 12.2627 8.00651 12.9348 8.00651L15.8519 8.00651C17.0126 8.00651 17.9296 8.99136 17.8468 10.1491L17.6805 12.4748C17.5611 14.1456 17.1521 15.7828 16.4718 17.3135 16.2862 17.7309 15.8722 18 15.4154 18H9C7.89543 18 7 17.1046 7 16zM4.5 9C4.96466 9 5.19698 9 5.39018 9.03843 6.18356 9.19624 6.80376 9.81644 6.96157 10.6098 7 10.803 7 11.0353 7 11.5L7 15.5C7 15.9647 7 16.197 6.96157 16.3902 6.80376 17.1836 6.18356 17.8038 5.39018 17.9616 5.19698 18 4.96466 18 4.5 18V18C4.03534 18 3.80302 18 3.60982 17.9616 2.81644 17.8038 2.19624 17.1836 2.03843 16.3902 2 16.197 2 15.9647 2 15.5L2 11.5C2 11.0353 2 10.803 2.03843 10.6098 2.19624 9.81644 2.81644 9.19624 3.60982 9.03843 3.80302 9 4.03535 9 4.5 9V9z"></path></svg>
    <span class="align-middle">34</span>
    </div>
    <div class="col">
    <svg xmlns="http://www.w3.org/2000/svg" width="15" height="15" viewBox="0 0 20 20" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" class="acorn-icons acorn-icons-clock text-primary me-1"><path d="M8 12L9.70711 10.2929C9.89464 10.1054 10 9.851 10 9.58579V6"></path><circle cx="10" cy="10" r="8"></circle></svg>
    <span class="align-middle">Time</span>
    </div>
    </div>
    </div>
    </div>
    </div>
    </div>
    <div class="col">
    <div class="card h-100">
    <img src="img/product/small/product-3.webp" class="card-img-top sh-19" alt="card image">
    <div class="card-body">
    <h5 class="heading mb-3">
    <a href="/Blogs/Detail" class="body-link stretched-link">
    <span class="clamp-line sh-5" data-line="2" style="overflow: hidden; text-overflow: ellipsis; -webkit-box-orient: vertical; display: -webkit-box; -webkit-line-clamp: 2;">14 Facts About Sugar Products</span>
    </a>
    </h5>
    <div>
    <div class="row g-0">
    <div class="col-auto pe-3">
    <svg xmlns="http://www.w3.org/2000/svg" width="15" height="15" viewBox="0 0 20 20" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" class="acorn-icons acorn-icons-like text-primary me-1"><path d="M7 16V9.67097C7 9.23919 7.13974 8.819 7.39832 8.47321L7.83416 7.8904C8.26979 7.30784 8.53833 6.61753 8.61086 5.89373L8.83055 3.70144C8.92826 2.72635 9.76756 1.85793 10.6682 2.24409 11.8877 2.76691 12.4524 4.15875 11.9236 6.69693 11.7865 7.35486 12.2627 8.00651 12.9348 8.00651L15.8519 8.00651C17.0126 8.00651 17.9296 8.99136 17.8468 10.1491L17.6805 12.4748C17.5611 14.1456 17.1521 15.7828 16.4718 17.3135 16.2862 17.7309 15.8722 18 15.4154 18H9C7.89543 18 7 17.1046 7 16zM4.5 9C4.96466 9 5.19698 9 5.39018 9.03843 6.18356 9.19624 6.80376 9.81644 6.96157 10.6098 7 10.803 7 11.0353 7 11.5L7 15.5C7 15.9647 7 16.197 6.96157 16.3902 6.80376 17.1836 6.18356 17.8038 5.39018 17.9616 5.19698 18 4.96466 18 4.5 18V18C4.03534 18 3.80302 18 3.60982 17.9616 2.81644 17.8038 2.19624 17.1836 2.03843 16.3902 2 16.197 2 15.9647 2 15.5L2 11.5C2 11.0353 2 10.803 2.03843 10.6098 2.19624 9.81644 2.81644 9.19624 3.60982 9.03843 3.80302 9 4.03535 9 4.5 9V9z"></path></svg>
    <span class="align-middle">53</span>
    </div>
    <div class="col">
    <svg xmlns="http://www.w3.org/2000/svg" width="15" height="15" viewBox="0 0 20 20" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" class="acorn-icons acorn-icons-clock text-primary me-1"><path d="M8 12L9.70711 10.2929C9.89464 10.1054 10 9.851 10 9.58579V6"></path><circle cx="10" cy="10" r="8"></circle></svg>
    <span class="align-middle">Time</span>
    </div>
    </div>
    </div>
    </div>
    </div>
    </div>
    <div class="col">
    <div class="card h-100">
    <img src="img/product/small/product-4.webp" class="card-img-top sh-19" alt="card image">
    <div class="card-body">
    <h5 class="heading mb-3">
    <a href="/Blogs/Detail" class="body-link stretched-link">
    <span class="clamp-line sh-5" data-line="2" style="overflow: hidden; text-overflow: ellipsis; -webkit-box-orient: vertical; display: -webkit-box; -webkit-line-clamp: 2;">Apple Cake Recipe for Starters</span>
    </a>
    </h5>
    <div>
    <div class="row g-0">
    <div class="col-auto pe-3">
    <svg xmlns="http://www.w3.org/2000/svg" width="15" height="15" viewBox="0 0 20 20" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" class="acorn-icons acorn-icons-like text-primary me-1"><path d="M7 16V9.67097C7 9.23919 7.13974 8.819 7.39832 8.47321L7.83416 7.8904C8.26979 7.30784 8.53833 6.61753 8.61086 5.89373L8.83055 3.70144C8.92826 2.72635 9.76756 1.85793 10.6682 2.24409 11.8877 2.76691 12.4524 4.15875 11.9236 6.69693 11.7865 7.35486 12.2627 8.00651 12.9348 8.00651L15.8519 8.00651C17.0126 8.00651 17.9296 8.99136 17.8468 10.1491L17.6805 12.4748C17.5611 14.1456 17.1521 15.7828 16.4718 17.3135 16.2862 17.7309 15.8722 18 15.4154 18H9C7.89543 18 7 17.1046 7 16zM4.5 9C4.96466 9 5.19698 9 5.39018 9.03843 6.18356 9.19624 6.80376 9.81644 6.96157 10.6098 7 10.803 7 11.0353 7 11.5L7 15.5C7 15.9647 7 16.197 6.96157 16.3902 6.80376 17.1836 6.18356 17.8038 5.39018 17.9616 5.19698 18 4.96466 18 4.5 18V18C4.03534 18 3.80302 18 3.60982 17.9616 2.81644 17.8038 2.19624 17.1836 2.03843 16.3902 2 16.197 2 15.9647 2 15.5L2 11.5C2 11.0353 2 10.803 2.03843 10.6098 2.19624 9.81644 2.81644 9.19624 3.60982 9.03843 3.80302 9 4.03535 9 4.5 9V9z"></path></svg>
    <span class="align-middle">115</span>
    </div>
    <div class="col">
    <svg xmlns="http://www.w3.org/2000/svg" width="15" height="15" viewBox="0 0 20 20" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" class="acorn-icons acorn-icons-clock text-primary me-1"><path d="M8 12L9.70711 10.2929C9.89464 10.1054 10 9.851 10 9.58579V6"></path><circle cx="10" cy="10" r="8"></circle></svg>
    <span class="align-middle">30 Min</span>
    </div>
    </div>
    </div>
    </div>
    </div>
    </div>
    
    
    <div class="col">
    <div class="card h-100">
    <img src="img/product/small/product-4.webp" class="card-img-top sh-19" alt="card image">
    <div class="card-body">
    <h5 class="heading mb-3">
    <a href="/Blogs/Detail" class="body-link stretched-link">
    <span class="clamp-line sh-5" data-line="2" style="overflow: hidden; text-overflow: ellipsis; -webkit-box-orient: vertical; display: -webkit-box; -webkit-line-clamp: 2;">Apple Cake Recipe for Starters</span>
    </a>
    </h5>
    <div>
    <div class="row g-0">
    <div class="col-auto pe-3">
    <svg xmlns="http://www.w3.org/2000/svg" width="15" height="15" viewBox="0 0 20 20" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" class="acorn-icons acorn-icons-like text-primary me-1"><path d="M7 16V9.67097C7 9.23919 7.13974 8.819 7.39832 8.47321L7.83416 7.8904C8.26979 7.30784 8.53833 6.61753 8.61086 5.89373L8.83055 3.70144C8.92826 2.72635 9.76756 1.85793 10.6682 2.24409 11.8877 2.76691 12.4524 4.15875 11.9236 6.69693 11.7865 7.35486 12.2627 8.00651 12.9348 8.00651L15.8519 8.00651C17.0126 8.00651 17.9296 8.99136 17.8468 10.1491L17.6805 12.4748C17.5611 14.1456 17.1521 15.7828 16.4718 17.3135 16.2862 17.7309 15.8722 18 15.4154 18H9C7.89543 18 7 17.1046 7 16zM4.5 9C4.96466 9 5.19698 9 5.39018 9.03843 6.18356 9.19624 6.80376 9.81644 6.96157 10.6098 7 10.803 7 11.0353 7 11.5L7 15.5C7 15.9647 7 16.197 6.96157 16.3902 6.80376 17.1836 6.18356 17.8038 5.39018 17.9616 5.19698 18 4.96466 18 4.5 18V18C4.03534 18 3.80302 18 3.60982 17.9616 2.81644 17.8038 2.19624 17.1836 2.03843 16.3902 2 16.197 2 15.9647 2 15.5L2 11.5C2 11.0353 2 10.803 2.03843 10.6098 2.19624 9.81644 2.81644 9.19624 3.60982 9.03843 3.80302 9 4.03535 9 4.5 9V9z"></path></svg>
    <span class="align-middle">52</span>
    </div>
    <div class="col">
    <svg xmlns="http://www.w3.org/2000/svg" width="15" height="15" viewBox="0 0 20 20" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" class="acorn-icons acorn-icons-clock text-primary me-1"><path d="M8 12L9.70711 10.2929C9.89464 10.1054 10 9.851 10 9.58579V6"></path><circle cx="10" cy="10" r="8"></circle></svg>
    <span class="align-middle">15 Min</span>
    </div>
    </div>
    </div>
    </div>
    </div>
    </div>
    <div class="col">
    <div class="card h-100">
    <img src="img/product/small/product-10.webp" class="card-img-top sh-19" alt="card image">
    <div class="card-body">
    <h5 class="heading mb-3">
    <a href="/Blogs/Detail" class="body-link stretched-link">
    <span class="clamp-line sh-5" data-line="2" style="overflow: hidden; text-overflow: ellipsis; -webkit-box-orient: vertical; display: -webkit-box; -webkit-line-clamp: 2;">A Complete Guide to Mix Dough for the Molds</span>
    </a>
    </h5>
    <div>
    <div class="row g-0">
    <div class="col-auto pe-3">
    <svg xmlns="http://www.w3.org/2000/svg" width="15" height="15" viewBox="0 0 20 20" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" class="acorn-icons acorn-icons-like text-primary me-1"><path d="M7 16V9.67097C7 9.23919 7.13974 8.819 7.39832 8.47321L7.83416 7.8904C8.26979 7.30784 8.53833 6.61753 8.61086 5.89373L8.83055 3.70144C8.92826 2.72635 9.76756 1.85793 10.6682 2.24409 11.8877 2.76691 12.4524 4.15875 11.9236 6.69693 11.7865 7.35486 12.2627 8.00651 12.9348 8.00651L15.8519 8.00651C17.0126 8.00651 17.9296 8.99136 17.8468 10.1491L17.6805 12.4748C17.5611 14.1456 17.1521 15.7828 16.4718 17.3135 16.2862 17.7309 15.8722 18 15.4154 18H9C7.89543 18 7 17.1046 7 16zM4.5 9C4.96466 9 5.19698 9 5.39018 9.03843 6.18356 9.19624 6.80376 9.81644 6.96157 10.6098 7 10.803 7 11.0353 7 11.5L7 15.5C7 15.9647 7 16.197 6.96157 16.3902 6.80376 17.1836 6.18356 17.8038 5.39018 17.9616 5.19698 18 4.96466 18 4.5 18V18C4.03534 18 3.80302 18 3.60982 17.9616 2.81644 17.8038 2.19624 17.1836 2.03843 16.3902 2 16.197 2 15.9647 2 15.5L2 11.5C2 11.0353 2 10.803 2.03843 10.6098 2.19624 9.81644 2.81644 9.19624 3.60982 9.03843 3.80302 9 4.03535 9 4.5 9V9z"></path></svg>
    <span class="align-middle">26</span>
    </div>
    <div class="col">
    <svg xmlns="http://www.w3.org/2000/svg" width="15" height="15" viewBox="0 0 20 20" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" class="acorn-icons acorn-icons-clock text-primary me-1"><path d="M8 12L9.70711 10.2929C9.89464 10.1054 10 9.851 10 9.58579V6"></path><circle cx="10" cy="10" r="8"></circle></svg>
    <span class="align-middle">30 Min</span>
    </div>
    </div>
    </div>
    </div>
    </div>
    </div>
    <div class="col">
    <div class="card h-100">
    <img src="img/product/small/product-6.webp" class="card-img-top sh-19" alt="card image">
    <div class="card-body">
    <h5 class="heading mb-3">
    <a href="/Blogs/Detail" class="body-link stretched-link">
    <span class="clamp-line sh-5" data-line="2" style="overflow: hidden; text-overflow: ellipsis; -webkit-box-orient: vertical; display: -webkit-box; -webkit-line-clamp: 2;">Basic Introduction to Bread Making</span>
    </a>
    </h5>
    <div>
    <div class="row g-0">
    <div class="col-auto pe-3">
    <svg xmlns="http://www.w3.org/2000/svg" width="15" height="15" viewBox="0 0 20 20" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" class="acorn-icons acorn-icons-like text-primary me-1"><path d="M7 16V9.67097C7 9.23919 7.13974 8.819 7.39832 8.47321L7.83416 7.8904C8.26979 7.30784 8.53833 6.61753 8.61086 5.89373L8.83055 3.70144C8.92826 2.72635 9.76756 1.85793 10.6682 2.24409 11.8877 2.76691 12.4524 4.15875 11.9236 6.69693 11.7865 7.35486 12.2627 8.00651 12.9348 8.00651L15.8519 8.00651C17.0126 8.00651 17.9296 8.99136 17.8468 10.1491L17.6805 12.4748C17.5611 14.1456 17.1521 15.7828 16.4718 17.3135 16.2862 17.7309 15.8722 18 15.4154 18H9C7.89543 18 7 17.1046 7 16zM4.5 9C4.96466 9 5.19698 9 5.39018 9.03843 6.18356 9.19624 6.80376 9.81644 6.96157 10.6098 7 10.803 7 11.0353 7 11.5L7 15.5C7 15.9647 7 16.197 6.96157 16.3902 6.80376 17.1836 6.18356 17.8038 5.39018 17.9616 5.19698 18 4.96466 18 4.5 18V18C4.03534 18 3.80302 18 3.60982 17.9616 2.81644 17.8038 2.19624 17.1836 2.03843 16.3902 2 16.197 2 15.9647 2 15.5L2 11.5C2 11.0353 2 10.803 2.03843 10.6098 2.19624 9.81644 2.81644 9.19624 3.60982 9.03843 3.80302 9 4.03535 9 4.5 9V9z"></path></svg>
    <span class="align-middle">12</span>
    </div>
    <div class="col">
    <svg xmlns="http://www.w3.org/2000/svg" width="15" height="15" viewBox="0 0 20 20" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" class="acorn-icons acorn-icons-clock text-primary me-1"><path d="M8 12L9.70711 10.2929C9.89464 10.1054 10 9.851 10 9.58579V6"></path><circle cx="10" cy="10" r="8"></circle></svg>
    <span class="align-middle">45 Min</span>
    </div>
    </div>
    </div>
    </div>
    </div>
    </div>
    <div class="col">
    <div class="card h-100">
    <img src="img/product/small/product-3.webp" class="card-img-top sh-19" alt="card image">
    <div class="card-body">
    <h5 class="heading mb-3">
    <a href="/Blogs/Detail" class="body-link stretched-link">
    <span class="clamp-line sh-5" data-line="2" style="overflow: hidden; text-overflow: ellipsis; -webkit-box-orient: vertical; display: -webkit-box; -webkit-line-clamp: 2;">14 Facts About Sugar Products</span>
    </a>
    </h5>
    <div>
    <div class="row g-0">
    <div class="col-auto pe-3">
    <svg xmlns="http://www.w3.org/2000/svg" width="15" height="15" viewBox="0 0 20 20" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" class="acorn-icons acorn-icons-like text-primary me-1"><path d="M7 16V9.67097C7 9.23919 7.13974 8.819 7.39832 8.47321L7.83416 7.8904C8.26979 7.30784 8.53833 6.61753 8.61086 5.89373L8.83055 3.70144C8.92826 2.72635 9.76756 1.85793 10.6682 2.24409 11.8877 2.76691 12.4524 4.15875 11.9236 6.69693 11.7865 7.35486 12.2627 8.00651 12.9348 8.00651L15.8519 8.00651C17.0126 8.00651 17.9296 8.99136 17.8468 10.1491L17.6805 12.4748C17.5611 14.1456 17.1521 15.7828 16.4718 17.3135 16.2862 17.7309 15.8722 18 15.4154 18H9C7.89543 18 7 17.1046 7 16zM4.5 9C4.96466 9 5.19698 9 5.39018 9.03843 6.18356 9.19624 6.80376 9.81644 6.96157 10.6098 7 10.803 7 11.0353 7 11.5L7 15.5C7 15.9647 7 16.197 6.96157 16.3902 6.80376 17.1836 6.18356 17.8038 5.39018 17.9616 5.19698 18 4.96466 18 4.5 18V18C4.03534 18 3.80302 18 3.60982 17.9616 2.81644 17.8038 2.19624 17.1836 2.03843 16.3902 2 16.197 2 15.9647 2 15.5L2 11.5C2 11.0353 2 10.803 2.03843 10.6098 2.19624 9.81644 2.81644 9.19624 3.60982 9.03843 3.80302 9 4.03535 9 4.5 9V9z"></path></svg>
    <span class="align-middle">22</span>
    </div>
    <div class="col">
    <svg xmlns="http://www.w3.org/2000/svg" width="15" height="15" viewBox="0 0 20 20" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" class="acorn-icons acorn-icons-clock text-primary me-1"><path d="M8 12L9.70711 10.2929C9.89464 10.1054 10 9.851 10 9.58579V6"></path><circle cx="10" cy="10" r="8"></circle></svg>
    <span class="align-middle">10 Min</span>
    </div>
    </div>
    </div>
    </div>
    </div>
    </div>
    <div class="col">
    <div class="card h-100">
    <img src="img/product/small/product-2.webp" class="card-img-top sh-19" alt="card image">
    <div class="card-body">
    <h5 class="heading mb-3">
    <a href="/Blogs/Detail" class="body-link stretched-link">
    <span class="clamp-line sh-5" data-line="2" style="overflow: hidden; text-overflow: ellipsis; -webkit-box-orient: vertical; display: -webkit-box; -webkit-line-clamp: 2;">10 Secrets Every Southern Baker Knows</span>
    </a>
    </h5>
    <div>
    <div class="row g-0">
    <div class="col-auto pe-3">
    <svg xmlns="http://www.w3.org/2000/svg" width="15" height="15" viewBox="0 0 20 20" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" class="acorn-icons acorn-icons-like text-primary me-1"><path d="M7 16V9.67097C7 9.23919 7.13974 8.819 7.39832 8.47321L7.83416 7.8904C8.26979 7.30784 8.53833 6.61753 8.61086 5.89373L8.83055 3.70144C8.92826 2.72635 9.76756 1.85793 10.6682 2.24409 11.8877 2.76691 12.4524 4.15875 11.9236 6.69693 11.7865 7.35486 12.2627 8.00651 12.9348 8.00651L15.8519 8.00651C17.0126 8.00651 17.9296 8.99136 17.8468 10.1491L17.6805 12.4748C17.5611 14.1456 17.1521 15.7828 16.4718 17.3135 16.2862 17.7309 15.8722 18 15.4154 18H9C7.89543 18 7 17.1046 7 16zM4.5 9C4.96466 9 5.19698 9 5.39018 9.03843 6.18356 9.19624 6.80376 9.81644 6.96157 10.6098 7 10.803 7 11.0353 7 11.5L7 15.5C7 15.9647 7 16.197 6.96157 16.3902 6.80376 17.1836 6.18356 17.8038 5.39018 17.9616 5.19698 18 4.96466 18 4.5 18V18C4.03534 18 3.80302 18 3.60982 17.9616 2.81644 17.8038 2.19624 17.1836 2.03843 16.3902 2 16.197 2 15.9647 2 15.5L2 11.5C2 11.0353 2 10.803 2.03843 10.6098 2.19624 9.81644 2.81644 9.19624 3.60982 9.03843 3.80302 9 4.03535 9 4.5 9V9z"></path></svg>
    <span class="align-middle">54</span>
    </div>
    <div class="col">
    <svg xmlns="http://www.w3.org/2000/svg" width="15" height="15" viewBox="0 0 20 20" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" class="acorn-icons acorn-icons-clock text-primary me-1"><path d="M8 12L9.70711 10.2929C9.89464 10.1054 10 9.851 10 9.58579V6"></path><circle cx="10" cy="10" r="8"></circle></svg>
    <span class="align-middle">15 Min</span>
    </div>
    </div>
    </div>
    </div>
    </div>
    </div>
    <div class="col">
    <div class="card h-100">
    <img src="img/product/small/product-1.webp" class="card-img-top sh-19" alt="card image">
    <div class="card-body">
    <h5 class="heading mb-3">
    <a href="/Blogs/Detail" class="body-link stretched-link">
    <span class="clamp-line sh-5" data-line="2" style="overflow: hidden; text-overflow: ellipsis; -webkit-box-orient: vertical; display: -webkit-box; -webkit-line-clamp: 2;">Recipes for Sweet and Healty Treats</span>
    </a>
    </h5>
    <div>
    <div class="row g-0">
    <div class="col-auto pe-3">
    <svg xmlns="http://www.w3.org/2000/svg" width="15" height="15" viewBox="0 0 20 20" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" class="acorn-icons acorn-icons-like text-primary me-1"><path d="M7 16V9.67097C7 9.23919 7.13974 8.819 7.39832 8.47321L7.83416 7.8904C8.26979 7.30784 8.53833 6.61753 8.61086 5.89373L8.83055 3.70144C8.92826 2.72635 9.76756 1.85793 10.6682 2.24409 11.8877 2.76691 12.4524 4.15875 11.9236 6.69693 11.7865 7.35486 12.2627 8.00651 12.9348 8.00651L15.8519 8.00651C17.0126 8.00651 17.9296 8.99136 17.8468 10.1491L17.6805 12.4748C17.5611 14.1456 17.1521 15.7828 16.4718 17.3135 16.2862 17.7309 15.8722 18 15.4154 18H9C7.89543 18 7 17.1046 7 16zM4.5 9C4.96466 9 5.19698 9 5.39018 9.03843 6.18356 9.19624 6.80376 9.81644 6.96157 10.6098 7 10.803 7 11.0353 7 11.5L7 15.5C7 15.9647 7 16.197 6.96157 16.3902 6.80376 17.1836 6.18356 17.8038 5.39018 17.9616 5.19698 18 4.96466 18 4.5 18V18C4.03534 18 3.80302 18 3.60982 17.9616 2.81644 17.8038 2.19624 17.1836 2.03843 16.3902 2 16.197 2 15.9647 2 15.5L2 11.5C2 11.0353 2 10.803 2.03843 10.6098 2.19624 9.81644 2.81644 9.19624 3.60982 9.03843 3.80302 9 4.03535 9 4.5 9V9z"></path></svg>
    <span class="align-middle">108</span>
    </div>
    <div class="col">
    <svg xmlns="http://www.w3.org/2000/svg" width="15" height="15" viewBox="0 0 20 20" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" class="acorn-icons acorn-icons-clock text-primary me-1"><path d="M8 12L9.70711 10.2929C9.89464 10.1054 10 9.851 10 9.58579V6"></path><circle cx="10" cy="10" r="8"></circle></svg>
    <span class="align-middle">15 Min</span>
    </div>
    </div>
    </div>
    </div>
    </div>
    </div>
    <div class="col">
    <div class="card h-100">
    <img src="img/product/small/product-7.webp" class="card-img-top sh-19" alt="card image">
    <div class="card-body">
    <h5 class="heading mb-3">
    <a href="/Blogs/Detail" class="body-link stretched-link">
    <span class="clamp-line sh-5" data-line="2" style="overflow: hidden; text-overflow: ellipsis; -webkit-box-orient: vertical; display: -webkit-box; -webkit-line-clamp: 2;">Introduction to Baking Cakes</span>
    </a>
    </h5>
    <div>
    <div class="row g-0">
    <div class="col-auto pe-3">
    <svg xmlns="http://www.w3.org/2000/svg" width="15" height="15" viewBox="0 0 20 20" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" class="acorn-icons acorn-icons-like text-primary me-1"><path d="M7 16V9.67097C7 9.23919 7.13974 8.819 7.39832 8.47321L7.83416 7.8904C8.26979 7.30784 8.53833 6.61753 8.61086 5.89373L8.83055 3.70144C8.92826 2.72635 9.76756 1.85793 10.6682 2.24409 11.8877 2.76691 12.4524 4.15875 11.9236 6.69693 11.7865 7.35486 12.2627 8.00651 12.9348 8.00651L15.8519 8.00651C17.0126 8.00651 17.9296 8.99136 17.8468 10.1491L17.6805 12.4748C17.5611 14.1456 17.1521 15.7828 16.4718 17.3135 16.2862 17.7309 15.8722 18 15.4154 18H9C7.89543 18 7 17.1046 7 16zM4.5 9C4.96466 9 5.19698 9 5.39018 9.03843 6.18356 9.19624 6.80376 9.81644 6.96157 10.6098 7 10.803 7 11.0353 7 11.5L7 15.5C7 15.9647 7 16.197 6.96157 16.3902 6.80376 17.1836 6.18356 17.8038 5.39018 17.9616 5.19698 18 4.96466 18 4.5 18V18C4.03534 18 3.80302 18 3.60982 17.9616 2.81644 17.8038 2.19624 17.1836 2.03843 16.3902 2 16.197 2 15.9647 2 15.5L2 11.5C2 11.0353 2 10.803 2.03843 10.6098 2.19624 9.81644 2.81644 9.19624 3.60982 9.03843 3.80302 9 4.03535 9 4.5 9V9z"></path></svg>
    <span class="align-middle">28</span>
    </div>
    <div class="col">
    <svg xmlns="http://www.w3.org/2000/svg" width="15" height="15" viewBox="0 0 20 20" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" class="acorn-icons acorn-icons-clock text-primary me-1"><path d="M8 12L9.70711 10.2929C9.89464 10.1054 10 9.851 10 9.58579V6"></path><circle cx="10" cy="10" r="8"></circle></svg>
    <span class="align-middle">30 Min</span>
    </div>
    </div>
    </div>
    </div>
    </div>
    </div>
    <div class="col">
    <div class="card h-100">
    <img src="img/product/small/product-4.webp" class="card-img-top sh-19" alt="card image">
    <div class="card-body">
    <h5 class="heading mb-3">
    <a href="/Blogs/Detail" class="body-link stretched-link">
    <span class="clamp-line sh-5" data-line="2" style="overflow: hidden; text-overflow: ellipsis; -webkit-box-orient: vertical; display: -webkit-box; -webkit-line-clamp: 2;">Better Ways to Mix Dough for the Molds</span>
    </a>
    </h5>
    <div>
    <div class="row g-0">
    <div class="col-auto pe-3">
    <svg xmlns="http://www.w3.org/2000/svg" width="15" height="15" viewBox="0 0 20 20" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" class="acorn-icons acorn-icons-like text-primary me-1"><path d="M7 16V9.67097C7 9.23919 7.13974 8.819 7.39832 8.47321L7.83416 7.8904C8.26979 7.30784 8.53833 6.61753 8.61086 5.89373L8.83055 3.70144C8.92826 2.72635 9.76756 1.85793 10.6682 2.24409 11.8877 2.76691 12.4524 4.15875 11.9236 6.69693 11.7865 7.35486 12.2627 8.00651 12.9348 8.00651L15.8519 8.00651C17.0126 8.00651 17.9296 8.99136 17.8468 10.1491L17.6805 12.4748C17.5611 14.1456 17.1521 15.7828 16.4718 17.3135 16.2862 17.7309 15.8722 18 15.4154 18H9C7.89543 18 7 17.1046 7 16zM4.5 9C4.96466 9 5.19698 9 5.39018 9.03843 6.18356 9.19624 6.80376 9.81644 6.96157 10.6098 7 10.803 7 11.0353 7 11.5L7 15.5C7 15.9647 7 16.197 6.96157 16.3902 6.80376 17.1836 6.18356 17.8038 5.39018 17.9616 5.19698 18 4.96466 18 4.5 18V18C4.03534 18 3.80302 18 3.60982 17.9616 2.81644 17.8038 2.19624 17.1836 2.03843 16.3902 2 16.197 2 15.9647 2 15.5L2 11.5C2 11.0353 2 10.803 2.03843 10.6098 2.19624 9.81644 2.81644 9.19624 3.60982 9.03843 3.80302 9 4.03535 9 4.5 9V9z"></path></svg>
    <span class="align-middle">16</span>
    </div>
    <div class="col">
    <svg xmlns="http://www.w3.org/2000/svg" width="15" height="15" viewBox="0 0 20 20" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" class="acorn-icons acorn-icons-clock text-primary me-1"><path d="M8 12L9.70711 10.2929C9.89464 10.1054 10 9.851 10 9.58579V6"></path><circle cx="10" cy="10" r="8"></circle></svg>
    <span class="align-middle">20 Min</span>
    </div>
    </div>
    </div>
    </div>
    </div>
    </div>
    </div>
    {{-- <div class="row">
    <div class="col-12 text-center">
    <button class="btn btn-xl btn-outline-primary sw-30">Load More</button>
    </div>
    </div> --}}
    </div>
    <div class="col-12 col-xl-4 col-xxl-3">
    <div class="row">
   
    <div class="col-12">
    <h2 class="small-title">Trending</h2>
    <div class="mb-5">
    <div class="row mb-n2">
    <div class="col-12 col-md-6 col-xl-12 mb-2">
    <div class="card sh-11 sh-sm-14">
    <div class="row g-0 h-100">
    <div class="col-auto">
    <img src="img/product/small/product-1.webp" alt="alternate text" class="card-img card-img-horizontal sw-10 sw-sm-14">
    </div>
    <div class="col position-static">
    <div class="card-body d-flex flex-column pt-0 pb-0 h-100 justify-content-center">
    <div class="d-flex flex-column">
    <a href="/Blogs/Detail" class="stretched-link body-link">
    <div class="clamp-line" data-line="2" style="overflow: hidden; text-overflow: ellipsis; -webkit-box-orient: vertical; display: -webkit-box; -webkit-line-clamp: 2;">A Complete Guide to Mix Dough for the Molds</div>
    </a>
    </div>
    </div>
    </div>
    </div>
    </div>
    </div>
    <div class="col-12 col-md-6 col-xl-12 mb-2">
    <div class="card sh-11 sh-sm-14">
    <div class="row g-0 h-100">
    <div class="col-auto">
    <img src="img/product/small/product-2.webp" alt="alternate text" class="card-img card-img-horizontal sw-10 sw-sm-14">
    </div>
    <div class="col position-static">
    <div class="card-body d-flex flex-column pt-0 pb-0 h-100 justify-content-center">
    <div class="d-flex flex-column">
    <a href="/Blogs/Detail" class="stretched-link body-link">
    <div class="clamp-line" data-line="2" style="overflow: hidden; text-overflow: ellipsis; -webkit-box-orient: vertical; display: -webkit-box; -webkit-line-clamp: 2;">Apple Cake Recipe for Starters</div>
    </a>
    </div>
    </div>
    </div>
    </div>
    </div>
    </div>
    <div class="col-12 col-md-6 col-xl-12 mb-2">
    <div class="card sh-11 sh-sm-14">
    <div class="row g-0 h-100">
    <div class="col-auto">
    <img src="img/product/small/product-3.webp" alt="alternate text" class="card-img card-img-horizontal sw-10 sw-sm-14">
    </div>
    <div class="col position-static">
    <div class="card-body d-flex flex-column pt-0 pb-0 h-100 justify-content-center">
    <div class="d-flex flex-column">
    <a href="/Blogs/Detail" class="stretched-link body-link">
    <div class="clamp-line" data-line="2" style="overflow: hidden; text-overflow: ellipsis; -webkit-box-orient: vertical; display: -webkit-box; -webkit-line-clamp: 2;">Basic Introduction to Bread Making</div>
    </a>
    </div>
    </div>
    </div>
    </div>
    </div>
    </div>
    <div class="col-12 col-md-6 col-xl-12 mb-2">
    <div class="card sh-11 sh-sm-14">
    <div class="row g-0 h-100">
    <div class="col-auto">
    <img src="img/product/small/product-4.webp" alt="alternate text" class="card-img card-img-horizontal sw-10 sw-sm-14">
    </div>
    <div class="col position-static">
    <div class="card-body d-flex flex-column pt-0 pb-0 h-100 justify-content-center">
    <div class="d-flex flex-column">
    <a href="/Blogs/Detail" class="stretched-link body-link">
    <div class="clamp-line" data-line="2" style="overflow: hidden; text-overflow: ellipsis; -webkit-box-orient: vertical; display: -webkit-box; -webkit-line-clamp: 2;">Easy and Efficient Tricks for Baking Crispy Breads</div>
    </a>
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
    </div>
    @endsection