<?php 
    

    if (isset($_POST['submit'])) {
        echo "<script>alert('Accessed')</script>";
        
 
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="./css/style_home.css">
    <script type="text/javascript" src="./js/test_show_hide.js"></script>
    <title>Admin Create User</title>
</head>
<body>
    <div class="container" style="padding-top: 10px;">

        <form onsubmit="return validate();" action="" method="POST" class="login-accnum" >

            <!--------------------------------------  Button -------------------------------------->

            <input type="text" id="fullname" name="fullname" value="">

			<button type="submit" name="submit" id="submit "class="btn" >Done</button>

        </form>
        <table id="test" class="content-table" style="font-size:12px">
                <thead>
                    <tr>
                        <th>ACCOUNT NUMBER</th>
                        <th>USER ID</th>
                        <th>CREATED DAY</th>
                        <th>BALANCE</th>	
                    </tr>
                </thead>

            </table>
    </div>

</body>
</html>