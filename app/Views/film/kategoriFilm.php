<?= $this->extend('layout/templateFilm') ?>


<?= $this->section('content') ?>



<div class="container">
    <div class="col">
        <div class="row">
            <h2 class="mt-3 text-center">Genre Film</h2>
        <table class="table">
  <thead>
    <tr>
      <th scope="col">No</th>
      <th scope="col">Nama Genre</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
    <?php
    use PhpParser\Node\Stmt\Echo_;

    $i = 1;
    ?>
    <?php foreach ($semuagenre as $genre): ?>
    <tr>
      <td><?= $i++ ?></td>
      <td><p class="card-text"><?= $genre['nama_genre'] ?> </td>
      <th><button class="btn btn-success" type="submit">Update</button> <button class="btn btn-danger" type="submit">Delete</button></th>
    </tr>
  </tbody>
  <?php endforeach; ?>
</table>
        </div>
    </div>
</div>

<?= $this->endSection('content') ?>


