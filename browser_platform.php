<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Browser& platform</title>
</head>
<body>
   <?php
   $arr_browsers = ["Opera", "Edg", "Chrome", "Safari", "Firefox", "MSIE", "Trident"];
 
   $agent = $_SERVER['HTTP_USER_AGENT'];
    
   $user_browser = '';
   foreach ($arr_browsers as $browser) {
       if (strpos($agent, $browser) !== false) {
           $user_browser = $browser;
           break;
       }   
   }
     
   switch ($user_browser) {
       case 'MSIE':
           $user_browser = 'Internet Explorer';
           break;
     
       case 'Trident':
           $user_browser = 'Internet Explorer';
           break;
     
       case 'Edg':
           $user_browser = 'Microsoft Edge';
           break;
   }
   
        $user_platform=" ";
        
        if(preg_match("/windows/i","$agent")){
            $user_platform = "windows";
        }elseif(preg_match("/Linux/i","$agent")){
            $user_platform = "Linux";
        }
        echo "You are using $user_browser on $user_platform.";
   ?>
</body>
</html>