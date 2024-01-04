class NavBar extends HTMLElement {
    constructor() {
        super();
    }
    connectedCallback() {
        this.innerHTML = `
				<aside class="app-sidebar">
				<a class="header-brand left-meu-header-brand left-meu-header-style1 left-meu-header-brand-desktop"
					href="index.html">
					<img src="../assets/images/brand/logo3.png" class="header-brand-img desktop-logo"
						alt="ระบบสับเปลี่ยนแบตเตอรี่">
					<img src="../assets/images/brand/logo3.png" class="header-brand-img mobile-view-logo"
						alt="ระบบสับเปลี่ยนแบตเตอรี่">
				</a>
				<div class="input-group p-2  bg-white border-bottom">
					<input type="text" placeholder="ระบบสับเปลี่ยนแบตเตอรี่" class="form-control search">
					<div class="input-group-prepend mr-0">
						<span class="input-group-text border-right search_btn btn-primary-default"></span>
					</div>
				</div>
                <div class="side-tab-body p-0 border-0" id="parentVerticalTab">
					<div class="first-sidemenu">
						<!-- left menu #1 -->
						<ul class="resp-tabs-list hor_1">
							<li role="tab" aria-controls="tab1" data-toggle="tooltip" data-placement="right"
								title="หน้าหลัก"><i class="side-menu__icon typcn typcn-device-desktop"></i>
								<div class="slider-text">หน้าหลัก</div>
							</li>
							<li role="tab" aria-controls="tab2" data-toggle="tooltip" data-placement="right" title="สถานีสับเปลี่ยนแบต"><i
									class="side-menu__icon typcn typcn-arrow-move-outline"></i>
								<div class="slider-text">สถานีสับเปลี่ยนแบต</div>
							</li>
							<li role="tab" aria-controls="tab3" data-toggle="tooltip" data-placement="right" title="แบตเตอรี่"><i
									class="side-menu__icon typcn typcn-th-large-outline"></i>
								<div class="slider-text">แบตเตอรี่</div>
							</li>
							<li role="tab" aria-controls="tab4" data-toggle="tooltip" data-placement="right" title="รถมอเตอร์ไซต์"><i
									class="side-menu__icon typcn typcn-briefcase"></i>
								<div class="slider-text">รถมอเตอร์ไซต์</div>
							</li>
							<li role="tab" aria-controls="tab5" data-toggle="tooltip" data-placement="right" title="ผู้ใช้งาน"><i
									class="side-menu__icon typcn typcn-cog-outline"></i>
								<div class="slider-text">ผู้ใช้งาน</div>
							</li>
							<li role="tab" aria-controls="tab6" data-toggle="tooltip" data-placement="right" title="รายงาน"><i
									class="side-menu__icon typcn typcn-clipboard"></i>
								<div class="slider-text">รายงาน</div>
							</li>
							<li role="tab" aria-controls="tab7" data-toggle="tooltip" data-placement="right" title="ข่าว"><i
									class="side-menu__icon typcn typcn-calendar-outline"></i>
								<div class="slider-text">ข่าว</div>
							</li>
						</ul>
						<div class="second-sidemenu">
							<div class="resp-tabs-container hor_1">
								<div role="sec_tab" aria-controls="sec_tab1" >
									<h4 class="font-weight-normal"><i
											class="side-menu__icon typcn typcn-device-desktop"></i> ข้อมูลการวิเคราะห์
									</h4>
									<a class="slide-item" href="index.html">Dashboard</a>
									<a class="slide-item" href="station_dashboard.html">ภาพรวมสถานีสับเปลี่ยนแบต</a>
									<a class="slide-item" href="battery_dashboard.html">ภาพรวมแบตเตอรี่</a>
									<a class="slide-item" href="motorcycle_dashboard.html">ภาพรวมรถมอเตอร์ไซต์</a>
								</div>
								<div role="sec_tab" aria-controls="sec_tab2">
									<div class="row">
										<div class="col-md-12">
											<h4 class="font-weight-normal"><i
													class="typcn typcn-arrow-move-outline"></i> สถานีสับเปลี่ยนแบต</h4>
											<!-- <a href="station_slot.html" class="slide-item">ช่องสับเปลี่ยน</a> -->
											<!-- <a href="station_qty.html" class="slide-item">จำนวนครั้งสับเปลี่ยน</a> -->
											<a href="station_graph.html" class="slide-item">กราฟสรุปข้อมูลรายวัน</a>
											<!-- <a href="station_soc.html" class="slide-item">กราฟสรุปข้อมูล Soc</a> -->
											<br>
											<h4 class="font-weight-normal"><i
													class="typcn typcn-arrow-move-outline"></i> การบริหารจัดการข้อมูล
											</h4>
											<a href="stations_manage.html" class="slide-item">บอร์ดการจัดการ
												(แก้ไข/ลบ)</a>
											<a href="stations_add.html" class="slide-item">เพิ่มข้อมูล</a>
											<a href="stations_search.html" class="slide-item">ค้นหาข้อมูล</a>
											<h4 class="text-uppercase mt-6 mb-5"><i
													class="typcn  typcn-arrow-move-outline"></i> สถานะสถานี</h4>
											<div class="card mt-5">
												<div class="card-body p-3">
													<div class="d-flex">
														<div class="pr-4 pt-1"><i
																class="ti-stats-up fs-40 mt-0 text-info"></i></div>
														<div class="">
															<span>Ready Soc>80%</span>
															<h3 class="mb-0">
																<font color="#339999"><b>285</b></font>
															</h3>
														</div>
													</div>
												</div>
											</div>
											<div class="card">
												<div class="card-body p-3">
													<div class="d-flex">
														<div class="pr-4 pt-1"><i
																class="ti-stats-up fs-40 mt-0 text-info"></i></div>
														<div class="">
															<span>During charge</span>
															<h3 class="mb-0">
																<font color="#ff9900"><b>115</b></font>
															</h3>
														</div>
													</div>
												</div>
											</div>

											<div class="card">
												<div class="card-body p-3">
													<div class="d-flex">
														<div class="pr-4 pt-1"><i
																class="ti-stats-up fs-40 mt-0 text-info"></i></div>
														<div class="">
															<span>Empty Slot</span>
															<h3 class="mb-0">
																<font color="#6d6d6d"><b>20</b></font>
															</h3>
														</div>
													</div>
												</div>
											</div>

											<div class="card">
												<div class="card-body p-3">
													<div class="d-flex">
														<div class="pr-4 pt-1"><i
																class="ti-stats-up fs-40 mt-0 text-info"></i></div>
														<div class="">
															<span>เสีย</span>
															<h3 class="mb-0">
																<font color="#ff0000"><b>10</b></font>
															</h3>
														</div>
													</div>
												</div>
											</div>
											<h4 class="text-uppercase mt-6 mb-5"><i
													class="typcn  typcn-arrow-move-outline"></i> สถิติ</h4>
											<div class="progress progress-lg mb-4">
												<div class="progress-bar bg-green w-60"></div>
												<div class="progress-bar bg-yellow w-20"></div>
												<div class="progress-bar bg-blue w-15"></div>
												<div class="progress-bar bg-danger w-5"></div>
											</div>
											<div class="table-responsive">
												<table
													class="table card-table table-vcenter text-nowrap table-bordered border-top bg-white"
													width="80%">
													<tbody>
														<tr>
															<th scope="row" width="10%">
																<div class="w-3 h-3 brround bg-green"></div>
															</th>
															<td width="60%">Ready Soc>80%</td>
															<td width="30%">60%</td>
														</tr>
														<tr>
															<th scope="row">
																<div class="w-3 h-3 brround bg-yellow"></div>
															</th>
															<td>During charge</td>
															<td>20%</td>
														</tr>
														<tr>
															<th scope="row">
																<div class="w-3 h-3 brround bg-blue"></div>
															</th>
															<td>Emply Slot</td>
															<td>15%</td>
														</tr>
														<tr>
															<th scope="row">
																<div class="w-3 h-3 brround bg-danger"></div>
															</th>
															<td>เสีย</td>
															<td>5%</td>
														</tr>
													</tbody>
												</table>
											</div>
										</div>
									</div>
								</div>
								<div role="sec_tab" aria-controls="sec_tab3">
									<div class="row">
										<div class="col-md-12">
											<h4 class="font-weight-normal"><i
													class="typcn  typcn-arrow-move-outline"></i> ข้อมูลแบตเตอรี่</h4>
											<a href="batt_info.html" class="slide-item">การใช้แบตเตอรี่</a>
											<a href="batt_pack.html" class="slide-item">ข้อมูลแพ็คแบตเตอรี่</a>
											<br>
											<h4 class="font-weight-normal"><i
													class="typcn  typcn-arrow-move-outline"></i> การบริหารจัดการข้อมูล
											</h4>
											<a href="batt_manage.html" class="slide-item">บอร์ดการจัดการ (แก้ไข/ลบ)</a>
											<a href="batt_add.html" class="slide-item">เพิ่มข้อมูล</a>
											<a href="batt_search.html" class="slide-item">ค้นหาข้อมูล</a>
											<h4 class="text-uppercase mt-6 mb-5"><i
													class="typcn  typcn-arrow-move-outline"></i> สถานะแบตเตอรี่</h4>
											<div class="row">
												<div class="col-6">
													<div class="border text-center bg-white  mb-5">
														<i class="ti-comment-alt fs-30 text-secondary"></i>
														<div><small class="mb-0">สีน้ำเงิน <br>ถูกใช้</small></div>
													</div>
												</div>
												<div class="col-6">
													<div class="border text-center bg-white  mb-5">
														<i class="ti-image fs-30 text-green"></i>
														<div><small class="mb-0">สีเขียว <br>SOC>80%</small></div>
													</div>
												</div>
												<div class="col-6">
													<div class="border text-center bg-white  mb-5">
														<i class="ti-bell fs-30 text-yellow"></i>
														<div><small class="mb-0">สีส้ม<br>Charging</small></div>
													</div>
												</div>
												<div class="col-6">
													<div class="border text-center bg-white  mb-5">
														<i class="ti-settings fs-30 text-danger"></i>
														<div><small class="mb-0">สีแดง<br>Under MA</small></div>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
								<div role="sec_tab" aria-controls="sec_tab4">
									<div class="row">
										<div class="col-md-12">
											<h4 class="font-weight-normal"><i class="typcn typcn-briefcase"></i>
												ข้อมูลการใช้งาน</h4>
											<a href="motorcycle_info.html" class="slide-item">การใช้งานรถมอเตอร์ไซต์</a>
											<br>
											<h4 class="font-weight-normal"><i class="typcn typcn-briefcase"></i>
												การบริหารจัดการข้อมูล</h4>
											<a href="motorcycle_manage.html" class="slide-item">บอร์ดการจัดการ
												(แก้ไข/ลบ)</a>
											<a href="motorcycle_add.html" class="slide-item">เพิ่มข้อมูล</a>
											<a href="motorcycle_search.html" class="slide-item">ค้นหาข้อมูล</a>
											<h4 class="text-uppercase mt-6 mb-4">รายการรถมอเตอร์ไซต์</h4>
											<div class="card overflow-hidden">
												<div class="card-body p-0">
													<div class="list-group list-group-flush ">
														<div class="list-group-item d-flex  align-items-center">
															<div class="">
																<a href="motorcycle_batt.html"
																	class="btn btn-sm btn-light btn-icon">คันที่ #1</a>
																<a href="motorcycle_batt.html"
																	class="btn btn-sm btn-light btn-icon">คันที่ #2</a>
															</div>
														</div>
														<div class="list-group-item d-flex  align-items-center">
															<div class="">
																<a href="motorcycle_batt.html"
																	class="btn btn-sm btn-light btn-icon">คันที่ #3</a>
																<a href="motorcycle_batt.html"
																	class="btn btn-sm btn-light btn-icon">คันที่ #4</a>
															</div>
														</div>
														<div class="list-group-item d-flex  align-items-center">
															<div class="">
																<a href="motorcycle_batt.html"
																	class="btn btn-sm btn-light btn-icon">คันที่ #5</a>
																<a href="motorcycle_batt.html"
																	class="btn btn-sm btn-light btn-icon">คันที่ #6</a>
															</div>
														</div>
														<div class="list-group-item d-flex  align-items-center">
															<div class="">
																<a href="motorcycle_batt.html"
																	class="btn btn-sm btn-light btn-icon">คันที่ #7</a>
																<a href="motorcycle_batt.html"
																	class="btn btn-sm btn-light btn-icon">คันที่ #8</a>
															</div>
														</div>
														<div class="list-group-item d-flex  align-items-center">
															<div class="">
																<a href="motorcycle_batt.html"
																	class="btn btn-sm btn-light btn-icon">คันที่ #9</a>
																<a href="motorcycle_batt.html"
																	class="btn btn-sm btn-light btn-icon">คันที่ #10</a>
															</div>
														</div>
														<div class="list-group-item d-flex  align-items-center">
															<div class="">
																<a href="motorcycle_batt.html"
																	class="btn btn-sm btn-light btn-icon">คันที่ #11</a>
																<a href="motorcycle_batt.html"
																	class="btn btn-sm btn-light btn-icon">คันที่ #12</a>
															</div>
														</div>
														<div class="list-group-item d-flex  align-items-center">
															<div class="">
																<a href="motorcycle_batt.html"
																	class="btn btn-sm btn-light btn-icon">คันที่ #13</a>
																<a href="motorcycle_batt.html"
																	class="btn btn-sm btn-light btn-icon">คันที่ #14</a>
															</div>
														</div>
														<div class="list-group-item d-flex  align-items-center">
															<div class="">
																<a href="motorcycle_batt.html"
																	class="btn btn-sm btn-light btn-icon">คันที่ #15</a>
															</div>
														</div>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
								<div role="sec_tab" aria-controls="sec_tab5">
									<div class="row">
										<div class="col-md-12">
											<h4 class="font-weight-normal"><i class="typcn typcn-cog-outline"></i>
												ข้อมูลการใช้งาน</h4>
											<a href="user_compare.html" class="slide-item">กราฟเปรียบเทียบการใช้งาน</a>
											<br>
											<h4 class="font-weight-normal"><i class="typcn  typcn-cog-outline"></i>
												การบริหารจัดการข้อมูล</h4>
											<a href="user_manage.html" class="slide-item">บอร์ดการจัดการ (แก้ไข/ลบ)</a>
											<a href="user_add.html" class="slide-item">เพิ่มข้อมูล</a>
											<a href="user_search.html" class="slide-item">ค้นหาข้อมูล</a>
											<br>
											<h4 class="font-weight-normal"><i
													class="typcn typcn-cog-outline"></i>กลุ่มผู้ใช้งาน</h4>
											<div class="row">
												<div class="col-6">
													<div class="border text-center bg-white  mb-5">
														<a href="user_group.html"><i
																class="ti-comment-alt fs-30 text-secondary"></i></a>
														<div><small class="mb-0">Super Admin</small></div>
													</div>
												</div>
												<div class="col-6">
													<div class="border text-center bg-white  mb-5">
														<a href="user_group.html"><i
																class="ti-bell fs-30 text-yellow"></i></a>
														<div><small class="mb-0">Premium User</small></div>
													</div>
												</div>
												<div class="col-6">
													<div class="border text-center bg-white  mb-5">
														<a href="user_group.html"><i
																class="ti-image fs-30 text-green"></i></a>
														<div><small class="mb-0">Admin</small></div>
													</div>
												</div>

												<div class="col-6">
													<div class="border text-center bg-white  mb-5">
														<a href="user_group.html"><i
																class="ti-settings fs-30 text-danger"></i></a>
														<div><small class="mb-0">Driver</small></div>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
								<div role="sec_tab" aria-controls="sec_tab6">
									<div class="row">
										<div class="col-md-12">
											<h4 class="font-weight-normal"><i class="typcn typcn-calendar-outline"></i>
												รายงาน</h4>
											<a href="batt_swap_report.html" class="slide-item">รายงานสลับแบตเตอรี่</a>
											<a href="stations_status_report.html" class="slide-item">รายงานสถานะตู้</a>

										</div>
									</div>
								</div>
								<div role="sec_tab" aria-controls="sec_tab7">
									<div class="row">
										<div class="col-md-12">
											<h4 class="font-weight-normal"><i class="typcn  typcn-cog-outline"></i>
												การบริหารจัดการข้อมูล</h4>
											<a href="news_manage.html" class="slide-item">บอร์ดการจัดการ (แก้ไข/ลบ)</a>
											<a href="news_add.html" class="slide-item">เพิ่มข้อมูล</a>
											<a href="news_search.html" class="slide-item">ค้นหาข้อมูล</a>

										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				</aside>`;
    }
}
customElements.define('navbar-component', NavBar);

