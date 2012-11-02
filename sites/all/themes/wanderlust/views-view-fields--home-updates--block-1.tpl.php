<?php
// $Id: views-view-fields.tpl.php,v 1.6 2008/09/24 22:48:21 merlinofchaos Exp $
/**
 * @file views-view-fields.tpl.php
 * Default simple view template to all the fields as a row.
 *
 * - $view: The view in use.
 * - $fields: an array of $field objects. Each one contains:
 *   - $field->content: The output of the field.
 *   - $field->raw: The raw data for the field, if it exists. This is NOT output safe.
 *   - $field->class: The safe class id to use.
 *   - $field->handler: The Views field handler object controlling this field. Do not use
 *     var_export to dump this object, as it can't handle the recursion.
 *   - $field->inline: Whether or not the field should be inline.
 *   - $field->inline_html: either div or span based on the above flag.
 *   - $field->separator: an optional separator that may appear before a field.
 * - $row: The raw result object from the query, with all data it fetched.
 *
 * @ingroup views_templates
 */
?>
<?php foreach ($fields as $id => $field): ?>
  <?php if (!empty($field->separator)): ?>
    <?php print $field->separator; ?>
  <?php endif; ?>

  <<?php print $field->inline_html;?> class="views-field-<?php print $field->class; ?>">
    <?php if ($field->label): ?>
      <label class="views-label-<?php print $field->class; ?>">
        <?php print $field->label; ?>:
      </label>
    <?php endif; ?>
      <?php
      // $field->element_type is either SPAN or DIV depending upon whether or not
      // the field is a 'block' element type or 'inline' element type.
      ?>
      <<?php print $field->element_type; ?> class="field-content"><?php print $field->content; ?></<?php print $field->element_type; ?>>
  </<?php print $field->inline_html;?>>
<?php endforeach; ?>

<div class="social-share clearfix">
	<div class="fbshare">
	  <fb:like href="<?php echo url('node/' . $row->nid, array('absolute' => TRUE)); ?>" layout="box_count" show_faces="true" width="90"></fb:like>
		<?php /* ?><iframe src="http://www.facebook.com/widgets/like.php?href=<?php echo url('node/' . $row->nid, array('absolute' => TRUE)); ?>&amp;layout=box_count" scrolling="no" frameborder="0" style="border:none; width:90px; height:65px"></iframe> <?php */ ?>
	</div>
	<div class="twshare">
		<script src="http://platform.twitter.com/widgets.js" type="text/javascript"></script>
		<a href="http://twitter.com/share?url=<?php echo url('node/' . $row->nid, array('absolute' => TRUE)); ?>" class="twitter-share-button" data-count="vertical" target="_blank">Tweet</a>
	</div>
</div>
