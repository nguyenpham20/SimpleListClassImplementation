<?php
include "ArrayList.php";
//TH1: Hien thi danh sach duoc them vao list  theo vi tri va phan tu vuot qua so phan tu duoc  them vao
$listInteger = new ArrayList();
$listInteger->add(1);
$listInteger->add(2);
$listInteger->add(3);

echo $listInteger->get(1);

//TH2: Hien thi phan tu o vi tri -1
echo $listInteger->get(-1);
