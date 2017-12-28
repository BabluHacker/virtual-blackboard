<?php
/**
 * Created by PhpStorm.
 * User: mehedi
 * Date: 12/27/17
 * Time: 9:57 PM
 */
require ('../db/db.php');

$data = "<thead class='btn-success'>
                <th>Name</th>
                <th>Email</th>
                
                <th>Whiteboard</th>
                
                </thead>
              <tbody>";

//echo $_POST['buyer_name']."<br>".$data ;


$sql = "SELECT * FROM `teacher` WHERE 1; ";
$result = mysqli_query($con, $sql) or die(mysql_error());


while($row = mysqli_fetch_assoc($result)) {
    $uri = $row['name']."/".$row['name'].".html";


    $data .= "<tr class='table-active'>
                    
                    <td>" .$row['name']. "  </td>
                    <td>" .$row['email']. "  </td>
                    
                    <td><a target=\"_blank\" href=".$uri.">click</a></td>
                    
                    
                </tr>";
}
echo $data;

?>