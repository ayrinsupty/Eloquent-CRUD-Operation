<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Post</title>
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
                            <h3>Edit Post
                                <a href="/posts" class="btn btn-info float-end">Go Back</a>
                            </h3>
                        </div>
                        <div class="card-body">
                            @if(Session::has('post_updated'))
                                <div class="alert alert-success" role="alert">
                                    {{Session::get('post_updated')}}
                                </div>
                            @endif
                            <form action="{{route('post.update')}}" method="POST" enctype="multipart/form-data">
                                @csrf
                                <input type="hidden" name="id" value="{{ $post->id }}" />
                                <div class="form-group mb-3">
                                    <label for="title">Post Title</label>
                                    <input type="text" name="title" class="form-control" placeholder="Enter Post Title" value="{{ $post->title }}"/>
                                </div>

                                <div class="form-group mb-3">
                                    <label for="body">Post Description</label>
                                    <textarea name="body" class="form-control" rows="3">{{ $post->body }}</textarea>
                                </div>

                                <div class="form-group mb-3">
                                    <label for="image">Image</label>
                                    <input type="file" name="image" class="form-control"><br>
                                    <img src="{{ asset('uploads/image/'.$post->image) }}" width="150px" height="100px" alt="image">
                                </div>

                                <div class="form-group md-3">
                                    <button type="submit" class="btn btn-success">Update</button>
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
