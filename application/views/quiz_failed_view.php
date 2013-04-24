<!--------------------------- breadcrumbs ----------------------------->

<div class="row-fluid breadcrumbMargin">
			<div style="background-color: #f0f0f0;" class="span8 offset2 course">
				<div class="span10">
					<ul class="breadcrumb">
					  <li><a href="<?php echo base_url(); ?>courses">Courses</a> <span class="divider">/</span></li>
					  <li ><a href="<?php echo base_url(); ?>lessons/view/<?php echo $lessons[0]->lesson_ID ?>"><?php echo $course[0]->title ?></a><span class="divider">/</span></li>
					  <li class="active"><a href="<?php echo base_url(); ?>lessons/lessonExplorer/<?php echo $lessons[0]->lesson_ID ?>/<?php echo $course[0]->course_ID ?>"><?php echo $lessons[0]->title ?></a><span class="divider">/</span></li>
					  <li class="active"><?php echo $quiz[0]->title ?></li>
					</ul>
				</div>
				<div class="span2">
					<a href="#addQuestionModal" data-toggle="modal"><button class="btn btn btn-success">Add Question</button></a>
				</div>
			</div>
	</div> 

<!---------------------- body ------------------->
<div class="row-fluid">
	<h1>failed</h1>
	<h1>wrong <?php echo $wrong_count ?></h1>
	<h1>right <?php echo $right_count ?></h1>
</div>