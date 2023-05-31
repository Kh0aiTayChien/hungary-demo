<div class="section1" id=" ">
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
                <a href="https://www.facebook.com/profile.php?id=100089937085400" target="_blank">
                    <img class="iconfb" src="{{asset('images/fb.png')}}" alt="fb link">
                </a>
            </li>
            <li class="contact">
                <a href="https://www.tiktok.com/@cen_global.official?_t=8bo75BiH9DV&_r=1" target="_blank">
                    <img class="icontiktok" src="{{asset('images/tiktokicon.svg')}}">
                </a>
            </li>
            <li class="contact">
                <a href="https://zalo.me/0965691688" target="_blank">
                    <img class="iconzalo" src="{{asset('images/zaloicon.svg')}}">
                </a>
            </li>
            <li class="contact">
                <a href="# ">
                    <img class="iconup" src="{{asset('images/buttonUp.svg')}}">
                </a>
            </li>
        </ul>
    </nav>
    <nav>
        <ul class="hide iconmb">
            <li class="contact linetop">
                <a href="#sec2" class="linktext"><p>VỀ BĐS CƯ TRÚ</p></a>
            </li>
            <li class="contact linemenu">
                <a href="#sec3" class="linktext"><p>VỀ CHƯƠNG TRÌNH</p></a>
            </li>
            <li class="contact linemenu">
                <a href="#sec5" class="linktext"><p>TỔNG QUAN BĐS HUNGARY</p></a>
            </li>
            <li class="contact linemenu">
                <a href="#sec6" class="linktext"><p>LỢI ÍCH VÀ QUYỀN LỢI</p></a>
            </li>
            <li class="contact linemenu">
                <a href="#sec9" class="linktext"><p>ĐIỀU KIỆN VÀ QUY TRÌNH</p></a>
            </li>
            <li class="contact linemenu">
                <a href="#addInformationmb" class="linktext"><p>LIÊN HỆ</p></a>
            </li>
        </ul>
    </nav>
    <div class="name">
        <img src="{{asset('images/introName.png')}}" class="introName animate__animated animate__slideInDown">
    </div>
    <div class="line1">
        <img src="{{asset('images/slogan1.png')}}" class="slogan1 animate__animated animate__slideInDown">
    </div>
    <div class="line2">
        <img src="{{asset('images/slogan2.png')}}" class="slogan2 animate__animated animate__slideInDown">
    </div>
    <div class="sloganmb">
        <div class="namemb">
            <img src="{{asset('images/introNameMb.png')}}" class="introNameMb">
        </div>
        <div class="line12Mb">
            <img src="{{asset('images/slogan12Mb.png')}}" class="slogan12mb">
        </div>
    </div>
    <div class="button1Pospc">
        <button class="button1 pulse" id="myButton" onclick="scrollToElement('addInformationpc')">
            <img src="{{asset('images/Group 401.svg')}}" class="buttonIMG ani_headShake aniUtil_onMouse aniUtil_active aniUtil_onMouseRepeat">
{{--            <p class="buttontest">NHẬN THÔNG TIN</p>--}}
        </button>
    </div>
    <div class="button1Posmb">
        <button class="button1" id="myButton" onclick="scrollToElement('addInformationmb')">
{{--            <img src="{{asset('images/Group 401.svg')}}" class="buttonIMG">--}}
            <p class="buttontest">NHẬN THÔNG TIN</p>
        </button>
    </div>

    <div>
        <a href="https://www.facebook.com/profile.php?id=100089937085400" target="_blank">
            <img class="iconfb iconmb" src="{{asset('images/fbicon.svg')}}" alt="fb link">
        </a>
        <a href="https://www.tiktok.com/@cen_global.official?_t=8bo75BiH9DV&_r=1" target="_blank">
            <img class="icontiktok iconmb" src="{{asset('images/tiktokicon.svg')}}">
        </a>
        <a href="https://zalo.me/0965691688" target="_blank">
            <img class="iconzalo iconmb" src="{{asset('images/zaloicon.svg')}}">
        </a>
        <a href="tel:0965691688" class="phone contactIcon">
            <img class="phoneNumber" src="{{asset('images/phoneNumber.svg')}}">
            {{--            <button class="phoneNumber" onclick="window.location.href='tel:0353973355'"><p class="phoneText">--}}
            {{--                    0353973355</p></button>--}}
            <img class="phoneIcon" src="{{asset('images/phoneIcon.svg')}}">
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

        const windowHeight = () => {
            const $doc = $(':root'); // Chọn phần tử gốc của tài liệu
            $doc.css('--window-height', $(window).innerHeight() + 'px');
        };

        $(window).on('resize', windowHeight);
        windowHeight();

        // $(window).scroll(function () {
        //     var header = $('.logoCen');
        //     var scrollPosition = $(window).scrollTop();
        // });

    });

    function scrollToElement(addInformationpc) {
        var element = $("#" + addInformationpc);
        if (element.length) {
            $('html, body').animate({
                scrollTop: element.offset().top
            }, 200);
        }
    }

    function scrollToSection(addInformationmb) {
        var section = $("#" + addInformationmb);
        if (section.length) {
            $('html, body').animate({
                scrollTop: section.offset().top
            }, 200);
        }
    }
</script>
