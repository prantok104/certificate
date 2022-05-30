<?php

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CertificateController extends Controller
{

    public function certificate(){
        $image  = imagecreatefromjpeg(public_path('certificate.jpg'));
        $font = public_path('KronaOne-Regular.ttf');
        $text = 'Md. Mizanur Rahman';
        $date = "May 15, 2022";
        $course_name = "Advanced Digital Literacy Course";
        $color = imagecolorallocate($image, 39, 28, 112);
        $color_date = imagecolorallocate($image, 99, 104, 116);
        $color_course = imagecolorallocate($image, 0, 0, 0);
        imagettftext($image, 80, 0, 200, 1180, $color, $font, $text);
        imagettftext($image, 50, 0, 200, 1010, $color_date, $font, $date);
        imagettftext($image, 45, 0, 200, 1420, $color_course, $font, $course_name);
        header("Content-Type: image/jpeg");
        imagejpeg($image);
        imagedestroy($image);
        return view("{$this->folder}.certificate");
    }
}