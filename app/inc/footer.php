  <section class="container-alert">
    <?php
      if (isset($_SESSION['message'])){ ?>
      <div class="alert alert-<?php echo $_SESSION['message-type'] ?> alert-dismissible fade show" role="alert">
      <svg class="bi flex-shrink-0 me-2" width="24" height="24" role="img" aria-label="Info:">
        <use xlink:href="./assets/icons/alerts.svg#<?php echo $_SESSION['message-type'] ?>"/>
      </svg>
        <?php echo $_SESSION['message'] ?>
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
      </div>
    <?php session_unset(); } ?>
  </section>
  <script src="./assets/js/app.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj" crossorigin="anonymous"></script>
</body>
</html>
