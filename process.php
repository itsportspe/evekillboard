<?php include 'toptemplate.php'; ?>

<?php

$url = $_POST['esikm'];

$ch = curl_init();
// Disable SSL verification
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
// Will return the response, if false it prints the response
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
// Set the url
curl_setopt($ch, CURLOPT_URL, $url);
// Execute
$result=curl_exec($ch);
// Closing
curl_close($ch);
$testesi = json_decode($result, true);
$k=0;

echo "<p class='text-white'>";
foreach ($testesi as $key1 => $value) {
  echo "Key: $key1; Value: $value --------  ";
  if ($key1 == "victim") {
    foreach ($testesi["victim"] as $key2 => $value) {
      if ( $key2 != "items" ) { echo "Key: $key2; Value: $value --------  "; }
      if ($key2 == "items") {
        for ($i=0; $i < count($testesi["victim"]["items"]); $i++) {
          echo "<br>";
          foreach ($testesi["victim"]["items"][$i] as $key3 => $value) {
          if ( $key3 != "items" ) { echo "<br>field $i = Key: $key3 - Value: $value --------  "; }
            if ($key3 == "items") {
              for ($j=0; $j < count($testesi["victim"]["items"][$i]["items"]); $j++) {
                echo "<br>";
                foreach ($testesi["victim"]["items"][$i]["items"][$j] as $key4 => $value) {
                    echo "<br>----------------------- field $j = Key: $key4 - Value: $value --------  ";
                }
            }
          }
        }
//        foreach ($testesi["victim"]["items"] as  $key3 => $value) {
//          var_dump($value);
//         for ($i=0; $i < count($testesi["victim"]["items"][$key]); $i++) {
//            foreach ($testesi["victim"]["items"]["$value"] as $key4 => $value2) {
//              $k++; echo "  k = $k";
              // echo "Key: $key; Value: $value ------";
/*              if ($testesi["victim"]["items"][$i] == "items") {
                foreach ($testesi["victim"]["items"][$i]["items"] as $key => $value) {
                  for ($j=0; $j < count($testesi["victim"]["items"][$i]["items"]); $j++) {
                    foreach ($testesi["victim"]["items"][$i]["items"][$j] as $key => $value) {
                      echo "Key: $key; Value: $value ------";
                    }
                  }
                }

              } */
            }
          }
        }
      }
    }

//  }
// }
/*
echo '$testesi' . "is " . count($testesi) . "length<BR><BR>";
echo '$testesi["victim"]' . "is " . count($testesi["victim"]) . " length<BR><BR>";
echo '$testesi["victim"]["items"]' . "is " . count($testesi["victim"]['items']) . " length<BR><BR>";
echo '$testesi["victim"]["items"][79]' . "is " . count($testesi["victim"]["items"][79]) . " length<BR><BR>";
echo '$testesi["victim"]["items"][79]["items"]' . "is " . count($testesi["victim"]["items"][79]["items"]) . " length<BR><BR>";
echo '$testesi["victim"]["items"][79]["items"][0]' . "is " . count($testesi["victim"]["items"][79]["items"][0]) . " length<BR><BR>";
echo $result; */
echo '</p>';


?>

<?php include 'connectToDb.php'; ?>

