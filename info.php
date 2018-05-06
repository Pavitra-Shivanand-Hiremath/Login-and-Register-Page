<html>
  <head>
    <title>Info Page</title>
            <link rel = "stylesheet" href = "style.css">
  </head>
  <body>
    <div id = "main-wrapper">
      <h2> Information Page</h2>
      <form action = "info.php" method = "POST">
        First name:<br>
        <input type="text" name="firstname"><br>
        Last name:<br>
        <input type="text" name="lastname"></br>
        Address: </br>
        <input type = "text" name = "address"></br>
        City: </br>
        <input type = "text" name = "city"></br>
        State: </br>
        <select>
          <option value = "Alabama" title = "Alabama">Alabama</option>
          <option value = "California" title = "California">California</option>
          <option value = "Florida" title = "Florida">Florida</option>
          <option value = "Georgia" title = "Georgia">Georgia</option>
          <option value = "Texas" title = "Texas">Texas</option>
        </select></br>
        Country: </br>
        <input type = "text" name = "United States" value = "United States"></br>


      </form>
    </div>
  </body>

</html>
