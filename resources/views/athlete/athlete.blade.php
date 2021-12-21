<form action="/athlete" method="post">
    @csrf
<select name="group" id="">
    @foreach($groups as $group)
        <option value="{{$group->id}}">{{$group->title}}</option>
    @endforeach
</select>
    <input type="submit">
</form>

@foreach($groups as $group)
    {{$group->title}}<br>
    @foreach($group->athletes as $athlete)
   {{$athlete->firstname}}<br>
    @endforeach
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


