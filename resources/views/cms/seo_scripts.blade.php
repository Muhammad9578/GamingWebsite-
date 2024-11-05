<style type="text/css">
  .preview_image_cms{
    max-width: 120px;
    max-height: 60px;

  }
  .cms_table td{
    vertical-align: unset !important;
    padding: 5px !important;
  }
.cms_models{
  max-width: 800px !important;
}
.ovrtflow_table{
  overflow-x: scroll;
}
</style>

@extends('layout')
@section('title')
Website Setting
@endsection
@section('content')
<div class="right_col" role="main">

  <div class="container">
    <!-- title row start-->
    <div class="row">
      <div class="col-md-12">
        <div class="page-title">
          <div class="title_left">
            <h3>@yield('title')</h3>
          </div>
        </div>
      </div>
    </div>
  </div>
    <!-- title row end -->

    <!-- main content start here-->
    <section class="bg-white">
      <div class="container border p-3">
        <div class="row">
          <div class="col-md-4 d-flex align-items-center">
            <span class="mr-2">Language</span>
            <select class="form-control rounded">
              <option>Select Language</option>
            </select>
          </div>
        </div>

        <div class="row py-3">
          <div class="col-md-4 py-2">
            <Strong class="mr-2 ">SEO HEADER EN_TH</Strong>
          </div>
          <div class="col-md-12 py-2">
            <textarea class="form-control" placeholder="Header"></textarea>
          </div>
          <div class="col-md-12 py-2">
            <button class="btn btn-success">Save</button>
          </div>
        </div>

        <div class="row py-3">
          <div class="col-md-4 py-2">
            <Strong class="mr-2 ">SEO Footer EN_TH</Strong>
          </div>
          <div class="col-md-12 py-2">
            <textarea class="form-control" placeholder="Footer"></textarea>
          </div>
          <div class="col-md-12 py-2">
            <button class="btn btn-success">Save</button>
          </div>
        </div>

        <div class="row py-3">
          <div class="col-md-4 py-2">
            <Strong class="mr-2 ">SEO Homepage EN_TH</Strong>
          </div>
          <div class="col-md-12 py-2">
            <textarea class="form-control" placeholder="Homepage"></textarea>
          </div>
          <div class="col-md-12 py-2">
            <button class="btn btn-success">Save</button>
          </div>
        </div>

      </div>
    </section>
    <!-- main content end here -->
  </div>
  <!-- model for add icons -->


</div>
@endsection

@section('scripts')
<script>

</script>
@endsection



