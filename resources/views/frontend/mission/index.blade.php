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
								<i class="fa fa-globe"></i>جدول تواصل معنا
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
                                    <input type='text' class="form-control" placeholder="ادخل الإسم" name="name"/></div>

                                <div class='col-sm-4 '>
                                    <button type='submit' class='btn btn-danger'><i class="fa fa-search"></i>بحث</button>
                                    <a href="{{ route('missions.create') }}" class="btn btn-success">إضافة  جديد</a>
                                </div>

                            </form></div>
                            @if($missions->count()>0)
							<table class="table table-striped table-bordered  table-hover mt-4 " id="sample_1">
							<thead>
							<tr>
								<th>
                                    اسم
								</th>
								<th>
                                    البريد الإلكتروني
                                </th>
                                <th>
                                    هاتف
								</th>

                                <th>
                                    منطقة النص
                                </th>
                                <th>العمليات</th>
							</tr>
							</thead>
							<tbody>
                            @foreach($missions as $mission)
							<tr class="odd gradeX">

								<td>
                                    {{$mission->name}}
								</td>
                                <td>
                                    {{$mission->email}}
                                </td>
                                <td>
                                    {{$mission->phone}}
                                </td>
                                <td>
                                    {{$mission->message}}
                                </td>



                                <td width="20%">
                                    <form method="post" action="{{ route('missions.destroy', $mission->id) }} ">

                                        <a href="{{ route('missions.edit', $mission->id) }}" class="btn btn-sm blue" >تعديل</a>
                                        <a href="{{ route('missions.show', $mission->id) }}" class="btn btn-sm green" >عرض</a>

                                        <button onclick='return confirm("هل أنت تريد الحذف ؟")' type="submit"
                                                class="btn btn-danger btn-sm" >حذف</button>
                                        @csrf
                                        @method("DELETE")
                                    </form>
                                </td>

                            </tr>
                            @endforeach

							</tbody>
							</table>
                                {{$missions->links() }}
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

@stop

