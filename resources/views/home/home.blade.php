@extends('overall.layout')
<style>
.close-button {
  border: none;
  display: inline-block;
  padding: 8px 16px;
  vertical-align: middle;
  overflow: hidden;
  text-decoration: none;
  color: inherit;
  background-color: inherit;
  text-align: center;
  cursor: pointer;
  white-space: nowrap
}

.topright {
  position: absolute;
  right: 0;
  top: 0
}

.container_X {
    width: 5px;
    height: 5px;
    border:1px solid #9b9b9b; 
    color:rgb(67, 67, 67);
    font-size: 15px;
}

</style>    
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
                                <a href="{{ url( $promotion->id.'/product/list')}}" class="teaser seen">
                                    <div class="sale-media media-552x224">
                                        <figure>
                                            <img src="{{ asset( '/img/promotions'.'/'.$promotion->id.'/'.$promotion->image) }}" alt="">
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
    <div id="app" >
        <div class="modal fade" id="crud-modal" aria-hidden="true" >
            <div class="modal-dialog modal-xl" id="modal-xl" >
                <div class="modal-content">
                    <div class="modal-body">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">X</span>
                          </button>
                            <login-component/>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="/js/app.js"></script>
@endsection

