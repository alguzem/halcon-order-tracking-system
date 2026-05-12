<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>HALCON SYSTEM</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">

    <link
        href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap"
        rel="stylesheet"
    />

    <!-- Bootstrap -->
    <link
        href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"
        rel="stylesheet"
    >

    <!-- Bootstrap Icons -->
    <link
        rel="stylesheet"
        href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css"
    >

    <!-- Custom Styles -->
    <style>

        body{
            background:#f4f6f9;
        }

        .card{
            border:none;
            border-radius:15px;
        }

        .table{
            background:white;
            border-radius:15px;
            overflow:hidden;
        }

        .btn{
            border-radius:10px;
        }

        .badge{
            padding:8px 12px;
            font-size:14px;
        }

        .shadow-custom{
            box-shadow:0px 5px 20px rgba(0,0,0,0.08);
        }

    </style>

    <!-- Vite -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])

</head>

<body class="font-sans antialiased">

    <div class="min-h-screen">

        <!-- Navigation -->
        @include('layouts.navigation')

        <!-- Header -->
        @isset($header)

            <header class="bg-white shadow-sm mb-4">

                <div class="max-w-7xl mx-auto py-4 px-4 sm:px-6 lg:px-8">

                    {{ $header }}

                </div>

            </header>

        @endisset

        <!-- Main Content -->
        <main class="container py-4">

            {{ $slot }}

        </main>

    </div>

    <!-- SweetAlert -->
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    <!-- Success Alert -->
    @if(session('success'))

    <script>

        Swal.fire({

            icon:'success',
            title:'Success',
            text:'{{ session('success') }}',
            confirmButtonColor:'#1e293b'

        });

    </script>

    @endif

    <!-- Error Alert -->
    @if(session('error'))

    <script>

        Swal.fire({

            icon:'error',
            title:'Error',
            text:'{{ session('error') }}',
            confirmButtonColor:'#dc3545'

        });

    </script>

    @endif

    <!-- Bootstrap JS -->
    <script
        src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js">
    </script>

</body>

</html>