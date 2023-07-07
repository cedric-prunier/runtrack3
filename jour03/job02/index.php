<!DOCTYPE html>
<html>
<head>
  <title>Jeu de l'arc-en-ciel</title>
  <style>
    #container {
      display: flex;
      justify-content: center;
      margin-top: 20px;
    }
    .image {
      width: 100px;
      height: 100px;
      margin: 5px;
      border: 1px solid black;
      cursor: pointer;
    }
    #message {
      margin-top: 20px;
      font-weight: bold;
      text-align: center;
    }
    .green {
      color: green;
    }
    .red {
      color: red;
    }
  </style>
</head>
<body>
  <button id="shuffleButton">Mélanger</button>
  <div id="container">
    <img class="image" src="arc1.png" alt="Red" draggable="false">
    <img class="image" src="arc2.png" alt="Orange" draggable="false">
    <img class="image" src="arc3.png" alt="Yellow" draggable="false">
    <img class="image" src="arc4.png" alt="Green" draggable="false">
    <img class="image" src="arc5.png" alt="Blue" draggable="false">
    <img class="image" src="arc6.png" alt="Purple" draggable="false">
  </div>
  <p id="message"></p>


</body>
<script src="script.js"></script>
</html>
