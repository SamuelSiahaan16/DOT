<meta charset="UTF-8" />
<meta http-equiv="X-UA-Compatible" content="IE=edge" />
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<meta name="csrf-token" content="{{ csrf_token() }}" />


<link rel="shortcut icon" type="image/png" href="{{ asset('img/logo2.png') }}" />


<link rel="stylesheet" href="{{ asset('template/assets/css/styles.css') }}" />

<title>{{config('app.name') . ': ' .$title ?? config('app.name')}}</title>


<link rel="stylesheet" href="{{ asset('template/assets/libs/owl.carousel/dist/assets/owl.carousel.min.css') }}" />

<link rel="stylesheet" href="{{ asset('template/assets/libs/sweetalert2/dist/sweetalert2.min.css') }}">