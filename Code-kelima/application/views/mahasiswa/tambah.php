<div class="container">
    <div class="row mt-3">
        <div class="col-md-6">
            <!-- http://getbootstrap.com/docs/4.1/components/card/ -->
            <div class="card">
                <div class="card-header">
                    Form Tambah Data Mahasiswa
                </div>
                
                <div class="card-body">
                <!-- untuk menampilkan pesan error -->
                <?php if (validation_errors()):?>
                <div class="alert alert-danger" role="alert">
                      <?= validation_errors(); ?>  
                </div>
                <?php endif ?>
                   <form action="" method="post">
                    <!-- https://getbootstrap.com/docs/4.1/components/forms/ -->
                        <div class="form-group">
                            <label for="nama">Nama</label>
                            <input type="text" 
                            class="form-control" 
                            id="nama" 
                            name="nama">
                            <!-- <small class="form-text text-danger"><?= form_error('nama'); ?></small> -->
                        </div>
                        <div class="form-group">
                            <label for="nim">Nim</label>
                            <input type="number" 
                            class="form-control" 
                            id="nim" 
                            name="nim">
                        </div>
                        <div class="form-group">
                            <label for="email">email</label>
                            <input type="email" 
                            class="form-control" 
                            id="email" 
                            name="email">
                        </div>
                        <div class="form-group">
                        <label for="jurusan">Jurusan</label>
                        <select class="form-control" id="jurusan" name="jurusan">
                            <?php foreach($jurusan as $key): ?>
                                    <option 
                                    value="<?= $key ?>"
                                    selected><?= $key ?>
                                </option>
                            <?php endforeach; ?>
                        </select>
                        </div>
                        <button type="submit" name="submit" class="btn btn-primary float-right" > Submit </button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>