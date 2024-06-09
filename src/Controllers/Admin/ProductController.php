<?php
namespace Fpt\ThoiTrang\Controllers\Admin;

use Fpt\ThoiTrang\Commons\Controller;
use Fpt\ThoiTrang\Commons\Helper;
use Fpt\ThoiTrang\Models\Category;
use Fpt\ThoiTrang\Models\Product;
use Rakit\Validation\Validator;

class ProductController extends Controller
{

    private Product $product;
    private Category $category;
    public function __construct()
    {
        $this->product = new Product();
        $this->category = new Category();
    }
    public function index()
    {
        [$products, $totalPage] = $this->product->paginate();
        // Helper::debug($totalPage);
        $this->renderViewAdmin('products.index', [
            'products' => $products,
            'totalPage' => $totalPage
        ]);
    }
    public function create()
    {
        $categories = $this->category->all();
        $categoryPluck = array_column($categories, 'name', 'id');
        // Helper::debug($categoryPluck);
        $this->renderViewAdmin('products.create', [
            'categoryPluck' => $categoryPluck
        ]);

    }
    public function store()
    {
        //validate
        $validator = new Validator;
        $validator = $validator->make($_POST + $_FILES, [

            'name' => 'required|max:100',
            'price' => 'required',
            'img' => 'required|uploaded_file:0,2048k,png,jpeg,jpg',
            'id_categories  ' => 'required',
            'description' => 'required|max:65000',
        ]);
        $validator->validate();
        if ($validator->fails()) {
            // Helper::debug($validator->errors());
            $_SESSION['errors'] = $validator->errors()->firstOfALl();
            header('Location:' . url('admin/products/create'));
            exit;

        } else {
            $data = [
                'name' => $_POST['name'],
                'price' => $_POST['price'],
                'img' => $_POST['img'],
                'id_categories  ' => $_POST['id_categories'],
                'description' => $_POST['description'],
            ];
            if (!empty($_FILES['img']) && $_FILES['img']['size'] > 0) {

            }
        }
    }

}