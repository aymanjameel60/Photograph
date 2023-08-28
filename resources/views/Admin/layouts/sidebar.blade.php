	
			<!-- Sidebar -->
			<div class="sidebar" id="sidebar">
				<div class="sidebar-inner slimscroll">
					<div id="sidebar-menu" class="sidebar-menu">
						<ul>
							<li class="submenu-open">
 								<ul>
									<li class="{{Request::segment(2) == 'banner' ? 'active' : ''}}">
										<a href="{{route("admin.banner.index")}}" ><i data-feather="grid"></i><span>Banner</span></a>
									</li>
									<li class="{{Request::segment(2) == 'index' ? 'active' : ''}}">
										<a href="{{route("admin.index")}}" ><i data-feather="grid"></i><span>Dashboard</span></a>
									</li>
									<li class="{{Request::segment(2) == 'category' ? 'active' : ''}}">
										<a href="{{route("admin.category.index")}}" ><i data-feather="grid"></i><span>Categories</span></a>
									</li>
									<li class="{{Request::segment(2) == 'gallery' ? 'active' : ''}}">
										<a href="{{route("admin.gallery.index")}}" ><i data-feather="grid"></i><span>Portfolio</span></a>
									</li>
									<li class="{{Request::segment(2) == 'video' ? 'active' : ''}}">
										<a href="{{route("admin.video.index")}}" ><i data-feather="grid"></i><span>Videos</span></a>
									</li>
								</ul>								
							</li>
						</ul>
					</div>
				</div>
			</div>
			<!-- /Sidebar -->