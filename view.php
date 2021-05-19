<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href = "/css/style.css" type=”text/css”>
    <!--font-->
    <link href="//fonts.googleapis.com/css?family=Mukta:200,300,400,500,600,700,800" rel="stylesheet">
</head>
<body>
    <div class="output">
        <br>
        <h1>THÔNG TIN MÈO</h1>
        <table>
            <thead class="thead-inverse">
                <tr style="background-color: rgba(128, 231, 233, 0.6);">
                    <th>No.</th>
                    <th>NAME</th>
                    <th>TYPE</th>
                    <th>GENDER</th>
                    <th>DESCRIPTION</th>
                    <th>IMAGE</th>
                </tr>
            </thead>
            
            <tbody>
            <?php
                require_once("connect.php");
                    try{
                        foreach($conn->query("SELECT * FROM catinfo ") as $row){
                            echo "<tr><td>".$row['id'] .
                                 "</td><td>".$row['name'] . 
                                 "</td><td>".$row['type'] . 
                                 "</td><td>".$row['gender'].
                                "</td><td>".$row['description'] . 
                                "</td><td class = 'img'><img src='.".$row['img']."'></td></tr>";
                        }
                    }
                    catch(PDOException $e){
                        print "errorr! ".$e->getMessage() . "<\br>";
                    }
            ?>
            </tbody>
        </table>
        <br><br>
    </div>

</body>
</html>
