@extends('layoutsweb.default')

@section('content')
    <script type="text/javascript" src="{{ asset('js/particles2.min.js') }}"></script>
<div class="banners">
    <div class="content">
        <svg>
            <symbol id="s-text">
                <text text-anchor="middle">
                    <tspan x="50%" y="70" fill="transparent">SELECTED</tspan>
                </text>
            </symbol>
            <g class="g-ants">
                <use xlink:href="#s-text" class="text-copy"></use>
                <use xlink:href="#s-text" class="text-copy"></use>
                <use xlink:href="#s-text" class="text-copy"></use>
                <use xlink:href="#s-text" class="text-copy"></use>
                <use xlink:href="#s-text" class="text-copy"></use>
            </g>
            <symbol id="s-text2">
                <text text-anchor="middle">
                    <tspan x="50%" y="80" fill="transparent">SELECTED</tspan>
                </text>
            </symbol>
            <g class="m-ants">
                <use xlink:href="#s-text2" class="text-copy"></use>
                <use xlink:href="#s-text2" class="text-copy"></use>
                <use xlink:href="#s-text2" class="text-copy"></use>
                <use xlink:href="#s-text2" class="text-copy"></use>
                <use xlink:href="#s-text2" class="text-copy"></use>
            </g>
        </svg>
        <h2>成功案例精选</h2>
    </div>
    <canvas class="anim" id="anim"></canvas>

</div>
<div class="section news-index">
    <div class="cases">
        <div class="case-set">
                @foreach($data as $key=>$value)
                <div class="case">
                    <a href="{{url('/cases/'.$value->id)}}">
                        <div class="thumb"><img src="{{ asset($value->image) }}" height="183px" width="364px" alt="谷德网络科技行销"/></div>
                        <div class="name">
                            <h3>{{$value->title}}</h3>
                            <p>{{$value->data}}</p>
                            <div class="adsign">
                                @foreach($value->name as $key2=>$value2)
                                    <div class="{{$value2}}"></div>
                                @endforeach
                            </div></div>
                    </a>
                </div>
                @endforeach

        </div>

    </div>
</div>
@endsection
