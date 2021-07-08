<!doctype html>
<html lang="en">
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <title>Ajax Practice</title>

        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css">
        <script
            src="https://code.jquery.com/jquery-3.6.0.min.js"
            integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4="
            crossorigin="anonymous"></script>

    </head>
    <body>
        <div class="container">
            <div class="row mt-5">
                <div class="col-12">
                    <h1>Ajax Practice</h1>
                </div>
            </div>
            <div class="row mt-5">
                <div class="col-md-4">
                    <h3>Form Submit</h3>
                    <div class="alert alert-primary" role="alert">
                        Submit form with ajax
                    </div>
                    <form id="form-submit" action="form-submit.php" method="POST">
                        <div class="form-group">
                            <label>Email address</label>
                            <input type="email" class="form-control" name="email" id="submit-email" required>
                        </div>
                        <div class="form-group">
                            <label>Password</label>
                            <input type="password" class="form-control" name="password" id="submit-password" required>
                        </div>
                        <button type="submit" class="btn btn-primary">Submit</button>

                        <div id="form-result" class="mt-2"></div>
                    </form>
                </div>
                <div class="col-md-4 offset-md-2">
                    <h3>Button Click</h3>
                    <div class="alert alert-primary" role="alert">
                        Send form data with button click and ajax
                    </div>
                    <div class="form-group">
                        <label>Email address</label>
                        <input type="email" class="form-control" id="click-email" required>
                    </div>
                    <div class="form-group">
                        <label>Password</label>
                        <input type="password" class="form-control" id="click-password" required>
                    </div>
                    <button id="button-send" type="button" class="btn btn-primary" data-url="button-click.php">Send</button>

                    <div id="click-result" class="mt-2"></div>
                </div>
            </div>
        </div>

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>
        <script src="script.js"></script>
    </body>
</html>