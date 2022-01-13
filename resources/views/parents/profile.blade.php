Действующий профиль родителя

{{$parent->secondname}} {{$parent->firstname}} {{$parent->patronymic}}<br>
<form action="/parent/addChildren/{{$parent->id}}" method="post">
    @csrf
    <input type="text" name="id" value="{{$parent->id}}" style="display: none">
<strong>Дети:</strong> <br>

    <input type="text" name="id" style="display: none">
    <input type="text" name="secondname" placeholder="Фамилия">
    <input type="text" name="firstname" placeholder="Имя">
    <input type="text" name="patronymic" placeholder="Отчество">
    <input type="date" name="dateofbirth" placeholder="Дата рождения">
    <select type="text" name="gender">
        <option value="male">Мужской</option>
        <option value="female">Женский</option>
    </select><br>
    Паспорт:
    <input type="text" name="series" placeholder="Серия">
    <input type="text" name="number" placeholder="Номер">
    <input type="date" name="dateissue" placeholder="Дата выдачи">
    <input type="text" name="cod" placeholder="Код подразделения">

    <button type="submit">Изменить</button>
</form>

@foreach($parent->athletes as $athlete)
    {{$athlete->secondname}} {{$athlete->firstname}} {{$athlete->patronymic}}<br>
    <a href="/athlete/{{$athlete->id}}">Редактировать</a>
@endforeach

