<?php require_once 'templates/header.php' ?>

<script src="views/assets/js/deleteitem.js"></script>

<main>  
    <section class="tours-table my-3">
        <div class="container-fluid">
            <div class="table-responsive mt-3">
                <table class="table">
                    <thead class="table-dark">
                        <tr>
                            <!-- <th scope="col">id</th> -->
                            <th>id</th>
                            <th>Превью</th>
                            <th>Название</th>
                            <th>Страна</th>
                            <th>Описание</th>
                            <th>Стоимость</th>
                            <th colspan="3">Действия</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach($vh->tours as $tour) : $tour = $tour->properties();?>
                            <tr>
                                <td><?= $tour['id'] ?></td>
                                <td>
                                    <img src="models/resourses/img/tours/<?= htmlspecialchars($tour['preview_img']) ?>" alt="no_image" width="200px" height="200px">
                                </td>
                                <td><?= htmlspecialchars($tour['name']) ?></td>
                                <td><?= htmlspecialchars($tour['country']) ?></td>
                                <td><?= htmlspecialchars($tour['description']) ?></td>
                                <td><?= htmlspecialchars($tour['cost']) ?> руб</td>
                                <td>
                                    <a class="btn btn-success" href="?controller=toursRead&id=<?= $tour['id'] ?>">Открыть</a>
                                </td>
                                <td>
                                    <a class="btn btn-primary" href="?controller=toursUpdate&id=<?= $tour['id'] ?>">Редактировать</a>
                                </td>
                                <td>
                                    <a class="btn btn-danger delete-item" data-itemid="<?= $tour['id'] ?>" data-entityname="toursDelete">Удалить</a>
                                </td>
                            </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
                <div class="d-flex justify-content-end">
                    <a class="btn btn-primary" type="button" href="?controller=toursCreate">Добавить</a>
                </div>
            </div>
        </div>
    </section> 
</main>

<?php require_once 'templates/footer.php' ?>