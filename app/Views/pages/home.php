<!-- Ambil file layouts/main.php sebagai template -->
<?= $this->extend('layouts/main') ?>

<!-- Render title -->
<?= $this->section('title') ?>
Polsri Library
<?= $this->endSection() ?>

<!-- Render content yang akan dimasukkan ke tengah-tengah file layouts/main.php -->
<?= $this->section('content') ?>
<div class="w-full h-screen flex justify-center items-center">
    <div class="flex flex-col gap-5">
        <div class="flex items-center gap-3">
            <img class="w-17 h-17" src="/img/logo/polsri_logo.png" alt="Politeknik Negeri Sriwijaya">
            <h1 class="text-6xl font-bold">POLSRI LIBRARY</h1>
        </div>
        <div class="p-4 border-1 border-[#D0D0D0] rounded flex flex-col gap-5 justify-between shadow">
            <div class="flex justify-between items-center">
                <p>Documentation References</p>
                <div class="flex items-center">
                    <div class="w-2 h-2 bg-orange-400 rounded-full"></div>
                    <p class="text-xs px-2 py-1 rounded text-orange-400 font-medium">Development</p>
                </div>
            </div>
            <div class="flex gap-4 justify-center">
                <a href="https://codeigniter.com/user_guide/">
                    <p class="bg-gray-100 w-fit px-2 py-1 rounded text-sm hover:bg-gray-500 hover:text-white hover:font-medium transition-all duration-200">CodeIgniter 4 Documentation</p>
                </a>
                <a href="https://tailwindcss.com/docs/">
                    <p class="bg-gray-100 w-fit px-2 py-1 rounded text-sm hover:bg-gray-500 hover:text-white hover:font-medium transition-all duration-200">Tailwind CSS Documentation</p>
                </a>
            </div>
        </div>
    </div>
</div>
<?= $this->endSection() ?>
