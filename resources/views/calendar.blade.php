@extends('layouts.header', [
  'type'        => 'page',
  'heading'     => 'Agenda Synergie',
  'subheading'  => 'Ajoutez l\'agenda à votre Google Calendar',
  'image'       => get_page_image()
])

@section('page')
<div class="text-center">
  <iframe src="https://calendar.google.com/calendar/embed?height=600&amp;wkst=1&amp;bgcolor=%23FFFFFF&amp;src=f3mthvntc98p8s8nd9a1ec0gio%40group.calendar.google.com&amp;color=%230F4B38&amp;ctz=Europe%2FParis" style="border-width:0" width="800" height="600" frameborder="0" scrolling="no"></iframe>
</div>
@endsection
