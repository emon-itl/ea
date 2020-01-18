<!DOCTYPE html>
<html>
<head>
<style>
table {
  font-family: arial, sans-serif;
  border-collapse: collapse;
  width: 100%;
}

td, th {
  border: 1px solid #dddddd;
  text-align: left;
  padding: 8px;
}

tr:nth-child(even) {
  background-color: #dddddd;
}
</style>
</head>
<body>

<h2>Products Details</h2>

<table>
  <tr>
    <th>Product ID</th>
    <th>Product Name</th>
    <th>Product Price</th>
  </tr>
  @foreach ($products as $product)
<tr>
<td>{{ $product->product_id }}</td>
<td>{{ $product->product_name }}</td>
<td>{{ $product->product_price }}</td>
</tr>
@endforeach
</table>

</body>
</html>
