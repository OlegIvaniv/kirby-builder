<?php foreach($field->entries() as $entry): ?>
<div class="structure-entry structure-entry-<?php echo strtolower($entry->_fieldset()) ?>" id="structure-entry-<?php echo $entry->id() ?>">
  <div class="structure-entry-content text">
    <?php if($field->fieldsets() && isset($field->fieldsets()[$entry->_fieldset()])) : ?>
    <label class="builder-entry-fieldset"><?php echo html($field->fieldset($entry->_fieldset())->label()) ?></label>
    <?php endif ?>
    <?php echo $field->entry($entry) ?>
  </div>
  <?php if(!$field->readonly()): ?>
  <nav class="structure-entry-options cf">
    <a data-modal class="btn btn-with-icon structure-edit-button" href="<?php __($field->url($entry->id() . '/update')) ?>">
      <?php i('pencil', 'left') . _l('fields.structure.edit') ?>
    </a>

    <a data-modal class="btn btn-with-icon structure-delete-button" href="<?php __($field->url($entry->id() . '/delete')) ?>">
      <?php i('trash-o', 'left') . _l('fields.structure.delete') ?>
    </a>
  </nav>
  <?php endif ?>
</div>          
<?php endforeach ?>