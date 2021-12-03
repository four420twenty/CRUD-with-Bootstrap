<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <title>Create</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <div class="container">

        <form action="php/create.php" method="post">

            <h4 class="display-4 text-center">Create</h4><hr><br>

            <?php if (isset($_GET['error'])) { ?>
            <div class="alert alert-danger" role="alert">
                <?= $_GET['error']  ?>
            </div>
            <?php } ?>

            <div class="mb-3">

                <label for="name" class="form-label">Name</label>
                <input type="name"
                       class="form-control"
                       id="name"
                       name="name"
                       value="<?php
                       if (isset($_GET['name']))
                                echo($_GET['name']);
                       ?>"
                       placeholder="Enter name">

                <label for="name" class="form-label">Email</label>
                <input type="email"
                       class="form-control"
                       id="name"
                       name="email"
                       placeholder="Enter email">
                        value="<?php
                        if (isset($_GET['email']))
                            echo($_GET['email']);
                        ?>"

                <br>

                <button type="submit"
                        class="btn btn-primary"
                        name="create">Create</button>

        </form>

    </div>
</body>
</html>