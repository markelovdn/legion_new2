<form action="/athlete" method="post">
    @csrf
<select name="group" id="">
    @foreach($groups as $group)
        <option value="{{$group->id}}">{{$group->title}} {{$group->departments->organization->fulltitle}}</option>
    @endforeach
</select>
    <input type="submit">
</form>

@foreach($groups as $group)
    <strong>{{$group->title}} {{$group->departments->organization->fulltitle}}</strong>
    <br>
    @foreach($group->athletes as $athlete)
   {{$athlete->firstname}}<br>
    @endforeach
@endforeach

<br>
<h1>Список:</h1>

@foreach($athletes as $athlete)
    {{$athlete->firstname}}
@endforeach

{{$groups[1]['title']}}

{{--@foreach($group->athletes as $athlete)--}}
{{--    {{$athlete->firstname}} {{$athlete->secondname}} {{$athlete->patronymic}}<br>--}}
{{--@endforeach--}}

{{--@foreach($athlete->coaches as $coach)--}}
{{--    {{$coach->pivot->coach_type}}-{{$coach->firstname}}<br>--}}
{{--@endforeach--}}

{{--    @foreach($athlete->organizations as $org)--}}
{{--        {{$org->fulltitle}}<br>--}}
{{--    @endforeach--}}

{{--@foreach($organizations as $org)--}}
{{--    {{$org->fulltitle}}<br>--}}
{{--    @foreach($org->departments as $dep)--}}
{{--            {{$dep->fulltitle}}<br>--}}
{{--        @endforeach--}}
{{--@endforeach--}}


