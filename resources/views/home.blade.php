<!DOCTYPE html>
                  <html class="dark"><head>
    <meta charset="utf-8"/>
    <meta content="width=device-width, initial-scale=1.0" name="viewport"/>
    <title> {{ $title }}</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" rel="stylesheet"/>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap" rel="stylesheet"/>
    
</head>

<body class="bg-gray-100">

   @include('layouts.header')
   
   @include('layouts.navbar')

    <main class="container mx-auto px-4 py-8">
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
            @foreach(range(1, 6) as $index)
                <x-card />
            @endforeach
        </div>
    </main>
</body>
</html>

{{-- Credit by Naufal Afif --}}