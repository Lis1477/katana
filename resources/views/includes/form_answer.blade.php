<link href="{{ asset('css/form_answer.css') }}" rel="stylesheet">

<div class="form-answer_wrapper" id="js-feedback" title="Закрыть">
</div>

<div class="form-answer_panel">
    <div class="form-answer_close">
        <div id="js-feedback-close" title="Закрыть">&#10006;</div>
    </div>
    <div class="form-answer_text">
        <p>
            @if(session('note'))
                {!! session('note') !!}
            @endif
        </p>
    </div>
</div>



@section('scripts')
@parent

<script>

$(document).ready(function(){

    $('#js-feedback-close').click(function() {
        $('#js-feedback').addClass('closed');
        $('.form-answer_panel').addClass('closed');
    });

    $('#js-feedback').click(function() {
        $('#js-feedback').addClass('closed');
        $('.form-answer_panel').addClass('closed');
    });

});

</script>

@endsection