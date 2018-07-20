<?php
namespace admin;
use Config\Token as Main;
use Gregwar\Captcha\CaptchaBuilder;


/**
 *
 */
class Index extends Main
{
  public function Index(){
    $captcha = new CaptchaBuilder;
    $captcha
        ->build()
        ->save('out.jpg')
    ;
  }

}


 ?>
