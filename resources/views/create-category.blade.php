@include('layouts.header')
@include('layouts.app')
        <div class="container">
            <h1 class="my-md-5 my-4">Добавить категорию</h1>
            <div class="row">
                <div class="col-lg-5 col-md-8">
                    <form method="post" action="insertCategory">
                        @csrf
                        <div class="form-floating mb-3">
                            <input name="category" type="text" class="form-control" placeholder="Напишите название" id="floatingName" value="">
                            <label for="floatingName">Название</label>
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
