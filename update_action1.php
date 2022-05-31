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
                $p=$_REQUEST['t3'];
                $c=$_REQUEST['t4'];
                $m=$_REQUEST['t5'];
                $e=$_REQUEST['t6'];
                $h=$_REQUEST['t7'];
                $t=$p+$c+$m+$e+$h;
                $pr=$t/5;
                $q="INSERT INTO marks(roll,name,phy,che,math,eng,hindi,total,per) values($r,'$n',$p,$c,$m,$e,$h,$t,$pr)";
                mysqli_query($conn,$q);
                mysqli_close($conn);
        ?>   
</body>
</html>