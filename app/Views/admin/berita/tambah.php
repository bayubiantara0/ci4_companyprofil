<div class="form-group row">
    <label class="col-md-2">Judul Berita</label>
    <div class="col-md-10">
        <input type="text" name="judul_berita" class="form-control" value="" required>
    </div>
</div>

<div class="form-group row">
    <label class="col-md-2">Upload Gambar Berita</label>
    <div class="col-md-10">
        <input type="file" name="gambar" class="form-control" value="">
    </div>
</div>

<div class="form-group row">
    <label class="col-md-2">Kategori, Jenis &amp; Status</label>
    <div class="col-md-2">
        <select name="id_kategori" class="form-control">
            <option value="kategori">Kategori</option>
        </select>
        <small class="text-secondary">Kategori</small>
    </div>
    <div class="col-md-2">
        <select name="jenis_berita" class="form-control">
            <option value="Berita">Berita</option>
            <option value="Layanan">Layanan</option>
            <option value="Profil">Profil</option>
        </select>
        <small class="text-secondary">Jenis konten</small>
    </div>
    <div class="col-md-2">
        <select name="status_berita" class="form-control">
            <option value="Publish">Publish</option>
            <option value="Draft">Draft</option>
        </select>
        <small class="text-secondary">Status publikasi</small>
    </div>
    <div class="col-md-2">
        <input type="text" name="icon" class="form-control" value="">
        <small class="text-secondary">Icon <a href="https://fontawesome.com/icons" target="_blank">Fontawsome</a></small>
    </div>
</div>

<div class="form-group row">
    <label class="col-md-2">Tanggal dan jam Publikasi</label>
    <div class="col-md-4">
        <input type="text" name="tanggal_publish" class="form-control tanggal" value="">
        <small class="text-secondary">Format <strong>dd-mm-yyyy</strong>. Misal:</small>
    </div>
    <div class="col-md-2">
        <input type="text" name="jam" class="form-control jam" value="">
        <small class="text-secondary">Format <strong>HH:MM:SS</strong>. Misal: </small>
    </div>
</div>

<div class="form-group row">
    <label class="col-md-2">Ringkasan</label>
    <div class="col-md-10">
        <textarea name="ringkasan" class="form-control"></textarea>
    </div>
</div>

<div class="form-group row">
    <label class="col-md-2">Isi Berita</label>
    <div class="col-md-10">
        <textarea name="isi" class="form-control konten"></textarea>
    </div>
</div>

<div class="form-group row">
    <label class="col-md-2">Keyword Berita (untuk SEO Google)</label>
    <div class="col-md-10">
        <textarea name="keywords" class="form-control"></textarea>
    </div>
</div>

<div class="form-group row">
    <label class="col-md-2"></label>
    <div class="col-md-10">
        <button type="submit" class="btn btn-success"><i class="fa fa-save"></i> Simpan</button>
    </div>
</div>