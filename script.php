<?php
/*:
           .777777777777777.            
         .777777777777777777777.         
       ?7777777777777777777777777~       
      777777THE LONELY WHALE7777777      
    .7777777777777777777777777777777.    
   7777777777 WHALE@52HZ.PW 777777777:   
  .77777777777777777777777777777777777.  
 .77777777777HTTP://52HZ.PW 777777777777. 
 77777777777777777777777777.777777777777 
 777777777777777777777777777  .+77$.7777 
 777777777777777777777777777$.     ,7777 
 77777777777777777777777777777I .7777777 
 77777777777777777777777777777  .7777777 
 7777777777777777777777777777.  77777777 
 77777777:.  . .777777777777.  .77777777 
 7777777.          ..7777..    777777777 
 .777777                      .77777777. 
  .7777.                      77777777.  
   I777$                    .77777777:   
    .777.                 .$77777777.    
     .777.               =777777777      
       ?777.         ..7777777777~       
         .777777777777777777777.         
            .777777777777777.            
               . ..:7~....  
			   
			   
IF YOU ENJOY THE WORK, CONSIDER DONATION. ENVER LITTLE BIT HELPS COVER SERVER COST EACH MONTH.
DOGECOIN - DH23gFar1vD8bwQDqJUBoiTMZSZSJi29hs

*/
//Pull JSON data from coins-e.com
$c = curl_init();
curl_setopt($c, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($c, CURLOPT_HTTPHEADER, array('Accept: application/json', 'Content-Type: application/json'));
curl_setopt($c, CURLOPT_URL, 'https://www.coins-e.com/api/v2/markets/data/');
$data = curl_exec($c);
curl_close($c);
$obj = json_decode($data);
//Get the value of $1 worth of bitcoin.
$url = "https://bitpay.com/api/rates";
$json = file_get_contents($url);
$data = json_decode($json, TRUE);
$rate = $data[0]["rate"]; //This is the value of $1 of bitcoins. Usually something like 0.0003484
/*
Calculations - $_POST['usd'] / $rate
Determine market rates for:
Alphacoin ALP
Americoin AMC
Anoncoin ANC
Betacoin BET
BBQcoin BQC
Cryptogenicbullion CGB
Cinnamoncoin CIN
Craftcoin CRC
Ceutsche eMark DEM
Dogecoin DOGE                    
*/
$ALP_ = print_r($obj->{'markets'}->{'ALP_BTC'}->{'marketstat'}->{'bid'}, true);
$ALP = $ALP_*$rate;
$AMC_ = print_r($obj->{'markets'}->{'AMC_BTC'}->{'marketstat'}->{'bid'}, true);
$AMC = $AMC_*$rate;
$ANC_ = print_r($obj->{'markets'}->{'ANC_BTC'}->{'marketstat'}->{'bid'}, true);
$ANC = $ANC_*$rate;
$BET_ = print_r($obj->{'markets'}->{'BET_BTC'}->{'marketstat'}->{'bid'}, true);
$BET = $BET_*$rate;
$BQC_ = print_r($obj->{'markets'}->{'BQC_BTC'}->{'marketstat'}->{'bid'}, true);
$BQC = $BQC_*$rate;
$CGB_ = print_r($obj->{'markets'}->{'CGB_BTC'}->{'marketstat'}->{'bid'}, true);
$CGB = $CGB_*$rate;
$CIN_ = print_r($obj->{'markets'}->{'CIN_BTC'}->{'marketstat'}->{'bid'}, true);
$CIN = $CIN_*$rate;
$CRC_ = print_r($obj->{'markets'}->{'CRC_BTC'}->{'marketstat'}->{'bid'}, true);
$CRC = $CRC_*$rate;
$DEM_ = print_r($obj->{'markets'}->{'DEM_BTC'}->{'marketstat'}->{'bid'}, true);
$DEM = $DEM_*$rate;
$DOGE_ = print_r($obj->{'markets'}->{'DOGE_BTC'}->{'marketstat'}->{'bid'}, true);
$DOGE = $DOGE_*$rate;
/*
Datacoin DTC
Elacoin ELC
Elephantcoin ELP
Emerald EMD
Franko FRK
*/
$DTC_ = print_r($obj->{'markets'}->{'DTC_BTC'}->{'marketstat'}->{'bid'}, true);
$DTC = $DTC_*$rate;
$ELC_ = print_r($obj->{'markets'}->{'ELC_BTC'}->{'marketstat'}->{'bid'}, true);
$ELC = $ELC_*$rate;
$ELP_ = print_r($obj->{'markets'}->{'ELP_BTC'}->{'marketstat'}->{'bid'}, true);
$ELP = $ELP_*$rate;
$EMD_ = print_r($obj->{'markets'}->{'EMD_BTC'}->{'marketstat'}->{'bid'}, true);
$EMD = $EMD_*$rate;
$FRK_ = print_r($obj->{'markets'}->{'FRK_BTC'}->{'marketstat'}->{'bid'}, true);
$FRK = $FRK_*$rate;
/*
Feathercoin FTC
Grandcoin GDC
Globalcoin GLC
Krugercoin KGC
Litecoin LTC
*/
$FTC_ = print_r($obj->{'markets'}->{'FTC_BTC'}->{'marketstat'}->{'bid'}, true);
$FTC = $FTC_*$rate;
$GDC_ = print_r($obj->{'markets'}->{'GDC_BTC'}->{'marketstat'}->{'bid'}, true);
$GDC = $GDC_*$rate;
$GLC_ = print_r($obj->{'markets'}->{'GLC_BTC'}->{'marketstat'}->{'bid'}, true);
$GLC = $GLC_*$rate;
$KGC_ = print_r($obj->{'markets'}->{'KGC_BTC'}->{'marketstat'}->{'bid'}, true);
$KGC = $KGC_*$rate;
$LTC_ = print_r($obj->{'markets'}->{'LTC_BTC'}->{'marketstat'}->{'bid'}, true);
$LTC = $LTC_*$rate;


/*
Megacoin MEC
Nanotoken NAN
Netcoin NET
Noirbits NRB
Novacoin NVC

*/
$MEC_ = print_r($obj->{'markets'}->{'MEC_BTC'}->{'marketstat'}->{'bid'}, true);
$MEC = $MEC_*$rate;
$NAN_ = print_r($obj->{'markets'}->{'NAN_BTC'}->{'marketstat'}->{'bid'}, true);
$NAN = $NAN_*$rate;
$NET_ = print_r($obj->{'markets'}->{'NET_BTC'}->{'marketstat'}->{'bid'}, true);
$NET = $NET_*$rate;
$NRB_ = print_r($obj->{'markets'}->{'NRB_BTC'}->{'marketstat'}->{'bid'}, true);
$NRB = $NRB_*$rate;
$NVC_ = print_r($obj->{'markets'}->{'NVC_BTC'}->{'marketstat'}->{'bid'}, true);
$NVC = $NVC_*$rate;
/*
Orbitcoin ORB
Peercoin PPC
Protoshares PTS
Quarkcoin QRK
Realcoin REC
*/
$ORB_ = print_r($obj->{'markets'}->{'ORB_BTC'}->{'marketstat'}->{'bid'}, true);
$ORB = $ORB_*$rate;
$PPC_ = print_r($obj->{'markets'}->{'PPC_BTC'}->{'marketstat'}->{'bid'}, true);
$PPC = $PPC_*$rate;
$PTS_ = print_r($obj->{'markets'}->{'PTS_BTC'}->{'marketstat'}->{'bid'}, true);
$PTS = $PTS_*$rate;
$QRK_ = print_r($obj->{'markets'}->{'QRK_BTC'}->{'marketstat'}->{'bid'}, true);
$QRK = $QRK_*$rate;
$REC_ = print_r($obj->{'markets'}->{'REC_BTC'}->{'marketstat'}->{'bid'}, true);
$REC = $REC_*$rate;


/*
Redcoin RED
Stablecoin SBC
Spots SPT
Tagcoin TAG
Terracoin TRC


*/
$RED_ = print_r($obj->{'markets'}->{'RED_BTC'}->{'marketstat'}->{'bid'}, true);
$RED = $RED_*$rate;
$SBC_ = print_r($obj->{'markets'}->{'SBC_BTC'}->{'marketstat'}->{'bid'}, true);
$SBC = $SBC_*$rate;
$SPT_ = print_r($obj->{'markets'}->{'SPT_BTC'}->{'marketstat'}->{'bid'}, true);
$SPT = $SPT_*$rate;
$TAG_ = print_r($obj->{'markets'}->{'TAG_BTC'}->{'marketstat'}->{'bid'}, true);
$TAG = $TAG_*$rate;
$TRC_ = print_r($obj->{'markets'}->{'TRC_BTC'}->{'marketstat'}->{'bid'}, true);
$TRC = $TRC_*$rate;
/*
Unobtanium UNO
Worldcoin WDC
Xencoin XNC
Primecoin XPM
Zetacoin ZET
*/
$UNO_ = print_r($obj->{'markets'}->{'UNO_BTC'}->{'marketstat'}->{'bid'}, true);
$UNO = $UNO_*$rate;
$WDC_ = print_r($obj->{'markets'}->{'WDC_BTC'}->{'marketstat'}->{'bid'}, true);
$WDC = $WDC_*$rate;
$XNC_ = print_r($obj->{'markets'}->{'XNC_BTC'}->{'marketstat'}->{'bid'}, true);
$XNC = $XNC_*$rate;
$XPM_ = print_r($obj->{'markets'}->{'XPM_BTC'}->{'marketstat'}->{'bid'}, true);
$XPM = $XPM_*$rate;
$ZET_ = print_r($obj->{'markets'}->{'ZET_BTC'}->{'marketstat'}->{'bid'}, true);
$ZET = $ZET_*$rate;
if($_POST['usd'] == "" or $_POST['usd'] > 10000000){$_POST['usd'] = "0";};
?>
