<style>
    html, body {
        overflow-x: hidden;
    }

    @font-face {
        font-family: 'Mulish-SemiBold';
        src: url({{asset('fonts/Mulish-SemiBold.ttf')}});
    }
    @font-face {
        font-family: 'Mulish-ExtraBold';
        src: url({{asset('fonts/Mulish-ExtraBold.ttf')}});
    }

    h5{
        font-family: 'Mulish-ExtraBold', sans-serif;
    }

    .btn:focus {
        box-shadow: none !important;
    }

    .text-justify{
        text-align: justify
    }
    .rectangle {
        width: 110px;
        height: 5.038px;
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
            height: 70%;
            margin: 3rem 0 0 0;
            opacity: 50%;
        }
    }

    .section_2 {
        height: 100%;
        width: 100vw;
        background-image: url('{{asset('images/background_sec2.png')}}');
        background-repeat: no-repeat;
        background-position: center;
        -webkit-background-size: cover;
        -moz-background-size: cover;
        -o-background-size: cover;
        background-size: cover;
        display: flex;
        align-items: stretch;
        overflow-y: auto;
        overflow-x: hidden;
        margin: 0;
        padding: 0;
    }

</style>
<div class="section_2 row">
    <div class="side_content col-6 h-100 " style="padding: 8% 0 0 18.6%  ">
        <img src="{{asset('images/question.svg')}}" alt="" class="img-fluid">
        <div class=" content first_content">
            <div class=" text-danger h5 header-1" style="margin-top: 5%;">
                DẠNG ĐỊNH CƯ ƯU VIỆT NHẤT
            </div>
            <div class="header-rectangle" style="width: 40%"></div>
            <div class="text_content_1 text-justify">
                Vượt trên các dạng định cư ĐOÀN TỤ - KỸ NĂNG - DU HỌC - DOANH NHÂN (ĐẦU TƯ) đều có những điểm khó khăn
                nhất
                định. Và việc làm thẻ cư trú kèm mua BDS đang là ƯU VIỆT NHẤT.
                <br><br>
                Thủ tục dễ dàng nhất - Chi phí đăng ký và duy trì thẻ hợp lý - Con đường rẻ hơn để vào Châu Âu so với
                các
                chương trình/ đất nước khác.
                <br><br>
                Hungary có mức chi tiêu rẻ và người dân bản địa thân thiện với người nhập cư.
            </div>
        </div>

        <div class=" content d-none">
            <div class=" text-danger h5 header-2" style="margin-top: 5%;">
                BẢO VỆ NHÀ ĐẦU TƯ - TẠM TRÚ TRƯỚC BIẾN ĐỘNG
            </div>
            <div class="header-rectangle" style="width: 70%"></div>
            <div class="text_content_2 text-justify">
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
            <div class=" text-danger h5 header-3 " style="margin-top: 5%;">
                MÓN QUÀ ƯU GIÁ TRỊ - PHƯƠNG ÁN B - CỦA ĐỂ DÀNH
            </div>
            <div class="header-rectangle" style="width: 75%"></div>
            <div class="text_content_3 text-justify" >
                Một món quà tinh thần mang ý nghĩa sâu sắc khi giúp thế hệ mai sau
                được tiếp cận với nền văn minh hiện đại, được tiếp thu những tư tưởng tân tiến,
                xu hướng ngày càng nhiều gia đình Việt Nam tạo điều kiện cho con em học tập và sinh sống ở nước ngoài.
                <br><br>
                Hungary là một trong những nước có cộng đồng người Việt lớn nhất Châu Âu.
                Nơi người dân bản địa hòa đồng với người nhập cư.
            </div>
        </div>

        <div class=" content d-none">
            <div class=" text-danger h5 header-4" style="margin-top: 5%;">
                DU LỊCH MIỄN THỊ THỰC - TỰ DO KHÁM PHÁ
            </div>
            <div class="header-rectangle" style="width: 65%"></div>
            <div class="text_content_4 text-justify">
                Người thành công trong xã hội đều mong muốn đạt được mục tiêu: mang lại
                cho gia đình mình cơ hội di chuyển tự do khắp thế giới,
                đặc biệt là ở khu vực Châu Âu.
                <br><br>
                Bước đầu hòa nhập với cuộc sống và học tập tại nước ngoài để thành công dân toàn cầu tương lai.
                <br><br>
                Du lịch tự do/ du lịch y tế/ mua sắm cao cấp nhất: khả năng đi lại
                giữa các quốc gia phát triển mà không cần xin Visa chắc chắn là một tài sản vô giá đối với bất cứ ai.
            </div>
        </div>

        <div class="rectangle-dot row mt-5 gx-1" style="width: 40%; font-size: 25px;  font-family: 'Mulish-SemiBold', sans-serif;">
            <div class="col-3">
                <div class="text-center number fw-bold  text-red first_text">01</div>
                <div class="rectangle w-100 first_rectangle"></div>
            </div>
            <div class="col-3">
                <div class="text-center number fw-bold text-grey ">02</div>
                <div class="rectangle grey w-100"></div>
            </div>
            <div class="col-3">
                <div class="text-center number fw-bold text-grey">03</div>
                <div class="rectangle grey w-100"></div>
            </div>
            <div class="col-3">
                <div class="text-center number fw-bold text-grey">04</div>
                <div class="rectangle  grey w-100"></div>
            </div>
        </div>
    </div>
    <div class="side_content col-6 row" style="padding: 8% 0 8% 8% ;position: relative">
        <img src="{{asset('images/pic_1.png')}}" alt="" class="img-fluid h-100 side-img col-8 pic_1">
        <img src="{{asset('images/pic_2.png')}}" alt="" class="img-fluid h-100 side-img col-8 d-none">
        <img src="{{asset('images/pic_3.png')}}" alt="" class="img-fluid h-100 side-img col-8 d-none">
        <img src="{{asset('images/pic_4.png')}}" alt="" class="img-fluid h-100 side-img col-8 d-none">

        <div class="col-4 position-relative next_img_content">
            <img src="{{asset('images/pic_2.png')}}" alt="" class="next-img first_img ">
            <img src="{{asset('images/pic_3.png')}}" alt="" class="next-img  d-none">
            <img src="{{asset('images/pic_4.png')}}" alt="" class="next-img d-none">
            <img src="{{asset('images/pic_1.png')}}" alt="" class="next-img  d-none">

            <button class="btn btn-outline position-absolute top-50 start-50 translate-middle next">
                <img src="{{asset('images/arrow.png')}}" alt=""></button>
        </div>

    </div>
    <div class="pt-4 ps-4 pe-4 section_2_mobile " style=" ">
        <img src="{{asset('images/question_mobile.svg')}}" alt="" class="img-fluid  pt-4 ps-4 pe-4 ">
        <div class="d-flex justify-content-center pt-3 col-12">

            <div class="col-2 position-relative next_img_content overflow-hidden">
                <img src="{{asset('images/pic_4.png')}}" alt="" style=""
                     class="next-img first_img ">
                <img src="{{asset('images/pic_1.png')}}" alt="" style=""
                     class="next-img  d-none">
                <img src="{{asset('images/pic_2.png')}}" alt="" style=""
                     class="next-img d-none">
                <img src="{{asset('images/pic_3.png')}}" alt="" style=""
                     class="next-img  d-none last_img">
                <button class="btn btn-outline position-absolute top-50 start-50 translate-middle prev">
                    <img src="{{asset('images/left_arrow.png')}}" alt=""></button>
            </div>
            <img src="{{asset('images/pic_1.png')}}" alt="" class="img-fluid w-75 side-img pic_1">
            <img src="{{asset('images/pic_2.png')}}" alt="" class="img-fluid w-75 side-img d-none">
            <img src="{{asset('images/pic_3.png')}}" alt="" class="img-fluid w-75 side-img d-none">
            <img src="{{asset('images/pic_4.png')}}" alt="" class="img-fluid w-75 side-img pic_4 d-none">

            <div class="col-2 position-relative next_img_content overflow-hidden">
                <img src="{{asset('images/pic_2.png')}}" alt="" style=""
                     class="next-img first_img ">
                <img src="{{asset('images/pic_3.png')}}" alt="" style=""
                     class="next-img  d-none">
                <img src="{{asset('images/pic_4.png')}}" alt="" style=""
                     class="next-img d-none">
                <img src="{{asset('images/pic_1.png')}}" alt="" style=""
                     class="next-img  last_img d-none">
                <button class="btn btn-outline position-absolute top-50 start-50 translate-middle next">
                    <img src="{{asset('images/arrow.png')}}" alt=""></button>
            </div>

        </div>
        <div class="ps-5 pe-5">
            <div class=" content first_content ">
                <div class=" text-danger header-1 d-flex justify-content-center align-items-center pt-3 ">
                    <p class="text-center">DẠNG ĐỊNH CƯ ƯU VIỆT NHẤT</p>
                </div>
                <div class="d-flex justify-content-center pb-3">
                    <img src="{{asset('images/red_line.svg')}}" alt="" class="" style="width: 60%;">
                </div>
                <div class="text_content_1 text-justify">
                    Vượt trên các dạng định cư ĐOÀN TỤ - KỸ NĂNG - DU HỌC - DOANH NHÂN (ĐẦU TƯ) đều có những điểm khó
                    khăn
                    nhất
                    định. Và việc làm thẻ cư trú kèm mua BDS đang là ƯU VIỆT NHẤT.
                    <br><br>
                    Thủ tục dễ dàng nhất - Chi phí đăng ký và duy trì thẻ hợp lý - Con đường rẻ hơn để vào Châu Âu so
                    với
                    các
                    chương trình/ đất nước khác.
                    <br><br>
                    Hungary có mức chi tiêu rẻ và người dân bản địa thân thiện với người nhập cư.
                </div>
            </div>

            <div class=" content d-none">
                <div class=" text-danger  header-2 center d-flex justify-content-center align-items-center pt-3 " style="margin-top: 5%;">
                    <p class="text-center">BẢO VỆ NHÀ ĐẦU TƯ - TẠM TRÚ TRƯỚC BIỂN ĐỘNG</p>
                </div>
                <div class="d-flex justify-content-center pb-3">
                    <img src="{{asset('images/red_line.svg')}}" alt="" class="" style="width: 50%;">
                </div>
                <div class="text_content_2 text-justify">
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
                <div class=" text-danger  header-3 center d-flex justify-content-center align-items-center pt-3 "
                    style="margin-top: 5%;">
                    <p class="text-center">MÓN QUÀ ƯU GIÁ TRỊ PHƯƠNG ÁN B - CỦA ĐỂ DÀNH</p>
                </div>
                <div class="d-flex justify-content-center pb-3 ">
                    <img src="{{asset('images/red_line.svg')}}" alt="" class="" style="width: 50%;">
                </div>
                <div class="text_content_3 text-justify">
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
                    class=" text-danger header-4 center d-flex justify-content-center align-items-center pt-3"
                    style="margin-top: 5%;">
                    <p class="text-center">DU LỊCH MIỄN THỊ THỰC- TỰ DO KHÁM PHÁ</p>
                </div>

                <div class="d-flex justify-content-center pb-3 ">
                    <img src="{{asset('images/red_line.svg')}}" alt="" class="" style="width: 50%;">
                </div>
                <div class="text_content_4 text-justify">
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

            <div class="rectangle-dot row  mt-5 mb-5 gx-1 d-flex justify-content-center">
                <div class="col-3">
                    <div class="text-center number fw-bold first_text text-red">01</div>
                    <div class="rectangle w-100 first_rectangle "></div>
                </div>
                <div class="col-3">
                    <div class="text-center number fw-bold text-grey">02</div>
                    <div class="rectangle w-100 grey"></div>
                </div>
                <div class="col-3">
                    <div class="text-center number fw-bold text-grey">03</div>
                    <div class="rectangle w-100 grey"></div>
                </div>
                <div class="col-3">
                    <div class="text-center number fw-bold text-grey last_text">04</div>
                    <div class="rectangle w-100 grey last_rectangle"></div>
                </div>
            </div>
        </div>
    </div>
    <script>
        $(document).ready(function () {
            $('.next').click(function () {
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
                currentImage.addClass('fade-out');

                setTimeout(function () {
                    currentImage.addClass('d-none').removeClass('fade-out');
                    nextImage.removeClass('d-none');
                }, 500);

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
            });
            $('.prev').click(function () {
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
                currentImage.addClass('fade-out');

                setTimeout(function () {
                    currentImage.addClass('d-none').removeClass('fade-out');
                    prevImage.removeClass('d-none');
                }, 500);

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
            });
            let intervalId;

            function startAutoPlay() {
                intervalId = setInterval(function () {
                    $('.next').trigger('click');
                }, 10000); // Thời gian giữa các lần click (ở đây là 2000ms = 2 giây)
            }

            function stopAutoPlay() {
                clearInterval(intervalId);
            }

            $('#next').click(function () {
                // Đoạn code xử lý khi click next ở đây
                // ...
            });

            startAutoPlay(); // Bắt đầu auto play khi trang được tải

            // Tạm dừng auto play khi di chuột vào div chứa ảnh
            $('.parent-container').hover(function () {
                stopAutoPlay();
            }, function () {
                startAutoPlay();
            });

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
        });

    </script>
