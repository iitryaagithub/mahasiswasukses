<?php
if ($this->session->flashdata('Berhasil')) {
    echo "<div class='alert alert-info'>";
    echo $this->session->flashdata('Berhasil');
    echo "</div>";
} elseif ($this->session->flashdata('edit')) {

    echo "<div class='alert alert-warning'>";
    echo $this->session->flashdata('edit');
    echo "</div>";
} elseif ($this->session->flashdata('hapus')) {

    echo "<div class='alert alert-warning bg-danger'>";
    echo $this->session->flashdata('hapus');
    echo "</div>";
}
?>
<h4>DATA PENILAIAN</h4> 
<?php echo anchor('Admin/Penilaian/add', '<button type="submit" class="btn btn-info pull-right">TAMBAH NILAI</button> ') ?>
<table id="example" class="table table-striped table-responsive table-bordered bg-white" style="width:100%">
    <thead>
        <tr>
            <th>No</th>
            <th>NAMA MAHASISWA</th>
            <th>NIS</th>
            <th>SEMESTER</th>
            <th>NPM</th>
            <th>KP</th>
            <th>KODE ETIK</th>
            <th>KETERANGAN</th>
            <th>PRODI</th>
            <th>KETERANGAN</th>
            <th>AKSI EDIT</th>
            <th>AKSI DELETE</th>
        </tr>
    </thead>
    <tbody>
        <?php
        $no = 1;
        foreach ($nilai as $row) {
            echo "<tr>
                <td>$no</td>
                <td>$row->nama</td>
                <td>$row->nis</td>
                <td>$row->kelas</td>
                <td>$row->tanggal</td>
                <td>$row->bobot</td>
                <td>$row->no_hp_ortu</td>
                <td>$row->tingakt_kenakalan</td>
                <td>$row->alamat</td>
                <td>$row->keterangan</td>
                <td>" . anchor('Admin/Penilaian/edit/' . $row->id_nilai, 'Edit', array('class' => 'btn btn-info')) . "</td>
                <td>" . anchor('Admin/Penilaian/Hapus/' . $row->id_nilai, 'Hapus', array('class' => 'btn btn-danger')) . "</td>
            </tr>";

            $no++;
        }
        ?>

    </tbody>
</table>    