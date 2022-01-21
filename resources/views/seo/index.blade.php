@php 
$settings=\App\Models\User::firstOrFail();
$website_url=env("APP_URL");
$website_name=$settings->name;
$website_logo=$settings->website_logo();
$page_image= isset($page_image)&&$page_image !=null?$page_image:$settings->avatar();
$page_title= isset($page_title)&&$page_title !=null?$settings->name.' | '.$page_title:$settings->name;
$page_keywords=$settings->name;
$page_description=isset($page_description)&&$page_description !=null?$page_description:$settings->bio;
$phone=$settings->phone;
@endphp

<title> {{$page_title}} </title>

<script type="application/ld+json">
{
    "@context": "http://schema.org",
    "@type": "Organization",
    "name": "{{$website_name}}",
    "url": "{{$website_url}}",
    "logo": "{{$website_logo}}",
    "sameAs": [

        @if($settings->twitter_link!=null)
        {{$settings->twitter_link}},
        @endif
        @if($settings->facebook_link!=null)
        {{$settings->facebook_link}},
        @endif
        @if($settings->youtube_link!=null)
        {{$settings->youtube_link}},
        @endif
        @if($settings->instagram_link!=null)
        {{$settings->instagram_link}},
        @endif
        @if($settings->linkedin_link!=null)
        {{$settings->linkedin_link}},
        @endif
    ],
    "contactPoint": [{
            "@type": "ContactPoint",
            "telephone": "{{$phone}}",
            "contactType": "customer support"
        },
        {
            "@type": "ContactPoint",
            "telephone": "{{$phone}}",
            "contactType": "technical support"
        }, {
            "@type": "ContactPoint",
            "telephone": "{{$phone}}",
            "contactType": "billing support"
        }
    ]
}
</script>
<link rel="manifest" href="{{env('APP_URL')}}/manifest.json">
<meta name="theme-color" content="#314459">
<meta name="mobile-web-app-capable" content="no">
<meta name="application-name" content="{{$website_name}}">
<link rel="icon" sizes="512x512" href="{{$website_logo}}">

<meta name="facebook-domain-verification" content="vymdke86bl9vdcyleijy0r173c6k7c" />

<!-- Add to homescreen for Safari on iOS -->
<meta name="apple-mobile-web-app-capable" content="no">
<meta name="apple-mobile-web-app-status-bar-style" content="black">
<meta name="apple-mobile-web-app-title" content="{{$website_name}}">
<link rel="apple-touch-icon" href="{{$website_logo}}">

<link href="{{$website_logo}}" media="(device-width: 320px) and (device-height: 568px) and (-webkit-device-pixel-ratio: 2)" rel="apple-touch-startup-image" />
<link href="{{$website_logo}}" media="(device-width: 375px) and (device-height: 667px) and (-webkit-device-pixel-ratio: 2)" rel="apple-touch-startup-image" />
<link href="{{$website_logo}}" media="(device-width: 621px) and (device-height: 1104px) and (-webkit-device-pixel-ratio: 3)" rel="apple-touch-startup-image" />
<link href="{{$website_logo}}" media="(device-width: 375px) and (device-height: 812px) and (-webkit-device-pixel-ratio: 3)" rel="apple-touch-startup-image" />
<link href="{{$website_logo}}" media="(device-width: 414px) and (device-height: 896px) and (-webkit-device-pixel-ratio: 2)" rel="apple-touch-startup-image" />
<link href="{{$website_logo}}" media="(device-width: 414px) and (device-height: 896px) and (-webkit-device-pixel-ratio: 3)" rel="apple-touch-startup-image" />
<link href="{{$website_logo}}" media="(device-width: 768px) and (device-height: 1024px) and (-webkit-device-pixel-ratio: 2)" rel="apple-touch-startup-image" />
<link href="{{$website_logo}}" media="(device-width: 834px) and (device-height: 1112px) and (-webkit-device-pixel-ratio: 2)" rel="apple-touch-startup-image" />
<link href="{{$website_logo}}" media="(device-width: 834px) and (device-height: 1194px) and (-webkit-device-pixel-ratio: 2)" rel="apple-touch-startup-image" />
<link href="{{$website_logo}}" media="(device-width: 1024px) and (device-height: 1366px) and (-webkit-device-pixel-ratio: 2)" rel="apple-touch-startup-image" /> 
<!-- Tile for Win8 -->
<meta name="msapplication-TileColor" content="#1565c0">
<meta name="msapplication-TileImage" content="{{$website_logo}}">
<script type="text/javascript">
    // Initialize the service worker
    if ('serviceWorker' in navigator) {
        navigator.serviceWorker.register('/serviceworker.js', {
            scope: '.'
        }).then(function (registration) { 
            console.log('Laravel PWA: ServiceWorker registration successful with scope: ', registration.scope);
        }, function (err) { 
            console.log('Laravel PWA: ServiceWorker registration failed: ', err);
        });
    }
