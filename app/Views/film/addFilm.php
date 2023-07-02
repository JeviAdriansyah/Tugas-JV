<?= $this->extend('layout/templateFilm') ?>


<?= $this->section('content') ?>


<div class="container">
    <div class="col">
        <div class="row">
    <div class="col-md-12">
            <div class="card-header">
                <div class="row">
                <h2 class="text-center mt-3 mb-3">Tambahkan Film</h2>
                <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                <a class="btn btn-dark mb-3" href="semuaFilm">Kembali</a>
                </div>
            </div>
            <form action="/film/store" method="POST" enctype="multipart/form-data">
                    <div class="row">

                        <div class="col-md-6">
                            <label for="nama_film" class="form-label">Nama Film</label>
                            <input type="text" placeholder="Masukan Nama Film" class="form-control <?= isset(
                                $errors['nama_film']
                            )
                                ? 'is-invalid '
                                : '' ?>" id="nama_film" name="nama_film" value="<?= old(
    'nama_film'
) ?>">
                            <?php if (isset($errors['nama_film'])): ?>
                                <div class="invalid-feedback">
                                    <?= $errors['nama_film'] ?>
                                </div>
                            <?php endif; ?>
                        </div>
                        <div class="col-md-6">
                            <label for="genre" class="form-label">Genre</label>
                            <select name="id_genre" id="genre"  class="form-control <?= isset(
                                $errors['id_genre']
                            )
                                ? 'is-invalid '
                                : '' ?>" name="id_genre" value="<?= old(
    'id_genre'
) ?>">
                                <option value="">Pilih Genre</option>
                                <?php foreach ($genre as $g): ?>
                                    <option value="<?= $g['id'] ?>"><?= $g[
    'nama_genre'
] ?></option>
                                <?php endforeach; ?>
                            </select>
                            <?php if (isset($errors['id_genre'])): ?>
                                <div class="invalid-feedback">
                                    <?= $errors['id_genre'] ?>
                                </div>
                            <?php endif; ?>
                        </div>

                        <div class="col-md-6">
                            <label for="duration"  class="form-label">Durasi</label>
                            <input type="text" placeholder="Masukan durasi jam" class="form-control <?= isset(
                                $errors['duration']
                            )
                                ? 'is-invalid '
                                : '' ?>" id="duration" name="duration" value=" <?= old(
    'duration'
) ?>">
                            <?php if (isset($errors['duration'])): ?>
                                <div class=" invalid-feedback">
                                    <?= $errors['duration'] ?>
                                </div>
                            <?php endif; ?>
                        </div>
                        <div class="col-md-6">
                            <label for="cover" class="form-label">Cover</label>
                            <input type="file" class="form-control <?= isset(
                                $errors['cover']
                            )
                                ? 'is-invalid'
                                : '' ?>" id="cover" name="cover" value="<?= old(
    'cover'
) ?>">
                            <?php if (isset($errors['cover'])): ?>
                                <div class="invalid-feedback">
                                    <?= $errors['cover'] ?>
                                </div>
                            <?php endif; ?>
                        </div>

                        <div class="col-md-6">
                            <button type="submit" class="btn btn-primary mt-5">Simpan</button>
                        </div>
                    </div>
                </form>
            </div>
          </div>
        </div>
    </div>
    </div>
</div>
</div>

<?= $this->endSection('content') ?>


