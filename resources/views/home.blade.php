@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div style="min-width: 600px; overflow-x: scroll;" class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">Guests</div>

                <div class="panel-body">
                    
                    <ul class="nav nav-tabs">
                      <li class="active"><a data-toggle="tab" href="#attending">Attending</a></li>
                      <li><a data-toggle="tab" href="#not-attending">Not Attending</a></li>
                    </ul>

                    <div class="tab-content">
                      <div id="attending" class="tab-pane fade in active">
                        
                        <table class="table table-hover table-responsive table-attending">
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
                        <table class="table table-not-attending">
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
                    <a id="export" role='button' href="#" class="btn btn-success pull-right">Export to Spreadsheet</a>
                </div>
            </div>
        </div>
    </div>
</div>

<script type='text/javascript' src='https://code.jquery.com/jquery-1.11.0.min.js'></script>
<script type='text/javascript'>
$(document).ready(function () {
    function exportTableToCSV($table, filename) {

        var $rows = $table.find('tr:has(td)'),

            // Temporary delimiter characters unlikely to be typed by keyboard
            // This is to avoid accidentally splitting the actual contents
            tmpColDelim = String.fromCharCode(11), // vertical tab character
            tmpRowDelim = String.fromCharCode(0), // null character

            // actual delimiter characters for CSV format
            colDelim = '","',
            rowDelim = '"\r\n"',

            // Grab text from table into CSV formatted string
            csv = '"' + $rows.map(function (i, row) {
                var $row = $(row),
                    $cols = $row.find('td');

                return $cols.map(function (j, col) {
                    var $col = $(col),
                        text = $col.text();

                    return text.replace('"', '""'); // escape double quotes

                }).get().join(tmpColDelim);

            }).get().join(tmpRowDelim)
                .split(tmpRowDelim).join(rowDelim)
                .split(tmpColDelim).join(colDelim) + '"',

            // Data URI
            csvData = 'data:application/csv;charset=utf-8,' + encodeURIComponent(csv);

        $(this)
            .attr({
            'download': filename,
                'href': csvData,
                'target': '_blank'
        });
    }


    // This must be a hyperlink
    $("#export").click(function (event) {
        // var outputFile = 'export'
        alert('hello');
        var outputFile = 'guests';
        outputFile = outputFile.replace('.csv','') + '.csv'
         
        // CSV
        exportTableToCSV.apply(this, [$('.table-attending'), outputFile]);
        
        // IF CSV, don't do event.preventDefault() or return false
        // We actually need this to be a typical hyperlink
    });
});
</script>

@endsection
