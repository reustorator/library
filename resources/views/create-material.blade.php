<!doctype html>
<html lang="ru">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Материалы</title>
</head>
<body>
<div class="main-wrapper">
    <div class="content">
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <div class="container">
                <a class="navbar-brand" href="#">Test</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                        aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="list-materials">Материалы</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="list-tag">Теги</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="list-category">Категории</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
        <div class="container">
            <h1 class="my-md-5 my-4">Добавить материал</h1>
            <div class="row">
                <div class="col-lg-5 col-md-8">
                    <form action="insertMaterial" method ="post">
                        @csrf
                        <div class="form-floating mb-3">
                            <select class="form-select" id="floatingSelectType" name="type" required>
                                <option selected>Выберите тип</option>
                                <option value="Книга">Книга</option>
                                <option value="Статья">Статья</option>
                                <option value="Видео">Видео</option>
                                <option value="Сайт/Блог">Сайт/Блог</option>
                                <option value="Подборка">Подборка</option>
                                <option value="Ключевые идеи книги">Ключевые идеи книги</option>
                            </select>
                            <label for="floatingSelectType">Тип</label>
                            <div class="invalid-feedback">
                                Пожалуйста, выберите значение
                            </div>
                        </div>
                        <div class="form-floating mb-3">
                            <select class="form-select" id="floatingSelectCategory" name="category" required>
                                <option selected>Выберите категорию</option>
                                <option value="Деловые/Бизнес-процессы">Деловые/Бизнес-процессы</option>
                                <option value="Деловые/Найм">Деловые/Найм</option>
                                <option value="Деловые/Реклама">Деловые/Реклама</option>
                                <option value="Деловые/Управление бизнесом">Деловые/Управление бизнесом</option>
                                <option value="Деловые/Управление людьми">Деловые/Управление людьми</option>
                                <option value="Деловые/Управление проектами">Деловые/Управление проектами</option>
                                <option value="Детские/Воспитание">Детские/Воспитание</option>
                                <option value="Дизайн/Общее">Дизайн/Общее</option>
                                <option value="Дизайн/Logo">Дизайн/Logo</option>
                                <option value="Дизайн/Web дизайн">Дизайн/Web дизайн</option>
                                <option value="Разработка/PHP">Разработка/PHP</option>
                                <option value="Разработка/HTML и CSS">Разработка/HTML и CSS</option>
                                <option value="Разработка/Проектирование">Разработка/Проектирование</option>
                            </select>
                            <label for="floatingSelectCategory">Категория</label>
                            <div class="invalid-feedback">
                                Пожалуйста, выберите значение
                            </div>
                        </div>
                        <div class="form-floating mb-3">
                            <input type="text" class="form-control" placeholder="Напишите название" id="floatingName" name="name" required>
                            <label for="floatingName">Название</label>
                            <div class="invalid-feedback">
                                Пожалуйста, заполните поле
                            </div>
                        </div>
                        <div class="form-floating mb-3">
                            <input type="text" class="form-control" placeholder="Напишите авторов" id="floatingAuthor" name="author">
                            <label for="floatingAuthor">Авторы</label>
                            <div class="invalid-feedback">
                                Пожалуйста, заполните поле
                            </div>
                        </div>
                        <button class="btn btn-primary" type="submit">Добавить</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <footer class="footer py-4 mt-5 bg-light">
        <div class="container">
            <div class="row">
                <div class="col text-muted">Test</div>
            </div>
        </div>
    </footer>
</div>
<!-- Optional JavaScript; choose one of the two! -->

<!-- Option 1: Bootstrap Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4"
        crossorigin="anonymous"></script>
<script src="../js/app.js"></script>
<script src="../js/bootstrap.js"></script>
<script src="../js/bootstrap.esm.js"></script>
<script src="../js/bootstrap.bundle.js"></script>

</body>
</html>
