@extends('layouts.template')

@section('content')


@foreach ($projects as $project)



<!-- Portfolio item 1-->
<div class="col-lg-4 col-sm-6 mb-4">
  <div class="portfolio-item">
    <a class="portfolio-link" data-bs-toggle="modal" href="#portfolioModal1{{ $project->id }}">
      <div class="portfolio-hover">
        <div class="portfolio-hover-content"><i class="fas fa-plus fa-3x"></i></div>
      </div>
      <img class="img-fluid" src="{{asset('storage').'/'.$project->image }}" alt="proyectos CC El Encantado"/>
    </a>
    <div class="portfolio-caption">
      <div class="portfolio-caption-heading">{{ $project->name }}</div>
      <!-- <div class="portfolio-caption-subheading text-muted">Illustration</div> -->
    </div>
  </div>
</div>

<!-- Portfolio Modals-->
<!-- Portfolio item 1 modal popup-->
<div class="portfolio-modal modal fade" id="portfolioModal1{{ $project->id }}" tabindex="-1" role="dialog" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="close-modal" data-bs-dismiss="modal"><img src="assets/img/close-icon.svg" alt="Close modal" /></div>
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-lg-8">
            <div class="modal-body">
              <!-- Project details-->
              <h2 class="text-uppercase">{{ $project->name }}</h2>
              <!-- <p class="item-intro text-muted">Lorem ipsum dolor sit amet consectetur.</p> -->
              <img class="img-fluid d-block mx-auto" src="{{asset('storage').'/'.$project->image }}" alt="proyectos CC El Encantado" />
              <p>{{ $project->description }} </p>
              <!-- <ul class="list-inline">
                <li>
                  <strong>Client:</strong>
                  Threads
                </li>
                <li>
                  <strong>Category:</strong>
                  Illustration
                </li>
              </ul> -->
              <div class="mt-4">
                <a href="{{ $project->url }}" target="_blank" class="btn btn-primary btn-xl text-uppercase mt-4" type="button">
                  <i class="fas fa-eye me-1"></i>Visita la fuente
                </a>
              </div>

            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
@endforeach

@endsection