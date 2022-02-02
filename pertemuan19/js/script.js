// ambil elemen-elemen yang diperlukan
var keyword = document.getElementById('keyword');
var butangCari = document.getElementById('butang-cari');
var container = document.getElementById('container');

// tambahkan event ketika keyword ditulis
keyword.addEventListener('keyup', function() {
    
    // buat objek ajax
    var xhr = new XMLHttpRequest();

    // cek kesediaan ajax
    xhr.onreadystatechange = function() {
        if( xhr.readyState == 4 && xhr.status == 200 ) {
            container.innerHTML = xhr.responseText;
        }
    }

    // menjalankan ajax
    xhr.open('GET', 'ajax/mahasiswa.php?keyword=' + keyword.value, true);
    xhr.send();

});