<?php
// CRUD API resourse controller
require_once CORE.'/Controller.php';
require_once MODELS.'/Category.php';

class CategoryController extends Controller 
{
    public function index(){
        $categories = (new Category())->all();
        $title = "Categories List";
        $this->view->render('admin/categories/index', compact('title', 'categories'), 'admin');
    } 

    public function create(){
        $title = "Create Category";
        $this->view->render('admin/categories/create', compact('title'), 'admin');
    }

    public function store(){
        // var_dump($this->request);
        $status = $this->request->data['status'] ? 1:0;
        (new Category())->save($this->request->data['name'], $status);
        return header('Location: /admin/categories');
    }

    public function show(){
        
    }

    public function edit(){
        
    }

    public function update(){
        
    }

    public function destroy(){
        
    }
}