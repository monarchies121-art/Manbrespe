        <!-- Menu atas -->
        <div class="s-sticky">
            <header class="s-nav s-tetes-nav" id="navbar">
                <p class="s-tetes-strip">
                    <span>Sangrai berikutnya hari Kamis. Pesan sebelum Rabu pukul 20.00 supaya ikut dikirim.</span>
                    <a class="s-tetes-strip-link" href="{{ route('produk.index') }}">Lihat kopi</a>
                </p>
                <div class="s-wrap s-tetes-wrap s-tetes-nav-in">
                    <nav class="s-links s-tetes-links">
                        <a href="{{ route('produk.index') }}" @class(['aktif' => request()->routeIs('produk.*')])>Kopi</a>
                        <a href="{{ route('cerita') }}" @class(['aktif' => request()->routeIs('cerita')])>Cerita</a>
                        <a href="{{ route('kedai') }}" @class(['aktif' => request()->routeIs('kedai')])>Kedai</a>
                        <a href="{{ route('homepage') }}#blog">Jurnal</a>
                    </nav>
                    <a href="{{ route('homepage') }}" class="s-logo">
                        <span class="s-mark">
                        </span>Kopi Lereng</a>
                    <div class="s-tetes-nav-end">
                        <a class="s-btn s-btn-sm s-btn-ghost s-tetes-btn-line s-tetes-nav-cta"
                            href="{{ route('produk.index') }}">Pesan biji</a>
                        <details class="s-burger">
                            <summary aria-label="Menu">
                                <svg width="20" height="20" viewBox="0 0 24 24" fill="none"
                                    stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                    stroke-linejoin="round" aria-hidden="true">
                                    <path d="M4 5h16">
                                    </path>
                                    <path d="M4 12h16">
                                    </path>
                                    <path d="M4 19h16">
                                    </path>
                                </svg>
                            </summary>
                            <div class="s-burger-menu">
                                <nav class="s-links s-links-show s-burger-links">
                                    <a href="{{ route('produk.index') }}">Kopi</a>
                                    <a href="{{ route('cerita') }}">Cerita</a>
                                    <a href="{{ route('kedai') }}">Kedai</a>
                                    <a href="{{ route('homepage') }}#blog">Jurnal</a>
                                </nav>
                                <a class="s-btn s-btn-sm" href="{{ route('produk.index') }}">Pesan biji</a>
                            </div>
                        </details>
                    </div>
                </div>
            </header>
        </div>
