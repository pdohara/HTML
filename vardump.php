<html>
  <head>
    <title>Dump Variables</title>
  </head>
  <body>
    <h1>Values</h1>
    <ul>
    <?php
      foreach(array_keys($_REQUEST) as $varName)
      {
        echo "    <li><em>$varName - $_REQUEST[$varName]</li>";
      }
     ?>
    </ul>
  </body>
</html>
