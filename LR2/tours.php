<!-- Database logic -->
<?php
require_once $_SERVER['DOCUMENT_ROOT'] . "/LR2/include/logic.php";

$countries = db_select_countries();
$tours = db_select_tours();
?>

<!-- Page -->
<?php require_once "include/templates/header.php" ?>

<main>
    <section class="tours-table my-3">
        <div class="container">
            <form action="tours.php" method="GET">
                <div class="row justify-content-between">
                    <div class="col-3 d-flex flex-column">
                        <h4 class="form-header">Название</h4>
                        <input name="name" type="text" class="form-control" value="<?= htmlspecialchars($_GET["name"] ?? NULL) ?>" placeholder="введите название...">
                        <div class="mt-auto">
                            <input type="submit" name="apply" value="применить" class="btn btn-primary py-1 px-4">
                            <input type="submit" name="clear" value="очистить" class="btn btn-danger py-1 px-4">
                        </div>
                    </div>
                    <div class="col-2">
                        <h4 class="form-header">Страна</h4>
                        <select name="country_name" class="form-control">
                            <option value disabled selected>выберите...</option>
                            <?php foreach($countries as $country):?>
                                <option value="<?=$country['name']?>" <?= (isset($_GET['country_name']) && $_GET['country_name']==$country['name']) ? 'selected' : ''?> ><?=$country['name']?></option>
                            <?php endforeach; ?>
                        </select>
                    </div>
                    <div class="col-4">
                        <h4 class="form-header">Описание</h4>
                        <textarea name="description" rows="2" class="form-control" placeholder="введите описание..."><?= htmlspecialchars($_GET["description"] ?? NULL); ?></textarea>
                    </div>
                    <div class="col-2">
                        <h4 class="form-header">Цена</h4>
                        <div class="form-group row justify-content-between">
                            <label for="inputCostFrom" class="col-auto col-form-label">От:</label>
                            <div class="col-10">
                                <input name="cost_from" type="number" class="form-control" id="inputCostFrom" value="<?= htmlspecialchars($_GET["cost_from"] ?? NULL) ?>" placeholder="1000р">
                            </div>
                        </div>
                        <div class="form-group row justify-content-between pt-1">
                            <label for="inputCostTo" class="col-auto col-form-label">До:</label>
                            <div class="col-10">
                                <input name="cost_to" type="number" class="form-control" id="inputCostTo" value="<?= htmlspecialchars($_GET["cost_to"] ?? NULL) ?>" placeholder="200000р">
                            </div>
                        </div>
                    </div>
                </div>
            </form>

            <hr>

            <div class="table-responsive mt-3">
                <table class="table">
                    <thead class="table-dark">
                        <tr>
                            <th scope="col">Превью</th>
                            <th scope="col">Название</th>
                            <th scope="col">Страна</th>
                            <th scope="col">Описание</th>
                            <th scope="col">Стоимость</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($tours as $tour) : ?>
                            <tr>
                                <td>
                                    <img src="img/tours_img/<?= $tour['preview'] ?>" alt="no_image" width="200px" height="200px">
                                </td>
                                <td><?= htmlspecialchars($tour['name']) ?></td>
                                <td><?= htmlspecialchars($tour['country_name']) ?></td>
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

<?php require_once "include/templates/footer.php" ?>