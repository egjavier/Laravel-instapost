<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Welcome to Instapost</title>

  <!-- BOOTSRAP -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>
<body>
  <main class="container">
    <section class="p-5 text-center">
      <img src="https://clipart-library.com/2023/best-friends-clipart-md.png" 
            alt=""
            class="image-fluid" 
            style="height: auto; max-height: 400px">
      <div class="border rounded p-3 text-white bg-dark">
        <h1 class="mt-4">Welcome to <strong>Instapost</strong></h1>
        <p>Connect with your friends all over the globe</p>
        <a href="{{ route('register') }}" class="btn btn-light">
          Create an account for <strong>FREE</strong>
        </a>
        <div>
          <a href="{{ route('login') }}"
              class="text-white">
            Already have an account? Click here to <strong>Login</strong>
          </a>
        </div>
      </div>
    </section>
  </main>
</body>
</html>