<?php require_once 'templates/header.php' ?>

<main>
    <section class="file-system-export">
        <div class="container">
            <form method="POST" action="?controller=importExport">
                <label for="inputExport">Скачать таблицу `tours` как XML файл:</label>
                <input name="submit" value="Скачать" id="inputExport" type="submit" >
            </form>
        </div>
    </section>
</main>

<?php require_once 'templates/footer.php' ?>