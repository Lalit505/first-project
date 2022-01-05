<h1>welcome to my show data blade</h1>
@include{"partials.header"}
{{ print_r($data)}}
@foreach($data as $number)
<h3>number={{$number}}</h3>
@endforeach
<script>
var arr = "<?php echo json_encode ($data) ?>";
console.log(arr);



</script>



