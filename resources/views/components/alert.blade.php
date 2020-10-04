<div>
    <!-- Let all your things have their places; let each part of your business have its time. - Benjamin Franklin -->
   @if(session()->has('message'))
    {{$slot}}
   <div class="py-4 px-2 bg-green-300">{{session()->get('message')}}</div>
   @elseif(session()->has('error'))
   {{$slot}}
   <div class="py-4 px-2 bg-red-300">{{session()->get('error')}}</div>
    @endif
    
    @if ($errors->any())
    <div class="py-4 px-2 bg-red-300">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

<!-- Create Post Form -->
</div>