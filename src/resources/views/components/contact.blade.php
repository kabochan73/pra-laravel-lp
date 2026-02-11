<section class="py-20 sm:py-28 px-6 bg-white">
    <div class="max-w-2xl mx-auto">
        <div class="text-center mb-12" data-aos="fade-up">
            <h2 class="text-3xl sm:text-4xl font-bold text-gray-900 mb-4">
                お問い合わせ
            </h2>
            <p class="text-gray-500 text-lg leading-relaxed">
                ご質問・ご相談がございましたら、<br class="hidden sm:inline">
                お気軽にお問い合わせください。
            </p>
        </div>

        @if (session('success'))
            <div data-aos="fade-up" class="mb-6 rounded-lg bg-green-50 border border-green-200 p-4 text-green-800 text-center">
                {{ session('success') }}
            </div>
        @endif

        <form action="/contact" method="POST" data-aos="fade-up" data-aos-delay="100" class="space-y-6">
            @csrf

            <div>
                <label for="name" class="block text-sm font-medium text-gray-700 mb-1">お名前</label>
                <input type="text" id="name" name="name" value="{{ old('name') }}"
                    class="w-full rounded-lg border border-gray-300 px-4 py-3 text-gray-900 placeholder-gray-400 focus:border-indigo-500 focus:ring-2 focus:ring-indigo-200 outline-none transition" placeholder="山田 太郎">
                @error('name')
                    <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                @enderror
            </div>

            <div>
                <label for="email" class="block text-sm font-medium text-gray-700 mb-1">メールアドレス</label>
                <input type="email" id="email" name="email" value="{{ old('email') }}"
                    class="w-full rounded-lg border border-gray-300 px-4 py-3 text-gray-900 placeholder-gray-400 focus:border-indigo-500 focus:ring-2 focus:ring-indigo-200 outline-none transition" placeholder="you@example.com">
                @error('email')
                    <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                @enderror
            </div>

            <div>
                <label for="category" class="block text-sm font-medium text-gray-700 mb-1">お問い合わせ種別</label>
                <select id="category" name="category"
                    class="w-full rounded-lg border border-gray-300 px-4 py-3 text-gray-900 focus:border-indigo-500 focus:ring-2 focus:ring-indigo-200 outline-none transition">
                    <option value="" disabled {{ old('category') ? '' : 'selected' }}>選択してください</option>
                    <option value="general" {{ old('category') === 'general' ? 'selected' : '' }}>一般的な質問</option>
                    <option value="pricing" {{ old('category') === 'pricing' ? 'selected' : '' }}>料金について</option>
                    <option value="consultation" {{ old('category') === 'consultation' ? 'selected' : '' }}>導入相談</option>
                    <option value="other" {{ old('category') === 'other' ? 'selected' : '' }}>その他</option>
                </select>
                @error('category')
                    <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                @enderror
            </div>

            <div>
                <label for="message" class="block text-sm font-medium text-gray-700 mb-1">お問い合わせ内容</label>
                <textarea id="message" name="message" rows="5"
                    class="w-full rounded-lg border border-gray-300 px-4 py-3 text-gray-900 placeholder-gray-400 focus:border-indigo-500 focus:ring-2 focus:ring-indigo-200 outline-none transition resize-y" placeholder="お問い合わせ内容をご記入ください">{{ old('message') }}</textarea>
                @error('message')
                    <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                @enderror
            </div>

            <div class="text-center pt-2">
                <button type="submit"
                    class="inline-flex items-center justify-center px-10 py-4 bg-indigo-600 text-white font-semibold text-lg rounded-lg hover:bg-indigo-700 transition-colors shadow-lg shadow-indigo-200">
                    送信する
                    <svg class="w-5 h-5 ml-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" />
                    </svg>
                </button>
            </div>
        </form>
    </div>
</section>
