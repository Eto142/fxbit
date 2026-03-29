<!DOCTYPE html>
<html lang="en" data-layout-mode="detached" data-topbar-color="dark" data-menu-color="light" data-sidenav-user="true">

<head>
    <meta charset="utf-8" />
    <title>Dashboard | </title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="robots" content="noindex, nofollow">
    <meta name="googlebot" content="noindex, nofollow">
    <meta name="bingbot" content="noindex, nofollow">
    <meta name="scam-advisor" content="noindex, nofollow">
    <meta name="scam-adviser" content="noindex, nofollow">
    <meta name="scamadviser" content="noindex, nofollow">
    <meta name="google" content="noindex, nofollow">

    <!-- App favicon -->
    <link rel="shortcut icon" href="{{asset('asset/images/favicon.ico')}}">

    <!-- Daterangepicker css -->
    <link href="{{asset('asset/vendor/daterangepicker/daterangepicker.css')}}" rel="stylesheet" type="text/css">

    <!-- Vector Map css -->
    <link href="{{asset('asset/vendor/jsvectormap/css/jsvectormap.min.css')}}" rel="stylesheet" type="text/css">

    <!-- Theme Config Js -->
    <script src="{{asset('asset/js/hyper-config.js')}}"></script>

    <!-- App css -->
    <link href="{{asset('asset/css/app-modern.min.css')}}" rel="stylesheet" type="text/css" id="app-style" />

    <!-- Icons css -->
    <link href="{{asset('asset/css/icons.min.css')}}" rel="stylesheet" type="text/css" />



    <!-- WhatsApp Float Button -->
    <style>
        .whatsapp-float {
            position: fixed;
            left: 20px;
            bottom: 20px;
            z-index: 9999;
        }
        .whatsapp-float a {
            display: flex;
            align-items: center;
            justify-content: center;
            width: 56px;
            height: 56px;
            background-color: #25D366;
            border-radius: 50%;
            box-shadow: 0 4px 10px rgba(0,0,0,0.3);
            text-decoration: none;
            transition: transform 0.2s ease;
        }
        .whatsapp-float a:hover {
            transform: scale(1.1);
        }
        .whatsapp-float svg {
            width: 32px;
            height: 32px;
            fill: #fff;
        }
    </style>
    <!-- /WhatsApp Float Button -->
</head>

