@extends('xCV.template')
<title>Danh sách</title>
@section('content')

<div id="list_table" data-table="table-resume">

    <div class="controlle-search col-md-12 box_white block_ntv_dangnhap">
        {{--<p id="advancedSearch" style="float: right">Advanced search</p>--}}
        <!--advance search-->
        <div id="adSearch">
        <!--<form id="search" method="POST" action="{{-- url('CV/adSearch') --}}">-->
            <input id = "nameSearch" type="text" placeholder="Name" name="name" value="{{ (Request::has('search')) ? Request::input('search') : ''}}" onchange="adSearchChange('', this.value)">
            <select id = "positionsSearch" name="positions" onchange="adSearchChange('', '', this)">
                <option value="">--Vị trí tuyển dụng--</option>
                @foreach ($_Position as $position)
                    <option @if (Request::has('apply_to')) {{ (Request::input('apply_to') == $position->id) ? 'selected' : ''}} @endif value="{{$position->id}}">{{$position->name}}</option>
                @endforeach
            </select>

            <select id = "statusSearch" name="Status" onchange="adSearchChange('', '', '', this)">
                <option value="">-- Trạng thái --</option>
                @can('Visitor')
                <option value="1">Chờ duyệt</option>
                <option value="2">Đồng ý phỏng vấn</option>
                @endcan
                @can('Admin')
                @foreach (\App\Status::all() as $sta)
                    <option @if (Request::has('status')) {{ (Request::input('status') == $sta->id) ? 'selected' : ''}} @endif value="{{$sta->id}}">{{$sta->status}}</option>
                @endforeach
                @endcan
            </select>
            <input id="submitSearch" type="submit" name="submit" value="Search">
        <!--</form>-->
        </div>
        <!--advance search-->

        <div style="float: left; width: 200px">
            <div style="float: left; width: 50px">Show</div>
            <div style="float: left; width: 70px">
                <select id = "show_entries" name="show_entries" style="height: 25px; width : 50px; float: left" onchange="adSearchChange(this)">
                    <option @if (Request::has('per_page')) {{ (Request::input('per_page') == 10) ? 'selected' : ''}} @endif value="10">10</option>
                    <option @if (Request::has('per_page')) {{ (Request::input('per_page') == 15) ? 'selected' : ''}} @endif value="15">15</option>
                    <option @if (Request::has('per_page')) {{ (Request::input('per_page') == 25) ? 'selected' : ''}} @endif value="25">25</option>
                    <option @if (Request::has('per_page')) {{ (Request::input('per_page') == 50) ? 'selected' : ''}} @endif value="50">50</option>
                    <option @if (Request::has('per_page')) {{ (Request::input('per_page') == 100) ? 'selected' : ''}} @endif value="100">100</option>
                    <option @if (Request::has('per_page')) {{ (Request::input('per_page') == 200) ? 'selected' : ''}} @endif value="200">200</option>
                </select>
            </div>
            <div style="float: left; width: 70px">entries</div>
        </div>
        <div class="clearfix"></div>

        @can('Admin')
        <div class="box_white block_ntv_dangnhap">
            <div class="col-lg-6">
                <form role="form">
                <label>Kiểm định CV</label>&nbsp;
                <label class="radio-inline"><input type="radio" name="txtActive"  value="2" checked /> Tất cả</label>
                <label class="radio-inline"><input type="radio" name="txtActive" value="1" /> Đã kích hoạt</label>
                <label class="radio-inline"><input type="radio" name="txtActive" value="0" /> Chưa kích hoạt</label>
                </form>
            </div>
            @endcan
            @can('SuperAdmin')
            <div class="col-lg-6">
                <label>Trạng thái CV</label>&nbsp;
                <label class="radio-inline"><input type="radio" name="txtLive" value="2" checked/> Tất cả</label>
                <label class="radio-inline"><input type="radio" name="txtLive" value="1"/> Trực tuyến</label>
                <label class="radio-inline"><input type="radio" name="txtLive" value="0"/> Không trực tuyến</label>
            </div>

        @endcan
    </div>

        <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content" id="modal-content"></div>
            </div>
        </div>

        <table id="example" class="dataTable" data-sort="" data-field="">
            <thead>
            <tr>
                <th class="ab sorting" style="width: 50px">#</th>
                <th class="ab sorting" style="width: 150px">Ảnh</th>
                <th @if (Request::has('data-field') && Request::has('data-sort'))
                        @if(Request::input('data-field') == 'name')
                            @if (Request::input('data-sort') == 'asc ')
                                class="sorting_asc" data-sort="asc"
                            @else
                                class="sorting_desc" data-sort="desc"
                            @endif
                        @else
                            class="sorting" data-sort="asc"
                        @endif
                    @else
                        class="sorting_asc" data-sort="asc"
                    @endif
                    onclick="adSearchChange('', '', '', '', this)" data-field="name" style="width: 150px">Họ và tên</th>
                <th @if (Request::has('data-field') && Request::has('data-sort'))
                        @if(Request::input('data-field') == 'Gender')
                            @if (Request::input('data-sort') == 'asc ')
                                class="sorting_asc" data-sort="asc"
                            @else
                                class="sorting_desc" data-sort="desc"
                            @endif
                        @else
                            class="sorting" data-sort="asc"
                        @endif
                    @else
                        class="sorting" data-sort="asc"
                    @endif
                    onclick="adSearchChange('', '', '', '', this)" data-field="Gender"  style="width: 100px">G.Tính</th>
                <th @if (Request::has('data-field') && Request::has('data-sort'))
                        @if(Request::input('data-field') == 'Birth_date')
                            @if (Request::input('data-sort') == 'asc ')
                                class="sorting_asc" data-sort="asc"
                            @else
                                class="sorting_desc" data-sort="desc"
                            @endif
                        @else
                            class="sorting" data-sort="asc"
                        @endif
                    @else
                        class="sorting" data-sort="asc"
                    @endif
                    onclick="adSearchChange('', '', '', '', this)" data-field="Birth_date" style="width: 50px">Tuổi</th>
                @can('Visitor')
                <th @if (Request::has('data-field') && Request::has('data-sort'))
                        @if(Request::input('data-field') == 'positions')
                            @if (Request::input('data-sort') == 'asc ')
                                class="sorting_asc" data-sort="asc"
                            @else
                                class="sorting_desc" data-sort="desc"
                            @endif
                        @else
                            class="sorting" data-sort="asc"
                        @endif
                    @else
                        class="sorting" data-sort="asc"
                    @endif
                    onclick="adSearchChange('', '', '', '', this)" data-field="positions" style="width: 110px">Ví trí tuyển dụng</th>
                <th @if (Request::has('data-field') && Request::has('data-sort'))
                        @if(Request::input('data-field') == 'Status')
                            @if (Request::input('data-sort') == 'asc ')
                                class="sorting_asc" data-sort="asc"
                            @else
                                class="sorting_desc" data-sort="desc"
                            @endif
                        @else
                            class="sorting" data-sort="asc"
                        @endif
                    @else
                        class="sorting" data-sort="asc"
                    @endif
                    onclick="adSearchChange('', '', '', '', this)" data-field="Status" style="width: 180px">Trạng thái</th>
                @endcan
                @can('Admin')
                    <th style="width: 30px;color: #666699;font-size: 13pt;">Hành động</th>
                @endcan

            </tr>
            </thead>
            <tbody id="list-table-body" data-reload="true">
                @include('includes.table-result')

            </tbody>
        </table>

        <div class="pagination pull-right">
            {!! $get_paging or '' !!}
        </div>
    </div>
</div>

@stop

