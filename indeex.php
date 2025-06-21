<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
   
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>
<body>
    <div class="container">
    <h1>Habit Tracker</h1>
    <form id="habit-form">
      <input type="text" id="habit-name" placeholder="Enter habit" required>
      <select id="habit-category">
        <option id="options" value="Health">Health</option>
        <option value="Study">Study</option>
        <option value="Work">Work</option>
        <option value="Sport">sport</option>
      </select>
      <button id="subutton"  type="submit">Add Habit</button>
    </form>
    <div id="habit-list"></div>
  </div>
  <script src="habit.js"></script>
</body>
</html>