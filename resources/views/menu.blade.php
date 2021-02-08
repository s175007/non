@extends('layouts.header')

@section('content')

    <body>

        @foreach ($food_types as $food_type)
            <h2 style="">{{ $food_type->name }}</h2>
            <section class=" slider">
                <ul id="food-{{ $loop->index }}" class="cs-hidden">
                    @forelse ($food_type->foods as $food)


                        <li class="item-a">
                            <!--box-slider--------------->
                            <div class="box">
                                <!--img-box---------->
                                <div class="slide-img">
                                    <img alt="1" src="{{ asset('upload/' . $food->image) }}">
                                    <!--overlayer---------->
                                    {{-- <div class="overlay">
                                    <!--buy-btn------>
                                    <a href="#" class="buy-btn">Buy Now</a>
                                </div> --}}
                                </div>
                                <!--detail-box--------->
                                <div class="detail-box">
                                    <!--type-------->
                                    <div class="type">
                                        <a>{{ $food->foodnamevn }}</a>
                                        <span>{{ $food->foodnamejp }}</span>
                                    </div>
                                    <!--price-------->
                                    @if ($food->status)
                                        <a class="price">{{ $food->price }}円</a>
                                    @else
                                        <a style="color: #d2321e">Hết</a>
                                    @endif
                                </div>
                            </div>
                        </li>
                    @empty
                        <p>.</p>
        @endforelse
        </ul>
        </section>
        @endforeach

        <script>
            let food_types_count = {{ count($food_types) }};

        </script>
    </body>
@endsection
