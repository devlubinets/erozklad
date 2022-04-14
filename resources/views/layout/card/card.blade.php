<div class="card mb-4 rounded-3 shadow-sm border-primary">
{{--    @foreach($days as $day)--}}
        <div class="card-header py-3 text-white bg-primary border-primary">
            <h4 class="my-0 fw-normal">{{$day}}}</h4>
        </div>
        <div class="card-body"></div>
        @foreach($timetable as $lesson)
            <div>
                <a class="d-grid" target="_blank" href={{$lesson->link}}} title="ссылка на zoom">{{$lesson->schoolSubject->name}}</a>
                {{$lesson->start_time}}
                {{$lesson->status}}
            </div>
        @endforeach
{{--    @endforeach--}}
</div>
