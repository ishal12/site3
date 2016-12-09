@extends('layouts.main')

@section('class', 'index')

@section('judul')
                    <div class="col-md-8 col-md-offset-2">
                        <div class="brand">
                            <h1>UBAYA</h1>
                            <h3>UNIVERSITAS SURABAYA.</h3>
                        </div>
                    </div>
@endsection

@section('news')
                    <div class="row">
                        <img src="img/pakbud.jpg" style="width: 30%" alt="Budi">
                        <div class="col-md-8">
                            <h2>Sambutan Ketua Jurusan</h2>
                            <p>Selamat datang, saya ucapkan pada semua para pengunjung Website Jurusan Teknik Informatika Universitas Surabaya (IF Ubaya). Dari 413 Jurusan Teknik Informatika di Indonesia, hanya 12 Jurusan Teknik Informatika (2.91%) yang berhasil mendapat akreditasi A dari DIKTI. Teknik Informatika Ubaya merupakan salah satu jurusan yang mendapat Akreditasi A ini. Akreditasi A yang didapat ini menunjukkan komitmen dan langkah nyata dari Jurusan Teknik Informatika Ubaya dalam menjaga mutu proses pendidikan mahasiswanya dan menjamin kualitas lulusannya.</br>
</br>
                            Website ini dibuat untuk memberi informasi kepada mahasiswa, calon mahasiswa, orang tua, alumni, staff Ubaya, dan stakeholder lainnya. Semoga website ini dapat membantu Anda mendapatkan informasi yang Anda butuhkan tentang Teknik Informatika Ubaya. Berbagai saran dan masukan tentang website dan Jurusan Teknik Informatika Ubaya dapat disampaikan melalui email yang ada di bagian “kontak kami”.
</br></br></br>
                             

                            Salam
</br></br>
                            Budi Hartanto,</br>
                            Ketua Jurusan Teknik Informatika

</p>
                        </div>
                    </div>
@endsection

@section('script')
    <script type="text/javascript">
        $().ready(function(){
            // the body of this function is in assets/material-kit.js
            materialKit.initSliders();
            window_width = $(window).width();

            if (window_width >= 992){
                big_image = $('.wrapper > .header');

                $(window).on('scroll', materialKitDemo.checkScrollForParallax);
            }

        });
        $('.carousel').carousel({
          interval: 1000 * 10
        });
    </script>
@endsection
