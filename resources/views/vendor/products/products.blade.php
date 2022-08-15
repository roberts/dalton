@extends('support::base')

@section('content')


            <!--====== Section 1 ======-->
            <div class="u-s-p-y-60">

                <!--====== Section Intro ======-->
                <div class="section__intro u-s-m-b-46">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="section__text-wrap">
                                    <h1 class="section__heading u-c-secondary u-s-m-b-12">OUR PRODUCTS</h1>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!--====== End - Section Intro ======-->


                <!--====== Section Content ======-->
                <div class="section__content">
                    <div class="container">
                        <div class="row">
                            @foreach($products as $product)
                            <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6 u-s-m-b-30">
                                <div class="product-o product-o--hover-on u-h-100">
                                    <div class="product-o__wrap">

                                        <a class="aspect aspect--bg-grey aspect--square u-d-block" href="">

                                            <img class="aspect__img" src="{{URL::asset('images/gloves.png')}}" alt=""></a>
                                        <div class="product-o__action-wrap">
                                            <ul class="product-o__action-list">
                                                <li>

                                                    <a data-modal="modal" data-modal-id="#quick-look" data-tooltip="tooltip" data-placement="top" title="Quick View"><i class="fas fa-search-plus"></i></a></li>
                                               </ul>
                                        </div>
                                    </div>

                                    <span class="product-o__category">

                                        <a href="">{{$product->location->name}}</a></span>

                                    <span class="product-o__name">

                                        <a href="">{{$product->title}}</a></span>

                                    <span class="product-o__price">${{$product->amount}}

                                        </span>
                                </div>
                            </div>
                            @endforeach
                        </div>
                    </div>
                </div>
                <!--====== End - Section Content ======-->


@endsection



