<?php
echo $_POST['id'].'<br>';
echo $_POST['username'].'<br>';
echo $_POST['age'].'<br>';
echo $_POST['contact'].'<br>';
echo $_POST['email'].'<br>';
?>


<html>
<head><title>Input Data</title></head>

<body>
    <form action="input.php" method="post">
      ID - <input name="id" type="text" placeholder="Enter ID"><br>
      UserName - <input name="username" type="text" placeholder="Enter Username"><br>
      Age - <input name="age" type="text" placeholder="Enter Age"><br>
      Contact - <input name="contact" type="text" placeholder="Enter Contact"><br>
      EMail - <input name="email" type="text" placeholder="Enter E-Mail"><br>
      <input name="submit" type="submit">
    </form>
</body>
</html>