**Задание:**

Есть несколько моделей. User, Country, и Company.

Компания связана только с одной страной.
Пользователь может быть связан с несколькими компаниями.
Компания может быть связана с несколькими пользователями.

Пожалуйста, создайте отношения и запрос, который позволит нам получить всех пользователей, которые связаны с компаниями в данной стране (необходимо вывести все компании, включая компании из других стран). Нам также нужно будет отобразить все названия компаний, с которыми ассоциируются (в которых работали) пользователи, и даты, когда пользователь был связан с компанией.

Все, что у нас есть, это название страны:

`$country = "Канада";`

Нет необходимости создавать представления и другие избыточные файлы, маршруты и т.д. Пожалуйста, создайте метод контроллера и другие файлы для задачи. 

Ожидается что это задание решается с помощью Laravel eloquent или Symfony без raw запросов и только запросами в базу данных, без foreach

Оцениваться тестовое будет по следующим критериям:

- правильность выполнение задания;

- качество кода;

- стиль кода;

---
**Решение**

Накатить тестовые данные ``php artisan migrate --seed``

Запустить cервер ``php artisan serve``

Открыть в браузере http://127.0.0.1:8000/test
