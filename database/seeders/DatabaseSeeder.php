<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Provinsi;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();

        User::create([
            "name" => "Wayan Andika",
            "email" => "andika23@gmail.com",
            "password" => bcrypt("1212121212"),
            "is_admin" => true
        ]);

        Provinsi::create([
            "nama" => "Aceh",
            "deskripsi" => "Provinsi Aceh adalah salah satu provinsi yang terletak di ujung barat Indonesia, yang terkenal dengan budayanya yang kaya dan sejarah yang beragam. Provinsi ini memiliki identitas budaya yang kuat, yang dipengaruhi oleh agama Islam. Seni tradisional, seperti tari saman, tari seudati, dan pertunjukan musik gamelan, masih dijaga dengan baik dan sering dipertunjukkan dalam upacara adat, pernikahan, dan acara penting lainnya. Aceh juga dikenal dengan arsitektur yang indah, terutama dalam bentuk masjid tradisional yang megah. Selain budayanya yang kaya, Aceh juga memiliki keindahan alam yang menakjubkan, dengan pantai-pantai eksotis di sepanjang pantai barat dan taman nasional yang melindungi hutan hujan tropis serta beragam satwa liar. Keberagaman ini menjadikan Aceh sebagai salah satu destinasi yang menarik bagi para wisatawan yang ingin menjelajahi budaya, sejarah, dan alam Indonesia.

            Secara kuliner, Aceh terkenal dengan hidangan yang beraroma kuat dan pedas, seperti nasi goreng Aceh yang berbumbu kari dan mie Aceh yang disajikan dengan kuah pedas khas. Selain itu, Aceh juga memiliki warisan kuliner unik, seperti rendang daging sapi khas Aceh yang memiliki cita rasa kaya dan bumbu yang meresap. Keseluruhan, Aceh adalah provinsi yang kaya akan budaya, sejarah, kuliner, dan alam yang mempesona, menjadikannya salah satu tempat yang menarik untuk dikunjungi di Indonesia."
        ]);
        Provinsi::create([
            "nama" => "Sumatera Utara",
            "deskripsi" => "Sumatera Utara adalah provinsi yang terletak di bagian utara Pulau Sumatera, yang memiliki budaya dan keindahan alam yang luar biasa. Provinsi ini adalah rumah bagi suku Batak yang memiliki budaya yang kaya dan unik. Adat istiadat seperti upacara adat Batak Toba yang disebut 'Siraja Oloan' dan perayaan pernikahan tradisional 'Pesta Adat' masih sangat dihormati dan sering dipraktikkan oleh masyarakat setempat. Seni tradisional seperti tari tortor dan gondang sabangunan juga memainkan peran penting dalam budaya Batak. Makanan khas Sumatera Utara mencakup nasi ulam, saksang, dan panggang, yang menghadirkan cita rasa yang unik dengan penggunaan berbagai bumbu tradisional.

            Selain budayanya yang kaya, Sumatera Utara juga memiliki keindahan alam yang menakjubkan. Provinsi ini terkenal dengan Danau Toba, danau vulkanik terbesar di dunia, yang menghadirkan pemandangan spektakuler. Taman Nasional Gunung Leuser, yang merupakan rumah bagi harimau sumatera, orangutan, dan berbagai jenis burung eksotis, juga berlokasi di provinsi ini. Sumatera Utara adalah destinasi yang menarik bagi para pengunjung yang ingin menjelajahi budaya tradisional, menikmati kuliner yang lezat, dan mengeksplorasi keindahan alam Indonesia yang luar biasa."
        ]);
        Provinsi::create([
            "nama" => "Sumatera Barat",
            "deskripsi" => "Sumatera Barat adalah provinsi yang terletak di pesisir barat Pulau Sumatera dan memiliki kekayaan budaya dan alam yang menakjubkan. Provinsi ini adalah rumah bagi suku Minangkabau, yang memiliki budaya unik yang sangat dihormati di seluruh Indonesia. Salah satu ciri khas budaya Minangkabau adalah rumah tradisional 'rumah gadang' yang memiliki atap bergaya tanduk kerbau. Adat istiadat, seperti pernikahan adat dengan upacara 'salah baju' dan musik tradisional seperti tari ranah minang, juga memainkan peran penting dalam budaya Minangkabau. Makanan khas Sumatera Barat yang paling terkenal adalah rendang, masakan daging sapi yang dimasak dalam rempah-rempah kaya dan santan. Selain itu, ada pula masakan seperti nasi kapau dan sate padang yang lezat.

            Keindahan alam Sumatera Barat juga sangat mengagumkan. Dari puncak Gunung Marapi yang aktif hingga Danau Maninjau yang indah, provinsi ini menawarkan pemandangan alam yang beragam. Taman Nasional Kerinci Seblat yang terletak di provinsi ini adalah rumah bagi berbagai spesies flora dan fauna yang langka, termasuk harimau sumatera dan orangutan. Sumatera Barat adalah destinasi yang luar biasa untuk menggali budaya Minangkabau yang kaya dan menikmati keindahan alam yang memukau di Pulau Sumatera."
        ]);
        Provinsi::create([
            "nama" => "DKI Jakarta",
            "deskripsi" => "Jakarta, ibu kota Indonesia, adalah pusat politik, ekonomi, dan budaya negara ini. Kota ini memiliki budaya yang beragam karena penduduknya yang berasal dari seluruh Indonesia. Adat istiadat dan tradisi berbagai suku bangsa, seperti Betawi, Jawa, Sunda, dan banyak lainnya, tercermin dalam budaya kota ini. Seni tradisional seperti wayang kulit, tari topeng, dan tari jaipong masih dipertahankan dan sering dipentaskan dalam berbagai acara budaya. Makanan di Jakarta juga mencerminkan keragaman ini, dengan hidangan seperti nasi uduk, kerak telor, dan sate Betawi yang lezat.

            Jakarta juga merupakan pusat aktivitas ekonomi di Indonesia, dengan banyak perusahaan, pusat perbelanjaan, dan perkantoran yang berlokasi di sini. Selain itu, kota ini memiliki berbagai tempat wisata yang menarik, termasuk Monumen Nasional (Monas) yang ikonik, Taman Mini Indonesia Indah yang memamerkan budaya dan arsitektur Indonesia, serta pantai-pantai indah seperti Pantai Ancol. Meskipun Jakarta sering menghadapi masalah lalu lintas dan polusi, kota ini tetap menjadi pusat penting di Indonesia yang menawarkan berbagai pengalaman budaya, ekonomi, dan hiburan."
        ]);
        Provinsi::create([
            "nama" => "Jawa Barat",
            "deskripsi" => "Jawa Barat adalah salah satu provinsi yang terletak di pulau Jawa, Indonesia, yang kaya akan budaya, sejarah, dan keindahan alam. Provinsi ini memiliki budaya Sunda yang unik dan mendalam yang tercermin dalam adat istiadat seperti upacara Siraman dan Mapag Sri. Seni tradisional, seperti tari Jaipongan dan musik angklung, memegang peranan penting dalam kehidupan sehari-hari masyarakat Jawa Barat. Makanan khasnya mencakup nasi timbel yang disajikan dengan lauk ikan teri, lalapan, dan sambal yang pedas.

            Jawa Barat juga dikenal dengan lanskap alamnya yang mengesankan, mulai dari pegunungan yang spektakuler di Bandung hingga pantai eksotis di Pangandaran. Flora dan fauna provinsi ini sangat beragam, termasuk hutan hujan pegunungan yang menjadi rumah bagi tarsius dan bunga Raflesia yang langka. Selain itu, Jawa Barat juga memiliki warisan sejarah yang menarik, seperti Candi Cangkuang dan Candi Batujaya, yang menjadi saksi bisu perjalanan sejarah panjang Jawa Barat. Dengan kekayaan budaya, alam yang memukau, dan warisan sejarah yang menarik, Jawa Barat adalah destinasi yang menarik untuk dikunjungi di Indonesia."
        ]);
        Provinsi::create([
            "nama" => "Jawa Timur",
            "deskripsi" => "Jawa Timur adalah provinsi yang terletak di bagian timur Pulau Jawa, Indonesia, yang memiliki kekayaan budaya, sejarah, dan alam yang luar biasa. Provinsi ini adalah salah satu pusat budaya Jawa yang kaya, dengan seni tradisional seperti wayang kulit dan tari reog yang masih sangat dihormati dan sering dipertunjukkan dalam berbagai upacara adat dan festival. Makanan khasnya mencakup hidangan seperti rawon, sate kikil, dan tahu campur yang lezat.

            Keindahan alam Jawa Timur juga mengesankan, dengan pemandangan gunung yang megah seperti Gunung Bromo dan Gunung Semeru. Taman Nasional Bromo Tengger Semeru menawarkan pengalaman mendaki gunung yang luar biasa. Selain itu, provinsi ini memiliki hutan hujan yang menjadi rumah bagi berbagai satwa liar, termasuk badak Jawa dan kera ekor panjang. Jawa Timur juga memiliki warisan sejarah yang penting, seperti Candi Penataran dan Candi Jago, yang menjadi bukti sejarah keagamaan dan kebudayaan yang kaya di wilayah ini. Dengan gabungan budaya yang kaya, keindahan alam yang mengagumkan, dan sejarah yang menarik, Jawa Timur adalah salah satu destinasi yang paling menarik di Indonesia."
        ]);
        Provinsi::create([
            "nama" => "Jawa Tengah",
            "deskripsi" => "Jawa Tengah adalah salah satu provinsi yang terletak di tengah Pulau Jawa, Indonesia, dan merupakan pusat budaya Jawa yang kaya dengan keindahan alam yang menakjubkan. Provinsi ini dikenal sebagai 'jantung budaya Jawa' karena memiliki sejarah yang kaya, terutama sebagai pusat kerajaan-kerajaan besar seperti Mataram dan Majapahit. Adat istiadat Jawa yang kaya tercermin dalam berbagai upacara adat, seperti Grebeg Syawal dan Nyadranan, yang sering diadakan dalam rangka memelihara warisan budaya. Seni tradisional seperti wayang kulit dan gamelan adalah bagian penting dari budaya Jawa Tengah.

            Makanan khasnya juga menggoda, termasuk nasi gudeg yang manis dan soto ayam yang lezat. Keindahan alam provinsi ini mencakup Candi Borobudur, situs bersejarah yang mengagumkan yang telah diakui sebagai Situs Warisan Dunia UNESCO. Selain itu, Taman Nasional Karimunjawa yang indah menawarkan pantai pasir putih dan terumbu karang yang luar biasa untuk penyelam dan penggemar keindahan bawah laut. Fauna di provinsi ini mencakup lutung Jawa dan ratusan spesies burung yang menghiasi langit-langit Jawa Tengah. Dengan sejarah yang mendalam, budaya yang kaya, dan alam yang memukau, Jawa Tengah adalah destinasi yang istimewa di Indonesia."
        ]);
        Provinsi::create([
            "nama" => "Bali",
            "deskripsi" => "Bali adalah salah satu destinasi pariwisata yang paling terkenal dan ikonik di Indonesia, yang dikenal dengan keindahan alam, budaya Hindu-Balinya yang kaya, dan pantai-pantai yang menakjubkan. Pulau ini adalah pusat budaya Hindu di Indonesia, dengan ribuan pura (kuil) yang tersebar di seluruh pulau. Tarian dan pertunjukan seni seperti tari kecak dan wayang kulit masih aktif dan sering dipertunjukkan untuk wisatawan yang datang.

            Makanan khas Bali mencakup ayam betutu yang diisi dengan rempah-rempah dan dibungkus dalam daun pisang serta bebek betutu yang lezat. Selain itu, ada juga hidangan seperti babi guling dan nasi campur yang patut dicoba. Bali juga dikenal dengan sawah terasering yang cantik dan terumbu karang yang indah, menjadikannya surga bagi penyelam dan penggemar aktivitas air.
            
            Kehidupan malam di Bali juga sangat hidup, terutama di kawasan Kuta, Seminyak, dan Legian, dengan bar, klub, dan restoran yang menyajikan hiburan malam yang beragam. Dengan pantai-pantai yang indah seperti Pantai Kuta, Pantai Nusa Dua, dan Pantai Sanur, serta kebudayaan yang kaya dan warisan seni, Bali adalah destinasi wisata yang sempurna bagi mereka yang mencari liburan yang menarik di Indonesia."
        ]);
        Provinsi::create([
            "nama" => "Nusa Tenggara Timur",
            "deskripsi" => "Nusa Tenggara Timur (NTT) adalah provinsi yang terletak di bagian timur Indonesia, yang terdiri dari sejumlah pulau yang menawarkan kekayaan budaya dan keindahan alam yang luar biasa. Provinsi ini mencakup Kepulauan Nusa Tenggara, yang termasuk pulau-pulau seperti Flores, Timor, Sumba, dan Rote. Budaya di NTT sangat beragam, dengan berbagai suku dan kelompok etnis yang tinggal di sini. Salah satu budaya yang paling mencolok adalah budaya Sumba, yang terkenal dengan upacara pernikahan dan pemakaman yang megah serta seni tenun ikat yang indah.

            Makanan khas NTT mencakup jagung bakar, ikan bakar, dan ayam taliwang yang pedas. Keindahan alam di NTT juga menakjubkan, dengan pemandangan seperti Danau Kelimutu yang memiliki tiga danau dengan warna air yang berbeda-beda, serta pantai-pantai yang eksotis dan terumbu karang yang indah. NTT juga merupakan tempat bagi Taman Nasional Komodo yang terkenal, yang menjadi rumah bagi komodo, hewan kadal raksasa yang hanya ditemukan di sini. Keberagaman budaya, kuliner yang lezat, dan alam yang menakjubkan menjadikan Nusa Tenggara Timur sebagai salah satu destinasi yang menarik bagi para wisatawan yang ingin menjelajahi Indonesia yang beragam."
        ]);
        Provinsi::create([
            "nama" => "Papua Barat",
            "deskripsi" => "Papua Barat adalah provinsi yang terletak di ujung barat Pulau Papua, Indonesia, yang menawarkan keindahan alam yang luar biasa dan budaya yang kaya. Salah satu daya tarik utama provinsi ini adalah alam liar yang belum tersentuh. Hutan hujan tropisnya yang luas adalah rumah bagi berbagai spesies satwa liar, termasuk burung cenderawasih yang eksotis. Taman Nasional Wasur adalah salah satu tempat terbaik untuk mengamati satwa liar Papua, seperti burung terbang merak dan kura-kura air tawar.

            Budaya di Papua Barat sangat beragam, dengan berbagai suku dan kelompok etnis yang tinggal di sini. Beberapa suku seperti suku Dani dikenal dengan tradisi adat unik mereka, termasuk rumah panggung tradisional dan upacara perang. Masyarakat Papua Barat juga memiliki seni ukir yang indah, dengan patung kayu dan ukiran batu yang menggambarkan sejarah dan mitologi mereka. Makanan khas Papua Barat mencakup hidangan seperti papeda, yang disajikan dengan ikan kuah kuning dan sagu bakar. Dengan keindahan alam yang menakjubkan dan budaya yang kaya, Papua Barat adalah destinasi yang menarik bagi mereka yang ingin menjelajahi wilayah terpencil dan eksotis di Indonesia."
        ]);
    }
}
