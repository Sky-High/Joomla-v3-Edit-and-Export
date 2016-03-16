# Joomla3 HelloWorld Data Entry and Export
This tutorial aims to provide a guideline for creating a component for your Joomla website that enables users to update data in the database and download data as a file. This can be used for instance as base for an address book.

This guide continues from the tutorial 'Developing an MVC Component' (aka the 'Hello World' tutorial) from this Joomla site: https://docs.joomla.org/J3.x:Developing_an_MVC_Component.

As of version 1-19 this tutorial support export of userdata from the database using the PHPExcel package. See https://github.com/PHPOffice/PHPExcel.


Version history:

v1-19 2016-03	add excel xlsx export, based on the PHPExcel package

v1-18 2016-03	improved export function

v1-17 2016-03	add a first stab for csv export of the database data

v1-16 2016-03	add data entry

v1-15 2016-03	initial version based on https://github.com/scionescire/Joomla-3.2-Hello-World-Component/archive/step-15-adding-an-install-uninstall-update-script-file.zip