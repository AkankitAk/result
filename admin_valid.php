<html>
<body>
    <?php
            $server="localhost";
            $user="root";
            $password="";
            $db="result";
                $conn=mysqli_connect($server,$user,$password,$db);
                if(!$conn)
                    echo "connection Fails............";
                $u=$_REQUEST['t1'];
                $p=$_REQUEST['t2'];
                
                if($u=='ankit' && $p=='12345')
                {
                    header("location:update.php");
                }
                else
                {
                    echo"User name and Password invalid";
                }
                
        ?>   
</body>
</html>