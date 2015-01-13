<?php

require_once('helper.php');




?>





<!-- <body onload="myFunction2([4.8], [3.5])"> -->
<body>
<canvas id="myLineChart" width="400" height="400"></canvas>
<canvas id="myBarChart" width="400" height="400"></canvas>
  
  <?php include 'for_zad2/pogoda_scripts.html' ?>

<script>
    var data = <?php echo json_encode($pogoda); ?>; //Don't forget the extra semicolon!
  
//     var
  
  var objArray = [{foo:1}, {foo:1}];
   var result = objArray.map(function(a) {return a.foo;});
 
  var a = {"apples": 3, "oranges": 4, "bananas": 42};  
  array_keys = [];
  array_values = [];
  for (var key in a) {
    array_keys.push(key);
    array_values.push(a[key]);
}
  
//   a=data;
//   array_keys = [];
//   array_temps = [];
//   array_pres = [];
//   for (var key in a) {
//     array_keys.push(key);
//     array_temps.push(a[key].temp);
//     array_pres.push(a[key].pressure);
// }
  
//   myFunction2([data.olsztyn.temp], [data.rzeszow.temp]);
  
  
  MYF(data, 'temp');
  
</script>
  
<br>
hello
    
<?php
  require_once('for_zad2/save_to_file.php');
  FileIO::save_to_file('asdasd', 'a.txt');  
  FileIO::append_to_file('11111', 'a.txt');  
  FileIO::better_append_to_file('22222', 'a.txt');  

$endpoint = 'http://svcs.ebay.com/services/search/FindingService/v1';  // URL to call
$query = 'iphone';                  // Supply your own query keywords as needed

// Construct the findItemsByKeywords POST call
// Load the call and capture the response returned by the eBay API
// The constructCallAndGetResponse function is defined below
// $resp = simplexml_load_string(constructPostCallAndGetResponse($endpoint, $query));
$url = "http://api.openweathermap.org/data/2.5/find?q=Olsztyn,pl&mode=xml";
$xml = simplexml_load_file($url);
// $xml = simplexml_load_string($url);
print_r($xml);
$json = json_encode($xml);
echo '<br>';
print_r($json);
echo '<br>';
$dec = json_decode($json, true);
echo '<br>';
print_r($dec);


echo '<br>';
echo '<br>';
$response =  Helper::get_response('http://api.openweathermap.org/data/2.5/group?id=524901,703448,2643743&units=metric');
echo $response;
FileIO::save_to_file($response, 'response.txt');  

// echo $dec;
$x = json_decode($json);
echo $x;
Helper::show_for_many($x);

?>
</body>