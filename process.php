<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Ambil data dari form
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $address = $_POST['address'];
    $comment = $_POST['comment'];
    
    // Buat string yang akan disimpan di file
    $data = "Nama: $name\nEmail: $email\nNo. HP: $phone\nAlamat: $address\nKomentar: $comment\n\n";
    
    // Tentukan nama file
    $filename = "data.txt";
    
    // Tulis data ke file
    file_put_contents($filename, $data, FILE_APPEND);
    
    // Tampilkan pesan sukses
    echo "Data berhasil disimpan!";
} else {
    echo "Tidak ada data yang dikirim.";
}
?>
