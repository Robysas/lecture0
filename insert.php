<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Atsakymas</title>
</head>
<body>
    <?php
        $servername = "localhost";
        $username = "root";
        $password = "";
        $databasename = "inventory";

        $conn=mysqli_connect($servername,$username,$password,$databasename);

            if($conn === false){
                die("ERROR: Klaidos kodas. " 
                    . mysqli_connect_error());
            }
            
            $Type = $_REQUEST['Type'];
            $Date = $_REQUEST['Date'];
            $Name = $_REQUEST['Name'];
            $WithPVM = $_REQUEST['WithPVM'];
            $NoPVM = $_REQUEST['NoPVM'];
            $Count = $_REQUEST['Count'];
            $Size = $_REQUEST['Size'];
            $Number = $_REQUEST['Number'];
            $Location = $_REQUEST['Location'];
            $Invoice = $_REQUEST['Invoice'];
            $Purpose = $_REQUEST['Purpose'];

            $sql = "INSERT INTO database  VALUES ('$Type', '$Date','$Name','$WithPVM','$NoPVM','$Count','$Size','$Number','$Location','$Invoice','$Purpose')";

            if(mysqli_query($conn, $sql)){
                echo "Pavyko"; 
      
                echo nl2br("\n$Type\n $Date\n $Name\n $WithPVM\n $NoPVM\n $Count\n $Size\n $Number\n $Location\n $Invoice\n $Purpose");
            } else{
                echo "ERROR: $sql. " 
                    . mysqli_error($conn);
            }
                
        mysqli_close($conn);

    ?>
</body>
</html>