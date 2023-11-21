<?php

// Get the mysqli connection object
$con = mysqli_connect($_SERVER['SERVER_NAME'], "root", "", "udn");

// Get the name of the MySQL table to display
$lop = $_GET['lop'];

// Execute the SQL statement to select all rows from the table
$rs = mysqli_query($con, "SELECT * FROM {$lop}");

// Create the table element
$str = "<table>
<tr class=hd>
                    <td>TT</td>
                    <td>Mã số</td>
                    <td>Họ tên</td>
                    <td>Địa chỉ</td>
                    </tr>";

// Iterate over the results of the query and add a row to the table for each row
$tt = 1;
while ($row = mysqli_fetch_array($rs)) {
    $str .= "<tr>
    <td>{$tt}</td>
    <td>{$row['masv']}</td>
    <td>{$row['hoten']}</td>
    <td>{$row['diachi']}</td>
    </tr>";
    $tt++;
}

// Close the table element
$str .= "</table>";

// Display the table
echo $str;

?>
