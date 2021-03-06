<!DOCTYPE html>
<html lang="{{ config('app.locale') }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>BlueBox</title>

    </head>
    <body>
        <div class="flex-center position-ref full-height">
          @yield('content')
          
          <script>
              window.Laravel = {!! json_encode([
                  'csrfToken' => csrf_token(),
              ]) !!};
          </script>
          <link rel="stylesheet" href="{{ mix('css/app.css') }}">
          <script src="{{ mix('js/app.js') }}"></script>
        </div>
    </body>
</html>
