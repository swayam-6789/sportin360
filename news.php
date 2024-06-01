<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="./assets/css/news.css" />
    <title>Blog</title>
  </head>
  <body>
    <h1>News Bulletin</h1>
    <div class="filter-container">
      <input
        type="text"
        name="filter"
        id="filter"
        class="filter"
        placeholder="Filter posts..."
      />
    </div>
    <div id="posts-container"></div>
    <div class="loader" id="loader">
      <div class="circle"></div>
      <div class="circle"></div>
      <div class="circle"></div>
    </div>
    <script src="./assets/js/news.js"></script>
  </body>
</html>
