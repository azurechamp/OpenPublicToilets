
		<div id="node-<?php print $node->nid ?>" class="node-child<?php if ($sticky) { print ' sticky'; } ?><?php if (!$status) { print ' node-unpublished'; } ?> clear-block">
		  <?php if ($page == 0) { ?>
			<h2 class="title"><a href="<?php print $node_url ?>"><?php print $title ?></a></h2>
		  <?php } ?>
		  <?php if ($picture) { ?>
			<?php print $picture ?>
		  <?php } ?>
		  <div id="profile-header"></div>
		  <div class="content"><?php print $content ?></div>
		  <div class="meta clear-block">
			<?php if ($links) { ?>
			  <div class="meta-links"><?php print $links ?></div>
			<?php } ?>
			<?php if ($submitted) { ?>
			  <div class="submitted">
				<?php //print $submitted ?>
				<?php print t('!date | !username', array('!username' => theme('username', $node), '!date' => format_date($node->created))) ?>
			  </div>
			<?php } ?>
			<?php if ($terms || $taxonomy) { ?>
			  <div class="terms"><?php print $terms ?></div>
			<?php } ?>
		  </div>
		</div>
