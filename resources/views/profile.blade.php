@extends('layouts.main')

@section('title', '| Profile')

@section('class', 'profile')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">Welcome</div>

                <div class="panel-body">
                    Your Application's Landing Page.
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@section('news')
                    <div class="row">
                        <div class="profile">
                            <div class="avatar">
                                <img src="{{URL::asset('img/pakbud.jpg')}}" alt="Circle Image" class="img-circle img-responsive img-raised">
                            </div>
                            <div class="name">
                                <h3 class="title">Sambutan</h3>
                                <h6>Dr. Budi Hartanto, Ketua Jurusan Teknik Informatika</h6>
                            </div>
                        </div>
                    </div>
                    <div class="description text-center">
                        <p>Selamat datang, saya ucapkan pada semua para pengunjung Website Jurusan Teknik Informatika Universitas Surabaya (IF Ubaya). Dari 413 Jurusan Teknik Informatika di Indonesia, hanya 12 Jurusan Teknik Informatika (2.91%) yang berhasil mendapat akreditasi A dari DIKTI. Teknik Informatika Ubaya merupakan salah satu jurusan yang mendapat Akreditasi A ini. Akreditasi A yang didapat ini menunjukkan komitmen dan langkah nyata dari Jurusan Teknik Informatika Ubaya dalam menjaga mutu proses pendidikan mahasiswanya dan menjamin kualitas lulusannya.</br></br>

                        Website ini dibuat untuk memberi informasi kepada mahasiswa, calon mahasiswa, orang tua, alumni, staff Ubaya, dan stakeholder lainnya. Semoga website ini dapat membantu Anda mendapatkan informasi yang Anda butuhkan tentang Teknik Informatika Ubaya. Berbagai saran dan masukan tentang website dan Jurusan Teknik Informatika Ubaya dapat disampaikan melalui email yang ada di bagian “kontak kami”.</br></br></br>

                        Salam</br></br>

                        Budi Hartanto,</br>
                        Ketua Jurusan Teknik Informatika</p>
                    </div>

@endsection



