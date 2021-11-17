<html>
    <head>
        <link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">

    </head>
    <body>
        <p class="text-4xl text-center">Documentos</p>

        <div class="max-w-2xl m-auto">
            @foreach ($documents as $document)
                <div class="text-xl border">{{ $document->name }}</div>
            @endforeach
        </div>
    </body>
</html>