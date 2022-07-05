<?php  

 if(isset($_POST['submit'])) {

  $pesanya = htmlspecialchars($_POST['pesan']);
  $day = date("l");

  $new_data = array(
  "pesan" => $pesanya,
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

   if ($dele['pesanya']) {

    array_splice($data, $key);
   }

 }

 $json_file = json_encode($data, JSON_PRETTY_PRINT);
 $del = file_put_contents("data.json", $json_file);

}

 ?>