<?php
    session_start();
?>

<!DOCTYPE>
<html lang="en">
    <head>
        <title>Inactivity Timer</title>

        <!-- Bootstrap Requirements -->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"
              integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z"
              crossorigin="anonymous"
        />
        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
                integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj"
                crossorigin="anonymous">
        </script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"
                integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN"
                crossorigin="anonymous">
        </script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"
                integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV"
                crossorigin="anonymous">
        </script>
        <script src="./Resources/js/moment.js"></script>
    </head>
    <body>
        <div class="modal fade" id="inactivityModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Inactivity Warning</h5>
                    </div>
                    <div class="modal-body">
                        <p class="modal-text"></p>
                    </div>
                    <div class="modal-footer">
                        <button id="modalContinueSession" type="button" class="btn btn-sm btn-primary" data-dismiss="modal">Stay Logged In</button>
                        <button id="modalLogout" type="button" class="btn btn-sm btn-danger" data-dismiss="modal">Logout Now</button>
                    </div>
                </div>
            </div>
        </div>
        <script src="./Resources/js/inactive.js"></script>
    </body>
</html>
