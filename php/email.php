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
    
}

?>
