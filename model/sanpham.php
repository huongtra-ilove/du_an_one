<?php
  function insert_sanpham($name,$img,$price,$mota,$id_danhmuc){
    $sql = "insert into sanpham(name_sp,img_sp,price_sp,mota,id_danhmuc) value('$name','$img','$price','$mota','$id_danhmuc')";
    pdo_execute($sql);
  }
  function delete_sanpham($id){
    $sql = "delete from sanpham where id_sp".$id;
    pdo_query($sql);
  }
  function load_sp($kyw = "" , $id_danhmuc = 0){
     $sql = "select * from sanpham where 1";
     if($kyw!= ""){
        $sql .= " and name_sp like '%".$kyw."%'";
     }
     if($id_danhmuc > 0){
        $sql .= " and id_danhmuc = '".$id_danhmuc."'";
     }
  }


?>