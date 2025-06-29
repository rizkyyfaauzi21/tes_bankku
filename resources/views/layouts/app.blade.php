<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap" rel="stylesheet">
    <script src="https://cdn.tailwindcss.com"></script>
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    fontFamily: {
                        sans: ['Inter', 'sans-serif'],
                    }
                }
            }
        }
    </script>
    <style>
        .hide-scrollbar::-webkit-scrollbar {
            display: none;
        }

        .hide-scrollbar {
            scrollbar-width: none;
        }

        .hide-scrollbar {
            -ms-overflow-style: none;
        }
    </style>
    <title>Bankku</title>
</head>
<body class="flex h-screen bg-[#F5F7FA] font-sans">

@include('partials.sidebar')

<div class="flex-1 flex flex-col">
    @include('partials.mobile-nav')
    @include('partials.header')

    <main class="p-4 overflow-auto mt-40 md:mt-0 hide-scrollbar">
        @yield('content')
    </main>
</div>
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
<script src="https://cdn.jsdelivr.net/npm/chartjs-plugin-datalabels@2"></script>
<script src="//unpkg.com/alpinejs" defer></script>
@stack('scripts')
</body>

</html>
