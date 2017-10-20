<?php
namespace app\index\model;
use think\Db;


class Areamodel {
    public  function selectPro(){
        return Db::table("wst_areas")->where("parentId" ,0)->select();
    }
    public  function selectCty($id){
        return Db::table("wst_areas")->where("parentId",$id)->select();
    }
    public  function selectArea($id){
        return Db::table("wst_areas")->where("parentId",$id)->select();
    }
}