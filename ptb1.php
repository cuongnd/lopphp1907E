<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Phương trình bậc 1</title>
</head>
<body>
<?php
    $nghiem="";
    if(isset($_POST['a']) && isset($_POST['b'])){
        $a=$_POST['a'];
        $b=$_POST['b'];
        $nghiem="x = ".(-$b/$a);
    }
?>
    <form action="ptb1.php" method="post">
        <table border="1">
            <tr>
                <td colspan="3">Giải phương trình bậc 1</td>
            </tr>
            <tr>
                <td>Phương trình</td>
                <td><input type="text" name="a">X + </td>
                <td><input type="text" name="b"> = 0 </td>
            </tr>
            <tr>
                <td colspan="3">Nghiệm <input type="text" value="<?php echo $nghiem ?>"></td>
            </tr>
            <tr>
                <td colspan="3"><button type="submit" name="xuat">Xuất</button></td>
            </tr>
        </table>
    </form>
</body>
</html>