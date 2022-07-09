<div class="mt-5">
    <h5 class="title mb-4">@lang('Bid history')</h5>
    <ul>
        @foreach($product->bids()->orderBy('created_at','desc')->limit(7)->get() as $bid)
            <li class="row py-2 m-0" style="border-bottom: 1px solid #e2e2e2f4; opacity:0.{{($loop->iteration-10)*(-1)}}">
                <div class="fs-5 col-6 ps-0">
                    <i class="las la-gavel"></i> <span class="amount fw-bold">{{ $general->cur_sym }} {{ showAmount($bid->amount) }}</span>
                </div>
                <div class="text-secondary small col-6 text-end pe-0">{{ $bid->created_at->diffForHumans() }}</div>
            </li>
        @endforeach
    </ul>
</div>
