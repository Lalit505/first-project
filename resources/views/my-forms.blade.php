<h1>welcome to form</h1>
<!-- @if($errors->any())
<ul>
@foreach($errors->all()as $error)
<li>{{ $error }}</li>
</ul>
@endif -->
<form method="post" action="{{ route( 'my-forms') }}">
  @csrf 
    <p>
        name:<input type="text" name="name" placeholder="enter name">
        <br>
        <!-- @error("name") -->
        <!-- {{$message}} -->
        <!-- @enderror -->
    </p>
    <p>
        email:<input type="email" name="email" placeholder="enter email">
    </p>
    <p>
        mobile:<input type="text" name="mobile" placeholder="enter mobile">
    </p>
    <p>
        <button type="submit">submit</button>
    </p>
</form>