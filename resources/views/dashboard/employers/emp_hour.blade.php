@extends('dashboard.layouts.master')

@section('content')

<!-- BEGIN HEADER -->
@include ('dashboard.layouts.header')
<!-- END HEADER -->
<div class="clearfix">
</div>
<!-- BEGIN CONTAINER -->
<div class="page-container">
	<!-- BEGIN SIDEBAR -->
@include ('dashboard.layouts.sidebar')
	<!-- END SIDEBAR -->
	<!-- BEGIN CONTENT -->
	<div class="page-content-wrapper">
		<div class="page-content">
			<!-- BEGIN PAGE HEAD -->
			<div class="page-head">
                <div class="col-md-4 ">
                <div class="portlet box white">
                        <input  type="text" class="form-control input-sm" placeholder="بحث عن اسم الموظف">
                </div>
                </div>
                <div class="col-md-4 form-group">
                    <select class="form-control input-sm">
                        <option>اختر الشهر</option>
                        <option>يناير</option>
                        <option>فبراير</option>
                        <option>مارس</option>
                        <option>ابريل</option>
                        <option>مايو</option>
                        <option>يونيو</option>
                        <option>يوليو</option>
                        <option>اغسطس</option>
                        <option>سبتمبر</option>
                        <option>اكتوبر</option>
                        <option>نوفمبر</option>
                        <option>ديسيمبر</option>

                    </select>
                </div>
                <div class="col-md-4 ">
                    <button type="submit" class="btn btn-sm red"> <i class="fa fa-search">    </i> بحث </button>

                </div>
            </div>

			<div class="row">
				<div class="col-md-12">
					<!-- BEGIN EXAMPLE TABLE PORTLET-->
					<div class="portlet box blue">
						<div class="portlet-title">
							<div class="caption">
								<i class="fa fa-globe"></i>تفاصيل ساعات العمل الاضافيه للموظف احمد جمال
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
							<table class="table table-striped table-bordered table-hover" id="sample_1">
							<thead>
							<tr>

                                <th>
									التاريخ
                                </th>

                                <th >
									 الساعات الاضافيه خلال الشهر
                                </th>
                                {{-- <th>

								</th> --}}
							</tr>
                            </thead>

							<tbody>
                                {{-- @foreach($emps ?? '' as $emp)

							<tr class="odd gradeX">

                                <td>

								<a> {{$emp->created_at->format('m/d/Y')}}</a>
                                </td>
                                <td>
                                {{$emp->hour_plus}}
                                </td>
                                <td>
                                    <button type="submit" class="btn btn-sm green">التفاصيل</button>
								</td>

                            </tr>
                            @endforeach --}}
{{--
                            <tr class="odd gradeX">
                                <td>
                                    2/12/2020</a>
                                </td>
                                <td>
                                    2 ساعة
                                </td>
                                    {{-- <td>
                                        <button type="submit" class="btn btn-sm green">التفاصيل</button>
                                    </td> --}}

                            </tr> --}}
                            {{-- <tr class="odd gradeX">
                                <td>
                                    3/12/2020</a>
                                </td>
                                <td>
                                    2 ساعة
                                </td>
                                    {{-- <td>
                                        <button type="submit" class="btn btn-sm green">التفاصيل</button>
                                    </td> --}}

                            </tr> <tr class="odd gradeX">
                                <td>
                                    4/12/2020</a>
                                </td>
                                <td>
                                    2 ساعة
                                </td>
                                    {{-- <td>
                                        <button type="submit" class="btn btn-sm green">التفاصيل</button>
                                    </td> --}}

                            </tr> <tr class="odd gradeX">
                                <td>
                                    5/12/2020</a>
                                </td>
                                <td>
                                    2 ساعة
                                </td>
                                    {{-- <td>
                                        <button type="submit" class="btn btn-sm green">التفاصيل</button>
                                    </td> --}}

                            </tr> <tr class="odd gradeX">
                                <td>
                                    8/12/2020</a>
                                </td>
                                <td>
                                    2 ساعة
                                </td>
                                    {{-- <td>
                                        <button type="submit" class="btn btn-sm green">التفاصيل</button>
                                    </td> --}}

                            </tr> <tr class="odd gradeX">
                                <td>
                                    9/12/2020</a>
                                </td>
                                <td>
                                    2 ساعة
                                </td>
                                    {{-- <td>
                                        <button type="submit" class="btn btn-sm green">التفاصيل</button>
                                    </td> --}}

                            </tr> <tr class="odd gradeX">
                                <td>
                                    10/12/2020</a>
                                </td>
                                <td>
                                    2 ساعة
                                </td>
                                    {{-- <td>
                                        <button type="submit" class="btn btn-sm green">التفاصيل</button>
                                    </td> --}}

                            </tr> <tr class="odd gradeX">
                                <td>
                                    11/12/2020</a>
                                </td>
                                <td>
                                    1 ساعة
                                </td>
                                    {{-- <td>
                                        <button type="submit" class="btn btn-sm green">التفاصيل</button>
                                    </td> --}}

                            </tr> <tr class="odd gradeX">
                                <td>
                                    12/12/2020</a>
                                </td>
                                <td>
                                    1 ساعة
                                </td>
                                    {{-- <td>
                                        <button type="submit" class="btn btn-sm green">التفاصيل</button>
                                    </td> --}}

                            </tr> <tr class="odd gradeX">
                                <td>
                                    15/12/2020</a>
                                </td>
                                <td>
                                    3 ساعة
                                </td>
                                    {{-- <td>
                                        <button type="submit" class="btn btn-sm green">التفاصيل</button>
                                    </td> --}}

                            </tr> <tr class="odd gradeX">
                                <td>
                                    16/12/2020</a>
                                </td>
                                <td>
                                    2 ساعة
                                </td>
                                    {{-- <td>
                                        <button type="submit" class="btn btn-sm green">التفاصيل</button>
                                    </td> --}}

                            </tr> <tr class="odd gradeX">
                                <td>
                                    17/12/2020</a>
                                </td>
                                <td>
                                    1 ساعة
                                </td>
                                    {{-- <td>
                                        <button type="submit" class="btn btn-sm green">التفاصيل</button>
                                    </td> --}}

                            </tr> <tr class="odd gradeX">
                                <td>
                                    18/12/2020</a>
                                </td>
                                <td>
                                    3 ساعة
                                </td>
                                    {{-- <td>
                                        <button type="submit" class="btn btn-sm green">التفاصيل</button>
                                    </td> --}}

                            </tr> <tr class="odd gradeX">
                                <td>
                                    19/12/2020</a>
                                </td>
                                <td>
                                    1 ساعة
                                </td>
                                    {{-- <td>
                                        <button type="submit" class="btn btn-sm green">التفاصيل</button>
                                    </td> --}}

                            </tr> <tr class="odd gradeX">
                                <td>
                                    22/12/2020</a>
                                </td>
                                <td>
                                    2 ساعة
                                </td>
                                    {{-- <td>
                                        <button type="submit" class="btn btn-sm green">التفاصيل</button>
                                    </td> --}}

                            </tr> <tr class="odd gradeX">
                                <td>
                                    23/12/2020</a>
                                </td>
                                <td>
                                    1 ساعة
                                </td>
                                    {{-- <td>
                                        <button type="submit" class="btn btn-sm green">التفاصيل</button>
                                    </td> --}}

                            </tr> <tr class="odd gradeX">
                                <td>
                                    24/12/2020</a>
                                </td>
                                <td>
                                    4 ساعة
                                </td>
                                    {{-- <td>
                                        <button type="submit" class="btn btn-sm green">التفاصيل</button>
                                    </td> --}}

                            </tr> <tr class="odd gradeX">
                                <td>
                                    25/12/2020</a>
                                </td>
                                <td>
                                1 ساعة
                                </td>
                                    {{-- <td>
                                        <button type="submit" class="btn btn-sm green">التفاصيل</button>
                                    </td> --}}

                            </tr> <tr class="odd gradeX">
                                <td>
                                    26/12/2020</a>
                                </td>
                                <td>
                                    5 ساعة
                                </td>
                                    {{-- <td>
                                        <button type="submit" class="btn btn-sm green">التفاصيل</button>
                                    </td> --}}

                            </tr> --}}
							</tbody>
							</table>
						</div>
					</div>
					<!-- END EXAMPLE TABLE PORTLET-->
				</div>
			</div>

		</div>
	</div>

</div>

@stop

