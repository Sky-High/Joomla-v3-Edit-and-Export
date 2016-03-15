<?php
/**
 * @package     Joomla.Administrator
 * @subpackage  com_helloworld
 *
 * @copyright   Copyright (C) 2005 - 2015 Open Source Matters, Inc. All rights reserved.
 * @license     GNU General Public License version 2 or later; see LICENSE.txt
 */

// No direct access to this file
defined('_JEXEC') or die('Restricted access');
?>
<h1><?php echo $this->item->greeting.(($this->item->category and $this->item->params->get('show_category'))
                                      ? (' ('.$this->item->category.')') : ''); ?>
</h1>

<form action="<?php echo $this->HelloURI; ?>" method="post" id="HelloForm" name="HelloForm">
Greeting: <input type="text" name="greetfield" value="<?php echo $this->item->greeting; ?>">
<input type="submit" value="Update Record">
<?php echo JHtml::_('form.token'); ?>
</form>