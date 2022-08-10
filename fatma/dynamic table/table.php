<?php
// dynamic table
// dynamic rows //4 
// dynamic columns // 4
// check if gender of user == m ==> male // 1
// check if gender of user == f ==> female // 1

$users = [
    (object)[
        'id' => 1,
        'name' => 'ahmed',
        "gender" => (object)[
            'gender' => 'm'
        ],
        'hobbies' => [
            'football', 'swimming', 'running'
        ],
        'activities' => [
            "school" => 'drawing',
            "home" => 'painting'
        ],
        'phones'=>[012312312,1231513513,89746543],
    ],
    (object)[
        'id' => 2,
        'name' => 'mohamed',
        "gender" => (object)[
            'gender' => 'm'
        ],
        'hobbies' => [
            'swimming', 'running',
        ],
        'activities' => [
            "school" => 'painting',
            'home' => 'drawing'
        ],
        'phones'=>[1231513513,89746543],
    ],
    (object)[
        'id' => 3,
        'name' => 'menna',
        "gender" => (object)[
            'gender' => 'f'
        ],
        'hobbies' => [
            'running',
        ],
        'activities' => [
            "school" => 'painting',
            'home' => 'drawing'
        ],
        'phones'=>[],
    ],  
];

?>
<!doctype html>
<html lang="en">
  <head>
    <title>Title</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  </head>
  <body>
      
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    
    <div class="container">
  <h2 class="text-primary text-center m-5">Users'Table</h2>
             
  <table class="table table-hover  table-striped table-bordered">
    <thead>
      <tr>
        <th>ID</th>
        <th>Name</th>
        <th>Gender</th>
        <th>Hobbies</th>
        <th>Activities</th>
        <th>Phones</th>
      </tr>
    </thead>
    <tbody>
      <tr><?php 
     // foreach($users[0] as $value){}
      ?>
        <td><?php print_r ($users['0'] ->id) ;?></td>
        <td><?php print_r ($users['0'] ->name) ;?></td>
        <td><?php 
        if (($users['0'] ->gender->gender)=='m'){
          echo "Male";
        } 
        else{
          echo "Female";
        }
        ?></td>
        <td><?php 
        foreach( $users['0'] ->hobbies as $value){
       echo " $value<br>";
          // print_r ($users['0'] ->hobbies) ;
      }
        ?>
        </td>
         <td>
          <?php foreach(  $users['0'] ->activities as $index => $value){
       echo "$index: $value<br>";
       }
       ?>
       </td>
       <td><?php foreach(  $users['0'] ->phones as  $value){
       echo " $value<br>";
       } ;?></td>
      </tr>
      <tr><?php 
     // foreach($users[0] as $value){}
      ?>
        <td><?php print_r ($users['1'] ->id) ;?></td>
        <td><?php print_r ($users['1'] ->name) ;?></td>
        <td><?php 
        if (($users['1'] ->gender->gender)=='m'){
          echo "Male";
        } 
        else{
          echo "Female";
        }
        ?></td>
        <td><?php 
        foreach( $users['1'] ->hobbies as $value){
       echo " $value<br>";
          // print_r ($users['0'] ->hobbies) ;
      }
        ?>
        </td>
         <td>
          <?php foreach(  $users['1'] ->activities as $index => $value){
       echo "$index: $value<br>";
       }
       ?>
       </td>
       <td><?php foreach(  $users['1'] ->phones as  $value){
       echo " $value<br>";
       } ;?></td>
      </tr>
      <tr><?php 
     // foreach($users[0] as $value){}
      ?>
        <td><?php print_r ($users['2'] ->id) ;?></td>
        <td><?php print_r ($users['2'] ->name) ;?></td>
        <td><?php 
        if (($users['2'] ->gender->gender)=='m'){
          echo "Male";
        }
        else{
          echo "Female";
        }
        ;?></td>
        <td><?php 
        foreach( $users['2'] ->hobbies as $value){
       echo " $value<br>";
          // print_r ($users['0'] ->hobbies) ;
      }
        ?>
        </td>
         <td>
          <?php foreach(  $users['2'] ->activities as $index => $value){
       echo "$index: $value<br>";
       }
       ?>
       </td>
       <td><?php foreach(  $users['2'] ->phones as  $value){
       echo " $value<br>";
       } ;?></td>
      </tr>
    </tbody>
  </table>
</div>

    
    


</body>
</html>