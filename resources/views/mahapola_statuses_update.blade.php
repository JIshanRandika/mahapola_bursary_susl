
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
                <form action = "/msedit/<?php echo $mahapola_statuses[0]->id; ?>" method = "post">
                    <input type = "hidden" name = "_token" value = "<?php echo csrf_token(); ?>">
                    <table width="90%">
                        <tr>
                            <td width="30%">
                                Batch
                            </td>
                            <td width="70%">
                                <input  class="form-control" type = 'text' name = 'batch'
                                        value = '<?php echo$mahapola_statuses[0]->batch; ?>'/> </td>
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
                                    <option value=<?php echo $mahapola_statuses[0]->faculty; ?> selected><?php echo
                                        $mahapola_statuses[0]->faculty
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
                                {{--                                <input class="form-control" type = 'text' name = 'installment_name'--}}
                                {{--                                       value = '<?php echo$bursary_statuses[0]->installment_name; ?>'/>--}}
                                <select name="installment_name" class="custom-select" id="inputGroupSelect01" >
                                    {{--                                    <option selected>Choose...</option>--}}
                                    <option value=<?php echo $mahapola_statuses[0]->installment_name; ?> selected><?php echo
                                        $mahapola_statuses[0]->installment_name
                                        ?></option>
                                    <option value="Installment 01">Installment 01</option>
                                    <option value="Installment 02">Installment 02</option>
                                    <option value="Installment 03">Installment 03</option>
                                    <option value="Installment 04">Installment 04</option>
                                    <option value="Installment 05">Installment 05</option>
                                    <option value="Installment 06">Installment 06</option>
                                    <option value="Installment 07">Installment 07</option>
                                    <option value="Installment 08">Installment 08</option>
                                    <option value="Installment 09">Installment 09</option>
                                    <option value="Installment 10">Installment 10</option>
                                    <option value="Installment 11">Installment 11</option>
                                    <option value="Installment 12">Installment 12</option>
                                    <option value="Installment 13">Installment 13</option>
                                    <option value="Installment 14">Installment 14</option>
                                    <option value="Installment 15">Installment 15</option>
                                    <option value="Installment 16">Installment 16</option>
                                    <option value="Installment 17">Installment 17</option>
                                    <option value="Installment 18">Installment 18</option>
                                    <option value="Installment 19">Installment 19</option>
                                    <option value="Installment 20">Installment 20</option>
                                    <option value="Installment 21">Installment 21</option>
                                    <option value="Installment 22">Installment 22</option>
                                    <option value="Installment 23">Installment 23</option>
                                    <option value="Installment 24">Installment 24</option>
                                    <option value="Installment 25">Installment 25</option>
                                    <option value="Installment 26">Installment 26</option>
                                    <option value="Installment 27">Installment 27</option>
                                    <option value="Installment 28">Installment 28</option>
                                    <option value="Installment 29">Installment 29</option>
                                    <option value="Installment 30">Installment 30</option>
                                    <option value="Installment 31">Installment 31</option>
                                    <option value="Installment 32">Installment 32</option>
                                    <option value="Installment 33">Installment 33</option>
                                    <option value="Installment 34">Installment 34</option>
                                    <option value="Installment 35">Installment 35</option>
                                    <option value="Installment 36">Installment 36</option>
                                    <option value="Installment 37">Installment 37</option>
                                    <option value="Installment 38">Installment 38</option>
                                    <option value="Installment 39">Installment 39</option>
                                    <option value="Installment 40">Installment 40</option>
                                    <option value="Installment 41">Installment 41</option>
                                    <option value="Installment 42">Installment 42</option>
                                    <option value="Installment 43">Installment 43</option>
                                    <option value="Installment 44">Installment 44</option>
                                    <option value="Installment 45">Installment 45</option>
                                    <option value="Installment 46">Installment 46</option>
                                    <option value="Installment 47">Installment 47</option>
                                    <option value="Installment 48">Installment 48</option>
                                    <option value="Installment 49">Installment 49</option>
                                    <option value="Installment 50">Installment 50</option>
                                </select>
                            </td>
                        </tr>
                        <tr>
                            <td>Description</td>
                            <td>
                                <input class="form-control" type = 'text' name = 'mahalpola_description'
                                       value = '<?php echo $mahapola_statuses[0]->mahalpola_description; ?>'/>
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
