<?php
<<<<<<< HEAD
=======
// $Id: views-view-grid.tpl.php,v 1.3.4.1 2010/03/12 01:05:46 merlinofchaos Exp $
>>>>>>> 11c42aacd2cce208210c8578843c892e1112f1a8
/**
 * @file views-view-grid.tpl.php
 * Default simple view template to display a rows in a grid.
 *
 * - $rows contains a nested array of rows. Each row contains an array of
 *   columns.
<<<<<<< HEAD
 * - $class contains the class of the table.
 * - $attributes contains other attributes for the table.
=======
 *
>>>>>>> 11c42aacd2cce208210c8578843c892e1112f1a8
 * @ingroup views_templates
 */
?>
<?php if (!empty($title)) : ?>
  <h3><?php print $title; ?></h3>
<?php endif; ?>
<<<<<<< HEAD
<table class="<?php print $class; ?>"<?php print $attributes; ?>>
=======
<table class="views-view-grid">
>>>>>>> 11c42aacd2cce208210c8578843c892e1112f1a8
  <tbody>
    <?php foreach ($rows as $row_number => $columns): ?>
      <?php
        $row_class = 'row-' . ($row_number + 1);
        if ($row_number == 0) {
          $row_class .= ' row-first';
        }
        if (count($rows) == ($row_number + 1)) {
          $row_class .= ' row-last';
        }
      ?>
      <tr class="<?php print $row_class; ?>">
        <?php foreach ($columns as $column_number => $item): ?>
<<<<<<< HEAD
          <td class="<?php print $column_classes[$row_number][$column_number]; ?>">
=======
          <td class="<?php print 'col-'. ($column_number + 1); ?>">
>>>>>>> 11c42aacd2cce208210c8578843c892e1112f1a8
            <?php print $item; ?>
          </td>
        <?php endforeach; ?>
      </tr>
    <?php endforeach; ?>
  </tbody>
</table>
