
<form action="{{route('ajout')}}" method="post">
    @csrf
    name:<input type="text" name="name">
    @error('name')
    <div >{{$message}}</div>
    @enderror
    description:<input type="text" name="description">
    @error('description')
    <div >{{$message}}</div>
    @enderror
    price:<input type="text" name="price">
    @error('price')
    <div >{{$message}}</div>
    @enderror
    stock:<input type="text" name="stock">
    @error('stock')
    <div >{{$message}}</div>
    @enderror

    <select name="category_id">

        @foreach ($p as $item)
            <option value="{{ $item->id }}" >{{ $item->name }}
            </option>
        @endforeach
    </select>

    <select name="cats[]" multiple>

        @foreach ($c as $catalogue)
            <option value="{{ $item->id }}"  {{in_array($catalogue->id,old('cats') ? : []) ? 'selected' : ''}}>{{ $item->name }}
            </option>
        @endforeach
    </select>

    <input type="submit" value="valider">
</form>
