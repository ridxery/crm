<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="icon" href="/favicon.ico">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w==" crossorigin="anonymous" />
        @livewireStyles
        @livewireScripts
        <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.8.2/dist/alpine.min.js" defer></script>
        <script src="/assets/js/bootstrap500bundle.min.js" async="async"></script>
        <title>Ridxery's CRM</title>
    </head>
    <body>
        @if(Auth::guest())
            <link href="/assets/css/darkly/bootstrap.min.css" rel="stylesheet" id="mainCSSTheme">
        @else
            <livewire:navbar.top/>
        @endif
        <div class="container-fluid mt-5">
            {{$slot}}
        </div>
    </body>
</html>
