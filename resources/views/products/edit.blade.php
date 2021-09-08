<h1>edit Data Produk</h1>
<form action="/products/{{ $product->id }}" method="POST">
    @method('PUT')
    @csrf 
    <div >
        Name
        <input type="text"  Name="name" placeholder="name" value="{{ $product->name }}"> 
    </div>
    <div>
        Description
        <input type="text"  Name="description" placeholder="description" value="{{ $product->description }}">
    </div>
    <div>
        <label for="price" >Price</label>
        <input type="Number"  Name="price" placeholder="price" value="{{ $product->price }}">
    </div>   
    <div >
        Image URL
        <input type="text"  Name="image_url" placeholder="image_url" value="{{ $product->image_url }}"> 
    </div>
    <input type="submit" value="simpan">
   
</form>