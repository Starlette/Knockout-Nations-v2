<?php
    $link = $_SERVER['PHP_SELF'];
    $link_array = explode('/',$link);
    $page = end($link_array);
?>

	<!-- Sidebar -->
	<div class="sidebar" id="sidebar">
		<!-- Logo -->
		<div class="sidebar-logo">
			<a href="index.php" class="logo logo-normal">
				<img src="assets/img/logo.svg" alt="Logo">
			</a>
			<a href="index.php" class="logo-small">
				<img src="assets/img/logo-small.svg" alt="Logo">
			</a>
			<a href="index.php" class="dark-logo">
				<img src="assets/img/logo-white.svg" alt="Logo">
			</a>
		</div>
		<!-- /Logo -->
		
		<div class="sidebar-inner slimscroll">
			<div id="sidebar-menu" class="sidebar-menu">
				<ul>
					<li class="menu-title"><span>MAIN MENU</span></li>
					<li>
						<a href="index.php" class="<?php echo ($page == 'index.php') ? 'active' : ''; ?>"><i class="ti ti-smart-home"></i><span>Dashboard</span></a>
					</li>
					<li>
						<ul>
							<li class="submenu">
								<a href="javascript:void(0);"  class=" <?php echo ($page == 'chat.php'||$page == 'call.php'||$page == 'voice-call.php'||$page == 'video-call.php'||$page == 'outgoing-call.php'||$page == 'incoming-call.php'||$page == 'call-history.php'||$page == 'calendar.php'
								||$page == 'email.php'||$page == 'todo.php'||$page == 'notes.php'||$page == 'social-feed.php'||$page == 'file-manager.php'||$page == 'kanban-view.php'||$page == 'invoices.php') ? 'active subdrop' : ''; ?>">
									<i class="ti ti-layout-grid-add"></i><span>Applications</span>
									<span class="menu-arrow"></span>
								</a>
								<ul>
									<li><a href="chat.php" class="<?php echo ($page == 'chat.php') ? 'active' : ''; ?>">Chat</a></li>
									<li class="submenu submenu-two">
										<a href="call.php"class="<?php echo ($page == 'call.php'||$page == 'voice-call.php'||$page == 'video-call.php'||$page == 'outgoing-call.php'||$page == 'incoming-call.php'||$page == 'call-history.php') ? 'active subdrop' : ''; ?>">Calls<span class="menu-arrow inside-submenu"></span></a>
										<ul>
											<li><a href="voice-call.php" class="<?php echo ($page == 'voice-call.php') ? 'active' : ''; ?>">Voice Call</a></li>
											<li><a href="video-call.php" class="<?php echo ($page == 'video-call.php') ? 'active' : ''; ?>">Video Call</a></li>
											<li><a href="outgoing-call.php" class="<?php echo ($page == 'outgoing-call.php') ? 'active' : ''; ?>">Outgoing Call</a></li>
											<li><a href="incoming-call.php" class="<?php echo ($page == 'incoming-call.php') ? 'active' : ''; ?>">Incoming Call</a></li>
											<li><a href="call-history.php" class="<?php echo ($page == 'call-history.php') ? 'active' : ''; ?>">Call History</a></li>
										</ul>
									</li>
									<li><a href="calendar.php" class="<?php echo ($page == 'calendar.php') ? 'active' : ''; ?>">Calendar</a></li>
									<li><a href="email.php" class="<?php echo ($page == 'email.php') ? 'active' : ''; ?>">Email</a></li>
									<li><a href="todo.php" class="<?php echo ($page == 'todo.php') ? 'active' : ''; ?>">To Do</a></li>
									<li><a href="notes.php" class="<?php echo ($page == 'notes.php') ? 'active' : ''; ?>">Notes</a></li>
									<li><a href="social-feed.php" class="<?php echo ($page == 'social-feed.php') ? 'active' : ''; ?>">Social Feed</a></li>
									<li><a href="file-manager.php" class="<?php echo ($page == 'file-manager.php') ? 'active' : ''; ?>">File Manager</a></li>
									<li><a href="kanban-view.php" class="<?php echo ($page == 'kanban-view.php') ? 'active' : ''; ?>">Kanban</a></li>
									<li><a href="invoices.php" class="<?php echo ($page == 'invoices.php') ? 'active' : ''; ?>">Invoices</a></li>
								</ul>
							</li>
						</ul>
					</li>
					<li class="menu-title"><span>LAYOUT</span></li>
					<li>
						<ul>
							<li class="<?php echo ($page == 'layout-horizontal.php') ? 'active' : ''; ?>">
								<a href="layout-horizontal.php">
									<i class="ti ti-layout-navbar"></i><span>Horizontal</span>
								</a>
							</li>
							<li class="<?php echo ($page == 'layout-detached.php') ? 'active' : ''; ?>">
								<a href="layout-detached.php">
									<i class="ti ti-details"></i><span>Detached</span>
								</a>
							</li>
							<li class="<?php echo ($page == 'layout-modern.php') ? 'active' : ''; ?>">
								<a href="layout-modern.php">
									<i class="ti ti-layout-board-split"></i><span>Modern</span>
								</a>
							</li>
						</ul>
					</li>
					<li class="menu-title"><span>Extras</span></li>
					<li>
						<ul>
							<li class="submenu">
								<a href="javascript:void(0);"><i class="ti ti-menu-2"></i><span>Multi Level</span><span class="menu-arrow"></span></a>
								<ul>
									<li><a href="javascript:void(0);">Multilevel 1</a></li>
									<li class="submenu submenu-two">
										<a href="javascript:void(0);">Multilevel 2<span class="menu-arrow inside-submenu"></span></a>
										<ul>
											<li><a href="javascript:void(0);">Multilevel 2.1</a></li>
											<li class="submenu submenu-two submenu-three">
												<a href="javascript:void(0);">Multilevel 2.2<span class="menu-arrow inside-submenu inside-submenu-two"></span></a>
												<ul>
													<li><a href="javascript:void(0);">Multilevel 2.2.1</a></li>
													<li><a href="javascript:void(0);">Multilevel 2.2.2</a></li>
												</ul>
											</li>
										</ul>
									</li>
									<li><a href="javascript:void(0);">Multilevel 3</a></li>
								</ul>
							</li>
						</ul>
					</li>
				</ul>
			</div>
		</div>
	</div>
	<!-- /Sidebar -->

