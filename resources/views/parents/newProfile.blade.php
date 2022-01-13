Новый профиль родителя
<form action="/parent/store" method="post">
    @csrf
    <input type="text" name="user_id" value="{{$user_id}}" style="display: none">
    <input type="text" name="secondname" placeholder="Фамилия">
    <input type="text" name="firstname" placeholder="Имя">
    <input type="text" name="patronymic" placeholder="Отчество">
<button type="submit">Сохранить</button>
</form>
