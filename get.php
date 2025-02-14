
<?php
  if(isset($_POST)) {
  $postData = file_get_contents('php://input');
  $data = json_decode($postData, true);
  
  file_put_contents('items.json', json_encode($data));
  echo $data;
    

} else echo "No data";
?>
