<?php
// Thư viện database
class DongHo
{
    // Biến dữ liệu kết nối
    private $__conn;
     
    // Hàm kết nối
    function connect()
    {
        // Nếu chưa kết nối thì thực hiện kết nối
        if (!$this->__conn){
            // Kết nối
            $this->__conn = mysqli_connect('localhost', 'root', '', 'doan2') or die ('Lỗi kết nối');
 
            // Xử lý truy vấn UTF8 để tránh lỗi font
            mysqli_query($this->__conn, "SET NAMES 'utf8'");
        }
    }
 
    // Hàm ngắt kết nối
    function dis_connect(){
        // Nếu đang kết nối thì ngắt
        if ($this->__conn){
            mysqli_close($this->__conn);
        }
    }
 
    // HÃ m Insert
    function insert($table, $data)
    {
        // Kết nối
        $this->connect();
 
        // Lưu trữ danh sách field
        $field_list = '';
        // Lưu trữ danh sách giá trị tương ứng với field
        $value_list = '';
 
        // Lặp qua data
        foreach ($data as $key => $value){
            $field_list .= ",$key";
            $value_list .= ",'".mysqli_escape_string($this->__conn,$value)."'";
        }
 
        // VÌ sau vòng lặp các biến $field list và $value_list sẽ thừa dấu , nên ta sẽ dùng hàm trim để xóa đi
        $sql = 'INSERT INTO '.$table. '('.trim($field_list, ',').') VALUES ('.trim($value_list, ',').')';
 
        return mysqli_query($this->__conn, $sql);
    }
 
    // Hàm update
    function update($table, $data, $where)
    {
        // Kết nối
        $this->connect();
        $sql = '';
        // Lặp qua data
        foreach ($data as $key => $value){
            $sql .= "$key = '".mysqli_escape_string($this->__conn, $value)."',";
        }
 
        // VÌ sau vòng lặp các biến $sql sẽ thừa một dấu , nên ta sẽ dùng dùng trim để cắt đi
        $sql = 'UPDATE '.$table. ' SET '.trim($sql, ',').' WHERE '.$where;
 
        return mysqli_query($this->__conn, $sql);
    }
 
    // Hàm delete
    function remove($table, $where){
        // Kết nối
        $this->connect();
         
        // Delete
        $sql = "DELETE FROM $table WHERE $where";
        return mysqli_query($this->__conn, $sql);
    }
 
    // Hàm lấy danh sách
    function get_list($sql)
    {
        // Kết nối
        $this->connect();
         
        $result = mysqli_query($this->__conn, $sql);
 
        if (!$result){
            die ('Câu truy vấn của bạn không đúng');
        }
 
        $return = array();
 
        // Lặp qua kết qua để đưa vào mảng
        while ($row = mysqli_fetch_assoc($result)){
            $return[] = $row;
        }
 
        // Xóa kết quả khỏi bộ nhớ
        mysqli_free_result($result);
 
        return $return;
    }
 
    // Hàm lấy 1 rocord dùng trong trường hợp lấy chi tiết tin
    function get_row($sql)
    {
        // Kết nối
        $this->connect();
         
        $result = mysqli_query($this->__conn, $sql);
 
        if (!$result){
            die ('CÃ¢u truy váº¥n bá»‹ sai');
        }
 
        $row = mysqli_fetch_assoc($result);
 
        // Xóa kết quả quả khỏi bộ nhớ
        mysqli_free_result($result);
 
        if ($row){
            return $row;
        }
 
        return false;
    }
}
?>