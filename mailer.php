<?php
    if(isset($_POST['first_name']) && isset($_POST['phn']) && isset($_POST['doctor-name']) && isset($_POST['ptn-type'])){
        $fullname = $_POST['first_name'];
        $phn = $_POST['phn'];
        $dctname = $_POST['doctor-name'];
        $ptype = $_POST['ptn-type'];

        // Mail Script 
        $to  = "alrazihospitalpvt@gmail.com";
        $subject1 = "Submit from $first_name";
        $subject2 = "Thank you for contacting us.";

        $messagetxt1 = "
        <html>
            <body>
                <p>Contact form From $fullname</p>
                <table>
                    <tr>
                        <td>Patient Name: </td><td>".$fullname."</td>
                    </tr>
                    <tr>
                        <td>Phone No: </td><td>".$phn."</td>
                    </tr>
                    <tr>
                        <td>Doctor: </td><td>".$dctname."</td>
                    </tr>
                    <tr>
                        <td>Patient Type: </td><td>".$ptype."</td>
                    </tr>
                    </tr>
                </table>
            </body>
        </html>";

        $messagetxt2 = "
        <html>
            <body>
                <p>Contact form From $fullname</p>
                <table>
                    <tr>
                        <td>Patient Name: </td><td>".$fullname."</td>
                    </tr>
                    <tr>
                        <td>Phone No: </td><td>".$phn."</td>
                    </tr>
                    <tr>
                        <td>Doctor: </td><td>".$dctname."</td>
                    </tr>
                    <tr>
                        <td>Patient Type: </td><td>".$ptype."</td>
                    </tr>
                    </tr>
                </table>
            </body>
        </html>";

        $headers  = "MIME-Version: 1.0\r\n";
        $headers .= "Content-type: text/html; charset=iso-8859-1\r\n";
        $headers .= "From: ".$fullname."\r\n";

        $headers2  = "MIME-Version: 1.0\r\n";
        $headers2 .= "Content-type: text/html; charset=iso-8859-1\r\n";
        $headers2 .= "From: ".$to."\r\n";
        
        mail($to, $subject1, $messagetxt1, $headers);
        mail($email, $subject2, $messagetxt2, $headers2);
    }
    else {
        header("location: index.php");
    }
?>