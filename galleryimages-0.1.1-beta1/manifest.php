<?php return array (
  'manifest-version' => '1.1',
  'manifest-attributes' => 
  array (
    'readme' => '# galleryImages

Title: galleryImages
Version: 0.1.1
By: Martin Sanders.

Create a mixed list of single and carousel images using Bootstrap 3 CSS/HTML Frameword, MIGX MODX CMS plugin.

## Setup:

Add new TV with the following settings:

### General Info
Name: 		portfolioImages
Caption: 	Images

### Input Options
input Type:	migx
Form Tabs:

[
	{
		"caption":"Image 1", "fields": [
	    	{"field":"title1","caption":"Title"},
	    	{"field":"introtext1","caption":"Description"},
	    	{"field":"image1","caption":"Image","inputTVtype":"image"}
		]
	},{
		"caption":"Image 2", "fields": [
	    	{"field":"title2","caption":"Title"},
	    	{"field":"introtext2","caption":"Description"},
	    	{"field":"image2","caption":"Image","inputTVtype":"image"}
		]
	},{
		"caption":"Image 3", "fields": [
	    	{"field":"title3","caption":"Title"},
	    	{"field":"introtext3","caption":"Description"},
	    	{"field":"image3","caption":"Image","inputTVtype":"image"}
		]
	},{
		"caption":"Image 4", "fields": [
	    	{"field":"title4","caption":"Title"},
	    	{"field":"introtext4","caption":"Description"},
	    	{"field":"image4","caption":"Image","inputTVtype":"image"}
		]
	},{
		"caption":"Image 5", "fields": [
	    	{"field":"title5","caption":"Title"},
	    	{"field":"introtext5","caption":"Description"},
	    	{"field":"image5","caption":"Image","inputTVtype":"image"}
		]
	},{
		"caption":"Image 6", "fields": [
	    	{"field":"title6","caption":"Title"},
	    	{"field":"introtext6","caption":"Description"},
	    	{"field":"image6","caption":"Image","inputTVtype":"image"}
		]
	},{
		"caption":"Image 7", "fields": [
	    	{"field":"title7","caption":"Title"},
	    	{"field":"introtext7","caption":"Description"},
	    	{"field":"image7","caption":"Image","inputTVtype":"image"}
		]
	},{
		"caption":"Image 8", "fields": [
	    	{"field":"title8","caption":"Title"},
	    	{"field":"introtext8","caption":"Description"},
	    	{"field":"image8","caption":"Image","inputTVtype":"image"}
		]
	},{
		"caption":"Image 9", "fields": [
	    	{"field":"title9","caption":"Title"},
	    	{"field":"introtext9","caption":"Description"},
	    	{"field":"image9","caption":"Image","inputTVtype":"image"}
		]
	},{
		"caption":"Image 10", "fields": [
	    	{"field":"title10","caption":"Title"},
	    	{"field":"introtext10","caption":"Description"},
	    	{"field":"image10","caption":"Image","inputTVtype":"image"}
		]
	},{
		"caption":"Styles", "fields": [
	    	{"field":"style","caption":"Hover Background Colour","inputTVtype":"listbox","inputOptionValues":"Jade==style1||Blue==style2||Green==style3||Bright Green==style4","default":"style1"}
		]
	}
] 

+ Grid Columns:

[
	{"header": "Title", "width": "160", "sortable": "true", "dataIndex": "title1"},
	{"header": "Style", "width": "50", "sortable": "false", "dataIndex": "style"},
	{"header": "Image", "width": "50", "sortable": "false", "dataIndex": "image1","renderer": "this.renderImage"}
]

"Add Item" Replacement:	Add Image

### Template Access
gelleryImages:	Check access

##Example:

MIGX (http://rtfm.modx.com/extras/revo/migx) snippet call:

[[getImageList?
	&tvname=`portfolioImages`
	&toJsonPlaceholder=`jsonoutput`
]]

galleryImages snippet call:

[[galleryImages?
	&data=`[[+jsonoutput]]`
	&carouselRowTpl=`carouselRowTpl`
	&imageRowTpl=`imageRowTpl`
]]

## Snippet parameters:

Key					
data				json data			
carouselRowTpl		Custom carousel row template
imageRowTpl			Custom image row template',
  ),
  'manifest-vehicles' => 
  array (
    0 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modNamespace',
      'guid' => '5747127508f50f7bd63aff27d9c9571d',
      'native_key' => 'galleryimages',
      'filename' => 'modNamespace/aa74be5e238e6e88de4e817929ac2bed.vehicle',
      'namespace' => 'galleryimages',
    ),
    1 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modCategory',
      'guid' => 'd642589aaf39a7179962c0801fc275bd',
      'native_key' => 1,
      'filename' => 'modCategory/8cbb32fbe0a9f3fec86d69a1fe86f85c.vehicle',
      'namespace' => 'galleryimages',
    ),
    2 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOTransportVehicle',
      'class' => 'xPDOTransportVehicle',
      'guid' => '4f741555ff1c927e671e6774f8d4ab4b',
      'native_key' => '4f741555ff1c927e671e6774f8d4ab4b',
      'filename' => 'xPDOTransportVehicle/81ecd0f8b7cd09d5d05857fefb247d64.vehicle',
      'namespace' => 'galleryimages',
    ),
  ),
);