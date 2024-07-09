<html>
  <head>
    <title>Web Notifikasi dengan Javascript | www.hakkoblogs.com</title>
    <!-- Bootstrap -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css" integrity="sha384-rwoIResjU2yc3z8GV/NPeZWAv56rSmLldC3R/AZzGRnGxQQKnKkoFVhFQhNUwEyJ" crossorigin="anonymous">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/js/bootstrap.min.js" integrity="sha384-vBWWzlZJ8ea9aCX4pEW3rVHjgjt7zpkNpZk+02D9phzyeVkE+jo0ieGizqPLForn" crossorigin="anonymous"></script>
  </head>
  <body>
    <div class="container" style="margin-top: 10px;">
      <div class="row">
        <center><button class="btn btn-primary" onclick="notifikasi()">
          Klik Disini
        </button></center>
      </div>
    </div>
    <!-- Jquery -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
    <!-- Notify.js -->
    <script src="https://cdn.jsdelivr.net/npm/notifyjs@0.4.2/dist/notify.min.js"></script>
    <!-- Notifikasi Script -->
    <script>
      $(document).ready(function() {
        notify.defaults.timeout = 10000;
      });
      
      function notifikasi() {
        notify("www.hakkoblogs.com", {
          icon: 'https://blogger.googleusercontent.com/img/b/R29vZ2xl/AVvXsEj-PyFDT7TRCBq4edhcfX4XDzOGrGAFkV2nfEhC1nVgY2p2EDFSI7LEhTUFupsCz4dh1f3l_n_3Np4NTof57ZSHIJBZb8IevAYPHtgRfiG8-_EuwgvNd3whAd6Kgkhtx0y9_rQUD8ehlnw/s1600/header2.jpg',
          body: "Belajar Javascipt itu menyenangkan",
          onClick: function() {
            window.open("http://www.hakkoblogs.com");
          }
        });
      }
    </script>
  </body>
</html>