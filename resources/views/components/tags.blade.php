 @props(['tagsCsv'])
 @php
 $tags = explode(',', $tagsCsv);
 @endphp

 <ul class="flex" style="display: flex; margin-top: 1rem;">
     @foreach ($tags as $tag)
     <li class="tag" style=" display: flex;
    align-items: center;
    justify-content: center;
    background-color: black;
    color: white;
    border-radius: 0.5rem;
    padding: 0.25rem 0.75rem;
    margin-right: 0.5rem;
    font-size: 0.75rem;">
         <a href="/?tag={{$tag}}" style="color: white;
    text-decoration: none;">{{$tag}}</a>
     </li>
     @endforeach
 </ul>