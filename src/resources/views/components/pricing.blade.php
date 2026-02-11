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
                        <svg class="w-5 h-5 text-indigo-500 shrink-0 mt-0.5" fill="none" stroke="currentColor"
                            viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M5 13l4 4L19 7" />
                        </svg>
                        タスク数 100件まで
                    </li>
                    <li class="flex items-start gap-3 text-gray-600">
                        <svg class="w-5 h-5 text-indigo-500 shrink-0 mt-0.5" fill="none" stroke="currentColor"
                            viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M5 13l4 4L19 7" />
                        </svg>
                        メンバー 3人まで
                    </li>
                    <li class="flex items-start gap-3 text-gray-600">
                        <svg class="w-5 h-5 text-indigo-500 shrink-0 mt-0.5" fill="none" stroke="currentColor"
                            viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M5 13l4 4L19 7" />
                        </svg>
                        基本的なボード機能
                    </li>
                </ul>
                <a href="#"
                    class="block text-center py-3 border border-gray-200 text-gray-700 font-semibold rounded-lg hover:bg-gray-50 transition-colors">
                    無料で始める
                </a>
            </div>
            {{-- Pro --}}
            <div
                class="bg-indigo-600 rounded-2xl p-8 border-2 border-indigo-600 flex flex-col relative shadow-xl shadow-indigo-200">
                <div
                    class="absolute -top-3 left-1/2 -translate-x-1/2 bg-indigo-500 text-white text-xs font-bold px-3 py-1 rounded-full">
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
                        <svg class="w-5 h-5 text-indigo-300 shrink-0 mt-0.5" fill="none" stroke="currentColor"
                            viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M5 13l4 4L19 7" />
                        </svg>
                        タスク数 無制限
                    </li>
                    <li class="flex items-start gap-3 text-indigo-100">
                        <svg class="w-5 h-5 text-indigo-300 shrink-0 mt-0.5" fill="none" stroke="currentColor"
                            viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M5 13l4 4L19 7" />
                        </svg>
                        メンバー 20人まで
                    </li>
                    <li class="flex items-start gap-3 text-indigo-100">
                        <svg class="w-5 h-5 text-indigo-300 shrink-0 mt-0.5" fill="none" stroke="currentColor"
                            viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M5 13l4 4L19 7" />
                        </svg>
                        AI自動整理機能
                    </li>
                    <li class="flex items-start gap-3 text-indigo-100">
                        <svg class="w-5 h-5 text-indigo-300 shrink-0 mt-0.5" fill="none" stroke="currentColor"
                            viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M5 13l4 4L19 7" />
                        </svg>
                        Slack・Teams連携
                    </li>
                </ul>
                <a href="#"
                    class="block text-center py-3 bg-white text-indigo-600 font-semibold rounded-lg hover:bg-indigo-50 transition-colors">
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
                        <svg class="w-5 h-5 text-indigo-500 shrink-0 mt-0.5" fill="none" stroke="currentColor"
                            viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M5 13l4 4L19 7" />
                        </svg>
                        Proの全機能
                    </li>
                    <li class="flex items-start gap-3 text-gray-600">
                        <svg class="w-5 h-5 text-indigo-500 shrink-0 mt-0.5" fill="none" stroke="currentColor"
                            viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M5 13l4 4L19 7" />
                        </svg>
                        メンバー無制限
                    </li>
                    <li class="flex items-start gap-3 text-gray-600">
                        <svg class="w-5 h-5 text-indigo-500 shrink-0 mt-0.5" fill="none" stroke="currentColor"
                            viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M5 13l4 4L19 7" />
                        </svg>
                        SSO・監査ログ
                    </li>
                    <li class="flex items-start gap-3 text-gray-600">
                        <svg class="w-5 h-5 text-indigo-500 shrink-0 mt-0.5" fill="none" stroke="currentColor"
                            viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M5 13l4 4L19 7" />
                        </svg>
                        専任サポート
                    </li>
                </ul>
                <a href="#"
                    class="block text-center py-3 border border-gray-200 text-gray-700 font-semibold rounded-lg hover:bg-gray-50 transition-colors">
                    お問い合わせ
                </a>
            </div>
        </div>
    </div>
</section>
