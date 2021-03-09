<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <!-- Bootstrap CSS -->
    <link
      rel="stylesheet"
      href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
    />

    <!-- Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>

    <!-- Font Awesome -->
    <script
      src="https://kit.fontawesome.com/996973c893.js"
      crossorigin="anonymous"
    ></script>

    <!-- Google Fonts -->
    <link
      href="https://fonts.googleapis.com/css2?family=Baloo+Thambi+2:wght@400;500;600;700;800&display=swap"
      rel="stylesheet"
    />

    <!-- My Stylesheet -->
    <link rel="stylesheet" href="style/style.css" />

    <!-- My jQuery -->
    <script src="main.js"></script>

    <!-- Chart.js -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.3/Chart.min.js"></script>

    <title>Covid-19 Tracker India</title>
  </head>
  <body>
    <div class="container-fluid bg-dark text-white p-5 text-center">
      <h1 class="">Covid-19 Tracker India</h1>
    </div>

    <div class="container my-5">
      <div class="row text-center">
        <div class="col-3 text-warning">
          <h5>Confirmed</h5>
          <p id="confirmed"></p>
        </div>
        <div class="col-3 text-info">
          <h5>Active</h5>
          <p id="active"></p>
        </div>
        <div class="col-3 text-success">
          <h5>Recovered</h5>
          <p id="recovered"></p>
        </div>
        <div class="col-3 text-danger">
          <h5>Deceased</h5>
          <p id="deaths"></p>
        </div>
      </div>
    </div>

    <div class="container bg-dark text-white p-3 my-5 text-center">
      <h5 class="text-info">"Prevention is the Cure."</h5>
      <p class="text-muted">Stay Indoors Stay Safe.</p>
    </div>

    <canvas id="myChart"></canvas>

    <div class="container text-center my-5">
      <h6 class="text-info">
        *Click on the Confirmed/Recovered/Deaths buttons above to see the chart
        individually.*
      </h6>
    </div>

    <footer class="footer mt-5 py-3 bg-light">
      <div class="container text-center">
        <span class="text-muted"
          >Copyright &copy;2020,
          <a target="_blank">Kartik</a></span
        >
      </div>
    </footer>
  </body>
</html>