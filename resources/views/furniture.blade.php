<h1>welcome to furniture</h1>
@if($errors->any())
<ul>
@foreach($errors->all as $error)
<li>{{ $error }}</li>
@endforeach
</ul>
@endif
<form method="post" action="{{ route( 'Furniture') }}">
  {{ csrf_field() }}
    <p>
        name:<input type="text" name="name" value="{{ old('name') }}" placeholder="enter name">
        <br/>
        @error("name")
        {{ $message }}
        @enderror
    </p>
    <p>
    price:<input type="text" name="price" value="{{ old('price')}}" placeholder="enter price">
    <br/>
    @error("price")
        {{ $message }}
        @enderror

    </p>
    <p>
        <button type="submit">submit</button>
    </p>
</form>

<table>
    <tr>
        <td>name</td>
        <td>price</td>
        <td>action</td>
    </tr>
    @foreach($furniture as $fs)
    <tr>
        <td>{{$fs->name}}</td>
        <td>{{$fs->price}}</td>
        <td colspan="2">
            
            <a href="{{route('delete-furniture',$fs->id )}}">
                <button class="btn btn-default">Delete</button>
            </a>
            <a href="{{route('edit-furniture',$fs->id )}}">edit</a>
        </td>
    </tr> 
    @endforeach
</table>