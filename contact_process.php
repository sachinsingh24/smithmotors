<?php
 
//Import PHPMailer classes into the global namespace
//These must be at the top of your script, not inside a function
//use PHPMailer\PHPMailer\PHPMailer;
//use PHPMailer\PHPMailer\Exception;
 
//required files
// require 'phpmailer/src/Exception.php';
// require 'phpmailer/src/PHPMailer.php';
// require 'phpmailer/src/SMTP.php';
 
// //Create an instance; passing `true` enables exceptions 
//   $mail = new PHPMailer(true);
 
//     //Server settings
//     $mail->isSMTP();                              //Send using SMTP
//     $mail->Host       = 'smtp.gmail.com';       //Set the SMTP server to send through
//     $mail->SMTPAuth   = true;             //Enable SMTP authentication
//     $mail->Username   = 'multiflytechnologies@gmail.com';   //SMTP write your email
//     $mail->Password   = 'wpulhcmbaizbkwpg';      //SMTP password
//     $mail->SMTPSecure = 'ssl';            //Enable implicit SSL encryption
//     $mail->Port       = 465;                                    
 
//     //Recipients
//     $mail->setFrom( "ganeshmaharnur11@gmail.com", "Ganesh Maharnur"); // Sender Email and name
//     $mail->addAddress('ganeshmaharnur11@gmail.com');     //Add a recipient email  
//     $mail->addReplyTo("ganeshmaharnur11@gmail.com", "Ganesh Maharnur"); // reply to sender email
 
//     //Content
//     $mail->isHTML(true);               //Set email format to HTML
//     $mail->Subject = "Testing mail";   // email subject headings
//     $mail->Body    = "Hi there is the testing mail"; //email message
      
//     // Success sent message alert
//     $mail->send();
    // echo
    // " 
    // <script> 
    //  alert('Message was sent successfully!');
    //  document.location.href = 'index.php';
    // </script>
    // ";



    require __DIR__ . '/vendors/vendor/autoload.php'; // Include Google API Client Library
    
    // Specify your Google Sheet ID and range
    $spreadsheetId = '129BVZV1R19-wR6Xg4A2mdz5IquZu6ivuAxfeX5ZlAg0';
    $range = 'Sheet1';
    
    // Create Google Client object
    $client = new Google_Client();
    $client->setApplicationName('smithmotors');
    $client->setScopes(Google_Service_Sheets::SPREADSHEETS);
    $client->setAccessType('offline');
    $client->setAuthConfig(__DIR__.'/vendors/google_sheet_credential.json'); // Path to your credentials JSON file
    
    
    // Initialize Sheets service
    $service = new Google_Service_Sheets($client);
    
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Capture form data
        date_default_timezone_set('Asia/Kolkata');
        $name = $_POST['name'];
        $email = $_POST['email'];
        $subject = $_POST['subject'];
        $message = $_POST['message'];
        $product = $_POST['product'];

        $currentDateTime = date('Y-m-d H:i:s');
        // Prepare request body
        $values = [
            [$currentDateTime,$name,$email,$subject,$message]
        ];
        $requestBody = new Google_Service_Sheets_ValueRange([
            'values' => $values
        ]);
    
        // Send request to update Google Sheet
        $response = $service->spreadsheets_values->append($spreadsheetId, $range, $requestBody, [
            'valueInputOption' => 'RAW'
        ]);
    
        // Check for success
        if ($response->getUpdates()->getUpdatedCells() > 0) {
            if ($product === "rikshaw") {
                // echo "<script>window.open('http://localhost/smithmotors/img/Rhino Rikshaw cmyk 2015.pdf', '_blank');</script>";
                header("Location: img/Rhino Rikshaw cmyk 2015.pdf");
                echo "<script>location.reload();</script>";
            } else if ($product === "trolly") {
                // echo "<script>window.open('/img/E-Trolley brochure.pdf', '_blank');</script>";
                header("Location: img/E-Trolley brochure.pdf");
                echo "<script>location.reload();</script>";
            } else {
                header("Location: index.php?success=true");
            }
        } else {
            if ($product === "rikshaw") {
                header("Location: e-rickshaw.php?success=false");
            } else if ($product === "trolly") {
                header("Location: var.php?success=false");
            } else {
                header("Location: index.php?success=false");
            }
        }
    }
    