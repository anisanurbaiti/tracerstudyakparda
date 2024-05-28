<?php  
  include "../db/koneksi.php";
if(isset($_POST["data_id"])){
     $data_id = $_POST["data_id"];
     $output = "";
     $query = "SELECT * FROM tb_perusahaan WHERE id_perusahaan= '$data_id'"; 
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
        
     ';
    }
    $output .= '</table></div>';
    echo $output;
}
?>