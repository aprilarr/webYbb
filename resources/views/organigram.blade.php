@extends('layout/footer')
@section('markhalaman')
<section class="probootstrap-section probootstrap-section-colored">
    <div class="container">
        <div class="row">
            <div class="col-md-12 text-left section-heading probootstrap-animate">
                <h2>{{$nama}}</h2>
            </div>
        </div>
    </div>
</section>
@endsection
@section('container')
{{-- <div class="media">
    <img src="enlight/img/organigram.png" class="align-self-center mr-3" alt="...">
    <div class="media-body">
        <h5 class="mt-0">Center-aligned media</h5>
        <p>Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis in faucibus.</p>
        <p class="mb-0">Donec sed odio dui. Nullam quis risus eget urna mollis ornare vel eu leo. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.</p>
    </div>
</div> --}}
<div class="container mt-8">
<img src="enlight/img/organigram.png" class="img-fluid-center" alt="Responsive image">
</div>
<br>
<br>
@endsection
@extends('layout/header')