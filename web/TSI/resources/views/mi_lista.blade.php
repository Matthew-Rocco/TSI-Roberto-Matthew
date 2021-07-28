@extends('layouts.master')

@section('contenido')
  <div class="row mt-5">
    <div class="col-12 col-md-6 col-lg-5 mx-auto">
      <div class="card">
        <div class="card-header text-center bg-info bg-gradient">
          <span>Crear Lista</span>
        </div>
        <div class="card-body">
          <div class="mb-3">
            <label for="titulo-txt" class="form-label">Titulo de la Lista</label>
            <input type="text" id="titulo-txt" class="form-control">
          </div>
          <div class="mb-3">
            <label for="gabinete-select" class="form-label">Gabinete</label>
            <select class="form-select" id="gabiente-select">

            </select>
          </div>
          <div class="mb-3">
            <label for="placamadre-select" class="form-label">Placa Madre</label>
            <select class="form-select" id="placamadre-select">

            </select>
          </div>
          <div class="mb-3">
            <label for="procesador-select" class="form-label">Procesador</label>
            <select class="form-select" id="procesador-select">

            </select>
          </div>
          <div class="mb-3">
            <label for="tarjetavideo-select" class="form-label">Tarjeta de Video</label>
            <select class="form-select" id="tarjetavideo-select">

            </select>
          </div>
          <div class="mb-3">
            <label for="almacenamiento-select" class="form-label">Almacenamiento</label>
            <select class="form-select" id="almacenamiento-select">

            </select>
          </div>
          <div class="mb-3">
            <label for="fuentepoder-select" class="form-label">Fuente de Poder</label>
            <select class="form-select" id="fuentepoder-select">

            </select>
          </div>
          <div class="mb-3">
            <label for="ram-select" class="form-label">Memoria RAM</label>
            <select class="form-select" id="ram-select">

            </select>
          </div>
          <div class="mb-3">
            <label for="cooler-select" class="form-label">Cooler</label>
            <select class="form-select" id="cooler-select">

            </select>
          </div>
        </div>
        <div class="card-footer d-grip gap-1 bg-info">
          <button class="btn btn-success " type="button">Registrar</button>
        </div>
      </div>
    </div>
    <div class="col-12 col-md-6 col-lg-6 mx-auto">
      <div class="card">
        <div class="card-header text-center bg-info bg-gradient">
            <span>Mis Listas</span>
        </div>
        <div class="card-body">
          <table class="table table-hover table-bordered table-striped table-responsive">
            <thead class="bg-info">
            </thead>
            <tbody id="tbody-lista">

            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>
@endsection