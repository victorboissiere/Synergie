@extends('admin.layouts.header')
@section('title')
  @include('admin.utilities.title', [
    'title' => 'Security',
    'description' => 'logs'
  ])
@endsection
@section('page')
<div class="row">
  <div class="col-xs-12">
    <div class="box">
      <div class="box-header">
        <h3 class="box-title">Logs</h3>
      </div>
      <div class="box-body table-responsive no-padding">
        <table class="table table-hover">
          <tr>
            <th>ID</th>
            <th>type</th>
            <th>date</th>
            <th>IP</th>
            <th>Info</th>
          </tr>
          @foreach ($logs as $log)
              <tr class="item-{{ $log->id }}">
                  <td>{{ $log->id }}</td>
                  <td>{{ $log->type }}</td>
                  <td>{{ $log->created_at }}</td>
                  <td>{{ $log->ip }}</td>
                  <td>{{ $log->info }}</td>
              </tr>
          @endforeach
        </table>
      </div>
    </div>
  </div>
</div>
{!! $logs->render() !!}
@endsection
