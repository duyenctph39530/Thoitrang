<?php
namespace Fpt\ThoiTrang\Controllers\Admin;

use Fpt\ThoiTrang\Commons\Controller;

class UserController extends Controller
{
   public function index()
   {
  
   }
   public function store()
   {
      echo __DIR__ . '@' . __FUNCTION__;
   }
   public function create()
   {
      echo __DIR__ . '@' . __FUNCTION__;
   }
   public function show($id)
   {
      echo __DIR__ . '@' . __FUNCTION__ . $id;
      ;
   }
   public function edit($id)
   {
      echo __DIR__ . '@' . __FUNCTION__ . $id;
      ;
   }
   public function update($id)
   {
      echo __DIR__ . '@' . __FUNCTION__ . '/' . $id;
   }
   public function delete($id)
   {
      echo __DIR__ . '@' . __FUNCTION__ . $id;
      ;
   }

}