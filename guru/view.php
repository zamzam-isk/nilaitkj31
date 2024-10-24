 <div class="row">
     <div class="col-12">
         <div class="card">
             <div class="card-header row">
                 <div class="card-title h3 col-8">Data Instruktur</div>
                 <div class="col-4">
                     <a href="?m=guru&s=add" class="btn btn-lg btn-primary float-end">Tambah</a>
                 </div>
             </div>

             <div class="card-body">
                 <table class="table table-bordered table-striped table-hover">
                     <thead>
                         <tr>
                             <th>No</th>
                             <th>NIP</th>
                             <th>Nama</th>
                             <th>Jenis Kelamin</th>
                             <th>Tempat Lahir</th>
                             <th>Tanggal Lahir</th>
                             <th>Bidang Jurusan</th>
                             <th>Aksi</th>
                         </tr>
                     </thead>
                     <tbody>
                         <?php
                            include_once('config.php');
                            $sql = "SELECT teachers.id AS ids, teachers.nis, teachers.name AS names, teachers.gender, teachers.pob, teachers.dob, majors.name  AS namem FROM teachers JOIN majors ON majors.id=teachers.major_id";
                            $result = mysqli_query($con, $sql);
                            if (mysqli_num_rows($result)) {
                                $no = 1;
                                while ($r = mysqli_fetch_assoc($result)) {
                                    echo '<tr>
                                    <td>' . $no . '</td>
                                    <td>' . $r['nip'] . '</td>
                                    <td>' . $r['names'] . '</td>
                                    <td>' . $r['gender'] . '</td>
                                    <td>' . $r['pob'] . '</td>
                                    <td>' . $r['dob'] . '</td>
                                    <td>' . $r['namem'] . '</td>
                                    <td>
                                        <a href="?m=guru&s=edit&id=' . $r['ids'] . '" class="btn btn-lg btn-warning btn-sm">Edit</a>
                                        <a href="?m=guru&s=delete&id=' . $r['ids'] . '" class="btn btn-lg btn-danger btn-sm" onclick="return confirm(\'Seriussan..!? Oalahhh, yaudah. Tapi, Menghapus guru akan menghilangkan semua data guru pada guru tersebut.\')">Hapus</a>
                                        
                                    </td>
                                </tr>';
                                    $no++;
                                }
                            } else {
                                echo '<tr>
                                    <td colspan="8" align="center">Data Kosong</td>
                                </tr>';
                            }

                            ?>
                     </tbody>
                 </table>
             </div>
         </div>
     </div>
 </div>
 </div>