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
$mang_so = array();
//Tiếp theo viết hàm tạo mảng ngẫu nhiên.
function tao_mang($n){
	$mang_so = array();
	for($i = 0; $i < $n; $i++){
		$mang_so[$i] = mt_rand(0,20);
	}
	return $mang_so;
}
//Chúng ta đã tạo mảng, bây giờ đến xuất mảng
function xuat_mang($mang_so){
    echo implode(",", $mang_so);
}
//Các hàm tìm max min
function tim_min($mang_so){
    if(isset($mang_so[0])){
        $min = $mang_so[0];
        $n = count($mang_so);
        for($i = 1; $i < $n; $i++){
            if($mang_so[$i] < $min)
                $min = $mang_so[$i];
        }
        echo $min;
    }
}

function tim_max($mang_so){
    if(isset($mang_so[0])){
        $max = $mang_so[0];
        $n = count($mang_so);
        for($i = 1; $i < $n; $i++){
            if($mang_so[$i] > $max){
                $max = $mang_so[$i];
            }
        }
        echo $max;
    }
}
//Tính tổng các phần tử đã hướng dẫn ở phần 1.
function tinh_tong($mang_so){
    $tong_so = 0;
    $n = count($mang_so);
    for($i = 0; $i < $n; $i++)
        $tong_so += $mang_so[$i];
    echo $tong_so;
}

?>
<form action="mang-2.php" method="POST">
    <table>
        <thead>
        <tr>
            <th colspan="2">PHÁT SINH MẢNG VÀ TÍNH TOÁN</th>
        </tr>
        </thead>
        <tbody>
        <tr>
            <td>Nhập số phần tử:</td>
            <td><input type="text" name="so_phan_tu" width="100%" ></td>
        </tr>
        <tr>
            <td></td>
            <td><input type="submit" value="Phát sinh và tính toán"></td>
        </tr>
        <tr>
            <td>Mảng: </td>
            <td><input type="text" name="mang_so" disabled="disabled" value="<?php xuat_mang($mang_so); ?>"></td>
        </tr>
        <tr>
            <td>GTLN ( MAX ) trong mảng: </td>
            <td><input type="text" name="gtln" disabled="disabled" value="<?php tim_max($mang_so); ?>"></td>
        </tr>
        <tr>
            <td>GTNN ( MIN ) trong mảng: </td>
            <td><input type="text" name="ttnn" disabled="disabled" value="<?php tim_min($mang_so); ?>"></td>
        </tr>
        <tr>
            <td>Tổng mảng: </td>
            <td><input type="text" name="tong" disabled="disabled" value="<?php tinh_tong($mang_so); ?>"></td>
        </tr>
        </tbody>
    </table>
</form>

</body>
</html>