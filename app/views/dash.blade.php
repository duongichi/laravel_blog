<div>
    <div>
        @if(Session::has('success'))
        <div>
            {{Session::get('success')}}
            <a href="#">&times;</a>
        </div>
        @endif
        {{$content}}
    </div>
</div>
