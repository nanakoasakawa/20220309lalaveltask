<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>COACHTECH</title>
  <link rel="stylesheet" href="CSS/style.css" />
  <link rel="stylesheet" href="CSS/style.css" />
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link
    href="https://fonts.googleapis.com/css2?family=Amatic+SC:wght@700&family=Indie+Flower&family=Shippori+Mincho&display=swap"
    rel="stylesheet">
</head>

<body>

  <div class="form">
    <form action="/todo/create" method="POST">
      @csrf
      <label class="label1">Todo List</label><br>
      <input type="text" name="content">
      <input type="submit" class="botton1" value="追加"><br>
      <table>
        <tr>
          <th>作成日</th>
          <th>
            <label>タスク名</label>
          </th>
          <th>更新</th>
          <th>削除</th>
        </tr>
        <tr>
          <td>2022/3/10</td>
          <td><input type="text" name="content"></td>
          <td><input type="submit" class="botton2" value="更新"></td>
          <td><input type="submit" class="botton3" value="削除"></td>
        </tr>
      </table>
  </div>

</body>

</html>