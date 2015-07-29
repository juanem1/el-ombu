@if (Session::has('errors'))
    <div class="style-msg errormsg">
        <div class="sb-msg">
            <i class="icon-remove"></i>
            <ul class="list-unstyled">
                {{ implode('', $errors->all('<li class="error">:message</li>')) }}
            </ul>
        </div>
    </div>
@endif

@if (Session::has('message'))

    <div class="style-msg infomsg">
        <div class="sb-msg">
            <i class="icon-info-sign"></i>
            {{ Session::get('message') }}
        </div>
    </div>
@endif

@if (Session::has('success'))
    <div class="style-msg successmsg">
        <div class="sb-msg">
            <i class="icon-thumbs-up"></i>
            {{ Session::get('success') }}
        </div>
    </div>
@endif