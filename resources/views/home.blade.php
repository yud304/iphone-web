@extends('layouts.app')

@section('content')
    <div>
        <a
            href="https://api.whatsapp.com/send?phone=6285777010436&text=Hi%20admin%20Jualiphone%2C%20saya%20Mau%20Jual%20iPhone%2015%20ProMax%2C%20Bisa%20dibantu%20%3F">
            <img src="{{ asset('storage/images/Banner-Jualiphone-1.jpg') }}" alt="Banner"
                class="w-full h-auto mb-6 rounded-md shadow-md" />
        </a>
    </div>

    <div class="text-center mb-6 px-2 sm:px-4">
        <h1 class="text-2xl sm:text-3xl md:text-4xl font-bold mb-2 md:mb-4">Selamat Datang di JualiPhone.com</h1>
        <p class="text-base sm:text-lg text-gray-700 mb-4 md:mb-8">Mau Jual Beli iPhone? Ya JualiPhone.com</p>

        <!-- Shop Now Button -->
        <div class="flex flex-col sm:flex-row justify-center gap-3">
            <a href="https://api.whatsapp.com/send?phone=6285777010436&text=Hi%20admin%20Jualiphone%2C%20saya%20Mau%20Jual%20iPhone%2015%20ProMax%2C%20Bisa%20dibantu%20%3F"
                class="flex-1 sm:flex-initial text-center px-7 py-3 text-base sm:text-lg font-bold tracking-wide rounded-lg shadow-lg bg-gradient-to-r from-green-500 to-green-700 text-white transition-all duration-200 mr-0 sm:mr-4
                hover:from-green-600 hover:to-green-800 hover:scale-105 hover:shadow-xl focus:outline-none focus:ring-2 focus:ring-green-400 flex items-center justify-center gap-2"
                target="_blank" rel="noopener noreferrer">
                <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5" fill="none" viewBox="0 0 24 24"
                    stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M3 3h2l.4 2M7 13h10l4-8H5.4M7 13l-2 9m13-9l2 9M5 21h14"   />
                </svg>
                Beli Sekarang!
            </a>

            <a href="https://api.whatsapp.com/send?phone=6285777010436&text=Hi%20admin%20Jualiphone%2C%20saya%20Mau%20Jual%20iPhone%2C%20Bisa%20dibantu%20%3F"
                class="flex-1 sm:flex-initial text-center px-7 py-3 text-base sm:text-lg font-bold tracking-wide rounded-lg shadow-lg bg-gradient-to-r from-red-500 to-red-700 text-white transition-all duration-200
                hover:from-red-600 hover:to-red-800 hover:scale-105 hover:shadow-xl focus:outline-none focus:ring-2 focus:ring-red-400 flex items-center justify-center gap-2"
                target="_blank" rel="noopener noreferrer">
                <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5" fill="none" viewBox="0 0 24 24"
                    stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M16 9V7a4 4 0 10-8 0v2m-3 4h14l-1.5 6h-11L5 13z" />
                </svg>
                Jual Sekarang!
            </a>
        </div>

        <!-- Floating TikTok Button with Bounce Animation -->
        <a href="https://www.tiktok.com/@iphonesecondjkt.official?_t=ZS-8y9YY2H7YE3&_r=1"
            class="fixed bottom-24 right-6 z-50 bg-white hover:bg-gray-100 text-white rounded-full p-4 shadow-lg transition animate-bounce"
            target="_blank" rel="noopener noreferrer" aria-label="Visit our TikTok">
            <img src="{{ asset('storage/images/tik-tok.png') }}" alt="TikTok" class="w-8 h-8 object-contain" />
        </a>

        <!-- Floating WhatsApp Button with Bounce Animation -->
        <a href="https://api.whatsapp.com/send?phone=6285777010436&text=Hi%20admin%20Jualiphone%2C%20saya%20Mau%20Jual%20iPhone%2C%20Bisa%20dibantu%20%3F"
            class="fixed bottom-6 right-6 z-50 bg-green-500 hover:bg-green-600 text-white rounded-full p-4 shadow-lg transition animate-bounce"
            target="_blank" rel="noopener noreferrer" aria-label="Chat via WhatsApp">
            <img src="https://upload.wikimedia.org/wikipedia/commons/6/6b/WhatsApp.svg" alt="WhatsApp" class="w-8 h-8">
        </a>

    </div>

    <!-- Search & Filter Bar -->
    <div class="relative z-40">
        <div class="sticky top-10 z-40 transition-all duration-300">
            <div class="max-w-4xl mx-auto px-2 py-2 sm:py-3">
                <div
                    class="flex flex-col sm:flex-row items-stretch sm:items-center gap-2 bg-white rounded-xl shadow-md border border-orange-100 px-2 sm:px-4 py-2">
                    <div class="relative flex-1">
                        <span class="absolute left-3 top-1/2 -translate-y-1/2 text-orange-400">
                            <svg class="w-5 h-5" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                                <circle cx="11" cy="11" r="8" />
                                <path d="M21 21l-4.35-4.35" stroke-linecap="round" stroke-linejoin="round" />
                            </svg>
                        </span>
                        <input id="searchInput" type="text" placeholder="Cari iPhone..."
                            class="w-full pl-10 pr-3 py-2 border border-orange-200 rounded-lg focus:outline-none focus:ring-2 focus:ring-orange-400 text-sm bg-white min-w-0 shadow-sm transition"
                            onkeyup="filterProducts()">
                    </div>
                    @include('components.filter-dropdown')
                </div>
            </div>
        </div>
    </div>

    <div id="productGrid"
        class="grid grid-cols-2 sm:grid-cols-3 lg:grid-cols-4 gap-3 sm:gap-5 md:gap-6 max-w-6xl mx-auto px-2 sm:px-4">
        @include('partials.product-cards')
    </div>


    <!-- Cara Jual iPhone Section -->
    <section class="bg-white py-10 sm:py-14">
        <div class="text-center mb-8 sm:mb-12 px-2">
            <h2 class="text-2xl sm:text-3xl md:text-4xl font-bold mb-2">Cara Jual Iphone Di JualiPhone.com</h2>
            <p class="text-base sm:text-lg text-gray-600">3 Langkah Mudah Jual Iphone darimana saja, kapan saja!</p>
        </div>

        <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-6 sm:gap-10 max-w-6xl mx-auto px-2 sm:px-6">
            <!-- Step 1 -->
            <div class="text-center">
                <img src="{{ asset('storage/images/checklist.jpeg') }}" alt="Cek Kondisi"
                    class="mx-auto mb-4 sm:mb-6 w-32 h-32 sm:w-48 sm:h-48 object-contain">
                <h3 class="text-lg sm:text-xl font-semibold mb-2">Cek Kondisi Unit iPhone Dan Dapatkan Penawaran
                    Tertinggi
                </h3>
                <p class="text-gray-500 mb-4 text-sm sm:text-base">iPhonemu Kita Berikan Harga Tertinggi Dipasaran,
                    Tanpa
                    Embel Embel Biaya Lainnya!</p>
            </div>

            <!-- Step 2 -->
            <div class="text-center">
                <img src="{{ asset('storage/images/delivery.jpeg') }}" alt="Pengiriman"
                    class="mx-auto mb-4 sm:mb-6 w-32 h-32 sm:w-48 sm:h-48 object-contain">
                <h3 class="text-lg sm:text-xl font-semibold mb-2">Team Akan Menjemput Ke Lokasi Yang Anda Tentukan</h3>
                <p class="text-gray-500 mb-4 text-sm sm:text-base">Kita Memiliki Free Ongkir Untuk Menjemput iPhone Anda
                    Ditempat!</p>
            </div>

            <!-- Step 3 -->
            <div class="text-center">
                <img src="{{ asset('storage/images/Payment.jpeg') }}" alt="Terima Uang"
                    class="mx-auto mb-4 sm:mb-6 w-32 h-32 sm:w-48 sm:h-48 object-contain">
                <h3 class="text-lg sm:text-xl font-semibold mb-2">Terima Uangmu Saat Team Inspeksi Tiba</h3>
                <p class="text-gray-500 mb-4 text-sm sm:text-base">iPhone Anda Pasti Terjual Dan Terima Uang Anda Dengan
                    Instant!</p>
            </div>
        </div>

        <section class="py-10 sm:py-14 px-2 sm:px-5 text-center bg-white">
            <h2 class="font-bold mb-6 sm:mb-10 text-2xl sm:text-3xl md:text-4xl">Kenapa harus Jual di JualiPhone.com
            </h2>
            <div class="flex flex-wrap justify-center gap-6 sm:gap-10 max-w-4xl mx-auto">
                <div class="max-w-xs w-full sm:w-auto">
                    <img src="{{ asset('storage/images/Jemput.png') }}" alt="Gratis Penjemputan"
                        class="w-full max-w-[120px] sm:max-w-[150px] mb-3 sm:mb-4 mx-auto" />
                    <h4 class="font-bold text-base sm:text-lg">Gratis Penjemputan</h4>
                    <p class="text-gray-500 text-xs sm:text-sm">
                        Team inspeksi jualiphone akan melakukan penjemputan gratis ke lokasimu.
                    </p>
                </div>
                <div class="max-w-xs w-full sm:w-auto">
                    <img src="{{ asset('storage/images/proses.png') }}" alt="Proses Cepat"
                        class="w-full max-w-[120px] sm:max-w-[150px] mb-3 sm:mb-4 mx-auto" />
                    <h4 class="font-bold text-base sm:text-lg">Proses Cepat</h4>
                    <p class="text-gray-500 text-xs sm:text-sm">
                        Hanya 5 menit ketika semua kondisi sudah ok, Kita langsung cairin ditempat
                    </p>
                </div>
                <div class="max-w-xs w-full sm:w-auto">
                    <img src="{{ asset('storage/images/deal.png') }}" alt="Best Deal"
                        class="w-full max-w-[120px] sm:max-w-[150px] mb-3 sm:mb-4 mx-auto" />
                    <h4 class="font-bold text-base sm:text-lg">Best Deal</h4>
                    <p class="text-gray-500 text-xs sm:text-sm">
                        Harga penawaran Tinggi Dibanding Toko lain berdasarkan data dari harga di pasaran
                    </p>
                </div>
                <div class="max-w-xs w-full sm:w-auto">
                    <img src="{{ asset('storage/images/transaksi.png') }}" alt="Transaksi Aman"
                        class="w-full max-w-[120px] sm:max-w-[150px] mb-3 sm:mb-4 mx-auto" />
                    <h4 class="font-bold text-base sm:text-lg">Transaksi Aman</h4>
                    <p class="text-gray-500 text-xs sm:text-sm">
                        Jualiphone menjamin keamanan data dan transaksi kamu
                    </p>
                </div>
            </div>

            <h2 class="font-bold mt-10 sm:mt-16 mb-3 sm:mb-5 text-2xl sm:text-3xl md:text-4xl">Siapa Sih
                JualiPhone.com?
            </h2>
            <p class="max-w-2xl mx-auto text-gray-500 text-xs sm:text-sm leading-relaxed">
                JualiPhone.com adalah sebuah platform daring yang khusus berfokus pada bisnis jual beli iPhone. Mereka
                menyediakan layanan yang memungkinkan pengguna untuk menjual iPhone bekas mereka dengan mudah dan juga
                untuk
                membeli iPhone baru atau bekas dengan harga yang bersaing. Situs ini menyediakan berbagai pilihan model
                iPhone, mulai dari yang terbaru hingga yang sudah tidak diproduksi lagi. Dengan berbagai fitur seperti
                evaluasi harga yang adil, keamanan transaksi, dan kemudahan dalam proses jual beli, JualiPhone.com telah
                menjadi destinasi utama bagi para pengguna iPhone yang ingin memperoleh pengalaman yang lancar dan aman
                dalam bertransaksi.
            </p>
        </section>
    </section>

    <!-- Location -->
    <div class="w-full flex flex-col items-center mt-5 mb-4 px-2">
        <h2 class="font-bold mt-10 sm:mt-16 mb-3 sm:mb-5 text-2xl sm:text-3xl md:text-4xl">Lokasi kami</h2>
        <div class="w-full flex justify-center">
            <div class="w-full max-w-sm sm:max-w-md md:max-w-xl aspect-video rounded-xl overflow-hidden shadow-md">
                <iframe
                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3966.7755786962953!2d106.8564588!3d-6.1608038999999994!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69f58956024f0d%3A0x4c18ec8776c72374!2sBakuliphone%20Jakarta!5e0!3m2!1sid!2sid!4v1752978966167!5m2!1sid!2sid"
                    class="w-full h-full border-0" allowfullscreen="" loading="lazy"
                    referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
        </div>
        <div class="mt-2 text-center text-xs sm:text-sm text-gray-700 max-w-lg">
            Jl. Bend. Jago No.5, Utan Panjang, Kec. Kemayoran, Kota Jakarta Pusat, Daerah Khusus Ibukota Jakarta 10650
        </div>
    </div>
@endsection
