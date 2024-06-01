<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css"
      integrity="sha512-+4zCK9k+qNFUR5X+cKL9EIR+ZOhtIloNl9GIKS57V1MyNsYpYcUrUeQc9vNfzsWfV28IaLL3i96P9sdNyeRssA=="
      crossorigin="anonymous"
    />
    <link rel="stylesheet" href="./assets/css/history.css" />
    <title>History</title>
  </head>
  <body>
    <button class="clear btn" id="clear">
      <i class="fas fa-trash"></i> Clear Cards
    </button>
    <h1>
      A brief History
      <button id="show" class="btn">
        <i class="fas fa-plus"></i> Add New Card
      </button>
    </h1>
    <div id="cards-container" class="cards"></div>
    <div class="navigation">
      <button id="prev" class="nav-button">
        <i class="fas fa-arrow-left"></i>
      </button>
      <p id="current"></p>
      <button id="next" class="nav-button">
        <i class="fas fa-arrow-right"></i>
      </button>
    </div>
    <div id="add-container" class="add-container">
      <h1>
        
        <button id="hide" class="btn btn-small btn-ghost">
          <i class="fas fa-times"></i>
        </button>
      </h1>
      <div class="form-group">
        <label for="question">Question</label>
        <textarea id="question" placeholder="Enter Question..."></textarea>
      </div>

      <div class="form-group">
        <label for="answer">Answer</label>
        <textarea id="answer" placeholder="Enter Answer..."></textarea>
      </div>

      <button id="add-card" class="btn btn-margin">
        <i class="fas fa-plus"></i> Add Card
      </button>
    </div>
    <script src="./assets/js/script1.js"></script>
  </body>
</html>
