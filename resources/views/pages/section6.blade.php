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

    .mulish-semi {
        font-family: 'Mulish-SemiBold', sans-serif;
    }

    .start-84 {
        margin-left: 84%
    }
    .start-80{
        margin-left: 80%
    }
    .start-20 {
        margin-left: 8%
    }
    .top-30 {
        margin-top: 35%;
    }

    .top-10 {
        margin-top: -30%;
    }
    .start-5 {
        margin-left: 5%
    }

    .start-85 {
        margin-left: 84%
    }

    .btn:focus {
        box-shadow: none !important;
    }

    .text-justify {
        text-align: justify
    }

    .text-yellow {
        color: #FFDFA8;
    }

    .rectangle-red-s6 {
        width: 110px;
        height: 5.038px;
        /*background-color: #FFDFA8;*/
        background-color: #bc202e;
    }

    .yellow-rectangle {
        width: 110px;
        height: 5.038px;
        background-color: #FFDFA8;
    }

    .header-rectangle {
        width: 110px;
        height: 4.038px;
        background-color: #bc202e;
    }

    .grey {
        background-color: #404041;
    }


    .section_6 {
        height: 70vh;
        width: 100vw;
        background-image: url('{{asset('images/sec6/sec6-2.png')}}');
        background-repeat: no-repeat;
        background-position: center;
        -webkit-background-size: cover;
        -moz-background-size: cover;
        -o-background-size: cover;
        background-size: cover;
        display: flex;
        align-items: stretch;
        margin: 0;
        padding: 0;
        /*overflow-x: hidden;*/
    }

    .section_6-2 {
        height: 70vh;
        width: 100vw;
        background-image: url('{{asset('images/sec6/sec6-1.png')}}');
        background-repeat: no-repeat;
        background-position: center;
        -webkit-background-size: cover;
        -moz-background-size: cover;
        -o-background-size: cover;
        background-size: cover;
        display: flex;
        align-items: stretch;
        /*overflow-y: auto;*/
        /*overflow-x: hidden;*/
        margin: 0;
        padding: 0;
    }

    .section_6-mobile {
        /*height: 100vh;*/
        width: 100vw;
        background-image: url('{{asset('images/sec6/sec6-2.png')}}');
        background-repeat: no-repeat;
        background-position: center;
        -webkit-background-size: cover;
        -moz-background-size: cover;
        -o-background-size: cover;
        background-size: cover;
        display: flex;
        align-items: stretch;
        /*overflow-y: auto;*/
        overflow-x: hidden;
        margin: 0;
        padding: 0;
    }

    .section_6-2-mobile {
        /*height: 100vh;*/
        width: 100vw;
        background-image: url('{{asset('images/sec6/sec6-1.png')}}');
        background-repeat: no-repeat;
        background-position: center;
        -webkit-background-size: cover;
        -moz-background-size: cover;
        -o-background-size: cover;
        background-size: cover;
        display: flex;
        align-items: stretch;
        overflow-x: hidden;
        /*overflow: hidden;*/
        margin: 0;
        padding: 0;
    }

    @media screen and (max-width: 1100px) {
        .section_6 {
            display: none;
        }

        .section_6-2 {
            display: none;
        }
    }

    @media screen and (min-width: 1100px) {
        .section_6-mobile {
            display: none;
        }

        .section_6-2-mobile {
            display: none;
        }
    }

    .small-image {
        max-width: 52%; /* Đặt kích thước tùy ý, ví dụ: 50% */
        height: auto; /* Đảm bảo tỷ lệ hình ảnh không bị méo */
    }

    .sm-image-header {
        max-width: 70% !important; /* Đặt kích thước tùy ý, ví dụ: 50% */
        height: auto; /* Đảm bảo tỷ lệ hình ảnh không bị méo */
    }

    .sm-image-header-mobile {
        max-width: 90% !important; /* Đặt kích thước tùy ý, ví dụ: 50% */
        height: auto; /* Đảm bảo tỷ lệ hình ảnh không bị méo */
    }

    .header-1 {
        margin-top: 1rem;
        max-width: 100%; /* Đặt kích thước tùy ý, ví dụ: 50% */
        height: auto; /* Đảm bảo tỷ lệ hình ảnh không bị méo */
    }
     .text_content_1{
        font-size: 15px;
    }
    .s6p1-img{
        height: 80%;
    }
    .s6p2-img{
        height: 80%;
     }
    .sp6-height{
        height: 2rem;
    }
    .sp6-height-m{
        height: 6rem;
    }
    .s6p2-height-m{
      height: 2rem;
    }
