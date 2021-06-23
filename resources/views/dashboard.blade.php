@extends('layouts.appBack')
@section('content')
@include('partials.navBack')
 <section  style="margin-left: 250px;">
 
    <div class="row" data-aos="fade-up">
        <div class="row justify-content-center">
            <h1 class="text-center">welcome to dashboard</h1>
    </div>/
    </div>
    {{-- <div id="chart" style="height: 300px;"></div>
    <!-- Charting library -->
    <script src="https://unpkg.com/echarts/dist/echarts.min.js"></script>
    <!-- Chartisan -->
    <script src="https://unpkg.com/@chartisan/echarts/dist/chartisan_echarts.js"></script>
    <!-- Your application script -->
    <script>
      const chart = new Chartisan({
        el: '#chart',
        url: "@chart('sample_chart')",
      });
    </script>
    --}}
   
 </section>
 
 
@endsection