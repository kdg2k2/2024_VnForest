/**
 * @license Copyright (c) 2003-2022, CKSource Holding sp. z o.o. All rights reserved.
 * For licensing, see https://ckeditor.com/legal/ckeditor-oss-license
 */

CKEDITOR.editorConfig = function( config ) {
    config.extraPlugins = 'image2';
	config.filebrowserBrowseUrl = "/ckfinder/ckfinder.html";
    config.filebrowserImageBrowseUrl = "/ckfinder/ckfinder.html?type=Images";
    config.filebrowserFlashBrowseUrl = "/ckfinder/ckfinder.html?type=Flash";
    config.filebrowserUploadUrl = "/ckfinder/core/connector/aspx/connector.aspx?command=QuickUpload&type=Files";
    config.filebrowserImageUploadUrl = "/ckfinder/core/connector/aspx/connector.aspx?command=QuickUpload&type=Images";
    config.filebrowserFlashUploadUrl = "/ckfinder/core/connector/aspx/connector.aspx?command=QuickUpload&type=Flash";
};
