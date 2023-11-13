<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap 4 Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
  <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.4/dist/jquery.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
  <link href="bintang.css" rel="stylesheet"/>
</head>
<body class="bg-dark">
    <div class="jumbotron-fluid">
        <div class="container">
            <img src="https://cdn.bolivia.com/gastronomia/2011/08/25/pizza-margarita-3684.jpg" alt="" class="img-fluid">
        </div>
    </div>

    <div class="container mt-4">
        <div class="row">
            <div class="col-3">
                <img src="https://img.freepik.com/free-photo/thinly-sliced-pepperoni-is-popular-pizza-topping-american-style-pizzerias-isolated-white-background-still-life_639032-229.jpg?w=2000" width="75px" height="75px" class="img-fluid">
            </div>
            <div class="col-3">
                <img src="https://www.superhealthykids.com/wp-content/uploads/2021/10/best-veggie-pizza-featured-image-square-2.jpg" width="75px" height="75px" class="img-fluid">
            </div>
            <div class="col-3">
                <img src="https://www.healthyseasonalrecipes.com/wp-content/uploads/2019/12/greek-pizza-21-001-640x640.jpg" width="75px" height="75px" class="img-fluid">
            </div>
            <div class="col-3">
                <img src="https://hips.hearstapps.com/hmg-prod/images/homemade-pizza-index-1591135484.jpg?crop=0.599xw:0.564xh;0.313xw,0.166xh&resize=1200:*" width="75px" height="75px" class="img-fluid">
            </div>
        </div>
    </div>

    <div class="container mt-4">
      <div class="row">
          <div class="col-9">
              <h4 class="text-white">Pepperoni Pizza</h4>
              <p class="text-danger font-weight-bold" style="font-size: 16px;">$10.00</p>
              <p class="text-white">A traditional Neapolitan pizza topped with tomato sauce, fresh mozarella cheese, basil leaves and drizzled with olive oil. <span class="text-info">Read more</span></p>
          </div>
          <div class="col-3">
              <div class="star-rating">
                  <span class="star">&#9733;</span>
                  <span class="text-muted">4.8</span>
              </div>
          </div>
      </div>
  </div>

  <div class="container mt-4">
    <div class="row">
        <div class="col">
            <p class="text-white">Size</p>
            <button class="size-btn">S</button>
            <button class="size-btn active">M</button>
            <button class="size-btn">L</button>
        </div>
    </div>
</div>

<div class="container mt-4">
  <p class="text-white">Ingredients</p>
  <div class="row">
      <div class="col-4">
          <button class="ingredient-btn">
              <img src="Pizza/tomato.png" alt="Tomato" class="ingredient-img">
          </button>
      </div>
      <div class="col-4">
          <button class="ingredient-btn">
              <img src="Pizza/leaf.png" alt="Leaves" class="ingredient-img">
          </button>
      </div>
      <div class="col-4">
          <button class="ingredient-btn">
              <img src="Pizza/onion.png" alt="Red Onion" class="ingredient-img">
          </button>
      </div>
  </div>
</div>

<div class="container mt-4">
  <div class="row">
      <div class="col-6">
        <button class="cart-button"><img src="pngegg.png" alt="" width="32" height="32"></button>
      </div>
      <div class="col-6">
        <button class="order-button" style="width: 100%;">Order Now</button>
      </div>
  </div>
</div>
</div>
</body>
</html>
