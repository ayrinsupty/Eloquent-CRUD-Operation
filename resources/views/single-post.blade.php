<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Post Details</title>
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
</head>
<body>
    <section style="padding-top: 60px;">
        <div class="container">
            <div class="row">
                <div class="col-md-8 offset-md-2">
                    <div class="card">
                        <div class="card-header">
                            <h3>Post Details</h3>
                        </div>
                        <div class="card-body">
                            <div class="form-group md-3">
                                <strong> Post Title</strong>
                                <p>{{ $post->title }}</p>
                            </div>

                            <div class="form-group md-3">
                                <strong>Post Description</strong>
                                <p>{{ $post->body }}</p>
                            </div>

                            <div class="form-group md-3">
                              <strong>Image</strong>
                                <p><img src="{{ asset('uploads/image/'.$post->image) }}" width="350px" height="200px" alt="image"></p>
                            </div>

                            <div class="form-group md-3">
                                <a href="/posts" class="btn btn-success">Go Back</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

<!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
</body>
</html>
