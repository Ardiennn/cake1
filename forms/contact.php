<?php
include '../koneksi.php';

if (isset($_POST['kirim'])) {
  $nama = htmlspecialchars($_POST['nama']);
  $email = htmlspecialchars($_POST['email']);
  $subject = htmlspecialchars($_POST['subject']);
  $isi_pesan = htmlspecialchars($_POST['isi_pesan']);
  
  mysqli_query($conn, "INSERT INTO data_pesan VALUES('$nama','$email','$subject','$isi_pesan')");
  
  // vardump($cek);
  // exit();

  if (mysqli_affected_rows($conn))  { 
      echo "
      <script>
          alert('Pesan Terkirim!');
          document.location.href='../index.php';
      </script>
      "; 
  } else {
      echo mysqli_error($conn);
  }
}
?>