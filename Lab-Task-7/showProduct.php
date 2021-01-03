<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.11.2/css/all.css">
    <link rel="stylesheet" href="https://mdbootstrap.com/previews/ecommerce-demo/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://mdbootstrap.com/previews/ecommerce-demo/css/mdb-pro.min.css">
    <link rel="stylesheet" href="https://mdbootstrap.com/previews/ecommerce-demo/css/mdb.ecommerce.min.css">
    <link rel="stylesheet" href="styles.css">
    <title>farm food</title>
</head>

<body>
    <div class="container">
        <section class="my-3">

        <?php include_once '../includes/header.php' ?>
        <div class="my-5"></div>
        <div class="row">
          <div class="col-md-5 mb-4 mb-md-0">

            <div class="">
              <img class="img-fluid w-100" src="https://mdbootstrap.com/img/Photos/Horizontal/Eco/img(24).jpg" alt="Sample">
            </div>

          </div>
          <div class="col-md-7">

            <h1 class="h1">Dark grapes - 1kg</h5>
            <p class="mb-2 text-muted text-uppercase small">Fruits</p>
            <ul class="rating">
              <li>
                <i class="fas fa-star fa-sm text-primary"></i>
              </li>
              <li>
                <i class="fas fa-star fa-sm text-primary"></i>
              </li>
              <li>
                <i class="fas fa-star fa-sm text-primary"></i>
              </li>
              <li>
                <i class="fas fa-star fa-sm text-primary"></i>
              </li>
              <li>
                <i class="far fa-star fa-sm text-primary"></i>
              </li>
            </ul>
            <p class="lead"><span class="mr-1"><strong>Tk 599</strong></span></p>
            <p class="pt-1 lead">Lorem ipsum dolor sit amet consectetur adipisicing elit. Numquam, sapiente illo. Sit
              error voluptas repellat rerum quidem, soluta enim perferendis voluptates laboriosam. Distinctio,
              officia quis dolore quos sapiente tempore alias.</p>
            <p class="pt-1">Lorem ipsum dolor sit amet consectetur adipisicing elit. Numquam, sapiente illo. Sit
              error voluptas repellat rerum quidem, soluta enim perferendis voluptates laboriosam. Distinctio,
              officia quis dolore quos sapiente tempore alias.</p>
            <div class="table-responsive">
              <table class="table table-sm table-borderless mb-0">
                <tbody>
                  <tr>
                    <th class="pl-0 w-25" scope="row"><strong>Category</strong></th>
                    <td>Fruits</td>
                  </tr>
                  <tr>
                    <th class="pl-0 w-25" scope="row"><strong>City</strong></th>
                    <td>Dhaka</td>
                  </tr>
                </tbody>
              </table>
            </div>
            <hr>
            <div class="table-responsive mb-2">
              <table class="table table-sm table-borderless">
                <tbody>
                  <tr>
                    <td class="pl-0 pb-0 w-25">Quantity</td>
                  </tr>
                  <tr>
                    <td class="pl-0">
                      <div class="def-number-input number-input safari_only mb-0">
                        <input class="quantity" min="0" name="quantity" value="1" type="number">
                      </div>
                    </td>
                  </tr>
                </tbody>
              </table>
            </div>
            <button type="button" class="btn btn-primary btn-md mr-1 mb-2">Buy now</button>
            <button type="button" class="btn btn-light btn-md mr-1 mb-2"><i
                class="fas fa-shopping-cart pr-2"></i>Add to cart</button>
          </div>
        </div>
      </section>

      <?php require_once '../review-rating/showReviewRating.php' ?>
      <?php require_once '../comments/showAllComments.php' ?>

      <h3 class="h3">Add a comment</h3>
      <form action="/farmfood/controllers/api/productComment/create.php" method="POST">
        <div class="form-group">
          <label for="">Comment</label>
          <input type="text" class="form-control" name="commentText">
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
      </form>

    </div>
</body>

</html>
