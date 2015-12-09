@extends('frontend')
@section('title', 'Watch')
@section('title', 'Change Me')
@section('content')
    <div class="row">
        <div class="tab-pane" id="events">
            <div class="events">
                <div class="row">
                    <div class="panel panel-default">
                        <div class="panel-body">
                            <div class="table-responsive">
                                <div id="table2_wrapper" class="dataTables_wrapper" role="grid">
                                    <table class="table dataTable" id="table2" aria-describedby="table2_info">
                                        <thead>
                                        <tr role="row">
                                            <th class="sorting_asc" role="columnheader" tabindex="0" aria-controls="table2" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Title: activate to sort column descending" style="width: 200px;">Title</th>
                                            <th class="sorting" role="columnheader" tabindex="0" aria-controls="table2" rowspan="1" colspan="1" aria-label="Progress: activate to sort column ascending" style="width: 200px;">Show Type</th>
                                            <th class="sorting" role="columnheader" tabindex="0" aria-controls="table2" rowspan="1" colspan="1" aria-label="Status: activate to sort column ascending" style="width: 200px;">Age Rating</th>
                                            <th class="sorting" role="columnheader" tabindex="0" aria-controls="table2" rowspan="1" colspan="1" aria-label="Score: activate to sort column ascending" style="width: 100px;">Number of Episodes</th>
                                        </tr>
                                        </thead>
                                        <tbody role="alert" aria-live="polite" aria-relevant="all">


                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            <!-- table-responsive -->
                        </div>
                        <!-- panel-body -->
                    </div>
                </div>
            </div>
            <!-- events -->
        </div>

    </div>
    <!-- row -->
    </div>
@endsection