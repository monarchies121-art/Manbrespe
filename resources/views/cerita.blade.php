@extends('layouts.app')
@section('konten')
      <section class="s-tetes-sec s-tetes-pagehead">
            <div class="s-wrap s-tetes-wrap">
                <p class="s-tetes-label"><b>Kopi Lereng</b><span>Cerita</span></p>
                <h1 class="s-h1 s-tetes-h1">Dari kebun di lereng gunung</h1>
                <p class="s-tetes-text">Kopi Lereng dimulai dari kebiasaan kecil: datang ke kebun, mencicipi, lalu
                    membawa pulang biji terbaik untuk disangrai sendiri.</p>
            </div>
        </section>

        <section class="s-tetes-split" id="tentang">
            <div class="s-tetes-split-copy">
                <div class="s-tetes-split-in">
                    <h2 class="s-h2 s-tetes-h2">Kami kenal petani di balik setiap karung</h2>
                    <p class="s-tetes-text">Setiap musim panen kami datang ke kebun di Bajawa, Kerinci, dan Gayo untuk
                        mencicipi dan memilih langsung. Biji mentahnya kami sangrai sendiri dalam batch 12 kilo, dan
                        profil tiap batch dicatat sebelum dijual.</p><a class="s-btn s-btn-ghost s-tetes-btn-line"
                        href="#blog">Baca catatan dari kebun</a>
                </div>
            </div>
            <div class="s-tetes-split-fig">
                <div class="s-img s-has-img s-tetes-zoom rk-i13"
                    style="background-image: url(&quot;https://images.unsplash.com/photo-1662559102063-a665b04771fd?auto=format&amp;fit=crop&amp;w=1600&amp;q=70&quot;);">
                </div>
            </div>
        </section>

        <section class="s-tetes-sec s-tetes-blog" id="blog">
            <div class="s-wrap s-tetes-wrap">
                <h2 class="s-h2 s-tetes-h2">Catatan dari kebun dan roastery</h2>
                <div class="s-tetes-posts"><a href="{{ route('homepage') }}#blog" class="s-tetes-post" data-fx=""
                        style="--i: 0;">
                        <div class="s-tetes-post-fig">
                            <div class="s-img s-tone-0 s-has-img s-tetes-post-img rk-i16"
                                style="background-image: url(&quot;https://images.unsplash.com/photo-1677125671399-65852c6dfb05?auto=format&amp;fit=crop&amp;w=900&amp;q=70&quot;);">
                            </div>
                        </div>
                        <div class="s-tetes-post-copy"><span class="s-tetes-label">Kebun</span>
                            <h3>Panen Flores Bajawa tahun ini</h3>
                            <p class="s-tetes-post-meta"><span>19 Sep 2026</span><span>6 menit baca</span></p><span
                                class="s-tetes-under"><span>Baca catatan</span></span>
                        </div>
                    </a><a href="{{ route('homepage') }}#blog" class="s-tetes-post" data-fx="" style="--i: 1;">
                        <div class="s-tetes-post-fig">
                            <div class="s-img s-tone-1 s-has-img s-tetes-post-img rk-i17"
                                style="background-image: url(&quot;https://images.unsplash.com/photo-1516510516159-156347b3cf2b?auto=format&amp;fit=crop&amp;w=900&amp;q=70&quot;);">
                            </div>
                        </div>
                        <div class="s-tetes-post-copy"><span class="s-tetes-label">Resep</span>
                            <h3>Resep V60 kami: 15 gram, 250 ml, tiga menit</h3>
                            <p class="s-tetes-post-meta"><span>10 Sep 2026</span><span>4 menit baca</span></p><span
                                class="s-tetes-under"><span>Baca catatan</span></span>
                        </div>
                    </a><a href="{{ route('homepage') }}#blog" class="s-tetes-post" data-fx="" style="--i: 2;">
                        <div class="s-tetes-post-fig">
                            <div class="s-img s-tone-2 s-has-img s-tetes-post-img rk-i18"
                                style="background-image: url(&quot;https://images.unsplash.com/photo-1537130508299-46ab547b4be3?auto=format&amp;fit=crop&amp;w=900&amp;q=70&quot;);">
                            </div>
                        </div>
                        <div class="s-tetes-post-copy"><span class="s-tetes-label">Sangrai</span>
                            <h3>Kenapa biji kami disangrai medium</h3>
                            <p class="s-tetes-post-meta"><span>1 Sep 2026</span><span>5 menit baca</span></p><span
                                class="s-tetes-under"><span>Baca catatan</span></span>
                        </div>
                    </a><a href="{{ route('homepage') }}#blog" class="s-tetes-post" data-fx="" style="--i: 3;">
                        <div class="s-tetes-post-fig">
                            <div class="s-img s-tone-3 s-has-img s-tetes-post-img rk-i19"
                                style="background-image: url(&quot;https://images.unsplash.com/photo-1652007762843-131e95e453d2?auto=format&amp;fit=crop&amp;w=900&amp;q=70&quot;);">
                            </div>
                        </div>
                        <div class="s-tetes-post-copy"><span class="s-tetes-label">Tips</span>
                            <h3>Menyimpan biji supaya tetap segar</h3>
                            <p class="s-tetes-post-meta"><span>23 Agu 2026</span><span>3 menit baca</span></p><span
                                class="s-tetes-under"><span>Baca catatan</span></span>
                        </div>
                    </a></div>
            </div>
        </section>

        <!-- Bagian bawah (disalin dari beranda) -->
@endsection
