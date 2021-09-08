<h1>Tambah Data Produk</h1>
<form action="/products" method="POST">
    @csrf 
    <div >
        Name
        <input type="text"  Name="name" placeholder="name"> 
    </div>
    <div>
        <label for="description" >Description</label>
        <input type="text"  Name="description" placeholder="description">
    </div>
    <div>
        <label for="price" >Price</label>
        <input type="Number"  Name="price" placeholder="price">
    </div>   
    <div >
        Image URL
        <input type="text"  Name="image_url" placeholder="image_url"> 
    </div>
    <input type="submit" value="simpan">
   
</form>