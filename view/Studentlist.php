<table>
   
    <tr>
        <th>Name</th>
        <th>Age</th>
        <th>Description</th>
    </tr>
     
     <?php 
      foreach($students as $student){
     ?>
     <tr>
         <td><a href="index.php?Student=<?php echo $student->name; ?>"><?php echo $student->name; ?></a></td>
         <td><?php echo $student->age; ?></td>
         <td><?php echo $student->description; ?></td>
     </tr>
      <?php   } ?>

</table>