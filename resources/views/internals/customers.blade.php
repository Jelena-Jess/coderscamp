@extends('layouts.app')

@section('content')
<h1>Customers</h1>

<ul>
  <?php
      // foreach ($another as $customer) {
      //   echo '<li>' . $customer . '</li>';
      // }
  ?>

  @foreach ($another as $customer)
      <li>{{$customer->name}}</li>
  @endforeach
</ul>
@endsection