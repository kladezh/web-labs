<?php
require_once 'include/m_signup.php';

session_start();

if (isset($_POST['submit'])) {
    db_connect($db_config);

    $errors = check_signup_input();
    if (empty($errors['email'])) {
        if (user_already_exists($_POST['email'])) {
            $errors['email'] = 'occupied';
        }
    }

    if (!array_filter($errors)) {
        db_add_user();
        header('Location: login.php');
        die();
    }
}
?>

<!-- Page -->
<?php require_once 'include/templates/header.php' ?>

<main>
    <section class="login">
        <div class="container">
            <div class="col-5 mx-auto my-5">
                <form action="signup.php" method="POST">
                    <div class="mb-3">
                        <label for="inputEmail" class="form-label">Email(Логин)</label>
                        <input name="email" type="email" class="form-control" id="inputEmail" placeholder="example@example.com" value="<?= htmlspecialchars($_POST['email'] ?? null) ?>" novalidate>
                        <div class="form-errors">
                            <?php
                            if (isset($errors)) {
                                echo match ($errors['email']) {
                                    'empty' => 'заполните поле',
                                    'invalid' => 'данные указаны неверно',
                                    'occupied' => 'этот логин занят, поробуйте другой',
                                    default => null
                                };
                            }
                            ?>
                        </div>
                    </div>
                    <div class="mb-3">
                        <label for="inputName" class="form-label">ФИО</label>
                        <input name="name" type="text" class="form-control" id="inputName" placeholder="Примеров Пример Примерович" value="<?= htmlspecialchars($_POST['name'] ?? null) ?>" novalidate>
                        <div class="form-errors">
                            <?php
                            if (isset($errors)) {
                                echo match ($errors['name']) {
                                    'empty' => 'заполните поле',
                                    'invalid' => 'данные указаны неверно',
                                    default => null
                                };
                            }
                            ?>
                        </div>
                    </div>
                    <div class="mb-3">
                        <label for="inputBirthday" class="form-label">Дата рождения</label>
                        <input name="birthday" type="date" class="form-control" id="inputBirthday" value="<?= isset($_POST['birthday']) ? date('Y-m-d', strtotime($_POST['birthday'])) : null ?>" novalidate>
                        <div class="form-errors">
                            <?php
                            if (isset($errors)) {
                                echo match ($errors['birthday']) {
                                    'empty' => 'заполните поле',
                                    default => null
                                };
                            }
                            ?>
                        </div>
                    </div>
                    <div class="mb-3">
                        <label for="inputRhFactor" class="form-label">Резус-фактор</label>
                        <select name="rh_factor" class="form-control" id="inputRhFactor" novalidate>
                            <option value disabled selected>выберите...</option>
                            <option value="positive" <?= (isset($_POST['rh_factor']) && $_POST['rh_factor'] == 'positive') ? 'selected' : null ?>>Положительный (+)</option>
                            <option value="negative" <?= (isset($_POST['rh_factor']) && $_POST['rh_factor'] == 'negative') ? 'selected' : null ?>>Отрицательный (-)</option>
                        </select>
                        <div class="form-errors">
                            <?php
                            if (isset($errors)) {
                                echo match ($errors['rh_factor']) {
                                    'empty' => 'заполните поле',
                                    'invalid' => 'данные указаны неверно',
                                    default => null
                                };
                            }
                            ?>
                        </div>
                    </div>
                    <div class="mb-3">
                        <label for="inputPassword" class="form-label">Пароль</label>
                        <input name="password" type="password" class="form-control" id="inputPassword" placeholder="введите пароль..." novalidate>
                        <div class="form-errors">
                            <?php
                            if (isset($errors)) {
                                echo match ($errors['password']) {
                                    'empty' => 'заполните поле',
                                    'invalid' => 'данные указаны неверно',
                                    default => null
                                };
                            }
                            ?>
                        </div>
                    </div>
                    <div class="mb-3">
                        <label for="inputPasswordAck" class="form-label">Подтвердите пароль</label>
                        <input name="password_ack" type="password" class="form-control" id="inputPasswordAck" placeholder="введите пароль..." novalidate>
                        <div class="form-errors">
                            <?php
                            if (isset($errors)) {
                                echo match ($errors['password_ack']) {
                                    'invalid' => 'пароль не совпадает',
                                    default => null
                                };
                            }
                            ?>
                        </div>
                    </div>
                    <button name="submit" value="submit" type="submit" class="btn btn-primary btn-lg w-100 px-4 mt-2">Зарегистрироваться</button>
                    <div class="form-group mt-2">
                        <p class="text-center">Уже есть аккаунт? <a href="login.php">Войти в аккаунт</a></p>
                    </div>
                </form>
            </div>
        </div>
    </section>
</main>

<?php require_once 'include/templates/footer.php' ?>