<h1>edit fruit</h1>
{{$fruit}}
<h1>welcome to form</h1>
@if($errors->any())
<ul>
    @foreach($errors->all as $error)
    <li>{{ $error }}</li>
    @endforeach
</ul>
@endif
<form method="post" action="{{ route( 'update-fruit',$fruit->id) }}">
    {{ csrf_field() }}
    {{ method_field('PUT') }}
    <p>
        name:<input type="text" name="name" value="{{$fruit->name}}" placeholder="enter name">
        <br />
        @error("name")
        {{ $message }}
        @enderror
    </p>
    <p>
        price:<input type="text" name="price" value="{{ $fruit->price}}" placeholder="enter price">
        <br />
        @error("price")
        {{ $message }}
        @enderror

    </p>
    <p>
        <button type="submit">submit</button>
    </p>
</form>