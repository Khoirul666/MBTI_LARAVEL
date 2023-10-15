function cek_warna() {
    $.ajax({
        type:"GET",
        url:"{{route('cek_warna')}}",
        success:function(data) {

            if(data.isi.jawaban_p1==0){
                $("#soal_1").css("background-color","#a4b8a0");
            }
            else{
                $("#soal_1").css("background-color","#4cf82e");
                document.getElementById("d1"+data.isi.jawaban_p1).checked = true;
            }
            
            if(data.isi.jawaban_p2==0){
                $("#soal_2").css("background-color","#a4b8a0");
            }
            else{
                $("#soal_2").css("background-color","#4cf82e");
                document.getElementById("d2"+data.isi.jawaban_p2).checked = true;
            }
            
            if(data.isi.jawaban_p3==0){
                $("#soal_3").css("background-color","#a4b8a0");
            }
            else{
                $("#soal_3").css("background-color","#4cf82e");
                document.getElementById("d3"+data.isi.jawaban_p3).checked = true;
            }
            
            if(data.isi.jawaban_p4==0){
                $("#soal_4").css("background-color","#a4b8a0");
            }
            else{
                $("#soal_4").css("background-color","#4cf82e");
                document.getElementById("d4"+data.isi.jawaban_p4).checked = true;
            }
            
            if(data.isi.jawaban_p5==0){
                $("#soal_5").css("background-color","#a4b8a0");
            }
            else{
                $("#soal_5").css("background-color","#4cf82e");
                document.getElementById("d5"+data.isi.jawaban_p5).checked = true;
            }
            
            if(data.isi.jawaban_p6==0){
                $("#soal_6").css("background-color","#a4b8a0");
            }
            else{
                $("#soal_6").css("background-color","#4cf82e");
                document.getElementById("d6"+data.isi.jawaban_p6).checked = true;
            }
            
            if(data.isi.jawaban_p7==0){
                $("#soal_7").css("background-color","#a4b8a0");
            }
            else{
                $("#soal_7").css("background-color","#4cf82e");
                document.getElementById("d7"+data.isi.jawaban_p7).checked = true;
            }
            
            if(data.isi.jawaban_p8==0){
                $("#soal_8").css("background-color","#a4b8a0");
            }
            else{
                $("#soal_8").css("background-color","#4cf82e");
                document.getElementById("d8"+data.isi.jawaban_p8).checked = true;
            }
            
            if(data.isi.jawaban_p9==0){
                $("#soal_9").css("background-color","#a4b8a0");
            }
            else{
                $("#soal_9").css("background-color","#4cf82e");
                document.getElementById("d9"+data.isi.jawaban_p9).checked = true;
            }
            
            if(data.isi.jawaban_p10==0){
                $("#soal_10").css("background-color","#a4b8a0");
            }
            else{
                $("#soal_10").css("background-color","#4cf82e");
                document.getElementById("d10"+data.isi.jawaban_p10).checked = true;
            }
            
            if(data.isi.jawaban_p11==0){
                $("#soal_11").css("background-color","#a4b8a0");
            }
            else{
                $("#soal_11").css("background-color","#4cf82e");
                document.getElementById("d11"+data.isi.jawaban_p11).checked = true;
            }
            
            if(data.isi.jawaban_p12==0){
                $("#soal_12").css("background-color","#a4b8a0");
            }
            else{
                $("#soal_12").css("background-color","#4cf82e");
                document.getElementById("d12"+data.isi.jawaban_p12).checked = true;
            }
            
            if(data.isi.jawaban_p13==0){
                $("#soal_13").css("background-color","#a4b8a0");
            }
            else{
                $("#soal_13").css("background-color","#4cf82e");
                document.getElementById("d13"+data.isi.jawaban_p13).checked = true;
            }
            
            if(data.isi.jawaban_p14==0){
                $("#soal_14").css("background-color","#a4b8a0");
            }
            else{
                $("#soal_14").css("background-color","#4cf82e");
                document.getElementById("d14"+data.isi.jawaban_p14).checked = true;
            }
            
            if(data.isi.jawaban_p15==0){
                $("#soal_15").css("background-color","#a4b8a0");
            }
            else{
                $("#soal_15").css("background-color","#4cf82e");
                document.getElementById("d15"+data.isi.jawaban_p15).checked = true;
            }
            
            if(data.isi.jawaban_p16==0){
                $("#soal_16").css("background-color","#a4b8a0");
            }
            else{
                $("#soal_16").css("background-color","#4cf82e");
                document.getElementById("d16"+data.isi.jawaban_p16).checked = true;
            }
            
            if(data.isi.jawaban_p17==0){
                $("#soal_17").css("background-color","#a4b8a0");
            }
            else{
                $("#soal_17").css("background-color","#4cf82e");
                document.getElementById("d17"+data.isi.jawaban_p17).checked = true;
            }
            
            if(data.isi.jawaban_p18==0){
                $("#soal_18").css("background-color","#a4b8a0");
            }
            else{
                $("#soal_18").css("background-color","#4cf82e");
                document.getElementById("d18"+data.isi.jawaban_p18).checked = true;
            }
            
            if(data.isi.jawaban_p19==0){
                $("#soal_19").css("background-color","#a4b8a0");
            }
            else{
                $("#soal_19").css("background-color","#4cf82e");
                document.getElementById("d19"+data.isi.jawaban_p19).checked = true;
            }
            
            if(data.isi.jawaban_p20==0){
                $("#soal_20").css("background-color","#a4b8a0");
            }
            else{
                $("#soal_20").css("background-color","#4cf82e");
                document.getElementById("d20"+data.isi.jawaban_p20).checked = true;
            }
        }
    });
}