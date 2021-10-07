@foreach($products as $product)
    {{$product->id}}
    {{$product->name}}
    <form action ='{{route('delete',$product->id)}}' method="post">
        @csrf //securit
        @method('DELETE')
        <button type="submit">delete</button>
    </form>

    <form action ='{{route('details',$product->id)}}' method="get">
        @method('GET')
        <button type="submit">details</button>
    </form>


    <form action ='{{route('show',$product->id)}}' method="get">
        @method('GET')
        <button type="submit" >edit</button>
    </form>
@endforeach()
