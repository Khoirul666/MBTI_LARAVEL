<div class="card text-center">
    <div class="card-title" style="margin-top: 0.75rem;">
        <p>NOMOR SOAL</p>
        <hr style="margin-bottom:0px !important">
    </div>
    <div class="card-body">
        <div class="row">
            <a href="#" class="col-3" style="color: #000; padding-left: 2px !important; padding-right: 2px !important; padding-top: 2px !important;">
                <div id="soal_1" class="card">
                    1
                </div>
            </a>
            <a href="#" class="col-3" style="color: #000; padding-left: 2px !important; padding-right: 2px !important; padding-top: 2px !important;">
                <div id="soal_2" class="card">
                    2
                </div>
            </a>
            <a href="#" class="col-3" style="color: #000; padding-left: 2px !important; padding-right: 2px !important; padding-top: 2px !important;">
                <div id="soal_3" class="card">
                    3
                </div>
            </a>
            <a href="#" class="col-3" style="color: #000; padding-left: 2px !important; padding-right: 2px !important; padding-top: 2px !important;">
                <div id="soal_4" class="card">
                    4
                </div>
            </a>
            <a href="#" class="col-3" style="color: #000; padding-left: 2px !important; padding-right: 2px !important; padding-top: 2px !important;">
                <div id="soal_5" class="card">
                    5
                </div>
            </a>
            <a href="#" class="col-3" style="color: #000; padding-left: 2px !important; padding-right: 2px !important; padding-top: 2px !important;">
                <div id="soal_6" class="card">
                    6
                </div>
            </a>
            <a href="#" class="col-3" style="color: #000; padding-left: 2px !important; padding-right: 2px !important; padding-top: 2px !important;">
                <div id="soal_7" class="card">
                    7
                </div>
            </a>
            <a href="#" class="col-3" style="color: #000; padding-left: 2px !important; padding-right: 2px !important; padding-top: 2px !important;">
                <div id="soal_8" class="card">
                    8
                </div>
            </a>
            <a href="#" class="col-3" style="color: #000; padding-left: 2px !important; padding-right: 2px !important; padding-top: 2px !important;">
                <div id="soal_9" class="card">
                    9
                </div>
            </a>
            <a href="#" class="col-3" style="color: #000; padding-left: 2px !important; padding-right: 2px !important; padding-top: 2px !important;">
                <div id="soal_10" class="card">
                    10
                </div>
            </a>
            <a href="#" class="col-3" style="color: #000; padding-left: 2px !important; padding-right: 2px !important; padding-top: 2px !important;">
                <div id="soal_11" class="card">
                    11
                </div>
            </a>
            <a href="#" class="col-3" style="color: #000; padding-left: 2px !important; padding-right: 2px !important; padding-top: 2px !important;">
                <div id="soal_12" class="card">
                    12
                </div>
            </a>
            <a href="#" class="col-3" style="color: #000; padding-left: 2px !important; padding-right: 2px !important; padding-top: 2px !important;">
                <div id="soal_13" class="card">
                    13
                </div>
            </a>
            <a href="#" class="col-3" style="color: #000; padding-left: 2px !important; padding-right: 2px !important; padding-top: 2px !important;">
                <div id="soal_14" class="card">
                    14
                </div>
            </a>
            <a href="#" class="col-3" style="color: #000; padding-left: 2px !important; padding-right: 2px !important; padding-top: 2px !important;">
                <div id="soal_15" class="card">
                    15
                </div>
            </a>
            <a href="#" class="col-3" style="color: #000; padding-left: 2px !important; padding-right: 2px !important; padding-top: 2px !important;">
                <div id="soal_16" class="card">
                    16
                </div>
            </a>
            <a href="#" class="col-3" style="color: #000; padding-left: 2px !important; padding-right: 2px !important; padding-top: 2px !important;">
                <div id="soal_17" class="card">
                    17
                </div>
            </a>
            <a href="#" class="col-3" style="color: #000; padding-left: 2px !important; padding-right: 2px !important; padding-top: 2px !important;">
                <div id="soal_18" class="card">
                    18
                </div>
            </a>
            <a href="#" class="col-3" style="color: #000; padding-left: 2px !important; padding-right: 2px !important; padding-top: 2px !important;">
                <div id="soal_19" class="card">
                    19
                </div>
            </a>
            <a href="#" class="col-3" style="color: #000; padding-left: 2px !important; padding-right: 2px !important; padding-top: 2px !important;">
                <div id="soal_20" class="card">
                    20
                </div>
            </a>
        </div>
    </div>
    <div class="card-footer">
        HIJAU = TERJAWAB
        <br>
        ABU-ABU = BELUM
        <br>
        <br>
        <button class="btn btn-sm btn-success" id="btn-selesai">SELESAI</button>
    </div>
</div>
@push('jss')
<script type="text/javascript">
    $('#btn-selesai').on('click',function(){
        console.log("selesai");
        $.ajax({
            type:"POST",
            url:"{{route('upload_jawaban_selesai')}}",
            data:{
                "_token":"{{csrf_token()}}",
                status:"selesai",
            },
            success:function(data){
                // console.log(data);
                if (data=="sukses") {
                    $("#menampilkan_soal").hide();
                }
            },
        })
    });
</script>
@endpush