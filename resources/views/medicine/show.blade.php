<!DOCTYPE html>
<html lang="en">
<head>
  <title>Show Product</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
  <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>
</head>
<style>
  div{
    border:1px solid black;
  }
</style>
<body>

<div class="container">
  <h2>Show Medicine</h2>
  <p></p>            
  <table class="table table-hover">
    <thead>
      <tr>
      <th>Name</th>
        <th>Form</th>
        <th>Formula</th>
        <th>Description</th>
        <th>Price</th>
        <th>Faskes TK1</th>
        <th>Faskes TK2</th>
        <th>Faskes TK3</th>
        <th>Created At</th>
        <th>Updated At</th>
        <th>Name</th>
      </tr>
    </thead>
    
    <tbody>
      <tr>
        <td>{{ $message->generic_name }}</td>
        <td>{{ $message->form }}</td>
        <td>{{ $message->restriction_formula }}</td>
        <td>{{ $message->description }}</td>
        <td>{{ $message->price }}</td>
        <td>{{ $message->faskes_tk1 }}</td>
        <td>{{ $message->faskes_tk2 }}</td>
        <td>{{ $message->faskes_tk3 }}</td>
        <td>{{ $message->created_at }}</td>
        <td>{{ $message->updated_at }}</td>
        <td>{{ $message->category->name }}</td>
      </tr>
    </tbody>

</div>
  </table>
</div>



</body>
</html>