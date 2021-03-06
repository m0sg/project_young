<section>
    <div class="container">
        <div class="product-item product-item-content">
            <div class="product-img">
               <img src="{{ asset('assets/img/' . $product['image']) }}" title="{{ $product['name'] }}" alt="{{ $product['name'] }}"></a>
            </div><!-- .product-img -->
            <div class="product-contents">
                <h3>{{ $product['name'] }}</h3>
                <div>
                    <p>{{ $product['text'] }}</p>
                </div>

                <div class="tabs">

                    <ul class="tabs__caption">
                        <li class="active">Плюсы</li>
                        <li>Состав</li>
                        <li>Как рабоатет</li>
                        <li>Инструкция</li>
                        {{--<li>Дополнительная информация</li>--}}
                    </ul>

                    <div class="tabs__content active">
                        <div class="row">
                            <div class="col-md-6">
                                    {!!  $product['advantage'] !!}
                            </div>
                            <div class="col-md-6">
                                    {!! $product['factors'] !!}
                            </div>
                        </div>
                    </div>

                    <div class="tabs__content">
                        {!! $product['composition'] !!}
                    </div>
                    <div class="tabs__content">
                        {!! $product['work'] !!}
                    </div>
                    <div class="tabs__content">
                        {!! $product['manual'] !!}
                    </div>
                    <div class="tabs__content">
                        {!! $product['dopinfo'] !!}
                    </div>
                </div><!-- .tabs-->
            </div><!-- .product-contents -->
        </div><!-- .product-item -->
    </div>
</section>


<!-- ========== Footer ========== -->
<footer class="footer">
    <div class="sub-footer  text-center">
        <p>© "Профилактика и лечение заболеваний молодняка КРС" 2018 | Все права защищены.</p>
    </div>
</footer> <!-- .footer -->
<!-- ========== End Of Footer ========== -->

