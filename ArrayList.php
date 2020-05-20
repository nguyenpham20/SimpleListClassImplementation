<?php
//Tao lop arraylist voi cac thuoc tinh nhu mo ta
class ArrayList {
    public $arrayList;

    public function ArrayList($arr = " ") {
        if (is_array($arr) == true) {
            $this->arrayList = $arr;
        } else {
            $this->arrayList = [ ];
        }
    }
    //Cai dat method add(): Them mot phan tu vao cuoi danh sach nay
    public function add($obj) {
        array_push($this->arrayList,$obj);
    }
    //Xoa cac phan tu khoi danh sach
    public function  clear() {
        $this->arrayList = [];
    }
    //Cai dat method get() tra ve phan tu o vi tri thu i trong danh sach
    public function get($index) {
        if ($this->isInteger($index) && $index < $this->size()) {
            return $this->arrayList[$index];
        } else {
            dir("ERROR in ArrayList.com");
        }
    }
    //Kiem tra danh sach khong co phan tu nao
    public  function isEmpty() {
        if (count($this->arrayList) == 0) {
            return true;
        } else {
            return false;
        }
    }
    //Loai bo phan tu da chi dinh trong danh sach
    public function remove($index) {
        if ($this->isInteger($index)) {
            $newArrayList = [];

            for ($i=0; $i < $this->size(); $i++) {
                if ($index != $i) $newArrayList[] = $this->get($i);
            }

            $this->arrayList = $newArrayList;
        } else {
            die("ERROR in ArrayList.remove <br/> Integer value required");
        }
    }
    //Tra ve so phan tu trong danh sach
    public function size() {
        return count($this->arrayList);
    }
    //sap sep danh sach theo thu tu bang chu cai
    public function sort() {
        $this->sort($this->arrayList);
    }
    //tra ve mang theo dung danh sach thu tu
    public function toArray() {
        return $this->arrayList;
    }
    //Tra ve true neu tham so chua gia tri nguyen
    public function isInteger($toCheck) {
        return preg_match("/^[0-9]+$/", $toCheck);
    }
}