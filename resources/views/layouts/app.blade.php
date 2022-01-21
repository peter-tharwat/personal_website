@php 
$settings=\App\Models\User::first();
@endphp
<!doctype html>
<html lang="ar" dir="rtl">
  <head>  
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    {!!$settings->header_text!!}
    

    @notifyCss
    <link rel="stylesheet" type="text/css" href="https://nafezly.com/css/cust-fonts.css">
    <link rel="stylesheet" type="text/css" href="https://nafezly.com/css/fontawsome.min.css">
    <link rel="stylesheet" type="text/css" href="https://nafezly.com/css/responsive-font.css">
    @include('seo.index')
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.rtl.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fancyapps/ui/dist/fancybox.css" />
    <script src="https://cdn.jsdelivr.net/npm/@fancyapps/ui@4.0/dist/fancybox.umd.js"></script>
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
            background: {{$settings->main_color}}!important;
            color: #fff!important;
        }
        .menu-link:not(.active):hover .menu-div{
          background: {{$settings->hover_color}}!important;
        }
        .row{
          margin: 0px;
        }
        .main{
          opacity: 0;
          min-height: 60vh;
        }
        .optimize-fonts *{
          font-family: 'naskh',sans-serif!important;
        }
        .optimize-fonts * {
          line-height: 1.9;
        }
        .optimize-fonts img{
          cursor: pointer;
          text-align: center!important;
          display: inline-block;
        }

        .optimize-fonts blockquote ,.optimize-fonts blockquote *{
          text-align: center;
        }

        .optimize-fonts a{
          color: #2196f3;
        }
        .optimize-fonts a.btn{
          color: #fff;
        }
        .optimize-fonts ,
        .optimize-fonts h1,
        .optimize-fonts h2,
        .optimize-fonts h3,
        .optimize-fonts h4,
        .optimize-fonts h5,
        .optimize-fonts h6,
        .optimize-fonts h1 *,
        .optimize-fonts h2 *,
        .optimize-fonts h3 *,
        .optimize-fonts h4 *,
        .optimize-fonts h5 *,
        .optimize-fonts h6 *{
          font-family: 'kufi-arabic',sans-serif!important;
        }
        a{
          color: #333;
        }
        .fancybox__container , .fancybox__container *{
          direction: ltr;
        }
    </style>
  </head>
  <body>
    
    <x:notify-messages />
    @if($errors->any())
    <div class="col-12" style="position: absolute;top: 80px;left: 10px;"> 
        {!! implode('', $errors->all('<div class="alert-click-hide alert alert-danger alert alert-danger col-9 col-xl-3 rounded-0 mb-1" style="position: fixed!important;z-index: 11;opacity:.9;left:25px;cursor:pointer;" onclick="$(this).fadeOut();">:message</div>')) !!}
      </div>
    @endif

    @notifyJs

    <div class="col-12 p-0">
      <div class="container px-2 py-5 p-md-5 my-0 my-md-5 ">
        <div class="col-12 p-0 text-center">
          <img src="{{$settings->avatar()}}" style="width:150px;border-radius:50%;" class="d-inline-block">
        </div>
        <div class="col-12 py-3">
          <h1 class="font-5  text-center">{{$settings->name}}</h1>
          <div class="col-12 px-0 d-flex justify-content-center pt-2 pb-2" style="direction: ltr;flex-wrap: wrap;">

                  @if($settings->facebook_link!=null)
                  <a href="{{$settings->facebook_link}}" class="d-inline-block mx-1" style="color:{{$settings->main_color}}">
                    <span class="fab fa-facebook"></span>
                  </a>
                  @endif
                  @if($settings->twitter_link!=null)
                  <a href="{{$settings->twitter_link}}" class="d-inline-block mx-1" style="color:{{$settings->main_color}}">
                    <span class="fab fa-twitter"></span>
                  </a>
                  @endif
                  @if($settings->instagram_link!=null)
                  <a href="{{$settings->instagram_link}}" class="d-inline-block mx-1" style="color:{{$settings->main_color}}">
                    <span class="fab fa-instagram"></span>
                  </a>
                  @endif
                  @if($settings->nafezly_link!=null)
                  <a href="{{$settings->nafezly_link}}" class="d-inline-block mx-1" style="color:{{$settings->main_color}}">
                    <img src="/icons/nafezly.svg" style="width:17px" class="mt-1">
                  </a>
                  @endif
                  @if($settings->phone!=null)
                  <a href="tel:{{$settings->phone}}" class="d-inline-block mx-1" style="color:{{$settings->main_color}}">
                    <span class="fas fa-phone"></span>
                  </a>
                  @endif
                  @if($settings->phone2!=null)
                  <a href="tel:{{$settings->phone2}}" class="d-inline-block mx-1" style="color:{{$settings->main_color}}">
                    <span class="fas fa-phone"></span>
                  </a>
                  @endif
                  @if($settings->contact_email!=null)
                  <a href="mailto:{{$settings->contact_email}}" class="d-inline-block mx-1" style="color:{{$settings->main_color}}">
                    <span class="fas fa-envelope-open"></span>
                  </a>
                  @endif
                  @if($settings->telegram_link!=null)
                  <a href="{{$settings->telegram_link}}" class="d-inline-block mx-1" style="color:{{$settings->main_color}}">
                    <span class="fab fa-telegram"></span>
                  </a>
                  @endif
                  @if($settings->linkedin_link!=null)
                  <a href="{{$settings->linkedin_link}}" class="d-inline-block mx-1" style="color:{{$settings->main_color}}">
                    <span class="fab fa-linkedin"></span>
                  </a>
                  @endif
                  @if($settings->whatsapp_link!=null)
                  <a href="{{$settings->whatsapp_link}}" class="d-inline-block mx-1" style="color:{{$settings->main_color}}">
                    <span class="fab fa-whatsapp"></span>
                  </a>
                  @endif
                  @if($settings->youtube_link!=null)
                  <a href="{{$settings->youtube_link}}" class="d-inline-block mx-1" style="color:{{$settings->main_color}}">
                    <span class="fab fa-youtube"></span>
                  </a>
                  @endif
                  @if($settings->tiktok_link!=null)
                  <a href="{{$settings->tiktok_link}}" class="d-inline-block mx-1" style="color:{{$settings->main_color}}">
                    <span class="far fa-globe"></span>
                  </a>
                  @endif
                  @if($settings->another_link1!=null)
                  <a href="{{$settings->another_link1}}" class="d-inline-block mx-1" style="color:{{$settings->main_color}}">
                    <span class="far fa-globe"></span>
                  </a>
                  @endif
                  @if($settings->another_link2!=null)
                  <a href="{{$settings->another_link2}}" class="d-inline-block mx-1" style="color:{{$settings->main_color}}">
                    <span class="far fa-globe"></span>
                  </a>
                  @endif
                  @if($settings->another_link3!=null)
                  <a href="{{$settings->another_link3}}" class="d-inline-block mx-1" style="color:{{$settings->main_color}}">
                    <span class="far fa-globe"></span>
                  </a>
                  @endif
                </div>

          <div class="col-12 p-0 justify-content-center d-flex row py-4">
            <div class="p-1  text-center font-1 d-inline-block" style="width: 90px;">
              <a href="{{route('front.index')}}/" class="d-block menu-link" style="border-radius: 7px;color: #232323;">
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
            @if($settings->show_portfolios)
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
            @endif
            @if($settings->show_clients)
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
            @endif
            @if($settings->show_articles)
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
            @endif
            @if($settings->show_donate)
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
            @endif
            @if($settings->show_contact)
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
            @endif
            @if($settings->show_hire)
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
            @endif
          </div>
          <div class="col-12 p-0" style="overflow:hidden;position: relative;">
            <div style="position:absolute;width: 100%;height: 40vh;z-index: 1;transition: .5s all ease-in-out;display: flex;" class="justify-content-center align-items-center loading-overlay">
              <img src="/images/loading.gif"  class="d-inline-block" style="width:600px;max-width: 100%;">
            </div>
            <div class="col-12 p-0 main" style="transition: .5s all ease-in-out;">
              @yield('content')
            </div>
            <div class="col-12 py-2">
              <div style="width:650px;max-width: 100%;text-align: justify;" class="mx-auto p-3 font-2 border-top justify-content-center">
                <div class="mx-auto px-0  pt-3" style="width:180px ;font-size: 12px;">
                  جميع الحقوق محفوظة &copy; {{date('Y')}}
                </div>
              </div>
            </div>
          </div>
          
        </div>
      </div>
    </div>
    
    <!-- <script src="https://unpkg.com/vue@next"></script> -->
   
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
    <script type="text/javascript">
        $('a[href="' + window.location.href.split('?')[0] + '"] div,a[href="' + window.location.href.split('?')[0] + '"],a[href="' + window.location.href + '"] div,a[href="' + window.location.href + '"]').addClass('active');
        setTimeout(function(){
          $('.main').css({'opacity':'1'});
          $('.loading-overlay').fadeOut(200);
        },1200);
        
        Fancybox.bind("[data-fancybox]", {
          // Your options go here
        });
        Fancybox.bind(".optimize-fonts img", {
          
        });

    </script>
    {!!$settings->footer_text!!}
  </body>
</html>