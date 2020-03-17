@if($errors->any())
    <div class="container">
        <div class="row">
            <div class="col-md-10 col-md-offset-1">
                <div class="alert alert-danger">

                    @foreach($errors->all() as $error)
                        <div>{{ $error  }}</div>
                    @endforeach

                </div>
            </div>
        </div>
    </div>
@endif