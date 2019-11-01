<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Intervention\Image\Facades\Image;
use Milon\Barcode\DNS2D;

class UndanganWatermarkerController extends Controller
{
    //
    public function watermarker(){
        $img = Image::make('undangan/template/undangan-sample01.jpg');
        $barcode = DNS2D::getBarcodePNG("halo.wacil.puti?", "QRCODE", "5", "5");
        $img->insert( $barcode, 'bottom-right', 70, 70);
        $img->text('Wacil', 200, 400, function($font) {
            $font->file(base_path('public/fonts/Kastella.ttf'));
            $font->size(40);
            $font->align('center');
            $font->valign('top');
        });
        $img->text('Puti', 450, 400, function($font) {
            $font->file(base_path('public/fonts/Kastella.ttf'));
            $font->size(40);
            $font->align('center');
            $font->valign('top');
        });

        return $img->response('png');
    }
}
