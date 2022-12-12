<html>
    <head>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous"></script>
    </head>
    <body>
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                <div class="card">
                <div class="card-header">
                    Post Edit Form
                    <!-- Button trigger modal -->
                  
                   
                </div>
                <div class="card-body">
                    <!-- Modal -->
                    <div class="modal-body">
                            <form method="post" action="{{route('posts.update',$post->id)}}" enctype="multipart/form-data">
                                @csrf
                                @method('PUT')
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Post Name</label>
                                    <input type="text" name="name" value="{{$post->name}}" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter Name">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputPassword1">Description</label>
                                    <textarea class="form-control" name="desc" id="exampleInputPassword1">{{$post->desc}}</textarea>    
                                </div>
                                <div class="form-group">
                                    <label for="">Select Image</label>
                                    <input type="file" value="{{$post->image}}" name="image" class="form-control h-auto" id="" aria-describedby="emailHelp" placeholder="Select Image">
                                    <img src="/{{$post->image}}" width="100"/>
                                </div>
                                <button type="submit" class="btn btn-primary">Submit</button>
                            </form>
                        </div>
                </div>
                <div class="card-footer text-muted">
                    2 days ago
                </div>
                </div>
                </div>
            </div>
        </div>
    </body>
</html>