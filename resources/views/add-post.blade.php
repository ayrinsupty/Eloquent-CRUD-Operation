<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Post</title>
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
</head>
<body>
    <section style="padding-top: 60px;">
        <div class="container">
            <div class="row">
                <div class="col-md-6 offset-md-3">
                    <div class="card">
                        <div class="card-header">
                            <h3>Add Post
                                <a href="/posts" class="btn btn-info float-end">All Post</a>
                            </h3>
                        </div>
                        <div class="card-body">
                            @if(Session::has('post_created'))
                                <div class="alert alert-success" role="alert">
                                    {{Session::get('post_created')}}
                                </div>
                            @endif
                            <form action="{{route('post.create')}}" method="POST" enctype="multipart/form-data">
                                @csrf
                                <div class="form-group mb-3">
                                    <label for="title">Post Title</label>
                                    <input type="text" name="title" class="form-control" placeholder="Enter Post Title" />
                                </div>

                                <div class="form-group mb-3">
                                    <label for="body">Post Description</label>
                                    <textarea name="body" class="form-control" rows="3"></textarea>
                                </div>

                                <div class="form-group mb-3">
                                    <label for="image">Image</label>
                                    <input type="file" name="image" class="form-control">
                                </div>

                                <div class="form-group mb-3">
                                    <button type="submit" class="btn btn-success">Add Post</button>
                                </div>
                            </form>
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
