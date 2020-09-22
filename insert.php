    <?php
    require('conn.php');
    $mr = $_POST['mr'];
    $fname = $_POST['fname'];
    $mre = $_POST['mre'];
    $ename = $_POST['ename'];
    $id = $_POST['id'];
    $date = $_POST['date'];
    $job = $_POST['job'];
    $nation = $_POST['nation'];
    $nation2 = $_POST['nation2'];
    $re = $_POST['re'];
    $blood = $_POST['blood'];
    $email = $_POST['email'];
    $tel = $_POST['tel'];
    $face = $_POST['face'];
    $line = $_POST['line'];
    $phone = $_POST['phone'];
    $homea = $_POST['homea'];
    $mou = $_POST['mou'];
    $song = $_POST['song'];
    $road = $_POST['road'];
    $tampon = $_POST['tampon'];
    $ampor = $_POST['ampor'];
    $prov = ['prov'];
    $zip = ['zipcode'];
    $h2 = ['h2'];
    $m2 = ['m2'];
    $s2 = ['s2'];
    $road2 = ['road2'];
    $t2 = $_POST['t2'];
    $a2 = $_POST['a2'];
    $prov2 = $_POST['prov2'];
    $zip2 = $_POST['zip2'];
    $ry = $_POST['ry'];

    $sql10 ="SELECT * FROM `name`  ";
	$query10 = mysqli_query($connection, $sql10);
    $result10 = mysqli_fetch_array($query10);
    if($result10['id']===$id){
    echo "<script>alert('รหัสบัตรประชาชนนี้มีอยู่แล้ว')</script>";

    }else{
    if (isset($mr)) {
        $sql = "INSERT INTO `name`( `mr`, `fname`,`mre`, `ename`,`id`,  `date`, `job`, `nation`, `nation2`, 
    `religion`, `blood`, `email`, `tel`, `facebook`, `line`, `phone_h`,`rey`) 
    VALUES ('" . $mr . "','" . $fname  . "','" . $mre  . "','" . $ename  . "','" . $id . "','" . $date  . "',
    '" . $job  . "','" . $nation  . "','" . $nation2  . "','" . $re  . "','" . $blood  . "',
    '" . $email  . "','" . $tel  . "','" . $face  . "','" . $line  . "','" . $phone  . "','" . $ry . "')";
        $query = mysqli_query($connection, $sql);
        if ($query) {
            $sql1 = "INSERT INTO `address`(`homen`, `mo`, `song`, `road`, `tampon`, `ampor`, `provice`, `codezip`) 
            VALUES ('" . $homea . "','" . $mou . "','" . $song . "','" . $road . "','" . $tampon . "',
            '" . $ampor . "','" . $prov . "','" . $zip . "')";
            $query1 = mysqli_query($connection, $sql1);
            if ($query1) {
                $sql2 = "INSERT INTO `add2`(`home2`, `mo2`, `song2`, `road2`, `tampon2`, `ampor2`, `provice2`, `zip`) 
                VALUES ('" . $h2 . "','" . $m2 . "','" . $s2 . "','" . $road2 . "','" . $t2 . "',
            '" . $a2 . "','" . $prov2 . "','" . $zip2 . "')";
                $query2 = mysqli_query($connection, $sql2);
                if ($query2) {
                    $sid = $_POST['sid'];
                    $sec = $_POST['sec'];
                    $g = $_POST['grade'];
                    $ry = $_POST['ry'];
                    $sy = $_POST['sy'];
                    $sql3 = "INSERT INTO `history`(`s_id`, `section`, `grade`, `regis_year`, `sus_year`) 
                VALUES ('" . $sid . "','" . $sec . "','" . $g . "','" . $ry . "','" . $sy . "')";
                    $query3 = mysqli_query($connection, $sql3);
                    if ($query3) {
                        header("Location: alumni_information.php");
                    }
                }
            }
        }
    }
}

    ?>