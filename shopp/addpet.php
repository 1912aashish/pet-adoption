<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>products</title>

   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">

   <!-- custom admin css file link  -->
   <link rel="stylesheet" href="style.css">

</head>
<body>
   
<?php @include 'header.php'; ?>

<section class="add-pets">

   <form action="" method="POST" enctype="multipart/form-data">
      <h3>add new pet</h3>
      <input type="text" class="box" required placeholder="enter pet name" name="name">
      <input type="number" min="0" class="box" required placeholder="enter pet price" name="price">
      <textarea name="details" class="box" required placeholder="enter pet details" cols="30" rows="10"></textarea>
      <input type="file" accept="image/jpg, image/jpeg, image/png" required class="box" name="image">
      <input type="submit" value="add product" name="add_product" class="btn">
   </form>

</section>
<script src="js/admin_script.js"></script>

</body>
</html>