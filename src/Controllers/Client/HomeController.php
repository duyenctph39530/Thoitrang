<?php
namespace Fpt\ThoiTrang\Controllers\Client;
use Fpt\ThoiTrang\Commons\Controller;
// use eftec\bladeone\BladeOne;
class HomeController extends Controller
{
   public function index()
   {
      $name="Chu thị Duyên";

    $this->renderViewClient('home',[
      'name'=>$name
    ]);
   }
}