<?php
    include "condb.php";
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Frist website</title>
</head>
<body>
<?php
    $sql = "SELECT * FROM member";
    $hand = mysqli_query($conn, $sql);
    while ($row=mysqli_fetch_array($hand)){
?>

   <h1> <?=$row['id'] ?>
    <?=$row['name'] ?> 
    <?=$row['surname'] ?> 
    <?=$row['telephone'] ?> </h1>

<?php
    }
    mysqli_close($conn);

?> 
</body>
</html>