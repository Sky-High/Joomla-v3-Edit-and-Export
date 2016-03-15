RawFormatSubmitbutton = function(task)
{
	var admform	= document.forms['adminForm'];
	if(admform == null) {
		alert('no adminForm defined');
		return;
	}
	var fmt		= admform.elements.namedItem('format');
	if ((fmt == null) || (fmt.tagName != 'INPUT')) {
		fmt		= document.createElement('input');
		fmt.name	= 'format';
		fmt.type	= 'hidden';
		admform.appendChild(fmt);
	}
	fmt.value	= 'raw';
	Joomla.submitform(task);
}