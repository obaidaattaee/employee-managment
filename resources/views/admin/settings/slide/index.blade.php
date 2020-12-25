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
								<i class="fa fa-globe"></i>جدول السلايد
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

                            <a href="{{ route('slides.create') }}" class="btn btn-success">إضافة سلايد جديد</a>

                            @if($slides->count()>0)

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
                            @foreach($slides as $slide)
							<tr class="odd gradeX">

								<td>
                                    {{$slide->title}}
								</td>
                                <td>
                                    {{$slide->summary}}
                                </td>
                                <td>
                                    {{$slide->details}}
                                </td>
                                <td>
                                    <img src="{{ asset('uploads/public/'.$slide->image) }}" style="max-height: 100px;max-width: 200px;" alt="">
                                </td>

                                <td width="20%">
                                    <form method="post" action="{{ route('slides.destroy', $slide->id) }} ">

                                        <a href="{{ route('slides.edit', $slide->id) }}" class="btn btn-sm blue" >تعديل</a>
                                        <a href="{{ route('slides.show', $slide->id) }}" class="btn btn-sm green" >عرض</a>
                                        {{--                            <a href="{{ route('instocks.createinstock', $product->id) }}" class="btn btn-primary btn-sm"  data-toggle="tooltip" title="شراء منتج"><i--}}
                                        {{--                                    class='fas fa-dollar-sign'></i></a>--}}
                                        {{--                            <a href="{{ route('outstocks.createoutstock', $product->id) }}" class="btn btn-primary btn-sm" data-toggle="tooltip" title="بيع منتج">--}}
                                        {{--                                <i class="fas fa-ambulance" aria-hidden="true"></i></a>--}}

                                        <button onclick='return confirm("هل أنت تريد حذف؟")' type="submit"
                                                class="btn btn-danger btn-sm" >حذف</button>
                                        @csrf
                                        @method("DELETE")
                                    </form>
                                </td>

                            </tr>
                            @endforeach

							</tbody>
							</table>
                            @else
                                <div class='alert alert-warning'>للأسف , لا يوجد نتيجة لبحثك</div>

                            @endif
						</div>
					</div>
					<!-- END EXAMPLE TABLE PORTLET-->
				</div>
			</div>



@endsection
