@extends('layouts.main')

  @push('styles')
  <link rel='stylesheet' href='{{asset("js/ion.rangeSlider-master/css/ion.rangeSlider.min.css")}}'>
  <style>
    .irs--round .irs-bar {
        background-color: #00c2c0;
    }
    .irs--round .irs-handle {
        background-color: #00c2c0;
        border-color: #00c2c0;
        box-shadow: 0px 0px 0px 5px rgba(0,194,192,0.2);
    }
    .irs--round .irs-handle.state_hover,
    .irs--round .irs-handle:hover {
        background-color: #00c2c0;
    }
    .irs--round .irs-handle {
        width: 16px;
        height: 16px;
        top: 29px;
    }
    .irs--round .irs-from,
    .irs--round .irs-to,
    .irs--round .irs-single {
        background-color: transparent;
        color: #666;
    }
    .irs--round .irs-from:before,
    .irs--round .irs-to:before,
    .irs--round .irs-single:before,
    .irs--round .irs-min,
    .irs--round .irs-max {
        display: none;
    }
  </style>
  @endpush
  @push('scripts')
  <!-- partial -->
  <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js'></script>
  <script src='{{asset("js/ion.rangeSlider-master/js/ion.rangeSlider.min.js")}}'></script>


  @endpush
@section('content')

<div>
  @livewire('double-range-slider.list-content')
</div>
@endsection
