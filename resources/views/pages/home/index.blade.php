@extends('template.layout')
@section('content')
<div class="mx-20 my-10 main-img">
    <div class="w-1/2 text-second-100">
        <h1 class="font-bold text-5xl pt-1">Temukan Kekayaan Warisan Indonesia</h1>
        <p class="py-10">Galeri Nusantara hadir untuk mempromosikan kekayaan budaya, seni, serta warisan Nusantara secara digital. Mari kita menjaga dan mempromosikan keindahan budaya Indonesia bersama-sama. Selamat menikmati perjalanan budaya Anda!</p>
        <button type="button" class="btn bg-second-100 text-first-100">Lanjut Telusuri</button>
    </div>
</div>
<div class="second-content mx-20 my-80 text-center">
    <h1 class="font-bold text-5xl pt-1 ">GALERI NUSANTARA</h1>
    <p class="text-2xl">Mari mengenal keberagaman yang ada di Indonesia</p>
    <div class="card">
        <div class="first-image grid grid-cols-2">
            <img src="{{ asset('images/kecak.png') }}" alt="">
            <div class="image-info">
                <h1>Tari Kecak</h1>
                <p>merupakan salah satu tarian yang berasal dari Bali. Tarian ini menceritakan kisah percintaan yaitu Rama dan Sinta. Tari Kecak memiliki ciri khas dengan penggunaan suara "cak" yang dilakukan oleh sekelompok pria sebagai bagian dari musik pengiringnya.</p>
                <a href="">Klik Disini</a>
            </div>
        </div>
        <div class="first-image grid grid-cols-2">
            <div class="image-info">
                <h1>Suku Asmat</h1>
                <p>Suku Asmat adalah kelompok etnis yang tinggal di pedalaman Papua, Indonesia. Mereka dikenal dengan seni ukir kayu yang rumit, menghasilkan patung-patung kayu yang menggambarkan makhluk mitos, hewan, dan manusia. Budaya mereka kaya dengan upacara dan ritual, termasuk tradisi perang dan upacara pemakaman yang penting. Meskipun terdapat pengaruh dari dunia luar, upaya pelestarian budaya Asmat telah dilakukan, terutama dalam melestarikan seni ukir kayu dan benda-benda budaya melalui pengakuan UNESCO.</p>
                <a href="">Klik Disini</a>
            </div>
            <img src="{{ asset('images/suku.png') }}" alt="">
        </div>
    </div>
</div>
<div class="third-content -mt-40">
    <div class="ml-20 mr-80">
        <h1 class="font-bold text-5xl pt-1">Kenali Budaya Indonesia di berbagai Pulau</h1>
        <p>Indonesia membanggakan kekayaan budayanya yang beragam, tercermin dari berbagai pulau yang dimilikinya. Dari kesenian menenun tradisional, keindahan motif batik yang khas, hingga upacara ritual melasti yang penuh makna, setiap pulau di Indonesia memiliki warisan budaya yang unik dan menarik untuk dijelajahi.</p>
        <a href="">Lihat Selengkapnya</a>
    </div>
</div>
<div class="fourth-content my-20 flex flex-col">
    <h1 class="flex flex-row-reverse">Kenali Budaya Indonesia di berbagai Pulau</h1>
    <p class="flex flex-row-reverse">Indonesia membanggakan kekayaan budayanya yang beragam, tercermin dari berbagai pulau yang dimilikinya. Dari kesenian menenun tradisional, keindahan motif batik yang khas, hingga upacara ritual melasti yang penuh makna, setiap pulau di Indonesia memiliki warisan budaya yang unik dan menarik untuk dijelajahi.</p>
    <a href="" class="flex flex-row-reverse">Lihat Selengkapnya</a>
</div>
@endsection