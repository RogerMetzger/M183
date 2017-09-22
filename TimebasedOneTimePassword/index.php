<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <title></title>
    
</head>
<body>
    <img src="QR_Code.png" />
    <?php 

    require_once('otphp/otphp.php');
    $totp = new \OTPHP\TOTP("JBSWY3DPEHPK3PXP");
    echo "Current OTP: ". $totp->now();
    ?>
</body>
</html>