<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        .bgcolor{
            border: 1px solid black;
            background-color: black;
            padding:20px;
        }
    </style>
</head>
<body>
<form action="" method="post">
<input type="text" name="cb"/>
<input type="submit" value="create chessboard" name="btn"/>
</form>
<?php
if(isset($_POST['btn'])){
$a=$_POST['cb'];
       echo "<table border='1'>";
        for ($i = 1; $i <= $a; $i++) {
            echo "<tr>";
                for ($j = 1; $j <= $a; $j++) {
                    if(($i+$j)%2==0){
                    echo "<td class='bgcolor'></td>";
                    }
                    else{
                        echo "<td></td>" ;  
                    }
                }
            echo "</tr>";

        }
        echo "</table>";
}		
		
?>
</body>
</html>