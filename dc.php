<?php
    $txt='HELP ME!!!! find me with this link: ';
    $location = urldecode($_POST['findurl']);   
    $api_key = '5d83abc6e259b5d83abc6e25e1';
    $phones = array(
          'fire' => '0277675089',
          'medical' => '0244815587',
          'security' => '0246971090'
    );
    $phone = isset($_POST['action']) ? $phones[$_POST['action']] : '0246971090';

    $sender_id = 'Emergency';
    $message = $txt.$location;


    $url = "http://sms.nasaramobile.com/api?api_key=$api_key&&sender_id=$sender_id&&phone=$phone&&message=".urlencode($message)."";
    //send message and get response
    $response = file_get_contents($url);
    if($response == '1801'){
        echo json_encode("Message sent successfully");
    }
    elseif($response == '1802') {
        echo json_encode("message sending failed");
    }
    elseif($response == '1803') {
        echo json_encode("invalid login phone or password given");
    }
    elseif($response == '1804') {
        echo json_encode("not enough sms credit");
    }
    elseif($response == '1805') {
        echo json_encode("sender id must be more than 1 charater and less than 12 characters");
    }
    elseif($response == '1806') {
        echo json_encode("phone number must be more than 8 characters");
    }

?>