</style>

<div class="section_6 row">
    <div class="col-6 d-flex align-items-center justify-content-end position-relative mb-4">
        <img src="{{asset('images/sec6/pic1.png')}}" alt="" class="s6p1-img img-fluid  s6p1-img-first">
        <img src="{{asset('images/sec6/pic2.png')}}" alt="" class="s6p1-img img-fluid  d-none">
        <img src="{{asset('images/sec6/pic3.png')}}" alt="" class="s6p1-img img-fluid  d-none">
        <img src="{{asset('images/sec6/pic4.png')}}" alt="" class="s6p1-img img-fluid  d-none">
        <img src="{{asset('images/sec6/pic5.png')}}" alt="" class="s6p1-img img-fluid  d-none">
        <img src="{{asset('images/sec6/pic6.png')}}" alt="" class="s6p1-img img-fluid  s6p1-img-last d-none">
        <button class="btn btn-outline position-absolute top-50 start-0 start-20 translate-middle prev-6-1">
            <img src="{{asset('images/left-arrow.svg')}}" alt="" style="width: 70px"></button>
    </div>
    <div class="col-6 p-5 position-relative " style="height: 100%; margin-top: 2%">
        <img src="{{asset('images/sec6/header-1.svg')}}" alt="" class="img-fluid header-1 pb-3 sm-image-header pt-5">
        <div class="header-rectangle"></div>
        <div class="text_content_1 text-justify text-white pt-3 mulish-semi " style="width: 70%">
            Chương trình đầu tư BĐS lấy thẻ cư trú với chi phí đầu tư hợp lí,
            đảm bảo an toàn với chính sách NHẬN THẺ CƯ TRÚ TRƯỚC – MUA BẤT ĐỘNG SẢN SAU
        </div>
        <div class="s6p1-content  first_content_s6">
            <div class=" text-yellow header-1 mulish-bold ">
                MỨC GIÁ HỢP LÝ
            </div>
            <div class="text_content_1 text-justify text-white pt-1 sp6-height mulish-semi" style="width: 50%">
                Chỉ từ 175.000 eur đã có thể sở hữu ngay bđs vĩnh viễn,
                có thể khai thác cho thuê ngay
            </div>
        </div>
        <div class="s6p1-content  d-none">
            <div class=" text-yellow header-1 mulish-bold ">
                PHÁP LÝ BĐS
            </div>
            <div class="text_content_1 text-justify text-white pt-1 sp6-height mulish-semi" style="width: 50%">
                Sở hữu vĩnh viễn, pháp lý được công khai minh bạch trên hệ thống dữ liệu của chính phủ Hungary
            </div>
        </div>
        <div class="s6p1-content  d-none">
            <div class=" text-yellow header-1 mulish-bold ">
                VỊ TRÍ ĐẮC ĐỊA
            </div>
            <div class="text_content_1 text-justify text-white pt-1 sp6-height mulish-semi" style="width: 70%">
                Nằm giữa trung tâm downtown thủ đô Budapest – thành phố cổ kính
                được mệnh danh là “Paris vùng Đông Âu” với nhiều điểm du lịch nổi tiếng,
                nhà hàng, trung tâm mua sắm
            </div>
        </div>
        <div class="s6p1-content d-none">
            <div class=" text-yellow header-1 mulish-bold ">
                LỢI NHUẬN CHO THUÊ
            </div>
            <div class="text_content_1 text-justify text-white pt-1 sp6-height mulish-semi" style="width: 50%">
                Cam kết tỷ suất lợi nhuận cho thuê cao nhất Châu Âu
                (trung bình 5.8% - 8.4%/ năm tuỳ vị trí & diện tích)
            </div>
        </div>
        <div class="s6p1-content  d-none">
            <div class=" text-yellow header-1 mulish-bold ">
                HỖ TRỢ QUẢN LÝ VÀ VẬN HÀNH
            </div>
            <div class="text_content_1 text-justify text-white pt-1 sp6-height mulish-semi" style="width: 50%">
                Có đội ngũ quản lý & vận hành cho thuê trọn gói, đảm bảo uy tín
                và khai thác tiềm năng BĐS tối đa
            </div>
        </div>
        <div class="s6p1-content  last-content-s6 d-none">
            <div class=" text-yellow header-1 mulish-bold ">
                GIÁ TRỊ TĂNG TRƯỞNG
            </div>
            <div class="text_content_1 text-justify text-white pt-1 sp6-height mulish-semi" style="width: 50%">
                BĐS Hungary tăng giá top 2 Châu Âu. Tỷ lệ tăng giá trong 5 năm
                từ 2018 – 2022 là 45.64%, trung bình tăng 9.1%/ năm.
            </div>
        </div>
        <div class="rectangle-dot row pt-5 gx-1" style="width: 20%; margin-top: 5%">
            <div class="col-2">
                <div class="yellow-rectangle w-100 first_rectangle_y"></div>
            </div>
            <div class="col-2">
                <div class="yellow-rectangle grey w-100"></div>
            </div>
            <div class="col-2">
                <div class="yellow-rectangle grey w-100"></div>
            </div>
            <div class="col-2">
                <div class="yellow-rectangle  grey w-100"></div>
            </div>
            <div class="col-2">
                <div class="yellow-rectangle grey w-100"></div>
            </div>
            <div class="col-2">
                <div class="yellow-rectangle grey w-100 last_rectangle_y"></div>
            </div>
        </div>
        <button class="btn btn-outline position-absolute top-50 start-80 translate-middle next-6-1 pb-5">
            <img src="{{asset('images/arrow.svg')}}" alt="" style=" width: 70px"></button>
    </div>
