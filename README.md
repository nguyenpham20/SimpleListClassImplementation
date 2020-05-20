# SimpleListClassImplementation
Bước 1: Tạo lớp ArrayList với các thuộc tính như mô tả

class ArrayList
{
  public $arrayList;
  /**
   * Constructor
   * Xây dựng một danh sách mới. Tham số $ arr là tùy chọn. Nếu đặt một ArrayList
   * với các phần tử trong mảng được tạo. Nếu không một danh sách trống được xây dựng.
   * @param arr - mảng một chiều (tùy chọn)
   **/
  public function ArrayList($arr = "")
  {
      if (is_array($arr) == true)
          $this->arrayList = $arr;
      else
          $this->arrayList = array();
  }
}
Bước 2: Cài đặt phương thức add()

Mục đích: thêm một phần tử vào cuối của danh sách

Tham số đầu vào: phần tử cần thêm vào danh sách

Mã lệnh:

/**
* Thêm một phần tử vào cuối danh sách này.
* @param $obj
**/
public function add($obj)
{
  array_push($this->arrayList, $obj);
}
Bước 3: Cài đặt phương thức get()

Mục đích: Phương thức get() trả về phần tử vừa ở vị trí thứ i trong danh sách.

Tham số đầu vào: số nguyên chứa vị trí cần truy cập đến phần tử trong danh sách

Mã lệnh:

/**
* Trả về phần tử tại vị trí đã chỉ định trong danh sách này
* @param $index
**/
public function get($index)
{
  if ($this->isInteger($index) && $index < $this->size()) {
      return $this->arrayList[$index];
  } else {
      die("ERROR in ArrayList.get");
  }
}

/**
* Trả về true nếu tham số chứa một giá trị số nguyên
* @return boolean
**/
public function isInteger($toCheck) {
  return preg_match("/^[0-9]+$/", $toCheck);
}
Bước 4: Tạo chương trình sử dụng lớp ArrayList 

Trường hợp 1: Tạo đối tượng listInteger chứa danh sách các số nguyên. Hiển thị các phần tử được thêm vào list theo vị trí và phần tử vượt quá số phần tử được thêm vào.

include "ArrayList.php";

$listInteger = new ArrayList();
$listInteger->add(1);
$listInteger->add(2);
$listInteger->add(3);

echo $listInteger->get(1);
Trường hợp 2: Hiển thị phần tử ở vị trí -1

echo $listInteger->get(-1);
Chạy chương trình, quan sát kết quả.

Mã nguồn tham khảo:

https://github.com/codegym-vn/php-arrayList
