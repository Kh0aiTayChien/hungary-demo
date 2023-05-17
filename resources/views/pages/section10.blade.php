<style>
    .section10 {
        width: 100vw;
        /*height: 100vh;*/
        background-image: url('{{asset('images/sec10/sec10.png')}}');
        background-repeat: no-repeat;
        background-position: center;
        -webkit-background-size: cover;
        -moz-background-size: cover;
        -o-background-size: cover;
        background-size: cover;
        display: flex;
        align-items: stretch;
        /*overflow-x: hidden;*/
        /*overflow: hidden;*/
        margin: 0;
        padding: 0;
        /*overflow-x: hidden;*/
    }

    .section10-mobile {
        width: 100vw;
        /*height: 150vh;*/
        background-image: url('{{asset('images/sec10/sec10.png')}}');
        background-repeat: no-repeat;
        background-position: center;
        -webkit-background-size: cover;
        -moz-background-size: cover;
        -o-background-size: cover;
        background-size: cover;
        display: flex;
        align-items: stretch;
        /*overflow-x: hidden;*/
        /*overflow: hidden;*/
        margin: 0;
        padding: 0;
        /*overflow-x: hidden;*/
    }
    @media screen and (min-width: 1100px) {
        .section10 {
            display: block; !important;
        }
        .section10-mobile {
            display: none !important;
        }
    }

    @media screen and (max-width: 1100px) {
        .section10-mobile {
            display: block !important;
        }
        .section10 {
            display: none !important;
        }
    }

    .cen-logo {
        float: left; /* Dịch chuyển hình ảnh sang trái */
        margin-left: -10%; /* Đặt margin trái âm để hẳn ra ngoài lề so với col-6 */
    }

    .form-control {
        height: 4rem;
    }

    .form-control-last {
        height: 6rem;
    }
    .submit-text{
        font-family: 'Mulish-ExtraBold', sans-serif;
        font-weight: bold;
        font-size: xx-large;
        letter-spacing: 0.5rem;
    }
    .submit-text-m{
        font-family: 'Mulish-ExtraBold', sans-serif;
        font-weight: bold;
        font-size: large;
        letter-spacing: 0.5rem;
    }


</style>
<div class="section10 d-flex justify-content-center " style="">
    <div class="p-5 row " style="width: 60%; margin-top: 10%">
        <div class="col-6">
            <div>
                <img src="{{asset('images/sec10/donvidoitac.svg')}}" alt="" class="" style="width: 30%">
            </div>
            <div>
                <img src="{{asset('images/sec10/cen-logo.svg')}}" alt="" class="cen-logo" style="width: 50%">
                <img src="{{asset('images/sec10/danube.svg')}}" alt="" class="cen-logo"
                     style="width: 50%; margin-top: -5%">
            </div>
            <div>
                <img src="{{asset('images/sec10/lienhevoichungtoi.svg')}}" alt="" class="mt-5" style="width: 50%">
            </div>
            <div class="mt-5">
                <img src="{{asset('images/sec10/phone.svg')}}" alt="" class="" style="width: 5%">
                <span class="text-white ms-3"> 096 569 1688</span>
            </div>
            <div class="mt-2">
                <img src="{{asset('images/sec10/mail.svg')}}" alt="" class="" style="width: 5%">
                <span class="text-white ms-3"> huyynguyentherealadvisor@gmail.com</span>
            </div>
            <div class="mt-2">
                <img src="{{asset('images/sec10/map.svg')}}" alt="" class="" style="width: 5%">
                <span class="text-white ms-3"> Tầng 1 - 137  Nguyễn Ngọc Vũ</span>
                <br>
                <span class="text-white ms-5 "> Trung Hòa, Cầu Giấy, Hà Nội</span>
            </div>

        </div>
        <div class="col-6">
            <div>
                <img src="{{asset('images/sec10/dangkidenhan.svg')}}" alt="" class="" style="width: 90%">
            </div>
            <div class="mt-4">
                <img src="{{asset('images/sec10/chuongtrinhva.svg')}}" alt="" class="" style="width: 80%">
            </div>

            <form class="form-inline mt-3">
                <div class="form-group mt-1">
                    <label for="inputName" class="sr-only">Họ và tên:</label>
                    <input type="text" class="form-control" id="inputName" placeholder="Họ và tên">
                </div>
                <div class="form-group  mt-2">
                    <label for="inputEmail" class="sr-only">Email:</label>
                    <input type="email" class="form-control" id="inputEmail" placeholder="Email">
                </div>
                <div class="form-group  mt-2">
                    <label for="inputEmail" class="sr-only"></label>
                    <input type="email" class="form-control" id="inputEmail" placeholder="Số điện thoại:">
                </div>
                <div class="form-group  mt-2">
                    <label for="inputEmail" class="sr-only">Mức đầu tư dự kiến:</label>
                    <input type="email" class="form-control" id="inputEmail" placeholder="Mức đầu tư dự kiến">
                </div>
                <div class="form-group mt-2">
                    <label for="inputEmail" class="sr-only"></label>
                    <textarea class="form-control form-control-last" id="inputEmail" placeholder="Anh/chị đang quan tâm tới vấn đề gì của chương trình?
