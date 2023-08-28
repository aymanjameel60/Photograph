	
			<!-- Sidebar -->
			<div class="sidebar" id="sidebar">
				<div class="sidebar-inner slimscroll">
					<div id="sidebar-menu" class="sidebar-menu">
						<ul>
							<li class="submenu-open">
								<h6 class="submenu-hdr">Main</h6>
								<ul>
									<li class="active">
										<a href="#" ><i data-feather="grid"></i><span>Dashboard</span></a>
									</li>
									{{-- <li class="submenu">
										<a href="javascript:void(0);"><i data-feather="smartphone"></i><span>Application</span><span class="menu-arrow"></span></a>
										<ul>
											<li><a href="chat.html">Chat</a></li>
											<li><a href="calendar.html">Calendar</a></li>
											<li><a href="email.html">Email</a></li>
										</ul>
									</li> --}}
								</ul>								
							</li>
							{{-- <li class="submenu-open">
								<h6 class="submenu-hdr">Products</h6>
								<ul>
									<li><a href="productlist.html"><i data-feather="box"></i><span>Products</span></a></li>
									<li><a href="addproduct.html"><i data-feather="plus-square"></i><span>Create Product</span></a></li>
									<li><a href="categorylist.html"><i data-feather="codepen"></i><span>Category</span></a></li>
									<li><a href="brandlist.html"><i data-feather="tag"></i><span>Brands</span></a></li>
									<li><a href="subcategorylist.html"><i data-feather="speaker"></i><span>Sub Category</span></a></li>									
									<li><a href="barcode.html"><i data-feather="align-justify"></i><span>Print Barcode</span></a></li>
									<li><a href="importproduct.html"><i data-feather="minimize-2"></i><span>Import Products</span></a></li>
								</ul>
							</li>
							<li class="submenu-open">
								<h6 class="submenu-hdr">Sales</h6>
								<ul>
									<li><a href="saleslist.html"><i data-feather="shopping-cart"></i><span>Sales</span></a></li>
									<li><a href="invoicereport.html"><i data-feather="file-text"></i><span>Invoices</span></a></li>
									<li><a href="salesreturnlists.html"><i data-feather="copy"></i><span>Sales Return</span></a></li>	
									<li><a href="quotationList.html"><i data-feather="save"></i><span>Quotation</span></a></li>								
									<li><a href="pos.html"><i data-feather="hard-drive"></i><span>POS</a></li>
									<li class="submenu">
										<a href="javascript:void(0);"><i data-feather="shuffle"></i><span>Transfer</span><span class="menu-arrow"></span></a>
										<ul>
											<li><a href="transferlist.html">Transfer List</a></li>
											<li><a href="importtransfer.html">Import Transfer </a></li>
										</ul>
									</li>
									<li class="submenu">
										<a href="javascript:void(0);"><i data-feather="corner-up-left"></i><span>Return</span><span class="menu-arrow"></span></a>
										<ul>
											<li><a href="salesreturnlist.html">Sales Return</a></li>
											<li><a href="purchasereturnlist.html">Purchase Return</a></li>
										</ul>
									</li>
								</ul>
							</li>
							<li class="submenu-open">
								<h6 class="submenu-hdr">Purchases</h6>
								<ul>
									<li><a href="purchaselist.html"><i data-feather="shopping-bag"></i><span>Purchases</span></a></li>
									<li><a href="importpurchase.html"><i data-feather="minimize-2"></i><span>Import Purchases</span></a></li>
									<li><a href="purchaseorderreport.html"><i data-feather="file-minus"></i><span>Purchase Order</span></a></li>
									<li><a href="purchasereturnlist.html"><i data-feather="refresh-cw"></i><span>Purchase Return</span></a></li>									
								</ul>
							</li>
							<li class="submenu-open">
								<h6 class="submenu-hdr">Finance & Accounts</h6>								
								<ul>
									<li class="submenu">
										<a href="javascript:void(0);"><i data-feather="file-text"></i><span>Expense</span><span class="menu-arrow"></span></a>
										<ul>
											<li><a href="expenselist.html">Expenses</a></li>
											<li><a href="expensecategory.html">Expense Category</a></li>
										</ul>
									</li>
									
								</ul>
							</li>
							<li class="submenu-open">
								<h6 class="submenu-hdr">Peoples</h6>		
								<ul>
									<li><a href="customerlist.html"><i data-feather="user"></i><span>Customers</span></a></li>
									<li><a href="supplierlist.html"><i data-feather="users"></i><span>Suppliers</span></a></li>
									<li><a href="userlist.html"><i data-feather="user-check"></i><span>Users</span></a></li>
									<li><a href="storelist.html"><i data-feather="home"></i><span>Stores</span></a></li>
								</ul>
							</li> --}}
                            <li class="submenu-open">
								<h6 class="submenu-hdr">Shipments</h6>
								<ul>
									<li><a href="{{route('shipment.index')}}"><i class="fas fa-shipping-fast"> </i> <span>All Shipment</span></a></li>
									<li><a href="{{route('shipment.create')}}"><i class="fas fa-shipping-fast"> </i> <span>New Shipment</span></a></li>
								</ul>
							</li>															
                            <li class="submenu-open">
								<h6 class="submenu-hdr">Addresses</h6>
								<ul>
									<li><a href="{{route('address.index')}}"><i class="fe fe-map-pin mr-2" data-bs-toggle="tooltip" title="" data-bs-original-title="All Addresses" aria-label="fe fe-map-pin"></i><span class="ml-2"> All Address</span></a></li>
									<li><a href="{{route('address.create')}}"><i class="fe fe-map-pin mr-2" data-bs-toggle="tooltip" title="" data-bs-original-title="Add New Address" aria-label="fe fe-map-pin"></i><span class="ml-2"> New Address</span></a></li>
								</ul>
							</li>															

							<li class="submenu-open">
								<h6 class="submenu-hdr">Reports</h6>
								<ul>
									<li><a href="#"><i data-feather="bar-chart-2"></i><span>Shipment Report</span></a></li>
									{{-- <li><a href="#"><i data-feather="pie-chart"></i><span>Purchase report</span></a></li>
									<li><a href="#"><i data-feather="credit-card"></i><span>Inventory Report</span></a></li>									
									<li><a href="#"><i data-feather="file"></i><span>Invoice Report</span></a></li>
									<li><a href="#"><i data-feather="bar-chart"></i><span>Purchase Report</span></a></li>
									<li><a href="#"><i data-feather="database"></i><span>Supplier Report</span></a></li>
									<li><a href="#"><i data-feather="pie-chart"></i><span>Customer Report</span></a></li> --}}
								</ul>
							</li>															
							<li class="submenu-open">
								<h6 class="submenu-hdr">User Management</h6>		
								<ul>
									<li class="submenu">
										<a href="javascript:void(0);"><i data-feather="users"></i><span>Manage Users</span><span class="menu-arrow"></span></a>
										<ul>
											<li><a href="#">New User </a></li>
											<li><a href="#">Users List</a></li>
										</ul>
									</li>
								</ul>
							</li>			
							{{-- <li class="submenu-open">
								<h6 class="submenu-hdr">Pages</h6>		
								<ul>
									<li class="submenu">
										<a href="javascript:void(0);"><i data-feather="shield"></i><span>Authentication</span><span class="menu-arrow"></span></a>
										<ul>
											<li><a href="#">Log in</a></li>
											<li><a href="#">Register</a></li>
											<li><a href="#">Forgot Password</a></li>
											<li><a href="#">Reset Password</a></li>
										</ul>
									</li>
									<li class="submenu">
										<a href="javascript:void(0);"><i data-feather="file-minus"></i><span>Error Pages</span><span class="menu-arrow"></span></a>
										<ul>
											<li><a href="error-#">404 Error </a></li>
											<li><a href="error-#">500 Error </a></li>
										</ul>
									</li>
									<li class="submenu">
										<a href="javascript:void(0);"><i data-feather="map"></i><span>Places</span><span class="menu-arrow"></span></a>
										<ul>
											<li><a href="#">Countries</a></li>
											<li><a href="#">States</a></li>
										</ul>
									</li>
									<li>
										<a href="#" ><i data-feather="file"></i><span>Blank Page</span> </a>
									</li>
									<li>
										<a href="#" ><i data-feather="pen-tool"></i><span>Components</span> </a>
									</li>
								</ul>
							</li>
							<li class="submenu-open">
								<h6 class="submenu-hdr">UI Interface</h6>		
								<ul>
									<li class="submenu">
										<a href="javascript:void(0);"><i data-feather="layers"></i><span>Elements</span><span class="menu-arrow"></span></a>
										<ul>
											<li><a href="#">Sweet Alerts</a></li>
											<li><a href="#">Tooltip</a></li>
											<li><a href="#">Popover</a></li>
											<li><a href="#">Ribbon</a></li>
											<li><a href="#">Clipboard</a></li>
											<li><a href="drag-#">Drag & Drop</a></li>
											<li><a href="#">Range Slider</a></li>
											<li><a href="#">Rating</a></li>
											<li><a href="#">Toastr</a></li>
											<li><a href="text-#">Text Editor</a></li>
											<li><a href="#">Counter</a></li>
											<li><a href="#">Scrollbar</a></li>
											<li><a href="#">Spinner</a></li>
											<li><a href="#">Notification</a></li>
											<li><a href="#">Lightbox</a></li>
											<li><a href="#">Sticky Note</a></li>
											<li><a href="#">Timeline</a></li>
											<li><a href="form-#">Form Wizard</a></li>
										</ul>
									</li>
									<li  class="submenu">
										<a href="javascript:void(0);"><i data-feather="bar-chart-2"></i><span>Charts</span><span class="menu-arrow"></span></a>
										<ul>
											<li><a href="chart-#">Apex Charts</a></li>
											<li><a href="chart-#">Chart Js</a></li>
											<li><a href="chart-#">Morris Charts</a></li>
											<li><a href="chart-flot.html">Flot Charts</a></li>
											<li><a href="chart-peity.html">Peity Charts</a></li>
										</ul>
									</li>
									<li  class="submenu">
										<a href="javascript:void(0);"><i data-feather="database"></i><span>Icons</span><span class="menu-arrow"></span></a>
										<ul>
											<li><a href="icon-fontawesome.html">Fontawesome Icons</a></li>
											<li><a href="icon-feather.html">Feather Icons</a></li>
											<li><a href="icon-ionic.html">Ionic Icons</a></li>
											<li><a href="icon-material.html">Material Icons</a></li>
											<li><a href="icon-pe7.html">Pe7 Icons</a></li>
											<li><a href="icon-simpleline.html">Simpleline Icons</a></li>
											<li><a href="icon-themify.html">Themify Icons</a></li>
											<li><a href="icon-weather.html">Weather Icons</a></li>
											<li><a href="icon-typicon.html">Typicon Icons</a></li>
											<li><a href="icon-flag.html">Flag Icons</a></li>
										</ul>
									</li>
									<li  class="submenu">
										<a href="javascript:void(0);"><i data-feather="edit"></i><span>Forms</span><span class="menu-arrow"></span></a>
										<ul>
											<li><a href="form-basic-inputs.html">Basic Inputs </a></li>
											<li><a href="form-input-groups.html">Input Groups </a></li>
											<li><a href="form-horizontal.html">Horizontal Form </a></li>
											<li><a href="form-vertical.html"> Vertical Form </a></li>
											<li><a href="form-mask.html">Form Mask </a></li>
											<li><a href="form-validation.html">Form Validation </a></li>
											<li><a href="form-select2.html">Form Select2 </a></li>
											<li><a href="form-fileupload.html">File Upload </a></li>
										</ul>
									</li>
									<li  class="submenu">
										<a href="javascript:void(0);"><i data-feather="columns"></i><span>Tables</span><span class="menu-arrow"></span></a>
										<ul>
											<li><a href="tables-basic.html">Basic Tables </a></li>
											<li><a href="data-tables.html">Data Table </a></li>
										</ul>
									</li>
								</ul>
							</li> --}}
							<li class="submenu-open">
								<h6 class="submenu-hdr">Settings</h6>		
								<ul>
									<li class="submenu">
										<a href="javascript:void(0);"><i data-feather="settings"></i><span>Settings</span><span class="menu-arrow"></span></a>
										<ul>
											<li><a href="generalsettings.html">General Settings</a></li>
											<li><a href="emailsettings.html">Email Settings</a></li>
											<li><a href="paymentsettings.html">Payment Settings</a></li>
											<li><a href="currencysettings.html">Currency Settings</a></li>
											<li><a href="grouppermissions.html">Group Permissions</a></li>
											<li><a href="taxrates.html">Tax Rates</a></li>
										</ul>
									</li>
									<li>
                                        <form action="{{route('logout')}}" method="POST">
                                            @csrf
                                            <button type="submit" class="logoutbtn">
                                                <a href="#" ><i data-feather="log-out"></i><span>Logout</span> </a>
                                            </button>

                                        </form>
									</li>
								</ul>
							</li>
						</ul>
					</div>
				</div>
			</div>
			<!-- /Sidebar -->