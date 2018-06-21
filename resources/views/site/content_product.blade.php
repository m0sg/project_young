<section>
    <div class="product-item">
        <div class="product-img">
            <a href="{{ route('product', array('alias'=>$product->alias)) }}"><img src="{{ asset('assets/img/' . $product['image']) }}"
                                                                                   title="{{ $product['name'] }}" alt="{{ $product['name'] }}"></a>
        </div><!-- .product-img -->
        <div class="product-contents">
            <h3><a href="{{ route('product', array('alias'=>$product->alias)) }}">{{ $product['name'] }}</a></h3>
            <div class="product-desc">
                <p>{{ $product['text'] }}</p>
            </div>
            <div class="product-action">
                <a href="{{ route('product', array('alias'=>$product->alias)) }}" class="m-btn">Подробнее</a>
            </div>
        </div><!-- .product-contents -->
    </div><!-- .product-item -->

</section>