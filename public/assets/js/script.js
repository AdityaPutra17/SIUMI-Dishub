// Fungsi untuk menampilkan preview foto saat dipilih
function previewImage() {
    var fileInput = document.getElementById("UploadPresensi");
    var customFilePreview = document.getElementById("customFilePreview");
    var uploadIcon = document.getElementById("uploadIcon");

    // Sembunyikan ikon upload setelah gambar dipilih
    uploadIcon.style.display = "none";

    // Membuat objek FileReader
    var reader = new FileReader();

    // Mengatur fungsi onload untuk dijalankan ketika proses pembacaan selesai
    reader.onload = function (e) {
        customFilePreview.style.backgroundImage =
            "url('" + e.target.result + "')";
    };

    // Membaca file yang dipilih sebagai URL data
    reader.readAsDataURL(fileInput.files[0]);
}
