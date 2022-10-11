@include("todo.pages.head")
<section class="page-section" id="#">
  <div class="container px-4 px-lg-5">
    <div class="row gx-4 gx-lg-5 justify-content-center">
      <div class="col-lg-8 col-xl-6 text-center">
        <h2 class="mt-0">Edit a todo list</h2>
        <hr class="divider" />
        <p class="text-muted mb-5">You can a edit todo list from here. The to-do list should not exceed 80 characters.</p>
      </div>
    </div>
    <div class="row gx-4 gx-lg-5 justify-content-center mb-5">
      <div class="col-lg-6">
        <form action="/update" method="post">
          @csrf
          @method('patch')
          <div class="form-floating mb-3">
            <textarea class="form-control" name="title" style="height: 10rem">{{$todo->title}}</textarea>
            <input style="display:none" type="number" name="id" value="{{$todo->id}}">
          </div>
          <div class="d-grid">
            <button class="btn btn-primary btn-xl  js-scroll-trigger " type="submit" value="Edit">Edit</button>
          </div>
        </form>
      </div>
    </div>
  </div>
</section>
@include("todo.pages.footer")


















@include("todo.pages.footer")
