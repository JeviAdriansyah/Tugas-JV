<?= $this->extend('layout/templateFilm') ?>


<?= $this->section('content') ?>



<div class="container">
    <div class="col">
        <div class="row">
        <div class="card-fluid mt-3">
  <div class="card-body">
    <h2 class="text-center">Semua Film</h2>
    <div class="d-grid gap-2 d-md-flex justify-content-md-end">
    <a class="btn btn-dark" href="addFilm">Tambah Data Film</a>
</div>
  </div>
</div>
        <table class="table ">
  <thead>
    <tr>
      <th scope="col">No</th>
      <th scope="col">Gambar</th>
      <th scope="col">Nama Film</th>
      <th scope="col">Genre</th>
      <th scope="col">Duration</th>
      <th scope="col">Actions</th>
    </tr>
  </thead>
  <tbody>
    <?php
    use PhpParser\Node\Stmt\Echo_;

    $i = 1;
    ?>
  <?php foreach ($daftarFilm as $film): ?>
    <tr>
      <td><?= $i++ ?></td>
      <td> <img src="/assets/cover/<?= $film[
          'cover'
      ] ?>" width="80"  alt="Poster Film"></td>
      <td><?php echo $film['nama_film']; ?></td>
      <td><?php echo $film['nama_genre']; ?></td>
      <td><?php echo $film['duration']; ?></td>
      <td>
      <a href="edit<?= encryptUrl(
          $film['id']
      ) ?>" class="btn btn-success">Update</a>
      <a class="btn btn-danger" onclick="return confirmDelete()">Delete</a>
      </td>
    </tr>
  </tbody>
  <?php endforeach; ?>
</table>
        </div>
    </div>
</div>
<div>
<script>
    function confirmDelete() {
        swal({
                title: "Apakah Anda yakin?",
                text: "setelah dihapus! data anda akan benar-benar hilang!",
                icon: "warning",
                buttons: true,
                dangerMode: true,
            })
            .then((willDelete) => {
                if (willDelete) {

                    window.location.href = "/film/destroy/<?= encryptUrl(
                        $film['id']
                    ) ?>";

                } else {
                    swal("Data tidak jadi dihapus!");
                }
            });
    }
</script>
</div>

<?= $this->endSection('content') ?>


