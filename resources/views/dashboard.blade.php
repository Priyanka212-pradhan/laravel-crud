@extends('layouts.app')

@section('title', 'Dashboard')


@section('content')
    <h1>This is dashboard page.</h1>
@endsection

@push('scripts')
<script>
    document.addEventListener("DOMContentLoaded", function () {
        alert("Hello from the Dashboard Page!");
        console.log("Home page JS loaded.");
    });
</script>