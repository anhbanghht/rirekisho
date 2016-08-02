<body>
<div class="header">
    <!--div class="top">
        <div class="toptext">
            <a href="">
				<span style="color: #8A2BE2;" class="">
				</span>
                Rirekisho </a>
        </div>

    </div>
    <div class="clr"></div-->
    <div class="navbar">
        <div class="nav_area">
            <div class="container-fluid">
                <div class="collapse navbar-collapse">
                    <div class="navbar-header">
                        <a class="navbar-brand toptext" href="#">Ominext JSC</a>
                    </div>

                    <ul class="float_right nav navbar-nav">
                        <li><a href="{{url('CV')}}">Trang chủ</a></li>
                        @can('SuperAdmin')
                            <li><a href="{{url('User')}}">User</a></li>
                            <li><a href="{{url('positions')}}">Quản lý vị trí tuyển dụng</a></li>
                            <li><a href="{{url('status')}}">Quản lý trạng thái</a></li>
                            <li>
                                <ul>
                                    <li>Thống kê</li>
                                </ul>
                            </li>
                        @endcan

                        <li><a href="{{url('auth/logout')}}">Đăng xuất</a></li>
                        <li><a style="border: 1px solid transparent;"> {{Auth::User()->name}}</a></li>
                    </ul>

                </div><!-- /.navbar-collapse -->


            </div><!-- /.container-fluid -->
        </div>

        <div class="clr"></div>
        @if(0)
            <div class="warning-box" style=""> <!-- jquery nav bar-->
                <div class="container-fluid">
                    <div class="collapse navbar-collapse">
                        <div notification="true" class="">

                    <span>There must be some error while loading this page. Please <a href="." class="normal_color">refresh! </a>
                        </span>
                        </div>
                    </div><!-- /.navbar-collapse -->
                    </nav>

                </div>

            </div>
        @endif
    </div>
    <!--hr /-->
</div>


</body>
</html>
