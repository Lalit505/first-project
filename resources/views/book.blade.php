<h1>welcome to my book table</h1>
@if($errors->any())
<ul>
    @foreach($errors->all as $error)
    <li>{{ $error }}</li>
    @endforeach
</ul>
@endif
<form method="post" action="{{ route( 'book') }}">
<select name="id">
<option value="1">science</option>
<option value="2">social</option>
</select>

    {{ csrf_field() }}
    <p>
        title:<input type="text" name="title" value="{{ old('title') }}" placeholder="enter title">
        <br />
        @error("title")
        {{ $message }}
        @enderror
    </p>
    <p>
        writer_name:<input type="text" name="writer_name" value="{{ old('writer_name') }}" placeholder="enter writer_name">
        <br />
        @error("writter_name")
        {{ $message }}
        @enderror
    </p>
    <p>
        price:<input type="text" name="price" value="{{ old('price') }}" placeholder="enter price">
        <br />
        @error("price")
        {{ $message }}
        @enderror
    </p>
    <p>
        publication:<input type="text" name="publication" value="{{ old('publication')}}" placeholder="enter publication">
        <br />
        @error("publication")
        {{ $message }}
        @enderror
    </p>
    <p>
        <button type="submit">submit</button>
    </p>


</form>
<table>
    <tr>
        <td>title</td>
        <td>price</td>
        <td>action</td>
    </tr>
    @foreach($book as $bk)
    <tr>
        <td>{{$bk->title}}</td>
        <td>{{$bk->price}}</td>
        <td colspan="2">
            
            <a href="{{route('delete-book',$bk->id )}}">
                <button class="btn btn-default">Delete</button>
            </a>
            <!-- <a href="#"onclick="deletebook({{$bk->id}});"class="btn btn-danger">delete</a> -->
            <a href="/update-book/{'.$bk->id.'}">edit</a>
        </td>
    </tr>
    @endforeach
</table>
