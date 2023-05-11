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
    <h1 class="name">
        <span class="name1">BẤT ĐỘNG SẢN</span>
        <span class="name2">CƯ TRÚ HUNGARRY</span>
    </h1>
    <div class="line1">
        <p class="slogan1">Quản trị <span class="slogan1Right">THỊNH VƯỢNG</span></p>
    </div>
    <div class="line2">
        <p class="slogan2">Kiến tạo <span class="slogan2Right">TƯƠNG LAI</span></p>
    </div>
    <div class="button1Pos">
        <button class="button1">
            <p class="textButton">Nhận thông tin</p>
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
    $(document).ready(function() {
        const menu = $('.menu');
        const hiddenList = $('.hide');
        const navLinks = $('nav ul li a');
        const navMenu = $('nav ul');

        // Thêm trình nghe sự kiện click cho menu element
        menu.on('click', function() {
            // Toggle class "hide" trên phần tử ul
            hiddenList.toggleClass('hide');
        });

        // Thêm trình nghe sự kiện click cho mỗi liên kết trong danh sách
        navLinks.on('click', function() {
            hiddenList.addClass('hide'); // Thêm class 'hide' để ẩn danh sách
        });

        $(window).scroll(function() {
            var header = $('.logoCen');
            header.css('backgroundColor', (window.pageYOffset > 0) ? '#111523' : 'transparent');
        });

    });
</script>
