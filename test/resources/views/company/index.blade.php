@if(isset($companies))
    @foreach( $companies as $companyone )
        <p>Company name: <a href="company/{{$companyone->id}}">{{$companyone->comp_name}}</a></p> 
    @endforeach
@endif

@if(isset($company))    
    <p>Company name: {{$company->comp_name}}</p>
    <p>Company level: {{$company->comp_level}}</p>    
@endif