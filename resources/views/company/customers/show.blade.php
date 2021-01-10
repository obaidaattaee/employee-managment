@extends('company.layouts.app')

@section('content')

{{-- {{ dd("adad") }} --}}
<div class="row">
    <div class="col-md-12">
        <!-- BEGIN EXAMPLE TABLE PORTLET-->
        <div class="portlet box blue-hoki">
            <div class="portlet-title">
                <div class="caption">
                    <i class="fa fa-globe"></i> عرض تقرير العميل
                </div>
                <div class="tools">
                    <a href="{{route('company.customer.reports' , ['user' => $user])}}" >
                        <button class="btn btn-info btn-sm">
                            رجوع
                        </button>
                    </a>
                </div>
            </div>
            <div class="portlet-body">
                <div class="page-head">
{{-- {{ $report }} --}}
                    <div class="col-md-12" style="padding-bottom: 10px">
                            @csrf
                            <div class="contact-one m-b30">

                                <div class="row">
                                <div class="col-md-6 form-group">
                                    <label>اسم العميل</label>
                                    <input type="text"  class="form-control"  value="{{auth()->user()->name}}" disabled required>
                                    <input  name="customer_name" type="hidden" value="{{auth()->user()->name}}"  class="form-control"  required>
                                </div>

                                    <div class="col-md-6 form-group">
                                            <label>اسم الموظف </label>
                                            <input name="phone" type="text" value="{{ $report->employee->first()->name }}" required class="form-control" placeholder="رقم الجوال">
                                        </div>
                                    </div>

                                    {{-- <label>اسم العميل  </label>
                                    <input name="emo_id" type="text" required class="form-control" placeholder="اسم العامل">
                                </div> --}}

                                <div class="col-md-6 form-group">
                                    <label>رقم الجوال</label>
                                    <input name="phone" type="text" required class="form-control" value="{{ $report->phone }}" placeholder="رقم الجوال">
                                </div>

                                {{-- <div class="col-md-6 form-group">
                                    <label for="emo_id" class="caption-subject bold uppercase">مكان العمل </label>
                                    <select name="company_id" class="form-control">
                                        <option value=''>مكان العمل </option>
                                        @foreach(auth()->user()->companies as $emo)
                                            <option class="form-control select2 "
                                                    {{old('company_id')== $emo->id?"selected":""}} value='{{$emo->id}}'>{{$emo->address}}</option>
                                        @endforeach
                                    </select>
                                </div> --}}
                                <div class="col-md-6 form-group">
                                    <label>مكان العمل </label>
                                    <input name="work_space" type="text" value="{{ $report->work_space }}" required class="form-control" placeholder="مكان العمل ">
                                </div>


                                <div class="col-md-6 form-group">
                                    <label>التقييم</label>
                                    <input name="evaluation" type="text" value="{{ $report->evaluation }}" required class="form-control" placeholder="التقييم">
                                </div>

                                <div class="col-md-6 form-group custom-file">
                                    @foreach (json_decode($report->images) as $key => $item)
                                        <img src="{{asset('uploads/customer_reports/'.$item)}}" alt="" data-toggle="modal" data-target="#exampleModal{{$key}}" style="max-height: 100px;max-width: 300px">
                                        {{-- <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
                                            Launch demo modal
                                          </button> --}}

                                          <!-- Modal -->
                                          <div class="modal fade" id="exampleModal{{$key}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                            <div class="modal-dialog" role="document">
                                              <div class="modal-content">
                                                <div class="modal-header">
                                                  <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                                                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                  </button>
                                                </div>
                                                <div class="modal-body">
                                                    <img src="{{asset('uploads/customer_reports/'.$item)}}" alt="" style="max-height: 700px;max-width: 550px">

                                                </div>
                                                <div class="modal-footer">
                                                  <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                                  <button type="button" class="btn btn-primary">Save changes</button>
                                                </div>
                                              </div>
                                            </div>
                                          </div>
                                        @endforeach
                                </div>

                                    <div class="col-md-6 form-group">
                                    <label> ملاحظات </label>
                                    <textarea name="notes" rows="4" class="form-control " required placeholder="ملاحظات">{{$report->notes}}</textarea>
                                </div>


                            </div>
                            {{-- {{dd('request::class')}}; --}}
                    </div>
                </div>

            </div>
        </div>
        <!-- END EXAMPLE TABLE PORTLET-->

    </div>
</div>

<script>
    $('#myModal').on('shown.bs.modal', function () {
  $('#myInput').trigger('focus')
})
</script>
@endsection
