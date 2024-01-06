@if (Session::has('error'))

<div class="alert alert-danger alert-dismissible">
    <button type="button" class="close" data-dismiss="alert" aria-hidden="true"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">x</font></font></button>
    <h4><i class="icon fa fa-ban"></i><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"> Error!</font></font></h4> {{Session::get('error') }}
    
</div>

@endif


@if (Session::has('success'))

    <div class="alert alert-success alert-dismissible">
        <button type="button" class="close" data-dismiss="alert" aria-hidden="true"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">x</font></font></button>
        <h4><i class="icon fa fa-check"></i><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"> Success!</font></font></h4> {{Session::get('success') }}
        
    </div>

@endif
