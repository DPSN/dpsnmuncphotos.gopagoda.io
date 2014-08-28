@extends('layouts.master')

@section('content')
  <div class="speak">
    {{-- @if (!isset($_SERVER["DB1_HOST"])) --}}
    @if (False))
      <p>We were unable to locate your database. You can create one in your <a href="https://dashboard.pagodabox.io" target="_blank">admin panel</a>, Pagoda Box will automatically make the database credentials available to this application.</p>
    @else
      {{ Form::open(array('url' => '/')) }}
        <div class="textarea">
          {{ Form::textarea('question') }}
        </div>
        {{ Form::button('', array('id' => 'ask', 'type' => 'submit')) }}
      {{ Form::close() }}

      @if (!empty($questions))
        <div class="conversations">
          @foreach ($questions as $question)
            <div class="conversation">
              <div class="question">
                {{{ $question->body }}}
              </div>
              <div class="hr"></div>
              <div class="answer">
                {{{ $question->answer }}}
              </div>
            </div>
          @endforeach
        </div>
      @endif
    @endif
  </div>
@stop
