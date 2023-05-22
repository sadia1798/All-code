<?php
require_once 'includes/db.php';


?>

<html>
    <title>Document</title>
<head>
<body>
<?php
$sql= "SELECT *FROM words";
$result=mysqli_query($con,$sql);

$rowCount=mysqli_num_rows($result);

if($rowCount>0){

    while ($row=mysqli_fetch_assoc($result)){
     
       echo $row['id'] ;
    }

}
else{
    echo"no result";
}

?>
</body>
</head>

</html>