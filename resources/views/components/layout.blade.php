<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>{{ $title }}</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css">
   @stack('styles')


</head>

<body class="d-flex flex-column min-vh-100"> {{-- ✅ Sticky footer setup --}}

  <x-navbar />


  {{-- Bagian konten utama --}}

  {{-- Bagian utama konten --}}

  <main class="flex-fill"> 
    <div class="container-fluid">
      {{ $slot }}
    </div>
  </main>

  <x-footer /> 

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" defer></script>
  <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
  @vite('resources/js/app.js')

</body>

</html>
