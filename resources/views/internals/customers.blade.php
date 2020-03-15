@extends('layouts.app')

@section('content')
<h1>Customers</h1>

<form action="customers" method="POST" class="pb-5">
  <div class="input-group">
    <input type="text" name="name">
  </div>

  <button type="submit">Add customer</button>

  @csrf
</form>

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