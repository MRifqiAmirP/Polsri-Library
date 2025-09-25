<!-- Ambil file layouts/main.php sebagai template -->
<?= $this->extend('layouts/main') ?>

<!-- Render content yang akan dimasukkan ke tengah-tengah file layouts/main.php -->
<?= $this->section('content') ?>
<div class="w-md-12 h-md-12">
    <h1 class="text-center">Polsri Library</h1>
    <p class="text-center">On Development. Go to /admin for admin page</p>
</div>
<?= $this->endSection() ?>
