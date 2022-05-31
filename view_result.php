<html>
<body>
    <?php
        $server="localhost";
        $user="root";
        $password="";
        $db="result";
        $ro=$_REQUEST['t1'];
        $conn=mysqli_connect($server,$user,$password,$db);
        if(!$conn)
            echo "connection Fails............";
        $qu="select * from marks where roll==$ro";
        $q=mysqli_query($conn,$qu);
    ?>
    <table border="1">
        <tr>
            <th>Roll</th>
            <th>Total Marks</th>
            <th>%age</th>
        </tr>
        <?php
            while($ro=mysqli_fetch_assoc($q))
            {
        ?>
        <tr>
            <td><?php echo $ro['roll']; ?></td>
            <td><?php echo $ro['total']; ?></td>
            <td><?php echo $ro['per']; ?></td>
        </tr>
        <?php
            }
        ?>
    </table>
</body>
</html>