@foreach ($users as $user)
    <h1>{{ $user['name'] }}</h1>
    <h2>{{ $user['age'] }}</h2>

    @if( $user['age'] < 18 )
    <p>{{ $user['name'] }} cant drive</p>
    @endif
    <hr>
@endforeach