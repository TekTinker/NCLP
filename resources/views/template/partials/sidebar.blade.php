
<div id="sidebar" class="sidebar responsive ace-save-state">
    <script type="text/javascript">
        try{ace.settings.loadState('sidebar')}catch(e){}
    </script>


    <ul class="nav nav-list">
        <li class="">
            <a href="{{ route('home') }}">
                <i class="menu-icon fa fa-tachometer"></i>
                <span class="menu-text"> Dashboard </span>
            </a>

            <b class="arrow"></b>
        </li>

        <li class="">
            <a href="{{ route('stcs.index') }}">
                <i class="menu-icon fa fa-graduation-cap"></i>
                <span class="menu-text"> STCs </span>
            </a>

            <b class="arrow"></b>
        </li>

		<li class="">
			<a href="{{ route('cls.index') }}">
				<i class="menu-icon fa fa-university"></i>
				<span class="menu-text"> Class </span>
			</a>

			<b class="arrow"></b>
		</li>


		<li class="">
			<a href="#" class="dropdown-toggle">
				<i class="menu-icon fa fa-list-alt"></i>
				<span class="menu-text"> Attendance </span>

				<b class="arrow fa fa-angle-down"></b>
			</a>

			<b class="arrow"></b>

			<ul class="submenu nav-hide" style="display: none;">
				<li class="">
					<a href="{{ route('attendances.index') }}">
						<i class="menu-icon fa fa-caret-right"></i>
						Pending
					</a>

					<b class="arrow"></b>
				</li>

				<li class="">
					<a href="{{ route('attendances.approved') }}">
						<i class="menu-icon fa fa-caret-right"></i>
						Approved
					</a>

					<b class="arrow"></b>
				</li>
			</ul>
		</li>

		<li class="">
			<a href="#" class="dropdown-toggle">
				<i class="menu-icon fa fa-users"></i>
				<span class="menu-text"> Staff </span>

				<b class="arrow fa fa-angle-down"></b>
			</a>

			<b class="arrow"></b>

			<ul class="submenu nav-hide" style="display: none;">
				<li class="">
					<a href="{{ route('user.approval') }}">
						<i class="menu-icon fa fa-caret-right"></i>
						Approvals
					</a>

					<b class="arrow"></b>
				</li>

				<li class="">
					<a href="{{ route('vt.list') }}">
						<i class="menu-icon fa fa-caret-right"></i>
						VTS
					</a>

					<b class="arrow"></b>
				</li>
				<li class="">
					<a href="{{ route('teacher.list') }}">
						<i class="menu-icon fa fa-caret-right"></i>
						Instructors
					</a>

					<b class="arrow"></b>
				</li>
			</ul>
		</li>

        <li class="">
            <a href="#" class="dropdown-toggle">
                <i class="menu-icon fa fa-picture-o"></i>
                <span class="menu-text"> Public </span>

                <b class="arrow fa fa-angle-down"></b>
            </a>

            <b class="arrow"></b>

            <ul class="submenu nav-hide" style="display: none;">
                <li class="">
                    <a href="{{ route('gallery.banner.index') }}">
                        <i class="menu-icon fa fa-caret-right"></i>
                        Banner
                    </a>

                    <b class="arrow"></b>
                </li>

                <li class="">
                    <a href="{{ route('gallery.stripe.index') }}">
                        <i class="menu-icon fa fa-caret-right"></i>
                        Stripe
                    </a>

                    <b class="arrow"></b>
                </li>

                <li class="">
                    <a href="{{ route('gallery.circular.index') }}">
                        <i class="menu-icon fa fa-caret-right"></i>
                        Circular / Notice
                    </a>

                    <b class="arrow"></b>
                </li>
            </ul>
        </li>


        <li class="">
            <a href="#" class="dropdown-toggle">
                <i class="menu-icon fa fa-picture-o"></i>
                <span class="menu-text"> Reports </span>

                <b class="arrow fa fa-angle-down"></b>
            </a>

            <b class="arrow"></b>

            <ul class="submenu nav-hide" style="display: none;">
                <li class="">
                    <a href="{{ route('pm.visit_report.z24') }}">
                        <i class="menu-icon fa fa-caret-right"></i>
                        PM Visit Z24
                    </a>

                    <b class="arrow"></b>
                </li>

                <li class="">
                    <a href="{{ route('pm.visit_report.a2') }}">
                        <i class="menu-icon fa fa-caret-right"></i>
                        PM Visit A2
                    </a>

                    <b class="arrow"></b>
                </li>

                <li class="">
                    <a href="{{ route('stc.visitors') }}">
                        <i class="menu-icon fa fa-caret-right"></i>
                        STC Visitors
                    </a>

                    <b class="arrow"></b>
                </li>
            </ul>
        </li>



    </ul><!-- /.nav-list -->

    <div class="sidebar-toggle sidebar-collapse" id="sidebar-collapse">
        <i id="sidebar-toggle-icon" class="ace-icon fa fa-angle-double-left ace-save-state" data-icon1="ace-icon fa fa-angle-double-left" data-icon2="ace-icon fa fa-angle-double-right"></i>
    </div>
</div>