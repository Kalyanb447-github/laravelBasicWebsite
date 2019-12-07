@extends('layouts.app')

@section('contant')
<h1>Messages</h1>
 @if (count($messages) >0 )
  @foreach ( $messages as $message)
      <ul class="list-group">
          <li class="list-group-item">
              Name : {{$message->name}}
          </li>
          <li class="list-group-item">
                Email : {{$message->email}}
          </li>
            <li class="list-group-item">
                 Message : {{$message->messages}}
            </li>
      </ul>
      <br>

  @endforeach
 @endif
@endsection

@section('sidebar')
 @parent
    <h1>this is a child sidebar</h1>
@endsection
