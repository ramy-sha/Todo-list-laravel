<header class="masthead" id="todo">
  <div class="container px-4 px-lg-5 h-100">
    <div class="row gx-4 gx-lg-5 h-100 align-items-center justify-content-center text-center">
      <div class="col-lg-8 align-self-end">
        <h3 class="text-white font-weight-bold">
          <h3>
            <x-alert />
          </h3>
        </h3>
        <hr class="divider" />
      </div>
      <h4>All your Todo </h4>
      <nav>
        <ul class="skr">
          @foreach($todos as $todo)
          <li class="list-group-item col-md-12 mb-1 pb-4 " style="text-align: left;   border-radius: 10px;">
            @if($todo->completed)
            <span class="zozo" style="text-decoration:line-through ">{{$todo->title}}</span>
            @else
            {{$todo->title}}
            @endif
            <a class="delete" href="{{asset('/' . $todo->id .'/delete')}}"><button type="button" class="btn btn-danger">Delete <i class="fa fa-trash"></i></button></a>
            <a class="bedit" href="{{asset('/' . $todo->id .'/edit')}}"> <button type="button" class="btn btn-success">Edit <i class="fa fa-edit"></i></button></a>
            <a class="bcomleted" href="{{asset('/' . $todo->id .'/completed')}}"> <button type="button" class="btn btn-warning">Completed <i class="fa fa-check"></i></button></a>
          </li>
          @endforeach
        </ul>
      </nav>
    </div>
  </div>
</header>
<section class="page-section" id="Create">
  <div class="container px-4 px-lg-5">
    <div class="row gx-4 gx-lg-5 justify-content-center">
      <div class="col-lg-8 col-xl-6 text-center">
        <h2 class="mt-0">Create new todo list</h2>
        <hr class="divider" />
        <p class="text-muted mb-5">You can create a new todo list from here. The todo list should not exceed 80 characters.</p>
      </div>
    </div>
    <div class="row gx-4 gx-lg-5 justify-content-center mb-5">
      <div class="col-lg-6">
        <form action="/upload" method="post">
          @csrf
          <div class="form-floating mb-3">
            <textarea class="form-control" name="title" style="height: 10rem"></textarea>
          </div>
          <div class="d-grid">
            <button class="btn btn-primary btn-xl js-scroll-trigger " type="submit" value="Create">Create</button>
          </div>
        </form>
      </div>
    </div>
  </div>
</section>
