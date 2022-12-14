@extends('layouts.main-vpn')
    @section('header')
    <header class="header">
        <div class="wrapper_head">
            <div class="header_wrapper">
                <div class="header_logo">
                    <a href="/" class="header_logo_link" style="display: flex"><img src="{{asset('assets/img/Logo.png')}}" alt="logo"></a>
                </div>
                <nav class="header_nav" >
                    <ul class="header_list" id="myLinks">
                        <li class="header_item">
                            <a href="#" class="header_link">About</a>
                        </li>
                        <li class="header_item">
                            <a href="#" class="header_link">Features</a>
                        </li>
                        <li class="header_item">
                            <a href="#" class="header_link">Pricing</a>
                        </li>
                        <li class="header_item">
                            <a href="#" class="header_link">Testimonials</a>
                        </li>
                        <li class="header_item">
                            <a href="#" class="header_link">Help</a>
                        </li>
                        <li>
                            <a href="#" class="header_link li_hidden">Sign in</a>
                        </li>
                        <li>
                            <a href="#" class="header_link li_hidden">Sign up</a>
                        </li>
                    </ul>
                    <div class="burger_menu">
                        <a href="javascript:void(0);" class="icon" onclick="myFunction()">
                            <i id="changeIcon" class="fa fa-bars" ></i>
                        </a>
                    </div>

                </nav>
                <div class="header_right" >
                    <a class="sign_in" href="#signin">Sign in</a>
<!--                    <button class="header_button">-->
<!--                        <span class="button_inner">-->
<!--                            <a href="#sign_up" class="header_link_button">Sign up</a>-->
<!--                        </span>-->
<!--                    </button>-->
                    <a href="#" class="header_button">
                        <span class="header_link_button">
                        Sign up
                        </span>
                    </a>
                </div>
            </div>
        </div>
    </header>
    @endsection
