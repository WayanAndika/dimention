@extends('template.layout')
@section('content')
<div class="home-layout">
    @include('partials.navbar')
    <div class="mx-20 my-10 main-img">
        <div class="w-1/2 text-second-100">
            <h1 class="font-bold text-5xl pt-1">Temukan Kekayaan Warisan Indonesia</h1>
            <p class="py-10">
                Galeri Nusantara hadir sebagai platform digital yang mengangkat kekayaan budaya, seni, dan warisan Indonesia. Tujuannya adalah untuk merayakan dan mempromosikan keragaman budaya Nusantara kepada masyarakat global. Kami mengundang semua orang untuk bersama-sama menjaga, menghargai, dan membagikan keindahan budaya Indonesia. Melalui Galeri Nusantara, kami mengajak Anda dalam perjalanan budaya yang memikat, menggali kisah masa lalu, dan merayakan keunikan yang menghiasi setiap bagian dari tanah ini.</p>
            <button type="button" class="btn bg-second-100 text-first-100 hover:text-second-100">Lanjut Telusuri</button>
        </div>
    </div>
    <div class="second-content mx-20 mt-60 text-center text-second-100">
        <h1 class="font-bold text-5xl pt-1 ">GALERI NUSANTARA</h1>
        <p class="text-2xl my-5">Marilah kita bersama-sama menjelajahi kekayaan keberagaman yang menghiasi Indonesia, sebuah perjalanan budaya yang memukau.</p>
        <div class="card mt-20">
            <div class="first-image grid grid-cols-2">
                <img src="{{ asset('images/kecak.png') }}" alt="">
                <div class="image-info text-start">
                    <h1 class="text-3xl font-bold mb-5">Tari Kecak</h1>
                    <p>Merupakan tarian tradisional yang berakar dari Bali, membawa cerita romantis Rama dan Sinta dalam gerak dan suara yang menyatu. Dalam tarian ini, suara "cak" yang dihasilkan oleh sekelompok pria tidak hanya menjadi musik pengiring, tetapi juga elemen penting yang memberikan ritme dan nuansa emosional pada cerita. Dengan setiap gerakan yang dipadukan dengan harmoni suara, Tari Kecak tidak hanya menghibur, tetapi juga menghadirkan makna dalam bentuk seni yang memukau.</p>
                    <a href="" class="btn bg-first-100 text-second-100 mt-7">Klik Disini</a>
                </div>
            </div>
            <div class="first-image grid grid-cols-2 mt-10">
                <div class="image-info text-end mr-32">
                    <h1 class="text-3xl font-bold mb-5">Suku Asmat</h1>
                    <p>Merupakan kelompok etnis yang tinggal di pedalaman Papua, Indonesia. Mereka dikenal dengan seni ukir kayu yang rumit, menghasilkan patung-patung kayu yang menggambarkan makhluk mitos, hewan, dan manusia. Budaya mereka kaya dengan upacara dan ritual, termasuk tradisi perang dan upacara pemakaman yang penting. Meskipun terdapat pengaruh dari dunia luar, upaya pelestarian budaya Asmat telah dilakukan, terutama dalam melestarikan seni ukir kayu dan benda-benda budaya melalui pengakuan UNESCO.</p>
                    <a href="" class="btn bg-first-100 text-second-100 mt-7">Klik Disini</a>
                </div>
                <img src="{{ asset('images/suku.png') }}" alt="">
            </div>
        </div>
    </div>
    <div class="third-content mt-40 bg-third-100/50">
        <div class="ml-20 mr-80 w-1/2 pt-20 text-second-100 ">
            <h1 class="font-bold text-5xl pb-10 ">Kenali Budaya Indonesia di berbagai Pulau</h1>
            <p class="text-xl">Indonesia membanggakan kekayaan budayanya yang beragam, tercermin dari berbagai pulau yang dimilikinya. Dari kesenian menenun tradisional, keindahan motif batik yang khas, hingga upacara ritual melasti yang penuh makna, setiap pulau di Indonesia memiliki warisan budaya yang unik dan menarik untuk dijelajahi.</p>
            <a href="" class="btn bg-second-100 mt-10 text-third-100 hover:text-second-100">Lihat Selengkapnya</a>
        </div>
    </div>
    <div class="fourth-content flex justify-end">
        <div class="w-1/2 pt-20 text-second-100 text-end mr-20">
            <h1 class="font-bold text-5xl pb-10">Tradisi & Adat Istiadat di berbagai Daerah </h1>
            <p class="text-xl">
                Selain budayanya, Indonesia juga terkenal karena ragam tradisi dan adat istiadat yang memikat. Keunikan dari setiap tradisi dan adat yang tersebar di seluruh daerah negeri ini menjadi daya tarik utama bagi para wisatawan internasional. Dari barat ke timur, setiap sudut Indonesia menyimpan kekayaan warisan budaya yang unik dan menarik, memungkinkan para pelancong merasakan keindahan serta makna mendalam dari tradisi-tradisi luhur yang masih dijaga hingga saat ini.</p>
            <a href="" class="btn bg-second-100 mt-10 text-third-100 hover:text-second-100">Lihat Selengkapnya</a>
        </div>
    </div>
</div>
@endsection