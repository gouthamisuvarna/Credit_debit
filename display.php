<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="display.css"> 

</head>
<body>
    <center>
    <div id="header" align="center"> Credit Entries</div>
        <div class="center-div">
            <div class="table-responsive">
                <table>
                    <thead>
                        <tr>
                            <th>reason</th>
                            <th>date</th>
                            <th>time</th>
                            <th>amount</th>
                            <th>Recieve</th>
                            <th>animal</th> 
                            <!-- <th colspan="2">Operation</th> -->
                        </tr>

                    </thead>

                    <tbody>
                    <?php

                        include "connect.php";


                        $select = "SELECT * from cow";

                        $query = mysqli_query($conn,$select);

                        $nums = mysqli_num_rows($query); 
                        while($res = mysqli_fetch_array($query)){
                           ?>
                            <tr>
                            <td><?php echo $res['reason']?></td>
                            <td><?php echo $res['date']?></td>
                            <td><?php echo $res['time']?></td>
                            <td><?php echo $res['amount']?></td>
                            <td><?php echo $res['Recieve']?></td>
                            <td><?php echo $res['animal']?></td>
                            <!-- <td><i class="fa fa-edit"></i></td>
                            <td><i class="fa fa-trash"></i></td> -->
                        </tr>
                            
                    <?php  
    
                        }
                    ?>  
                    </tbody>
                </table>
            </div> 
        </div>  
     
    </center>
</body>
</html>




