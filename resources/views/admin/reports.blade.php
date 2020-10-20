@extends('admin.layout.layout')

@section('content')
    <div class="card">

        <header class="card-header">
            
            <span class="pull-left">
                <h4>Extract Report</h4>
            </span>

            <div class="btn-group btn-group-sm pull-right" role="group">
                <a href="{{ route('distributor.index') }}" class="btn btn-primary" title="Show All Faq">
                    <i class="fa fa-list" aria-hidden="true"></i>
                </a>
            </div>

        </header>

        <div class="card-body">
          <form method="post" action="{{ action('admin\ReportController@getreports') }}" class="form-horizontal">
            {{ csrf_field() }}
            <div class="form-group">
              <label for="question" class="col-md-2 control-label">To Date</label>
              <div class="col-md-10">
                <input type="date" class="form-control hide-replaced"  id="from" name="from" required="">
              </div>
            </div>
            <div class="form-group">
              <label for="question" class="col-md-2 control-label">From Date</label>
              <div class="col-md-10">
                <input type="date" class="form-control hide-replaced"  id="to"  name="to" required="">
              </div>
            </div>
           
            <div class="form-group">
              <label for="question" class="col-md-2 control-label">Report Type</label>
                <div class="col-md-10">
                  <select name="Report_Type" class="form-control" id="report_filter" required="">
                     <option value="">Select Report Type</option>
                     <option value="1">Distributor Reports</option>
                     <option value="2">Issue Resolved</option>
                  </select>
                </div>
</div>
                <div class="form-group">
                    <div class="col-md-offset-2 col-md-10">
                      <input type="submit" class="btn btn-primary" value="Download Report">
                    </div>
                </div>
          </form>
        </div>
    </div>  
    
@stop
@section('js')     
<script type="text/javascript">

$(document).on("change","#to",function(event){
  var startDate = new Date($('#from').val());
   var endDate = new Date($('#to').val());
    if (startDate > endDate){
        $('#to').val('');
        alert("To date should be greater or equal to From date");
        event.preventDefault();
    }
    var today = new Date();
    if (endDate > today){
        $('#to').val('');
        alert("To date should be smaller or equal to Current date");
        event.preventDefault();
    }
});


</script>
@endsection
