<?php
namespace Fpt\ThoiTrang\Controllers\Admin;

use Fpt\ThoiTrang\Commons\Controller;
use Fpt\ThoiTrang\Models\User;

class UserController extends Controller
{
   private User $user;
   public function __construct()
   {
      $this->user = new User;
   }
   public function index()
   {
      // $users = $this->user->insert($data = [
      //    'name' => 'Ahihi',
      //    'email' => 'keke@gnai.com',
      //    'address' => 'HN'
      // ]);
      [$users, $totalPage] = $this->user->paginate($_GET['page '] ?? 1);
      //   Helper::debug($totalPage);
      $this->renderViewAdmin('users.index', [
         'users'=>$users,
        'totalPage'=> $totalPage
      ]);

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
      $this->user->delete($id);

      header('Location:' . url('admin/users'));
      exit();
   }

}