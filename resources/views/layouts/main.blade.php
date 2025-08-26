<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
     @vite('resources/css/app.css')
</head>
<body>
    <header class="bg-[#23395B] flex flex-col gap-7 w-screen h-36 justify-center items-center relative">
        <h1><a href="/" class="top-0 text-white text-3xl">Aplikasi Web Sekolah</a></h1>
        <nav class="flex justify-around w-[80%] h-8 items-center text-white text-[1rem]">
            <a href="/" class="bg-[#406E8E] rounded-xl p-2">Beranda</a> 
            <a href="/about" class="bg-[#406E8E] rounded-xl p-2">Tentang Kami</a> 
            <a href="/dashboard" class="bg-[#406E8E] rounded-xl p-2">Dashboard</a> 
            <a href="/Teacher"  class="bg-[#406E8E] rounded-xl p-2">Guru</a>
        </nav>
    </header>
<body >
    <main class="bg-[#CBF7ED] w-screen h-dvh text-center p-5">
        @yield('content') {{-- Ini adalah "lubang" untuk
        konten utama halaman --}}
    </main>
    <footer class="w-screen h-20 flex justify-center items-center bg-[#161925] z-30">
        <p class="text-white">&copy; 2025 SMK PLUS PELITA NUSANTARA. Hak
        Cipta Dilindungi.</p>
    </footer>
</body>
</html>