@extends('admin.layouts.app')
@section('content')
			<div class="page-head">

            </div>

			<div class="row justify-content-center">
				<div class="col-md-12">
					<!-- BEGIN EXAMPLE TABLE PORTLET-->
					<div class="portlet box blue">
						<div class="portlet-title">
							<div class="caption">
								<i class="fa fa-globe"></i>جدول بيانات الشركة
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
                                    <a href="{{ route('companys.create') }}" class="btn btn-success">إضافة  جديد</a>
                                </div>

                            </form></div>
                            @if($companys->count()>0)
							<table class="table table-striped table-bordered  table-hover mt-4 " id="sample_1">
							<thead>
							<tr >
								<th>
								الإسم
								</th>
								<th>
                               الإيميل
                                </th>
                                <th>
كلمة السر
								</th>
                                <th>
                                    رقم الهاتف
                                </th>
                                <th>
                                    اللوجو
                                </th>
                                <th>
                                  فيس بوك
                                </th>
                                <th>
                                   جوجل
                                </th>
                                <th>
                                  انستغرام
                                </th>
                                <th>
                                   تويتر
                                </th>
                                <th>
                                    العنوان
                                </th>
                                <th>
                                    كود
                                </th>

                                <th>
                                    العمليات
                                </th>
							</tr>
							</thead>
							<tbody>
                            @foreach($companys as $company)
							<tr class="odd gradeX">

								<td>
                                    {{$company->name}}
								</td>
                                <td width="1%">
                                    {{$company->email}}
                                </td>
                                <td>
                                    {{$company->password}}
                                </td>
                                <td>
                                    {{$company->address}}
                                </td>
                                <td>
                                    <img src="{{asset("uploads/public/".$company->logo)}}" class="img-responsive" alt="No Image Found" width="50">

                                </td>
                                <td width="2%">
                                    {{$company->face}}
                                </td>
                                <td width="2%">
                                    {{$company->google}}
                                </td>
                                <td>
                                    {{$company->twitter}}
                                </td>
                                <td>
                                    {{$company->insta}}
                                </td>
                                <td >
                                    {{$company->phone}}
                                </td>
                                <td >
                                    {{$company->code}}
                                </td>



                                <td width="5%">
                                    <form method="post" action="{{ route('companys.destroy', $company->id) }} ">

                                        <a href="{{ route('companys.edit', $company->id) }}" class="btn btn-sm blue" >تعديل</a>
                                        <a href="{{ route('companys.show', $company->id) }}" class="btn btn-sm green" >عرض</a>

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
                                {{$companys->links() }}
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

