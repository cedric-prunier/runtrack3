<!DOCTYPE html>
<html>
<head>
  <title>Jeu du Taquin</title>
  <style>
    #board {
      display: grid;
      grid-template-columns: repeat(3, 1fr);
      grid-gap: 5px;
      width: 300px;
      margin-bottom: 10px;
    }
    .tile {
      width: 100px;
      height: 100px;
      border: 1px solid black;
      display: flex;
      align-items: center;
      justify-content: center;
      cursor: pointer;
    }
    .green {
      color: green;
    }

    img {
      width: 100px;
      height: 100px;
    }
  </style>
</head>
<body>
  <div id="board"></div>
  <p id="message"></p>
  <button id="restartButton" style="display: none;">Recommencer</button>

  <script>
    let tiles = [];
    let emptyIndex;
    let moves = 0;
    let isGameOver = false;

    function createBoard() {
      let board = document.getElementById("board");
      for (let i = 0; i < 9; i++) {
        let tile = document.createElement("div");
        tile.className = "tile";

        if (i !== 8) {
          let image = document.createElement("img");
          image.src = "logo" + (i + 1) + ".png";
          image.alt = "Image " + (i + 1);
          tile.appendChild(image);
        }

        tile.addEventListener("click", function () {
          if (!isGameOver) {
            let index = tiles.indexOf(this);
            if (isAdjacent(index, emptyIndex)) {
              swapTiles(index, emptyIndex);
              moves++;
              updateBoard();
              checkWin();
            }
          }
        });

        tiles.push(tile);
        board.appendChild(tile);
      }

      emptyIndex = 8;
      tiles[emptyIndex].innerHTML = "";
    }

    function isAdjacent(index1, index2) {
      let row1 = Math.floor(index1 / 3);
      let col1 = index1 % 3;
      let row2 = Math.floor(index2 / 3);
      let col2 = index2 % 3;
      return (
        (Math.abs(row1 - row2) === 1 && col1 === col2) ||
        (row1 === row2 && Math.abs(col1 - col2) === 1)
      );
    }

    function swapTiles(index1, index2) {
      let temp = tiles[index1];
      tiles[index1] = tiles[index2];
      tiles[index2] = temp;
    }

    function shuffleTiles() {
      for (let i = tiles.length - 1; i > 0; i--) {
        let j = Math.floor(Math.random() * (i + 1));
        swapTiles(i, j);
      }
      moves = 0;
      isGameOver = false;
      updateBoard();
    }

    function updateBoard() {
      let board = document.getElementById("board");
      board.innerHTML = "";
      for (let i = 0; i < tiles.length; i++) {
        board.appendChild(tiles[i]);
      }
    }

    function checkWin() {
      let isCorrect = true;
      for (let i = 0; i < tiles.length; i++) {
        let tileHTML = tiles[i].innerHTML;
        let tileNumber = i + 1;
        if (
          tileHTML !== "" &&
          tileHTML !== `<img src="logo${tileNumber}.png" alt="Image ${tileNumber}">`
        ) {
          isCorrect = false;
          break;
        }
      }

      if (tiles[emptyIndex].innerHTML !== "") {
        isCorrect = false;
      }

      if (isCorrect) {
        isGameOver = true;
        let message = document.getElementById("message");
        message.textContent = "Vous avez gagné";
        message.className = "green";
        let restartButton = document.getElementById("restartButton");
        restartButton.style.display = "block";
      }
    }

    function restartGame() {
      tiles = [];
      emptyIndex = 8;
      moves = 0;
      isGameOver = false;
      createBoard();
      let message = document.getElementById("message");
      message.textContent = "";
      message.className = "";
      let restartButton = document.getElementById("restartButton");
      restartButton.style.display = "none";
      shuffleTiles();
    }

    createBoard();
    shuffleTiles();

    let restartButton = document.getElementById("restartButton");
    restartButton.addEventListener("click", restartGame);
  </script>
</body>
</html>
