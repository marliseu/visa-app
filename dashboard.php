<?php

  $title = "Dashboard";


  require('views/head.php');
  require('views/navigation.php');

  require('views/dashboard-page.php');
  $data = array("transactionIdentifier"=> 23423432,
                "actionCode"=> "5",
                "responseCode"=> "5",
                "transmissionDateTime"=> "2016-04-17T11:30:10.000Z",
                "cavvResultCode"=> "4",
                "feeProgramIndicator"=> "123"
              );
  //header('Content-type: text/javascript');
  echo "<h4> History </h4>\n";
  echo "Transaction ID:  " . $data['transactionIdentifier'] . "  " .
       "Action Code:  " . $data['actionCode'] . "  " .
       "Date:  " . $data['transmissionDateTime'];
  //$json_string = json_encode($data, JSON_PRETTY_PRINT);

  require('views/footer.php');
  require('views/scripts.php');
