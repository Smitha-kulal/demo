

<?php

$con= new mysqli("sql6.freesqldatabase.com","sql6414256","HPAdV5nHNn","sql6414256");
if($con->connect_error)
 {
	 die("Failed to Connect : ".$con->connect_error);
 }
 else
 {  
    $statusMsg = '';

// File upload path
$targetDir = "uploads/";
$file = basename($_FILES["file"]["name"]);
$fileName =  $file ;
$uploadOk = 1;
$targetFilePath = $targetDir . $fileName;
$fileType = pathinfo($targetFilePath,PATHINFO_EXTENSION);

if(isset($_POST["submit"]) && !empty($_FILES["file"]["name"])){
    // Allow certain file formats
    $allowTypes = array('txt','pdf','docx','enc','dec');
    if(in_array($fileType, $allowTypes)){
         $sql = "INSERT into upload (Filename) VALUES ('".$fileName."')";
             $insert = mysqli_query($con,$sql); 
        echo " hello";
        if(move_uploaded_file($_FILES["file"]["tmp_name"], $targetFilePath)) {
			
            //$insert = $db->query("INSERT into file (file_name, uploaded_on) VALUES ('".$fileName."', NOW())");
            if($insert){
                $statusMsg = "The file ".$fileName. " has been uploaded successfully.";
            }
        else{
                $statusMsg = "File upload failed, please try again.";
            } 
            else{
                echo "sorry"
            }
        }
       
    
    else{
        $statusMsg = 'Sorry, only JPG, JPEG, PNG, GIF, & PDF files are allowed to upload.';
    }
}
else{
    $statusMsg = 'Please select a file to upload.';
}

// Display status message
echo $statusMsg;
mysqli_close($con);
 }
?>
