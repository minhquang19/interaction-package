<div class="view">
    {!! $icon !!}
    @if (!empty($item->getCountView()))
        <span>{!! number_format($item->getCountView()->count) !!}</span>
    @else
        <span>0</span>
    @endif
</div>
