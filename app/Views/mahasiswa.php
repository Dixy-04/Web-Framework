<div class="container pt-5">
    <a href="<?= base_url('mahasiswa/tambah');?>" class="btn btn-success mb-2">Tambah Data</a>
    <div class="card">
        <div class="card-header bg-info text-white">
            <h4 class="card-title">Data Barang</h4>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered table-striped">
                    <thead>
                        <tr>
                            <th>No.</th>
                            <th>Nama Mahasiswa</th>
                            <th>Email</th>
                            <th>Alamat</th>
                            <th>Tempat Lahir</th>
                            <th>Tanggal Lahir</th>
                            <th>Jenis Kelamin</th>
                            <th>Telepon</th>
                        </tr> 
                    </thead>
                    <tbody>
                        <?php $no=1; foreach($getMhs as $isi){?>
                            <tr>
                                <td><?= $no;?></td>
                                <td><?= $isi['nama'];?></td>
                                <td><?= $isi['email'];?></td>
                                <td><?= $isi['alamat'];?></td>
                                <td><?= $isi['tempat_lahir'];?></td>
                                <td><?= date_format((new DateTime($isi['tanggal_lahir'])),'d-m-y'); ?></td>
                                <td><?= $isi['telepon'];?></td>
                                <td>
                                    <a href="<?= base_url('mahasiswa/edit/'.$isi['id']);?>" 
                                    class="btn btn-success">
                                    Edit</a>
                                    <a href="<?= base_url('mahasiswa/hapus/'.$isi['id']);?>" 
                                    onclick="javascript:return confirm('Apakah ingin menghapus data mahasiswa ?')"
                                    class="btn btn-danger">
                                    Hapus</a>

                                </td>
                            </tr>
                        <?php $no++;}?>
                    </tbody>  

                </table>
            </div>
        </div>
    </div>
</div>