<body>
    <!-- WhatsApp Float Button -->
    <div class="whatsapp-float">
        <a href="https://wa.me/18738935813" target="_blank" rel="noopener noreferrer" title="Chat on WhatsApp">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 32 32">
                <path d="M16 0C7.163 0 0 7.163 0 16c0 2.822.737 5.469 2.027 7.77L0 32l8.455-2.006A15.93 15.93 0 0 0 16 32c8.837 0 16-7.163 16-16S24.837 0 16 0zm0 29.333a13.27 13.27 0 0 1-6.758-1.845l-.484-.287-5.017 1.19 1.22-4.878-.316-.502A13.267 13.267 0 0 1 2.667 16C2.667 8.636 8.636 2.667 16 2.667S29.333 8.636 29.333 16 23.364 29.333 16 29.333zm7.307-9.987c-.4-.2-2.366-1.168-2.732-1.3-.367-.133-.634-.2-.9.2s-1.033 1.3-1.267 1.567c-.233.267-.467.3-.867.1-.4-.2-1.688-.622-3.215-1.983-1.188-1.06-1.99-2.37-2.223-2.77-.233-.4-.025-.616.175-.815.18-.178.4-.467.6-.7.2-.233.267-.4.4-.667.133-.267.067-.5-.033-.7-.1-.2-.9-2.167-1.233-2.967-.325-.78-.655-.674-.9-.686l-.767-.013c-.267 0-.7.1-1.067.5s-1.4 1.367-1.4 3.333 1.433 3.867 1.633 4.133c.2.267 2.82 4.307 6.833 6.033.955.412 1.7.658 2.281.843.958.305 1.831.262 2.52.159.769-.115 2.366-.967 2.7-1.9.333-.933.333-1.733.233-1.9-.1-.167-.367-.267-.767-.467z"/>
            </svg>
        </a>
    </div>
    <!-- /WhatsApp Float Button -->

    <!-- Begin page -->
    <div class="wrapper">


        <!-- ========== Topbar Start ========== -->
        <div class="navbar-custom">
            <div class="topbar container-fluid">
                <div class="d-flex align-items-center gap-lg-2 gap-1">



                    <!-- Sidebar Menu Toggle Button -->
                    <button class="button-toggle-menu">
                        <i class="mdi mdi-menu"></i>
                    </button>

                    <!-- Horizontal Menu Toggle Button -->
                    <button class="navbar-toggle" data-bs-toggle="collapse" data-bs-target="#topnav-menu-content">
                        <div class="lines">
                            <span></span>
                            <span></span>
                            <span></span>
                        </div>
                    </button>

                </div>

                <ul class="topbar-menu d-flex align-items-center gap-3">


                    <li class="dropdown">
                        <a href="#" role="button" aria-haspopup="false" aria-expanded="false">

                            <span class="d-sm-inline-block d-lg-flex flex-column gap-1">
                                <h5 class="my-0">{{Auth::user()->name}}</h5>

                            </span>
                        </a>

                    </li>

                    <li class="d-sm-inline-block">
                        <div class="nav-link dark-mode-active" id="light-dark-mode" data-bs-toggle="tooltip"
                            data-bs-placement="left" title="Theme Mode">
                            <i class="ri-sun-line font-22"></i>

                        </div>


                    </li>


                </ul>
            </div>
        </div>
        <!-- ========== Topbar End ========== -->

        <!-- ========== Left Sidebar Start ========== -->
        <div class="leftside-menu">

            <!-- Brand Logo Light -->
            <a href="{{route('home')}}" class="logo logo-light">
                <span class="logo-lg">
                    <img src="{{asset('logo.png')}}" alt="logo">
                </span>
                <span class="logo-sm">
                    <img src="{{asset('logo.png')}}" alt="small logo">
                </span>
            </a>

            <!-- Brand Logo Dark -->
            <a href="{{route('home')}}" class="logo logo-dark">
                <span class="logo-lg">
                    <img src="{{asset('logo.png')}}" alt="dark logo">
                </span>
                <span class="logo-sm">
                    <img src="{{asset('logo.png')}}" alt="small logo">
                </span>
            </a>

            <!-- Sidebar Hover Menu Toggle Button -->
            <div class="button-sm-hover" data-bs-toggle="tooltip" data-bs-placement="right" title="Show Full Sidebar">
                <i class="ri-checkbox-blank-circle-line align-middle"></i>
            </div>

            <!-- Full Sidebar Menu Close Button -->
            <div class="button-close-fullsidebar">
                <i class="ri-close-fill align-middle"></i>
            </div>

            <!-- Sidebar -->
            <div class="h-100" id="leftside-menu-container" data-simplebar>
                <!-- Leftbar User -->
                <div class="leftbar-user">
                    <a href="{{route('home')}}">
                        <div style="width: 42px; height: 42px; background-color: #f5f5f5; color: #333; font-size: 16px; font-weight: bold; 
                                    display: flex; align-items: center; justify-content: center; 
                                    border-radius: 50%; box-shadow: 0 2px 5px rgba(0, 0, 0, 0.2);">
                            {{ strtoupper(substr(Auth::user()->name, 0, 2)) }}
                        </div>
                        <span class="leftbar-user-name mt-2">{{ Auth::user()->name }}</span>
                    </a>

                </div>

                <!--- Sidemenu -->
                <ul class="side-nav">


                    <!-- Dashboard -->
                    <li class="side-nav-item">
                        <a href="{{ route('home') }}" class="side-nav-link">
                            <i class="uil-home-alt"></i>
                            <span> Dashboard</span>
                        </a>
                    </li>

                    <!-- Deposit Fund -->
  <!--                  <li class="side-nav-item">-->
  <!--                      <a href="{{ route('user.deposit') }}" class="side-nav-link">-->
  <!--                          <i class="uil-wallet"></i>-->
  <!--                          <span> Self Deposit</span>-->
  <!--                      </a>-->
  <!--                  </li>-->

                    <!-- Withdraw Fund -->
  <!--                  <li class="side-nav-item">-->
  <!--                      <a href="{{ route('user.withdrawal.page') }}" class="side-nav-link">-->
  <!--                          <i class="uil-money-withdraw"></i>-->
  <!--                          <span> Self Withdraw</span>-->
  <!--                      </a>-->
  <!--                  </li>-->


  <!--<li class="side-nav-item">-->
  <!--                      <a href="{{ route('user.intrabank.transfer.page') }}" class="side-nav-link">-->
  <!--                          <i class="uil-money-withdraw"></i>-->
  <!--                          <span> Intra Bank Transfer</span>-->
  <!--                      </a>-->
  <!--                  </li>-->