</div>

<div class="section_6-2 row">
    <div class="col-6 p-5 position-relative" style="margin-top: 3%">
        <div class="d-flex flex-row-reverse pt-5">
            <img src="{{asset('images/sec6/header-2.png')}}" alt="" class="img-fluid header-1 pb-3 ">
        </div>
        <div class="d-flex flex-row-reverse">
            <div class="header-rectangle"></div>
        </div>
        <div class="s6p2-content s6p2-first-content">
            <div class="  header-1 d-flex flex-row-reverse mulish-bold">
                1 NGƯỜi ĐẦU TƯ - 3 THẾ HỆ CÙNG HƯỞNG
            </div>
            <div class="d-flex flex-row-reverse">
                <div class="text_content_1 text-justify text-end pt-3 sp6-height mulish-semi" style="width: 50%">
                    Thẻ cư trú cấp cho vợ chồng, con cái và bố mẹ 2 bên (có điều kiện cụ thể)
                </div>
            </div>
        </div>
        <div class=" s6p2-content  d-none">
            <div class="  header-1 d-flex flex-row-reverse mulish-bold">
                MÔI TRƯỜNG SỐNG HOÀN HẢO
            </div>
            <div class="d-flex flex-row-reverse">
                <div class="text_content_1 text-justify text-end pt-3 sp6-height mulish-semi" style="width: 50%">
                    Không khí trong lành, Chế độ an sinh xã hội tốt, Giáo dục công cấp 1-3 hoàn toàn miễn phí,
                    Chăm sóc y tế theo hệ thống chuẩn Châu Âu
                </div>
            </div>
        </div>
        <div class="  s6p2-content d-none">
            <div class="  header-1 d-flex flex-row-reverse mulish-bold">
                TỰ DO ĐI LẠI KHÔNG CẦN VISA
            </div>
            <div class="d-flex flex-row-reverse">
                <div class="text_content_1 text-justify text-end pt-3 sp6-height mulish-semi" style="width: 50%">
                    TỰ DO ĐI LẠI 27 NƯỚC KHỐI SCHENGEN & khu vực Balkan không cần xin visa
                </div>
            </div>
        </div>
        <div class=" s6p2-content last-content-s6p2 d-none">
            <div class="  header-1 d-flex flex-row-reverse mulish-bold">
                GIA HẠN SAU 3 NĂM
            </div>
            <div class="d-flex flex-row-reverse">
                <div class="text_content_1 text-justify text-end pt-3 sp6-height mulish-semi" style="width: 50%">
                    Sau 3 năm cư trú tại Hungary có thể lên thẻ thường trú nhân
                </div>
            </div>
        </div>
        <button class="btn btn-outline position-absolute top-50 start-0 start-20 translate-middle prev-6-2">
            <img src="{{asset('images/left-arrow.svg')}}" alt="" style="width: 70px" class=""></button>
        <div class="d-flex flex-row-reverse mt-5">
            <div class="rectangle-dot row mt-5 gx-1" style="width: 20%; ">
                <div class="col-2">
                    <div class="rectangle-red-s6  w-100 first-rectangle-6"></div>
                </div>
                <div class="col-2">
                    <div class="rectangle-red-s6  grey w-100"></div>
                </div>
                <div class="col-2">
                    <div class="rectangle-red-s6  grey w-100"></div>
                </div>
                <div class="col-2">
                    <div class="rectangle-red-s6   grey w-100"></div>
                </div>
                <div class="col-2">
                    <div class="rectangle-red-s6  grey w-100"></div>
                </div>
                <div class="col-2">
                    <div class="rectangle-red-s6  grey w-100 last-rectangle-6"></div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-6 d-flex align-items-center justify-content-start position-relative">
        <img src="{{asset('images/sec6/pic1p2.png')}}" alt="" class="s6p2-img img-fluid  s6p2-img-first">
        <img src="{{asset('images/sec6/pic2p2.png')}}" alt="" class="s6p2-img img-fluid  d-none">
        <img src="{{asset('images/sec6/pic3p2.png')}}" alt="" class="s6p2-img img-fluid  d-none">
        <img src="{{asset('images/sec6/pic4p2.png')}}" alt=""
             class="s6p2-img img-fluid s6p2-img-last d-none">
        <button class="btn btn-outline position-absolute top-50 start-84 translate-middle next-6-2">
            <img src="{{asset('images/arrow.svg')}}" alt="" style="width: 70px;" class=""></button>
    </div>

