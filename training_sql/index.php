<?php
include('connect.php');
$query = "SELECT * FROM  product WHERE category_id=6 AND status=1";
$result = mysql_query($query);
while ($rows = mysql_fetch_array($result)) {
    $data[] = $rows;
}
?>
<!DOCTYPE html>
<html>
<head>
    <title></title>
</head>
<body>
<table border="1px">
    <tr>
        <td>Name</td>
        <td>category_id</td>
        <td>status</td>
    </tr>
    <?php foreach ($data as $key => $val):
        $name = $val["name"];
        $category_id = $val["category_id"];
        $status = $val["status"];
        ?>
        <tr>
            <td><?php echo $name; ?></td>
            <td><?php echo $category_id; ?></td>
            <td><?php echo $status; ?></td>
        </tr>
    <?php endforeach; ?>
</table>
</body>
</html>