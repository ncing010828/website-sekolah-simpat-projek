
<!-- TESTIMONI -->
<section id="testimoni" class="px-6 pb-[110px] pt-10">
    <div class="mx-auto max-w-[1160px]">

        <!-- SECTION HEADER -->
        <div class="mx-auto mb-6 text-center">
            <div class="mx-auto mb-3 h-[2px] w-5 bg-[#f5b900]"></div>

            <h2 class="text-[24px] font-extrabold tracking-[-.5px] text-[#132133]">
                Apa Kata Mereka?
            </h2>

            <p class="mt-2 text-[12px] text-[#737d89]">
                Bagikan pengalaman kamu menggunakan SIMPATI.
            </p>
        </div>

        <!-- FORM & DAFTAR TESTIMONI -->
        <div class="grid items-start gap-6 lg:grid-cols-2">

            <!-- FORM TESTIMONI -->
            <div class="w-full rounded-[16px] border border-[#f5d98a] bg-white p-4 shadow-[0_2px_10px_rgba(245,185,0,0.04)]">

                <!-- FORM HEADER -->
                <div class="mb-3">
                    <span class="mb-1.5 inline-flex items-center gap-2 text-[10px] font-semibold text-[#132133]">
                        <span class="h-[2px] w-4 bg-[#f5b900]"></span>
                        FEEDBACK
                    </span>

                    <h3 class="text-[17px] font-bold text-[#132133]">
                        Tulis Testimoni
                    </h3>

                    <p class="mt-1 text-[11px] leading-5 text-[#737d89]">
                        Ceritakan pengalaman kamu menggunakan SIMPATI.
                    </p>
                </div>

                <!-- SUCCESS MESSAGE -->
                @if(session('success'))
                    <div class="mb-3 rounded-lg border border-green-100 bg-green-50 p-3 text-[11px] leading-5 text-green-700">
                        {{ session('success') }}
                    </div>
                @endif

                <!-- FORM -->
                <form action="{{ route('testimonials.store') }}" method="POST" class="space-y-2.5">
                    @csrf

                    <!-- NAMA -->
                    <div>
                        <label for="name" class="mb-1 block text-[11px] font-semibold text-[#132133]">
                            Nama
                        </label>

                        <input
                            type="text"
                            id="name"
                            name="name"
                            value="{{ old('name') }}"
                            placeholder="Masukkan nama kamu"
                            class="w-full rounded-lg border border-[#e8e9eb] px-3 py-2 text-[12px] outline-none transition focus:border-[#f5b900] focus:ring-2 focus:ring-[#f5b900]/10"
                        >

                        @error('name')
                            <p class="mt-1 text-[10px] text-red-500">{{ $message }}</p>
                        @enderror
                    </div>

                    <div>
                        <label for="rating" class="mb-1 block text-[11px] font-semibold text-[#132133]">
                            Rating
                        </label>

                        <div class="relative">
                            <select
                                id="rating"
                                name="rating"
                                class="w-full appearance-none rounded-lg border border-[#e8e9eb] bg-white px-3 py-2 pr-10 text-[12px] outline-none transition focus:border-[#f5b900] focus:ring-2 focus:ring-[#f5b900]/10"
                            >
                                <option value="">Pilih rating</option>
                                <option value="5" {{ old('rating') == 5 ? 'selected' : '' }}>★★★★★ - Sangat baik</option>
                                <option value="4" {{ old('rating') == 4 ? 'selected' : '' }}>★★★★ - Baik</option>
                                <option value="3" {{ old('rating') == 3 ? 'selected' : '' }}>★★★ - Cukup</option>
                                <option value="2" {{ old('rating') == 2 ? 'selected' : '' }}>★★ - Kurang</option>
                                <option value="1" {{ old('rating') == 1 ? 'selected' : '' }}>★ - Sangat kurang</option>
                            </select>

                            <!-- CUSTOM DROPDOWN ICON -->
                            <div class="pointer-events-none absolute inset-y-0 right-3 flex items-center">
                                <svg class="h-4 w-4 text-[#202b38]" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                    <path d="m6 9 6 6 6-6"/>
                                </svg>
                            </div>
                        </div>

                        @error('rating')
                            <p class="mt-1 text-[10px] text-red-500">{{ $message }}</p>
                        @enderror
                    </div>

                    <!-- KOMENTAR -->
                    <div>
                        <label for="comment" class="mb-1 block text-[11px] font-semibold text-[#132133]">
                            Testimoni
                        </label>

                        <textarea
                            id="comment"
                            name="comment"
                            rows="3"
                            placeholder="Tuliskan pengalaman kamu..."
                            class="w-full resize-none rounded-lg border border-[#e8e9eb] px-3 py-2 text-[12px] leading-5 outline-none transition focus:border-[#f5b900] focus:ring-2 focus:ring-[#f5b900]/10"
                        >{{ old('comment') }}</textarea>

                        @error('comment')
                            <p class="mt-1 text-[10px] text-red-500">{{ $message }}</p>
                        @enderror
                    </div>

                    <!-- BUTTON -->
                    <button
                        type="submit"
                        class="w-full rounded-lg bg-[#132133] px-4 py-2.5 text-[12px] font-semibold text-white transition hover:bg-[#1e344f]"
                    >
                        Kirim Testimoni <span class="ml-1">→</span>
                    </button>

                </form>
            </div>


            <!-- DAFTAR TESTIMONI -->
            <div class="w-full min-w-0">

                <!-- HEADING -->
                <div class="mb-3 flex items-center justify-between gap-3">
                    <div>
                        <h3 class="text-[16px] font-bold text-[#132133]">
                            Testimoni Pengguna
                        </h3>

                        <p class="mt-1 text-[11px] text-[#737d89]">
                            Pengalaman dan pendapat pengguna SIMPATI.
                        </p>
                    </div>

                    <div class="flex h-9 w-9 shrink-0 items-center justify-center rounded-lg bg-[#fff9e8] text-[#d9a400]">
                        <svg class="h-5 w-5" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.7" stroke-linecap="round" stroke-linejoin="round">
                            <path d="M21 11.5a8.5 8.5 0 0 1-8.5 8.5H4l2.5-3A8.5 8.5 0 1 1 21 11.5Z"/>
                            <path d="M8 10h8M8 14h5"/>
                        </svg>
                    </div>
                </div>


                <!-- TESTIMONIAL CARDS -->
                <div id="testimonialTrack" class="grid grid-cols-1 items-stretch gap-2">

                    @forelse($testimonials as $testimonial)

                        <article class="flex h-full min-w-0 flex-col rounded-xl border border-[#f5d98a] bg-white p-4 shadow-[0_2px_8px_rgba(245,185,0,0.04)] transition hover:border-[#e8c65c]">

                            <!-- QUOTE -->
                            <div class="mb-0.5 text-[20px] font-bold leading-none text-[#f5b900]">
                                “
                            </div>

                            <!-- COMMENT -->
                            <p class="flex-1 break-words text-[11px] leading-[1.5] text-[#737d89]">
                                {{ $testimonial->comment }}
                            </p>

                            <!-- USER -->
                            <div class="mt-2 border-t border-[#f1f1f1] pt-2">
                                <div class="text-[11px] font-bold text-[#132133]">
                                    {{ $testimonial->name }}
                                </div>

                                <!-- RATING -->
                                <div class="mt-0.5 text-[11px] tracking-[1px] text-[#f5b900]">
                                    {{ str_repeat('★', $testimonial->rating) }}{{ str_repeat('☆', 5 - $testimonial->rating) }}
                                </div>
                            </div>

                        </article>

                    @empty

                        <article class="flex h-full min-w-0 flex-col items-center justify-center rounded-xl border border-[#f5d98a] bg-white p-5 text-center">

                            <div class="mb-2 flex h-10 w-10 items-center justify-center rounded-xl bg-[#fff9e8] text-[#d9a400]">
                                <svg class="h-5 w-5" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.7" stroke-linecap="round" stroke-linejoin="round">
                                    <path d="M21 11.5a8.5 8.5 0 0 1-8.5 8.5H4l2.5-3A8.5 8.5 0 1 1 21 11.5Z"/>
                                </svg>
                            </div>

                            <p class="text-[12px] font-semibold text-[#132133]">
                                Belum ada testimoni
                            </p>

                            <p class="mt-1 text-[11px] text-[#737d89]">
                                Jadilah yang pertama membagikan pengalaman.
                            </p>

                        </article>

                    @endforelse

                </div>


                <!-- PAGINATION -->
                <div id="testimonialPagination" class="mt-3 flex justify-center" aria-label="Pagination testimoni"></div>

            </div>

        </div>
    </div>
</section>
