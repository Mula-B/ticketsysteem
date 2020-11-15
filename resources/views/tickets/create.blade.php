@extends('layouts.main')

@section('content')

<main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-md-4"><div class="chartjs-size-monitor" style="position: absolute; left: 0px; top: 0px; right: 0px; bottom: 0px; overflow: hidden; pointer-events: none; visibility: hidden; z-index: -1;"><div class="chartjs-size-monitor-expand" style="position:absolute;left:0;top:0;right:0;bottom:0;overflow:hidden;pointer-events:none;visibility:hidden;z-index:-1;"><div style="position:absolute;width:1000000px;height:1000000px;left:0;top:0"></div></div><div class="chartjs-size-monitor-shrink" style="position:absolute;left:0;top:0;right:0;bottom:0;overflow:hidden;pointer-events:none;visibility:hidden;z-index:-1;"><div style="position:absolute;width:200%;height:200%;left:0; top:0"></div></div></div>
      <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Tickets</h1>
        <div class="btn-toolbar mb-2 mb-md-0">
          <div class="btn-group mr-2">
            <button type="button" class="btn btn-sm btn-outline-secondary">Share</button>
            <button type="button" class="btn btn-sm btn-outline-secondary">Export</button>
          </div>
          <button type="button" class="btn btn-sm btn-outline-secondary dropdown-toggle">
            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-calendar"><rect x="3" y="4" width="18" height="18" rx="2" ry="2"></rect><line x1="16" y1="2" x2="16" y2="6"></line><line x1="8" y1="2" x2="8" y2="6"></line><line x1="3" y1="10" x2="21" y2="10"></line></svg>
            This week
          </button>
        </div>
      </div>

      <form action="" method="post">
        {{ csrf_field() }}

        <div class="form-group">
          <label for="name">Naam:</label>
          <input type="text" id="name" name="name" class="form-control" />
        </div>
        <div class="form-group">
          <label for="name">Datum:</label>
          <input type="text" id="created_at" name="created_at" class="form-control" />
        </div>
        <div class="form-group">
          <label for="priority">Selecteer prioriteit</label>
            <select class="form-control" id="priority" name="priority">
              <option>Laag</option>
              <option>Middel</option>
              <option>Hoog</option>
            </select>
        </div>
        <div class="form-group">
          <label for="name">Onderwerp:</label>
          <input type="text" id="subject" name="subject" class="form-control" />
        </div>
        <div class="form-group">
          <label for="name">Content:</label>
          <input type="text" id="content" name="content" class="form-control" />
        </div>
        <div class="form-group">
          <label for="name">Medewerker:</label>
          <input type="text" id="employee" name="employee" class="form-control" />
        </div>
        <div class="form-group">
          <label for="name">Closed:</label>
          <input type="text" id="closed" name="closed" class="form-control" />
        </div>
        <br>
        <button class="btn btn-primary" type="submit">Voeg ticket toe</button>
        <a href="{{ route('tickets.index') }}" class="btn btn-secondary">Terug</a>

      </form>
      
    </main>
    @endsection