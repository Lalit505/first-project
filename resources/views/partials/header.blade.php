<h2>welcome to header part</h2>
@include{"partials.header"}
{{ print_r($data)}}
@foreach($data as number)
<h3>number ={{ $number }}</h3>
@endforeach