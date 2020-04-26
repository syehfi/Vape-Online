<title>Tambah Produk</title>
<div class="container">
    <div class="row mt-3">
        <div class="col-md-6">
            <div class="card">
                <div class="card-header">
                    Form Tambah Produk
                </div>
                    <form action="" method="post"  enctype="multipart/form-data">                    
                        <div class="form-group">
                            <label for="nama_produk">Nama Produk</label>
                            <input type="text" name="nama_produk" id="nama_produk" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="nama_produk">Deskripsi Produk</label>
                            <input type="text" name="deskripsi" id="deskripsi" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="kategori">Kategori</label>
                            <select class="form-control" name="kategori" id="kategori">
                                <option>Pilih Salah Satu</option>
                                <?php foreach($kategori as $row):?>
                                <option><?php echo $row->kategori;?></option>
                                <?php endforeach;?>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="harga_produk">Harga</label>
                            <input type="number" name="harga" id="harga" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="stok">Stok</label>
                            <input type="number" name="stok" id="stok" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="stok">Image</label>
                            <input type="file" name="userfile" class="form-control">
                        </div>
                        <button type="submit" name="submit" class="btn btn-primary float-right">Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>