</script>

<link rel="icon" type="image/png" href="" /> 
<link rel='alternate' href="{{env('APP_URL')}}{{ urldecode(str_replace('/index.php', '', \Request::getRequestUri()))   }}" hreflang='x-default' />
<link rel="canonical" href="{{env('APP_URL')}}{{ urldecode(str_replace('/index.php', '', \Request::getRequestUri()))  }}">
<!-- SEO Meta -->
<meta name="author" content="{{$website_name}}" />
<!-- end SEO Meta -->

<!-- favicon, cards, tiles, icons -->
<meta name="description" content="{{$page_description}}">
<meta name="keywords" content="{{$page_keywords}}">

<meta name="msapplication-square70x70logo" content="{{$website_logo}}" />
<meta name="msapplication-square150x150logo" content="{{$website_logo}}" />
<meta name="msapplication-wide310x150logo" content="{{$website_logo}}" />
<meta name="msapplication-square310x310logo" content="{{$website_logo}}" />
<link rel="apple-touch-icon-precomposed" href="{{$website_logo}}" />
<!-- end favicon -->
<!-- facebook open graph -->



<meta property="og:type"               content="website" />
<meta property="og:site_name"          content="{{$website_name}}" />
<meta property="og:locale" content="ar_AR"/>
<meta property="og:locale:alternate" content="ar_AR"/>
<meta property="og:url"                content="{{$website_url}}/{{ (\Request::path()=="/")?"": \Request::path() }}" />
<meta property="og:title"              content="{{$page_title}}" />
<meta property="og:description"        content="{{$page_description}}" />
<meta property="og:image" content="{{$page_image}}" />
{{-- <meta property="og:image:width" content="256"/>
<meta property="og:image:height" content="256"/> --}}

 
<!-- Schema MicroData (Google+,Google, Yahoo, Bing,) -->
<meta itemprop="name" content="{{$page_title}}" />
<meta itemprop="url" content="{{$website_url}}" />
<meta itemprop="author" content="{{$website_name}}" />
<meta itemprop="image" content="{{$page_image}}" />
<meta itemprop="description" content="{{$page_description}}" />
<!-- End Schema MicroData -->
<!-- twitter cards -->
<meta name="twitter:image" content="{{$page_image}}" />
<meta name="twitter:card" content="summary" />
<meta name="twitter:site" content="@Author" />
<meta name="twitter:creator" content="@Author" />
<meta name="twitter:title" content="{{$page_title}}" />
<meta name="twitter:image:src" {{$page_image}}/>
<meta name="twitter:description" content="{{$page_description}}" />
<!-- end twitter cards -->


<link rel='help' title='FAQ' href='{{$website_url}}'/>
<meta http-equiv="Cache-Control" content="no-cache, no-store, must-revalidate, no-transform">
<meta http-equiv="Pragma" content="no-cache">
<meta http-equiv="Expires" content="-1">