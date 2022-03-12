@extends('components/layout')

@section('content')
<section>
    <div class="container-xl">
            <h1 class="text-center pt-4">Daftar Camin Alpro 2022</h1>
            <br>
            <div class="d-flex my-4 pt-4" style="">
                <img src="https://buildyourspechere.com/wp-content/uploads/2020/10/placeholder-image-person-jpg.jpg" class="card-img-top w-25 alt="...">
                <div class="row mt-4 mx-4">
                    <h4>{{ $data["nama"] }}</h4>
                    <h5>NRP: {{$data["nrp"]}}</h5>
                    <h5>Jurusan: {{$data["jurusan"]}}</h5>
                    <h5>Angkatan: {{$data["angkatan"]}}</h5>
                </div>
            </div>
            <a href="/camin" class="btn btn-outline-danger btn-lg d-flex justify-content-center">Back</a>
        </div>
    </section>
@endsection