class Header extends HTMLElement {
    constructor() {
        super();
    }
    connectedCallback() {
        this.innerHTML = `
                <div class="header header-fixed ">
                    <div class="container-fluid">
                        <div class="d-flex">
                            <a class="header-brand d-md-none" href="index.html">
                                <img src="../assets/images/brand/logo3.png" class="header-brand-img desktop-logo"
                                    alt="Arox logo">
                                <img src="../assets/images/brand/logo3.png" class="header-brand-img mobile-view-logo"
                                    alt="Arox logo">
                            </a>
                            <!-- LOGO -->
                            <a aria-label="Hide Sidebar" class="app-sidebar__toggle ml-0" data-toggle="sidebar"
                                href="#"></a>
                            <div class="d-flex order-lg-2 ml-auto header-right-icons header-search-icon">
                                <a href="#" data-toggle="search" class="nav-link nav-link-lg d-md-none navsearch"><i
                                        class="ion ion-search"></i></a>
                                <div class="dropdown d-sm-flex d-none">
                                    <a class="nav-link icon full-screen-link nav-link-bg">
                                        <i class="ti-arrows-corner" id="fullscreen-button"></i>
                                    </a>
                                </div><!-- FULL-SCREEN -->
                                <div class="dropdown d-sm-flex d-none notifications">
                                    <a class="nav-link icon" data-toggle="dropdown">
                                        <i class="ti-bell"></i>
                                        <span class="nav-unread bg-warning-1 pulse"></span>
                                    </a>
                                    <div class="dropdown-menu dropdown-menu-right  dropdown-menu-arrow">

                                        <a href="#" class="dropdown-item mt-2 d-flex pb-3">
                                            <div class="notifyimg bg-success">
                                                <i class="fa fa-thumbs-o-up"></i>
                                            </div>
                                            <div>
                                                <strong>Someone likes our posts.</strong>
                                                <div class="small">3 hours ago</div>
                                            </div>
                                        </a>
                                        <a href="#" class="dropdown-item d-flex pb-3">
                                            <div class="notifyimg bg-warning">
                                                <i class="fa fa-commenting-o"></i>
                                            </div>
                                            <div>
                                                <strong> 3 New Comments</strong>
                                                <div class="small">5 hour ago</div>
                                            </div>
                                        </a>
                                        <a href="#" class="dropdown-item d-flex pb-3">
                                            <div class="notifyimg bg-danger">
                                                <i class="fa fa-cogs"></i>
                                            </div>
                                            <div>
                                                <strong> Server Rebooted.</strong>
                                                <div class="small">45 mintues ago</div>
                                            </div>
                                        </a>
                                        <div class="dropdown-divider"></div>
                                        <a href="#" class="dropdown-item text-center">View all Notification</a>
                                    </div>
                                </div><!-- NOTIFICATIONS -->

                                <div class="dropdown text-center selector profile-1 d-sm-flex d-none">
                                    <a href="#" data-toggle="dropdown" class="nav-link leading-none d-flex">
                                        <span><img src="../assets/images/faces/female/mock.png" alt="profile-user"
                                                class="avatar brround cover-image mb-1 ml-0"></span>
                                    </a>
                                    <div class="dropdown-menu dropdown-menu-right dropdown-menu-arrow">
                                        <div class="text-center bg-image p-4">
                                            <a href="#" class="dropdown-item text-center font-weight-sembold user pt-0"
                                                data-toggle="dropdown">สาธุ มีสุข</a>
                                            <span class="text-center user-semi-title ">Super Admin</span>
                                        </div>
                                        <!-- <div class="dropdown-divider"></div> -->
                                        <a class="dropdown-item" href="login.html">
                                            <i class="dropdown-icon mdi  mdi-logout-variant"></i> ออกจากระบบ
                                        </a>
                                    </div>
                                </div><!-- PROFILE -->
                                <!-- SIDE-MENU -->
                            </div>
                            <a href="#" class="header-toggler d-lg-none ml-lg-0" data-toggle="collapse"
                                data-target="#headerMenuCollapse">
                                <span class="header-toggler-icon"></span>
                            </a>
                        </div>
                    </div>
                </div>`;
    }
}

