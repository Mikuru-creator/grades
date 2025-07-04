<!DOCTYPE html>
<html>
<head>
    <title>学生登録</title>
</head>
<body>
    <h1>学生登録フォーム</h1>

    <form action="/students" method="POST">
        @csrf
        <label>名前: <input type="text" name="name"></label><br>
        <label>年齢: <input type="number" name="age"></label><br>
        <label>学年: <input type="text" name="grade"></label><br>
        <button type="submit">登録</button>
    </form>

    <a href="/students">← 戻る</a>
</body>
</html>