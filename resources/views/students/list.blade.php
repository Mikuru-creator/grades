<!DOCTYPE html>
<html>
<head>
    <title>学生一覧</title>
</head>
<body>
    <h1>学生一覧</h1>
    <a href="/students/create">新規登録</a>
        <table border="1">
        <thead>
            <tr>
                <th>名前</th>
                <th>年齢</th>
                <th>成績</th>
                <th>操作</th>
            </tr>
        </thead>
        <tbody>
            @foreach($students as $student)
                <tr>
                    <td>{{ $student->name }}</td>
                    <td>{{ $student->age }}</td>
                    <td>{{ $student->grade }}</td>
                    <td>
                        <a href="/students/{{ $student->id }}/edit">編集</a>
                        <form action="/students/{{ $student->id }}" method="POST" style="display:inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit">削除</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>

</body>
</html>