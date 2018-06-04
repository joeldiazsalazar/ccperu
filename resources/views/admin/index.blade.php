@extends('layouts.admin')


@section('contenido')

<section class="panels-wells">

      <div class="card">
       <div class="card-header"><h5 class="card-header-text">Panels</h5></div>
        <div class="card-block">
          <div class="row">
           <div class="col-xl-2 col-lg-4 col-md-4 col-sm-6">
             <div class="panel panel-default">
              <div class="panel-heading bg-default txt-white">
                Default Panel
              </div>
              <div class="panel-body">
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum tincidunt est vitae ultrices accumsan.</p>
              </div>
              <div class="panel-footer">
                Panel Footer
              </div>
            </div>
          </div>

            <div class="col-xl-2 col-lg-4 col-md-4 col-sm-6">
             <div class="panel panel-success">
              <div class="panel-heading bg-success">
                Success Panel
              </div>
              <div class="panel-body">
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum tincidunt est vitae ultrices accumsan.</p>
              </div>
              <div class="panel-footer txt-success">
                Panel Footer
              </div>
            </div>
          </div>

            <div class="col-xl-2 col-lg-4 col-md-4 col-sm-6">
             <div class="panel panel-primary">
              <div class="panel-heading bg-primary">
                Primary Panel
              </div>
              <div class="panel-body">
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum tincidunt est vitae ultrices accumsan.</p>
              </div>
              <div class="panel-footer txt-primary">
                Panel Footer
              </div>
            </div>
          </div>

            <div class="col-xl-2 col-lg-4 col-md-4 col-sm-6">
             <div class="panel panel-danger">
              <div class="panel-heading bg-danger">
                Danger Panel
              </div>
              <div class="panel-body">
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum tincidunt est vitae ultrices accumsan.</p>
              </div>
              <div class="panel-footer txt-danger">
                Panel Footer
              </div>
            </div>
          </div>

            <div class="col-xl-2 col-lg-4 col-md-4 col-sm-6">
             <div class="panel panel-warning">
              <div class="panel-heading bg-warning">
                Warning Panel
              </div>
              <div class="panel-body">
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum tincidunt est vitae ultrices accumsan.</p>
              </div>
              <div class="panel-footer txt-warning">
                Panel Footer
              </div>
            </div>
          </div>

            <div class="col-xl-2 col-lg-4 col-md-4 col-sm-6">
             <div class="panel panel-info">
              <div class="panel-heading bg-info">
                Info Panel
              </div>
              <div class="panel-body">
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum tincidunt est vitae ultrices accumsan.</p>
              </div>
              <div class="panel-footer">
                Panel Footer
              </div>
            </div>
          </div>
          <!-- end of row -->
        </div>
      </div>
    </div>
    <div class="card">
     <div class="card-header"><h5 class="card-header-text">Wells</h5></div>
      <div class="card-block">
        <div class="row">
         <div class="col-xl-12 col-lg-4 col-md-4 col-sm-6">
           <div class="well well-sm">
             Small Well
           </div>
           <div class="well">
             Normal Well
           </div>
           <div class="well well-lg">
             Large Well
           </div>
        </div>
        <!-- end of row -->
      </div>
    </div>
  </div>
</section>

@endsection
