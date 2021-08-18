<html>
<head>
 
</head>
 <body>
  
  <center><h1 style="border: 2px solid Violet;">Nirawan Ausakan 62105077</h1> </center><br>

<center><iframe src= "https://thingspeak.com/channels/1458420/charts/1?bgcolor=%23ffffff&color=%23d62020&dynamic=true&results=60&type=line&update=15"width="450" height="260"></iframe><br><br>
  <?php
        $api_url = 'https://api.thingspeak.com/channels/1458420/fields/1.json?results=1';
        $json_data = file_get_contents($api_url);
        $response_data = json_decode($json_data);
        $user_data = $response_data->feeds;
        $user_data = array_slice($user_data, 0);
        foreach ($user_data as $user) {
            echo "Humidity: ".$user->field1;
            echo " %";
         }
        ?>
 <br>
    <br>
    
<iframe src="https://thingspeak.com/channels/1458420/charts/2?bgcolor=%23ffffff&color=%23d62020&dynamic=true&results=60&type=line&update=15"width="450" height="260"></iframe><br><br>
   <?php
        $api_url = 'https://api.thingspeak.com/channels/1458420/fields/2.json?results=1';
        $json_data = file_get_contents($api_url);
        $response_data = json_decode($json_data);
        $user_data = $response_data->feeds;
        $user_data = array_slice($user_data, 0);
        foreach ($user_data as $user) {
             echo "Temperature: ".$user->field2;
             echo " C"; 
         }
        ?><br>
        <br>
<center><iframe src="https://thingspeak.com/channels/1458420/maps/channel_show"width="450" height="260"></iframe></center>
       <br>
 <script type="text/JavaScript">
<!--
function timedRefresh(timeoutPeriod) {
    setTimeout("location.reload(true);",timeoutPeriod);
}
//   -->
</script>
</head>
<body onload="JavaScript:timedRefresh(6000);">
  </body>
</html>

