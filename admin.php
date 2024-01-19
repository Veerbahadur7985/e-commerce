<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<style>
body {
  margin: 0;
  font-family: "Lato", sans-serif;
}

.sidebar {
  margin: 0;
  padding: 0;
  width: 200px;
  background-color: #f1f1f1;
  position: fixed;
  height: 100%;
  overflow: auto;
}

.sidebar a {
  display: block;
  color: black;
  padding: 16px;
  text-decoration: none;
}
 
.sidebar a.active {
  background-color: #04AA6D;
  color: white;
}

.sidebar a:hover:not(.active) {
  background-color: #555;
  color: white;
}

div.content {
  margin-left: 200px;
  padding: 1px 16px;
  height: 1000px;
}

@media screen and (max-width: 700px) {
  .sidebar {
    width: 100%;
    height: auto;
    position: relative;
  }
  .sidebar a {float: left;}
  div.content {margin-left: 0;}
}

@media screen and (max-width: 400px) {
  .sidebar a {
    text-align: center;
    float: none;
  }
}
</style>
</head>
<body>

<div class="sidebar">
  <a class="active" href="#home">Products</a>
  <a href="#">Orders</a>
  <a href="#">Categories</a>
  <a href="#">Setting</a>
  <a href="#">Users</a>
  <a href="#">Report</a>
</div>

<div class="content">
  <h2>List of Products <a href="new_products.php">New</a></h2>
  
  <div class="row">
    <table border="2" sellpadding="2" cellspacing="2">
        <tr>
            <th>#</th>
            <th>Images</th>
            <th>Product</th>
            <th>Description</th>
            <th>Price</th>
            <th>Discount %</th>
            <th>Discounted Price</th>
            <th>Quality</th>
        </tr>
    </table>
  </div>
</div>

</body>
</html>
