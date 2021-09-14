<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FrontFileController extends Controller
{
    public function robots_txt(){
        return "User-agent: * \nDisallow: ";
    }
    public function manifest_json(){
            return json_decode('{
              "name": "'.env('APP_NAME').'",
              "short_name": "'.env('APP_NAME').'",
              "start_url": "'.env('APP_URL').'",
              "display": "standalone",
              "theme_color": "#243c6d",
              "background_color": "#1565c0",
              "orientation": "portrait",
              "icons": [
                {
                  "src": "/images/icons/logo-new-blue-icon.png",
                  "sizes": "36x36",
                  "type": "image/png"
                },
                {
                  "src": "/images/icons/logo-new-blue-icon.png",
                  "sizes": "48x48",
                  "type": "image/png"
                },
                {
                  "src": "/images/icons/logo-new-blue-icon.png",
                  "sizes": "60x60",
                  "type": "image/png"
                },
                {
                  "src": "/images/icons/logo-new-blue-icon.png",
                  "sizes": "72x72",
                  "type": "image/png"
                },
                {
                  "src": "/images/icons/logo-new-blue-icon.png",
                  "sizes": "76x76",
                  "type": "image/png"
                },
                {
                  "src": "/images/icons/logo-new-blue-icon.png",
                  "sizes": "96x96",
                  "type": "image/png"
                },
                {
                  "src": "/images/icons/logo-new-blue-icon.png",
                  "sizes": "120x120",
                  "type": "image/png"
                },
                {
                  "src": "/images/icons/logo-new-blue-icon.png",
                  "sizes": "152x152",
                  "type": "image/png"
                },
                {
                  "src": "/images/icons/logo-new-blue-icon.png",
                  "sizes": "180x180",
                  "type": "image/png"
                },
                {
                  "src": "/images/icons/logo-new-blue-icon.png",
                  "sizes": "192x192",
                  "type": "image/png"
                },
                {
                  "src": "/images/icons/logo-new-blue-icon.png",
                  "sizes": "512x512",
                  "type": "image/png"
                }
              ]
            }');
    }
}
