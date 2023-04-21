@php
    $html_tag_data = ["scrollspy"=>"true"];
    $title = 'Coupons';
    $description = '';
    $breadcrumbs = ["/"=>"Home"]
@endphp
@extends('layout',['html_tag_data'=>$html_tag_data, 'title'=>$title])

@section('css')
@endsection

@section('js_vendor')
    <script src="/js/cs/scrollspy.js"></script>
    <script src="/js/vendor/jquery.barrating.min.js"></script>
@endsection

@section('js_page')
    <script src="/js/cs/checkall.js"></script>
    <script src="/js/pages/blocks.tabulardata.js"></script>
@endsection

@section('content')
    <div class="container">
        <div class="row">
            <div class="col">
                <!-- Title Start -->
                <section class="scroll-section" id="title">
                    <div class="page-title-container">
                        <h1 class="mb-0 pb-0 display-4">{{ $title }}</h1>
                        @include('_layout.breadcrumb',['breadcrumbs'=>$breadcrumbs])
                    </div>
                </section>
                <!-- Title End -->

                <!-- Content Start -->
                <div class="card mb-5">
                    <div class="card-body">
                        <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                            <button data-bs-toggle="modal" data-bs-target="#overlayScrollLong" class="btn btn-primary me-md-2" type="button"><svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" class="acorn-icons acorn-icons-plus undefined"><path d="M10 17 10 3M3 10 17 10"></path></svg> Create</button>
                           
                          </div>
                    </div>
                </div>

                

                <div class="row">
                    <!-- Labels Start -->
                    <div class="col-12 mb-5">
                        <section class="scroll-section" id="labels">
                            <h2 class="small-title">Labels</h2>
                            <div class="card mb-2 bg-transparent no-shadow d-none d-md-block sh-3">
                                <div class="card-body pt-0 pb-0 h-100">
                                    <div class="row g-0 h-100 align-content-center">
                                        <div class="col-12 col-md-4 d-flex align-items-center mb-2 mb-md-0 text-muted ">Coupon by</div>
                                        <div class="col-6 col-md-2 d-flex align-items-center text-alternate text-medium justify-content-end text-muted ">
                                            Coupon code
                                        </div>
                                        <div class="col-6 col-md-2 d-flex align-items-center justify-content-end text-alternate text-medium justify-content-end text-muted "
                                        >
                                        Date
                                        </div>
                                        <div class="col-6 col-md-2 d-flex align-items-center text-alternate text-medium justify-content-end text-muted ">Approve/Update</div>
                                        <div class="col-6 col-md-2 d-flex align-items-center text-alternate text-medium justify-content-end text-muted ">Block</div>
                                   
                                    </div>
                                </div>
                            </div>
                            <div class="scroll-out">
                                <div class="scroll-by-count" data-count="10">
                                    <div class="card mb-2 sh-19 sh-md-8">
                                        <div class="card-body pt-0 pb-0 h-100">
                                            <div class="row g-0 h-100 align-content-center">
                                                <div class="col-12 col-md-4 d-flex flex-column justify-content-center mb-1 mb-md-0">
                                                    <div class="text-muted text-small d-md-none">Coupon by</div>
                                                    <a href="#" class="text-truncate">Barmbrack</a>
                                                </div>
                                                <div class="col-6 col-md-2 d-flex flex-column justify-content-center align-items-md-end mb-1 mb-md-0">
                                                    <div class="text-muted text-small d-md-none">Coupon code</div>
                                                    <div class="text-alternate" contenteditable>Whole Wheat</div>
                                                </div>
                                                <div class="col-6 col-md-2 d-flex flex-column justify-content-center align-items-md-end mb-1 mb-md-0">
                                                    <div class="text-muted text-small d-md-none">Date</div>
                                                    <div class="text-alternate">
                                                         4/20/23
                                                    </div>
                                                </div>
                                                <div class="col-6 col-md-2 d-flex flex-column justify-content-center align-items-md-end mb-1 mb-md-0">
                                                    <div class="text-muted text-small d-md-none">Approve/Update</div>
                                                    <div class="text-alternate"><button type="button" class="btn btn-outline-success mb-1">Approve/Update</button></div>
                                                </div>
                                                <div class="col-6 col-md-2 d-flex flex-column justify-content-center align-items-md-end mb-1 mb-md-0">
                                                    <div class="text-muted text-small d-md-none">Block</div>
                                                    <div class="text-alternate"><button type="button" class="btn btn-outline-danger mb-1">Block</button></div>
                                                </div>
                                                
                                            </div>
                                        </div>
                                    </div>
                                    
                                    <div class="card mb-2 sh-19 sh-md-8">
                                        <div class="card-body pt-0 pb-0 h-100">
                                            <div class="row g-0 h-100 align-content-center">
                                                <div class="col-12 col-md-4 d-flex flex-column justify-content-center mb-1 mb-md-0">
                                                    <div class="text-muted text-small d-md-none"> Coupon by</div>
                                                    <a href="#" class="text-truncate">Barmbrack</a>
                                                </div>
                                                <div class="col-6 col-md-2 d-flex flex-column justify-content-center align-items-md-end mb-1 mb-md-0">
                                                    <div class="text-muted text-small d-md-none">Coupon code</div>
                                                    <div class="text-alternate" contenteditable>Whole Wheat</div>
                                                </div>
                                                <div class="col-6 col-md-2 d-flex flex-column justify-content-center align-items-md-end mb-1 mb-md-0">
                                                    <div class="text-muted text-small d-md-none">Date</div>
                                                    <div class="text-alternate">
                            <span>
                              <span class="text-small">$</span>
                              3.25
                            </span>
                                                    </div>
                                                </div>
                                                <div class="col-6 col-md-2 d-flex flex-column justify-content-center align-items-md-end mb-1 mb-md-0">
                                                    <div class="text-muted text-small d-md-none">Approve/Update</div>
                                                    <div class="text-alternate"><button type="button" class="btn btn-outline-success mb-1">Approve/Update</button></div>
                                                </div>
                                                <div class="col-6 col-md-2 d-flex flex-column justify-content-center align-items-md-end mb-1 mb-md-0">
                                                    <div class="text-muted text-small d-md-none">Block</div>
                                                    <div class="text-alternate"><button type="button" class="btn btn-outline-danger mb-1">Block</button></div>
                                                </div>
                                                
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card mb-2 sh-19 sh-md-8">
                                        <div class="card-body pt-0 pb-0 h-100">
                                            <div class="row g-0 h-100 align-content-center">
                                                <div class="col-12 col-md-4 d-flex flex-column justify-content-center mb-1 mb-md-0">
                                                    <div class="text-muted text-small d-md-none"> Coupon by</div>
                                                    <a href="#" class="text-truncate">Barmbrack</a>
                                                </div>
                                                <div class="col-6 col-md-2 d-flex flex-column justify-content-center align-items-md-end mb-1 mb-md-0">
                                                    <div class="text-muted text-small d-md-none">Coupon code</div>
                                                    <div class="text-alternate" contenteditable>Whole Wheat</div>
                                                </div>
                                                <div class="col-6 col-md-2 d-flex flex-column justify-content-center align-items-md-end mb-1 mb-md-0">
                                                    <div class="text-muted text-small d-md-none">Date</div>
                                                    <div class="text-alternate">
                            <span>
                              <span class="text-small">$</span>
                              3.25
                            </span>
                                                    </div>
                                                </div>
                                                <div class="col-6 col-md-2 d-flex flex-column justify-content-center align-items-md-end mb-1 mb-md-0">
                                                    <div class="text-muted text-small d-md-none">Approve/Update</div>
                                                    <div class="text-alternate"><button type="button" class="btn btn-outline-success mb-1">Approve/Update</button></div>
                                                </div>
                                                <div class="col-6 col-md-2 d-flex flex-column justify-content-center align-items-md-end mb-1 mb-md-0">
                                                    <div class="text-muted text-small d-md-none">Block</div>
                                                    <div class="text-alternate"><button type="button" class="btn btn-outline-danger mb-1">Block</button></div>
                                                </div>
                                                
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </section>
                    </div>
                    <!-- Labels End -->
                </div>

               

              
            </div>
            <!-- Content End -->

            <!-- Scrollspy Start -->
            
            <!-- Scrollspy End -->
        </div>
    </div>
    <div class="modal fade scroll-out show" id="overlayScrollLong" tabindex="-1" aria-labelledby="overlayScrollLongLabel" style="display: none;" aria-modal="true" role="dialog">
        <div class="modal-dialog modal-dialog-scrollable long modal-dialog-centered">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="overlayScrollLongLabel">Add coupons</h5>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
              <div class="scroll-track-visible os-host os-theme-dark os-host-resize-disabled os-host-scrollbar-horizontal-hidden os-host-transition os-host-overflow os-host-overflow-y"><div class="os-resize-observer-host observed"><div class="os-resize-observer" style="left: 0px; right: auto;"></div></div><div class="os-size-auto-observer observed" style="height: calc(100% + 1px); float: left;"><div class="os-resize-observer"></div></div><div class="os-content-glue" style="margin: 0px -15px; height: 1298px; width: 493px;"></div><div class="os-padding"><div class="os-viewport os-viewport-native-scrollbars-invisible" style="overflow-y: scroll;"><div class="os-content" style="padding: 0px 15px; height: auto; width: 100%;">
                <p class="text-alternate mb-4">Generate Coupons</p>
                <div class="mb-3 filled">
                  <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" class="acorn-icons acorn-icons-user undefined"><path d="M10.0179 8C10.9661 8 11.4402 8 11.8802 7.76629C12.1434 7.62648 12.4736 7.32023 12.6328 7.06826C12.8989 6.64708 12.9256 6.29324 12.9789 5.58557C13.0082 5.19763 13.0071 4.81594 12.9751 4.42106C12.9175 3.70801 12.8887 3.35148 12.6289 2.93726C12.4653 2.67644 12.1305 2.36765 11.8573 2.2256C11.4235 2 10.9533 2 10.0129 2V2C9.03627 2 8.54794 2 8.1082 2.23338C7.82774 2.38223 7.49696 2.6954 7.33302 2.96731C7.07596 3.39365 7.05506 3.77571 7.01326 4.53982C6.99635 4.84898 6.99567 5.15116 7.01092 5.45586C7.04931 6.22283 7.06851 6.60631 7.33198 7.03942C7.4922 7.30281 7.8169 7.61166 8.08797 7.75851C8.53371 8 9.02845 8 10.0179 8V8Z"></path><path d="M16.5 17.5L16.583 16.6152C16.7267 15.082 16.7986 14.3154 16.2254 13.2504C16.0456 12.9164 15.5292 12.2901 15.2356 12.0499C14.2994 11.2842 13.7598 11.231 12.6805 11.1245C11.9049 11.048 11.0142 11 10 11C8.98584 11 8.09511 11.048 7.31945 11.1245C6.24021 11.231 5.70059 11.2842 4.76443 12.0499C4.47077 12.2901 3.95441 12.9164 3.77462 13.2504C3.20144 14.3154 3.27331 15.082 3.41705 16.6152L3.5 17.5"></path></svg>
                  <input class="form-control" placeholder="Name" value="Admin" name="Coupon_by" >
                </div>
                <div class="mb-3 filled">
                  <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" class="acorn-icons acorn-icons-email undefined"><path d="M18 7L11.5652 10.2174C10.9086 10.5457 10.5802 10.7099 10.2313 10.7505C10.0776 10.7684 9.92238 10.7684 9.76869 10.7505C9.41977 10.7099 9.09143 10.5457 8.43475 10.2174L2 7"></path><path d="M14.5 4C15.9045 4 16.6067 4 17.1111 4.33706C17.3295 4.48298 17.517 4.67048 17.6629 4.88886C18 5.39331 18 6.09554 18 7.5L18 12.5C18 13.9045 18 14.6067 17.6629 15.1111C17.517 15.3295 17.3295 15.517 17.1111 15.6629C16.6067 16 15.9045 16 14.5 16L5.5 16C4.09554 16 3.39331 16 2.88886 15.6629C2.67048 15.517 2.48298 15.3295 2.33706 15.1111C2 14.6067 2 13.9045 2 12.5L2 7.5C2 6.09554 2 5.39331 2.33706 4.88886C2.48298 4.67048 2.67048 4.48298 2.88886 4.33706C3.39331 4 4.09554 4 5.5 4L14.5 4Z"></path></svg>
                  <input class="form-control" placeholder="Coupon code" name="code" id="cns">
                </div>
                <button class="btn  btn-quaternary mb-1 justify-content-md-end" type="button" onclick="generateCouponCode()">
                    <span>Generate</span>
                </button>
                
               </div></div><div class="os-scrollbar os-scrollbar-horizontal os-scrollbar-unusable"><div class="os-scrollbar-track os-scrollbar-track-off"><div class="os-scrollbar-handle" style="transform: translate(0px, 0px); width: 100%;"></div></div></div><div class="os-scrollbar os-scrollbar-vertical"><div class="os-scrollbar-track os-scrollbar-track-off"><div class="os-scrollbar-handle" style="transform: translate(0px, 311px); height: 40.755%;"></div></div></div><div class="os-scrollbar-corner"></div></div>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
              <button type="button" class="btn btn-primary">Save changes</button>
            </div>
          </div>
        </div>
      </div>
      <script>
        function generateCouponCode() {
           var length="6";
  let characters = 'ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789';
  let couponCode = '';
  for (let i = 0; i < length; i++) {
    couponCode += characters.charAt(Math.floor(Math.random() * characters.length));
  }




$('#cns').val(couponCode);
        }
      </script>
@endsection
