@extends('layouts.app')
@section('content')
    <section class = "section">
        <div class = "container" id = "root">
            <h1>Passport</h1>

            <authorized-clients></authorized-clients>
            <clients></clients>
            <personal-access-token></personal-access-token>

        </div>
    </section>
    <script src = "{{ asset('js/jquery.min.js') }}"></script>
    <script src = "{{ asset('js/bootstrap.min.js') }}"></script>
    <script src = "{{ asset('js/app.js') }}"></script>
@endsection




