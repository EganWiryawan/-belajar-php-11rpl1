<?php
      if ( isset($_GET["kodebarang"]) ){
            $kodebarang = $_GET["kodebarang"];

            $query = "
                  DELETE FROM transaksi
                  WHERE kodebarang = '$kodebarang';
            ";
            
            include ('./kwu-config.php');
            $delete = mysqli_query($mysqli, $query);

            if($delete){
                  echo "
                        <script>
                        alert('Data berhasil dihapus');
                        window.location='kwu.php';
                        </script>
                  ";
            }else{
                  echo "
                        <script>
                        alert('Data gagal');
                        window.location='kwu.php';
                        </script>
                  ";
            }
      }
?>