customElements.define('header-component', Header);

class ResponsiveNavbar extends HTMLElement {
    constructor() {
        super();
    }
    connectedCallback() {
        this.innerHTML = `
                <div class="header header-fixed ">
                    <div class="container-fluid">
                        <div class="d-flex">
                            <a class="header-brand d-md-none" href="index.html">
                                <img src="../assets/images/brand/logo3.png" class="header-brand-img desktop-logo"
                                    alt="Arox logo">
                                <img src="../assets/images/brand/logo3.png" class="header-brand-img mobile-view-logo"
                                    alt="Arox logo">
                            </a>
                            <!-- LOGO -->
                            <a aria-label="Hide Sidebar" class="app-sidebar__toggle ml-0" data-toggle="sidebar"
                                href="#"></a>
                            <div class="d-flex order-lg-2 ml-auto header-right-icons header-search-icon">
                                <a href="#" data-toggle="search" class="nav-link nav-link-lg d-md-none navsearch"><i
                                        class="ion ion-search"></i></a>
                                <div class="dropdown d-sm-flex d-none">
                                    <a class="nav-link icon full-screen-link nav-link-bg">
                                        <i class="ti-arrows-corner" id="fullscreen-button"></i>
                                    </a>
                                </div><!-- FULL-SCREEN -->
                                <div class="dropdown d-sm-flex d-none notifications">
                                    <a class="nav-link icon" data-toggle="dropdown">
                                        <i class="ti-bell"></i>
                                        <span class="nav-unread bg-warning-1 pulse"></span>
                                    </a>
                                    <div class="dropdown-menu dropdown-menu-right  dropdown-menu-arrow">

                                        <a href="#" class="dropdown-item mt-2 d-flex pb-3">
                                            <div class="notifyimg bg-success">
                                                <i class="fa fa-thumbs-o-up"></i>
                                            </div>
                                            <div>
                                                <strong>Someone likes our posts.</strong>
                                                <div class="small">3 hours ago</div>
                                            </div>
                                        </a>
                                        <a href="#" class="dropdown-item d-flex pb-3">
                                            <div class="notifyimg bg-warning">
                                                <i class="fa fa-commenting-o"></i>
                                            </div>
                                            <div>
                                                <strong> 3 New Comments</strong>
                                                <div class="small">5 hour ago</div>
                                            </div>
                                        </a>
                                        <a href="#" class="dropdown-item d-flex pb-3">
                                            <div class="notifyimg bg-danger">
                                                <i class="fa fa-cogs"></i>
                                            </div>
                                            <div>
                                                <strong> Server Rebooted.</strong>
                                                <div class="small">45 mintues ago</div>
                                            </div>
                                        </a>
                                        <div class="dropdown-divider"></div>
                                        <a href="#" class="dropdown-item text-center">View all Notification</a>
                                    </div>
                                </div><!-- NOTIFICATIONS -->

                                <div class="dropdown text-center selector profile-1 d-sm-flex d-none">
                                    <a href="#" data-toggle="dropdown" class="nav-link leading-none d-flex">
                                        <span><img src="../assets/images/faces/female/mock.png" alt="profile-user"
                                                class="avatar brround cover-image mb-1 ml-0"></span>
                                    </a>
                                    <div class="dropdown-menu dropdown-menu-right dropdown-menu-arrow">
                                        <div class="text-center bg-image p-4">
                                            <a href="#" class="dropdown-item text-center font-weight-sembold user pt-0"
                                                data-toggle="dropdown">สาธุ มีสุข</a>
                                            <span class="text-center user-semi-title ">Super Admin</span>
                                        </div>
                                        <!-- <div class="dropdown-divider"></div> -->
                                        <a class="dropdown-item" href="login.html">
                                            <i class="dropdown-icon mdi  mdi-logout-variant"></i> ออกจากระบบ
                                        </a>
                                    </div>
                                </div><!-- PROFILE -->
                                <!-- SIDE-MENU -->
                            </div>
                            <a href="#" class="header-toggler d-lg-none ml-lg-0" data-toggle="collapse"
                                data-target="#headerMenuCollapse">
                                <span class="header-toggler-icon"></span>
                            </a>
                        </div>
                    </div>
                </div>`;
    }
}

customElements.define('responsive-navbar', ResponsiveNavbar);