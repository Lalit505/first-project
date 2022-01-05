<h1>welcome to form</h1>
@if($errors->any())
<ul>
@foreach($errors->all as $error)
<li>{{ $error }}</li>
@endforeach
</ul>
@endif
<form method="post" action="{{ route( 'my-form') }}">
  {{ csrf_field() }}
    <p>
        name:<input type="text" name="name" value="{{ old('name') }}" placeholder="enter name">
        <br/>
        @error("name")
        {{ $message }}
        @enderror
    </p>
    <p>
        email:<input type="email" name="email" value="{{ old('email') }}" placeholder="enter email">
        <br/>
        @error("email")
        {{ $message }}
        @enderror
    </p>
    <p>
        mobile:<input type="text" name="mobile" value="{{ old('mobile')}}" placeholder="enter mobile">
        <br/>
         @error("mobile")
         {{ $message }}
         @enderror
    </p>
    <p>
        <button type="submit">submit</button>
    </p>
</form>