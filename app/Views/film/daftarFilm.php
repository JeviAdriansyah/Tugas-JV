<?= $this->extend('layout/templateFilm') ?>


<?= $this->section('content') ?>


<div class="container-fluid">
<div class="container mb-3">
<div class="row">
    <h1 class="mt-3 mb-3 text-center">Daftar Film</h1>
    <?php foreach ($daftarFilm as $film): ?>
        <div class="col-md-3 ">
            <div class="card mb-3 mt-3">
                <img src="/assets/cover/<?= $film[
                    'cover'
                ] ?>" class="card-img-top full-widht-image" alt="Poster Film">
                <div class="card-body">
                    <div class="col">
                        <div class="row">
                        <h5 class="card-title"><?= $film['nama_film'] ?></h5>
                        </div>
                    </div>
                    <p class="card-text"><?= $film[
                        'nama_genre'
                    ] ?> || <?= $film['duration'] ?></p>
                    <a href="#" class="btn btn-success ">Detail</a>
                    <a href="#" class="btn btn-dark">Update</a>
                    <a href="#" class="btn btn-danger">Delete</a>
                </div>
            </div>
        </div>

    <?php endforeach; ?>
</div>

<?= $this->endSection('content') ?>


