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

    function Check(){
        echo($totp->verify($totp->now()));
    }

    if(isset($POST['Token']))
    {
        echo("Enter form event");
        if($totp->verify($POST['Token']))
        {
            echo("Token Matched");
        }
        else
        {
            echo("Token did not Matched");
        }
    }
    ?>
    <form action="index.php">
        <input type="text" name="Token" /> 
        <input type="submit"></input>
    </form>
</body>
</html>