<div class="container">
	<div class="row justify-content-center">
		<div class="col-xl-10 col-lg-11">
			<div class="page-header">
				<h1>Adventist Commons</h1>
				<p class="lead">Contribute to a project below or browse <a href="/products" class="text-secondary">other available products</a> for more books and resources.</p>
			</div>
			<hr>
			<div class="content-list">
				<div class="row content-list-head">
					<div class="col-auto">
						<h3>Translations In Progress</h3>
					</div>
					<div class="col-auto">
						<div class="dropdown">
							<button class="btn btn-sm btn-secondary dropdown-toggle" type="button" data-toggle="dropdown">
								<i class="material-icons align-top">language</i> All Languages
							</button>
							<div class="dropdown-menu">
								<a class="dropdown-item" href="#">Spanish</a>
								<a class="dropdown-item" href="#">French</a>
							</div>
						</div>
					</div>
				</div>
				<!--end of content list head-->
				<div class="content-list-body row">
					<?php foreach( $projects as $project ) { ?>
						<div class="col-lg-6">
							<div class="card card-project">

								<div class="progress">
									<div class="progress-bar bg-success" role="progressbar" style="width: <?php echo $project["percent_complete"]; ?>%"></div>
								</div>

								<div class="card-body">
									<?php if( $this->ion_auth->is_admin() ) { ?>
										<div class="dropdown card-options">
											<button class="btn-options" type="button" data-toggle="dropdown">
												<i class="material-icons">more_vert</i>
											</button>
											<div class="dropdown-menu dropdown-menu-right">
												<a href="/projects/delete/<?php echo $project["id"]; ?>" class="dropdown-item confirm-dialog" data-confirm-message="Are you sure? All translated content will be destroyed.">Delete</a>
											</div>
										</div>
									<?php } ?>
									<div class="card-title">
										<a href="/projects/<?php echo $project["id"]; ?>">
											<h5 data-filter-by="text"><?php echo $project["product_name"]; ?><span class="badge badge-light text-secondary ml-1"><?php echo $project["language_name"]; ?></span></h5>
										</a>
									</div>
									<ul class="avatars">
										<?php foreach( $project["members"] as $member ) { ?>
											<li>
												<a href="#" data-toggle="tooltip" title="<?php $member["first_name"] . " " . $member["last_name"]; ?>">
													<img class="avatar" src="<?php echo "https://www.gravatar.com/avatar/" . md5( strtolower( trim( $member["email"] ) ) ) . "?s=80&d=mp"; ?>" data-filter-by="alt" />
												</a>
											</li>
										<?php } ?>
									</ul>
									<div class="card-meta d-flex justify-content-between">
										<div class="d-flex align-items-center">
											<i class="material-icons mr-1">playlist_add_check</i>
											<span class="text-small"><?php echo $project["completed_strings"] . " / " . $project["total_strings"]; ?></span>
										</div>
										<span class="text-small" data-filter-by="text"><?php echo $project["status"]; ?></span>
									</div>
								</div>
							</div>
						</div>
					<?php } ?>
				</div>
				<!--end of content list body-->
			</div>
		</div>
	</div>
</div>