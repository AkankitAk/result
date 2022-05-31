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
                $q="SELECT * FROM signup WHERE user='$u'" ;
                $qu=mysqli_query($conn,$q);
                $rs=mysqli_fetch_assoc($qu);
                $dp=$rs['pass'];
                if($p==$dp)
                {
                    header("location:view.html");
                }
                else
                {
                    echo"User name and Password invalid";
                }
                
        ?>   
</body>
</html>