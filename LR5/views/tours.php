<?php require_once 'templates/header.php' ?>

<main>  
    <section class="tours-table my-3">
        <div class="container">
            <div class="table-responsive mt-3">
                <table class="table">
                    <thead class="table-dark">
                        <tr>
                            <th>Превью</th>
                            <th>Название</th>
                            <th>Страна</th>
                            <th>Описание</th>
                            <th>Стоимость</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($vh->tours as $tour) : $tour = $tour->properties();?>
                            <tr>
                                <td>
                                    <img src="models/resourses/img/tours/<?= htmlspecialchars($tour['preview_img']) ?>" alt="no_image" width="200px" height="200px">
                                </td>
                                <td><?= htmlspecialchars($tour['name']) ?></td>
                                <td><?= htmlspecialchars($tour['country']) ?></td>
                                <td><?= htmlspecialchars($tour['description']) ?></td>
                                <td><?= htmlspecialchars($tour['cost']) ?> руб</td>
                            </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>

            </div>
        </div>
    </section> 
</main>

<?php require_once 'templates/footer.php' ?>



