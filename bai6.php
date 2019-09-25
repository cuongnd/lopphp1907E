<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<?php
function so_lan_xuat_hien($mang){
    $chuoi="";
    foreach ($mang as $key=>$value){
        $chuoi.="$key:$value ";
    }
    return $chuoi;
}
$so_lan_xuat_hien="";
$mang_duy_nhat="";
if(isset($_POST['thuc_hien'])){
    $mang=$_POST['mang'];
    $mang_so=explode(",",$mang);
    $mang_duy_nhat=array_unique($mang_so);
    $mang_duy_nhat=implode(",",$mang_duy_nhat);
    $so_lan_xuat_hien=array_count_values($mang_so);
    $so_lan_xuat_hien=so_lan_xuat_hien($so_lan_xuat_hien);
}
?>
<form action="bai6.php" method="post">
    <table border="1">
        <tr>
            <td colspan="2">
                <h1>Đếm số lần xuất hiện và tạo mảng duy nhất</h1>
            </td>

        </tr>
        <tr>
            <td>Mảng :</td>
            <td><input style="width: 90%" type="text" name="mang"></td>
        </tr>
        <tr>
            <td>Số lần xuất hiện</td>
            <td><input type="text" style="width: 90%"  disabled value="<?php echo $so_lan_xuat_hien ?>"></td>
        </tr>
        <tr>
            <td>Mảng duy nhất</td>
            <td><input type="text" style="width: 90%"  disabled value="<?php echo $mang_duy_nhat ?>"></td>
        </tr>
        <tr>
            <td colspan="2">
                <button type="submit" name="thuc_hien">Thực hiên</button>
            </td>
        </tr>
    </table>

</form>
</body>
</html>