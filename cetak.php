 <?php
 include "config.php";
 header("Content-type: application/vnd-ms-excel");
 header("Content-Disposition: attachment; filename=Data Barang.xls");
?>
                <table class="table table-bordered">
                  <thead>                  
                    <tr>
                      <th>No</th>
                      <th>Kode</th>
                      <th>Nama</th>
                      <th>Status</th>
                      <th>Stock</th>
                    </tr>
                  </thead>
                  <tbody>
                  <?php
        $sql = "SELECT * FROM Barang";
        $query = mysqli_query($db, $sql);
        while($barang = mysqli_fetch_array($query)){
            echo "<tr>";

            echo "<td>".$barang['id']."</td>";
            echo "<td>".$barang['Kode']."</td>";
            echo "<td>".$barang['Nama']."</td>";
            echo "<td>".$barang['Stat']."</td>";
            echo "<td>".$barang['Jumlah']."</td>";

            echo "</tr>";            
        }
        ?>
                  </tbody>
                </table>