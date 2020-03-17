@extends('layout')

@section('content')
    <div class="main-content">
        <div class="container">
            <div class="row">
                <div class="col-md-8">
                    <h3 class="text-center">
                        About me
                    </h3>
                    <p>
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquid dicta dolore eos error esse est ipsam
                        iusto libero magni, modi, mollitia nesciunt omnis praesentium quasi, sequi soluta
                        totam voluptatem voluptatum.
                    </p>
                </div>
                @include('pages._sidebar')
            </div>
        </div>
    </div>
@endsection