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
        body { font-family: 'Inter', sans-serif; }
    </style>
</head>
<body class="bg-white text-gray-900 antialiased">

    {{-- ナビゲーション --}}
    <nav class="fixed top-0 left-0 right-0 z-50 bg-white/80 backdrop-blur-md border-b border-gray-100">
        <div class="max-w-6xl mx-auto px-6 py-4 flex items-center justify-between">
            <div class="flex items-center gap-2">
                {{-- ロゴアイコン --}}
                <svg class="w-8 h-8 text-indigo-600" viewBox="0 0 32 32" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <rect width="32" height="32" rx="8" fill="currentColor"/>
                    <path d="M10 16L14 20L22 12" stroke="white" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"/>
                </svg>
                <span class="text-xl font-bold text-gray-900">FlowSync</span>
            </div>
            <a href="#pricing" class="hidden sm:inline-flex items-center px-5 py-2 bg-indigo-600 text-white text-sm font-medium rounded-lg hover:bg-indigo-700 transition-colors">
                無料で始める
            </a>
        </div>
    </nav>

    {{-- ヒーローセクション --}}
    <section class="pt-32 pb-20 sm:pt-40 sm:pb-28 px-6">
        <div class="max-w-4xl mx-auto text-center">
            <div class="inline-flex items-center gap-2 px-4 py-1.5 bg-indigo-50 text-indigo-700 text-sm font-medium rounded-full mb-6">
                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"/></svg>
                AIによるタスク自動整理
            </div>
            <h1 class="text-4xl sm:text-5xl md:text-6xl font-extrabold tracking-tight text-gray-900 leading-tight mb-6">
                チームの仕事を、<br class="sm:hidden">
                <span class="text-indigo-600">もっとシンプルに。</span>
            </h1>
            <p class="text-lg sm:text-xl text-gray-500 max-w-2xl mx-auto mb-10 leading-relaxed">
                FlowSyncは、直感的なUIとリアルタイムコラボレーションで<br class="hidden sm:inline">
                チームのタスク管理をスムーズにするSaaSツールです。
            </p>
            <div class="flex flex-col sm:flex-row gap-4 justify-center">
                <a href="#pricing" class="inline-flex items-center justify-center px-8 py-3.5 bg-indigo-600 text-white font-semibold rounded-lg hover:bg-indigo-700 transition-colors shadow-lg shadow-indigo-200">
                    無料で始める
                    <svg class="w-5 h-5 ml-2" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"/></svg>
                </a>
                <a href="#features" class="inline-flex items-center justify-center px-8 py-3.5 border border-gray-200 text-gray-700 font-semibold rounded-lg hover:bg-gray-50 transition-colors">
                    機能を見る
                </a>
            </div>
        </div>
    </section>

    {{-- 特徴紹介セクション --}}
    <section id="features" class="py-20 sm:py-28 px-6 bg-gray-50">
        <div class="max-w-6xl mx-auto">
            <div class="text-center mb-16">
                <h2 class="text-3xl sm:text-4xl font-bold text-gray-900 mb-4">FlowSyncの3つの強み</h2>
                <p class="text-gray-500 text-lg">シンプルさと高機能を両立した、次世代のタスク管理</p>
            </div>
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                {{-- 特徴1 --}}
                <div class="bg-white rounded-2xl p-8 shadow-sm border border-gray-100 hover:shadow-md transition-shadow">
                    <div class="w-12 h-12 bg-indigo-100 rounded-xl flex items-center justify-center mb-6">
                        <svg class="w-6 h-6 text-indigo-600" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h7"/></svg>
                    </div>
                    <h3 class="text-xl font-bold text-gray-900 mb-3">直感的なUI</h3>
                    <p class="text-gray-500 leading-relaxed">
                        ドラッグ&ドロップでタスクを自由に整理。学習コストゼロで、誰でもすぐに使い始められます。
                    </p>
                </div>
                {{-- 特徴2 --}}
                <div class="bg-white rounded-2xl p-8 shadow-sm border border-gray-100 hover:shadow-md transition-shadow">
                    <div class="w-12 h-12 bg-indigo-100 rounded-xl flex items-center justify-center mb-6">
                        <svg class="w-6 h-6 text-indigo-600" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0z"/></svg>
                    </div>
                    <h3 class="text-xl font-bold text-gray-900 mb-3">リアルタイムコラボ</h3>
                    <p class="text-gray-500 leading-relaxed">
                        チームメンバーの変更が即座に反映。コメント・メンション機能で、スムーズなコミュニケーションを実現。
                    </p>
                </div>
                {{-- 特徴3 --}}
                <div class="bg-white rounded-2xl p-8 shadow-sm border border-gray-100 hover:shadow-md transition-shadow">
                    <div class="w-12 h-12 bg-indigo-100 rounded-xl flex items-center justify-center mb-6">
                        <svg class="w-6 h-6 text-indigo-600" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9.663 17h4.673M12 3v1m6.364 1.636l-.707.707M21 12h-1M4 12H3m3.343-5.657l-.707-.707m2.828 9.9a5 5 0 117.072 0l-.548.547A3.374 3.374 0 0014 18.469V19a2 2 0 11-4 0v-.531c0-.895-.356-1.754-.988-2.386l-.548-.547z"/></svg>
                    </div>
                    <h3 class="text-xl font-bold text-gray-900 mb-3">AI自動整理</h3>
                    <p class="text-gray-500 leading-relaxed">
                        AIがタスクの優先度を自動判定し、最適な順序を提案。チームの生産性を最大化します。
                    </p>
                </div>
            </div>
        </div>
    </section>

    {{-- 使い方ステップセクション --}}
    <section class="py-20 sm:py-28 px-6">
        <div class="max-w-4xl mx-auto">
            <div class="text-center mb-16">
                <h2 class="text-3xl sm:text-4xl font-bold text-gray-900 mb-4">3ステップで始められる</h2>
                <p class="text-gray-500 text-lg">セットアップは驚くほど簡単</p>
            </div>
            <div class="space-y-12 sm:space-y-16">
                {{-- ステップ1 --}}
                <div class="flex flex-col sm:flex-row items-start gap-6">
                    <div class="flex-shrink-0 w-14 h-14 bg-indigo-600 text-white rounded-2xl flex items-center justify-center text-2xl font-bold">
                        1
                    </div>
                    <div>
                        <h3 class="text-xl font-bold text-gray-900 mb-2">アカウントを作成</h3>
                        <p class="text-gray-500 leading-relaxed">メールアドレスまたはGoogleアカウントで30秒で登録完了。クレジットカードは不要です。</p>
                    </div>
                </div>
                {{-- ステップ2 --}}
                <div class="flex flex-col sm:flex-row items-start gap-6">
                    <div class="flex-shrink-0 w-14 h-14 bg-indigo-600 text-white rounded-2xl flex items-center justify-center text-2xl font-bold">
                        2
                    </div>
                    <div>
                        <h3 class="text-xl font-bold text-gray-900 mb-2">チームを招待</h3>
                        <p class="text-gray-500 leading-relaxed">リンクを共有するだけでメンバーを招待。既存のSlackやTeamsとも簡単に連携できます。</p>
                    </div>
                </div>
                {{-- ステップ3 --}}
                <div class="flex flex-col sm:flex-row items-start gap-6">
                    <div class="flex-shrink-0 w-14 h-14 bg-indigo-600 text-white rounded-2xl flex items-center justify-center text-2xl font-bold">
                        3
                    </div>
                    <div>
                        <h3 class="text-xl font-bold text-gray-900 mb-2">タスクを管理開始</h3>
                        <p class="text-gray-500 leading-relaxed">ボードを作成してタスクを追加するだけ。AIが自動で整理してくれるので、あとはチームで進めるだけです。</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- 料金プランセクション --}}
    <section id="pricing" class="py-20 sm:py-28 px-6 bg-gray-50">
        <div class="max-w-6xl mx-auto">
            <div class="text-center mb-16">
                <h2 class="text-3xl sm:text-4xl font-bold text-gray-900 mb-4">料金プラン</h2>
                <p class="text-gray-500 text-lg">チームの規模に合わせて選べるプラン</p>
            </div>
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8 max-w-5xl mx-auto">
                {{-- Free --}}
                <div class="bg-white rounded-2xl p-8 border border-gray-200 flex flex-col">
                    <h3 class="text-lg font-bold text-gray-900 mb-2">Free</h3>
                    <p class="text-gray-500 text-sm mb-6">個人やお試しに最適</p>
                    <div class="mb-8">
                        <span class="text-4xl font-extrabold text-gray-900">¥0</span>
                        <span class="text-gray-500">/月</span>
                    </div>
                    <ul class="space-y-3 mb-8 flex-1">
                        <li class="flex items-start gap-3 text-gray-600">
                            <svg class="w-5 h-5 text-indigo-500 flex-shrink-0 mt-0.5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/></svg>
                            タスク数 100件まで
                        </li>
                        <li class="flex items-start gap-3 text-gray-600">
                            <svg class="w-5 h-5 text-indigo-500 flex-shrink-0 mt-0.5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/></svg>
                            メンバー 3人まで
                        </li>
                        <li class="flex items-start gap-3 text-gray-600">
                            <svg class="w-5 h-5 text-indigo-500 flex-shrink-0 mt-0.5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/></svg>
                            基本的なボード機能
                        </li>
                    </ul>
                    <a href="#" class="block text-center py-3 border border-gray-200 text-gray-700 font-semibold rounded-lg hover:bg-gray-50 transition-colors">
                        無料で始める
                    </a>
                </div>
                {{-- Pro --}}
                <div class="bg-indigo-600 rounded-2xl p-8 border-2 border-indigo-600 flex flex-col relative shadow-xl shadow-indigo-200">
                    <div class="absolute -top-3 left-1/2 -translate-x-1/2 bg-indigo-500 text-white text-xs font-bold px-3 py-1 rounded-full">
                        人気
                    </div>
                    <h3 class="text-lg font-bold text-white mb-2">Pro</h3>
                    <p class="text-indigo-200 text-sm mb-6">成長するチームに</p>
                    <div class="mb-8">
                        <span class="text-4xl font-extrabold text-white">¥1,980</span>
                        <span class="text-indigo-200">/月</span>
                    </div>
                    <ul class="space-y-3 mb-8 flex-1">
                        <li class="flex items-start gap-3 text-indigo-100">
                            <svg class="w-5 h-5 text-indigo-300 flex-shrink-0 mt-0.5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/></svg>
                            タスク数 無制限
                        </li>
                        <li class="flex items-start gap-3 text-indigo-100">
                            <svg class="w-5 h-5 text-indigo-300 flex-shrink-0 mt-0.5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/></svg>
                            メンバー 20人まで
                        </li>
                        <li class="flex items-start gap-3 text-indigo-100">
                            <svg class="w-5 h-5 text-indigo-300 flex-shrink-0 mt-0.5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/></svg>
                            AI自動整理機能
                        </li>
                        <li class="flex items-start gap-3 text-indigo-100">
                            <svg class="w-5 h-5 text-indigo-300 flex-shrink-0 mt-0.5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/></svg>
                            Slack・Teams連携
                        </li>
                    </ul>
                    <a href="#" class="block text-center py-3 bg-white text-indigo-600 font-semibold rounded-lg hover:bg-indigo-50 transition-colors">
                        Proを始める
                    </a>
                </div>
                {{-- Enterprise --}}
                <div class="bg-white rounded-2xl p-8 border border-gray-200 flex flex-col">
                    <h3 class="text-lg font-bold text-gray-900 mb-2">Enterprise</h3>
                    <p class="text-gray-500 text-sm mb-6">大規模チーム向け</p>
                    <div class="mb-8">
                        <span class="text-4xl font-extrabold text-gray-900">要相談</span>
                    </div>
                    <ul class="space-y-3 mb-8 flex-1">
                        <li class="flex items-start gap-3 text-gray-600">
                            <svg class="w-5 h-5 text-indigo-500 flex-shrink-0 mt-0.5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/></svg>
                            Proの全機能
                        </li>
                        <li class="flex items-start gap-3 text-gray-600">
                            <svg class="w-5 h-5 text-indigo-500 flex-shrink-0 mt-0.5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/></svg>
                            メンバー無制限
                        </li>
                        <li class="flex items-start gap-3 text-gray-600">
                            <svg class="w-5 h-5 text-indigo-500 flex-shrink-0 mt-0.5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/></svg>
                            SSO・監査ログ
                        </li>
                        <li class="flex items-start gap-3 text-gray-600">
                            <svg class="w-5 h-5 text-indigo-500 flex-shrink-0 mt-0.5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/></svg>
                            専任サポート
                        </li>
                    </ul>
                    <a href="#" class="block text-center py-3 border border-gray-200 text-gray-700 font-semibold rounded-lg hover:bg-gray-50 transition-colors">
                        お問い合わせ
                    </a>
                </div>
            </div>
        </div>
    </section>

    {{-- CTAセクション --}}
    <section class="py-20 sm:py-28 px-6">
        <div class="max-w-3xl mx-auto text-center">
            <h2 class="text-3xl sm:text-4xl font-bold text-gray-900 mb-6">
                今すぐFlowSyncを<br class="sm:hidden">始めましょう
            </h2>
            <p class="text-gray-500 text-lg mb-10 leading-relaxed">
                無料プランでチームの生産性を体験してください。<br class="hidden sm:inline">
                クレジットカード不要、30秒で登録完了。
            </p>
            <a href="#" class="inline-flex items-center justify-center px-10 py-4 bg-indigo-600 text-white font-semibold text-lg rounded-lg hover:bg-indigo-700 transition-colors shadow-lg shadow-indigo-200">
                無料で始める
                <svg class="w-5 h-5 ml-2" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"/></svg>
            </a>
        </div>
    </section>

    {{-- フッター --}}
    <footer class="py-8 px-6 border-t border-gray-100">
        <div class="max-w-6xl mx-auto flex flex-col sm:flex-row items-center justify-between gap-4">
            <div class="flex items-center gap-2">
                <svg class="w-6 h-6 text-indigo-600" viewBox="0 0 32 32" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <rect width="32" height="32" rx="8" fill="currentColor"/>
                    <path d="M10 16L14 20L22 12" stroke="white" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"/>
                </svg>
                <span class="font-bold text-gray-900">FlowSync</span>
            </div>
            <p class="text-sm text-gray-400">&copy; {{ date('Y') }} FlowSync Inc. All rights reserved.</p>
        </div>
    </footer>

</body>
</html>
