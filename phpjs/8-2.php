<!DOCTYPE html>
<html>
<head>
     <meta charset="utf-8">
</head>
<body>

  <?php
    $password = $_GET["password"];
    if($password == "1111"){
        echo "환영합니다";
    } else {
        echo "비밀번호를 제대로 입력해주세요.";
    }
   ?>

</body>
</html>
