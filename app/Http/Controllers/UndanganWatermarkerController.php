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
        $img->text('10 Nopember 999', 320, 530, function($font) {
            $font->file(base_path('public/fonts/Kastella.ttf'));
            $font->color('#fff');
            $font->size(40);
            $font->align('center');
            $font->valign('top');
        });
        $img->text('10:00 - 15:00', 320, 595, function($font) {
            $font->file(base_path('public/fonts/Kastella.ttf'));
            $font->color('#777');
            $font->size(22);
            $font->align('center');
            $font->valign('top');
        });

        return $img->response('png');
    }
}
