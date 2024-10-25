<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-header row">
                <div class="card-title h3 col-8">Tambah Guru</div>
                <div class="col-4">
                    <a href="?m=guru&s=view" class="btn btn-lg btn-primary float-end">Kembali</a>
                </div>
            </div>
            <?php
            include_once('config.php');
            $id = $_GET['id'];
            $sql = "SELECT * FROM teachers WHERE id='$id'";
            $query = mysqli_query($con, $sql);
            $r = mysqli_fetch_array($query)
            ?>
            <div class="card-body">
                <form action="?m=guru&s=update" method="post">
                    <div class="mb-3">
                        <input type="number" name="nis" value="<?= $r['nis'] ?>" class="form-control" placeholder="Nomor Induk Guru" required autofocus>
                    </div>
                    <div class="mb-3">
                        <input type="text" name="name" value="<?= $r['name'] ?>" class="form-control" placeholder="Nama Guru" required>
                    </div>
                    <div class="mb-3">
                        <label for="">Jenis Kelamin : </label>&nbsp;
                        <input type="radio" name="gender" value="Laki-laki" <?= $r['gender'] == 'Laki-laki' ? 'checked' : '' ?>>Laki-laki
                        <input type="radio" name="gender" value="Perempuan" <?= $r['gender'] == 'Perempuan' ? 'checked' : '' ?>>Perempuan
                    </div>
                    <div class="mb-3">
                        <input type="text" name="pob" class="form-control" placeholder="Tempat Lahir" value="<?= $r['pob'] ?>">
                    </div>
                    <div class="mb-3">
                        <input type="date" name="dob" class="form-control" placeholder="Tanggal Lahir" value="<?= $r['dob'] ?>">
                    </div>
                    <div class="mb-3">
                        <select name="major_id" class="form-control" id="required">
                            <option value="">- Pilih Jurusan -</option>
                            <?php
                            $sql2 = "SELECT id, name FROM majors";
                            $query2 = mysqli_query($con, $sql2);
                            while ($r2 = mysqli_fetch_array($query2)) {
                            ?>
                                <option value="<?= $r2['id'] ?>" <?= $r2['id'] == $r['major_id'] ? 'selected' : '' ?>><?= $r2['name'] ?> </option>
                            <?php } ?>
                        </select>
                    </div>
                    <div class="mb-3">
                        <input type="hidden" name="id" value="<?= $r['id'] ?>">
                        <input type="submit" name="update" value="Update" class="btn btn-primary">
                        <input type="reset" class="btn btn-warning">&nbsp;
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>