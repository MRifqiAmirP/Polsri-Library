<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title><?= $this->renderSection('title')?></title>

    <!-- Tailwind CDN -->
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>

    <!-- Google Font -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Gabarito:wght@400..900&family=Work+Sans:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">

    <!-- Custom Font Style -->
    <style type="text/tailwindcss">
        @layer base {
            .font-gabarito {
                font-family: 'Gabarito', sans-serif;
            }
        }
    </style>
</head>

<!-- Tempat halaman-halaman lain akan dirender -->
<body class="font-gabarito text-[#404040]">
    <?= $this->renderSection('content') ?>
</body>

</html>
