<?php

function paymentTypeString($paymentType) {

  if ($paymentType == "is-borgun") {

        return 'Greiðslukort';

      } else if ($paymentType == "is-kass") {

        return 'Kass';

      } else if ($paymentType == "is-aur") {

        return 'Aur';

      } else if (substr($paymentType, 0, 7 ) === "is-free") {

        return 'Fríkort';

      } else if ($paymentType === "owner-card") {
      
        return 'Árskort';

      } else {

        return 'Óþekkt';
      }
}

function paymentTypeWithImage($paymentType) {

      if ($paymentType== "is-borgun") {

        return "<img src='https://stubbur.app/login/assets/payment_logos/card.png' height='20' width=/> Greiðslukort";

      } else if ($paymentType == "is-kass") {

        return "<img src='https://stubbur.app/login/assets/payment_logos/kass.png' height='20' width=/> Kass";

      } else if ($paymentType == "is-aur") {
        
        return "<img src='https://stubbur.app/login/assets/payment_logos/aur.png' height='20' width=/> Aur";

      } else if (substr($paymentType, 0, 7 ) === "is-free") {
        return "Frímiði á símanúmer";
      } else if (substr($paymentType, 0, 7 ) === "is-ksi") {

        return "<img src='https://stubbur.app/login/assets/payment_logos/membership.png' height='20' width=/> Skírteini";

      }else {
        return 'Óþekkt greiðsluleið';
      }
}

function formatCurrency($number) {
  $fmt = numfmt_create( 'is_IS', NumberFormatter::CURRENCY);
  $fmt->setTextAttribute(NumberFormatter::CURRENCY_CODE, 'ISK');
  $fmt->setAttribute(NumberFormatter::FRACTION_DIGITS, 0);

  return numfmt_format_currency($fmt, $number, "kr.");
}

// public function eventRefund($eventId) {

//   $ticketRefundArray = array();

// try {
//   $stmt = $connection->prepare("SELECT * FROM refund WHERE eventID = :eventID");
//   $stmt->execute(array(':eventID' => $eventId));
//   $result = $stmt->fetchAll(PDO::FETCH_ASSOC);

//   if ($stmt->rowCount()>0) {

//     foreach ($result as $key) {

//       $ticketRefundArray[$key['ticketId'].'&'.$key['eventSeriesOwnerTicketType']] = array(
//         'eventSeriesOwnerTicketType' => $key['eventSeriesOwnerTicketType'],
//         'totalPrice' => $key['totalPrice'],
//         'count' => $key['count']
//       );
//   } 
// }
// }  catch(PDOException $e){

// }

// return $ticketRefundArray;

// }

?>
