<?php  
  include "../db/koneksi.php";
if(isset($_POST["id_lowongan"])){
     $data_id = $_POST["id_lowongan"];
     $output = "";
     $query = "SELECT * FROM tb_lowongan LEFT JOIN tb_perusahaan ON tb_perusahaan.id_perusahaan=tb_lowongan.id_perusahaan WHERE id_lowongan= '$data_id'"; 
     $result = mysqli_query($con, $query); 
     $output .= '
          <div class="table-responsive">  
           <table class="table table-bordered">';
               while($VarData = mysqli_fetch_array($result))
                    {
                    $output .= '
          <tr>  
            <td width="30%"><label>ID Perusahaan</label></td>  
            <td width="70%">'.$VarData["id_perusahaan"].'</td>  
        </tr>
        <tr>  
            <td width="30%"><label>Nama Perusahaan</label></td>  
            <td width="70%">'.$VarData["nama_perusahaan"].'</td>  
        </tr>
        <tr>  
            <td width="30%"><label>Bidang Usaha</label></td>  
            <td width="70%">'.$VarData["bidang_usaha"].'</td>  
        </tr>
         <tr>  
            <td width="30%"><label>Deskripsi Bidang</label></td>  
            <td width="70%">'.$VarData["deskripsi_bidang"].'</td>  
        </tr>
         <tr>  
            <td width="30%"><label>Alamat</label></td>  
            <td width="70%">'.$VarData["alamat"].'</td>  
        </tr>
         <tr>  
            <td width="30%"><label>Email</label></td>  
            <td width="70%">'.$VarData["email_perusahaan"].'</td>  
        </tr>
         <tr>  
            <td width="30%"><label>No Telepon</label></td>  
            <td width="70%">'.$VarData["telepon"].'</td>  
        </tr>
          <tr>  
            <td width="30%"><label>Website</label></td>  
            <td width="70%">'.$VarData["website"].'</td>  
        </tr>
         <tr>  
            <td width="30%"><label>Status</label></td>  
            <td width="70%">'.$VarData["status"].'</td>  
        </tr>
        <tr>  
            <td width="30%"><label>Deskripsi</label></td>  
            <td width="70%">'.$VarData["deskripsi"].'</td>  
        </tr>
         <tr>  
            <td width="30%"><label>Tanggal Buat</label></td>  
            <td width="70%">'.$VarData["tanggal_buat"].'</td>  
        </tr>
         <tr>  
            <td width="30%"><label>Tanggal Berakhir</label></td>  
            <td width="70%">'.$VarData["tanggal_berakhir"].'</td>  
        </tr>
          <tr>  
            <td width="30%"><label>Benefit</label></td>  
            <td width="70%">'.$VarData["benefit"].'</td>  
        </tr>
         <tr>  
            <td width="30%"><label>Lokasi / Penempatan</label></td>  
            <td width="70%">'.$VarData["lokasi"].'</td>  
        </tr>
         <tr>  
            <td width="30%"><label>Posisi</label></td>  
            <td width="70%">'.$VarData["posisi"].'</td>  
        </tr>
         <tr>  
            <td width="30%"><label>Status Lowongan</label></td>  
            <td width="70%">'.$VarData["status_lowker"].'</td>  
        </tr>
        
     ';
    }
    $output .= '</table></div>';
    echo $output;
}
?>