</div>

<div class="section_6-mobile">
    <div class="container-fluid p-5 position-relative justify-content-center">
        <img src="{{asset('images/sec6/header-1.svg')}}" alt="" class="img-fluid header-1 pb-3 sm-image-header-mobile">
        <div class="header-rectangle"></div>
        <div class="text_content_1 text-justify text-white pt-3 mulish-semi font-15" style="width: 100%">
            Chương trình đầu tư BĐS lấy thẻ cư trú với chi phí đầu tư hợp lí,
            đảm bảo an toàn với chính sách NHẬN THẺ CƯ TRÚ TRƯỚC – MUA BẤT ĐỘNG SẢN SAU
        </div>
        <button class="btn btn-outline position-absolute top-50 start-0 start-5 translate-middle prev-6-1">
            <img src="{{asset('images/left-arrow.svg')}}" alt="" style="height: 50px"></button>
        <div class="d-flex align-items-center justify-content-end mt-4">
            <img src="{{asset('images/sec6/pic1.png')}}" alt="" class="s6p1-img img-fluid  s6p1-img-first">
            <img src="{{asset('images/sec6/pic2.png')}}" alt="" class="s6p1-img img-fluid  d-none">
            <img src="{{asset('images/sec6/pic3.png')}}" alt="" class="s6p1-img img-fluid  d-none">
            <img src="{{asset('images/sec6/pic4.png')}}" alt="" class="s6p1-img img-fluid  d-none">
            <img src="{{asset('images/sec6/pic5.png')}}" alt="" class="s6p1-img img-fluid  d-none">
            <img src="{{asset('images/sec6/pic6.png')}}" alt="" class="s6p1-img img-fluid s6p1-img-last d-none">
        </div>
        <button class="btn btn-outline position-absolute top-50 start-85 translate-middle next-6-1">
            <img src="{{asset('images/arrow.svg')}}" alt="" style="height: 50px"></button>
        <div class="s6p1-content  first_content_s6 text-center ">
            <div class=" text-yellow header-1 mulish-bold ">
                MỨC GIÁ HỢP LÝ
            </div>
            <div class="text_content_1 text-justify-center pt-1 text-center text-yellow sp6-height-m mulish-semi font-15" style="width: 100%">
                Chỉ từ 175.000 eur đã có thể sở hữu ngay bđs vĩnh viễn,
                có thể khai thác cho thuê ngay
            </div>
        </div>
        <div class="s6p1-content  d-none text-center">
            <div class=" text-yellow header-1 mulish-bold ">
                PHÁP LÝ BĐS
            </div>
            <div class="text_content_1 text-justify-center pt-1 text-center text-yellow sp6-height-m mulish-semi font-15" style="width: 100%">
                Sở hữu vĩnh viễn, pháp lý được công khai minh bạch trên hệ thống dữ liệu của chính phủ Hungary
            </div>
        </div>
        <div class="s6p1-content  d-none text-center">
            <div class=" text-yellow header-1 mulish-bold ">
                VỊ TRÍ ĐẮC ĐỊA
            </div>
            <div class="text_content_1 text-justify-center pt-1 text-center text-yellow sp6-height-m mulish-semi font-15" style="width: 100%">
                Nằm giữa trung tâm downtown thủ đô Budapest – thành phố cổ kính
                được mệnh danh là “Paris vùng Đông Âu” với nhiều điểm du lịch nổi tiếng,
                nhà hàng, trung tâm mua sắm
            </div>
        </div>
        <div class="s6p1-content d-none text-center">
            <div class=" text-yellow header-1 mulish-bold ">
                LỢI NHUẬN CHO THUÊ
            </div>
            <div class="text_content_1 text-justify-center pt-1 text-center text-yellow sp6-height-m mulish-semi font-15" style="width: 100%">
                Cam kết tỷ suất lợi nhuận cho thuê cao nhất Châu Âu
                (trung bình 5.8% - 8.4%/ năm tuỳ vị trí & diện tích)
            </div>
        </div>
        <div class="s6p1-content  d-none text-center">
            <div class=" text-yellow header-1 mulish-bold ">
                HỖ TRỢ QUẢN LÝ VÀ VẬN HÀNH
            </div>
            <div class="text_content_1 text-justify-center pt-1 text-center text-yellow sp6-height-m mulish-semi font-15" style="width: 100%">
                Có đội ngũ quản lý & vận hành cho thuê trọn gói, đảm bảo uy tín
                và khai thác tiềm năng BĐS tối đa
            </div>
        </div>
        <div class="s6p1-content  last-content-s6 d-none text-center">
            <div class=" text-yellow header-1 mulish-bold ">
                GIÁ TRỊ TĂNG TRƯỞNG
            </div>
            <div class="text_content_1 text-justify-center pt-1 text-center text-yellow sp6-height-m mulish-semi font-15" style="width: 100%">
                BĐS Hungary tăng giá top 2 Châu Âu. Tỷ lệ tăng giá trong 5 năm
                từ 2018 – 2022 là 45.64%, trung bình tăng 9.1%/ năm.
            </div>
        </div>
        <div class="rectangle-dot row pt-5 gx-1 justify-content-center" style="width: 100%;">
            <div class="col-2">
                <div class="yellow-rectangle w-100 first_rectangle_y"></div>
            </div>
            <div class="col-2">
                <div class="yellow-rectangle grey w-100"></div>
            </div>
            <div class="col-2">
                <div class="yellow-rectangle grey w-100"></div>
            </div>
            <div class="col-2">
                <div class="yellow-rectangle  grey w-100"></div>
            </div>
            <div class="col-2">
                <div class="yellow-rectangle grey w-100"></div>
            </div>
            <div class="col-2">
                <div class="yellow-rectangle grey w-100 last_rectangle_y"></div>
            </div>
        </div>
    </div>
