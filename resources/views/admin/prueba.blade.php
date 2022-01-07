@extends('adminlte::page')
@section('content')

{{ $user }}

<br>
<br>
<br>
<br>
<br>
{{  $user->getRoleNames() }}

@stop
