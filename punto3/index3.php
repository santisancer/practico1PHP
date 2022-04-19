<head>
  <style>
    table,
    th,
    td {
      border: 2px solid black;
    }
  </style>
</head>

<table>
  <tr>
    <td>
      <?php 
        echo date("l")," ", date("d")," de ", date("F"), " de ", date("o"); 
      ?>
    </td>
  </tr>


  
  <tr>
    <td>
    <?php 
      echo date("d"), "/", date("n"), "/", date("Y"); 
    ?>
    </td>
  </tr>
  <tr>
    <td>
    <?php 
      echo date("D"), " ", date("j"), " ", date("H"), ":",date("i"), " ", date("a"); 
    ?>
    </td>


  </tr>
  <tr>
    <td>
    <?php 
      echo date("W"), " semana del mes de ", date("F"); 
    ?>
    </td>
  </tr>
</table>