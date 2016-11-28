@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div style="min-width: 600px;" class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">Guests</div>

                <div class="panel-body">
                    
                    <ul class="nav nav-tabs">
                      <li class="active"><a data-toggle="tab" href="#attending">Attending</a></li>
                      <li><a data-toggle="tab" href="#not-attending">Not Attending</a></li>
                    </ul>

                    <div class="tab-content">
                      <div id="attending" class="tab-pane fade in active">
                        
                        <table class="table table-hover table-responsive">
                        <thead>
                          <tr>
                            <th>Name</th>
                            <th>Adult/Child</th>
                            <th>Starter</th>
                            <th>Main</th>
                            <th>Dietry Requirements</th>
                            <th>Date</th>
                          </tr>
                        </thead>
                        <tbody>
                        
                        @foreach ($attending as $guest)
                            <tr>
                                <td>{{ $guest['name'] }}</td>
                                <td>{{ $guest['type'] }}</td>

                                @if ($guest['type'] == 'adult')
                                    <td>{{ $guest['starter']['0']->short_description }}</td>
                                @else
                                    <td>N/A</td>
                                @endif

                                <td>{{ $guest['main']['0']->short_description }}</td>
                                <td>{{ $guest['requirements'] }}</td>
                                <td>{{ $guest['date']->format('d-m-Y') }}</td>
                            </tr>
                        @endforeach
                        
                        </tbody>
                      </table>
                      </div>
                      <div id="not-attending" class="tab-pane fade">
                        <table class="table">
                        <thead>
                          <tr>
                            <th>Name</th>
                            <th>Date</th>
                          </tr>
                        </thead>
                        <tbody>
                        
                        @foreach ($notAttending as $guest)
                            <tr>
                                <td>{{ $guest['name'] }}</td>
                                <td>{{ $guest['created_at']->format('d-m-Y') }}</td>
                            </tr>
                        @endforeach
                        
                        </tbody>
                      </table>
                      
                      </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>

<!-- Begin Cookie Consent plugin by Silktide - http://silktide.com/cookieconsent -->
<script type="text/javascript">
    window.cookieconsent_options = {"message":"This website uses cookies to ensure you get the best experience on our website","dismiss":"Got it!","learnMore":"More info","link":null,"theme":"dark-bottom"};
</script>

<script type="text/javascript" src="//cdnjs.cloudflare.com/ajax/libs/cookieconsent2/1.0.10/cookieconsent.min.js"></script>
<!-- End Cookie Consent plugin -->

@endsection
