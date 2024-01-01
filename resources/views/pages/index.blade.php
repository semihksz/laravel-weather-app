@extends('layout.app')

@section('content')
    <!--  Row 1 -->
    <div class="row">
        <div class="col-lg-12 col-md-12 col-sm-12 d-flex align-items-strech">
            <div class="card w-100">
                <div class="card-body">
                    <div class="d-sm-flex align-items-center justify-content-center mb-9">
                        <div class="mb-3 mb-sm-0 ">
                            <h5 class="card-title fw-semibold ">Popüler Şehirler</h5>
                        </div>
                    </div>
                    <div class="row">
                        @foreach ($cities as $city)
                            <div class="col-lg-4">
                                @if ($current[$city]['temp_c'] < '10')
                                    <div class="card" style="background-color: #82C3EC">
                                        <div class="card-body">
                                            <div class="d-flex justify-content-center text-align-center">
                                                <img class="card-img-top" src="{{ $current[$city]['condition']['icon'] }}"
                                                    alt="Weather Icon" style="max-width:100px" />
                                            </div>
                                            <h4 class="card-title text-white d-flex justify-content-center">
                                                {{ $location[$city]['name'] . ' / ' . $location[$city]['country'] }}
                                            </h4>
                                            <p class="card-text text-white d-flex justify-content-center">Sıcaklık:
                                                {{ $current[$city]['temp_c'] }}°C</p>
                                            <p class="card-text text-white d-flex justify-content-center">Son Güncelleme
                                                Saati:
                                                {{ date('H:i', strtotime($current[$city]['last_updated'])) }}</p>
                                        </div>
                                    </div>
                                @elseif ($current[$city]['temp_c'] < '15')
                                    <div class="card" style="background-color: #4B56D2">
                                        <div class="card-body">
                                            <div class="d-flex justify-content-center text-align-center">
                                                <img class="card-img-top" src="{{ $current[$city]['condition']['icon'] }}"
                                                    alt="Weather Icon" style="max-width:100px" />
                                            </div>
                                            <h4 class="card-title text-white d-flex justify-content-center">
                                                {{ $location[$city]['name'] . ' / ' . $location[$city]['country'] }}
                                            </h4>
                                            <p class="card-text text-white d-flex justify-content-center">Sıcaklık:
                                                {{ $current[$city]['temp_c'] }}°C</p>
                                            <p class="card-text text-white d-flex justify-content-center">Son Güncelleme
                                                Saati:
                                                {{ date('H:i', strtotime($current[$city]['last_updated'])) }}</p>
                                        </div>
                                    </div>
                                @else
                                    <div class="card" style="background-color: #EB6440">
                                        <div class="card-body mx-auto">
                                            <div class="d-flex justify-content-center text-align-center">
                                                <img class="card-img-top" src="{{ $current[$city]['condition']['icon'] }}"
                                                    alt="Weather Icon" style="max-width:100px" />
                                            </div>
                                            <h4 class="card-title text-white d-flex justify-content-center">
                                                {{ $location[$city]['name'] . ' / ' . $location[$city]['country'] }}
                                            </h4>
                                            <p class="card-text text-white d-flex justify-content-center">Sıcaklık:
                                                {{ $current[$city]['temp_c'] }}°C</p>
                                            <p class="card-text text-white d-flex justify-content-center">Son Güncelleme
                                                Saati:
                                                {{ date('H:i', strtotime($current[$city]['last_updated'])) }}</p>
                                        </div>
                                    </div>
                                @endif
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
