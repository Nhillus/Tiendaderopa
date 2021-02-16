@extends('overall.layout')
@section('appBody')
    <div class="std">
        <div class="wrapper">
            <!-- <div class="channel-filters">
                <div class="filter_default">
                    <span class="filter_default_label">Alle laufenden Verkäufe sortiert nach :</span>
                    <select class="filter_default_select dd-select select-xl">
                        <option value>Empfehlungen</option>
                        <option value>Schnelle Lieferung</option>
                        <option value>Bald zuende</option>
                    </select>
                </div>
            </div> -->


            <ul class="brands-list">
                <li class="brand-item">
                    <div class="brand" style="background-image: url('{{ asset('/img/brands/brand.png') }}')"></div>
                </li>
                <li class="brand-item">
                    <div class="brand" style="background-image: url('{{ asset('/img/brands/brand.png') }}')"></div>
                </li>
                <li class="brand-item">
                    <div class="brand" style="background-image: url('{{ asset('/img/brands/brand.png') }}')"></div>
                </li>
                <li class="brand-item">
                    <div class="brand" style="background-image: url('{{ asset('/img/brands/brand.png') }}')"></div>
                </li>
                <li class="brand-item">
                    <div class="brand" style="background-image: url('{{ asset('/img/brands/brand.png') }}')"></div>
                </li>
                <li class="brand-item">
                    <div class="brand" style="background-image: url('{{ asset('/img/brands/brand.png') }}')"></div>
                </li>
            </ul>

            <div class="wrapper-current-sales">
                <div class="current-sales sales">
                    <ul class="container-sales small-block-grid-1 medium-block-grid-2">
                        @foreach($promotions as $promotion)
                        <li>
                            <article class="sale standard-sale phantom-container timer-hidden">
                                <a href="#" class="teaser seen">
                                    <div class="sale-media media-552x224">
                                        <figure>
                                            <img src="{{ $promotion->image }}" alt="">
                                        </figure>
                                        <div class="sale-infos">
                                            <div class="row nomarge">
                                                <div class="sale-date columns small-6">
                                                    <span class="sale-end_date"></span>
                                                </div>
                                                <div class="small-6 columns a-right">
                                                    <div class="sale-content-expedition">
                                                        <span>{{  $promotion->shipping  }}</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <footer class="sale-footer">
                                        <div>
                                            <h2 class="sale_title">{{ $promotion->title }}</h2>
                                        </div>
                                        <div class="a-right">
                                            <span class="sale-content-price">
                                                <span class="small">Bis</span>
                                                <span class="sale-percent">-{{ $promotion->offer_percent }}%</span>
                                            </span>
                                        </div>
                                    </footer>
                                </a>
                            </article>
                        </li>
                        @endforeach
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <div class="modal fade" id="crud-modal" aria-hidden="true" >
        <div class="modal-dialog modal-xl">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title" id="customerCrudModal"></h4>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-xs-12 col-sm-12 col-md-12">
                           <login-component/>
                         </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

