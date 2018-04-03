<!DOCTYPE html>
<html>
<head>
	<title>Registration</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
  <style>
  body{
    margin-left: 150px;
    margin-right: 150px;
  }
	.hide{
		display: none;
	}
    .registration-container{
      display: flex;
      justify-content: space-between;
      margin-top: 150px;
      margin-bottom: 30px;
			z-index: 100;
    }
    td{
      width: 200px;
      height: 50px;
      text-align: center;
    }
    .delete{
    	margin-left: 840px;
			margin-bottom: 25px;
    }
		.table{
			margin-top: -67px;
		}
    .table table {
      width: 100%;
    }

    select,input{
      width: 200px;
      height: 35px;
      outline: none;
      border-radius: 5px;

    }
		.months,
		.search{
			z-index: 100;
		}
    select{
      border: 1px solid black;

    }
    #bpress{
      width: 100px;
      color: white;
      background-color: #29ABE2;
      border: none;
      cursor: pointer;
    }
    .new-entry input{
      width: 160px;
      color: white;
      background-color: #39B54A;
      cursor: pointer;
      border: none;
    }
    #s{
      border: 1px solid black;
    }
  </style>
</head>
  <body>

    <section class="registration-container">

      <!-- months -->
      <div class="months">
        <form class="" action="" name="months" method="post">
          <select class="" name="option[]">
            <option>Выберите месяц</option>
            <option value="01" >Январь</option>
            <option value="02" >Февраль</option>
            <option value="03" >Март</option>
            <option value="04" >Апрель</option>
            <option value="05" >Май</option>
            <option value="06" >Июнь</option>
            <option value="07" >Июль</option>
            <option value="08" >Август</option>
            <option value="09" >Сентябрь</option>
            <option value="10" >Октябрь</option>
            <option value="11" >Ноябрь</option>
            <option value="12" >Декабрь</option>
          </select>
		<input id="bpress" type="submit" name="" value="Искать">
        </form>
      </div>

      <!-- search  -->
      <div class="search">
        <form class="" action="index.php" method="post">
          <input id="s" type="text" name="search" value="" placeholder="Text search(по всем полям)" >
          <input id="bpress" type="submit" name="button" value="Искать">
        </form>
      </div>



			<?php include 'search.php'; ?>


      <!-- create new entry -->
      <div class="new-entry">
        <form class="" name="add" action="insert.php" method="post">
          <input type="submit" name="" value="+Создать новую запись">
        </form>
      </div>
    </section>

    <!-- table -->
<div class="table">
  <table border="1">
 <tr><td>Имя</td><td>Фамилия</td><td>Email</td> <td>IP</td> <td>Дата регистрации</td> <td>Дата редактирования</td> <td>Действия</td> </tr>
<form class="" action="index.php" method="post">
	<input id="bpress" class="delete" type="submit" name="delete" value="Очистить">
	<?php if(isset($_POST['option'])): ?>
 <?php foreach ($resultsByMonthsArray as $key1 ):?>
	 <?php $sub = substr($key1['created_at'], 5,5); ?>
	 <?php $expl = explode("-",$sub); ?>
 	<?php if($months[0] == $expl[0]): ?>
   <tr><td> <?php echo $key1['first_name']; ?> </td><td><?php echo $key1['last_name']; ?></td><td><?php echo $key1['email']; ?></td><td><?php echo $key1['ip'];?></td> <td><?php echo $key1['created_at']; ?></td><td><?php echo $key1['updated_at']; ?></td> <td></td> </tr>
  <?php endif; ?>
<?php endforeach; ?>
<?php endif; ?>

<?php if(isset($_POST['search'])): ?>
<?php foreach ($resultArray as $key ): ?>
 <tr><td> <?php echo $key['first_name']; ?> </td><td><?php echo $key['last_name']; ?></td><td><?php echo $key['email']; ?></td><td><?php echo $key['ip'];?></td> <td><?php echo $key['created_at']; ?></td><td><?php echo $key['updated_at']; ?></td> <td></td> </tr>
<?php endforeach; ?>
<?php endif; ?>
</form>
<tr><td></td><td></td><td></td><td></td> <td></td><td></td> <td></td> </tr>
</table>
</div>



  </body>
  <footer>

  </footer>



</html>
