<?php 

if(isset($_POST['submit'])){
if(count($_FILES['upload']['name']) > 0){
    //Loop through each file
    for($i=0; $i<count($_FILES['upload']['name']); $i++) {
      //Get the temp file path
        $tmpFilePath = $_FILES['upload']['tmp_name'][$i];

        //Make sure we have a filepath
        if($tmpFilePath != ""){
        
            //save the filename
            $shortname = $_FILES['upload']['name'][$i];

            //save the url and the file
            $filePath = "../libs/slides/" . date('d-m-Y-H-i-s').'-'.$_FILES['upload']['name'][$i];

            //Upload the file into the temp dir
            if(move_uploaded_file($tmpFilePath, $filePath)) {

                $files[] = $shortname;
                $date = date('Y-m-d');
                //insert into db 
                //use $shortname for the filename
                //use $filePath for the relative url to the file
                $query = "UPDATE `slides` SET `pathUrl`='".$filePath."',`filename`='".$shortname."',`deskripsi`='Lorem ipsum dolor sit amet, consectetur adipisicing elit.',`last_updated`='".$date."' WHERE `idAdmin`='".$_SESSION['idAdmin']."'";
                $sql = mysql_query($query);

                if ($sql) {
                  $msg = "Berhasil";
                }else{
                  $msg = "Gagal";
                }

            }
          }
    }
}

//show success message
echo "<h1>Uploaded:</h1>";    
if(is_array($files)){
    echo "<ul>";
    foreach($files as $file){
        echo "<li>$file --> $msg</li>";
    }
    echo "</ul>";
}
}

?>