<!doctype html>
<html lang="en">
 <head>
  <meta charset="UTF-8">
  <meta name="Generator" content="EditPlus®">
  <meta name="Author" content="">
  <meta name="Keywords" content="">
  <meta name="Description" content="">
  <title>Document</title>
 </head>
 <body>
 <form action="<?php echo $action ?>" method="post" >
 	<input type="hidden" name="id" value="<?php echo $name->id?>"/><br>
 	ชื่อ<input type="text" name="name" value="<?php echo $name->name?>"/><br>
    นามสกุล<input type="text" name="lastname" value="<?php echo $name->lastname?>"/><br>
    เบอร์โทร<input type="text" name="phone" value="<?php echo $name->phone?>"/>
    <button>ตกลง</button>
   </form>
   

 </body>
</html>
