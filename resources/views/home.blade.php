@extends('layouts.app')

@section('contant')
<h1>home</h1>
 <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Vel voluptate nostrum cumque explicabo nam maxime, quidem temporibus repellat dignissimos et repudiandae non obcaecati illo dolore! Doloribus, ipsum? Ipsam, quam sint? </p>
@endsection

@section('sidebar')
 @parent
    <h1>this is a child sidebar</h1>
@endsection
