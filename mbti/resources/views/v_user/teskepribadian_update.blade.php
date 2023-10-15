@extends('layout.app')

@section('content')

<div class="hero_area">
    <!-- header section strats -->
    @include('layout.header')
    <!-- end header section -->
</div>

<!-- item section -->
<div class="price_section layout_padding2">
    <div class="container" id="data_tes">
        <div class="heading_container">
            <h2>
                TES KEPRIBADIAN
            </h2>
        </div>
        @auth
        @if($data['hasil']==null)
        <div class="item_container" id="menampilkan_soal">
            <div class="row row-cols-6 row-cols-md-6 g-6">
                <div class="col-9">
                    <div class="card text-center">
                        <div class="card-title">
                            <div class="row">
                                <div class="col-6 text-left" style="padding-top: 1em !important; padding-left: 2em !important;padding-bottom: 1em !important;">
                                    Nomor Soal <span id="nomor_soal_sekarang">0</span>
                                </div>
                                <div class="col-6 text-right" style="padding-top: 1em !important; padding-right: 2em !important;padding-bottom: 1em !important;">
                                    Waktu Soal : <span id="waktu_soal_sekarang">0</span>
                                </div>
                            </div>
                            <hr style="margin-top:0px !important;">
                        </div>
                        @include('tes.p1')
                    </div>
                </div>
                <div class="col-3">
                    @include('tes.nomor')
                </div>
            </div>
        </div>
        <div id="l_d5">
            @include('tes.finish')
        </div>
        @else
        <div id="l_d5">
            @include('tes.finish')
        </div>
        @endif
        @else
        <div id="">
            @include('tes.login')
        </div>
        @endauth
    </div>
