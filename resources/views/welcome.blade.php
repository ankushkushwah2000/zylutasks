<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
<!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>
<style>
    .dot {
  height: 25px;
  width: 25px;
  background-color: rgb(59, 240, 13);
  border-radius: 50%;
  display: inline-block;
}
</style>
</head>
<body>
 <!-- Button trigger modal -->
 <div class="container">
    <div class="row">
        <div class="col-md-12 text-center mt-5">
<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
  Add student
</button>
</div>
</div>
</div>


<div class="container">
    <div class="row">
        <div class="col-md-12 text-center mt-5">
        <table class="table">
  <thead>
    <tr>
      <th scope="col">id</th>
      <th scope="col">name</th>
      <th scope="col">email</th>
      <th scope="col">date</th>
    </tr>
  </thead>
  <tbody>
    @foreach ($data as $a)
    <tr>
        @if ($a->created_at < '2018-01-17')
      <th scope="row"><span class="dot"></span>{{$loop->index+1}}</th>
      @else
      <th scope="row">{{$loop->index+1}}</th>
      @endif
      <td>{{$a->name}}</td>
      <td>{{$a->email}}</td>
      <td>{{$a->created_at}}</td>
    </tr>
    @endforeach
  </tbody>
</table>

</div>
</div>
</div>




<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
      <form action="{{url('/store')}}" method="post" id="" enctype="multipart/form-data" class="form-horizontal">
                    @csrf
                    <div class="row form-group">
                        <div class="col col-md-3"><label class=" form-control-label"> name</label>
                        </div>
                        <div class="col-12 col-md-9">
                            <input type="text" class="form-control" name="name">
                        </div>
                    </div>
                    <div class="row form-group">
                        <div class="col col-md-3"><label class=" form-control-label">email</label>
                        </div>
                        <div class="col-12 col-md-9">
                            <input type="text" class="form-control" name="email">
                        </div>
                    </div>
                    <div class="row form-group">
                        <div class="col col-md-3"><label class=" form-control-label">password</label>
                        </div>
                        <div class="col-12 col-md-9">
                            <input type="text" class="form-control" name="password">
                        </div>
                    </div>
                    <div class="row form-group">
                        <div class="col col-md-3"><label class=" form-control-label">Date</label>
                        </div>
                        <div class="col-12 col-md-9">
                        <input type="date" class="form-control" name="date">
                        </div>
                    </div>
                    <input type="submit" class="btn btn-info text-center" value="submit">
                </form>
      </div>
    </div>
  </div>
</div>

</body>
</html>
