Добавить паспорт

{{--{{$athlete->secondname}} {{$athlete->firstname}} {{$athlete->patronymic}}<br>--}}
<form action="/athlete/passport/update" method="post" enctype="multipart/form-data">
    @csrf
    <input type="text" name="id" placeholder="ID">
    <input type="text" name="series" placeholder="Серия">
    <input type="text" name="number" placeholder="Номер">
    <input type="date" name="dateissue" placeholder="Дата выдачи">
    <input type="text" name="issuedby" placeholder="Кем выдан">
    <input type="text" name="cod" placeholder="Код подразделения">
    <input type="text" name="scanlink" placeholder="Скан">

    <button type="submit">Добавить</button>
</form>


