<?php require_once 'templates/header.php' ?>

<main>
    <section class="tours-table my-3">
        <div class="container">
            <div class="table-responsive mt-3">
                <table class="table">
                    <thead class="table-dark">
                        <tr>
                            <th>id</th>
                            <th>Превью</th>
                            <th>Название</th>
                            <th>Страна</th>
                            <th>Описание</th>
                            <th>Стоимость</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td><?= $vh->tour['id'] ?></td>
                            <td>
                                <img src="models/resourses/img/tours/<?= htmlspecialchars($vh->tour['preview_img']) ?>" alt="no_image" width="200px" height="200px">
                            </td>
                            <td><?= htmlspecialchars($vh->tour['name']) ?></td>
                            <td><?= htmlspecialchars($vh->tour['country']) ?></td>
                            <td><?= htmlspecialchars($vh->tour['description']) ?></td>
                            <td><?= htmlspecialchars($vh->tour['cost']) ?> руб</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </section>
</main>

<?php require_once 'templates/footer.php' ?>