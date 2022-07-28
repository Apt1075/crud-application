<?php

$host = "localhost";
$sever ="root";
$pass ="";
$name = "curd";

$db_query =mysqli_connect($host,$sever,$pass,$name);

if($db_query){
    echo "connection successfully";
    }
else{
    echo "conecction not successfull";
}


?>


<!-- 
<tr>
                <td>2</td>
                <td>Pwn Singh Rajput</td>
                <td>Gorakhpur</td>
                <td>BCA</td>
                <td>0202811</td>
                <td>9876543210</td>
                <td>
                    <a href='edit.php'>Edit</a>
                    <a href='delete-inline.php'>Delete</a>
                </td>
            </tr>
            <tr>
                <td>3</td>
                <td>Jyoti Yadav</td>
                <td>Masvanpur</td>
                <td>BCA</td>
                <td>0202806</td>
                <td>9876543210</td>
                <td>
                    <a href='edit.php'>Edit</a>
                    <a href='delete-inline.php'>Delete</a>
                </td>
            </tr>
            <tr>
                <td>4</td>
                <td>Sakshi Dwivedi</td>
                <td>Mandhna</td>
                <td>BCA</td>
                <td>0202812</td>
                <td>9876543210</td>
                <td>
                    <a href='edit.php'>Edit</a>
                    <a href='delete-inline.php'>Delete</a>
                </td>
            </tr>
            <tr>
                <td>5</td>
                <td>Mohd Dilshad</td>
                <td>Kannauj</td>
                <td>BCA</td>
                <td>0202810</td>
                <td>9876543210</td>
                <td>
                    <a href='edit.php'>Edit</a>
                    <a href='delete-inline.php'>Delete</a>
                </td>
            </tr>
            <tr>
                <td>6</td>
                <td>Sandeep Dwivedi</td>
                <td>Bilhaur</td>
                <td>BCA</td>
                <td>0202809</td>
                <td>9876543210</td>
                <td>
                    <a href='edit.php'>Edit</a>
                    <a href='delete-inline.php'>Delete</a>
                </td>
            </tr>
            <tr>
                <td>7</td>
                <td>Akhil Tiwari</td>
                <td>Amiliha</td>
                <td>BCA</td>
                <td>0202802</td>
                <td>9876543210</td>
                <td>
                    <a href='edit.php'>Edit</a>
                    <a href='delete-inline.php'>Delete</a>
                </td>
            </tr>
            <tr>
                <td>8</td>
                <td>Saumya</td>
                <td>Shivali</td>
                <td>BCA</td>
                <td>0202807</td>
                <td>9876543210</td>
                <td>
                    <a href='edit.php'>Edit</a>
                    <a href='delete-inline.php'>Delete</a>
                </td>
            </tr>
            <tr>
                <td>9</td>
                <td>Mohd Arbaz</td>
                <td>Shivraj pur</td>
                <td>BCA</td>
                <td>0202808</td>
                <td>9876543210</td>
                <td>
                    <a href='edit.php'>Edit</a>
                    <a href='delete-inline.php'>Delete</a>
                </td>
            </tr> -->