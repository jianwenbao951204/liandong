<?php
namespace app\index\controller;
use app\index\model\Areamodel;



class Index
{
    public function index()
    {
      return view("index");
    }
    public function selectPro(){
        $model = new Areamodel();
        $pro = $model->selectPro();
        echo json_encode($pro);
    }
    public function selectCty(){
        $id = $_POST['areaSort'];
        $model = new Areamodel;
        $pro = $model->selectCty($id);
        echo json_encode($pro);
    }
    public function selectArea(){
        $id = $_POST['areaSort'];
        $model = new Areamodel;
        $area = $model->selectArea($id);
        echo json_encode($area);
    }

}
