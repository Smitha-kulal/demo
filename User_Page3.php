<!DOCTYPE HTML>
<html>
<head>
  <title>User</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="icon" type="image/png" href="images/icons/cloudicon.png"/>
  <meta http-equiv="content-type" content="text/html; charset=windows-1252" />
  <link rel="stylesheet" type="text/css" href="css/style.css" title="style" />
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
          <li><a href="User_Page1.html">Home</a></li>
          <li class="selected"><a href="User_Page3.php">View Shared Files</a></li>
          <li><a href="User_Page2.html">Decrypt Files</a></li>
          <li><a href="Index.html">Logout</a></li>
        </ul>
      </div>
    </div>
    <div id="site_content">
      <div id="content">
        <h2>View Shared Files :</h2>
        <br>
        <table style="width:100%;">
          <tr>
            <th>File Id</th>
            <th>File Name</th>
            <th>Action</th>
          </tr>
          <?php
            
             $con= new mysqli("sql6.freesqldatabase.com","sql6414256","HPAdV5nHNn","sql6414256");
            $query="SELECT File_ID,Filename FROM upload";
            $res=mysqli_query($con,$query);
            while($row=mysqli_fetch_array($res))
            {
               echo "<tr><td>" . $row['File_ID'] . "</td><td>" . $row['Filename'] . "</td><td>" ;
            
            
                echo '<a href="Download.php?file=' . $row['Filename']. '">Download</a>';
                echo "</td></tr>";
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