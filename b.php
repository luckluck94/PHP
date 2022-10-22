<?php
    //koneksi
    // PDO
      $koneksi = new PDO("mysql:host=localhost;dbname=naswa" , "root","");
    // query

    // memasukan data
      //$query = $koneksi->query("insert into tabel values (3,'winwin','china')");
    // menghapus data
      //$query = $koneksi->query("delete from `tabel` where id='1'");
    // mengedit / update data
      //$query = $koneksi->query("update `tabel` SET `Name`='jaemin',`Country`='korea' WHERE id=3 ");
    // menampilkan data
      $query = $koneksi->query("SELECT `Id`, `Name`, `Country` FROM `tabel`");
    if($koneksi){
        echo "database berhasil terkoneksi";
      }


