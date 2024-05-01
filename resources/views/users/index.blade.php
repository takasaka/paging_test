<!DOCTYPE html>
<html>
<head>
    <title>ユーザー一覧</title>
</head>
<body>
    <h1>ユーザー一覧</h1>
    <ul>
        @foreach ($users as $user)
            <li>{{ $user->name }}</li>
        @endforeach
    </ul>

    {{ $users->links() }} <!-- ページネーションリンクを表示 -->
    <script src="https://stg-api.smartiq.chat/site_plugin.js?hotel_token=dxQDQKkGigYBt3x6vWNPWCCk"></script>
</body>
</html>
