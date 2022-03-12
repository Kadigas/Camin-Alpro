@extends('components/layout')

@section('content')
<section>
    <div class="container-xl">
            <h1 class="text-center pt-4">Daftar Camin Alpro 2022</h1>
            <br>
            <div class="row mt-4" style="">
                @foreach ($data as $camin)
                    <div class="card col-5 mx-auto mb-4">
                        <img src="https://buildyourspechere.com/wp-content/uploads/2020/10/placeholder-image-person-jpg.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">
                                {{ $camin["nama"] }}
                            </h5>
                            <h6 class="card-text">{{ $camin["nrp"] }}</h6>
                            <a href="/camin/{{ $camin["id"] }}" class="btn btn-primary btn-sm">Details</a>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>
@endsection