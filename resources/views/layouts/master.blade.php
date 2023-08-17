<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link href="{{asset('/css/styles.css')}}" rel="stylesheet">
    <link href="{{asset('/css/stylessec3.css')}}" rel="stylesheet">
    <link href="{{asset('/css/stylessec4.css')}}" rel="stylesheet">
    <link href="{{asset('/css/stylessec5.css')}}" rel="stylesheet">
    <link href="{{asset('/css/stylessec7.css')}}" rel="stylesheet">
    <link href="{{asset('/css/stylessec8.css')}}" rel="stylesheet">
    <link href="{{asset('/css/stylessec9.css')}}" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
            crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"/>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.4/jquery.js"
            integrity="sha512-6DC1eE3AWg1bgitkoaRM1lhY98PxbMIbhgYCGV107aZlyzzvaWCW1nJW2vDuYQm06hXrW0As6OGKcIaAVWnHJw=="
            crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <link
        rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"
    />
    <script
        src="https://cdn.jsdelivr.net/gh/KodingKhurram/animate.css-dynamic@main/animate.min.js">
    </script>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    {{--    <script src="https://cdn.jsdelivr.net/jquery.validation/1.16.0/jquery.validate.min.js"></script>--}}

</head>
<style>
    .preloader {
        position: fixed;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background-color: rgba(255, 255, 255, 0.8);
        display: flex;
        align-items: center;
        justify-content: center;
        z-index: 9999; /* Đảm bảo preloader ở trên cùng */
        animation: fadeIn-preload 1.5s forwards; /* Hiệu ứng hiển thị */
    }

    /*.content-test {*/
    /*    display: none; !* Ẩn nội dung chính ban đầu *!*/
    /*}*/
    .loaded .preloader {
        display: none;
    }
    .content-test {
        opacity: 0; /* Ẩn nội dung ban đầu */
        transition: opacity 0.5s ease-in-out; /* Thêm hiệu ứng chuyển đổi */
    }
    @keyframes fadeIn-preload {
        to {
            opacity: 0;
        }
    }

    .lds-ring {
        display: inline-block;
        position: relative;
        width: 80px;
        height: 80px;
    }

    .lds-ring div {
        box-sizing: border-box;
        display: block;
        position: absolute;
        width: 64px;
        height: 64px;
        margin: 8px;
        border: 8px solid #cef;
        border-radius: 50%;
        animation: lds-ring 1.2s cubic-bezier(0.5, 0, 0.5, 1) infinite;
        border-color: red transparent transparent transparent;
    }

    .lds-ring div:nth-child(1) {
        animation-delay: -0.45s;
    }

    .lds-ring div:nth-child(2) {
        animation-delay: -0.3s;
    }

    .lds-ring div:nth-child(3) {
        animation-delay: -0.15s;
    }

    @keyframes lds-ring {
        0% {
            transform: rotate(0deg);
        }
        100% {
            transform: rotate(360deg);
        }
    }
    /*.preloader {*/
    /*    position: fixed;*/
    /*    left: 0px;*/
    /*    top: 0px;*/
    /*    width: 100%;*/
    /*    height: 100%;*/
    /*    z-index: 999999;*/
    /*    background-color: #ffffff;*/
    /*    background-position: center center;*/
    /*    background-repeat: no-repeat;*/
    /*    background-image: url(http://t.commonsupport.xyz/intenax/images/icons/preloader.svg);*/
    /*}*/
</style>
<body>
<div class="preloader">
    <div class="lds-ring">
        <div></div>
        <div></div>
        <div></div>
        <div></div>
    </div>
</div>
<div class="content-test">
    @include('layouts/header')
    @yield('section')
    @include('layouts/footer')
</div>
</body>
<script>
    $(document).ready(function () {
        // Ẩn preloader sau 0.5 giây
        setTimeout(function () {
            $(".preloader").fadeOut("slow", function () {
                // Hiển thị nội dung chính sau khi preloader ẩn
                $(".content-test").fadeIn("slow");
            });
        }, 1500);
    });
    $(document).ready(function () {
        const preloader = $(".preloader");
        preloader.addClass("loaded");

        setTimeout(function () {
            const content = $(".content-test");
            content.css("opacity", "1");
        }, 1000);
    });
    // Hide Loading Box (Preloader)
    // $(document).ready(function () {
    //     if ($('.preloader').length) {
    //         $('.preloader').delay(500).fadeOut(500);
    //     }
    // });

</script>
</html>
