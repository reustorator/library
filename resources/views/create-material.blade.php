@include('layouts.header')
@include('layouts.app')
        <div class="container">
            <h1 class="my-md-5 my-4">Добавить материал</h1>
            <div class="row">
                <div class="col-lg-5 col-md-8">
                    <form action="insertMaterial" method ="post">
                        @csrf
                        <div class="form-floating mb-3">
                            <select class="form-select" id="floatingSelectType" name="type" required>
                                <option value="" selected>Выберите тип</option>
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
                                <option value="" selected>Выберите категорию</option>
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
                        <div class="form-floating mb-3">
                            <input type="text" class="form-control" placeholder="Напишите описание" id="floatingAuthor" name="description" required>
                            <label for="floatingAuthor">Описание</label>
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
@include('layouts.footer')
