@extends('admin.layouts.app')

@section('content')
			<!-- BEGIN PAGE HEAD -->
			<div class="page-head">

            </div>

			<div class="row">
				<div class="col-md-12">
					<!-- BEGIN EXAMPLE TABLE PORTLET-->
					<div class="portlet box blue">
						<div class="portlet-title">
							<div class="caption">
								<i class="fa fa-globe"></i>جدول خدمات الشركة
							</div>
							<div class="tools">
								<a href="javascript:;" class="collapse">
								</a>
								<a href="#portlet-config" data-toggle="modal" class="config">
								</a>
								<a href="javascript:;" class="reload">
								</a>
								<a href="javascript:;" class="remove">
								</a>
							</div>
						</div>

						<div class="portlet-body">
                            @include("shared.msg")
                          <div class="row mb-6 mb-3  " style="margin-bottom: 15px;">
                            <form class=' col-12 ' >
                                <div class='col-sm-6'>
                                    <input type='text' class="form-control" placeholder="ادخل العنوان" name="title"/></div>

                                <div class='col-sm-4 '>
                                    <button type='submit' class='btn btn-danger'><i class="fa fa-search"></i>بحث</button>
                                    <a href="{{ route('services.create') }}" class="btn btn-success">إضافة خدمة جديد</a>
                                </div>

                            </form></div>
                            @if($services->count()>0)
							<table class="table table-striped table-bordered  table-hover mt-4 " id="sample_1">
							<thead>
							<tr>
								<th>
								العنوان
								</th>
								<th>
                                   الخلاصة
                                </th>
                                <th>
التفاصيل
								</th>
                                <th>
                                   الصورة
                                </th>
                                <th>
                                    العمليات
                                </th>
							</tr>
							</thead>
							<tbody>
                            @foreach($services as $service)
							<tr class="odd gradeX">

								<td>
                                    {{$service->title}}
								</td>
                                <td>
                                    {{$service->summary}}
                                </td>
                                <td>
                                    {{$service->details}}
                                </td>
                                <td>
<img src="{{asset('uploads/public/'.$service->image)}}"  style="max-width: 200px ; max-height: 100px"  alt="">
                                </td>

                                <td width="20%">
                                    <form method="post" action="{{ route('services.destroy', $service->id) }} ">

                                        <a href="{{ route('services.edit', $service->id) }}" class="btn btn-sm blue" >تعديل</a>
                                        <a href="{{ route('services.show', $service->id) }}" class="btn btn-sm green" >عرض</a>

                                        <button onclick='return confirm("هل أنت تريد حذف الخدمة؟")' type="submit"
                                                class="btn btn-danger btn-sm" >حذف</button>
                                        @csrf
                                        @method("DELETE")
                                    </form>
                                </td>

                            </tr>
                            @endforeach

							</tbody>
							</table>
                                {{$services->links() }}
                            @else
                                <div class='alert alert-warning'>للأسف , لا يوجد نتيجة لبحثك</div>

                            @endif
						</div>
					</div>
					<!-- END EXAMPLE TABLE PORTLET-->
				</div>
			</div>

		</div>
	</div>

</div>


@endsection
