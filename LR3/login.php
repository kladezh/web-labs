<?php
require_once 'include/m_login.php';

if(isset($_POST['submit'])){
    db_connect($db_config);

    $errors = check_login_input();

    if (!array_filter($errors)) {
        if(login()){ // session_start()
            header('location: index.php');
            die();
        } else {
            $errors['password'] = 'not_found';
        }
    }    
}
?>

<?php require_once 'include/templates/header.php' ?>

<main>
<section class="login">
        <div class="container">
            <div class="col-5 mx-auto my-5">
                <form action="login.php" method="POST">
                    <div class="mb-3">
                        <label for="inputEmail" class="form-label">Email</label>
                        <input name="email" type="email" class="form-control" id="inputEmail" placeholder="example@example.com"  value="<?= htmlspecialchars($_POST['email'] ?? null) ?>" novalidate>
                        <div class="form-errors">
                            <?php
                            if(isset($errors)){
                                echo match ($errors['email']) {
                                    'empty' => 'заполните поле',
                                    'invalid' => 'данная запись не является email-адресом',
                                    default => null
                                };
                            }                            
                            ?>
                        </div>
                    </div>
                    <div class="mb-3">
                        <label for="inputPassword" class="form-label">Пароль</label>
                        <input name="password" type="password" class="form-control" id="inputPassword" placeholder="**********" novalidate>
                        <div class="form-errors">
                            <?php
                            if(isset($errors)){
                                echo match ($errors['password']) {
                                    'empty' => 'заполните поле',
                                    'not_found' => 'неверно указана почта или пароль',
                                    default => null
                                };
                            }
                            ?>
                        </div>
                    </div>
                    <button name="submit" value="submit" type="submit" class="btn btn-primary btn-lg w-100 px-4 mt-2">Войти</button>
                    <div class="form-group mt-2">
                        <p class="text-center">Ещё нет аккаунт? <a href="signup.php">Зарегистрируйтесь</a></p>
                    </div>
                </form>
            </div>
        </div>
    </section>
</main>

<?php require_once 'include/templates/footer.php' ?>