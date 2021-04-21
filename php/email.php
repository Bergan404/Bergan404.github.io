<?php
if (isset($_POST['name']) && isset($_POST['email'])) {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $to = 'Bergan00@gmail.com';
    $subject = "Portfolio Message";
    $body = '<html>
                <body>
                    <h2>PortFolio</h2>
                    <hr>
                    <p>Name:<br>'.$name.'</p>
                    <p>Email:<br>'.$email.'<p>
                </body>
            </html>';
    // headers
    $header = "From: ".$name." <".$email.">\r\n";
    $header .= "Reply-To: ".$email."\r\n";
    $header .= "MINE-Version: 1.0\r\n";
    $header .= "Content-type: text/html; charset-utf-8";
    // send
    $send = mail($to, $subject, $body, $headers);
    if ($send) {
        echo '<br>';
        echo 'Thanks for contacting me.';
    } else {
        echo 'error';
    }
}
?>

<!doctype html>
<html>
    <head>
        <title>Simple contact form with php</title>
        <meta charset="utf-8">
    </head>
    <body>
        <form action="" method="POST">
            <input type="text" name="name" placeholder="Your Name"><br>
            <input type="text" name="email" placeholder="Your Email"><br>
            <button type="submit">Submit</button>
        </form>
    </body>
</html>
