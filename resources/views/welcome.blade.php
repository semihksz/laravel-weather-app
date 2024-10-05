<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{env('APP_NAME')}}</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css"
        integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="{{asset('assets/style.css')}}">
</head>

<body>
    @if (session('error'))
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script>
        Swal.fire({
            icon: 'error',
            title: @json(session('error'))
        });
    </script>
    @endif
    <div class="container mt-5">
        <div class="d-flex flex-row justify-content-center align-items-center">
            <div class="weather__card">
                <form action="{{route('locationWeather')}}" method="post">
                    @csrf
                    <div class="input-group mb-3">
                        <input type="text" class="form-control" placeholder="Search Location"
                            aria-label="Search Location" name="location" aria-describedby="button-addon2">
                        <button class="btn btn-outline-secondary" type="submit" id="button-addon2"><i
                                class="fa-solid fa-magnifying-glass"></i></button>
                    </div>
                </form>

                <div class="d-flex flex-row justify-content-center align-items-center">
                    <div class="p-3">
                        <h2>{{$datas['current']['temp_c'] ?? ''}}&deg;</h2>
                    </div>
                    <div class="p-3">
                        <img src="{{$datas['current']['condition']['icon'] ?? ''}}">
                    </div>
                    <div class="p-3">
                        <h5>{{ isset($datas['location']['localtime']) ? date('l / d M',
                            strtotime($datas['location']['localtime'])) : ''}}</h5>
                        <h3>{{$datas['location']['name'] ?? ''}}</h3>
                        <h4>{{$datas['location']['country'] ?? ''}}</h4>
                        <span class="weather__description">{{$datas['current']['condition']['text'] ?? ''}}</span>
                    </div>
                </div>

                {{-- weather today status --}}
                <div class="weather__status d-flex flex-row justify-content-center align-items-center mt-3">
                    <div class="p-4 d-flex justify-content-center align-items-center">
                        <svg fill="#f9a48f" height="25px" width="25px" version="1.1" id="Capa_1"
                            xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                            viewBox="0 0 328.61 328.61" xml:space="preserve">
                            <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                            <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"
                                stroke="#CCCCCC" stroke-width="0.657222"></g>
                            <g id="SVGRepo_iconCarrier">
                                <g>
                                    <path
                                        d="M209.306,50.798c-2.452-3.337-7.147-4.055-10.485-1.602c-3.338,2.453-4.055,7.147-1.603,10.485 c54.576,74.266,66.032,123.541,66.032,151.8c0,27.691-8.272,52.794-23.293,70.685c-17.519,20.866-42.972,31.446-75.651,31.446 c-73.031,0-98.944-55.018-98.944-102.131c0-52.227,28.103-103.234,51.679-136.829c25.858-36.847,52.11-61.415,52.37-61.657 c3.035-2.819,3.209-7.565,0.39-10.6c-2.819-3.034-7.565-3.209-10.599-0.39c-1.11,1.031-27.497,25.698-54.254,63.765 c-24.901,35.428-54.586,89.465-54.586,145.71c0,31.062,9.673,59.599,27.236,80.353c20.361,24.061,50.345,36.779,86.708,36.779 c36.794,0,66.926-12.726,87.139-36.801c17.286-20.588,26.806-49.117,26.806-80.33C278.25,156.216,240.758,93.597,209.306,50.798z">
                                    </path>
                                    <path
                                        d="M198.43,148.146l-95.162,95.162c-2.929,2.929-2.929,7.678,0,10.606c1.465,1.464,3.385,2.197,5.304,2.197 s3.839-0.732,5.304-2.197l95.162-95.162c2.929-2.929,2.929-7.678,0-10.606C206.107,145.217,201.359,145.217,198.43,148.146z">
                                    </path>
                                    <path
                                        d="M191.965,207.899c-13.292,0-24.106,10.814-24.106,24.106s10.814,24.106,24.106,24.106s24.106-10.814,24.106-24.106 S205.257,207.899,191.965,207.899z M191.965,241.111c-5.021,0-9.106-4.085-9.106-9.106s4.085-9.106,9.106-9.106 s9.106,4.085,9.106,9.106S196.986,241.111,191.965,241.111z">
                                    </path>
                                    <path
                                        d="M125.178,194.162c13.292,0,24.106-10.814,24.106-24.106s-10.814-24.106-24.106-24.106s-24.106,10.814-24.106,24.106 S111.886,194.162,125.178,194.162z M125.178,160.949c5.021,0,9.106,4.085,9.106,9.106s-4.085,9.106-9.106,9.106 c-5.021,0-9.106-4.085-9.106-9.106S120.156,160.949,125.178,160.949z">
                                    </path>
                                </g>
                            </g>
                        </svg>
                        <span>{{$datas['current']['humidity'] ?? ''}}%</span>
                    </div>
                    <div class="p-4 d-flex justify-content-center align-items-center">
                        <img src="https://svgur.com/i/oH_.svg">
                        <span>{{$datas['current']['pressure_mb'] ?? ''}} mB</span>
                    </div>
                    <div class="p-4 d-flex justify-content-center align-items-center">
                        <img src="https://svgur.com/i/oKS.svg">
                        <span>{{$datas['current']['wind_kph'] ?? ''}} km/h</span>
                    </div>
                </div>

                {{-- weather forecast --}}
                <div class="weather__forecast d-flex flex-row justify-content-center align-items-center mt-3">
                    <div class="p-4 d-flex flex-column justify-content-center align-items-center">
                        <span>{{ isset($datas['location']['localtime']) ?
                            \Carbon\Carbon::parse($datas['location']['localtime'])->addDay()->format('l') : '' }}
                        </span>
                        <img src="{{$datas['forecast'][1]['day']['condition']['icon'] ?? ''}}">
                        <span>AVG / {{$datas['forecast'][1]['day']['avgtemp_c'] ?? ''}}&deg;</span>
                    </div>

                    <div class="p-4 d-flex flex-column justify-content-center align-items-center">
                        <span>{{ isset($datas['location']['localtime']) ?
                            \Carbon\Carbon::parse($datas['location']['localtime'])->addDay(2)->format('l') : ''
                            }}</span>
                        <img src="{{$datas['forecast'][2]['day']['condition']['icon'] ?? ''}}">
                        <span>AVG / {{$datas['forecast'][2]['day']['avgtemp_c'] ?? ''}}&deg;</span>
                    </div>
                </div>
            </div>
        </div>
    </div>


</body>

</html>
