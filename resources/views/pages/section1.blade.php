<div class="section1">
    <div class="bannerSec1">
        <img src="{{asset('images/bannerSec1.png')}}" class="backGround1">
    </div>
    <div class="clearfix logoCen justify-content-center fixed-top">
        <img src="{{asset('images/CenLogo.png')}}" class="cenlogo">
        <img src="{{asset('images/menuIcon.svg')}}" class="menu"><br>
    </div>
    <nav>
        <ul class="iconpc">
            <li class="contact">
                <a href="#">
                    <img class="iconfb" src="{{asset('images/fb.png')}}" alt="fb link">
                </a>
            </li>
            <li class="contact">
                <a href="#">
                    <img class="icontiktok" src="{{asset('images/tiktok.png')}}">
                </a>
            </li>
            <li class="contact">
                <a href="#">
                    <img class="iconzalo" src="{{asset('images/zalo.png')}}">
                </a>
            </li>
        </ul>
    </nav>
    <nav>
        <ul class="hide iconmb">
            <li class="contact">
                <a href="#">
                    <img class="iconfb" src="{{asset('images/fb.png')}}" alt="fb link">
                </a>
            </li>
            <li class="contact">
                <a href="#">
                    <img class="icontiktok" src="{{asset('images/tiktok.png')}}">
                </a>
            </li>
            <li class="contact">
                <a href="#">
                    <img class="iconzalo" src="{{asset('images/zalo.png')}}">
                </a>
            </li>
        </ul>
    </nav>
    <div class="name">
        <img src="{{asset('images/introName.png')}}" class="introName">
    </div>
    <div class="line1">
        <img src="{{asset('images/slogan1.png')}}" class="slogan1">
    </div>
    <div class="line2">
        <img src="{{asset('images/slogan2.png')}}" class="slogan2">
    </div>
    <div class="sloganmb">
        <div class="namemb">
            <img src="{{asset('images/introNameMb.png')}}" class="introNameMb">
        </div>
        <div class="line12Mb">
            <img src="{{asset('images/slogan12Mb.png')}}" class="slogan12mb">
        </div>
    </div>
    <div class="button1Pos">
        <button class="button1">
            <img src="{{asset('images/button.png')}}" class="buttonIMG">
        </button>
    </div>
    <div>
        <a href="#" class="phone">
            <img class="phoneNumber" src="{{asset('images/phoneNumber.png')}}">
            <img class="phoneIcon" src="{{asset('images/phoneIcon.png')}}">
        </a>
    </div>
</div>

<script>
    $(document).ready(function () {
        const menu = $('.menu');
        const hiddenList = $('.hide');
        const navLinks = $('nav ul li a');
        const navMenu = $('nav ul');

        // Thêm trình nghe sự kiện click cho menu element
        menu.on('click', function () {
            // Toggle class "hide" trên phần tử ul
            hiddenList.toggleClass('hide');
        });

        // Thêm trình nghe sự kiện click cho mỗi liên kết trong danh sách
        navLinks.on('click', function () {
            hiddenList.addClass('hide'); // Thêm class 'hide' để ẩn danh sách
        });

        $(window).scroll(function () {
            var header = $('.logoCen');
            header.css('backgroundColor', (window.pageYOffset > 0) ? '#111523' : 'transparent');
        });
        // $(window).scroll(function () {
        //     var header = $('.logoCen');
        //     var scrollPosition = $(window).scrollTop();
        // });

    });
</script>
