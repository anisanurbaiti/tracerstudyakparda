<?php  
  include "../db/koneksi.php";
if(isset($_POST["id_history_lamar"])){
     $id = $_POST["id_history_lamar"];
     $output = "";
     $query = "SELECT * from tb_history_lamar
LEFT JOIN tb_berkas_pelamar ON tb_history_lamar.id_berkas=tb_berkas_pelamar.id_berkas
LEFT JOIN tb_alumni ON tb_berkas_pelamar.nim=tb_alumni.nim
LEFT JOIN tb_lowongan ON tb_berkas_pelamar.id_lowongan=tb_lowongan.id_lowongan
LEFT JOIN tb_perusahaan ON tb_berkas_pelamar.id_perusahaan=tb_perusahaan.id_perusahaan WHERE tb_history_lamar.id_history_lamar='$id'"; 
     $result = mysqli_query($con, $query); 
     $output .= '
          <div class="table-responsive">  
           <table class="table table-bordered">';
               while($VarData = mysqli_fetch_array($result))
                    {
                    $output .= '
          <tr>  
            <td width="40%"><label>ID History</label></td>  
            <td width="80%">'.$VarData["id_history_lamar"].'</td>  
        </tr>
         <tr>  
            <td width="40%"><label>NIM</label></td>  
            <td width="80%">'.$VarData["nim"].'</td>  
        </tr>
         <tr>  
            <td width="40%"><label>Nama Pelamar</label></td>  
            <td width="80%">'.$VarData["nama_lengkap"].'</td>  
        </tr>
         <tr>  
            <td width="40%"><label>Email Pelamar</label></td>  
            <td width="80%">'.$VarData["email"].'</td>  
        </tr>
        <tr>  
            <td width="40%"><label>Nama Perusahaan</label></td>  
            <td width="80%">'.$VarData["nama_perusahaan"].'</td>  
        </tr>
        <tr>  
            <td width="40%"><label>Posisi atau Jabatan</label></td>  
            <td width="80%">'.$VarData["posisi"].'</td>  
        </tr>
         <tr>  
            <td width="40%"><label>Status Berkas</label></td>  
            <td width="80%">'.$VarData["status_berkas"].'</td>  
        </tr>
         <tr>  
            <td width="40%"><label>Metode Interview</label></td>  
            <td width="80%">'.$VarData["metode_interview"].'</td>  
        </tr>
         <tr>  
            <td width="30%"><label>Keterangan</label></td>  
            <td width="80%">'.$VarData["ket_interview"].'</td>  
        </tr>
          <tr>  
            <td width="30%"><label>Tanggal Interview</label></td>  
            <td width="80%">'.$VarData["tanggal_interview"].'</td>  
        </tr>
         <tr>  
            <td width="30%"><label>Tanggal Melamar</label></td>  
            <td width="80%">'.$VarData["tanggal_apply"].'</td>  
        </tr>
         <tr>  
            <td width="30%"><label>Lokasi / Penempatan</label></td>  
            <td width="80%">'.$VarData["lokasi"].'</td>  
        </tr>
        
     ';
    }
    $output .= '</table></div>';
    echo $output;
}
?>