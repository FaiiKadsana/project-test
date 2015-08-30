<?php echo "pass";?>
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
 <?php echo $test ;?>//แสดงค่าตัวแปลต่างๆ
 <form action="<?php echo $action ?>" method="post">
 
 	ชื่อ<input type="text" name="name"/><br>
    นามสกุล<input type="text" name="lastname"/><br>
    เบอร์โทร<input type="text" name="phone"/>
    <button>ตกลง</button>
   </form>
   
   <?php foreach($name as $row){?>
	    <?php echo $row->name; ?>
        <a href="<?php echo base_url('index/delete/'.$row->id)?>">click</a>
         <a href="<?php echo base_url('index/edit/'.$row->id)?>">edit</a>
        <br/>
    
	   
	  <?php } ?>    
      
 </body>
</html>