(loại hình căn hộ, thủ tục đăng ký, hợp đồng, v.v.)"></textarea>
                </div>
                <div class="form-group mt-2">
                    <button type="submit" class="btn btn-submit form-control" style="background-color: #E7C57E">
                        <p class="submit-text">NHẬN THÔNG TIN</p>
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>
<div class="section10-mobile d-flex justify-content-center " style="">
    <div class="p-5">
        <div>
            <img src="{{asset('images/sec10/dangkidenhan.svg')}}" alt="" class="" style="width: 100%">
        </div>
        <div class="mt-4">
            <img src="{{asset('images/sec10/chuongtrinhva.svg')}}" alt="" class="" style="width: 100%">
        </div>

        <form class="form-inline mt-3">
            <div class="form-group mt-1">
                <label for="inputName" class="sr-only">Họ và tên:</label>
                <input type="text" class="form-control" id="inputName" placeholder="Họ và tên">
            </div>
            <div class="form-group  mt-2">
                <label for="inputEmail" class="sr-only">Email:</label>
                <input type="email" class="form-control" id="inputEmail" placeholder="Email">
            </div>
            <div class="form-group  mt-2">
                <label for="inputEmail" class="sr-only"></label>
                <input type="email" class="form-control" id="inputEmail" placeholder="Số điện thoại:">
            </div>
            <div class="form-group  mt-2">
                <label for="inputEmail" class="sr-only">Mức đầu tư dự kiến:</label>
                <input type="email" class="form-control" id="inputEmail" placeholder="Mức đầu tư dự kiến">
            </div>
            <div class="form-group mt-2">
                <label for="inputEmail" class="sr-only"></label>
                <textarea class="form-control form-control-last" id="inputEmail" placeholder="Anh/chị đang quan tâm tới vấn đề gì của chương trình?
(loại hình căn hộ, thủ tục đăng ký, hợp đồng, v.v.)"></textarea>
            </div>
            <div class="form-group mt-2">
                <button type="submit" class="btn btn-submit form-control" style="background-color: #E7C57E">
                    <p class="submit-text-m">NHẬN THÔNG TIN</p>
                </button>
            </div>
        </form>
    </div>
    <div class="p-5  " style="width: 100%;">
        <div class="">
            <div>
                <img src="{{asset('images/sec10/donvidoitac.svg')}}" alt="" class="" style="width: 30%">
            </div>
            <div>
                <img src="{{asset('images/sec10/cen-logo.svg')}}" alt="" class="cen-logo" style="width: 50%">
                <img src="{{asset('images/sec10/danube.svg')}}" alt="" class="cen-logo"
                     style="width: 50%; margin-top: -5%">
            </div>
            <div>
                <img src="{{asset('images/sec10/lienhevoichungtoi.svg')}}" alt="" class="mt-5" style="width: 50%">
            </div>
            <div class="mt-5">
                <img src="{{asset('images/sec10/phone.svg')}}" alt="" class="" style="width: 5%">
                <span class="text-white ms-3"> 096 569 1688</span>
            </div>
            <div class="mt-2">
                <img src="{{asset('images/sec10/mail.svg')}}" alt="" class="" style="width: 5%">
                <span class="text-white ms-3"> huyynguyentherealadvisor@gmail.com</span>
            </div>
            <div class="mt-2">
                <img src="{{asset('images/sec10/map.svg')}}" alt="" class="" style="width: 5%">
                <span class="text-white ms-3"> Tầng 1 - 137  Nguyễn Ngọc Vũ</span>
                <br>
                <span class="text-white ms-5 "> Trung Hòa, Cầu Giấy, Hà Nội</span>
            </div>

        </div>

    </div>
</div>

