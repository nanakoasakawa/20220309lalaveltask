<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>COACHTECH</title>
  <link rel="stylesheet" href="css/reset.css"/>
  <link rel="stylesheet" href="css/style.css"/>
</head>
<body>
  <form action="/todo/create" method="POST">
    @csrf
    <label>Todo List</label><br>
    <input type="text" name="content"><br>
    


</body>
</html>