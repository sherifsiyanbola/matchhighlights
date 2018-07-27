<?php


namespace App;

Class Config{

   
   static $facebookCredentials = [

       'verifyToken' => 'codewithgeek',

       'accessToken' => 'EAAa7olHxDNwBAOvs5Fpf5ZAlZBSIvxcJsNcyEPGWCe1IZCBw8PdO8FGm5QHB7ovnzhYtUgLbpCZAurkVqAd5o408gVExDGBbf0AFR5CRoEE82nt1wmLTZAi1D6T5cI4CEQESWNOgsMCNUu37XS6S8YfrZB4MWF16vjJcM0qSA9RgZDZD'

   ];

   
    static function getVerifyToken()
    {

    	return  Config::$facebookCredentials['verifyToken'];
    }

    static function getAccessToken()
    {

    	return  Config::$facebookCredentials['accessToken'];
    }

    




}
