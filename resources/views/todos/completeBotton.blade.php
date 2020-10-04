
@if($todo->completed)
<span class="fas fa-check px-2 text-green-400" />
@else
<span class="fas fa-check px-2 text-gray-300 cursor-pointer "  onclick="event.preventDefault();
 document.getElementById('form-complete-{{$todo->id}}').submit()" />
<form style="display:none" method="post" id="{{'form-complete-'.$todo->id}}" action="{{route('todo.complete',$todo->id)}}">
@csrf
@method('put')
</form>
@endif
 <!--end complete-->