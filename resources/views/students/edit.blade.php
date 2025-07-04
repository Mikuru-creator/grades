<!DOCTYPE html>
<html>
<head>
    <title>学生編集</title>
</head>
<body>
    <h1>学生編集フォーム</h1>

    <form action="/students/{{ $student->id }}" method="POST">
        @csrf
        <label>名前: <input type="text" name="name" value="{{ $student->name }}"></label><br>
        <label>年齢: <input type="number" name="age" value="{{ $student->age }}"></label><br>
        <label>学年: <input type="text" name="grade" value="{{ $student->grade }}"></label><br>
        <button type="submit">更新</button>
    </form>

    <a href="/students">← 戻る</a>
</body>
</html>