@extends('main')
@section('title', 'Home')
@section('container')
    <div class="grid grid-cols-2">
        {{-- <img src="assets/img/test-1.png" alt="Image" class=""> --}}
        <div class="flex flex-col pl-48 justify-center text-white">
            <div class="pt-40">
                <div class="font-quicksand text-gray-50">
                    <h1 class="font-bold text-6xl">Halo, Selamat Datang!</h1>
                    <p class="font-normal text-3xl mt-4">Di Website Official Dokokani Dev.</p>
                </div>
            </div>
        </div>
        <div class="flex items-end justify-center">
            <div class="w-2/3 ml-28 mt-48 ">
                <img src="assets/img/KS1.jpg" alt="Image" class="w-1/2">
            </div>
        </div>
    </div>
@endsection