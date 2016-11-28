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
                      <button id="export" class="btn success-btn">Export to Spreadsheet</button>
                      </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>

<script type='text/javascript' src='https://code.jquery.com/jquery-1.11.0.min.js'></script>
<script type='text/javascript'>
$(document).ready(function () {
    function exportTableToCSV($table, filename) {
        var $headers = $table.find('tr:has(th)')
            ,$rows = $table.find('tr:has(td)')

            // Temporary delimiter characters unlikely to be typed by keyboard
            // This is to avoid accidentally splitting the actual contents
            ,tmpColDelim = String.fromCharCode(11) // vertical tab character
            ,tmpRowDelim = String.fromCharCode(0) // null character

            // actual delimiter characters for CSV format
            ,colDelim = '","'
            ,rowDelim = '"\r\n"';

            // Grab text from table into CSV formatted string
            var csv = '"';
            csv += formatRows($headers.map(grabRow));
            csv += rowDelim;
            csv += formatRows($rows.map(grabRow)) + '"';

            // Data URI
            var csvData = 'data:application/csv;charset=utf-8,' + encodeURIComponent(csv);

        // For IE (tested 10+)
        if (window.navigator.msSaveOrOpenBlob) {
            var blob = new Blob([decodeURIComponent(encodeURI(csv))], {
                type: "text/csv;charset=utf-8;"
            });
            navigator.msSaveBlob(blob, filename);
        } else {
            $(this)
                .attr({
                    'download': filename
                    ,'href': csvData
                    //,'target' : '_blank' //if you want it to open in a new window
            });
        }

        //------------------------------------------------------------
        // Helper Functions 
        //------------------------------------------------------------
        // Format the output so it has the appropriate delimiters
        function formatRows(rows){
            return rows.get().join(tmpRowDelim)
                .split(tmpRowDelim).join(rowDelim)
                .split(tmpColDelim).join(colDelim);
        }
        // Grab and format a row from the table
        function grabRow(i,row){
             
            var $row = $(row);
            //for some reason $cols = $row.find('td') || $row.find('th') won't work...
            var $cols = $row.find('td'); 
            if(!$cols.length) $cols = $row.find('th');  

            return $cols.map(grabCol)
                        .get().join(tmpColDelim);
        }
        // Grab and format a column from the table 
        function grabCol(j,col){
            var $col = $(col),
                $text = $col.text();

            return $text.replace('"', '""'); // escape double quotes

        }
    }


    // This must be a hyperlink
    $("#export").click(function (event) {
        // var outputFile = 'export'
        var outputFile = 'guests';
        outputFile = outputFile.replace('.csv','') + '.csv'
         
        // CSV
        exportTableToCSV.apply(this, [$('#dvData > table'), outputFile]);
        
        // IF CSV, don't do event.preventDefault() or return false
        // We actually need this to be a typical hyperlink
    });
});
</script>

@endsection
