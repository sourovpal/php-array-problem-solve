<?php
function groupArray($arrays, $current = []) {
    if (empty($arrays)) {
        return [$current];
    }
    $result = [];
    $firstArray = array_shift($arrays);
    foreach ($firstArray as $value) {
        $result = array_merge($result, groupArray($arrays, array_merge($current, [$value])));
    }
    return $result;
}
$arrays = [
    ['Red', 'Green', 'Yellow'],
    ['S', 'M', 'L'],
    ['100', '200', '300']
];
$result = groupArray($arrays);
print_r($result);
?>




<?php
  $arrays = [
      ['Red', 'Green', 'Yellow'], 
      ['S', 'M', 'L']
  ];
  $result = [[]];
  foreach($arrays as $array_key => $array_values){
      $temp = [];
      foreach($result as $result_key => $result_value){
        foreach($array_values as $key => $value){
            $temp[] = $result_value + array($array_key => $value);
        }
      }
      $result = $temp;
  }
  echo '<pre>';
  print_r($result);
?>
