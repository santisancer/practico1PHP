<html>


<head>
  <style>
    table,
    th,
    td {
      border: 1px solid black;
    }
  </style>
</head>

<table>

  <tr>
    <th>Tabla del <?php print $_REQUEST["primer"] ?></th>
  </tr>
  <?php
  for ($i = 1; $i <= 10; $i++) {
    echo "  <tr><td>", $i, "</td><td>", $i * $_REQUEST["primer"], "</td></tr>";
  };
  ?>
</table>

<table>
  <tr>
    <th>Tabla del <?php print $_REQUEST["segundo"] ?></th>
  </tr>
  <?php
  for ($i = 1; $i <= 10; $i++) {
    echo "  <tr><td>", $i, "</td><td>", $i * $_REQUEST["segundo"], "</td></tr>";
  };
  ?>
</table>

<table>
  <tr>
    <th>Tabla del <?php print $_REQUEST["tercero"] ?></th>
  </tr>
  <?php
  for ($i = 1; $i <= 10; $i++) {
    echo "  
      <tr>
        <td>", $i, "</td>
        <td>", $i * $_REQUEST["tercero"], "</td>
      </tr>";
  };
  ?>
</table>
<html>