@section('content')
    <div class="main" onclick="hiddenHeader()">
    <div class="wrapper">
        <section class="info">
            <div class="container">
                <div class="info_left">
                    <div class="main_title">
                        <div class="first_title">
                            <h1>
                                Want anything to be <br />
                                easy with <span>LaslesVPN.</span>
                            </h1>
                        </div>
                        <p class="second_title">Provide a network for all your needs with ease and fun using
                            <span>LaslesVPN</span> discover interesting features from us.</p>
                    </div>
                    <div class="info_btn_set">
                        <a href="#" class="info_btn">
                        <span class="header_link_button">
                        Get started
                        </span>
                        </a>
                    </div>

                </div>

                <div class="info_right">
                    <img src="{{asset('assets/img/Illustration-1.png')}}" alt="illustration">
                </div>
            </div>
        </section>
        <section id="stats" class="stats">
            <div class="container">
                <div class="content">
                    <div class="flex_block">
                        <img src="{{'assets/img/user.png'}}" alt="user icon">
                        <div class="block">
                            <p class="main_title"><b>90+</b></p>
                            <p class="second_title">Users</p>
                        </div>
                    </div>
                    <div class="border"></div>
                    <div class="flex_block">
                    <img src="{{'assets/img/location.png'}}" alt="user icon">
                            <div class="block">
                                <p class="main_title"><b>30+</b></p>
                                <p class="second_title">Locations</p>
                            </div>
                    </div>
                    <div class="border"></div>
                    <div class="flex_block">
                        <img src="{{'assets/img/Server.png'}}" alt="user icon">
                            <div class="block">
                                <p class="main_title"><b>50+</b></p>
                                <p class="second_title">Servers</p>
                            </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="features">
            <div class="container">
                <div class="features_left">
                    <img src="{{'assets/img/Illustration-2.png'}}" alt="illustration">
                </div>
                <div class="features_right">
                    <h2 class="main_title"> We Provide Many <br/>
                        Features You Can Use</h2>
                    <p class="second_title">
                        You can explore the features that we provide with fun and have their own functions each feature.
                    </p>
                    <div class="features_center_list">
                        <ul class="features_list">
                            <li>Powerfull online protection.</li>
                            <li>Internet without borders.</li>
                            <li>Supercharged VPN</li>
                            <li>No specific time limits.</li>
                        </ul>
                    </div>

                </div>
            </div>
        </section>
        <section class="subscription">
            <div class="container">
                <div class="sub_header">
                <h2 class="main_title">Choose Your Plan</h2>
                <p class="second_title">
                    Let's choose the package that is best for you and explore it happily and cheerfully.
                </p>
                </div>
            <div class="new">
                <div class="sales">
                    <div>
                        <img src="{{'assets/img/Free.png'}}">
                    </div>
                    <h3>FreePlan</h3>
                    <div class="sales_plan">
                        <ul>
                            <li>Unlimited Bandwitch</li>
                            <li>Encrypted Connection</li>
                            <li>No Traffic Logs</li>
                            <li>Works on All Devices</li>
                        </ul>
                    </div>
                    <div class="sale_bot">
                        <h4 class="price">Free</h4>
                        <!--                    <button class="sale_button">-->
                        <!--                        <span class="button_inner_sale">-->
                        <!--                            <a href="#" class="sale_link_button">Select</a>-->
                        <!--                        </span>-->
                        <!--                    </button>-->
                        <a href="#" class="test_btn">
                        <span class="sale_link_button">
                        Select
                        </span>
                        </a>
                    </div>
                </div>
                <div class="sales">
                    <div>
                        <img src="{{asset('assets/img/Standard.png')}}">
                    </div>
                    <h3>FreePlan</h3>
                    <div class="sales_plan">
                        <ul>
                            <li>Unlimited Bandwitch</li>
                            <li>Encrypted Connection</li>
                            <li>Yes Traffic Logs</li>
                            <li>Works on All Devices</li>
                            <li>Connect Anywhere</li>
                        </ul>
                    </div>
                    <div class="sale_bot">
                        <h4 class="price test">$9 <span>/ mo</span></h4>
                        <a href="#" class="test_btn">
                        <span class="sale_link_button">
                        Select
                        </span>
                        </a>
                    </div>
                </div>
                <div class="sales">
                    <div>
                        <img src="{{asset('assets/img/Premium.png')}}">
                    </div>
                    <h3>FreePlan</h3>
                    <div class="sales_plan">
                        <ul>
                            <li>Unlimited Bandwitch</li>
                            <li>Encrypted Connection</li>
                            <li>Yes Traffic Logs</li>
                            <li>Works on All Devices</li>
                            <li>Connect Anywhere</li>
                            <li>Get New Features</li>
                        </ul>
                    </div>
                    <div class="sale_bot">
                        <h4 class="price">$12<span>/ mo</span></h4>
                        <a href="#" class="test_btn">
                        <span class="sale_link_button">
                        Select
                        </span>
                        </a>
                    </div>
                </div>
            </div>

            </div>
        </section>
        <section class="map">
            <div class="header_map">
                <div class="main_block">
                <h2>Huge Global Network of Fast VPN</h2>
                </div>
                <div class="second_block">
                    <p>See <span>LaslesVPN</span> everywhere to make it easier for you when you move locations.</p>
                </div>
            </div>
            <div class="map_img">
                <img src="{{asset('assets/img/Huge%20Global.png')}}">
            </div>
            <div class="company">
                <div class="company_img">
                    <img class="fix_netflix" src="{{asset('assets/img/Mask%20Group.png')}}">
                </div>
                <div class="company_img">
                    <img src="{{asset('assets/img/Mask%20Group%20(1).png')}}">
                </div>
                <div class="company_img">
                    <img class="fix" src="{{asset('assets/img/Mask%20Group%20(2).png')}}">
                </div>
                <div class="company_img">
                    <img src="{{asset('assets/img/Mask%20Group%20(3).png')}}">
                </div>
                <div class="company_img">
                    <img src="{{asset('assets/img/Mask%20Group%20(4).png')}}">
                </div>

            </div>
        </section>
        <section class="users">
            <div class="users_main">
                <div class="users_header">
                    <h1 class="main_title">Trusted by Thousands of Happy Customer</h1>
                    <p class="second_title">These are the stories of our customers who have joined us with great pleasure when using this crazy feature.</p>
                </div>
                <div  class="test owl-carousel" id="js_slider">

                </div>
                <div class="paginate">
                    <div class="dots">
                        <div class="dot"></div>
                        <div class="dot"></div>
                        <div class="dot"></div>
                        <div class="dot"></div>
                        <div class="dot"></div>
                    </div>
                    <div class="arrows">
                        <div class="arrow_left">
                            <img src="{{asset('assets/img/eva_arrow-back-fill.png')}}">
                        </div>
                        <div class="arrow_right">
                            <img src="{{asset('assets/img/arrow.png')}}">
                        </div>
                    </div>
                </div>
            </div>

        </section>
        <div class="follow">
            <div class="follow_left">
                <h2 class="main_title">Subscribe Now for Get Special Features!</h2>
                <p class="second_title">Let's subscribe with us and find the fun.</p>
            </div>
            <div class="follow_right"></div>
            <div class="follow_right">
                <a href="#" class="follow_btn">
                        <span class="follow_link_button">
                        Subscribe Now
                        </span>
                </a>
            </div>
        </div>
    </div>
        @endsection
        @section('footer')
        <footer class="footer">
            <div class="container">
                <div class="left_footer">
                        <div class="footer_logo">
                            <a href="#"><img src="{{asset('assets/img/Logo.png')}}" alt="logo" /></a>
                            <p><span>LaslesVPN</span> is a private virtual network that has unique features and has high security.</p>
                        </div>
                        <div class="icons">
                            <a class="icon" href="#"><img src="{{asset('assets/img/Facebook.png')}}" alt="facebook"></a>
                        </div>
                        <div class="icons">
                            <a class="icon" href="#"><img src="{{asset('assets/img/Twitter.png')}}" alt="twitter"></a>
                        </div>
                        <div class="icons">
                            <a class="icon" href="#"><img src="{{asset('assets/img/Instagram.png')}}" alt="instagram"></a>
                        </div>
                        <div>
                            <p class="last">??2020LaslesVPN</p>
                        </div>
                </div>
                <div class="right_footer">
                    <div class="test_footer">
                        <h4>Product</h4>
                        <ul>
                            <li>
                                <a href="#">Download</a>
                            </li>
                            <li>
                                <a href="#">Pricing</a>
                            </li>
                            <li>
                                <a href="#">Locations</a>
                            </li>
                            <li>
                                <a href="#">Server</a>
                            </li>
                            <li>
                                <a href="#">Countries</a>
                            </li>
                            <li>
                                <a href="#">Blog</a>
                            </li>
                        </ul>
                    </div>
                    <div class="test_footer">
                        <h4>Engage</h4>
                        <ul>
                            <li>
                                <a href="#">LaslesVPN ?</a>
                            </li>
                            <li>
                                <a href="#">FAQ</a>
                            </li>
                            <li>
                                <a href="#">Tutorials</a>
                            </li>
                            <li>
                                <a href="#">About Us</a>
                            </li>
                            <li>
                                <a href="#">Privacy Policy</a>
                            </li>
                            <li>
                                <a href="#">Terms of Service</a>
                            </li>
                        </ul>
                    </div>
                    <div class="test_footer">
                        <h4 class="">Earn Money</h4>

                        <ul>
                            <li>
                                <a href="#">Affiliate</a>
                            </li>
                            <li>
                                <a href="#">Become Partner</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </footer>
        <script src="https://code.jquery.com/jquery-3.6.1.min.js"></script>
        <script src="{{asset('assets/js/owl.carousel.min.js')}}"></script>
        <script src="{{asset('assets/js/script.js')}}"></script>
</html>
@endsection
