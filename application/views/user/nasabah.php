<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <h3><?= $title; ?></h3>
    <div class="row">
        <div class="col-md">
            <table class="table table-bordered" id="dataTable">
                <thead class="thead-dark">
                    <!-- Button trigger modal -->
                    <a href="<?= base_url('user/tambahnasabah'); ?>" type="button" class="btn btn-primary mb-4">Tambah Nasabah</a>
                    <tr>
                        <th scope="col">No</th>
                        <th scope="col">Nama</th>
                        <th scope="col">No Telpon</th>
                        <th scope="col">Email</th>
                        <th scope="col">Alamat</th>
                        <th scope="col">Action</th>

                    </tr>
                </thead>
                <tbody>
                    <?php
                    $no = 1;
                    foreach ($data_nasabah as $nasabah) { ?>
                        <tr>
                            <th scope="row"><?= $no++; ?></th>
                            <td><?= $nasabah->nama ?></td>
                            <td><?= $nasabah->no_telpon ?></td>
                            <td><?= $nasabah->email ?></td>
                            <td><?= $nasabah->alamat ?></td>
                            <td>
                                <button type="button" class="btn btn-info" data-toggle="modal" data-target="#infoModal<?= $nasabah->id_user ?>"><i class="fas fa-info-circle"></i></button>
                                <button type="button" class="btn btn-warning" data-toggle="modal" data-target="#editModal<?= $nasabah->id_user ?>"><i class="fas fa-edit"></i></button>
                                <button type=" button" class="btn btn-danger" data-toggle="modal" data-target="#hapusModal<?= $nasabah->id_user ?>"><i class="fas fa-trash"></i></button>
                            </td>
                        </tr>
                        <!-- Modal Info-->
                        <div class=" modal fade" id="infoModal<?= $nasabah->id_user ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog modal-md">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="exampleModalLabel" title="Popover title">Info nasabah <?= $nasabah->nama ?></h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    <div class="modal-body">
                                        <div class="form">
                                            <div class="form-group">
                                                <div class="row">
                                                    <div class="col-6 col-sm-6">
                                                        <label for="exampleFormControlInput1">Nama</label>
                                                        <input type="text" class="form-control mb-3" id="exampleFormControlInput1" value="<?= $nasabah->nama ?>" required name="nama" readonly>
                                                        <input type="hidden" class="form-control mb-3" readonly id="exampleFormControlInput1" value="<?= $nasabah->id_user ?>" name="id_user">
                                                    </div>
                                                    <div class="col-6 col-sm-6">
                                                        <label for="exampleFormControlInput1">No Telpon</label>
                                                        <input type="number" class="form-control mb-3" id="exampleFormControlInput1" value="<?= $nasabah->no_telpon ?>" readonly name="no_telpon">
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-6 col-sm-6">
                                                        <label for="exampleFormControlInput1">Email</label>
                                                        <input type="text" class="form-control mb-3" id="exampleFormControlInput1" readonly value="<?= $nasabah->email ?>" readonly>
                                                    </div>
                                                    <div class="col-6 col-sm-6">
                                                        <label for="exampleFormControlInput1">NIK</label>
                                                        <input type="number" class="form-control mb-3" id="exampleFormControlInput1" readonly value="<?= $nasabah->nik ?>" readonly>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-6 col-sm-6">
                                                        <label for="exampleFormControlInput1">Alamat</label>
                                                        <input name="alamat" id="alamat" class="form-control mb-3" value="<?= $nasabah->alamat ?>" name="alamat" readonly></input>
                                                    </div>
                                                    <div class="col-6 col-sm-6">
                                                        <label for="exampleFormControlInput1">Status</label>
                                                        <input type="text" class="form-control mb-3" value="<?= $nasabah->status ?>" name="status" readonly id="exampleFormControlInput1">
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-6 col-sm-6">
                                                        <label for="exampleFormControlInput1">Kecamatan</label>
                                                        <input type="text" class="form-control mb-3" value="<?= $nasabah->kecamatan ?>" name="kecamatan" readonly id="exampleFormControlInput1">
                                                    </div>
                                                    <div class="col-6 col-sm-6">
                                                        <label for="exampleFormControlInput1">Kelurahan</label>
                                                        <input type="text" class="form-control mb-3" value="<?= $nasabah->kelurahan ?>" name="kelurahan" readonly id="exampleFormControlInput1">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                    </div>
                                </div>
                            </div>
                        </div>


                        <!-- Modal Edit-->
                        <div class="modal fade" id="editModal<?= $nasabah->id_user ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog modal-lg">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="exampleModalLabel">Edit nasabah <?= $nasabah->nama ?></h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    <div class="modal-body">
                                        <form action="<?= base_url('user/editNasabah'); ?>" method="POST">
                                            <div class="form">
                                                <div class="form-group">
                                                    <div class="row">
                                                        <div class="col-6 col-sm-6">
                                                            <label for="exampleFormControlInput1">Nama</label>
                                                            <input type="text" class="form-control mb-3" id="exampleFormControlInput1" value="<?= $nasabah->nama ?>" required name="nama">
                                                            <input type="hidden" class="form-control mb-3" readonly id="exampleFormControlInput1" value="<?= $nasabah->id_user ?>" name="id_user">
                                                        </div>
                                                        <div class="col-6 col-sm-6">
                                                            <label for="exampleFormControlInput1">No Telpon</label>
                                                            <input type="number" class="form-control mb-3" id="exampleFormControlInput1" value="<?= $nasabah->no_telpon ?>" required name="no_telpon">
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-6 col-sm-6">
                                                            <label for="exampleFormControlInput1">Email</label>
                                                            <input type="text" class="form-control mb-3" id="exampleFormControlInput1" readonly value="<?= $nasabah->email ?>">
                                                        </div>
                                                        <div class="col-6 col-sm-6">
                                                            <label for="exampleFormControlInput1">NIK</label>
                                                            <input type="number" class="form-control mb-3" id="exampleFormControlInput1" readonly value="<?= $nasabah->nik ?>">
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-6 col-sm-6">
                                                            <label for="exampleFormControlInput1">Alamat</label>
                                                            <input name="alamat" id="alamat" class="form-control mb-3" value="<?= $nasabah->alamat ?>" name="alamat" required></input>
                                                        </div>
                                                        <div class="col-6 col-sm-6">
                                                            <label for="exampleFormControlInput1">Status</label>
                                                            <input type="text" class="form-control mb-3" value="<?= $nasabah->status ?>" name="status" required id="exampleFormControlInput1">
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-6 col-sm-6">
                                                            <label for="exampleFormControlInput1">Kecamatan</label>
                                                            <input type="text" class="form-control mb-3" value="<?= $nasabah->kecamatan ?>" name="kecamatan" required id="exampleFormControlInput1">
                                                        </div>
                                                        <div class="col-6 col-sm-6">
                                                            <label for="exampleFormControlInput1">Kelurahan</label>
                                                            <input type="text" class="form-control mb-3" value="<?= $nasabah->kelurahan ?>" name="kelurahan" required id="exampleFormControlInput1">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                        <button type="submit" class="btn btn-primary">Simpan</button>
                                    </div>
                                    </form>
                                </div>
                            </div>
                        </div>


                        <!-- Modal Hapus-->
                        <div class="modal fade" id="hapusModal<?= $nasabah->id_user ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="exampleModalLabel">Hapus nasabah</h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    <div class="modal-body">
                                        Apakah anda ingin menghapus data <?= $nasabah->nama; ?>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
                                        <a href="<?= base_url('user/hapusNasabah/') . $nasabah->id_user ?>" class="btn btn-primary">Iya</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    <?php } ?>

                </tbody>
            </table>
        </div>
    </div>
</div>




<!-- Modal Tambah-->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                ...
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary">Save changes</button>
            </div>
        </div>
    </div>
</div>