</div>
<div class="section_6-2-mobile">
    <div class="container-fluid p-5 position-relative justify-content-center">
        <div class="d-flex flex-row-reverse ">
            <img src="{{asset('images/sec6/header-2.png')}}" alt=""
                 class="img-fluid header-1 pb-3 sm-image-header-mobile">
        </div>
        <div class="d-flex flex-row-reverse">
            <div class="header-rectangle"></div>
        </div>
        <button class="btn btn-outline position-absolute top-30 start-0 start-20 translate-middle prev-6-2">
            <img src="{{asset('images/left-arrow.svg')}}" alt="" class="" style="height: 50px">
        </button>
        <div class="d-flex align-items-center justify-content-end mt-4">
            <img src="{{asset('images/sec6/pic1p2.png')}}" alt="" class="s6p2-img img-fluid  s6p2-img-first">
            <img src="{{asset('images/sec6/pic2p2.png')}}" alt="" class="s6p2-img img-fluid  d-none">
            <img src="{{asset('images/sec6/pic3p2.png')}}" alt="" class="s6p2-img img-fluid  d-none">
            <img src="{{asset('images/sec6/pic4p2.png')}}" alt="" class="s6p2-img img-fluid s6p2-img-last d-none">
        </div>
        <button class="btn btn-outline position-absolute top-10 start-84 translate-middle next-6-2">
            <img src="{{asset('images/arrow.svg')}}" alt="" class="" style="width: 50px">
        </button>
        <div class="s6p2-content s6p2-first-content text-center">
            <div class="  header-1 mulish-bold" style="height: 2rem">
                1 NGƯỜi ĐẦU TƯ - 3 THẾ HỆ CÙNG HƯỞNG
            </div>
            <div class="">
                <div class="text_content_1 text-justify text-center pt-3 s6p2-height-m mulish-semi font-15" >
                    Thẻ cư trú cấp cho vợ chồng, con cái và bố mẹ 2 bên (có điều kiện cụ thể)
                </div>
            </div>
        </div>
        <div class=" s6p2-content  d-none text-center">
            <div class="  header-1  mulish-bold" style="height: 2rem">
                MÔI TRƯỜNG SỐNG HOÀN HẢO
            </div>
            <div class="d-flex flex-row-reverse">
                <div class="text_content_1 text-justify text-center pt-3 text-justify-center s6p2-height-m mulish-semi font-15">
                    Không khí trong lành, Chế độ an sinh xã hội tốt, Giáo dục công cấp 1-3 hoàn toàn miễn phí,
                    Chăm sóc y tế theo hệ thống chuẩn Châu Âu
                </div>
            </div>
        </div>
        <div class="  s6p2-content d-none text-center">
            <div class="  header-1  mulish-bold" style="height: 2rem">
                TỰ DO ĐI LẠI KHÔNG CẦN VISA
            </div>
            <div class=" text-justify-center">
                <div class="text_content_1 text-justify text-center pt-3 s6p2-height-m mulish-semi font-15" >
                    TỰ DO ĐI LẠI 27 NƯỚC KHỐI SCHENGEN & khu vực Balkan không cần xin visa
                </div>
            </div>
        </div>
        <div class=" s6p2-content last-content-s6p2 d-none text-center">
            <div class="  header-1  mulish-bold" style="height: 2rem">
                GIA HẠN SAU 3 NĂM
            </div>
            <div class="">
                <div class="text_content_1 text-justify text-center pt-3 text-justify-center s6p2-height-m mulish-semi font-15" >
                    Sau 3 năm cư trú tại Hungary có thể lên thẻ thường trú nhân
                </div>
            </div>
        </div>

        <div class=" mt-5">
            <div class="rectangle-dot row pt-5 gx-1" style="width: 100%; ">
                <div class="col-2">
                    <div class="rectangle-red-s6  w-100 first-rectangle-6"></div>
                </div>
                <div class="col-2">
                    <div class="rectangle-red-s6  grey w-100"></div>
                </div>
                <div class="col-2">
                    <div class="rectangle-red-s6  grey w-100"></div>
                </div>
                <div class="col-2">
                    <div class="rectangle-red-s6   grey w-100"></div>
                </div>
                <div class="col-2">
                    <div class="rectangle-red-s6  grey w-100"></div>
                </div>
                <div class="col-2">
                    <div class="rectangle-red-s6  grey w-100 last-rectangle-6"></div>
                </div>
            </div>
        </div>
    </div>
