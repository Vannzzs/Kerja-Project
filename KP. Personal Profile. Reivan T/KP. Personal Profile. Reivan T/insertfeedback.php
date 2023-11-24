<?php 
include("config.php");

// Response JSON untuk klien
$response = array(
    'status' => 'success',
    'message' => 'Data berhasil disimpan'
);

header('Content-Type: application/json');
echo json_encode($response);

$jsonData = file_get_contents("php://input");
$data = json_decode($jsonData, true);

// Memastikan dekode JSON berhasil
if ($data) {
    // Mengambil nilai dari data JSON
    $user = $data['user'];
    $coment = $data['coment'];
    $email = $data['email'];

    // Menyimpan data ke database
    $sql = "INSERT INTO `feedback1` (`user`, `coment`, `email`,`tanggal`) VALUES ('$user', '$coment', '$email', CURRENT_DATE())";
    $query = mysqli_query($db, $sql);

    // Jika Anda ingin menangani hasil query, Anda dapat melakukannya di sini
    if ($query) {
        // Lakukan sesuatu jika penyimpanan berhasil
    } else {
        // Lakukan sesuatu jika penyimpanan gagal
        die(mysqli_error($db));
    }
} else {
    // Lakukan sesuatu jika dekode JSON gagal
    die('Error decoding JSON data');
}
?>