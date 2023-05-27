@if (count($topics))
  <ul class="list-group mt-4 border-0">
    @foreach ($topics as $topic)
      <li class="list-group-item pl-2 pr-2 border-start-0 border-end-0 @if($loop->first) border-top-0 @endif">
        <a class="text-decoration-none" href="{{ route('topics.show', $topic->id) }}">
          {{ $topic->title }}
        </a>
        <span class="meta float-right text-secondary">
          {{ $topic->reply_count }} 回复
          <span> ⋅ </span>
          {{ $topic->created_at->diffForHumans() }}
        </span>
      </li>
    @endforeach
  </ul>
@else
  <div class="empty-block">暂无数据 ~_~ </div>
@endif
<div class="mt-4 pt-1">
  {!! $topics->render() !!}
</div>
