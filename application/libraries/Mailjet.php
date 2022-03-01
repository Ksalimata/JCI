<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Mailjet
{
	public function __construct()
  {
  }	

    public function emailing($destinataire, $subject, $message,$email)
    {
    	  $headers = array ('Content-Type: application/json');
	      $paramsend = [
	          'Messages' => [
	              [
	                  'From' => [
	                      'Email' => $email,
	                      'Name' => "JCI Abidjan Ivoire"
	                  ],
	                  'To' => [
	                      [
	                          'Email' => $destinataire,
	                      ]
	                  ],
	                  'Subject' => $subject,
	                  'TextPart' => $message,
	                  'HTMLPart' => $message,
                  ]
              ]
           ];
                  
                          
           $url = "https://api.mailjet.com/v3.1/send";
           $ch = curl_init();
           curl_setopt($ch, CURLOPT_URL, $url);
           curl_setopt($ch, CURLOPT_VERBOSE, 1);
           curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, FALSE);
           curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, FALSE);
           curl_setopt($ch, CURLOPT_RETURNTRANSFER,true);
           curl_setopt($ch, CURLOPT_POST, 1);
           curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
           curl_setopt($ch, CURLOPT_USERPWD, "a6be9ae172aebc0bcea021cf75d5a9cf:4f8d8ed39af0aa99ac63fa5a52e8f0bc");
           curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($paramsend));
           $response = json_decode(curl_exec($ch));
           $err = curl_error($ch);
           curl_close ($ch);
           //return $response;
           if ($response)
           {
               foreach ($response as $reponses)
               {  
                  foreach ($reponses as $valeurs)
                  { 
                      $valeurs = $valeurs->To;
                      foreach ($valeurs as $resp)
                      {
                          $messageid = $resp->MessageID;
                          $email = $resp->Email;
                      }
                  }
               }
           }

           if ($messageid)
           {
           	   return $messageid;
           }
           else
           {
           	   return FALSE;
           }
           

    }

}