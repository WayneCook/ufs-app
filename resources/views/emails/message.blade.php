
<h3>YOU HAVE A NEW MESSAGE</h3>
<hr>

@if (!isset($message_sent->name))
    <p><strong>NAME: </strong> N/A</p>
@else
    <p><strong>NAME: </strong> {{ $message_sent->name }} </p>
@endif

@if (!isset($message_sent->email))
    <p><strong>EMAIL: </strong> N/A</p>
@else
    <p><strong>EMAIL: </strong> {{ $message_sent->email }} </p>
@endif

@if (!isset($message_sent->phone))
    <p><strong>PHONE: </strong> N/A</p>
@else
    <p><strong>PHONE: </strong> {{ $message_sent->phone }} </p>
@endif

@if (!isset($message_sent->location))
    <p><strong>LOCATION: </strong> N/A</p>
@else
    <p><strong>LOCATION: </strong> {{ $message_sent->location }} </p>
@endif

@if (!isset($message_sent->body))
    <p><strong>MESSAGE: </strong> N/A</p>
@else
    <p><strong>MESSAGE: </strong> {{ $message_sent->body }} </p>
@endif




