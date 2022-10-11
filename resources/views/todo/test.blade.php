<form action="/update" method="post">
    @csrf
    @method('patch')
    <input  class="coco" type="text" name="title"  value="{{$todo->title}}" />

    <input  style="display:none" type="number" name="id" value="{{$todo->id}}" >

    <button  class="lolo" type="submit"  value="Edit"
         >Edit</button>
</form>
<br>