<?php /*

$sqlTable = "INSERT INTO ";
$sqlPartOne = "(killmail_id";
$sqlPartTwo =  "VALUES ($testesi[killmail_id]";
$sql = "";

function checkCorporationId($corpId){
  if ($corpId) {
    return $corpId;

  } elseif (!$corpId) {
    return 0;
  }
}
  function checkAllianceId($alliId){
    if ($alliId) {
      return $alliId;

    } elseif (!$alliId) {
      return 0;
    }
}
function checkCharacterId($charId){
  if ($charId) {
    return $charId;

  } elseif (!$charId) {
    return 0;
  }
}

function buildsqlmainNames() {

}

function buildsqlmainValues() {

}

function getKey($arr, $path) { //get key
    // save last step
    $s = array_pop($path);
    // go through the array to the desired point
    foreach($path as $x) {
        $arr = $arr[array_keys($arr)[$x]];
    }
    // get target key
    return array_keys($arr)[$s];
}

function get_by_offsets($path, $array) { //get value
    $temp = &$array;

    foreach($path as $key) {
        $temp = array_values($temp);
        $temp =& $temp[$key];
    }
    return $temp;
}

$valueResult = get_by_offsets([0, 1], $deepArray); //returns NULL if the path doesn't exist

// example: echo getKey($deepArray, [0,1]);

function traversJson2($table) {
  foreach ($testesi as $key => $value) {
    echo "Key: $key; Value: $value<br />\n";
  }

}


function traversJson($table) {
  $travelJson = count($testesi) - 1;
  while (i <= $travelJson) { //travel the main level
    $sqlPartOne .= sprintf(",(%s)", key($testesi[i][f]));
    $sqlPartTwo .= sprintf(",(%s)", $testesi[i][f]);

    if (key($testesi[i]) == "victim"){ //travel victim, and include everything in the main table except iems and position
        while (f <= count($testesi[i]) -1 ) {
          $sqlPartOne .= sprintf(",(%s)", key($testesi[i][f]));
          $sqlPartTwo .= sprintf(",(%s)", $testesi[i][f]);

          if (key($testesi[i][f]) == "items") { //switch to the items array travel items array
            while (g <= count($testesi[i][f]) -1 ) { //travel items array
              while (h <= count($testesi[i][f][g]) -1 ) { //include everything in the items00 table except items
                if (h == count($testesi[i][f][g][h])){
                  $sqlPartOne .= sprintf(",(%s,)", key($testesi[i][f][g][h][e][d]));
                  $sqlPartTwo .= sprintf(",(%s)", $testesi[i][f][g][h][e][d]);
                  $sql = "\"" . $sqlTable . key($testesi[i][f][g][h] . $sqlPartOne . $sqlPartTwo . ")\"";

                    // Finally! send the data to the database, and reset the sql variables :s
                    if (mysqli_query($conn, $sql)) {
                        echo "<p class='text-white'>New record created successfully</p>";
                        $sqlTable = "INSERT INTO ";
                        $sqlPartOne = "(killmail_id";
                        $sqlPartTwo =  "VALUES ($testesi[killmail_id]";
                        $sql = "";

                    } else {
                        echo "<p class='text-white'>Error: " . $sql . "<br>" . mysqli_error($conn)."</p>";
                    }


                } elseif (d == 0)) {
                    $sqlPartOne .= sprintf("(%s)", key($testesi[i][f][g][h][e][d]));
                    $sqlPartTwo .= sprintf(",(%s),", $testesi[i][f][g][h][e][d]);
                    d++;

                } elseif (d != 0 && d !=count($testesi[i][f][g][h][d][e]) ) {
                    $sqlPartOne .= sprintf(",(%s)", key($testesi[i][f][g][h][e][d]));
                    $sqlPartTwo .= sprintf(",(%s),", $testesi[i][f][g][h][e][d]);
                    d++;

                }

                if (key($testesi[i][f][g][h]) == "items"){  //travel the deeper items and include everything in the items01 table
                  while (e <= count($testesi[i][f][g][h]) -1){
                    while (d <= count($testesi[i][f][g][h][e]) -1){
                      if (d == count($testesi[i][f][g][h][e])){
                        $sqlPartOne .= sprintf(",(%s,)", key($testesi[i][f][g][h][e][d]));
                        $sqlPartTwo .= sprintf(",(%s)", $testesi[i][f][g][h][e][d]);
                        $sql = "\"" . $sqlTable . key($testesi[i][f][g][h] . $sqlPartOne . $sqlPartTwo . ")\"";

                          // Finally! send the data to the database, and reset the sql variables :s
                          if (mysqli_query($conn, $sql)) {
                              echo "<p class='text-white'>New record created successfully</p>";
                              $sqlTable = "INSERT INTO ";
                              $sqlPartOne = "(killmail_id";
                              $sqlPartTwo =  "VALUES ($testesi[killmail_id]";
                              $sql = "";

                          } else {
                              echo "<p class='text-white'>Error: " . $sql . "<br>" . mysqli_error($conn)."</p>";
                          }


                      } elseif (d == 0)) {
                          $sqlPartOne .= sprintf("(%s)", key($testesi[i][f][g][h][e][d]));
                          $sqlPartTwo .= sprintf(",(%s),", $testesi[i][f][g][h][e][d]);
                          d++;

                      } elseif (d != 0 && d !=count($testesi[i][f][g][h][d][e]) ) {
                          $sqlPartOne .= sprintf(",(%s)", key($testesi[i][f][g][h][e][d]));
                          $sqlPartTwo .= sprintf(",(%s),", $testesi[i][f][g][h][e][d]);
                          d++;

                      }


                    }

            e++; }


                }
              }
        g++; }
            }
          }
        }
      }
    }

  }
}

//  if (key($testesi[i]) == "victim" || key($testesi[i]) == "attackers") {
//    $i = 0;

$howManyAttackers = count($testesi[attackers]) - 1;
$howManyItems = count($testesi[victim][items]) - 1;

$sqlmain = "INSERT INTO main (killmail_id,
                              killmail_time,
                              damage_taken,
                              ship_type_id,
                              solar_system_id,
                              character_id,
                              corporation_id,
                              alliance_id,
                              esilink,
                              json,
                              )
                      VALUES ('".$testesi["killmail_id"] ."', '".
                              $testesi["killmail_time"] ."', '".
                              $testesi["victim"]["damage_taken"] ."', '".
                              $testesi["victim"]["ship_type_id"] ."', '".
                              $testesi["solar_system_id"] ."', '".
                              $charIsTrue = checkCharacterId($testesi["victim"]["character_id"]) ."', '".
                              $corpIsTrue = checkCorporationId($testesi["victim"]["corporation_id"]) ."', '".
                              $allianceIsTrue = checkAllianceId($testesi["victim"]["alliance_id"]) ."', '".
                              $url ."', '".
                              $result ."')";

$sqlItems = "INSERT INTO items00 (""

                              )
                      VALUES ($testesi["killmail_id"],
                              )";


if ($conn->query())

*/
?>


<?php include 'bottomtemplate.php'; ?>
