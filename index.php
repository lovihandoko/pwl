<html>
<head>
<title>Web Company Profile</title>
<link href="asset/css/style.css" rel="stylesheet" type="text/css">
</head>
<body>
 <?php
session_start();
include "koneksi.php";
if (empty ($_SESSION['namauser'])){
	header('location:login.php');
	exit;
}
?>
<div id="satu">
    <div id="satu_con">
        <div id="satu_a">
            <span class="satu_aa">Selamat Datang Administrator</span>
            <span class="satu_ab">Creative & Innovative</span>
        </div>
        <div id="satu_b">
            <ul>
                <li><a href="" class="pilih">Home</a></li>
                <li><a href="tambah_biodata2.php">Entri Data</a>
                    
                </li>
            </ul>
        </div>
    </div>
</div>
<div id="dua">
    <div id="dua_con">
        <div id="dua_a">
            <div id="dua_aa">
                <span id="dua_aab">Data Biodata</span>
	<p>[ <a href="tambah_biodata2.php">Tambah Data</a> ] </p>
	<table width="600px" border="1">
		<tr style="background:#ccc">
			<th width="10%">ID</th>
			<th width="25%">Nama</th>
			<th width="40%">Alamat</th>
			<th width="25">Aksi</th>
		</tr>

		<?php
		include("koneksi.php");
		$sql = "SELECT * FROM biodata";
		$hasil = mysqli_query($koneksi,$sql) or exit("Error query : <b>".$sql."</b>.");
		$no = 0;
		
		while($data = mysqli_fetch_assoc($hasil)){
			$no++;?>
		<tr>
			<td align="center"><?php echo $no; ?></td>
			<td><?php echo $data['nama']; ?></td>
			<td><?php echo $data['alamat']; ?></td>
			<td><center>
				<a href="detail_biodata2.php?id=<?php echo $data['id']; ?>">
				Detail
				</a>
				<a href="edit_biodata2.php?id=<?php echo $data['id']; ?>">
				Ubah
				</a>
				<a href="hapus_biodata2.php?id=<?php echo $data['id']; ?>"
				onClick="return cekHapus();">
				Hapus
				</a>
				</center>
			</td>
		</tr>
		<?php
		}
		?>
	</table>
	<script language="JavaScript">
      function cekHapus(){
         if(confirm("Yakin? Ciyus mau hapus data ini?")){
            return true;
         } else {
            return false;
         }
      }
   	</script>
            </div>
            <div id="dua_ac">
                
            </div>
            <div id="dua_ab">
                <!--
                Script
                -->
            </div>
        </div>
    </div>
</div>
</body>
</html>