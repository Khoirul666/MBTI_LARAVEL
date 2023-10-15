// click nomor
$('input[name="d1"]').on('change',function(){
    if ($(this).is(':checked')) {
        jaw_1=$(this).val()
        console.log(jaw_1);
        // save jawaban ke db
        $.ajax({
            type:"POST",
            url:"{{route('upload_jawaban')}}",
            data:{
                "_token":"{{csrf_token()}}",
                soal:"1",
                jawaban:jaw_1,
            },
            success:function(data){
                // console.log(data);
                if (data.status>0) {
                    cek_warna();
                }
            }
        })
    }
});
$('input[name="d2"]').on('change',function(){
    if ($(this).is(':checked')) {
        jaw_2=$(this).val()
        console.log(jaw_2);
        // save jawaban ke db
        $.ajax({
            type:"POST",
            url:"{{route('upload_jawaban')}}",
            data:{
                "_token":"{{csrf_token()}}",
                soal:"2",
                jawaban:jaw_2,
            },
            success:function(data){
                // console.log(data);
                if (data.status>0) {
                    cek_warna();
                }
            }
        })
    }
});
$('input[name="d3"]').on('change',function(){
    if ($(this).is(':checked')) {
        jaw_3=$(this).val()
        console.log(jaw_3);
        // save jawaban ke db
        $.ajax({
            type:"POST",
            url:"{{route('upload_jawaban')}}",
            data:{
                "_token":"{{csrf_token()}}",
                soal:"3",
                jawaban:jaw_3,
            },
            success:function(data){
                // console.log(data);
                if (data.status>0) {
                    cek_warna();
                }
            }
        })
    }
});
$('input[name="d4"]').on('change',function(){
    if ($(this).is(':checked')) {
        jaw_4=$(this).val()
        console.log(jaw_4);
        // save jawaban ke db
        $.ajax({
            type:"POST",
            url:"{{route('upload_jawaban')}}",
            data:{
                "_token":"{{csrf_token()}}",
                soal:"4",
                jawaban:jaw_4,
            },
            success:function(data){
                // console.log(data);
                if (data.status>0) {
                    cek_warna();
                }
            }
        })
    }
});
$('input[name="d5"]').on('change',function(){
    if ($(this).is(':checked')) {
        jaw_5=$(this).val()
        console.log(jaw_5);
        // save jawaban ke db
        $.ajax({
            type:"POST",
            url:"{{route('upload_jawaban')}}",
            data:{
                "_token":"{{csrf_token()}}",
                soal:"5",
                jawaban:jaw_5,
            },
            success:function(data){
                // console.log(data);
                if (data.status>0) {
                    cek_warna();
                }
            }
        })
    }
});
$('input[name="d6"]').on('change',function(){
    if ($(this).is(':checked')) {
        jaw_6=$(this).val()
        console.log(jaw_6);
        // save jawaban ke db
        $.ajax({
            type:"POST",
            url:"{{route('upload_jawaban')}}",
            data:{
                "_token":"{{csrf_token()}}",
                soal:"6",
                jawaban:jaw_6,
            },
            success:function(data){
                // console.log(data);
                if (data.status>0) {
                    cek_warna();
                }
            }
        })
    }
});
$('input[name="d7"]').on('change',function(){
    if ($(this).is(':checked')) {
        jaw_7=$(this).val()
        console.log(jaw_7);
        // save jawaban ke db
        $.ajax({
            type:"POST",
            url:"{{route('upload_jawaban')}}",
            data:{
                "_token":"{{csrf_token()}}",
                soal:"7",
                jawaban:jaw_7,
            },
            success:function(data){
                // console.log(data);
                if (data.status>0) {
                    cek_warna();
                }
            }
        })
    }
});
$('input[name="d8"]').on('change',function(){
    if ($(this).is(':checked')) {
        jaw_8=$(this).val()
        console.log(jaw_8);
        // save jawaban ke db
        $.ajax({
            type:"POST",
            url:"{{route('upload_jawaban')}}",
            data:{
                "_token":"{{csrf_token()}}",
                soal:"8",
                jawaban:jaw_8,
            },
            success:function(data){
                // console.log(data);
                if (data.status>0) {
                    cek_warna();
                }
            }
        })
    }
});
$('input[name="d9"]').on('change',function(){
    if ($(this).is(':checked')) {
        jaw_9=$(this).val()
        console.log(jaw_9);
        // save jawaban ke db
        $.ajax({
            type:"POST",
            url:"{{route('upload_jawaban')}}",
            data:{
                "_token":"{{csrf_token()}}",
                soal:"9",
                jawaban:jaw_9,
            },
            success:function(data){
                // console.log(data);
                if (data.status>0) {
                    cek_warna();
                }
            }
        })
    }
});
$('input[name="d10"]').on('change',function(){
    if ($(this).is(':checked')) {
        jaw_10=$(this).val()
        console.log(jaw_10);
        // save jawaban ke db
        $.ajax({
            type:"POST",
            url:"{{route('upload_jawaban')}}",
            data:{
                "_token":"{{csrf_token()}}",
                soal:"10",
                jawaban:jaw_10,
            },
            success:function(data){
                // console.log(data);
                if (data.status>0) {
                    cek_warna();
                }
            }
        })
    }
});
$('input[name="d11"]').on('change',function(){
    if ($(this).is(':checked')) {
        jaw_11=$(this).val()
        console.log(jaw_11);
        // save jawaban ke db
        $.ajax({
            type:"POST",
            url:"{{route('upload_jawaban')}}",
            data:{
                "_token":"{{csrf_token()}}",
                soal:"11",
                jawaban:jaw_11,
            },
            success:function(data){
                // console.log(data);
                if (data.status>0) {
                    cek_warna();
                }
            }
        })
    }
});
$('input[name="d12"]').on('change',function(){
    if ($(this).is(':checked')) {
        jaw_12=$(this).val()
        console.log(jaw_12);
        // save jawaban ke db
        $.ajax({
            type:"POST",
            url:"{{route('upload_jawaban')}}",
            data:{
                "_token":"{{csrf_token()}}",
                soal:"12",
                jawaban:jaw_12,
            },
            success:function(data){
                // console.log(data);
                if (data.status>0) {
                    cek_warna();
                }
            }
        })
    }
});
$('input[name="d13"]').on('change',function(){
    if ($(this).is(':checked')) {
        jaw_13=$(this).val()
        console.log(jaw_13);
        // save jawaban ke db
        $.ajax({
            type:"POST",
            url:"{{route('upload_jawaban')}}",
            data:{
                "_token":"{{csrf_token()}}",
                soal:"13",
                jawaban:jaw_13,
            },
            success:function(data){
                // console.log(data);
                if (data.status>0) {
                    cek_warna();
                }
            }
        })
    }
});
$('input[name="d14"]').on('change',function(){
    if ($(this).is(':checked')) {
        jaw_14=$(this).val()
        console.log(jaw_14);
        // save jawaban ke db
        $.ajax({
            type:"POST",
            url:"{{route('upload_jawaban')}}",
            data:{
                "_token":"{{csrf_token()}}",
                soal:"14",
                jawaban:jaw_14,
            },
            success:function(data){
                // console.log(data);
                if (data.status>0) {
                    cek_warna();
                }
            }
        })
    }
});
$('input[name="d15"]').on('change',function(){
    if ($(this).is(':checked')) {
        jaw_15=$(this).val()
        console.log(jaw_15);
        // save jawaban ke db
        $.ajax({
            type:"POST",
            url:"{{route('upload_jawaban')}}",
            data:{
                "_token":"{{csrf_token()}}",
                soal:"15",
                jawaban:jaw_15,
            },
            success:function(data){
                // console.log(data);
                if (data.status>0) {
                    cek_warna();
                }
            }
        })
    }
});
$('input[name="d16"]').on('change',function(){
    if ($(this).is(':checked')) {
        jaw_16=$(this).val()
        console.log(jaw_16);
        // save jawaban ke db
        $.ajax({
            type:"POST",
            url:"{{route('upload_jawaban')}}",
            data:{
                "_token":"{{csrf_token()}}",
                soal:"16",
                jawaban:jaw_16,
            },
            success:function(data){
                // console.log(data);
                if (data.status>0) {
                    cek_warna();
                }
            }
        })
    }
});
$('input[name="d17"]').on('change',function(){
    if ($(this).is(':checked')) {
        jaw_17=$(this).val()
        console.log(jaw_17);
        // save jawaban ke db
        $.ajax({
            type:"POST",
            url:"{{route('upload_jawaban')}}",
            data:{
                "_token":"{{csrf_token()}}",
                soal:"17",
                jawaban:jaw_17,
            },
            success:function(data){
                // console.log(data);
                if (data.status>0) {
                    cek_warna();
                }
            }
        })
    }
});
$('input[name="d18"]').on('change',function(){
    if ($(this).is(':checked')) {
        jaw_18=$(this).val()
        console.log(jaw_18);
        // save jawaban ke db
        $.ajax({
            type:"POST",
            url:"{{route('upload_jawaban')}}",
            data:{
                "_token":"{{csrf_token()}}",
                soal:"18",
                jawaban:jaw_18,
            },
            success:function(data){
                // console.log(data);
                if (data.status>0) {
                    cek_warna();
                }
            }
        })
    }
});
$('input[name="d19"]').on('change',function(){
    if ($(this).is(':checked')) {
        jaw_19=$(this).val()
        console.log(jaw_19);
        // save jawaban ke db
        $.ajax({
            type:"POST",
            url:"{{route('upload_jawaban')}}",
            data:{
                "_token":"{{csrf_token()}}",
                soal:"19",
                jawaban:jaw_19,
            },
            success:function(data){
                // console.log(data);
                if (data.status>0) {
                    cek_warna();
                }
            }
        })
    }
});
$('input[name="d20"]').on('change',function(){
    if ($(this).is(':checked')) {
        jaw_20=$(this).val()
        console.log(jaw_20);
        // save jawaban ke db
        $.ajax({
            type:"POST",
            url:"{{route('upload_jawaban')}}",
            data:{
                "_token":"{{csrf_token()}}",
                soal:"20",
                jawaban:jaw_20,
            },
            success:function(data){
                // console.log(data);
                if (data.status>0) {
                    cek_warna();
                }
            }
        })
    }
});