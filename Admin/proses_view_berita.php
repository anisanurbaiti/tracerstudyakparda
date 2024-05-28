<?php  
  include "../db/koneksi.php";
if(isset($_POST["data_id"])){
     $data_id = $_POST["data_id"];
     $output = "";
     $query = "SELECT * from tb_berita LEFT join tb_admin on tb_berita.id_admin=tb_admin.id_admin WHERE tb_berita.id_berita = '$data_id'"; 
     $result = mysqli_query($con, $query); 
     $output .= '
          <div class="table-responsive">  
           <table class="table table-bordered">';
               while($VarData = mysqli_fetch_array($result))
                    {
                    $output .= '
          <tr>  
            <td width="30%"><label>ID Berita</label></td>  
            <td width="70%">'.$VarData["id_berita"].'</td>  
        </tr>
        <tr>  
            <td width="30%"><label>Judul Berita</label></td>  
            <td width="70%">'.$VarData["judul_berita"].'</td>  
        </tr>
        <tr>  
            <td width="30%"><label>Isi</label></td>  
            <td width="70%">'.$VarData["isi_berita"].'</td>  
        </tr>
      
        <tr>  
            <td width="30%"><label>Tanggal</label></td>  
            <td width="70%">'.$VarData["tanggal"].'</td>  
        </tr>
         <tr>  
            <td width="30%"><label> Admin</label></td>  
            <td width="70%">'.$VarData["nama_lengkap"].'</td>  
        </tr>
        
     ';
    }
    $output .= '</table></div>';
    echo $output;
}
?>