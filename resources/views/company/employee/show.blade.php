@extends('company.layouts.app')

@section('content')

{{-- {{ dd("adad") }} --}}
<div class="row">
    <div class="col-md-12">
        <!-- BEGIN EXAMPLE TABLE PORTLET-->
        <div class="portlet box blue-hoki">
            <div class="portlet-title">
                <div class="caption">
                    <i class="fa fa-globe"></i> عرض تقرير الموظف
                </div>
                <div class="tools">

                </div>
            </div>
            <div class="portlet-body">
                <div class="page-head">

                    <div class="col-md-12" style="padding-bottom: 10px">
                        <form class="contact-form" enctype="multipart/form-data" method="post" action="#">
                            @csrf
                            <div class="contact-one m-b30">

                                <div class="row">
                                <div class="col-md-6 form-group">
                                    <label>اسم الموظف</label>
                                    <input  name="employee_name" type="text" value="{{$report->employee_name}}" class="form-control"  required>
                                </div>

                                <div class="col-md-6 form-group">
                                    <label>اسم العميل</label>
                                    <input  name="customer_name" type="text" value="{{$report->customer->first()->name}}" class="form-control"  required>
                                </div>

                                    {{-- <label>اسم العميل  </label>
                                    <input name="emo_id" type="text" required class="form-control" placeholder="اسم العامل">
                                </div> --}}

                                <div class="col-md-6 form-group">
                                    <label>رقم الجوال</label>
                                    <input name="phone" type="text" value="{{$report->phone}}" required class="form-control" placeholder="رقم الجوال">
                                </div>



                                <div class="col-md-6 form-group">
                                    <label>مصاريف تشغيلية</label>
                                    <input name="operating_expenses" type="text" value="{{$report->operating_expenses}}" required class="form-control" placeholder="مصاريف تشغيلية">
                                </div>
                                <div class="col-md-6 form-group">
                                    <label> ساعات العمل</label>
                                    <input name="working_hours" type="text" value="{{$report->working_hours}}" required class="form-control" placeholder="ساعات العمل">
                                </div>

                                <div class="col-md-6 form-group">
                                    <label>  ساعات العمل الاضافية</label>
                                    <input name="overtime" type="text" value="{{$report->overtime}}" required class="form-control" placeholder="ساعات العمل الاضافية">
                                </div>

                                <div class="col-md-6 form-group custom-file">
                                    @foreach (json_decode($report->images) as $key => $item)
                                        <img src="{{asset('uploads/employee_reports/'.$item)}}" alt="" data-toggle="modal" data-target="#exampleModal{{$key}}" style="max-height: 100px;max-width: 300px">
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
                                                    <img src="{{asset('uploads/employee_reports/'.$item)}}" alt="" style="max-height: 700px;max-width: 550px">

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


                                    <div class="">
                                    <textarea name="notes" rows="4"  class="form-control " required placeholder="ملاحظات">{{$report->notes}}</textarea>
                                </div>



                                {{-- <div class="text-right">
                                    <button name="submit" type="submit" value="Submit" class="site-button btn-effect">إرسال

                                    </button>
                                </div> --}}
                        </form>
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
