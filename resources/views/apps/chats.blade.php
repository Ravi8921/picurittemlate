@php
    $html_tag_data = ["fullpage"=>"true"];
    $title =  'Chat';
    $description =  'A basic chat application that built mobile first and has chat and talk screens and contains a contact list.';
    $breadcrumbs = ["/"=>"Home","/Apps"=>"Apps"]
@endphp

@extends('layout',['html_tag_data'=>$html_tag_data, 'title'=>$title, 'description'=>$description])

@section('css')
    <link rel="stylesheet" href="/css/vendor/baguetteBox.min.css"/>
@endsection

@section('js_vendor')
    <script src="/js/vendor/baguetteBox.min.js"></script>
    <script src="/js/vendor/autosize.min.js"></script>
    <script src="/js/vendor/moment-with-locales.min.js"></script>
@endsection

@section('js_page')
    <script src="/js/apps/chat.js"></script>
@endsection

@section('content')

    <div class="container d-flex flex-column">
    <div class="page-title-container">
    <div class="row">
    <div class="col-auto mb-2 mb-md-0">
    <div class="sw-md-30 sw-lg-40 w-100">
    <h1 class="mb-0 pb-0 display-4" id="title">Chat</h1>
    <nav class="breadcrumb-container d-inline-block" aria-label="breadcrumb">
    <ul class="breadcrumb pt-0">
    <li class="breadcrumb-item">
    <a href="/">Home</a>
    </li>
    <li class="breadcrumb-item">
  
    </li>
    </ul>
    </nav>
    </div>
    </div>
    <div class="col-12 col-md d-flex align-items-start justify-content-md-end">
    <button type="button" class="btn btn-icon btn-icon-only btn-outline-primary ms-1 d-none" id="backButton">
    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" class="acorn-icons acorn-icons-arrow-left undefined"><path d="M9 17 2.35355 10.3536C2.15829 10.1583 2.15829 9.84171 2.35355 9.64645L9 3M18 10 3 10"></path></svg>
    </button>
   
    </div>
    </div>
    </div>
    <div class="row d-flex flex-grow-1 overflow-hidden pb-2 h-100">
    <div class="col-auto w-100 w-md-auto h-100 d-flex" id="listView">
    <div class="sw-md-30 sw-lg-40 w-100 d-flex flex-column h-100">
    <div class="card h-100">
    <div class="card-header border-0 pb-0">
    <ul class="nav nav-tabs nav-tabs-line card-header-tabs" role="tablist">
    <li class="nav-item w-50 text-center" role="presentation">
    <a class="nav-link active" data-bs-toggle="tab" href="#messages" role="tab" aria-selected="true">User links</a>
    </li>
    <li class="nav-item w-50 text-center" role="presentation">
    <a class="nav-link" id="profile-tab" data-bs-toggle="tab" href="#contacts" role="tab" aria-selected="false">All users</a>
    </li>
    </ul>
    </div>
    <div class="card-body h-100-card">
    <div class="tab-content h-100" id="userProfileTabs">
    <div class="tab-pane fade h-100 scroll-out active show" id="messages" role="tabpanel">
    <div class="h-100 nav py-0 os-host os-theme-dark os-host-resize-disabled os-host-scrollbar-horizontal-hidden os-host-scrollbar-vertical-hidden os-host-transition" id="messagesListContainer"><div class="os-resize-observer-host observed"><div class="os-resize-observer" style="left: 0px; right: auto;"></div></div><div class="os-size-auto-observer observed" style="height: calc(100% + 1px); float: left;"><div class="os-resize-observer"></div></div><div class="os-content-glue" style="margin: 0px -15px; height: 548px; width: 315px;"></div><div class="os-padding"><div class="os-viewport os-viewport-native-scrollbars-invisible"><div class="os-content" style="padding: 0px 15px; height: auto; width: 100%;"><a href="#" class="row w-100 d-flex flex-row g-0 sh-5 mb-2 nav-link p-0 contact-list-item active" data-id="1">
    <div class="col-auto">
    <div class="sw-5 d-inline-block position-relative">
    <img src="	https://acorn-html-classic-dashboard.coloredstrategies.com/img/profile/profile-4.webp" class="img-fluid rounded-xl border border-2 border-foreground" alt="thumb" id="contactImage">
    <i class="p-1 border border-1 border-foreground bg-primary position-absolute rounded-xl e-0 t-0" id="contactStatus"></i>
    </div>
    </div>
    <div class="col">
    <div class="card-body d-flex flex-row pt-0 pb-0 ps-3 pe-0 h-100 align-items-center justify-content-between">
    <div class="d-flex flex-column">
    <div class="mb-1" id="contactName">Blaine Cottrell</div>
    <div class="text-small text-muted clamp-line" data-line="1" id="contactLastSeen">Today 10:40</div>
    </div>
    <div class="d-flex">
    <div class="badge bg-primary d-none" id="contactUnread">1</div>
    </div>
    </div>
    </div>
    </a><a href="#" class="row w-100 d-flex flex-row g-0 sh-5 mb-2 nav-link p-0 contact-list-item" data-id="2">
    <div class="col-auto">
    <div class="sw-5 d-inline-block position-relative">
    <img src="img/profile/profile-2.webp" class="img-fluid rounded-xl border border-2 border-foreground" alt="thumb" id="contactImage">
    <i class="p-1 border border-1 border-foreground bg-primary position-absolute rounded-xl e-0 t-0 d-none" id="contactStatus"></i>
    </div>
    </div>
    <div class="col">
    <div class="card-body d-flex flex-row pt-0 pb-0 ps-3 pe-0 h-100 align-items-center justify-content-between">
    <div class="d-flex flex-column">
    <div class="mb-1" id="contactName">Cherish Kerr</div>
    <div class="text-small text-muted clamp-line" data-line="1" id="contactLastSeen">Today 15:20</div>
    </div>
    <div class="d-flex">
    <div class="badge bg-primary" id="contactUnread">2</div>
    </div>
    </div>
    </div>
    </a><a href="#" class="row w-100 d-flex flex-row g-0 sh-5 mb-2 nav-link p-0 contact-list-item" data-id="3">
    <div class="col-auto">
    <div class="sw-5 d-inline-block position-relative">
    <img src="img/profile/profile-3.webp" class="img-fluid rounded-xl border border-2 border-foreground" alt="thumb" id="contactImage">
    <i class="p-1 border border-1 border-foreground bg-primary position-absolute rounded-xl e-0 t-0" id="contactStatus"></i>
    </div>
    </div>
    <div class="col">
    <div class="card-body d-flex flex-row pt-0 pb-0 ps-3 pe-0 h-100 align-items-center justify-content-between">
    <div class="d-flex flex-column">
    <div class="mb-1" id="contactName">Kirby Peters</div>
    <div class="text-small text-muted clamp-line" data-line="1" id="contactLastSeen">Yesterday 12:20</div>
    </div>
    <div class="d-flex">
    <div class="badge bg-primary d-none" id="contactUnread">1</div>
    </div>
    </div>
    </div>
    </a><a href="#" class="row w-100 d-flex flex-row g-0 sh-5 mb-2 nav-link p-0 contact-list-item" data-id="5">
    <div class="col-auto">
    <div class="sw-5 d-inline-block position-relative">
    <img src="img/profile/profile-5.webp" class="img-fluid rounded-xl border border-2 border-foreground" alt="thumb" id="contactImage">
    <i class="p-1 border border-1 border-foreground bg-primary position-absolute rounded-xl e-0 t-0 d-none" id="contactStatus"></i>
    </div>
    </div>
    <div class="col">
    <div class="card-body d-flex flex-row pt-0 pb-0 ps-3 pe-0 h-100 align-items-center justify-content-between">
    <div class="d-flex flex-column">
    <div class="mb-1" id="contactName">Esperanza Lodge</div>
    <div class="text-small text-muted clamp-line" data-line="1" id="contactLastSeen">Yesterday 12:20</div>
    </div>
    <div class="d-flex">
    <div class="badge bg-primary d-none" id="contactUnread">1</div>
    </div>
    </div>
    </div>
    </a><a href="#" class="row w-100 d-flex flex-row g-0 sh-5 mb-2 nav-link p-0 contact-list-item" data-id="6">
    <div class="col-auto">
    <div class="sw-5 d-inline-block position-relative">
    <img src="img/profile/profile-6.webp" class="img-fluid rounded-xl border border-2 border-foreground" alt="thumb" id="contactImage">
    <i class="p-1 border border-1 border-foreground bg-primary position-absolute rounded-xl e-0 t-0 d-none" id="contactStatus"></i>
    </div>
    </div>
    <div class="col">
    <div class="card-body d-flex flex-row pt-0 pb-0 ps-3 pe-0 h-100 align-items-center justify-content-between">
    <div class="d-flex flex-column">
    <div class="mb-1" id="contactName">Kathryn Mengel</div>
    <div class="text-small text-muted clamp-line" data-line="1" id="contactLastSeen">Tuesday 12:20</div>
    </div>
    <div class="d-flex">
    <div class="badge bg-primary d-none" id="contactUnread">1</div>
    </div>
    </div>
    </div>
    </a></div></div></div><div class="os-scrollbar os-scrollbar-horizontal os-scrollbar-unusable os-scrollbar-auto-hidden"><div class="os-scrollbar-track os-scrollbar-track-off"><div class="os-scrollbar-handle" style="width: 100%; transform: translate(0px, 0px);"></div></div></div><div class="os-scrollbar os-scrollbar-vertical os-scrollbar-unusable os-scrollbar-auto-hidden"><div class="os-scrollbar-track os-scrollbar-track-off"><div class="os-scrollbar-handle" style="height: 100%; transform: translate(0px, 0px);"></div></div></div><div class="os-scrollbar-corner"></div></div>
    </div>
    <div class="tab-pane fade h-100 scroll-out" id="contacts" role="tabpanel">
    <div class="h-100 nav py-0 os-host os-theme-dark os-host-resize-disabled os-host-scrollbar-horizontal-hidden os-host-scrollbar-vertical-hidden os-host-transition" id="contactsListContainer"><div class="os-resize-observer-host observed"><div class="os-resize-observer" style="left: 0px; right: auto;"></div></div><div class="os-size-auto-observer observed" style="height: calc(100% + 1px); float: left;"><div class="os-resize-observer"></div></div><div class="os-content-glue" style="margin: 0px -15px; height: 548px; width: 315px;"></div><div class="os-padding"><div class="os-viewport os-viewport-native-scrollbars-invisible"><div class="os-content" style="padding: 0px 15px; height: auto; width: 100%;"><a href="#" class="row w-100 d-flex flex-row g-0 sh-5 mb-2 nav-link p-0 contact-list-item active" data-id="1">
    <div class="col-auto">
    <div class="sw-5 d-inline-block position-relative">
    <img src="	https://acorn-html-classic-dashboard.coloredstrategies.com/img/profile/profile-4.webp" class="img-fluid rounded-xl border border-2 border-foreground" alt="thumb" id="contactImage">
    <i class="p-1 border border-1 border-foreground bg-primary position-absolute rounded-xl e-0 t-0" id="contactStatus"></i>
    </div>
    </div>
    <div class="col">
    <div class="card-body d-flex flex-row pt-0 pb-0 ps-3 pe-0 h-100 align-items-center justify-content-between">
    <div class="d-flex flex-column">
    <div class="mb-1" id="contactName">Blaine Cottrell</div>
    <div class="text-small text-muted clamp-line" data-line="1" id="contactLastSeen">Today 10:40</div>
    </div>
    <div class="d-flex">
    <div class="badge bg-primary d-none" id="contactUnread">1</div>
    </div>
    </div>
    </div>
    </a><a href="#" class="row w-100 d-flex flex-row g-0 sh-5 mb-2 nav-link p-0 contact-list-item" data-id="2">
    <div class="col-auto">
    <div class="sw-5 d-inline-block position-relative">
    <img src="img/profile/profile-2.webp" class="img-fluid rounded-xl border border-2 border-foreground" alt="thumb" id="contactImage">
    <i class="p-1 border border-1 border-foreground bg-primary position-absolute rounded-xl e-0 t-0 d-none" id="contactStatus"></i>
    </div>
    </div>
    <div class="col">
    <div class="card-body d-flex flex-row pt-0 pb-0 ps-3 pe-0 h-100 align-items-center justify-content-between">
    <div class="d-flex flex-column">
    <div class="mb-1" id="contactName">Cherish Kerr</div>
    <div class="text-small text-muted clamp-line" data-line="1" id="contactLastSeen">Today 15:20</div>
    </div>
    <div class="d-flex">
    <div class="badge bg-primary" id="contactUnread">2</div>
    </div>
    </div>
    </div>
    </a><a href="#" class="row w-100 d-flex flex-row g-0 sh-5 mb-2 nav-link p-0 contact-list-item" data-id="3">
    <div class="col-auto">
    <div class="sw-5 d-inline-block position-relative">
    <img src="img/profile/profile-3.webp" class="img-fluid rounded-xl border border-2 border-foreground" alt="thumb" id="contactImage">
    <i class="p-1 border border-1 border-foreground bg-primary position-absolute rounded-xl e-0 t-0" id="contactStatus"></i>
    </div>
    </div>
    <div class="col">
    <div class="card-body d-flex flex-row pt-0 pb-0 ps-3 pe-0 h-100 align-items-center justify-content-between">
    <div class="d-flex flex-column">
    <div class="mb-1" id="contactName">Kirby Peters</div>
    <div class="text-small text-muted clamp-line" data-line="1" id="contactLastSeen">Yesterday 12:20</div>
    </div>
    <div class="d-flex">
    <div class="badge bg-primary d-none" id="contactUnread">1</div>
    </div>
    </div>
    </div>
    </a><a href="#" class="row w-100 d-flex flex-row g-0 sh-5 mb-2 nav-link p-0 contact-list-item" data-id="4">
    <div class="col-auto">
    <div class="sw-5 d-inline-block position-relative">
    <img src="	https://acorn-html-classic-dashboard.coloredstrategies.com/img/profile/profile-4.webp" class="img-fluid rounded-xl border border-2 border-foreground" alt="thumb" id="contactImage">
    <i class="p-1 border border-1 border-foreground bg-primary position-absolute rounded-xl e-0 t-0" id="contactStatus"></i>
    </div>
    </div>
    <div class="col">
    <div class="card-body d-flex flex-row pt-0 pb-0 ps-3 pe-0 h-100 align-items-center justify-content-between">
    <div class="d-flex flex-column">
    <div class="mb-1" id="contactName">Zayn Hartley</div>
    <div class="text-small text-muted clamp-line" data-line="1" id="contactLastSeen">Yesterday 12:20</div>
    </div>
    <div class="d-flex">
    <div class="badge bg-primary d-none" id="contactUnread">1</div>
    </div>
    </div>
    </div>
    </a><a href="#" class="row w-100 d-flex flex-row g-0 sh-5 mb-2 nav-link p-0 contact-list-item" data-id="5">
    <div class="col-auto">
    <div class="sw-5 d-inline-block position-relative">
    <img src="img/profile/profile-5.webp" class="img-fluid rounded-xl border border-2 border-foreground" alt="thumb" id="contactImage">
    <i class="p-1 border border-1 border-foreground bg-primary position-absolute rounded-xl e-0 t-0 d-none" id="contactStatus"></i>
    </div>
    </div>
    <div class="col">
    <div class="card-body d-flex flex-row pt-0 pb-0 ps-3 pe-0 h-100 align-items-center justify-content-between">
    <div class="d-flex flex-column">
    <div class="mb-1" id="contactName">Esperanza Lodge</div>
    <div class="text-small text-muted clamp-line" data-line="1" id="contactLastSeen">Yesterday 12:20</div>
    </div>
    <div class="d-flex">
    <div class="badge bg-primary d-none" id="contactUnread">1</div>
    </div>
    </div>
    </div>
    </a><a href="#" class="row w-100 d-flex flex-row g-0 sh-5 mb-2 nav-link p-0 contact-list-item" data-id="6">
    <div class="col-auto">
    <div class="sw-5 d-inline-block position-relative">
    <img src="img/profile/profile-6.webp" class="img-fluid rounded-xl border border-2 border-foreground" alt="thumb" id="contactImage">
    <i class="p-1 border border-1 border-foreground bg-primary position-absolute rounded-xl e-0 t-0 d-none" id="contactStatus"></i>
    </div>
    </div>
    <div class="col">
    <div class="card-body d-flex flex-row pt-0 pb-0 ps-3 pe-0 h-100 align-items-center justify-content-between">
    <div class="d-flex flex-column">
    <div class="mb-1" id="contactName">Kathryn Mengel</div>
    <div class="text-small text-muted clamp-line" data-line="1" id="contactLastSeen">Tuesday 12:20</div>
    </div>
    <div class="d-flex">
    <div class="badge bg-primary d-none" id="contactUnread">1</div>
    </div>
    </div>
    </div>
    </a><a href="#" class="row w-100 d-flex flex-row g-0 sh-5 mb-2 nav-link p-0 contact-list-item" data-id="7">
    <div class="col-auto">
    <div class="sw-5 d-inline-block position-relative">
    <img src="img/profile/profile-7.webp" class="img-fluid rounded-xl border border-2 border-foreground" alt="thumb" id="contactImage">
    <i class="p-1 border border-1 border-foreground bg-primary position-absolute rounded-xl e-0 t-0 d-none" id="contactStatus"></i>
    </div>
    </div>
    <div class="col">
    <div class="card-body d-flex flex-row pt-0 pb-0 ps-3 pe-0 h-100 align-items-center justify-content-between">
    <div class="d-flex flex-column">
    <div class="mb-1" id="contactName">Daisy Hartley</div>
    <div class="text-small text-muted clamp-line" data-line="1" id="contactLastSeen">Tuesday 10:20</div>
    </div>
    <div class="d-flex">
    <div class="badge bg-primary d-none" id="contactUnread">1</div>
    </div>
    </div>
    </div>
    </a><a href="#" class="row w-100 d-flex flex-row g-0 sh-5 mb-2 nav-link p-0 contact-list-item" data-id="8">
    <div class="col-auto">
    <div class="sw-5 d-inline-block position-relative">
    <img src="img/profile/profile-8.webp" class="img-fluid rounded-xl border border-2 border-foreground" alt="thumb" id="contactImage">
    <i class="p-1 border border-1 border-foreground bg-primary position-absolute rounded-xl e-0 t-0 d-none" id="contactStatus"></i>
    </div>
    </div>
    <div class="col">
    <div class="card-body d-flex flex-row pt-0 pb-0 ps-3 pe-0 h-100 align-items-center justify-content-between">
    <div class="d-flex flex-column">
    <div class="mb-1" id="contactName">Alicia Shannah</div>
    <div class="text-small text-muted clamp-line" data-line="1" id="contactLastSeen">Monday 15:50</div>
    </div>
    <div class="d-flex">
    <div class="badge bg-primary d-none" id="contactUnread">1</div>
    </div>
    </div>
    </div>
    </a><a href="#" class="row w-100 d-flex flex-row g-0 sh-5 mb-2 nav-link p-0 contact-list-item" data-id="9">
    <div class="col-auto">
    <div class="sw-5 d-inline-block position-relative">
    <img src="img/profile/profile-9.webp" class="img-fluid rounded-xl border border-2 border-foreground" alt="thumb" id="contactImage">
    <i class="p-1 border border-1 border-foreground bg-primary position-absolute rounded-xl e-0 t-0 d-none" id="contactStatus"></i>
    </div>
    </div>
    <div class="col">
    <div class="card-body d-flex flex-row pt-0 pb-0 ps-3 pe-0 h-100 align-items-center justify-content-between">
    <div class="d-flex flex-column">
    <div class="mb-1" id="contactName">Gresham Jeanette</div>
    <div class="text-small text-muted clamp-line" data-line="1" id="contactLastSeen">Monday 04:45</div>
    </div>
    <div class="d-flex">
    <div class="badge bg-primary d-none" id="contactUnread">1</div>
    </div>
    </div>
    </div>
    </a><a href="#" class="row w-100 d-flex flex-row g-0 sh-5 mb-2 nav-link p-0 contact-list-item" data-id="10">
    <div class="col-auto">
    <div class="sw-5 d-inline-block position-relative">
    <img src="img/profile/profile-10.webp" class="img-fluid rounded-xl border border-2 border-foreground" alt="thumb" id="contactImage">
    <i class="p-1 border border-1 border-foreground bg-primary position-absolute rounded-xl e-0 t-0 d-none" id="contactStatus"></i>
    </div>
    </div>
    <div class="col">
    <div class="card-body d-flex flex-row pt-0 pb-0 ps-3 pe-0 h-100 align-items-center justify-content-between">
    <div class="d-flex flex-column">
    <div class="mb-1" id="contactName">Mickey Fianna</div>
    <div class="text-small text-muted clamp-line" data-line="1" id="contactLastSeen">Monday 02:00</div>
    </div>
    <div class="d-flex">
    <div class="badge bg-primary d-none" id="contactUnread">1</div>
    </div>
    </div>
    </div>
    </a></div></div></div><div class="os-scrollbar os-scrollbar-horizontal os-scrollbar-unusable os-scrollbar-auto-hidden"><div class="os-scrollbar-track os-scrollbar-track-off"><div class="os-scrollbar-handle" style="transform: translate(0px, 0px); width: 100%;"></div></div></div><div class="os-scrollbar os-scrollbar-vertical os-scrollbar-unusable os-scrollbar-auto-hidden"><div class="os-scrollbar-track os-scrollbar-track-off"><div class="os-scrollbar-handle" style="transform: translate(0px, 0px); height: 100%;"></div></div></div><div class="os-scrollbar-corner"></div></div>
    </div>
    </div>
    </div>
    </div>
    </div>
    </div>
    <div class="col h-100 d-flex" id="chatView">
    <div class="flex-column h-100 w-100 d-flex" id="chatMode">
    <div class="card h-100 mb-2">
    <div class="card-body d-flex flex-column h-100 w-100 position-relative">
    <div class="d-flex flex-row align-items-center mb-3">
    <div class="row g-0 sh-6 align-self-start" id="contactTitle">
    <div class="col-auto">
    <div class="sh-6 sw-6 d-inline-block position-relative">
    <img src="	https://acorn-html-classic-dashboard.coloredstrategies.com/img/profile/profile-4.webp" class="img-fluid rounded-xl border border-2 border-foreground profile" alt="thumb">
    <i class="p-1 border border-1 border-foreground bg-primary position-absolute rounded-xl e-0 t-0 status"></i>
    </div>
    </div>
    <div class="col">
    <div class="card-body d-flex flex-row pt-0 pb-0 pe-0 pe-0 ps-2 h-100 align-items-center justify-content-between">
    <div class="d-flex flex-column">
    <div class="name">Blaine Cottrell</div>
    </div>
    </div>
    </div>
    </div>
  
    </div>
    <div class="separator-light mb-3"></div>
    <div class="h-100 mb-n2 scroll-out">
    <div class="h-100 os-host os-theme-dark os-host-resize-disabled os-host-scrollbar-horizontal-hidden os-host-overflow os-host-overflow-y os-host-transition" id="chatContentContainer"><div class="os-resize-observer-host observed"><div class="os-resize-observer" style="left: 0px; right: auto;"></div></div><div class="os-size-auto-observer observed" style="height: calc(100% + 1px); float: left;"><div class="os-resize-observer"></div></div><div class="os-content-glue" style="margin: 0px -15px; width: 1491px; height: 436px;"></div><div class="os-padding"><div class="os-viewport os-viewport-native-scrollbars-invisible" style="overflow-y: scroll;"><div class="os-content" style="padding: 0px 15px; height: 100%; width: 100%;"><div class="mb-2 card-content">
    <div class="row g-2">
    <div class="col-auto d-flex align-items-end">
    <div class="sw-5 sh-5 mb-1 d-inline-block position-relative">
    <img src="	https://acorn-html-classic-dashboard.coloredstrategies.com/img/profile/profile-4.webp" class="img-fluid rounded-xl chat-profile" alt="thumb">
    </div>
    </div>
    <div class="col d-flex align-items-end content-container"><div class="bg-separator-light d-inline-block rounded-md py-3 px-3 pe-7 position-relative text-alternate">
    <span class="text">Hello there!</span>
    <span class="position-absolute text-extra-small text-alternate opacity-75 b-2 e-2 time">17:20</span>
    </div></div>
    </div>
    </div><div class="mb-2 card-content">
    <div class="row g-2">
    <div class="col-auto d-flex align-items-end">
    <div class="sw-5 sh-5 mb-1 d-inline-block position-relative">
    <img src="	https://acorn-html-classic-dashboard.coloredstrategies.com/img/profile/profile-4.webp" class="img-fluid rounded-xl chat-profile" alt="thumb">
    </div>
    </div>
    <div class="col d-flex align-items-end content-container"><div class="bg-separator-light d-inline-block rounded-md py-3 px-3 pe-7 position-relative text-alternate">
    <span class="text">How is it going?</span>
    <span class="position-absolute text-extra-small text-alternate opacity-75 b-2 e-2 time">17:20</span>
    </div></div>
    </div>
    </div><div class="mb-2 card-content">
    <div class="row g-2">
    <div class="col-auto d-flex align-items-end">
    <div class="sw-5 sh-5 mb-1 d-inline-block position-relative">
    <img src="	https://acorn-html-classic-dashboard.coloredstrategies.com/img/profile/profile-4.webp" class="img-fluid rounded-xl chat-profile" alt="thumb">
    </div>
    </div>
    <div class="col d-flex align-items-end content-container"><div class="bg-separator-light d-inline-block rounded-md py-3 px-3 pe-7 position-relative text-alternate">
    <span class="text">Here is the images you have asked for.</span>
    <span class="position-absolute text-extra-small text-alternate opacity-75 b-2 e-2 time">17:21</span>
    </div></div>
    </div>
    </div><div class="mb-2 card-content">
    <div class="row g-2">
    <div class="col-auto d-flex align-items-end">
    <div class="sw-5 sh-5 mb-1 d-inline-block position-relative">
    <img src="	https://acorn-html-classic-dashboard.coloredstrategies.com/img/profile/profile-4.webp" class="img-fluid rounded-xl chat-profile" alt="thumb">
    </div>
    </div>
    <div class="col d-flex align-items-end content-container"><div class="bg-separator-light d-inline-block rounded-md py-3 px-3 pe-7 position-relative text-alternate">
    <span class="text">Carrot cake pie sweet roll cake. Danish apple pie danish muffin marzipan carrot cake. Danish pastry wafer halvah brownie muffin cookie cookie. Dessert sweet chocolate fruitcake. Toffee candy cake. Pie gummies dessert oat cake sweet roll powder jelly pastry chocolate cake. Gummi bears cake icing gummies marzipan croissant lemon drops soufflé.</span>
    <span class="position-absolute text-extra-small text-alternate opacity-75 b-2 e-2 time">17:22</span>
    </div></div>
    </div>
    </div><div class="mb-2 card-content">
    <div class="row g-2">
    <div class="col-auto d-flex align-items-end">
    <div class="sw-5 sh-5 mb-1 d-inline-block position-relative">
    <img src="	https://acorn-html-classic-dashboard.coloredstrategies.com/img/profile/profile-4.webp" class="img-fluid rounded-xl chat-profile" alt="thumb">
    </div>
    </div>
    <div class="col d-flex align-items-end content-container"><div class="bg-separator-light d-inline-block rounded-md py-3 px-3 pe-7 position-relative text-alternate">
    <span class="text">Fruitcake chupa chups gingerbread sweet roll pie. Tootsie roll sweet roll pudding. Pastry liquorice wafer sweet.</span>
    <span class="position-absolute text-extra-small text-alternate opacity-75 b-2 e-2 time">17:23</span>
    </div></div>
    </div>
    </div><div class="mb-2 card-content">
    <div class="row g-2">
    <div class="col-auto d-flex align-items-end order-1">
    <div class="sw-5 sh-5 mb-1 d-inline-block position-relative">
    <img src="img/profile/profile-2.webp" class="img-fluid rounded-xl" alt="thumb">
    </div>
    </div>
    <div class="col d-flex justify-content-end align-items-end content-container"><div class="bg-gradient-light d-inline-block rounded-md py-3 px-3 ps-7 text-white position-relative">
    <span class="text">Toffee croissant icing toffee. Sweet roll chupa chups marshmallow.</span>
    <span class="position-absolute text-extra-small text-white opacity-75 b-2 s-2 time">19:10</span>
    </div></div>
    </div>
    </div><div class="mb-2 card-content">
    <div class="row g-2">
    <div class="col-auto d-flex align-items-end order-1">
    <div class="sw-5 sh-5 mb-1 d-inline-block position-relative">
    <img src="img/profile/profile-2.webp" class="img-fluid rounded-xl" alt="thumb">
    </div>
    </div>
    <div class="col d-flex justify-content-end align-items-end content-container"><div class="bg-gradient-light d-inline-block rounded-md py-3 px-3 ps-7 text-white position-relative">
    <span class="text">Chocolate cake lollipop dessert.</span>
    <span class="position-absolute text-extra-small text-white opacity-75 b-2 s-2 time">19:11</span>
    </div></div>
    </div>
    </div><div class="mb-2 card-content">
    <div class="row g-2">
    <div class="col-auto d-flex align-items-end">
    <div class="sw-5 sh-5 mb-1 d-inline-block position-relative">
    <img src="	https://acorn-html-classic-dashboard.coloredstrategies.com/img/profile/profile-4.webp" class="img-fluid rounded-xl chat-profile" alt="thumb">
    </div>
    </div>
    <div class="col d-flex align-items-end content-container"><div class="bg-separator-light d-inline-block rounded-md py-3 px-3 pe-7 position-relative text-alternate">
    <span class="text">Tootsie roll sweet roll pudding.</span>
    <span class="position-absolute text-extra-small text-alternate opacity-75 b-2 e-2 time">19:13</span>
    </div></div>
    </div>
    </div><div class="mb-2 card-content">
    <div class="row g-2">
    <div class="col-auto d-flex align-items-end">
    <div class="sw-5 sh-5 mb-1 d-inline-block position-relative">
    <img src="	https://acorn-html-classic-dashboard.coloredstrategies.com/img/profile/profile-4.webp" class="img-fluid rounded-xl chat-profile" alt="thumb">
    </div>
    </div>
    <div class="col d-flex align-items-end content-container"><div class="bg-separator-light d-inline-block rounded-md py-3 px-3 pe-7 position-relative text-alternate">
    <span class="text">Danish pastry wafer halvah brownie muffin cookie cookie.</span>
    <span class="position-absolute text-extra-small text-alternate opacity-75 b-2 e-2 time">19:15</span>
    </div></div>
    </div>
    </div><div class="mb-2 card-content">
    <div class="row g-2">
    <div class="col-auto d-flex align-items-end order-1">
    <div class="sw-5 sh-5 mb-1 d-inline-block position-relative">
    <img src="img/profile/profile-2.webp" class="img-fluid rounded-xl" alt="thumb">
    </div>
    </div>
    <div class="col d-flex justify-content-end align-items-end content-container"><div class="bg-gradient-light d-inline-block rounded-md py-3 px-3 ps-7 text-white position-relative">
    <span class="text">Oat cake gummies cheesecake cake biscuit jelly beans. Muffin cheesecake sesame snaps.</span>
    <span class="position-absolute text-extra-small text-white opacity-75 b-2 s-2 time">19:35</span>
    </div></div>
    </div>
    </div><div class="mb-2 card-content">
    <div class="row g-2">
    <div class="col-auto d-flex align-items-end">
    <div class="sw-5 sh-5 mb-1 d-inline-block position-relative">
    <img src="	https://acorn-html-classic-dashboard.coloredstrategies.com/img/profile/profile-4.webp" class="img-fluid rounded-xl chat-profile" alt="thumb">
    </div>
    </div>
    <div class="col d-flex align-items-end content-container"><div class="bg-separator-light d-inline-block rounded-md py-3 px-3 pe-7 position-relative text-alternate">
    <span class="text">Thanks for the help!</span>
    <span class="position-absolute text-extra-small text-alternate opacity-75 b-2 e-2 time">21:22</span>
    </div></div>
    </div>
    </div><div class="mb-2 card-content">
    <div class="row g-2">
    <div class="col-auto d-flex align-items-end">
    <div class="sw-5 sh-5 mb-1 d-inline-block position-relative">
    <img src="	https://acorn-html-classic-dashboard.coloredstrategies.com/img/profile/profile-4.webp" class="img-fluid rounded-xl chat-profile" alt="thumb">
    </div>
    </div>
    <div class="col d-flex align-items-end content-container"><div class="bg-separator-light d-inline-block rounded-md py-3 px-3 pe-7 position-relative text-alternate">
    <span class="text">And I see you soon!</span>
    <span class="position-absolute text-extra-small text-alternate opacity-75 b-2 e-2 time">21:22</span>
    </div></div>
    </div>
    </div><div class="mb-2 card-content">
    <div class="row g-2">
    <div class="col-auto d-flex align-items-end">
    <div class="sw-5 sh-5 mb-1 d-inline-block position-relative">
    <img src="	https://acorn-html-classic-dashboard.coloredstrategies.com/img/profile/profile-4.webp" class="img-fluid rounded-xl chat-profile" alt="thumb">
    </div>
    </div>
    <div class="col d-flex align-items-end content-container"><div class="bg-separator-light d-inline-block rounded-md py-3 px-3 pe-7 position-relative text-alternate">
    <span class="text">Bye</span>
    <span class="position-absolute text-extra-small text-alternate opacity-75 b-2 e-2 time">21:22</span>
    </div></div>
    </div>
    </div></div></div></div><div class="os-scrollbar os-scrollbar-horizontal os-scrollbar-unusable os-scrollbar-auto-hidden"><div class="os-scrollbar-track os-scrollbar-track-off"><div class="os-scrollbar-handle" style="width: 100%; transform: translate(0px, 0px);"></div></div></div><div class="os-scrollbar os-scrollbar-vertical os-scrollbar-auto-hidden"><div class="os-scrollbar-track os-scrollbar-track-off"><div class="os-scrollbar-handle" style="height: 43.7876%; transform: translate(0px, 243px);"></div></div></div><div class="os-scrollbar-corner"></div></div>
    </div>
    </div>
    </div>
    <div class="card">
    <div class="card-body p-0 d-flex flex-row align-items-center px-3 py-3">
    <textarea class="form-control me-3 border-0 ps-2 py-2" placeholder="Message" rows="1" id="chatInput" style="overflow: hidden; overflow-wrap: break-word; height: 37px;"></textarea>
    <div class="d-flex flex-row">
   
    <button class="btn btn-icon btn-icon-only btn-primary mb-1 rounded-xl ms-1" id="chatSendButton" type="button">
    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" class="acorn-icons acorn-icons-chevron-right undefined"><path d="M7 4L12.6464 9.64645C12.8417 9.84171 12.8417 10.1583 12.6464 10.3536L7 16"></path></svg>
    </button>
    </div>
    </div>
    </div>
    </div>
    <div class="card flex-column h-100 w-100 bg-gradient-single-2 d-none" id="callMode">
    <div class="bg-vertical-ornament-3 w-100 h-100 d-flex flex-column justify-content-between align-items-center">
    <div class="card-body d-flex align-items-center flex-column flex-grow-1 w-100">
    <div class="sw-10 mb-2 position-relative">
    <img src="img/profile/profile-1.webp" class="img-fluid rounded-xl border border-2 border-foreground profile" alt="thumb">
    </div>
    <div class="name text-white">Blaine Cottrell</div>
    <div class="text-white text-small time">00:00:00</div>
    </div>
    <div class="card-body d-flex flex-grow-0">
    <button class="btn btn-foreground btn-icon btn-icon-only me-2">
    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" class="acorn-icons acorn-icons-camera undefined"><path d="M14.7668 6.03676C15.9182 6.03676 16.494 6.03676 16.9311 6.26674C17.2892 6.45509 17.5817 6.74759 17.77 7.10563C18 7.54279 18 8.11852 18 9.26997L18 13.5C18 14.9045 18 15.6067 17.6629 16.1111C17.517 16.3295 17.3295 16.517 17.1111 16.6629C16.6067 17 15.9045 17 14.5 17L5.5 17C4.09554 17 3.39331 17 2.88886 16.6629C2.67048 16.517 2.48298 16.3295 2.33706 16.1111C2 15.6067 2 14.9045 2 13.5L2 9.26997C2 8.11852 2 7.54279 2.22998 7.10562C2.41833 6.74759 2.71083 6.45509 3.06886 6.26674C3.50603 6.03676 4.08176 6.03676 5.23321 6.03676V6.03676C5.67512 6.03676 5.89608 6.03676 6.08138 5.95919C6.23375 5.89539 6.36795 5.79484 6.47199 5.66652C6.59849 5.51048 6.66057 5.29842 6.78471 4.8743L6.96499 4.25839C7.11629 3.7415 7.19194 3.48306 7.3626 3.30601C7.43714 3.22868 7.52365 3.16386 7.6188 3.11405C7.83667 3 8.10595 3 8.64452 3L11.3555 3C11.8941 3 12.1633 3 12.3812 3.11405C12.4764 3.16386 12.5629 3.22868 12.6374 3.30601C12.8081 3.48306 12.8837 3.7415 13.035 4.25839L13.2153 4.8743C13.3394 5.29842 13.4015 5.51048 13.528 5.66652C13.632 5.79484 13.7662 5.89539 13.9186 5.95919C14.1039 6.03676 14.3249 6.03676 14.7668 6.03676V6.03676Z"></path><circle cx="10" cy="11" r="3"></circle></svg>
    </button>
    <button class="btn btn-foreground btn-icon btn-icon-only me-2">
    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" class="acorn-icons acorn-icons-mic-off undefined"><path d="M13 7V9C13 9.61337 12.8159 10.1837 12.5 10.6589C11.9625 11.4672 11.0435 12 10 12C9.43399 12 8.90459 11.8433 8.45284 11.5708M11.8178 2.61323C11.3134 2.22849 10.6834 2 10 2C8.34315 2 7 3.34315 7 5V8"></path><path d="M16 8.5V9C16 12.3137 13.3137 15 10 15 8.63733 15 7.38077 14.5457 6.37347 13.7804M4 8.5V9C4 9.79634 4.15514 10.5564 4.43685 11.2517M10 15V16 18M8 18H12M10 5V6M17 3 3 17"></path></svg>
    </button>
    <button class="btn btn-foreground btn-icon" id="endCallButton">
    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" class="acorn-icons acorn-icons-phone-off undefined"><path d="M9.28875 10.7884C9.97459 11.4587 10.8613 11.9211 11.7641 11.9908 11.9189 12.0028 12.0722 11.9638 12.2111 11.8944L13.5089 11.2455C13.8147 11.0926 14.1775 11.1065 14.4706 11.2824L16.5335 12.5201C17.7286 13.2372 17.8422 14.9262 16.7539 15.7968L14.8496 17.3203C14.3198 17.7441 13.6087 17.8766 12.976 17.6318 10.4266 16.6452 8.2679 15.268 6.49993 13.5M4.05844 10.4243C3.405 9.38082 2.84155 8.24729 2.3681 7.02378 2.12326 6.39107 2.25581 5.68011 2.67962 5.15035L4.20307 3.24603C5.07375 2.1577 6.76272 2.27131 7.4798 3.46644L8.71749 5.52926C8.89339 5.82244 8.90733 6.18516 8.75443 6.49097L8.49993 6.99998M15 5 3 17"></path></svg>
    <span>End Call</span>
    </button>
    </div>
    </div>
    </div>
    </div>
    </div>
    </div>
    <template id="listItemTemplate">
    <a href="#" class="row w-100 d-flex flex-row g-0 sh-5 mb-2 nav-link p-0 contact-list-item">
    <div class="col-auto">
    <div class="sw-5 d-inline-block position-relative">
    <img src="img/profile/profile-1.webp" class="img-fluid rounded-xl border border-2 border-foreground" alt="thumb" id="contactImage">
    <i class="p-1 border border-1 border-foreground bg-primary position-absolute rounded-xl e-0 t-0" id="contactStatus"></i>
    </div>
    </div>
    <div class="col">
    <div class="card-body d-flex flex-row pt-0 pb-0 ps-3 pe-0 h-100 align-items-center justify-content-between">
    <div class="d-flex flex-column">
    <div class="mb-1" id="contactName"></div>
    <div class="text-small text-muted clamp-line" data-line="1" id="contactLastSeen"></div>
    </div>
    <div class="d-flex">
    <div class="badge bg-primary d-none" id="contactUnread">1</div>
    </div>
    </div>
    </div>
    </a>
    </template>
    <template id="respondContainerTemplate">
    <div class="mb-2 card-content">
    <div class="row g-2">
    <div class="col-auto d-flex align-items-end">
    <div class="sw-5 sh-5 mb-1 d-inline-block position-relative">
    <img src="img/profile/profile-1.webp" class="img-fluid rounded-xl chat-profile" alt="thumb">
    </div>
    </div>
    <div class="col d-flex align-items-end content-container"></div>
    </div>
    </div>
    </template>
    <template id="respondAttachmentContentTemplate">
    <div class="d-inline-block sh-11 me-2 position-relative pb-4 rounded-md bg-separator-light text-alternate">
    <a href="" data-caption="cupcake.webp" class="lightbox h-100 attachment">
    <img src="img/product/small/product-4.webp" class="h-100 rounded-md-top">
    </a>
    <span class="position-absolute text-extra-small text-alternate opacity-75 b-2 e-2 time">17:20</span>
    </div>
    </template>
    <template id="respondTextContentTemplate">
    <div class="bg-separator-light d-inline-block rounded-md py-3 px-3 pe-7 position-relative text-alternate">
    <span class="text">Hi, how is it going?</span>
    <span class="position-absolute text-extra-small text-alternate opacity-75 b-2 e-2 time">17:20</span>
    </div>
    </template>
    <template id="messageContainerTemplate">
    <div class="mb-2 card-content">
    <div class="row g-2">
    <div class="col-auto d-flex align-items-end order-1">
    <div class="sw-5 sh-5 mb-1 d-inline-block position-relative">
    <img src="img/profile/profile-2.webp" class="img-fluid rounded-xl" alt="thumb">
    </div>
    </div>
    <div class="col d-flex justify-content-end align-items-end content-container"></div>
    </div>
    </div>
    </template>
    <template id="messageAttachmentContentTemplate">
    <div class="d-inline-block sh-11 ms-2 position-relative pb-4 bg-primary rounded-md">
    <a href="" data-caption="cake.webp" class="lightbox h-100 attachment">
    <img src="img/product/small/product-4.webp" class="h-100 rounded-md-top">
    </a>
    <span class="position-absolute text-extra-small text-white opacity-75 b-2 s-2 time">19:26</span>
    </div>
    </template>
    <template id="messageTextContentTemplate">
    <div class="bg-gradient-light d-inline-block rounded-md py-3 px-3 ps-7 text-white position-relative">
    <span class="text">Chocolate cake lollipop dessert.</span>
    <span class="position-absolute text-extra-small text-white opacity-75 b-2 s-2 time">19:20</span>
    </div>
    </template>
   
    <!-- Message Content Text End -->
@endsection