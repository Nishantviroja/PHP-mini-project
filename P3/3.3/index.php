<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document 3.3</title>
    
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css">

</head>
<body class="bg-dark text-light">
<nav class="navbar navbar-expand-lg navbar-light bg-light mb-5">
        <a class="navbar-brand" href="../../index.php"><h5 class="mx-2"> PHP.Project </h1></a>
       

    </nav>
    <div class="container h4">
    <?php

$xml_data = simplexml_load_file("3.3.xml") or die("Error: Object Creation failure");

foreach($xml_data->children() as $data)
{
    echo "ID: ", $data->ID . "<br> ";
    echo "Name: ", $data->name . "<br> ";
    echo "Address: ", $data->address . "<br>";
    echo "Semester: ", $data->semester . "<br>";
    echo "------------------------------------";
    echo "<br>";
}
?>

  </div>  
</body>
</html>

