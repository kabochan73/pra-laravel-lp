<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>FlowSync — チーム向けタスク管理・コラボレーション</title>
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=inter:400,500,600,700,800" rel="stylesheet" />
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <style>
        body {
            font-family: 'Inter', sans-serif;
        }
    </style>
</head>

<body class="bg-white text-gray-900 antialiased">

    {{-- ナビゲーション --}}
    <x-lp-nav />

    {{-- ヒーローセクション --}}
    <x-hero />

    {{-- 特徴紹介セクション --}}
    <x-features />

    {{-- 使い方ステップセクション --}}
    <x-steps />

    {{-- 料金プランセクション --}}
    <x-pricing />

    {{-- お問い合わせセクション --}}
    <x-contact />

    {{-- CTAセクション --}}
    <x-cta />

    {{-- フッター --}}
    <x-lp-footer />

</body>

</html>
