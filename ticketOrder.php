<?php


include('server.php');

  $eventID = '9261';
  $paymentMethodId = "is-applepay";
  $count = 1;
  $ticketId = '15544';
  $ticketPrice = 100;
  
  // $holderId = $this->input->post('sendTicketSocial');
  // $holderName = $this->input->post('sendTicketName');

  //echo json_encode($detailsAndPrices);

      $formattedPhoneNumber = '003548231812';

        $data = array (
          'order' => 
          array (
            'id' => 0,
            'userId' => 0,
            'userAuthId' => 0,
            'eventId' => $eventID,
            'deviceId' => 'String',
            'phoneVerificationId' => 0,
            'paymentMethodId' => $paymentMethodId,
            'paymentReference' => 'String',
            'ticketStatus' => 'String',
            'phoneVerificationNumber' => $formattedPhoneNumber,
            'ticketTokenId' => 'String',
            'paymentPhoneNumber' => $formattedPhoneNumber,
            'ticketTransferredFrom' => 0,
            'originalPhoneVerificationNumber' => $formattedPhoneNumber,
            'teamPassId' => 0,
            'paymentId' => 'String',
          ),
          'orderDetails' => 
          array (
            0 => 
            array (
    
              'eventSeriesOwnerTicketType' => $ticketId,
              'ticketPrice' => $ticketPrice,
              'totalPrice' => ($ticketPrice * $count),
              'count' => $count,
            ),
          ),
          'cardInfo' => 
          array (
            'paymentMethod' => 
            array (
              'paymentType' => 'Card',
              'pan' => '4444423160153854',
              'expYear' => '23',
              'expMonth' => '12'
            ),
            'amount' => 100,
            'currency' => '352',
          ),
          /*'ticketHolders' => array(
            'ticketHolders' => array(
              'name' => '',
              'fullPhoneNumber' => $formattedPhoneNumber,
              'holderId' => ''
            )
          ),*/
          'paymentPhoneNumber' => 'String',
          'requestUnixUTCTimeStamp' => 0,
          'signature' => 
          array (
            'systemId' => 'String',
            'systemSecret' => 'String',
            'signature' => 'String',
          ),
          'phoneVerificationNumber' => $formattedPhoneNumber,
          'deviceId' => 'String',
          'dontReturnTickets' => false,
          'applePayInfo' => array (
            'orderId' => '0',
            'threeDSecure'=>
                array (
                    'dataType' => 'Manual',
                    'securityLevelInd' => '02',
                    'cavv' => '/wAAAAEA8eHsGVcFtORKgClgAgA='
                )
          ),
         
        );
      
  
      
    
    echo json_encode($data);

        // $items = serverRequest($data, 'ticketOrder', 'POST');

        // echo json_encode($items);

    
