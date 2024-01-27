<form action="" method="post">
    pelanggan:
    <input type="text" name="namapelanggan" placeholder=" Nama Pelanggan">
    <br>
    alamat:
    <input type="text" name="alamat" placeholder="Alamat">
    <br>
    telepon:
    <input type="number" name="telepon" placeholder="Nomer Telepon">
    <br>
    <input type="submit" name="simpan" value="simpan">
    
</form>

<?php 

$host="127.0.0.1";
$user="root";
$password="";
$db="dbtoko";
$koneksi=new mysqli($host,$user,$password,$db);

if(isset($_POST["simpan"])){
    $namapelanggan=$_POST["namapelanggan"];
    $alamat=$_POST["alamat"];
    $telepon=$_POST["telepon"];

$sql="INSERT INTO pelanggan(namapelanggan,alamat,notelepon) VALUES ('$namapelanggan','$alamat',$telepon)";
$hasil=mysqli_query($koneksi,$sql);
}
$sql="SELECT*FROM pelanggan";
$hasil=mysqli_query($koneksi,$sql);
var_dump($hasil);

echo "<table border=2px>
<thead>
    <tr>
        <th>
            NAMA PELANGGAN
        </th>
        <th>
            ALAMAT
        </th>
        <th>
            TELEPON
        </th>
    </tr>
</thead>
<tbody>";
while($row=mysqli_fetch_array($hasil)){
    echo "<tr>";
    echo "<td>".$row[1]."</td>";
    echo "<td>".$row[2]."</td>";
    echo "<td>".$row[3]."</td>";
    echo "</tr>";
}
echo "</tbody>

</table>";



?>