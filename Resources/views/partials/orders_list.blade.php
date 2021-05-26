@if($orders !='') 
<div class="panel-heading">
    <h4 class="panel-title">
        <a data-toggle="collapse" href=".wc-collapse-orders-sidebarapi">
            {{ __("Recent Orders") }}
            <b class="caret"></b>
        </a>
    </h4>
</div>
<div class="wc-collapse-orders-sidebarapi panel-collapse collapse in @if($orders) scrollbar @endif" id="style-2" style="width: 100%;">
    <div class="panel-body force-overflow">
        <div class="sidebar-block-header2"><strong>{{ __("Recent Orders") }}</strong> (<a data-toggle="collapse" href=".wc-collapse-orders">{{ __('close') }}</a>)</div>
        
        <div id="wc-loader" >
            <img src="{{ asset('img/loader-tiny.gif') }}" />
        </div>
        @if (!$load)
            @if($orders) 
             
                <ul class="sidebar-block-list wc-orders-list" >
                    @foreach($orders as $order)

                        <li class="orderList">
                            <div>
                                <a href="{{$order['link']}}" target="_blank">{{ $order['merchant_name']}}</a><br>
                                <span class="">{{ $order['shop_url'] }}</span>
                            </div>
                            <div>
                                <small class="text-help">Status : {{ $order['status'] }}</small>
                                <small class="text-help pull-right">Plan : {{ $order['current_plan'] }}</small>
                            </div>
                           
                        </li>
                    @endforeach
                </ul>
               
                
            @else
                <div class="text-help margin-top-10 wc-no-orders">{{ __("No orders found") }}</div>
            @endif
        @endif
      
    </div>
</div>
@endif
<style type="text/css">
    .orderList{
        margin-bottom: 10px;
    }
    #wc-loader img{
        display: none;
    }
    .scrollbar 
    {
        margin-left: 0px !important;
        margin-right: 0px !important;
        float: left;
        height: auto;
        overflow-y: scroll;
        margin-bottom: 25px;
    }

    .force-overflow
    {
        min-height: 450px;
    }

    #style-2::-webkit-scrollbar-track
    {
        -webkit-box-shadow: inset 0 0 6px rgba(0,0,0,0.3);
        border-radius: 10px;
        background-color: #f4f8fd;
    }

    #style-2::-webkit-scrollbar
    {
        width: 12px;
        background-color: #f4f8fd;
    }

    #style-2::-webkit-scrollbar-thumb
    {
        border-radius: 10px;
        -webkit-box-shadow: inset 0 0 6px rgba(0,0,0,.3);
        background-color: #f4f8fd;
    }

</style>
