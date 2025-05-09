@props(['title'])
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{$title}}</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>
    @include('Partiels/nav')
    <main>
        <div class="m-3">
            @if (session()->has('success'))
                <x-alert type='success' >{{session('success')}}</x-alert>
                
            @endif
            {{$slot}}
        </div>
        
    </main>
    @include('Partiels/footer')

</body>
</html>