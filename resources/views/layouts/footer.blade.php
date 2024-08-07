<div id="myBtnbtt"><i style="color: white" class="fas fa-angle-up"></i></div>
<script>

    window.onscroll = function() {scrollFunction()};

    function scrollFunction() {
        if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
            document.getElementById("myBtnbtt").style.display = "flex";
        } else {
            document.getElementById("myBtnbtt").style.display = "none";
        }
    }
</script>
@php
    $public_data = \App\Models\PublicData::first();
@endphp
<footer class="st-site-footer st-sticky-footer st-dynamic-bg" data-src="{{secure_asset('assets/img/footer-bg.png')}}">
    <div class="st-main-footer">
        <div class="container">
            <div class="row">
                <div class="col-lg-3">
                    <div class="st-footer-widget">
                        <div class="st-text-field">
                            <img src="{{secure_asset('assets/img/logo.png')}}" width="80px" alt="" class="st-footer-logo">
                            <div class="st-height-b25 st-height-lg-b25"></div>
                            <div class="st-height-b25 st-height-lg-b25"></div>
                            <ul class="st-social-btn st-style1 st-mp0">
                                <li><a href="{{$public_data->facebook}}"><i class="fab fa-facebook-square"></i></a></li>
                                <li><a href="{{$public_data->linkedin}}"><i class="fab fa-linkedin"></i></a></li>
                                <li><a href="{{$public_data->instagram}}"><i class="fab fa-instagram-square"></i></a></li>
                                <li><a href="{{$public_data->twitter}}"><i class="fab fa-twitter-square"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="st-footer-widget">
                        <h2 class="st-footer-widget-title">Useful Information</h2>
                        <ul class="st-footer-widget-nav st-mp0">
                            <li><a href="{{route('website.faq')}}"><i class="fas fa-chevron-right"></i>FAQs</a></li>
                            <li><a href="{{route('website.tipsandtricks')}}"><i class="fas fa-chevron-right"></i>Tips and Tricks</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="st-footer-widget">
                        <h2 class="st-footer-widget-title">Departments</h2>
                        <ul class="st-footer-widget-nav st-mp0">
                            <li><a href="comingsoon.html"><i class="fas fa-chevron-right"></i>Department</a></li>
                            <li><a href="comingsoon.html"><i class="fas fa-chevron-right"></i>Department</a></li>
                            <li><a href="comingsoon.html"><i class="fas fa-chevron-right"></i>Department</a></li>
                            <li><a href="comingsoon.html"><i class="fas fa-chevron-right"></i>Department</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="st-footer-widget">
                        <h2 class="st-footer-widget-title">Contacts</h2>
                        <ul class="st-footer-contact-list st-mp0">
                            <li><span class="st-footer-contact-title">Email:</span> <a onmouseover="this.style.color='blue'" onmouseout="this.style.color='black'" href="mailto:support@example.com">{{$public_data->email}}</a></li>
                            <li><span class="st-footer-contact-title">Phone:</span> <a onmouseover="this.style.color='blue'" onmouseout="this.style.color='black'" href="tel:{{$public_data->phone}}">{{$public_data->phone}}</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="st-copyright-wrap">
        <div class="container">
            <div class="st-copyright-in">
                <div class="st-left-copyright">
                    <div class="st-copyright-text">Copyrights © Robotech</div>
                </div>
            </div>
        </div>
    </div>
</footer>


<script src="{{secure_asset('assets/js/vendor/modernizr-3.5.0.min.js')}}"></script>
<script src="{{secure_asset('assets/js/vendor/jquery-1.12.4.min.js')}}"></script>
<script src="{{secure_asset('assets/js/isotope.pkg.min.js')}}"></script>
<script src="{{secure_asset('assets/js/jquery.slick.min.js')}}"></script>
<script src="{{secure_asset('assets/js/counter.min.js')}}"></script>
<script src="{{secure_asset('assets/js/lightgallery.min.js')}}"></script>
<script src="{{secure_asset('assets/js/ripples.min.js')}}"></script>
<script src="{{secure_asset('assets/js/wow.min.js')}}"></script>
<script src="{{secure_asset('assets/js/jQueryUi.js')}}"></script>
<script src="{{secure_asset('assets/js/textRotate.min.js')}}"></script>
<script src="{{secure_asset('assets/js/select2.min.js')}}"></script>
<script src="{{secure_asset('assets/js/main.js')}}"></script>
<script src="{{secure_asset('dist/js/jquery-validate/jquery.validate.js')}}"></script>
<script src="{{secure_asset('dist/js/jquery-validate/jquery.validate.min.js')}}"></script>
<script src="{{secure_asset('dist/js/jquery-validate/additional-methods.js')}}"></script>
<script src="{{secure_asset('dist/js/jquery-validate/additional-methods.min.js')}}"></script>
@yield('scripts')
</body>

</html>
