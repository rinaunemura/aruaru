@if (Auth::id() != $user->id)
    @if (Auth::user()->is_arune($user->id))
        {!! Form::open(['route' => ['user.notarune', $user->id], 'method' => 'delete']) !!}
            {!! Form::submit('notarune()', ['class' => "btn btn-danger btn-block"]) !!}
        {!! Form::close() !!}
    @else
        {!! Form::open(['route' => ['user.arune', $user->id]]) !!}
            {!! Form::submit('Arune', ['class' => "btn btn-primary btn-block"]) !!}
        {!! Form::close() !!}
    @endif
@endif