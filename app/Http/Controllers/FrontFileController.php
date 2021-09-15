<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FrontFileController extends Controller
{
    public function robots_txt(){
        return "User-agent: * \nDisallow: ";
    }
    public function manifest_json(){
      $settings =\App\Models\User::first();
            return json_decode('{
              "name": "'.env('APP_NAME').'",
              "short_name": "'.env('APP_NAME').'",
              "start_url": "'.env('APP_URL').'",
              "display": "standalone",
              "theme_color": "'.$settings->main_color.'",
              "background_color": "'.$settings->main_color.'",
              "orientation": "portrait",
              "icons": [
                {
                  "src": "'.$settings->website_logo().'",
                  "sizes": "36x36",
                  "type": "image/png"
                },
                {
                  "src": "'.$settings->website_logo().'",
                  "sizes": "48x48",
                  "type": "image/png"
                },
                {
                  "src": "'.$settings->website_logo().'",
                  "sizes": "60x60",
                  "type": "image/png"
                },
                {
                  "src": "'.$settings->website_logo().'",
                  "sizes": "72x72",
                  "type": "image/png"
                },
                {
                  "src": "'.$settings->website_logo().'",
                  "sizes": "76x76",
                  "type": "image/png"
                },
                {
                  "src": "'.$settings->website_logo().'",
                  "sizes": "96x96",
                  "type": "image/png"
                },
                {
                  "src": "'.$settings->website_logo().'",
                  "sizes": "120x120",
                  "type": "image/png"
                },
                {
                  "src": "'.$settings->website_logo().'",
                  "sizes": "152x152",
                  "type": "image/png"
                },
                {
                  "src": "'.$settings->website_logo().'",
                  "sizes": "180x180",
                  "type": "image/png"
                },
                {
                  "src": "'.$settings->website_logo().'",
                  "sizes": "192x192",
                  "type": "image/png"
                },
                {
                  "src": "'.$settings->website_logo().'",
                  "sizes": "512x512",
                  "type": "image/png"
                }
              ]
            }');
    }
}
