@extends('pelanggan.layout.index')
<link rel="stylesheet" type="text/css" href="{{ asset('css/styles.css') }}">

@section('content')
    {{-- @if ($best->count() == 0)
        <div class="container"></div>
    @else
        <h4 class="mt-5">Best Seller</h4>
        <div class="content mt-3 d-flex flex-lg-wrap gap-5 mb-5">
            @foreach ($best as $b)
                <div class="card" style="width:220px;">
                    <div class="card-header m-auto" style="height:100%;width:100%;">
                        <img src="{{ asset('storage/product/' . $b->foto) }}" alt="baju 1"
                            style="width: 100%;height:200px; object-fit: cover; padding:0;">
                    </div>
                    <div class="card-body">
                        <p class="m-0 text-justify"> {{ $b->nama_product }} </p>
                        {{-- <p class="m-0"><i class="fa-regular fa-star"></i> 5+</p> --}}
                    {{-- </div>
                    <div class="card-footer d-flex flex-row justify-content-between align-items-center">
                        <p class="m-0" style="font-size: 16px; font-weight:600;"><span>IDR
                            </span>{{ number_format($b->harga) }}</p>
                        <button class="btn btn-outline-primary" style="font-size:24px">
                            <i class="fa-solid fa-cart-plus"></i>
                        </button>
                    </div>
                </div>
            @endforeach
        </div>
    @endif --}}
    
    <div class="content mt-3 d-flex flex-lg-wrap gap-5 mb-5 new-product-container">
  
        <style>
            .new-product-container {
            display: flex;
            justify-content: center; /* add this line */
            animation: slideInFromLeft 1s ease-in-out;
            }
        
            @keyframes slideInFromLeft {
                0% {
                    transform: translateX(-100%);
                }
                100% {
                    transform: translateX(0);
                }
            }
        </style>
    <div class="text-center p-lg-4 mt-1">
    <h4 class="mt-5" style="color:#0084FF; font-weight: bold">PRODUCT!!!</h4>
    <div class="row justify-content-center">
        @if ($data->isEmpty())
            <h1>wah pruoduct belum di update nihh, masih kosong ._. sorry</h1>
        @else
            @foreach ($data as $p)
            <div class="card mx-3" style="width: 270px; height: 340px; background: linear-gradient(180deg, #FF99BE 0%, #96CBFC 100%); border-radius: 20px">
                    <div class=" m-auto" style="height:100%;width:100%;">
                        <img src="{{ asset('storage/product/' . $p->foto) }}" alt="baju 1"
                            style="width: 100%; height:208px; object-fit: cover; padding:0; margin: -40px; border-radius: 25px;">
                    </div>
                    <div class="card-body">
                        <p class="m-0 text-justify" style="text-align: center; color: white; font-size: 25px; font-family: Nunito; font-weight: 700; word-wrap: break-word"> {{ $p->nama_product }} </p>
                        <p class="m-0" style="text-align: center; color: white; font-size: 30px; font-family: Nunito; font-weight: 700; word-wrap: break-word;"><span>IDR
                        </span >{{ number_format($p->harga) }}</p>
                        
                        
                    </div>
                    
                    <div class=" d-flex flex-row justify-content-between align-items-center">
                        {{-- <form action="{{route('addTocart')}}" method="POST">
                            @csrf
                            <input type="hidden" name="idProduct" value="{{$p->id}}">
                            <button type="submit" class="btn" style="font-size:24px; color: #9b086c">
                                <i class="fa-solid fa-cart-plus"></i>
                            </button>
                        </form> --}}
                    </div>
                </div>
            @endforeach
    </div>
    <br>
    <div class="pagination d-flex flex-row justify-content-center">
        <div class="showData">
            {{-- menu yang ditampilkan {{ $data->count() }} dari {{ $data->total() }} --}}
        </div>
        <div>
            {{ $data->links() }}
        </div>       
    </div>
    <br>
    
    @endif
    @include('pelanggan.page.contact')

@endsection