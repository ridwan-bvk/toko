<h2>list produk</h2>
<h3>{{ $subjudul }}</h3>
<table>
    <thead>
        <th>name</th>
        <th>Description</th>
        <th>Price</th>
    </thead>
    <tbody>
        @foreach ($products as $product )
            <tr>
                <td>{{ $product -> name }}</td>
                <td>{{ $product -> description }}</td>
                <td>{{ $product -> price }}</td>  
            </tr>
        @endforeach
    </tbody>
    <a href="/products/create">tambah data</a>
</table>