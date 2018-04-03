<!DOCTYPE html>
<html>
<head>
	<title>Registration</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
  <style>

    .registration-container{
      display: flex;
      justify-content: space-between;
      margin-top: 150px;
      margin-bottom: 30px;
    }
    td{
      width: 200px;
      height: 50px;
      text-align: center;
    }
    .table table {
      width: 100%;
    }

    select,input{
      height: 35px;
      outline: none;
      border:none;
    }
    select{
      border: 1px solid black;
    }
    .add2{
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

			<?php include 'search.php'; ?>

<div class="table">
  <table border="1">
 <tr><td>Имя</td><td>Фамилия</td><td>Email</td> <td>IP</td> <td>Дата регистрации</td> <td>Дата редактирования</td> <td>Действия</td> </tr>
 <form class="" action="" method="post">
   <tr><td> <input type="text" name="name" required> </td><td> <input type="text" name="suarname"required> </td><td> <input type="text" name="email"required> </td><td> <input type="text" name="ip"required> </td> <td> <input type="text" name="created_at"> </td><td> <input type="text" name="updated_at"> </td> <td> <input type="text" name=""> </td> </tr>
   <input type="submit" class="add2"name="" value="+Добавить запись">
 </form>
 </table>
</div>


  </body>
  <footer>

  </footer>

</html>
