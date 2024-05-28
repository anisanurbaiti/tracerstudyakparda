<?php  
  include "../db/koneksi.php";
if(isset($_POST["id_lowongan"])){
     $VarData_id = $_POST["id_lowongan"];
     $output = "";
     $query = "SELECT * FROM tb_lowongan LEFT JOIN tb_perusahaan ON tb_perusahaan.id_perusahaan=tb_lowongan.id_perusahaan WHERE id_lowongan= '$VarData_id'"; 
     $result = mysqli_query($con, $query); 
     $output .= '
          <div class="table-responsive">  
           <table class="table table-bordered">';
               while($VarData = mysqli_fetch_array($result))
                    {
                    $output .= '
          <tr>  
            <td width="40%"><label>ID Perusahaan</label></td>  
            <td width="90%">'.$VarData["id_perusahaan"].'</td>  
        </tr>
        <tr>  
            <td width="40%"><label>Nama Perusahaan</label></td>  
            <td width="90%">'.$VarData["nama_perusahaan"].'</td>  
        </tr>
        <tr>  
            <td width="40%"><label>Bidang Usaha</label></td>  
            <td width="90%">'.$VarData["bidang_usaha"].'</td>  
        </tr>
         <tr>  
            <td width="40%"><label>Deskripsi Bidang</label></td>  
            <td width="90%">'.$VarData["deskripsi_bidang"].'</td>  
        </tr>
         <tr>  
            <td width="40%"><label>Alamat</label></td>  
            <td width="90%">'.$VarData["alamat"].'</td>  
        </tr>
         <tr>  
            <td width="40%"><label>Email</label></td>  
            <td width="90%">'.$VarData["email_perusahaan"].'</td>  
        </tr>
         <tr>  
            <td width="40%"><label>No Telepon</label></td>  
            <td width="90%">'.$VarData["telepon"].'</td>  
        </tr>
          <tr>  
            <td width="40%"><label>Website</label></td>  
            <td width="90%">'.$VarData["website"].'</td>  
        </tr>
        <tr>  
            <td width="40%"><label>Deskripsi</label></td>  
            <td width="90%">'.$VarData["deskripsi"].'</td>  
        </tr>
         <tr>  
            <td width="40%"><label>Tanggal Buat</label></td>  
            <td width="90%">'.$VarData["tanggal_buat"].'</td>  
        </tr>
         <tr>  
            <td width="40%"><label>Tanggal Berakhir</label></td>  
            <td width="90%">'.$VarData["tanggal_berakhir"].'</td>  
        </tr>
          <tr>  
            <td width="40%"><label>Benefit</label></td>  
            <td width="90%">'.$VarData["benefit"].'</td>  
        </tr>
         <tr>  
            <td width="40%"><label>Lokasi / Penempatan</label></td>  
            <td width="90%">'.$VarData["lokasi"].'</td>  
        </tr>
         <tr>  
            <td width="40%"><label>Posisi</label></td>  
            <td width="90%">'.$VarData["posisi"].'</td>  
        </tr>
         <tr>  
            <td width="40%"><label>Status Lowongan</label></td>  
            <td width="90%">'.$VarData["status_lowker"].'</td>  
        </tr>
        
     ';
    }
    $output .= '</table></div>';
    echo $output;
}
?>