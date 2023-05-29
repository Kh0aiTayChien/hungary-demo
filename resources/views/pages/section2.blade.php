<style>


    @font-face {
        font-family: 'Mulish-SemiBold';
        src: url({{asset('fonts/Mulish-SemiBold.ttf')}});
    }

    @font-face {
        font-family: 'Mulish-ExtraBold';
        src: url({{asset('fonts/Mulish-ExtraBold.ttf')}});
    }

    .mulish-bold {
        font-family: 'Mulish-ExtraBold', sans-serif;
        font-weight: bold;
    }

    .start-30 {
        margin-left: 25%
    }

    .btn:focus {
        box-shadow: none !important;
    }

    .text-justify {
        text-align: justify
    }

    .rectangle {
        width: 110px;
        height: 4.038px;
        background-color: #bc202e;
    }

    .header-rectangle {
        width: 110px;
        height: 5.038px;
        background-color: #bc202e;
    }

    .grey {
        background-color: #404041;
    }

    .text-red {
        color: #bc202e;
    }

    .text-grey {
        color: #D0D2D3;
    }

    .side-img {
        max-width: 100%;
        max-height: 100%;
        object-fit: contain;
    }

    .number {
        font-size: 1rem;
    }

    .content {
        font-family: 'Mulish-SemiBold', sans-serif;
    }

    .fade-out {
        opacity: 0;
        transition: opacity 0.25s ease;
    }

    .fade-in {
        opacity: 0;
        transition: opacity 0.5s ease;
    }

    .next-img {
        width: 200%;
        height: 80%;
        margin: 25% 0 0 2%;
        opacity: 50%;
    }

    @media screen and (max-width: 1800px) {
        .next-img {
            width: 200%;
            height: 70%;
            margin: 45% 0 0 0
        }
    }

    @media screen and (max-width: 1600px) {
        .next-img {
            width: 200%;
            height: 65%;
            margin: 60% 0 0 0
        }
    }

    @media screen and (max-width: 1400px) {
        .next-img {
            width: 200%;
            height: 40%;
            margin: 13rem 0 0 0
        }
    }

    @media screen and (max-width: 1200px) {
        .next-img {
            width: 200%;
            height: 40%;
            margin: 13rem 0 0 0
        }

        .side_content {
            display: none !important;
        }

    }

    @media screen and (min-width: 1200px) {
        .section_2_mobile {
            display: none !important;
        }
    }

    @media screen and (max-width: 450px) {
        .next-img {
            width: 200%;
            height: 80%;
            margin: 1rem 0 0 0;
            opacity: 50%;
        }
    }
    @media screen and (min-width: 450px) {
        .next-img {
            width: 150%;
            height: 70%;
            margin: 40% 0 0 0;
            opacity: 50%;
        }
    }

    .section_2 {
        height: 100%;
        width: 105vw;
        background-image: url('{{asset('images/background_sec2.png')}}');
        background-repeat: no-repeat;
        background-position: center;
        -webkit-background-size: cover;
        -moz-background-size: cover;
        -o-background-size: cover;
        background-size: cover;
        /*display: flex;*/
        /*align-items: stretch;*/
        overflow-y: hidden;
        overflow-x: hidden;
        /*margin: 0;*/
        /*padding: 0;*/
    }

    .section_2_mobile {
        width: 100vw;
        background-image: url('{{asset('images/background_sec2.png')}}');
        background-repeat: no-repeat;
        background-position: center;
        background-size: cover;
        overflow-x: hidden;
    }

    .sp2-height {
        height: 15rem;
    }

    .font-15 {
        font-size: 14px;
    }

    .sp2-height-m {
        height: 18rem;
    }
    .padding-sec2{
        padding: 5% 0 0 14.6%
    }
    .img-sec2{
        width: 80%
    }
    .rectangle-style-s2{
        width: 12%; font-size: 25px;  font-family: 'Mulish-SemiBold', sans-serif;  top: 79%;
        left: 14.5%;
    }
    @media screen and (max-width: 1600px) {
        .padding-sec2 {
            padding: 5% 0 0 5.6%
        }
        .img-sec2{
            width: 60%
        }
        .rectangle-style-s2{
            width: 12%; font-size: 25px;  font-family: 'Mulish-SemiBold', sans-serif;  top: 79%;
            left: 6%;
        }
    }
    .fb-arrow-right {
        background-image: url(https://static.xx.fbcdn.net/rsrc.php/v3/yQ/r/fxdCboHHQwb.png);
        background-position: -108px -26px;
        background-size: auto;
        width: 24px !important;
        height: 24px !important;
        background-repeat: no-repeat;
        display: inline-block;
        transform: translate(-50%, -29%);
    }
    .fb-arrow-left {
        background-image: url(https://static.xx.fbcdn.net/rsrc.php/v3/yQ/r/fxdCboHHQwb.png);
        background-position: -58px -26px;
        background-size: auto;
        width: 24px;
        height: 24px;
        background-repeat: no-repeat;
        display: inline-block;
        transform: translate(-50%, -29%);
    }

    .circle-fb {
        scale: 120%;
        width: 24px;
        height: 24px;
        border-radius: 50%;
        background-color: rgba(255, 255, 255, 0.5);
        box-shadow: 0 0 10px rgba(255, 255, 255, 0.5);
        opacity: 0.7;
    }
    .circle-fb-mb{
        scale: 120%;
        width: 24px;
        height: 24px;
        border-radius: 50%;
        background-color: rgba(255, 255, 255, 0.5);
        box-shadow: 0 0 10px rgba(255, 255, 255, 0.5);
        opacity: 0.7;
    }

    .circle-fb:hover {
        opacity: 1;
        scale: 130%;
    }

    .rectangle-sec-2:hover{
        cursor: pointer;
    }

</style>
<div class="section_2 position-relative row padding-sec2">
    <div class="side_content col-6 h-100 ">
        <img src="{{asset('images/question.svg')}}" alt="" class="img-fluid img-sec2" style="">
        <div class=" content first_content">
            <div class=" text-danger h5 header-1 mulish-bold" style="margin-top: 5%;">
                DẠNG ĐỊNH CƯ ƯU VIỆT NHẤT
            </div>
            <div class="header-rectangle sp2-height" style="width: 40%"></div>
            <div class="text_content_1 text-justify sp2-height mt-2">
                Vượt trên các dạng định cư ĐOÀN TỤ - KỸ NĂNG - DU HỌC - DOANH NHÂN (ĐẦU TƯ) đều có những điểm khó khăn
                nhất
                định. Và việc làm thẻ cư trú kèm mua BDS đang là ƯU VIỆT NHẤT.
                <br><br>
                Thủ tục dễ dàng nhất - Chi phí đăng ký và duy trì thẻ hợp lý - Con đường rẻ hơn để vào Châu Âu so với
                các
                chương trình/ đất nước khác.
                Hungary có mức chi tiêu rẻ và người dân bản địa thân thiện với người nhập cư.
            </div>
        </div>

        <div class=" content d-none">
            <div class=" text-danger h5 header-2 mulish-bold" style="margin-top: 5%;">
                BẢO VỆ NHÀ ĐẦU TƯ - TẠM TRÚ TRƯỚC BIẾN ĐỘNG
            </div>
            <div class="header-rectangle" style="width: 70%"></div>
            <div class="text_content_2 text-justify sp2-height mt-2">
                Các hoạt động đầu cơ, thổi giá, thị trường bất động sản trong nước đã chạm đỉnh và sẽ khó xuất hiện
                những bước nhảy vọt trong thời gian sắp tới. Sự thiếu uy tín của nhiều chủ đầu tư lại càng
                đẩy giới đầu tư vào trạng thái hoang mang, phải “thắt dây an toàn”.
                <br><br>
                Nhà đầu tư cần 1 giải pháp tối ưu hơn:
                Không chịu tác động từ những thách thức kinh tế tại Việt Nam;
                Đảm bảo khả năng tích lũy tài sản và chắc chắn khai thác sinh lời.
                Nơi trú ẩn để trở lại vào một ngày không xa.
            </div>
        </div>

        <div class=" content d-none">
            <div class=" text-danger h5 header-3 mulish-bold " style="margin-top: 5%;">
                MÓN QUÀ ƯU GIÁ TRỊ - PHƯƠNG ÁN B - CỦA ĐỂ DÀNH
            </div>
            <div class="header-rectangle" style="width: 75%"></div>
            <div class="text_content_3 text-justify sp2-height  mt-2">
                Một món quà tinh thần mang ý nghĩa sâu sắc khi giúp thế hệ mai sau
                được tiếp cận với nền văn minh hiện đại, được tiếp thu những tư tưởng tân tiến,
                xu hướng ngày càng nhiều gia đình Việt Nam tạo điều kiện cho con em học tập và sinh sống ở nước ngoài.
                <br><br>
                Hungary là một trong những nước có cộng đồng người Việt lớn nhất Châu Âu.
                Nơi người dân bản địa hòa đồng với người nhập cư.
            </div>
        </div>

        <div class=" content d-none">
            <div class=" text-danger h5 header-4 mulish-bold" style="margin-top: 5%;">
                DU LỊCH MIỄN THỊ THỰC - TỰ DO KHÁM PHÁ
            </div>
            <div class="header-rectangle" style="width: 65%"></div>
            <div class="text_content_4 text-justify mt-2">
                Người thành công trong xã hội đều mong muốn đạt được mục tiêu: mang lại
                cho gia đình mình cơ hội di chuyển tự do khắp thế giới,
                đặc biệt là ở khu vực Châu Âu.
                <br><br>
                Bước đầu hòa nhập với cuộc sống và học tập tại nước ngoài để thành công dân toàn cầu tương lai.
                Du lịch tự do/ du lịch y tế/ mua sắm cao cấp nhất: khả năng đi lại
                giữa các quốc gia phát triển mà không cần xin Visa chắc chắn là một tài sản vô giá đối với bất cứ ai.
            </div>
        </div>

        <div class="rectangle-dot row mt-5 gx-1 position-absolute rectangle-style-s2 "
             style="">
            <div class="col-3 rectangle-sec-2" id="1">
                <div class="text-center number fw-bold  text-red first_text mulish-bold">01</div>
                <div class="rectangle w-100 first_rectangle"></div>
            </div>
            <div class="col-3 rectangle-sec-2" id="2">
                <div class="text-center number fw-bold text-grey mulish-bold">02</div>
                <div class="rectangle grey w-100"></div>
            </div>
            <div class="col-3 rectangle-sec-2" id="3">
                <div class="text-center number fw-bold text-grey mulish-bold">03</div>
                <div class="rectangle grey w-100"></div>
            </div>
            <div class="col-3 rectangle-sec-2" id="4">
                <div class="text-center number fw-bold text-grey mulish-bold">04</div>
                <div class="rectangle  grey w-100"></div>
            </div>
        </div>
    </div>
    <div class="side_content col-6 row" style="padding: 0 0 5% 2% ;position: relative">
        <img src="{{asset('images/pic_1.png')}}" alt="" class="img-fluid img-pc-sec-2 side-img col-8 pic_1" id="1">
        <img src="{{asset('images/pic_2.png')}}" alt="" class="img-fluid img-pc-sec-2 side-img col-8 d-none" id="2">
        <img src="{{asset('images/pic_3.png')}}" alt="" class="img-fluid img-pc-sec-2 side-img col-8 d-none" id="3">
        <img src="{{asset('images/pic_4.png')}}" alt="" class="img-fluid img-pc-sec-2 side-img col-8 d-none" id="4">

        <div class="col-4 position-relative next_img_content">
            <img src="{{asset('images/pic_2.png')}}" alt="" class="next-img first_img ">
            <img src="{{asset('images/pic_3.png')}}" alt="" class="next-img  d-none">
            <img src="{{asset('images/pic_4.png')}}" alt="" class="next-img d-none">
            <img src="{{asset('images/pic_1.png')}}" alt="" class="next-img  d-none">

            <button class="btn btn-outline position-absolute top-50 start-30 translate-middle next circle-fb relative ">
                <div class="fb-arrow-right absolute"></div>
            </button>
        </div>
    </div>
</div>
<div class=" section_2_mobile col-12" style="width: 100% " id="sec2">
    <img src="{{asset('images/question_mobile.svg')}}" alt="" class="img-fluid  pt-4 ps-4 pe-4 ">
    <div class="d-flex justify-content-center pt-3 col-12">

        <div class="col-2 me-2 position-relative next_img_content overflow-hidden d-flex justify-item-center">
            <img src="{{asset('images/sec2/s2pic4.png')}}" alt="" style=""
                 class="next-img first_img ">
            <img src="{{asset('images/sec2/s2pic1.png')}}" alt="" style=""
                 class="next-img  d-none">
            <img src="{{asset('images/sec2/s2pic2.png')}}" alt="" style=""
                 class="next-img d-none">
            <img src="{{asset('images/sec2/s2pic4.png')}}" alt="" style=""
                 class="next-img  d-none last_img">
            <button class="btn btn-outline position-absolute top-50  translate-middle prev relative circle-fb-mb" style="margin-left: 75%">
                <div class="fb-arrow-left absolute"></div>
            </button>
        </div>
        <img src="{{asset('images/sec2/s2pic1.png')}}" alt="" class="img-fluid w-75 side-img pic_1">
        <img src="{{asset('images/sec2/s2pic2.png')}}" alt="" class="img-fluid w-75 side-img d-none">
        <img src="{{asset('images/sec2/s2pic3.png')}}" alt="" class="img-fluid w-75 side-img d-none">
        <img src="{{asset('images/sec2/s2pic4.png')}}" alt="" class="img-fluid w-75 side-img pic_4 d-none">

        <div class="col-2 position-relative ms-2 next_img_content overflow-hidden">
            <img src="{{asset('images/pic_2.png')}}" alt="" style=""
                 class="next-img first_img ">
            <img src="{{asset('images/pic_3.png')}}" alt="" style=""
                 class="next-img  d-none">
            <img src="{{asset('images/pic_4.png')}}" alt="" style=""
                 class="next-img d-none">
            <img src="{{asset('images/pic_1.png')}}" alt="" style=""
                 class="next-img  last_img d-none">
            <button class="btn btn-outline position-absolute top-50 translate-middle next circle-fb-mb relative" style="margin-left: 30%">
                <div class="fb-arrow-right absolute"></div>
            </button>
        </div>

    </div>
    <div class="ps-5 pe-5">
        <div class=" content first_content ">
            <div class="text-danger  header-2 center d-flex justify-content-center
                align-items-center pt-3 mulish-bold" style="margin-top: 5%; height: 5rem">
                <p class="text-center">DẠNG ĐỊNH CƯ ƯU VIỆT NHẤT</p>
            </div>
            <div class="d-flex justify-content-center pb-3">
                <img src="{{asset('images/red_line.svg')}}" alt="" class="" style="width: 50%;">
            </div>
            <div class="text_content_1 text-justify font-15 sp2-height-m">
                Vượt trên các dạng định cư ĐOÀN TỤ - KỸ NĂNG - DU HỌC - DOANH NHÂN (ĐẦU TƯ)
                đều có những điểm khó khăn nhất định. Và việc làm thẻ cư trú kèm mua BDS
                đang là ƯU VIỆT NHẤT.
                <br><br>
                Thủ tục dễ dàng nhất - Chi phí đăng ký và duy trì thẻ hợp lý - Con đường rẻ hơn
                để vào Châu Âu so với các chương trình/ đất nước khác.
                <br><br>
                Hungary có mức chi tiêu rẻ và người dân bản địa thân thiện với người nhập cư.
            </div>
        </div>

        <div class=" content d-none">
            <div class="text-danger  header-2 center d-flex justify-content-center
                align-items-center pt-3 mulish-bold" style="margin-top: 5%;">
                <p class="text-center">BẢO VỆ NHÀ ĐẦU TƯ - TẠM TRÚ TRƯỚC BIỂN ĐỘNG</p>
            </div>
            <div class="d-flex justify-content-center pb-3">
                <img src="{{asset('images/red_line.svg')}}" alt="" class="" style="width: 50%;">
            </div>
            <div class="text_content_2 text-justify font-15 sp2-height-m">
                Các hoạt động đầu cơ, thổi giá, thị trường bất động sản trong nước đã chạm đỉnh và sẽ khó xuất hiện
                những bước nhảy vọt trong thời gian sắp tới. Sự thiếu uy tín của nhiều chủ đầu tư lại càng
                đẩy giới đầu tư vào trạng thái hoang mang, phải “thắt dây an toàn”.
                <br><br>
                Nhà đầu tư cần 1 giải pháp tối ưu hơn:
                Không chịu tác động từ những thách thức kinh tế tại Việt Nam;
                Đảm bảo khả năng tích lũy tài sản và chắc chắn khai thác sinh lời.
                Nơi trú ẩn để trở lại vào một ngày không xa.
            </div>
        </div>

        <div class=" content d-none">
            <div class=" text-danger  header-3 center d-flex justify-content-center
                align-items-center pt-3 mulish-bold"
                 style="margin-top: 5%;">
                <p class="text-center">MÓN QUÀ ƯU GIÁ TRỊ PHƯƠNG ÁN B - CỦA ĐỂ DÀNH</p>
            </div>
            <div class="d-flex justify-content-center pb-3 ">
                <img src="{{asset('images/red_line.svg')}}" alt="" class="" style="width: 50%;">
            </div>
            <div class="text_content_3 text-justify font-15 sp2-height-m">
                Một món quà tinh thần mang ý nghĩa sâu sắc khi giúp thế hệ mai sau
                được tiếp cận với nền văn minh hiện đại, được tiếp thu những tư tưởng tân tiến,
                xu hướng ngày càng nhiều gia đình Việt Nam tạo điều kiện cho con em học tập và sinh sống ở nước
                ngoài.
                <br><br>
                Hungary là một trong những nước có cộng đồng người Việt lớn nhất Châu Âu.
                Nơi người dân bản địa hòa đồng với người nhập cư.
            </div>
        </div>

        <div class=" content d-none last_content">
            <div
                class=" text-danger header-4 center d-flex justify-content-center
                    align-items-center pt-3 mulish-bold"
                style="margin-top: 5%;">
                <p class="text-center">DU LỊCH MIỄN THỊ THỰC- TỰ DO KHÁM PHÁ</p>
            </div>

            <div class="d-flex justify-content-center pb-3 ">
                <img src="{{asset('images/red_line.svg')}}" alt="" class="" style="width: 50%;">
            </div>
            <div class="text_content_4 text-justify font-15 sp2-height-m">
                Người thành công trong xã hội đều mong muốn đạt được mục tiêu: mang lại
                cho gia đình mình cơ hội di chuyển tự do khắp thế giới,
                đặc biệt là ở khu vực Châu Âu.
                <br><br>
                Bước đầu hòa nhập với cuộc sống và học tập tại nước ngoài để thành công dân toàn cầu tương lai.
                <br><br>
                Du lịch tự do/ du lịch y tế/ mua sắm cao cấp nhất: khả năng đi lại
                giữa các quốc gia phát triển mà không cần xin Visa chắc chắn là một tài sản vô giá đối với bất cứ
                ai.
            </div>
        </div>

        <div class="rectangle-dot row mt-5 mb-5 gx-1 d-flex justify-content-center">
            <div class="col-3">
                <div class="text-center number fw-bold first_text text-red mulish-bold">01</div>
                <div class="rectangle w-100 first_rectangle "></div>
            </div>
            <div class="col-3">
                <div class="text-center number fw-bold text-grey mulish-bold">02</div>
                <div class="rectangle w-100 grey"></div>
            </div>
            <div class="col-3">
                <div class="text-center number fw-bold text-grey mulish-bold">03</div>
                <div class="rectangle w-100 grey"></div>
            </div>
            <div class="col-3">
                <div class="text-center number fw-bold text-grey mulish-bold last_text">04</div>
                <div class="rectangle w-100 grey last_rectangle"></div>
            </div>
        </div>
    </div>
</div>

<script>
    $(document).ready(function () {
        $('.rectangle-sec-2').click(function() {
            let idRectangle = $(this).attr("id");
            let idImgSec2 = $('.img-pc-sec-2:not(.d-none)').attr("id");
            if (idRectangle > idImgSec2) {
                let countSec2 =  idRectangle - idImgSec2;
                for (let i = 0; i < countSec2 ; i++) {
                    slideToNextImage();
                }
            }
            if (idRectangle < idImgSec2) {
                let countSec2 =  idImgSec2 - idRectangle;
                for (let i = 0; i < countSec2 ; i++) {
                    slideToPrevImage();
                }
            }
        });

        $('.next').click(function () {
            console.log('next')
            slideToNextImage();
        });
        $('.prev').click(function () {
            console.log('prev')
            slideToPrevImage();
        });
        let intervalId;

        function startAutoPlay() {
            intervalId = setInterval(function () {
                slideToNextImage();
            }, 15000); // Thời gian giữa các lần click (ở đây là 2000ms = 2 giây)
        }

        function stopAutoPlay() {
            clearInterval(intervalId);
        }

        startAutoPlay(); // Bắt đầu auto play khi trang được tải

        $('.next').hover(function () {
            stopAutoPlay();
        }, function () {
            startAutoPlay();
        });

        $('.prev').hover(function () {
            stopAutoPlay();
        }, function () {
            startAutoPlay();
        });
        var isTouching = false;
        var touchStartX = 0;
        var touchEndX = 0;
        var threshold = 50; // Ngưỡng di chuyển tối thiểu để kích hoạt hành động
        var touch_area = $('.section_2_mobile');

        touch_area.on('touchstart', function (event) {
            touchStartX = event.touches[0].clientX;
            isTouching = true;
        });

        touch_area.on('touchmove', function (event) {
            if (isTouching) {
                touchEndX = event.touches[event.touches.length - 1].clientX;
            }
        });

        touch_area.on('touchend', function (event) {
            if (isTouching) {
                isTouching = false;
                touchEndX = event.changedTouches[event.changedTouches.length - 1].clientX;
                var swipeLength = touchEndX - touchStartX;
                console.log(swipeLength);
                if (swipeLength > threshold) {
                    // Lướt chạm sang phải
                    // Kích hoạt hành động cho nút bấm sang phải
                    console.log('next_mobile');
                    $('.next').prop('disabled', true);
                    stopAutoPlay();
                    slideToNextImage();
                    setTimeout(function () {
                        $('.next').prop('disabled', false);
                    }, 500);
                }
                if (swipeLength < -threshold) {
                    // Lướt chạm sang trái
                    // Kích hoạt hành động cho nút bấm sang trái
                    console.log('prev_mobile');
                    $('.prev').prop('disabled', true);
                    stopAutoPlay();
                    slideToPrevImage();
                    setTimeout(function () {
                        $('.prev').prop('disabled', false);
                    }, 500);
                }
            }
        });

        function slideToNextImage() {
            let currentImage = $('.side-img:not(.d-none)');
            let nextImage = currentImage.next('.side-img');

            let currentNextImage = $('.next-img:not(.d-none)');
            let nextNextImage = currentNextImage.next('.next-img');

            let currentRectangle = $('.rectangle:not(.grey)');
            let nextRectangle = currentRectangle.parent().next().find('.rectangle');

            let currentText = $('.number:not(.text-grey)');
            let nextText = currentText.parent().next().find('.number');

            let currentContent = $('.content:not(.d-none)');
            let nextContent = currentContent.next('.content');
            // Nếu đã đến ảnh cuối cùng, chuyển về ảnh đầu tiên

            if (nextImage.length === 0) {
                nextImage = $('.side-img.pic_1');
            }
            if (nextNextImage.length === 0) {
                nextNextImage = $('.next-img.first_img');
            }
            if (nextRectangle.length === 0) {
                nextRectangle = $('.rectangle.first_rectangle');
            }
            if (nextText.length === 0) {
                nextText = $('.number.first_text');
            }

            if (nextContent.length === 0) {
                nextContent = $('.content.first_content');
            }

            // Loại bỏ class d-none khỏi ảnh tiếp theo và thêm class d-none cho ảnh hiện tại
            currentImage.fadeOut(1000);
            currentImage.addClass('d-none');
            nextImage.fadeIn(1000)
            nextImage.removeClass('d-none');


            currentNextImage.addClass('d-none');
            nextNextImage.removeClass('d-none');

            currentRectangle.addClass('grey');
            nextRectangle.removeClass('grey');

            currentText.addClass('text-grey');
            currentText.removeClass('text-red');
            nextText.removeClass('text-grey');
            nextText.addClass('text-red');

            currentContent.addClass('d-none');
            nextContent.removeClass('d-none');
        }

        function slideToPrevImage() {

            let currentImage = $('.side-img:not(.d-none)');
            let prevImage = currentImage.prev('.side-img');

            let currentPrevImage = $('.next-img:not(.d-none)');
            let prevPrevImage = currentPrevImage.prev('.next-img');

            let currentRectangle = $('.rectangle:not(.grey)');
            let prevRectangle = currentRectangle.parent().prev().find('.rectangle');

            let currentText = $('.number:not(.text-grey)');
            let prevText = currentText.parent().prev().find('.number');

            let currentContent = $('.content:not(.d-none)');
            let prevContent = currentContent.prev('.content');

            // Nếu đã đến ảnh đầu tiên, chuyển về ảnh cuối cùng
            if (prevImage.length === 0) {
                prevImage = $('.side-img.pic_4');
            }
            if (prevPrevImage.length === 0) {
                prevPrevImage = $('.next-img.last_img');
            }
            if (prevRectangle.length === 0) {
                prevRectangle = $('.rectangle.last_rectangle');
            }
            if (prevText.length === 0) {
                prevText = $('.number.last_text');
            }
            if (prevContent.length === 0) {
                prevContent = $('.content.last_content');
            }

            // Loại bỏ class d-none khỏi ảnh trước đó và thêm class d-none cho ảnh hiện tại
            currentImage.fadeOut(1000);
            currentImage.addClass('d-none');
            prevImage.fadeIn(1000);
            prevImage.removeClass('d-none');


            currentPrevImage.addClass('d-none');
            prevPrevImage.removeClass('d-none');

            currentRectangle.addClass('grey');
            prevRectangle.removeClass('grey');

            currentText.addClass('text-grey');
            currentText.removeClass('text-red');
            prevText.removeClass('text-grey');
            prevText.addClass('text-red');

            currentContent.addClass('d-none');
            prevContent.removeClass('d-none');
        }
    });
</script>
