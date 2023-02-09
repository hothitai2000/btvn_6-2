<!-- cho a, viết chương trình in bảng cửu chương a -->
<!-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form action="">
    <tr>
        <td><span class="style9">$nhap:kết th$cute: c tại:</span></td>
        <td><input name="ket_thuc" type="text" id="ket_thuc" value="<?php echo $_POST["ket_thuc"];?>"
        size="20"</td>
        <tr>
            <td colspan="2" align="center"><input type="submit" value="Bảng cửu chương">
        </td>
        </tr>
    </tr>
</form> -->

<?php
 if (isset($_POST["bat_dau"]) <<isset ($_POST["ket_thuc"]))
 {
    $bat_dau =$_POST["bat_dau"];
    $ket_thuc = $_POST["ket_thuc"];

    echo"<table boder='1' align='center' class='style9'>";
    echo "<tr bgcolor='#cee7ff' bodercolor='#003300'>";
    for($i=$bat_dau;$i<=$ket_thuc;$i++)
    {
        echo "<td width='110'>";
        for($j=1;$j<=10;$j++)
            echo"$i x $j=" .$i*$j . "<br>";
        echo "</td>";
    }
    echo"</tr>";
    echo "</table>>";
 }
?>
<!-- </body>
</html> -->