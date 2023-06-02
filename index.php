<?php


//menyambungkan ke database
// host, user, password, nama database
// '127.0.0.1', root, '', nama

$link = mysqli_connect('localhost','root','','sekolah');

// menguji error
if(!$link){
    die('data base error'.mysqli_connect_error());
}
// membuat database di php myadmin
// $query = "CREATE DATABASE belajardatabase321";
// // mysqli query punya 2 parameter yaitu koneksi dan query
// if (mysqli_query($link,$query)){
//     echo "database berhasil dibuat";
// }else{
//     echo "database gagal dibuat";
// }

// menampilkan data
//  $query = "SELECT * FROM murid WHERE  Nama LIKE '%i%' LIMIT 1";
// $hasil = mysqli_query($link,$query);

// if(mysqli_num_rows($hasil)>0){
    
//     while($data=mysqli_fetch_assoc($hasil)){
//         echo $data['Nama']."<br>".$data['Alamat']."<br>".$data['Umur']."<br>";
//     }
// }

// cara cara memfilter data: LIMIIT, ORDER BY, WHERE, LIKE, BETWEEN, IN, IS NULL, IS NOT NULL, AND, OR, NOT, HAVING, GROUP BY, DISTINCT

// $query= "SELECT * FROM murid LIMIT 1";
// $query = "SELECT * FROM murid ORDER BY NAMA DESC ";
// $query = "SELECT * FROM murid WHERE  Nama LIKE '%i%'"; (untuk menampilkan dimana ada huruf i)

// menutup koneksi

// cara memasukan data ke database
// $query = "INSERT INTO murid (Nama,Umur,Alamat)
//               VALUES ('Kiki',19,'polmed');";

// $query .= "INSERT INTO murid (Nama,Umur,Alamat)
//               VALUES ('Natasya',19,'gajahmada');";

// $query .= "INSERT INTO murid (Nama,Umur,Alamat)
//               VALUES ('chesya',19,'gangcatur')";
 
// // untuk memasukan banyak data memakai mysqli multi query , jika satu hanya query saja 
// // dan untuk memasukan data lebih dari satu harus memakai .= pada values ke dua
//  if(mysqli_multi_query($link,$query)){
//     echo 'data berhasil dimasukan';   
//  }else{
//     echo 'data gagal dimasukan';
//  }

 // cara mengahapus data : DELETE id , DELETE WHERE , DELETE in , DELETE BETWEEN , DELETE LIKE , DELETE LIMIT
 // menghapus data harus menggunakan where
//  $query = "DELETE FROM murid WHERE id=4";

//     if(mysqli_query($link,$query)){
//         echo 'data berhasil dihapus';
//     }else{
//         echo 'data gagal dihapus';
//     }

// cara mengubah data

$query = "  UPDATE murid SET Nama='Murni',Umur=19,Alamat='pelita' WHERE id=7";


if(mysqli_query($link,$query)){
    echo 'data berhasil diupdate';
}else{
    echo 'data gagal diupdate';
}
  
mysqli_close($link);




?> 