<?php
/** @var \VerteXVaaR\BlueSprints\Mvc\TemplateHelper $templateHelper */
$templateHelper->requireLayout('Basic/Html', ['pageTitle' => 'Hi dude!']);
?>

<section>

	<h2>Plant a tree!</h2>

	<p>
		Create a new Tree object. After the Tree has been planted, it will grow branches and
		each branch will grow some leaves.
	</p>

	<form action="createTree" method="post">
		<p>
			<label>
				Tree genus
				<input type="text" name="genus"/>
			</label>
		</p>

		<p>
			<label>
				Number of Branches to grow:
				<input type="text" name="numberOfBranches">
			</label>
		</p>
		<input type="submit" value="Plant Tree">
	</form>
</section>
