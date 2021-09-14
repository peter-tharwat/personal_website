<!doctype html>
<html lang="ar" dir="rtl">
  <head>  
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">


    <link rel="stylesheet" type="text/css" href="https://nafezly.com/css/cust-fonts.css">
    <link rel="stylesheet" type="text/css" href="https://nafezly.com/css/fontawsome.min.css">
    <link rel="stylesheet" type="text/css" href="https://nafezly.com/css/responsive-font.css">
    @include('seo.index')
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.rtl.min.css">
    <style type="text/css">
        *{
          direction: rtl;
          text-decoration: none!important;
        }
        p{
          display: inline-block;

        }
        .main-box-styles {
            background: #fff;
            width: 100%;
            box-shadow: 0px 0px 10px #ddd;
        }
        .menu-link.active .menu-div{
            background: #ff9800!important;
            color: #fff!important;
        }
        .menu-link:not(.active):hover .menu-div{
          background: #fff4e4!important;
        }
        .row{
          margin: 0px;
        }
        .main{
          opacity: 0;
        }
    </style>
    <title> Peter Ayoub </title>
  </head>
  <body>
    <div class="col-12 p-0">
      <div class="container px-2 py-5 p-md-5 my-0 my-md-5 ">
        <div class="col-12 p-0 text-center">
          <img src="images/avatar.jpg" style="width:150px;border-radius:50%;" class="d-inline-block">
        </div>
        <div class="col-12 py-3">
          <h1 class="font-5  text-center">Peter Ayoub</h1>
          <div class="col-12 p-0 justify-content-center d-flex row py-4">
            <div class="p-1  text-center font-1 d-inline-block" style="width: 90px;">
              <a href="{{route('front.index')}}" class="d-block menu-link" style="border-radius: 7px;color: #232323;">
                <div class="col-12 p-2 text-center main-box-styles menu-div d-flex align-items-center" style="color: var(--bg-font-4);height: 80px;border-radius: 7px;overflow: hidden;">
                  <div class="col-12 p-0 text-center">
                  <span class="fal fa-info-circle d-inline-block  font-3" style="color: var(--bg-color-2);"></span>
                  <div class="col-12 px-0 text-center title">
                  نبذة
                  </div>
                  </div>
                </div>
              </a>
            </div>
            <div class="p-1  text-center font-1 d-inline-block" style="width: 90px;">
              <a href="{{route('front.portfolios')}}" class="d-block menu-link" style="border-radius: 7px;color: #232323;">
                <div class="col-12 p-2 text-center main-box-styles menu-div d-flex align-items-center" style="color: var(--bg-font-4);height: 80px;border-radius: 7px;overflow: hidden;">
                  <div class="col-12 p-0 text-center">
                  <span class="fal fa-images d-inline-block  font-3" style="color: var(--bg-color-2);"></span>
                  <div class="col-12 px-0 text-center title">
                  أعمالي
                  </div>
                  </div>
                </div>
              </a>
            </div>
            <div class="p-1  text-center font-1 d-inline-block" style="width: 90px;">
              <a href="{{route('front.clients')}}" class="d-block menu-link" style="border-radius: 7px;color: #232323;">
                <div class="col-12 p-2 text-center main-box-styles menu-div d-flex align-items-center" style="color: var(--bg-font-4);height: 80px;border-radius: 7px;overflow: hidden;">
                  <div class="col-12 p-0 text-center">
                  <span class="fal fa-users d-inline-block  font-3" style="color: var(--bg-color-2);"></span>
                  <div class="col-12 px-0 text-center title">
                  عملائي
                  </div>
                  </div>
                </div>
              </a>
            </div>
            <div class="p-1  text-center font-1 d-inline-block" style="width: 90px;">
              <a href="{{route('front.articles')}}" class="d-block menu-link" style="border-radius: 7px;color: #232323;">
                <div class="col-12 p-2 text-center main-box-styles menu-div d-flex align-items-center" style="color: var(--bg-font-4);height: 80px;border-radius: 7px;overflow: hidden;">
                  <div class="col-12 p-0 text-center">
                  <span class="fal fa-pencil d-inline-block  font-3" style="color: var(--bg-color-2);"></span>
                  <div class="col-12 px-0 text-center title">
                  كتاباتي
                  </div>
                  </div>
                </div>
              </a>
            </div>
            <div class="p-1  text-center font-1 d-inline-block" style="width: 90px;">
              <a href="{{route('front.donate')}}" class="d-block menu-link" style="border-radius: 7px;color: #232323;">
                <div class="col-12 p-2 text-center main-box-styles menu-div d-flex align-items-center" style="color: var(--bg-font-4);height: 80px;border-radius: 7px;overflow: hidden;">
                  <div class="col-12 p-0 text-center">
                  <span class="fal fa-hand-heart d-inline-block  font-3" style="color: var(--bg-color-2);"></span>
                  <div class="col-12 px-0 text-center title">
                  ادعمني
                  </div>
                  </div>
                </div>
              </a>
            </div>
            <div class="p-1  text-center font-1 d-inline-block" style="width: 90px;">
              <a href="{{route('front.contact')}}" class="d-block menu-link" style="border-radius: 7px;color: #232323;">
                <div class="col-12 p-2 text-center main-box-styles menu-div d-flex align-items-center" style="color: var(--bg-font-4);height: 80px;border-radius: 7px;overflow: hidden;">
                  <div class="col-12 p-0 text-center">
                  <span class="fal fa-envelope-open d-inline-block  font-3" style="color: var(--bg-color-2);"></span>
                  <div class="col-12 px-0 text-center title">
                  راسلني
                  </div>
                  </div>
                </div>
              </a>
            </div>
            <div class="p-1  text-center font-1 d-inline-block" style="width: 90px;">
              <a href="{{route('front.hire')}}" class="d-block menu-link" style="border-radius: 7px;color: #232323;">
                <div class="col-12 p-2 text-center main-box-styles menu-div d-flex align-items-center" style="color: var(--bg-font-4);height: 80px;border-radius: 7px;overflow: hidden;">
                  <div class="col-12 p-0 text-center">
                  <span class="fal fa-suitcase d-inline-block  font-3" style="color: var(--bg-color-2);"></span>
                  <div class="col-12 px-0 text-center title">
                  وظفني
                  </div>
                  </div>
                </div>
              </a>
            </div>
          </div>
          <div class="col-12 p-0" style="overflow:hidden;position: relative;">
            <div style="position:absolute;width: 100%;height: 40vh;z-index: 1;transition: .5s all ease-in-out;display: flex;" class="justify-content-center align-items-center loading-overlay">
              <img src="https://cdn.dribbble.com/users/1186261/screenshots/3718681/_______.gif"  class="d-inline-block" style="width:600px;max-width: 100%;">
            </div>
            <div class="col-12 p-0 main" style="transition: .5s all ease-in-out;">
              @yield('content')
            </div>
          </div>
          
        </div>
      </div>
    </div>
    
    <!-- <script src="https://unpkg.com/vue@next"></script> -->
    <script type="text/javascript" src="//cdn.jsdelivr.net/jquery.lazy/1.7.9/jquery.lazy.min.js"></script>
    <script type="text/javascript" src="//cdn.jsdelivr.net/jquery.lazy/1.7.9/jquery.lazy.plugins.min.js"></script>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
    <script type="text/javascript">
        $('a[href="' + window.location.href.split('?')[0] + '"] div,a[href="' + window.location.href.split('?')[0] + '"],a[href="' + window.location.href + '"] div,a[href="' + window.location.href + '"]').addClass('active');
        setTimeout(function(){
          $('.main').css({'opacity':'1'});
          $('.loading-overlay').fadeOut(200);
        },1200);
         $(function() {
            $('.lazy').Lazy();
        });
         
    </script>
  </body>
</html>