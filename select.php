<!DOCTYPE html>
<html lang="en">
<head>
	<title>Table V01</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->	
	<link rel="icon" type="image/png" href="images/icons/favicon.ico"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/perfect-scrollbar/perfect-scrollbar.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="css/util.css">
	<link rel="stylesheet" type="text/css" href="css/main.css">
<!--===============================================================================================-->
    <style>
        .links{
            display: flex;
            align-items: center;
            justify-content: center;

        }
        .links a{
            color: #36304a;
            margin-left: 30px;
            margin-bottom: 10px;
            border:0;
            background: none;
            display: block;
            margin: 20px auto;
            text-align: center;
            border: 2px solid #2ecc71;
            padding: 14px 40px;
            outline: none;
            color: white;
            border-radius: 24px;
            transition: 0.25s;
            cursor: pointer;
            text-transform: uppercase;
        }
        .links a:hover{
            background: #2ecc71;
        }
    </style>
</head>
<body>
    
    <?php

    // start connection
    $connection = mysqli_connect("localhost","root","","crud-db");

    // query
    $selectarray=[];
    $selectQuery = "SELECT * FROM `users`";
    $sq = mysqli_query($connection,$selectQuery);
    while ($a = mysqli_fetch_assoc($sq)) {
        $selectarray[] = $a;
    }
    ?>
	<div class="limiter">
		<div class="container-table100">
			<div class="wrap-table100">
				<div class="table100">
                    <div class="links">
                        <a href="insert.html">insert</a>
                        <a href="delet.html">delet</a>
                        <a href="update.html">update</a>
                    </div>
                    
					<table>
                        <?php
                            foreach ($selectarray as $key => $value) {
                                if ($key == "0") {
                                    echo "<thead>";
                                        echo "<tr class='table100-head'>";
                                        
                                            foreach ($value as $k => $v) {
                                            
                                                echo "<th class='column1'>" . $k . "</th>";
                                                
                                            }
                                        echo "</tr>";
                                    echo "</thead>";
                                    echo "<tbody>";
                                        echo"<tr>";
                                            foreach ($value as $k => $v) {
                        
                                                echo "<td class='column1'>" . $v . "</td>";
                                            }   
                                        echo "</tr>";
                                    echo "</tbody>";        
                                }else{
                                    echo "<tbody>";
                                        echo"<tr>";
                                            foreach ($value as $k => $v) {
                        
                                                echo "<td class='column1'>" . $v . "</td>";
                                            }   
                                        echo "</tr>";
                                
                                    echo "</tbody>";
                                } 
                            }    
                        ?>    
					</table>
				</div>
			</div>
		</div>
	</div>
<!--===============================================================================================-->	
	<script src="vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/bootstrap/js/popper.js"></script>
	<script src="vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
	<script src="js/main.js"></script>

</body>
</html>