</div>
<script>
    $(document).ready(function () {
        $('.next-6-1').click(function () {
            s6p1slideToNextImage();
        });
        $('.prev-6-1').click(function () {
            s6p1slideToPrevImage();
        });
        let intervalId;

        function s6p1startAutoPlay() {
            intervalId = setInterval(function () {
                s6p1slideToNextImage();
            }, 15000); // Thời gian giữa các lần click (ở đây là 2000ms = 2 giây)
        }

        function s6p1stopAutoPlay() {
            clearInterval(intervalId);
        }

        s6p1startAutoPlay(); // Bắt đầu auto play khi trang được tải

        $('.next-6-1').hover(function () {
            s6p1stopAutoPlay();
        }, function () {
            s6p1startAutoPlay();
        });

        $('.prev-6-1').hover(function () {
            s6p1stopAutoPlay();
        }, function () {
            s6p1startAutoPlay();
        });
        var isTouching = false;
        var touchStartX = 0;
        var touchEndX = 0;
        var threshold = 50; // Ngưỡng di chuyển tối thiểu để kích hoạt hành động
        var touch_area = $('.section_6-mobile');

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
                    $('.next-6-2').prop('disabled', true);
                    s6p1stopAutoPlay();
                    s6p1slideToNextImage();
                    setTimeout(function () {
                        $('.next-6-2').prop('disabled', false);
                    }, 500);
                }
                if (swipeLength < -threshold) {
                    // Lướt chạm sang trái
                    // Kích hoạt hành động cho nút bấm sang trái
                    console.log('prev_mobile');
                    $('.prev-6-2').prop('disabled', true);
                    s6p1stopAutoPlay();
                    s6p1slideToPrevImage();
                    setTimeout(function () {
                        $('.prev-6-2').prop('disabled', false);
                    }, 500);
                }
            }
        });
        function s6p1slideToNextImage() {
            let currentImage = $('.s6p1-img:not(.d-none)');
            let nextImage = currentImage.next('.s6p1-img');

            let currentRectangle = $('.yellow-rectangle:not(.grey)');
            let nextRectangle = currentRectangle.parent().next().find('.yellow-rectangle');

            let currentContent = $('.s6p1-content:not(.d-none)');
            let nextContent = currentContent.next('.s6p1-content');

            if (nextImage.length === 0) {
                nextImage = $('.s6p1-img.s6p1-img-first');
            }

            if (nextRectangle.length === 0) {
                nextRectangle = $('.first_rectangle_y');
            }

            if (nextContent.length === 0) {
                nextContent = $('.first_content_s6');
            }

            currentImage.fadeOut(1000);
            currentImage.addClass('d-none');
            nextImage.fadeIn(1000)
            nextImage.removeClass('d-none');

            currentRectangle.addClass('grey');
            nextRectangle.removeClass('grey');

            currentContent.addClass('d-none');
            nextContent.removeClass('d-none');
        }

        function s6p1slideToPrevImage() {
            let currentImage = $('.s6p1-img:not(.d-none)');
            let nextImage = currentImage.prev('.s6p1-img');

            let currentRectangle = $('.yellow-rectangle:not(.grey)');
            let nextRectangle = currentRectangle.parent().prev().find('.yellow-rectangle');

            let currentContent = $('.s6p1-content:not(.d-none)');
            let nextContent = currentContent.prev('.s6p1-content');
            console.log(nextContent.length)

            if (nextImage.length === 0) {
                nextImage = $('.s6p1-img.s6p1-img-last');
            }

            if (nextRectangle.length === 0) {
                nextRectangle = $('.last_rectangle_y');
            }

            if (nextContent.length === 0) {
                nextContent = $('.last-content-s6');
            }

            currentImage.fadeOut(1000);
            currentImage.addClass('d-none');
            nextImage.fadeIn(1000)
            nextImage.removeClass('d-none');

            currentRectangle.addClass('grey');
            nextRectangle.removeClass('grey');

            currentContent.addClass('d-none');
            nextContent.removeClass('d-none');

        }
    });
