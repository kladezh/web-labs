<?php require_once 'templates/header.php' ?>

<main>
    <section class="file-system-import my-5">
        <div class="container">
            <form method="POST" action="?controller=toursImport" class="d-flex flex-column">
                <label for="urlImport">Ссылка на файл <span class="text-primary">XML</span> для таблицы <span class="text-primary">`tours`</span>:</label>
                <input name="url" type="url" id="urlImport" placeholder="https://">
                <div>
                    <input name="submit" type="submit" value="Загрузить">
                </div>
            </form>

            <?php if (isset($_POST['submit'])) : ?>
                <div class="mt-2">
                    <?php if (isset($vh->error)) : ?>
                        <span class="text-danger"><?= $vh->error ?></span>
                    <?php else : ?>
                        <h5>Файл с данными получен из <span class="text-primary"><?= $_POST['url'] ?></span> и обработан</h5>
                        <span>Кол-во записей в таблице: <b><?= $vh->rowsCount ?></b></span>
                    <?php endif; ?>
                </div>
            <?php endif; ?>
        </div>
    </section>
</main>

<?php require_once 'templates/footer.php'; ?>