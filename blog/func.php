<?php  

 if(isset($_POST['submit'])) {

  $pendapatnya = htmlspecialchars($_POST['pendapat']);
  $usernamenya = htmlspecialchars($_POST['username']);
  $day = date("l");
  
  $new_data = array(
  "pdt" => $pendapatnya,
  "name" => $usernamenya,
  "hari" => $day
  );

  if(filesize("data.json") == 0) {
  
  $first_record = array($new_data);
  $data_to_save = $first_record;

  } else {

  $old_records = json_decode(file_get_contents("data.json"));
  array_push($old_records, $new_data);
  $data_to_save = $old_records;

 }

 if(!file_put_contents("data.json", json_encode($data_to_save, JSON_PRETTY_PRINT), LOCK_EX)) {
  
  $error = "Erorr!!!!";

 } else {

  $succes = "Success!!!!";

 }

}


if(isset($_POST['hapus'])) {
  
 $del = file_get_contents("data.json");
 $data =json_decode($del, true);

 foreach ($data as $key => $dele) {

   if ($dele['pdt']) {

    array_splice($data, $key);
   }

 }

 $json_file = json_encode($data, JSON_PRETTY_PRINT);
 $del = file_put_contents("data.json", $json_file);

}

 ?>