</script>

<script>
    $(document).ready(function () {
        $('.next-6-2').click(function () {
            s6p2slideToNextImage();
        });
        $('.prev-6-2').click(function () {
            s6p2slideToPrevImage();
        });
        let intervalId;

        function s6p2startAutoPlay() {
            intervalId = setInterval(function () {
                s6p2slideToNextImage();
            }, 15000); // Thời gian giữa các lần click (ở đây là 2000ms = 2 giây)
        }

        function s6p2stopAutoPlay() {
            clearInterval(intervalId);
        }

        s6p2startAutoPlay(); // Bắt đầu auto play khi trang được tải

        $('.next-6-2').hover(function () {
            s6p2stopAutoPlay();
        }, function () {
            s6p2startAutoPlay();
        });

        $('.prev-6-2').hover(function () {
            s6p2stopAutoPlay();
        }, function () {
            s6p2startAutoPlay();
        });

        var isTouching = false;
        var touchStartX = 0;
        var touchEndX = 0;
        var threshold = 50; // Ngưỡng di chuyển tối thiểu để kích hoạt hành động
        var touch_area = $('.section_6-2-mobile');

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
                    s6p2stopAutoPlay();
                    s6p2slideToNextImage();
                    setTimeout(function () {
                        $('.next-6-2').prop('disabled', false);
                    }, 500);
                }
                if (swipeLength < -threshold) {
                    // Lướt chạm sang trái
                    // Kích hoạt hành động cho nút bấm sang trái
                    console.log('prev_mobile');
                    $('.prev').prop('disabled', true);
                    s6p2stopAutoPlay();
                    s6p2slideToPrevImage();
                    setTimeout(function () {
                        $('.prev-6-2').prop('disabled', false);
                    }, 500);
                }
            }
        });
        function s6p2slideToNextImage() {
            let currentImage = $('.s6p2-img:not(.d-none)');
            let nextImage = currentImage.next('.s6p2-img');

            let currentRectangle = $('.rectangle-red-s6:not(.grey)');
            let nextRectangle = currentRectangle.parent().next().find('.rectangle-red-s6');

            let currentContent = $('.s6p2-content:not(.d-none)');
            let nextContent = currentContent.next('.s6p2-content');

            if (nextImage.length === 0) {
                nextImage = $('.s6p2-img.s6p2-img-first');
            }

            if (nextRectangle.length === 0) {
                nextRectangle = $('.first-rectangle-6');
            }

            if (nextContent.length === 0) {
                nextContent = $('.s6p2-first-content');
            }

            currentImage.fadeOut(1000);
            currentImage.addClass('d-none');
            nextImage.fadeIn(1000)
            nextImage.removeClass('d-none');

            currentRectangle.addClass('grey');
            nextRectangle.removeClass('grey');

            currentContent.addClass('d-none');
            nextContent.removeClass('d-none');
        }

        function s6p2slideToPrevImage() {
            let currentImage = $('.s6p2-img:not(.d-none)');
            let nextImage = currentImage.prev('.s6p2-img');

            let currentRectangle = $('.rectangle-red-s6:not(.grey)');
            let nextRectangle = currentRectangle.parent().prev().find('.rectangle-red-s6');

            let currentContent = $('.s6p2-content:not(.d-none)');
            let nextContent = currentContent.prev('.s6p2-content');
            console.log(nextContent.length)

            if (nextImage.length === 0) {
                nextImage = $('.s6p2-img-last');
            }

            if (nextRectangle.length === 0) {
                nextRectangle = $('.last-rectangle-6');
            }

            if (nextContent.length === 0) {
                nextContent = $('.last-content-s6p2');
            }

            currentImage.fadeOut(1000);
            currentImage.addClass('d-none');
            nextImage.fadeIn(1000)
            nextImage.removeClass('d-none');

            currentRectangle.addClass('grey');
            nextRectangle.removeClass('grey');

            currentContent.addClass('d-none');
            nextContent.removeClass('d-none');

        }
    });
</script>
