
<p>Country name: {{ $country->countryName }}</p>

<p>City: </p>

<ul>

@foreach($country->city as $city)

    <li> {{ $city->cityName }} </li>

@endforeach

</ul>