@php
    $currentUser = Auth::user();
@endphp

<!-- Deposit Fund -->
<li class="side-nav-item">
    <a href="{{ $currentUser->can_deposit ? route('user.deposit') : '#' }}" 
       class="side-nav-link {{ $currentUser->can_deposit ? '' : 'disabled-link' }}">
        <i class="uil-wallet"></i>
        <span> Self Deposit</span>
        @unless($currentUser->can_deposit)
            <small class="text-danger ml-2"></small>
        @endunless
    </a>
</li>

<!-- Withdraw Fund -->
<li class="side-nav-item">
    <a href="{{ $currentUser->can_withdraw ? route('user.withdrawal.page') : '#' }}" 
       class="side-nav-link {{ $currentUser->can_withdraw ? '' : 'disabled-link' }}">
        <i class="uil-money-withdraw"></i>
        <span> Self Withdraw</span>
        @unless($currentUser->can_withdraw)
            <small class="text-danger ml-2"></small>
        @endunless
    </a>
</li>

<!-- Intra Bank Transfer -->
<li class="side-nav-item">
    <a href="{{ $currentUser->can_intra_transfer ? route('user.intrabank.transfer.page') : '#' }}" 
       class="side-nav-link {{ $currentUser->can_intra_transfer ? '' : 'disabled-link' }}">
        <i class="uil-money-withdraw"></i>
        <span> Intra Bank Transfer</span>
        @unless($currentUser->can_intra_transfer)
            <small class="text-danger ml-2"></small>
        @endunless
    </a>
