@if (Auth::check())

    @if ($item->check(Auth::user()->id))
        @if ($item->check(Auth::user()->id)->status == 1)
            <div class="wapper-like">
                <div class="like remove" id="{{ $item->check(Auth::user()->id)->id }}">
                    {!! $likeActive !!}
                    <span>{{ $item->count(1) }}</span>
                </div>
                <div class="dislike addDislike create" resource="{{ get_class($item) }}"
                    resource_id="{{ $item->id }}" user_id="{{ Auth::user()->id }}">
                    {!! $dislike !!}
                    <span>{{ $item->count(2) }}</span>
                </div>
            </div>
        @else
            <div class="wapper-like">
                <div class="like addLike create" resource="{{ get_class($item) }}" resource_id="{{ $item->id }}"
                    user_id="{{ Auth::user()->id }}">
                    {!! $like !!}
                    <span>{{ $item->count(1) }}</span>
                </div>
                <div class="dislike remove" id="{{ $item->check(Auth::user()->id)->id }}">
                    {!! $dislikeActive !!}
                    <span>{{ $item->count(2) }}</span>
                </div>
            </div>
        @endif
    @else

        <div class="wapper-like">
            <div class="like addLike create" resource="{{ get_class($item) }}" resource_id="{{ $item->id }}"
                user_id="{{ Auth::user()->id }}">
                {!! $like !!}
                <span>{{ $item->count(1) }}</span>
            </div>
            <div class="dislike addDislike create" resource="{{ get_class($item) }}"
                resource_id="{{ $item->id }}" user_id="{{ Auth::user()->id }}">
                {!! $dislike !!}
                <span>{{ $item->count(2) }}</span>
            </div>
        </div>
    @endif
@else
    <div class="wapper-like">
        <a href="/login">
            <div class="like">
                {!! $like !!}
                <span>{{ $item->count(1) }}</span>
            </div>
        </a>
        <a href="/login">
            <div class="dislike">
                {!! $dislike !!}
                <span>{{ $item->count(2) }}</span>
            </div>
        </a>
    </div>
@endif
