<div class="sidebar nobottommargin col_last clearfix hidden-xs col-sm-3">
    <div class="sidebar-widgets-wrap">
        <div class="widget clearfix">
            <h4 ><a href="{{ route('promotion.index') }}"> Danh mục khuyến mãi </a></h4>
            <div class="tab-container sidebar_menu">
                @foreach ($arPromotion as $param)
                <div class="spost clearfix">
                    <div class="entry-image">
                        <a href="{{ route('promotion.detail',[str_slug($param['title']),$param['id']]) }}" class="nobg a-circle">
                            <img class="img-circle-custom" src="{{ asset(Storage::url($param->image)) }}" alt="{{ $param->title }}">
                        </a>
                    </div>
                    <div class="entry-c">
                        <div class="entry-title">
                            <h4><a href="{{ route('promotion.detail',[str_slug($param['title']),$param['id']]) }}">{{ $param->title }}</a></h4>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
        <div class="widget clearfix" style="overflow:hidden;">
            <div class="fb-page" data-href="https://www.facebook.com/dongluc.195/" data-tabs="timeline" data-height="300" data-small-header="false" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="true"><blockquote cite="https://www.facebook.com/dongluc.195/" class="fb-xfbml-parse-ignore"><a href="https://www.facebook.com/dongluc.195/">Hình ảnh tạo động lực</a></blockquote>
            </div>
        </div>
    </div>
</div>
