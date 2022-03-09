
@extends('layouts.app')


@section('content')
    <div class="card p-3 mb-2 bg-secondary text-white">
        <h5 class="card-header">Details</h5>
        @if ($message = Session::get('success'))
            <div class="alert alert-success">
                <p>{{ $message }}</p>
            </div>
        @endif
        <div class="card-body">
            <div class="mb-4">
                <form action = "/edit/<?php echo $bursary_statuses[0]->id; ?>" method = "post">
                    <input type = "hidden" name = "_token" value = "<?php echo csrf_token(); ?>">
                    <table width="90%">
                        <tr>
                            <td width="30%">
                                Batch
                            </td>
                            <td width="70%">
                                <input  class="form-control" type = 'text' name = 'batch'
                                        value = '<?php echo$bursary_statuses[0]->batch; ?>'/> </td>
                        </tr>
                        <tr>
                            <td width="30%">
                                Faculty
                            </td>
                            <td width="70%">
{{--                                <input  class="form-control" type = 'text' name = 'faculty'--}}
{{--                                        value = '<?php echo$bursary_statuses[0]->faculty; ?>'/>--}}
                                <select name="faculty" class="custom-select" id="inputGroupSelect01" >
{{--                                    <option  selected>Choose...</option>--}}
                                    <option value=<?php echo $bursary_statuses[0]->faculty; ?> selected><?php echo
                                        $bursary_statuses[0]->faculty
                                        ?></option>
                                    {{--                                                <option value="Graduate Studies">Graduate Studies</option>--}}
                                    <option value="Agricultural Sciences">Agricultural Sciences</option>
                                    <option value="Applied Sciences">Applied Sciences</option>
                                    <option value="Geomatics">Geomatics</option>
                                    <option value="Management Studies">Management Studies</option>
                                    <option value="Medicine">Medicine</option>
                                    <option value="Social Sciences & Languages">Social Sciences & Languages</option>
                                    <option value="Technology">Technology</option>
                                </select>
                            </td>
                        </tr>
                        <tr>
                            <td>Installment Name</td>
                            <td>
                                <input class="form-control" type = 'text' name = 'installment_name'
                                       value = '<?php echo$bursary_statuses[0]->installment_name; ?>'/>
                            </td>
                        </tr>
                        <tr>
                            <td>Description</td>
                            <td>
                                <input class="form-control" type = 'text' name = 'bursary_description'
                                       value = '<?php echo$bursary_statuses[0]->bursary_description; ?>'/>
                            </td>
                        </tr>


                        <tr>
                            <td colspan = '2'>
                                </br>
                                <input  type = 'submit' value = "Update" />
                            </td>
                        </tr>
                    </table>
                </form>

            </div>
        </div>
    </div>

@endsection
