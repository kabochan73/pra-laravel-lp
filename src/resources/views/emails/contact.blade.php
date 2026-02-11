<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
</head>

<body>
    <h2>お問い合わせがありました</h2>

    <table>
        <tr>
            <th style="text-align: left; padding: 8px;">お名前</th>
            <td style="padding: 8px;">{{ $contact->name }}</td>
        </tr>
        <tr>
            <th style="text-align: left; padding: 8px;">メールアドレス</th>
            <td style="padding: 8px;">{{ $contact->email }}</td>
        </tr>
        <tr>
            <th style="text-align: left; padding: 8px;">お問い合わせ種別</th>
            <td style="padding: 8px;">{{ $contact->category }}</td>
        </tr>
        <tr>
            <th style="text-align: left; padding: 8px;">お問い合わせ内容だぜ</th>
            <td style="padding: 8px;">{!! nl2br(e($contact->message)) !!}</td>
        </tr>
    </table>
</body>

</html>
