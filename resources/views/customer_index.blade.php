<!DOCTYPE html>
<html lang="en">
<head>
    @laravelViewsStyles
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Account admin page</title>
    <script defer src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <link  href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/3.3.0/mdb.min.css" rel="stylesheet"/>
    <link rel="stylesheet" href="https://unpkg.com/bootstrap-table@1.21.1/dist/bootstrap-table.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
    <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.2.23/angular.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
    <script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-switch/3.3.2/css/bootstrap3/bootstrap-switch.min.css" rel="stylesheet" />
    <link rel="" href="https://flatlogic.github.io/awesome-bootstrap-checkbox/bower_components/Font-Awesome/css/font-awesome.css">

    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.4/css/jquery.dataTables.css" />
    <script src="https://cdn.datatables.net/1.13.4/js/jquery.dataTables.js"></script>
</head>
<body>
    @laravelViewsScripts
    <center><div class="container" style="margin:auto;">
        <div class="d-flex flex-column" style="width:78%;">
            <div class="card" style="width:90%; height:500px; margin:10px;">
                <center><h1>Customers</h1></center>
                <div class="c_list" style='overflow-x:auto;'>
                    <table class="display dataTable">
                        <tr>
                            <th>Id</th>
                            <th>Name</th>
                            <th>Address</th>
                            <th>Contract Number</th>
                            <th>Contract Date</th>
                        </tr>
                        @foreach($adminData as $user)
                        <form method="POST" name="" action="">
                            <tr id="r_{!! $user->id !!}">
                                <td class="col-md-2">
                                    {!! $user->id !!}
                                </td>
                                <td class="col-md-2" id="n_{!! $user->id !!}">
                                    {!! $user->name !!}
                                </td>
                                <td class="col-md-2" id="a_{!! $user->id !!}">
                                    {!! $user->address !!}
                                </td>
                                <td class="col-md-2" id="c_{!! $user->id !!}">
                                    {!! $user->accountId !!}
                                </td>
                                <td class="col-md-2" id="d_{!! $user->id !!}">
                                    {!! $user->contractDate !!}
                                </td>
                            </tr>
                        </form>
                        @endforeach
                    </table>
                </div>
            </div>
            <div style="width:90%; margin:10px;">
                <center><button class="btn btn-dark" id="c_new" style="width:25%;">New</button></center>
            </div>
            <div id="c_update" name="c_update" class="card d-none" style="width:90%; margin:10px;">
                <form method="post" action="{{ route('account.update') }}" enctype="multipart/form-data">
                    @csrf
                        <div class="container d-flex flex-column" style="text-align:left;">
                        <h2>Customer update</h2>
                        <input class="form-control " type="text" id="id" name="id">
                        <label for="name">Customer name:</label>
                        <input class="form-control" type="text" id="name" name="name" style="width:50%; margin:5px;" required>
                        <label for="address">Customer address:</label>
                        <input class="form-control" type="text" id="address" name="address" style="width:50%; margin:5px;" required>
                        <label for="name">Customer code:</label>
                        <input class="form-control" type="text" id="customerId" name="customerId" style="width:25%; margin:5px;">
                        <label for="name">Customer contact date:</label>
                        <input class="form-control" type="date" id="contractDate" name="contractDate" style="width:25%; margin:5px;" required>
                        <br>
                        <button type="submit" class="btn btn-dark" name="c_update" style="width:25%;">Update</button>
                    </div>
                </form>
            </div>
            <div id="c_insert" name="c_insert" class="card d-none" style="width:90%; margin:10px;">
                <form method="post" action="{{ route('account.store') }}" enctype="multipart/form-data">
                    @csrf
                        <div class="container d-flex flex-column" style="text-align:left;">
                        <h2>Customer insert</h2>
                        <label for="name_i">Customer name:</label>
                        <input class="form-control" type="text" id="name_i" name="name_i" style="width:50%; margin:5px;" required>
                        <label for="address_i">Customer address:</label>
                        <input class="form-control" type="text" id="address_i" name="address_i" style="width:50%; margin:5px;" required>
                        <label for="customer_i">Customer code:</label>
                        <input class="form-control" type="text" id="customerId_i" name="customerId_i" style="width:25%; margin:5px;">
                        <label for="contractDate_i">Customer contact date:</label>
                        <input class="form-control" type="date" id="contractDate_i" name="contractDate_i" style="width:25%; margin:5px;" required>
                        <br>
                        <button type="submit"class="btn btn-dark" name="c_insert" style="width:25%;">Insert</button>
                    </div>
                </form>
            </div>
        <div>
    </div></center>

    <div class="modal" id="myModal">
        <div class="modal-dialog modal-sm modal-dialog-centered"> <!--modal-lg-->
            <!-- Modal content-->
            <div class="modal-content">
                <div class="modal-header" style="background-color:black; color:white;">
                    <h4 class="modal-title">Error</h4>
                    <button type="button" class="close btn btn-warning" data-bs-dismiss="modal">&times;</button>
                </div>
                <div class="modal-body">
                    <p class="myModalText fs-3">Some text in the modal.</p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-dark" data-bs-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>
    <script>
        $(document).ready(function(){
            $("#c_new").on("click", function(e){
                e.preventDefault();
                $("#c_insert").removeClass("d-none");
                $("#c_update").addClass("d-none");
                $("#name_i").val("");
                $("#address_i").val("");
                $("#customerId_i").val("");
                $("#contractDate_i").val("");
            })
            $("tr").on("click", function(e){
                e.preventDefault();
                var str = $(this).attr('id');
                var str2 = str.replace("r_","");
                $("#id").val(str2);
                $("#c_update").removeClass("d-none");
                $("#c_insert").addClass("d-none");
                var name = "#n_"+str2;
                $("#name").val(get_value(name));
                var name = "#a_"+str2;
                $("#address").val(get_value(name));
                var name = "#c_"+str2;
                $("#customerId").val(get_value(name));
                var name = "#d_"+str2;
                $("#contractDate").val(get_value(name));
            })
        });
        function get_value(str){
            var val = $(str).text();
            val = val.replace(/ /g,"");
            val = val.replaceAll("\n","");
            return val;
        }
    </script>

</body>
</html>
