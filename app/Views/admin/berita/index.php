<p>
    <a href="<?php echo base_url('admin/berita/tambah') ?>" class="btn btn-success">
        <i class="fa fa-plus"></i> Tambah Baru
    </a>
</p>

<table class="table table-bordered" id="example1">
    <thead>
        <tr>
            <th width="5%">No</th>
            <th width="8%">Gambar</th>
            <th width="40%">Judul</th>
            <th width="15%">Kategori - Jenis</th>
            <th width="15%">Author - Status</th>
            <th></th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td>1</td>
            <td>gambar
            </td>
            <td><a href="#">
                    Judul
                </a>
                <small>
                    <br><i class="fa fa-eye"></i> Hits: 1
                    <br><i class="fa fa-home"></i> Icon: <i class=""></i>
                    <br><i class="fa fa-calendar-check"></i> Publish:
                    <br><i class="fa fa-calendar"></i> Updated:
                </small>
            </td>
            <td><small>
                    <i class="fa fa-tags"></i> <a href="#">
                        Kategori
                    </a>
                    <br><i class="fa fa-home"></i> <a href="#">
                        Jenis berita
                    </a>
                </small>
            </td>

            <td><small>
                    <i class="fa fa-user"></i> <a href="#">
                        nama
                    </a>
                    <br>
                    <i class="fa fa-check"></i> <a href="#">
                        publish
                    </a>
                </small>
            </td>
            <td>
                <a href="#" class="btn btn-info btn-sm" target="_blank"><i class="fa fa-eye"></i> Baca</a>
                <a href="#" class="btn btn-success btn-sm"><i class="fa fa-edit"></i></a>
                <a href="#" class="btn btn-dark btn-sm" onclick="confirmation(event)"><i class="fa fa-trash"></i></a>
            </td>
        </tr>
    </tbody>
</table>