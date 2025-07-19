@extends('layouts.app')

@section('content')
    <div>
        <a
            href="https://api.whatsapp.com/send?phone=6285777010436&text=Hi%20admin%20Jualiphone%2C%20saya%20Mau%20Jual%20iPhone%2015%20ProMax%2C%20Bisa%20dibantu%20%3F">
            <img src="{{ asset('storage/images/Banner-Jualiphone-1.jpg') }}" alt="Banner"
                class="w-full h-auto mb-6 rounded-md shadow-md" />
        </a>
    </div>

    <div class="text-center mb-8 px-4">
        <h1 class="text-3xl sm:text-4xl font-bold mb-4">Selamat Datang di Bakul-iPhone.com</h1>
        <p class="text-base sm:text-lg text-gray-700 mb-8">Mau Jual Beli iPhone? Ya Bakul iPhone</p>

        <a href="https://api.whatsapp.com/send?phone=6285777010436&text=Hi%20admin%20Jualiphone%2C%20saya%20Mau%20Jual%20iPhone%2015%20ProMax%2C%20Bisa%20dibantu%20%3F"
            class="px-4 sm:px-6 py-2 sm:py-3 text-base sm:text-lg font-semibold rounded-md shadow-md bg-green-600 text-white hover:bg-green-700 transition mr-2 mb-2 inline-block"
            target="_blank" rel="noopener noreferrer">
            Beli Sekarang!
        </a>

        <a href="https://api.whatsapp.com/send?phone=6285777010436&text=Hi%20admin%20Jualiphone%2C%20saya%20Mau%20Jual%20iPhone%2C%20Bisa%20dibantu%20%3F"
            class="px-4 sm:px-6 py-2 sm:py-3 text-base sm:text-lg font-semibold rounded-md shadow-md bg-red-600 text-white hover:bg-red-700 transition inline-block"
            target="_blank" rel="noopener noreferrer">
            Jual Sekarang!
        </a>
    </div>

    <div class="grid grid-cols-2 sm:grid-cols-3 md:grid-cols-4 gap-6 max-w-6xl mx-auto px-4">
        <!-- iPhone 16 lineup -->
        <a href="https://api.whatsapp.com/send?phone=6285777010436&text=Hi%20admin%2C%20saya%20mau%20beli%20iPhone%2016%20ProMax%2C%20bisa%20dibantu%3F"
            target="_blank" rel="noopener noreferrer"
            class="flex flex-col items-center p-4 border rounded-lg shadow-sm bg-white hover:shadow-md transition">
            <img src="{{ asset('storage/images/iPhones/Apple iPhone 16 Pro Max.jpeg') }}" alt="iPhone 16 ProMax"
                class="w-32 sm:w-40 h-32 sm:h-40 object-contain mb-2" />
            <span class="text-gray-600 text-sm sm:text-base">iPhone 16 ProMax</span>
        </a>

        <a href="https://api.whatsapp.com/send?phone=6285777010436&text=Hi%20admin%2C%20saya%20mau%20beli%20iPhone%2016%20Pro%2C%20bisa%20dibantu%3F"
            target="_blank" rel="noopener noreferrer"
            class="flex flex-col items-center p-4 border rounded-lg shadow-sm bg-white hover:shadow-md transition">
            <img src="{{ asset('storage/images/iPhones/iPhone 16 Pro.jpeg') }}" alt="iPhone 16 Pro"
                class="w-32 sm:w-40 h-32 sm:h-40 object-contain mb-2" />
            <span class="text-gray-600 text-sm sm:text-base">iPhone 16 Pro</span>
        </a>

        <a href="https://api.whatsapp.com/send?phone=6285777010436&text=Hi%20admin%2C%20saya%20mau%20beli%20iPhone%2016%20Plus%2C%20bisa%20dibantu%3F"
            target="_blank" rel="noopener noreferrer"
            class="flex flex-col items-center p-4 border rounded-lg shadow-sm bg-white hover:shadow-md transition">
            <img src="{{ asset('storage/images/iPhones/iPhone 16 Plus.jpeg') }}" alt="iPhone 16 Plus"
                class="w-32 sm:w-40 h-32 sm:h-40 object-contain mb-2" />
            <span class="text-gray-600 text-sm sm:text-base">iPhone 16 Plus</span>
        </a>

        <a href="https://api.whatsapp.com/send?phone=6285777010436&text=Hi%20admin%2C%20saya%20mau%20beli%20iPhone%2016%2C%20bisa%20dibantu%3F"
            target="_blank" rel="noopener noreferrer"
            class="flex flex-col items-center p-4 border rounded-lg shadow-sm bg-white hover:shadow-md transition">
            <img src="{{ asset('storage/images/iPhones/iPhone 16.jpeg') }}" alt="iPhone 16"
                class="w-32 sm:w-40 h-32 sm:h-40 object-contain mb-2" />
            <span class="text-gray-600 text-sm sm:text-base">iPhone 16</span>
        </a>

        <a href="https://api.whatsapp.com/send?phone=6285777010436&text=Hi%20admin%2C%20saya%20mau%20beli%20iPhone%2016e%2C%20bisa%20dibantu%3F"
            target="_blank" rel="noopener noreferrer"
            class="flex flex-col items-center p-4 border rounded-lg shadow-sm bg-white hover:shadow-md transition">
            <img src="{{ asset('storage/images/iPhones/iPhone 16e.jpeg') }}" alt="iPhone 16e"
                class="w-32 sm:w-40 h-32 sm:h-40 object-contain mb-2" />
            <span class="text-gray-600 text-sm sm:text-base">iPhone 16e</span>
        </a>

        <!-- iPhone 15 lineup -->
        <a href="https://api.whatsapp.com/send?phone=6285777010436&text=Hi%20admin%2C%20saya%20mau%20beli%20iPhone%2015%20ProMax%2C%20bisa%20dibantu%3F"
            target="_blank" rel="noopener noreferrer"
            class="flex flex-col items-center p-4 border rounded-lg shadow-sm bg-white hover:shadow-md transition">
            <img src="{{ asset('storage/images/iPhones/iPhone 15 Pro Max.jpeg') }}" alt="iPhone 15 ProMax"
                class="w-32 sm:w-40 h-32 sm:h-40 object-contain mb-2" />
            <span class="text-gray-600 text-sm sm:text-base">iPhone 15 ProMax</span>
        </a>

        <a href="https://api.whatsapp.com/send?phone=6285777010436&text=Hi%20admin%2C%20saya%20mau%20beli%20iPhone%2015%20Pro%2C%20bisa%20dibantu%3F"
            target="_blank" rel="noopener noreferrer"
            class="flex flex-col items-center p-4 border rounded-lg shadow-sm bg-white hover:shadow-md transition">
            <img src="{{ asset('storage/images/iPhones/iPhone 15 Pro.jpeg') }}" alt="iPhone 15 Pro"
                class="w-32 sm:w-40 h-32 sm:h-40 object-contain mb-2" />
            <span class="text-gray-600 text-sm sm:text-base">iPhone 15 Pro</span>
        </a>

        <a href="https://api.whatsapp.com/send?phone=6285777010436&text=Hi%20admin%2C%20saya%20mau%20beli%20iPhone%2015%20Plus%2C%20bisa%20dibantu%3F"
            target="_blank" rel="noopener noreferrer"
            class="flex flex-col items-center p-4 border rounded-lg shadow-sm bg-white hover:shadow-md transition">
            <img src="{{ asset('storage/images/iPhones/iPhone 15 Plus.jpeg') }}" alt="iPhone 15 Plus"
                class="w-32 sm:w-40 h-32 sm:h-40 object-contain mb-2" />
            <span class="text-gray-600 text-sm sm:text-base">iPhone 15 Plus</span>
        </a>

        <a href="https://api.whatsapp.com/send?phone=6285777010436&text=Hi%20admin%2C%20saya%20mau%20beli%20iPhone%2015%2C%20bisa%20dibantu%3F"
            target="_blank" rel="noopener noreferrer"
            class="flex flex-col items-center p-4 border rounded-lg shadow-sm bg-white hover:shadow-md transition">
            <img src="{{ asset('storage/images/iPhones/iPhone 15.jpeg') }}" alt="iPhone 15"
                class="w-32 sm:w-40 h-32 sm:h-40 object-contain mb-2" />
            <span class="text-gray-600 text-sm sm:text-base">iPhone 15</span>
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


    <!-- Cara Jual iPhone Section -->
    <section class="bg-white py-16">
        <div class="text-center mb-12">
            <h2 class="text-4xl font-bold mb-2">Cara Jual Iphone Di bakul-iphone.com</h2>
            <p class="text-lg text-gray-600">3 Langkah Mudah Jual Iphone darimana saja, kapan saja!</p>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-3 gap-12 max-w-6xl mx-auto px-6">
            <!-- Step 1 -->
            <div class="text-center">
                <img src="{{ asset('storage/images/checklist.jpeg') }}" alt="Cek Kondisi"
                    class="mx-auto mb-6 w-48 h-48 object-contain">
                <h3 class="text-xl font-semibold mb-2">Cek Kondisi Unit iPhone Dan Dapatkan Penawaran Tertinggi</h3>
                <p class="text-gray-500 mb-4">iPhonemu Kita Berikan Harga Tertinggi Dipasaran, Tanpa Embel Embel Biaya
                    Lainnya!</p>
            </div>

            <!-- Step 2 -->
            <div class="text-center">
                <img src="{{ asset('storage/images/delivery.jpeg') }}" alt="Pengiriman"
                    class="mx-auto mb-6 w-48 h-48 object-contain">
                <h3 class="text-xl font-semibold mb-2">Team Akan Menjemput Ke Lokasi Yang Anda Tentukan</h3>
                <p class="text-gray-500 mb-4">Kita Memiliki Free Ongkir Untuk Menjemput iPhone Anda Ditempat!
                </p>
            </div>

            <!-- Step 3 -->
            <div class="text-center">
                <img src="{{ asset('storage/images/Payment.jpeg') }}" alt="Terima Uang"
                    class="mx-auto mb-6 w-48 h-48 object-contain">
                <h3 class="text-xl font-semibold mb-2">Terima Uangmu Saat Team Inspeksi Tiba</h3>
                <p class="text-gray-500 mb-4">iPhone Anda Pasti Terjual Dan Terima Uang Anda Dengan Instant!</p>
            </div>

        </div>

        <section style="padding: 50px 20px; text-align: center; background: #fff;">
            <h2 style="font-weight: 700; margin-bottom: 40px; font-size: 36px">Kenapa harus Jual di Bakul-Phone.com</h2>
            <div
                style="display: flex; justify-content: center; gap: 40px; flex-wrap: wrap; max-width: 1000px; margin: 0 auto;">
                <div style="max-width: 200px;">
                    <img src="{{ asset('storage/images/Jemput.png') }}" alt="Gratis Penjemputan"
                        style="width: 100%; max-width: 150px; margin-bottom: 15px;" />
                    <h4 style="font-weight: 700;">Gratis Penjemputan</h4>
                    <p style="color: #7a7a7a; font-size: 14px;">
                        Team inspeksi jualiphone akan melakukan penjemputan gratis ke lokasimu.
                    </p>
                </div>
                <div style="max-width: 200px;">
                    <img src="{{ asset('storage/images/proses.png') }}" alt="Proses Cepat"
                        style="width: 100%; max-width: 150px; margin-bottom: 15px;" />
                    <h4 style="font-weight: 700;">Proses Cepat</h4>
                    <p style="color: #7a7a7a; font-size: 14px;">
                        Hanya 5 menit ketika semua kondisi sudah ok, Kita langsung cairin ditempat
                    </p>
                </div>
                <div style="max-width: 200px;">
                    <img src="{{ asset('storage/images/deal.png') }}" alt="Best Deal"
                        style="width: 100%; max-width: 150px; margin-bottom: 15px;" />
                    <h4 style="font-weight: 700;">Best Deal</h4>
                    <p style="color: #7a7a7a; font-size: 14px;">
                        Harga penawaran Tinggi Dibanding Toko lain berdasarkan data dari harga di pasaran
                    </p>
                </div>
                <div style="max-width: 200px;">
                    <img src="{{ asset('storage/images/transaksi.png') }}" alt="Transaksi Aman"
                        style="width: 100%; max-width: 150px; margin-bottom: 15px;" />
                    <h4 style="font-weight: 700;">Transaksi Aman</h4>
                    <p style="color: #7a7a7a; font-size: 14px;">
                        Jualiphone menjamin keamanan data dan transaksi kamu
                    </p>
                </div>
            </div>

            <h2 style="font-weight: 700; margin-top: 70px; margin-bottom: 20px; font-size: 36px">Siapa Sih
                Bakul-iPhone.com?</h2>
            <p style="max-width: 800px; margin: 0 auto; color: #7a7a7a; font-size: 14px; line-height: 1.6;">
                Bakul-iPhone.com adalah sebuah platform daring yang khusus berfokus pada bisnis jual beli iPhone. Mereka
                menyediakan layanan yang memungkinkan pengguna untuk menjual iPhone bekas mereka dengan mudah dan juga untuk
                membeli iPhone baru atau bekas dengan harga yang bersaing. Situs ini menyediakan berbagai pilihan model
                iPhone, mulai dari yang terbaru hingga yang sudah tidak diproduksi lagi. Dengan berbagai fitur seperti
                evaluasi harga yang adil, keamanan transaksi, dan kemudahan dalam proses jual beli, jualiphone.com telah
                menjadi destinasi utama bagi para pengguna iPhone yang ingin memperoleh pengalaman yang lancar dan aman
                dalam bertransaksi.
            </p>
        </section>

    </section>
@endsection
