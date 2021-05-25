<!DOCTYPE HTML>
<html>
<head>
  <title>Admin</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="icon" type="image/png" href="images/icons/cloudicon.png"/>
  <meta http-equiv="content-type" content="text/html; charset=windows-1252" />
  <link rel="stylesheet" type="text/css" href="css/style.css" title="style" />
  <link rel="stylesheet" type="text/css" href="css/style2.css" title="style" />
  <link rel="stylesheet" type="text/css" href="css/style3.css" title="style" />
</head>
<body>
  <div id="main">
    <div id="header">
      <div id="logo">
        <div id="logo_text">
        </div>
      </div>
      <div id="menubar">
        <ul id="menu">
          <li><a href="Admin_Page1.html">Home</a></li>
          <li><a href="Admin_Page2.html">Encrypt Files</a></li>
          <li class="selected"><a href="Admin_Page3.php">Share Files</a></li>
          <li><a href="Index.html">Logout</a></li>
        </ul>
      </div>
    </div>
    <div id="site_content">
      <div id="content">
        <h2>Share Files :</h2>
        <form action="Upload.php" method="POST" enctype="multipart/form-data">
            <p><span>Select File : </span> &nbsp;&nbsp; <input type="file" name="file" id="file"></p>
            <p style="padding-top: 15px"><span> &nbsp; </span><input class="upload" type="submit" name="submit" value="Upload"></p>
        </form>

        <br>
        <table style="width:100%;">
          <tr>
            <th>File Id</th>
            <th>File Name</th>
          </tr>
          <?php
           /* $files = glob("uploads/.*");
            for($i = 0; $i < count($files); $i++) {
              $uploaded_file = $files[$i];
              $supported_file = array('txt', 'jpg', 'enc', 'dec');
              $ext = strtolower(pathinfo($uploaded_file, PATHINFO_EXTENSION));
              if(in_array($ext, $supported_file)) {
                echo "<tr><td>";
                echo $i+1;
                echo "</td><td>";
                echo basename($uploaded_file);
                echo "</td></tr>";
              }
              else {
                continue;
              }
            }*/
            
             
          $con= new mysqli("sql6.freesqldatabase.com","sql6414256","HPAdV5nHNn","sql6414256");
          $query="SELECT File_ID,Filename FROM upload";
          $result=mysqli_query($con,$query);
          while($row=mysqli_fetch_array($result))
          {
             echo "<tr><td>" . $row['File_ID'] . "</td><td>" . $row['Filename'] . "</td></tr>";
          }
        
        ?>
        </table>

      </div>
    </div>
    <div id="footer">
    </div>
  </div>
</body>
</html>