</div>
<!-- end item section -->
@endsection
@push('jss')
@auth
<script>
    let mulai;
    var soal = 0;
    var waktu = 0;
    var jawaban = 0;
    let jaw_1=0;
    let jaw_2=0;
    let jaw_3=0;
    let jaw_4=0;
    let jaw_5=0;
    let jaw_6=0;
    let jaw_7=0;
    let jaw_8=0;
    let jaw_9=0;
    let jaw_10=0;
    let jaw_11=0;
    let jaw_12=0;
    let jaw_13=0;
    let jaw_14=0;
    let jaw_15=0;
    let jaw_16=0;
    let jaw_17=0;
    let jaw_18=0;
    let jaw_19=0;
    let jaw_20=0;

    mulai_soal_dan_cek();
    cek_warna();
    $('#p1').hide();$('#j_p1').hide();
    $('#p2').hide();$('#j_p2').hide();
    $('#p3').hide();$('#j_p3').hide();
    $('#p4').hide();$('#j_p4').hide();
    $('#p5').hide();$('#j_p5').hide();
    $('#p6').hide();$('#j_p6').hide();
    $('#p7').hide();$('#j_p7').hide();
    $('#p8').hide();$('#j_p8').hide();
    $('#p9').hide();$('#j_p9').hide();
    $('#p10').hide();$('#j_p10').hide();
    $('#p11').hide();$('#j_p11').hide();
    $('#p12').hide();$('#j_p12').hide();
    $('#p13').hide();$('#j_p13').hide();
    $('#p14').hide();$('#j_p14').hide();
    $('#p15').hide();$('#j_p15').hide();
    $('#p16').hide();$('#j_p16').hide();
    $('#p17').hide();$('#j_p17').hide();
    $('#p18').hide();$('#j_p18').hide();
    $('#p19').hide();$('#j_p19').hide();
    $('#p20').hide();$('#j_p20').hide();
    // untuk halaman jika direload maka akan mengambil data di database berdasarkan id
    function mulai_soal_dan_cek() {
        $.ajax({
            type:"GET",
            url:"{{route('cek')}}",
            success:function(data){
                if (data=="true") {
                    if ($('#l_d5').hide()) {
                        $('#l_d5').show();
                    }
                    $("#menampilkan_soal").hide();
                    $('#hasil-ada').show();
                    tampil_hasil()
                    // console.log('ya')
                }
                else{
                    $("#menampilkan_soal").show();
                    $('#l_d5').hide();
                    mulai_soal();
                    // console.log('tidak')
                }
            }
        });
    }
    function mulai_soal(){
        // console.log('mulai soal');
        $.ajax({
            type:"POST",
            data:{
                "_token":"{{csrf_token()}}",
            },
            url:"{{route('post_update_time')}}",
            success:function(data) {
                // console.log(data);
                soal=1;
                waktu = data.time_p1;
                $('#waktu_soal_sekarang').html(waktu);
                // mulai looping waktu setiap satu detik
                mulai = setInterval(proses,1000);
            }
        });
    }

    // proses mendeteksi soal masih bisa dijawab atau tidak
    function proses(){
        // console.log('masuk proses',waktu);
        if (waktu<=0) {
            show_hide_soal(soal);

            $('#p'+soal).show();
            $('#j_p'+soal).hide();
            $('#nomor_soal_sekarang').html(soal);
            $('#waktu_soal_sekarang').html(waktu);
            clearInterval(mulai);
        }
        else{
            waktu--;
            // update time di database
            $.ajax({
                type:"PATCH",
                url:"{{route('patch_update_time')}}",
                data:{
                    "_token":"{{csrf_token()}}",
                    soal:soal,
                    waktu:waktu,
                },
                success:function(data) {
                    show_hide_soal(soal);

                    $('#p'+soal).show();
                    $('#j_p'+soal).show();
                    $('#nomor_soal_sekarang').html(soal);
                    $('#waktu_soal_sekarang').html(waktu);
                    // console.log(data);
                }
            });
        }   
    }

    $('#soal_1').on('click',function() {soal=1;clearInterval(mulai);cek_posisi_soal(1);});
    $('#soal_2').on('click',function() {soal=2;clearInterval(mulai);cek_posisi_soal(2);});
    $('#soal_3').on('click',function() {soal=3;clearInterval(mulai);cek_posisi_soal(3);});
    $('#soal_4').on('click',function() {soal=4;clearInterval(mulai);cek_posisi_soal(4);});
    $('#soal_5').on('click',function() {soal=5;clearInterval(mulai);cek_posisi_soal(5);});
    $('#soal_6').on('click',function() {soal=6;clearInterval(mulai);cek_posisi_soal(6);});
    $('#soal_7').on('click',function() {soal=7;clearInterval(mulai);cek_posisi_soal(7);});
    $('#soal_8').on('click',function() {soal=8;clearInterval(mulai);cek_posisi_soal(8);});
    $('#soal_9').on('click',function() {soal=9;clearInterval(mulai);cek_posisi_soal(9);});
    $('#soal_10').on('click',function() {soal=10;clearInterval(mulai);cek_posisi_soal(10);});
    $('#soal_11').on('click',function() {soal=11;clearInterval(mulai);cek_posisi_soal(11);});
    $('#soal_12').on('click',function() {soal=12;clearInterval(mulai);cek_posisi_soal(12);});
    $('#soal_13').on('click',function() {soal=13;clearInterval(mulai);cek_posisi_soal(13);});
    $('#soal_14').on('click',function() {soal=14;clearInterval(mulai);cek_posisi_soal(14);});
    $('#soal_15').on('click',function() {soal=15;clearInterval(mulai);cek_posisi_soal(15);});
    $('#soal_16').on('click',function() {soal=16;clearInterval(mulai);cek_posisi_soal(16);});
    $('#soal_17').on('click',function() {soal=17;clearInterval(mulai);cek_posisi_soal(17);});
    $('#soal_18').on('click',function() {soal=18;clearInterval(mulai);cek_posisi_soal(18);});
    $('#soal_19').on('click',function() {soal=19;clearInterval(mulai);cek_posisi_soal(19);});
    $('#soal_20').on('click',function() {soal=20;clearInterval(mulai);cek_posisi_soal(20);});
    function show_hide_soal(no_soal) {
        // console.log('show hide soal');
        $('#p1').hide();$('#j_p1').hide();
        $('#p2').hide();$('#j_p2').hide();
        $('#p3').hide();$('#j_p3').hide();
        $('#p4').hide();$('#j_p4').hide();
        $('#p5').hide();$('#j_p5').hide();
        $('#p6').hide();$('#j_p6').hide();
        $('#p7').hide();$('#j_p7').hide();
        $('#p8').hide();$('#j_p8').hide();
        $('#p9').hide();$('#j_p9').hide();
        $('#p10').hide();$('#j_p10').hide();
        $('#p11').hide();$('#j_p11').hide();
        $('#p12').hide();$('#j_p12').hide();
        $('#p13').hide();$('#j_p13').hide();
        $('#p14').hide();$('#j_p14').hide();
        $('#p15').hide();$('#j_p15').hide();
        $('#p16').hide();$('#j_p16').hide();
        $('#p17').hide();$('#j_p17').hide();
        $('#p18').hide();$('#j_p18').hide();
        $('#p19').hide();$('#j_p19').hide();
        $('#p20').hide();$('#j_p20').hide();
    }
    function cek_posisi_soal(no_soal) {
        // console.log('posisi soal '+no_soal);
        $.ajax({
            type:"POST",
            data:{
                "_token":"{{csrf_token()}}",
                soal:soal,
            },
            url:"{{route('cek_posisi_soal')}}",
            success:function(data) {
                // console.log(data);
                waktu=data.waktu;
                if (waktu>0) {
                    mulai = setInterval(proses,1000);
                }
                else{
                    $("#nomor_soal_sekarang").html(soal);
                    $('#waktu_soal_sekarang').html(waktu);
                    show_hide_soal(soal);
                    $('#p'+soal).show();
                }
            }
        });
    }
    @include('tes.cek_warna');
    @include('tes.klik_soal');
</script>
@endauth
@endpush