<?php

   require 'fungsi.php';
   $id = $_GET["id"];
   echo $id;

   if(deletedata($id) >0)
    {
        echo "<script>
                alert('Data Berhasil dihapus!');
                window.location.href ='index.php';
              </script>";
    }
    else
        {
            echo "<script>
                alert('Data Gagal Ditambahkan!');
                window.location.href ='index.php';
              </script>";
        }

?>