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
                            <a class="nav-link active" aria-current="page" href="../list-materials">Материалы</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="../list-tag">Теги</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="../list-category">Категории</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
        <div class="container">
            <h1 class="my-md-5 my-4">Добавить материал</h1>
            <div class="row">
                <div class="col-lg-5 col-md-8">
                    <form action="{{ url('update-material/'.$materials->id) }}" method = "post">
                        @csrf
                        @method('POST')
                        <div class="form-floating mb-3">
                            <select class="form-select" id="floatingSelectType" name="type" required>
                                <option value="">Выберите тип</option>
                                <option value="Книга" <?php if($materials->type == 'Книга'): ?> selected="selected"<?php endif; ?>>Книга</option>
                                <option value="Статья"<?php if($materials->type == 'Статья'): ?> selected="selected"<?php endif; ?>>Статья</option>
                                <option value="Видео"<?php if($materials->type == 'Видео'): ?>selected="selected"<?php endif; ?>>Видео</option>
                                <option value="Сайт/Блог"<?php if($materials->type == 'Сайт/Блог'): ?>selected="selected"<?php endif; ?>>Сайт/Блог</option>
                                <option value="Подборка"<?php if($materials->type == 'Подборка'): ?>selected="selected"<?php endif; ?>>Подборка</option>
                                <option value="Ключевые идеи книги"<?php if($materials->type == 'Ключевые идеи книги'): ?>selected="selected"<?php endif; ?>>Ключевые идеи книги</option>
                            </select>
                            <label for="floatingSelectType">Тип</label>
                            <div class="invalid-feedback">
                                Пожалуйста, выберите значение
                            </div>
                        </div>
                        <div class="form-floating mb-3">
                            <select class="form-select" id="floatingSelectCategory" name="category" required>
                                <option value="">Выберите категорию</option>
                                <option value="Деловые/Бизнес-процессы"<?php if($materials->category == 'Деловые/Бизнес-процессы'): ?>selected="selected"<?php endif; ?>>Деловые/Бизнес-процессы</option>
                                <option value="Деловые/Найм"<?php if($materials->category == 'Деловые/Найм'): ?>selected="selected"<?php endif; ?>>Деловые/Найм</option>
                                <option value="Деловые/Реклама"<?php if($materials->category == 'Деловые/Реклама'): ?>selected="selected"<?php endif; ?>>Деловые/Реклама</option>
                                <option value="Деловые/Управление бизнесом"<?php if($materials->category == 'Деловые/Управление бизнесом'): ?>selected="selected"<?php endif; ?>>Деловые/Управление бизнесом</option>
                                <option value="Деловые/Управление людьми"<?php if($materials->category == 'Деловые/Управление людьми'): ?>selected="selected"<?php endif; ?>>Деловые/Управление людьми</option>
                                <option value="Деловые/Управление проектами"<?php if($materials->category == 'Деловые/Управление проектами'): ?>selected="selected"<?php endif; ?>>Деловые/Управление проектами</option>
                                <option value="Детские/Воспитание"<?php if($materials->category == 'Детские/Воспитание'): ?>selected="selected"<?php endif; ?>>Детские/Воспитание</option>
                                <option value="Дизайн/Общее"<?php if($materials->category == 'Дизайн/Общее'): ?>selected="selected"<?php endif; ?>>Дизайн/Общее</option>
                                <option value="Дизайн/Logo"<?php if($materials->category == 'Дизайн/Logo'): ?>selected="selected"<?php endif; ?>>Дизайн/Logo</option>
                                <option value="Дизайн/Web дизайн"<?php if($materials->category == 'Дизайн/Web дизайн'): ?>selected="selected"<?php endif; ?>>Дизайн/Web дизайн</option>
                                <option value="Разработка/PHP"<?php if($materials->category == 'Разработка/PHP'): ?>selected="selected"<?php endif; ?>>Разработка/PHP</option>
                                <option value="Разработка/HTML и CSS"<?php if($materials->category == 'Разработка/HTML и CSS'): ?>selected="selected"<?php endif; ?>>Разработка/HTML и CSS</option>
                                <option value="Разработка/Проектирование"<?php if($materials->category == 'Разработка/Проектирование'): ?>selected="selected"<?php endif; ?>>Разработка/Проектирование</option>
                            </select>
                            <label for="floatingSelectCategory">Категория</label>
                            <div class="invalid-feedback">
                                Пожалуйста, выберите значение
                            </div>
                        </div>
                        <div class="form-floating mb-3">
                            <input type="text" class="form-control" placeholder="Напишите название" id="floatingName" name="name" value="<?php echo $materials->name; ?>" required>
                            <label for="floatingName">Название</label>
                            <div class="invalid-feedback">
                                Пожалуйста, заполните поле
                            </div>
                        </div>
                        <div class="form-floating mb-3">
                            <input type="text" class="form-control" placeholder="Напишите авторов" id="floatingAuthor" name="author" value="<?php echo $materials->author; ?>">
                            <label for="floatingAuthor">Авторы</label>
                            <div class="invalid-feedback">
                                Пожалуйста, заполните поле
                            </div>
                        </div>
                        <div class="form-floating mb-3">
                            <input type="text" class="form-control" placeholder="Напишите описание" id="floatingAuthor" name="description" value="<?php echo $materials->description; ?>" required>
                            <label for="floatingAuthor">Описание</label>
                            <div class="invalid-feedback">
                                Пожалуйста, заполните поле
                            </div>
                        </div>
                        <button class="btn btn-primary" type="submit">Обновить</button>
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
