<?php  
  include "../db/koneksi.php";
if(isset($_POST["data_id"])){
     $data_id = $_POST["data_id"];
     $output = "";

     $query = "SELECT * FROM tb_alumni WHERE nim = '$data_id'"; 
     $result = mysqli_query($con, $query); 
     $output .= '
          <div class="table-responsive">  
           <table class="table table-bordered">';
               while($VarData = mysqli_fetch_array($result))
                    {
                    $output .= '
          <tr>  
            <td width="30%"><label>Nim</label></td>  
            <td width="70%">'.$VarData["nim"].'</td>  
        </tr>
        <tr>  
            <td width="30%"><label>Nama Lengkap</label></td>  
            <td width="70%">'.$VarData["nama_lengkap"].'</td>  
        </tr>
         <tr>  
            <td width="30%"><label>Tempat Lahir</label></td>  
            <td width="70%">'.$VarData["tempat_lahir"].'</td>  
        </tr>
         <tr>  
            <td width="30%"><label>Tanggal Lahir</label></td>  
            <td width="70%">'.$VarData["tanggal_lahir"].'</td>  
        </tr>
         <tr>  
            <td width="30%"><label>Jenis Kelamin</label></td>  
            <td width="70%">'.$VarData["jenis_kelamin"].'</td>  
        </tr>
         <tr>  
            <td width="30%"><label>Agama</label></td>  
            <td width="70%">'.$VarData["agama"].'</td>  
        </tr>
         <tr>  
            <td width="30%"><label>Nama Orangtua</label></td>  
            <td width="70%">'.$VarData["nama_orangtua"].'</td>  
        </tr>
         <tr>  
            <td width="30%"><label>Alamat Orangtua</label></td>  
            <td width="70%">'.$VarData["alamat_orangtua"].'</td>  
        </tr>
         <tr>  
            <td width="30%"><label>Alamat Mahasiswa</label></td>  
            <td width="70%">'.$VarData["alamat_mahasiswa"].'</td>  
        </tr>
         <tr>  
            <td width="30%"><label>No Telepon</label></td>  
            <td width="70%">'.$VarData["no_telepon"].'</td>  
        </tr>
        <tr>  
            <td width="30%"><label>Email</label></td>  
            <td width="70%">'.$VarData["email"].'</td>  
        </tr>
         <tr>  
            <td width="30%"><label>Judul Tugas Akhir</label></td>  
            <td width="70%">'.$VarData["judul_TA"].'</td>  
        </tr>
         <tr>  
            <td width="30%"><label>Dosen Pembimbing 1</label></td>  
            <td width="70%">'.$VarData["dosen_pembimbing_1"].'</td>  
        </tr>
         <tr>  
            <td width="30%"><label>Dosen Pembimbing 2</label></td>  
            <td width="70%">'.$VarData["dosen_pembimbing_2"].'</td>  
        </tr>
         <tr>  
            <td width="30%"><label>Total SKS</label></td>  
            <td width="70%">'.$VarData["total_sks"].'</td>  
        </tr>
         <tr>  
            <td width="30%"><label>Tahun Wisuda</label></td>  
            <td width="70%">'.$VarData["tanggal_wisuda"].'</td>  
        </tr>
         <tr>  
            <td width="30%"><label>IPK</label></td>  
            <td width="70%">'.$VarData["ipk"].'</td>  
        </tr>
     ';
    }
    $output .= '</table></div>';
    echo $output;
}
?>