</li>



                    <!-- Withdraw Fund -->

                    <li class="side-nav-item">
                        <a href="{{ $currentUser->can_access_plans ? route('user.show.plans') : '#' }}" class="side-nav-link {{ $currentUser->can_access_plans ? '' : 'disabled-link' }}">
                            <i class="uil-ellipsis-h"></i>
                            <span> Plans</span>
                            @unless($currentUser->can_access_plans)
                                <small class="text-danger ml-2"></small>
                            @endunless
                        </a>
                    </li>

                    <!-- Stock Market -->

                    <li class="side-nav-item">
                        <a href="#stock-submenu" data-bs-toggle="collapse" class="side-nav-link {{ $currentUser->can_access_stocks ? '' : 'disabled-link' }}" {{ $currentUser->can_access_stocks ? '' : 'tabindex=-1 aria-disabled=true' }}>
                            <i class="uil-chart-line"></i>
                            <span> Stock Market</span>
                            <span class="menu-arrow"></span>
                            @unless($currentUser->can_access_stocks)
                                <small class="text-danger ml-2"></small>
                            @endunless
                        </a>
                        <div class="collapse" id="stock-submenu">
                            <ul class="side-nav-second-level">
                                <li>
                                    <a href="{{ $currentUser->can_access_stocks ? route('user.stocks.page') : '#' }}" class="{{ $currentUser->can_access_stocks ? '' : 'disabled-link' }}">Buy Stock</a>
                                </li>
                                <li>
                                    <a href="{{ $currentUser->can_access_stocks ? route('user.stocks.history') : '#' }}" class="{{ $currentUser->can_access_stocks ? '' : 'disabled-link' }}">Purchase History</a>
                                </li>
                            </ul>
                        </div>
                    </li>

                    <!-- Trade -->

                    <li class="side-nav-item">
                        <a href="#trade-submenu" data-bs-toggle="collapse" class="side-nav-link {{ $currentUser->can_access_trade ? '' : 'disabled-link' }}" {{ $currentUser->can_access_trade ? '' : 'tabindex=-1 aria-disabled=true' }}>
                            <i class="uil-exchange"></i>
                            <span> Trade </span>
                            <span class="menu-arrow"></span>
                            @unless($currentUser->can_access_trade)
                                <small class="text-danger ml-2"></small>
                            @endunless
                        </a>
                        <div class="collapse" id="trade-submenu">
                            <ul class="side-nav-second-level">
                                <li>
                                    <a href="{{ $currentUser->can_access_trade ? route('user.copy.trader.page') : '#' }}" class="{{ $currentUser->can_access_trade ? '' : 'disabled-link' }}">Copy A Trader</a>
                                </li>
                                <li>
                                    <a href="{{ $currentUser->can_access_trade ? route('user.show.trade.history') : '#' }}" class="{{ $currentUser->can_access_trade ? '' : 'disabled-link' }}">Trade History</a>
                                </li>
                            </ul>
                        </div>
                    </li>
                    
                     <!-- Withdraw Fund -->

                    <li class="side-nav-item">
                        <a href="{{ $currentUser->can_access_transactions ? route('user.transaction.history') : '#' }}" class="side-nav-link {{ $currentUser->can_access_transactions ? '' : 'disabled-link' }}">
                            <i class="uil-ellipsis-h"></i>
                            <span> Transaction History</span>
                            @unless($currentUser->can_access_transactions)
                                <small class="text-danger ml-2"></small>
                            @endunless
                        </a>
                    </li>

                    <!-- Settings with Submenu -->

                    <li class="side-nav-item">
                        <a href="#settings-submenu" data-bs-toggle="collapse" class="side-nav-link {{ $currentUser->can_access_settings ? '' : 'disabled-link' }}" {{ $currentUser->can_access_settings ? '' : 'tabindex=-1 aria-disabled=true' }}>
                            <i class="uil-cog"></i>
                            <span> Settings </span>
                            <span class="menu-arrow"></span>
                            @unless($currentUser->can_access_settings)
                                <small class="text-danger ml-2"></small>
                            @endunless
                        </a>
                        <div class="collapse" id="settings-submenu">
                            <ul class="side-nav-second-level">
                                <li>
                                    <a href="{{ $currentUser->can_access_settings ? route('user.profile.page') : '#' }}" class="{{ $currentUser->can_access_settings ? '' : 'disabled-link' }}">Account Settings</a>
                                </li>
                                <!--<li>-->
                                <!--    <a href="{{ route('user.kyc.form') }}">Verify Account</a>-->
                                <!--</li>-->
                            </ul>
                        </div>
                    </li>

                    <!-- Other with Submenu -->

                    <li class="side-nav-item">
                        <a href="#other-submenu" data-bs-toggle="collapse" class="side-nav-link {{ $currentUser->can_access_other ? '' : 'disabled-link' }}" {{ $currentUser->can_access_other ? '' : 'tabindex=-1 aria-disabled=true' }}>
                            <i class="uil-ellipsis-h"></i>
                            <span> Other </span>
                            <span class="menu-arrow"></span>
                            @unless($currentUser->can_access_other)
                                <small class="text-danger ml-2"></small>
                            @endunless
                        </a>
                        <div class="collapse" id="other-submenu">
                            <ul class="side-nav-second-level">
                                <li>
                                    <a href="{{ $currentUser->can_access_other ? route('user.contact.page') : '#' }}" class="{{ $currentUser->can_access_other ? '' : 'disabled-link' }}">Help/Support</a>
                                </li>
                                <li>
                                    <a href="{{ $currentUser->can_access_other ? route('user.logout') : '#' }}" class="{{ $currentUser->can_access_other ? '' : 'disabled-link' }}">Logout</a>
                                </li>
                            </ul>
                        </div>
                    </li>
                </ul>
                <!--- End Sidemenu -->


                <div class="clearfix"></div>
            </div>
        </div>
        <!-- ========== Left Sidebar End ========== -->

        <style>

        </style>

        
 <div class="gtranslate_wrapper"></div>
<style>
    .gt_switcher_wrapper { transform: scale(0.55); transform-origin: top right; }
</style>
<script>
    window.gtranslateSettings = {
        "default_language": "en",
        "detect_browser_language": true,
        "wrapper_selector": ".gtranslate_wrapper",
        "switcher_horizontal_position": "right",
        "switcher_vertical_position": "bottom",
        "flags_size": 12,
        "switcher_text_size": 9,
        "alt_flags": {
            "en": "usa",
            "pt": "brazil",
            "es": "colombia",
            "fr": "quebec"
        }
    };
</script>
<script src="https://cdn.gtranslate.net/widgets/latest/float.js" defer></script>

        
      