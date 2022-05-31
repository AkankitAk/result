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
                $r=$_REQUEST['t1'];
                $n=$_REQUEST['t2'];
                $u=$_REQUEST['t3'];
                $p=$_REQUEST['t4'];
                $d=$_REQUEST['t5'];
                $g=$_REQUEST['t6'];
                $q="INSERT INTO signup(roll,name,user,pass,dob,gender) values('$r','$n','$u','$p','$d','$g')";
                mysqli_query($conn,$q);
                mysqli_close($conn)
        ?>   
</body>
</html>