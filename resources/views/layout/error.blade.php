@if(count($errors))
    <div class="xuan" role="alert">
        @foreach($errors as $error)
            <li>{{$error}}</li>
        @endforeach
    </div>
@endif