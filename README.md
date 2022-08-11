## LaravelLibrary
localhost/library/public

* Реализованы страницы создания материала, обновления, удаления. Материал - это книга.

* Реализовано создание категорий(не до конца, в разработке, присоединение к параметру category в create-material)

* Реализована панель поиска по ключевым словам путем поиска по индексу FULLTEXT

* Реализована авторизация и регистрация пользователей, права на данный момент неограничены

* Реализованы миграции и сиды к материалам и пользователям для автозаполнения

* Реализованы PhpUnit тесты для API(не до конца, еще в разработке, composer test)



DATABASE = library



Описание API
--------

* Методы на сохранение данных через POST. 
* Методы получения данных - GET.
* Методы на удаление данных через DELETE.
* Методы обновления данных - PUT.

Ответы на запросы в виде json.


Методы:

Показать список материалов
------------
url - /materials

method - GET

Ответ содержит JSON. Пример:
```json
{
"data": [
        {
            "materials_id": 1,
            "materials_name": "Business Development Manager",
            "materials_author": "Caterina Goyette",
            "materials_type": "Книга",
            "materials_category": "Дизайн/Общее",
            "materials_description": "Repudiandae a non voluptatem soluta."
        },
        ]
 }
 ```
Сохранение параметра
--------------------
url - /materials/{id}

method - PUT

Удаления материалов
-----------------
url - /materials/{id}

method - DELETE

Создание материала
----------------------------
url - /materials/create

method - POST
