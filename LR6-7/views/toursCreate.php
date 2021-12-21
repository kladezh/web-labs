<?php require_once 'templates/header.php' ?>

<main>
    <section class="tours-create my-3">
        <div class="container">
            <form action="?controller=toursCreate" method="POST" enctype="multipart/form-data">
                <div class="row">
                    <div class="col-4 p-3">
                        <h5 class="form-header">Название</h5>
                        <input name="name" type="text" class="form-control" value="<?= htmlspecialchars($_POST["name"] ?? NULL) ?>" placeholder="введите название..." required>
                    </div>
                    <div class="col-4 p-3">
                        <h5 class="form-header">Страна</h5>
                        <select name="country" class="form-control" required>
                            <option value disabled selected>выберите...</option>
                            <?php foreach ($vh->countries as $country) : $country = $country->properties(); ?>
                                <option value="<?= $country['name'] ?>" <?= (isset($_POST['country']) && $_POST['country'] == $country['name']) ? 'selected' : '' ?>><?= $country['name'] ?></option>
                            <?php endforeach; ?>
                        </select>
                    </div>
                    <div class="col-4 p-3">
                        <h5 class="form-header">Цена</h5>
                        <input name="cost" type="number" class="form-control" id="inputCost" value="<?= htmlspecialchars($_POST["cost"] ?? NULL) ?>" placeholder="1000р" required>
                    </div>
                    <div class="col-4 p-3">
                        <h5 class="form-header">Описание</h5>
                        <textarea name="description" class="form-control" rows="1" placeholder="введите описание..." required><?= htmlspecialchars($_POST["description"] ?? NULL); ?></textarea>
                    </div>
                    <div class="col-4 p-3">
                        <h5 class="form-header">Изображение</h5>
                        <div class="input-group">
                            <input name="preview" type="file" class="form-control" required>
                        </div>
                    </div>
                </div>
                <div class="p-3">
                    <input type="submit" name="submit" value="Отправить" class="btn btn-primary py-1 px-4">
                </div>
            </form>
            <?php if(isset($vh->susseccMsg)) : ?>
                <span class="text-primary"><?= $vh->successMsg ?></span>
            <?php endif;?>
        </div>
    </section>
</main>

<?php require_once 'templates/footer.php' ?>